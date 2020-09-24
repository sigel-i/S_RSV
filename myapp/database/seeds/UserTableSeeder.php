<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'id'=>1,
            'name' => 'ishii',
            'email' => 'sigel@ishii.jp',
            'password' => 'aaa',
        ];
        DB::table('users')->insert($param);

        $param = [
            'id'=>2,
            'name' => 'sigel',
            'email' => 'ishii@sigel.jp',
            'password' => 'bbb',
        ];
        DB::table('users')->insert($param);

    }
}
