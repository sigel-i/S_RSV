<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\CSVimport;
use SplFileObject;

class CSVimportsController extends Controller
{
    protected $csvimport = null;

    public function __construct(CSVimport $csvimport)
   {
       $this->csvimport = $csvimport;
   }


   public function index()
   {
       return view('welcome');
   }

   /**
    * CSVインポート
    *
    * @param  Request
    * @return \Illuminate\Http\Response
    */
    public function import(Request $request)
    {

    //全件削除
    // CSVimport::truncate();

    // ロケールを設定(日本語に設定)
    setlocale(LC_ALL, 'ja_JP.UTF-8');

    // アップロードしたファイルを取得
    // 'csv_file' はビューの inputタグのname属性
    $uploaded_file = $request->file('csv_file');

    // アップロードしたファイルの絶対パスを取得
    $file_path = $request->file('csv_file')->path($uploaded_file);

    //SplFileObjectを生成
    $file = new SplFileObject($file_path);

    //SplFileObject::READ_CSV が最速らしい
    $file->setFlags(SplFileObject::READ_CSV);

    $array = [];

    $row_count = 1;

    //取得したオブジェクトを読み込み
    foreach ($file as $row)
    {
        // 最終行の処理(最終行が空っぽの場合の対策
        if ($row === [null]) continue;

        // 1行目のヘッダーは取り込まない
        if ($row_count > 1)
        {
            // CSVの文字コードがSJISなのでUTF-8に変更
            $name = mb_convert_encoding($row[0], 'UTF-8', 'SJIS');
            $email = mb_convert_encoding($row[1], 'UTF-8', 'SJIS');
            $pref = mb_convert_encoding($row[2], 'UTF-8', 'SJIS');
            $city = mb_convert_encoding($row[3], 'UTF-8', 'SJIS');
            $tel = mb_convert_encoding($row[4], 'UTF-8', 'SJIS');
            $url = mb_convert_encoding($row[5], 'UTF-8', 'SJIS');
            $image_url = mb_convert_encoding($row[6], 'UTF-8', 'SJIS');

            $csvimport_array = [
                'name' => $name,
                'email' => $email,
                'pref' => $pref,
                'city' => $city,
                'tel' => $tel,
                'url' => $url,
                'image_url' => $image_url

            ];

            // つくった配列の箱($array)に追加
            array_push($array, $csvimport_array);


                // 数が多いと処理重すぎなのでバルクインサートに切り替える
                // CSVimport::insert(array(
                //     'name' => $name,
                //     'email' => $email,
                //     'pref' => $pref,
                //     'city' => $city,
                //     'tel' => $tel,
                //     'url' => $url,
                //     'image_url' => $image_url
                // ));
        }
        $row_count++;
    }

        //追加した配列の数を数える
        $array_count = count($array);

        //もし配列の数が500未満なら
        if ($array_count < 500){

            //配列をまるっとインポート(バルクインサート)
            csvimport::insert($array);


        } else {

            //追加した配列が500以上なら、array_chunkで500ずつ分割する
            $array_partial = array_chunk($array, 500); //配列分割

            //分割した数を数えて
            $array_partial_count = count($array_partial); //配列の数

            //分割した数の分だけインポートを繰り替えす
            for ($i = 0; $i <= $array_partial_count - 1; $i++){

                csvimport::insert($array_partial[$i]);

            }

        }
    }
}
