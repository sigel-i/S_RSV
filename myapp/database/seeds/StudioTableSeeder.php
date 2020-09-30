<?php

use Illuminate\Database\Seeder;

class StudioTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            // 'id'=>1,
            'name' => 'リンキィディンクスタジオお茶の水・神保町',
            'email' => 'test@studio.jp',
            'pref' => '東京都',
            'city' => '千代田区',
            'tel' => '03-3294-6909',
            'url' => 'http://rinky.info/studio/',
            'image_url' => 'http://studio-navi.jp/img_photo/pic_main_1/Rinkydinkstudio-1.jpg',
        ];
        DB::table('studios')->insert($param);

        $param = [
            // 'id'=>2,
            'name' => 'サウンドスタジオノア',
            'email' => 'tes2@studio.jp',
            'pref' => '東京都',
            'city' => '渋谷区',
            'tel' => '03-5485-1441',
            'url' => 'https://www.studionoah.jp/shibuya1/',
            'image_url' => 'http://studio-navi.jp/img_photo/pic_main_1/Soundstudionoah-1.jpg',
        ];
        DB::table('studios')->insert($param);
    }
}
