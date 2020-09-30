<?php

use Illuminate\Database\Seeder;

class ReserveTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'id' => 1,
            'artist_id' => '1',
            'room_id' => '1',
            'reserve' => '2020-10-10',
        ];
        DB::table('reserves')->insert($param);

        $param = [
            'id' => 2,
            'artist_id' => '2',
            'room_id' => '3',
            'reserve' => '2020-10-20',
        ];
        DB::table('reserves')->insert($param);

        $param = [
            'id' => 3,
            'artist_id' => '3',
            'room_id' => '5',
            'reserve' => '2020-10-30',
        ];
        DB::table('reserves')->insert($param);
    }
}
