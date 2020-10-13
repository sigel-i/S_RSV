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
            'content' => '良いスタジオ',
            'stars' => '5',
            'studio_id' => '2',
            'user_id' => '3',
        ];
        DB::table('comments')->insert($param);

        $param = [
            'content' => '使い慣れたスタジオ',
            'stars' => '4',
            'studio_id' => '3',
            'user_id' => '3',
        ];
        DB::table('comments')->insert($param);

    }
}
