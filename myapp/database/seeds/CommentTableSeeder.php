<?php

use Illuminate\Database\Seeder;

class CommentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'content' => 'エレベーターが一基しか無いのが厳しい',
            'stars' => '4',
            'studio_id' => '1',
            'user_id' => '1',
        ];
        DB::table('comments')->insert($param);

        $param = [
            'content' => 'Marshall JCM800があるのは嬉しい',
            'stars' => '5',
            'studio_id' => '1',
            'user_id' => '1',
        ];
        DB::table('comments')->insert($param);

        $param = [
            'content' => '良いスタジオ',
            'stars' => '5',
            'studio_id' => '2',
            'user_id' => '2',
        ];
        DB::table('comments')->insert($param);

        $param = [
            'content' => 'スタジオが綺麗',
            'stars' => '5',
            'studio_id' => '2',
            'user_id' => '2',
        ];
        DB::table('comments')->insert($param);

        $param = [
            'content' => '使い慣れたスタジオ',
            'stars' => '4',
            'studio_id' => '3',
            'user_id' => '1',
        ];
        DB::table('comments')->insert($param);

        $param = [
            'content' => 'Orangeアンプがあるから使っている',
            'stars' => '4',
            'studio_id' => '3',
            'user_id' => '1',
        ];
        DB::table('comments')->insert($param);

        $param = [
            'content' => '照明などがあり、ライブ感を演出できる',
            'stars' => '5',
            'studio_id' => '4',
            'user_id' => '1',
        ];
        DB::table('comments')->insert($param);

        $param = [
            'content' => '安定のスタジオ',
            'stars' => '5',
            'studio_id' => '4',
            'user_id' => '1',
        ];
        DB::table('comments')->insert($param);

        $param = [
            'content' => 'アンプが調子が悪い時がある',
            'stars' => '2',
            'studio_id' => '5',
            'user_id' => '1',
        ];
        DB::table('comments')->insert($param);

        $param = [
            'content' => 'このスタジオが好き',
            'stars' => '5',
            'studio_id' => '5',
            'user_id' => '1',
        ];
        DB::table('comments')->insert($param);

    }
}
