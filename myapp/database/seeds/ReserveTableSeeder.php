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
            'artist_id' => '1',
            'room_id' => '1',
            'rsvday' => '2020-10-10',
            'rsvtime_first' => '14:00',
            'rsvtime_end' => '16:00',
        ];
        DB::table('reserves')->insert($param);

        $param = [
            'artist_id' => '6',
            'room_id' => '2',
            'rsvday' => '2020-10-17',
            'rsvtime_first' => '12:00',
            'rsvtime_end' => '15:00',
        ];
        DB::table('reserves')->insert($param);

        $param = [
            'artist_id' => '2',
            'room_id' => '2',
            'rsvday' => '2020-10-17',
            'rsvtime_first' => '15:00',
            'rsvtime_end' => '18:00',
        ];
        DB::table('reserves')->insert($param);

        $param = [
            'artist_id' => '3',
            'room_id' => '3',
            'rsvday' => '2020-10-24',
            'rsvtime_first' => '12:00',
            'rsvtime_end' => '15:00',
        ];
        DB::table('reserves')->insert($param);

        $param = [
            'artist_id' => '4',
            'room_id' => '7',
            'rsvday' => '2020-10-17',
            'rsvtime_first' => '14:00',
            'rsvtime_end' => '16:00',
        ];
        DB::table('reserves')->insert($param);

        $param = [
            'artist_id' => '5',
            'room_id' => '10',
            'rsvday' => '2020-11-18',
            'rsvtime_first' => '14:00',
            'rsvtime_end' => '17:00',
        ];
        DB::table('reserves')->insert($param);

    }
}
