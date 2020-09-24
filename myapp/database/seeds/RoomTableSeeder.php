<?php

use Illuminate\Database\Seeder;

class RoomTableSeeder extends Seeder
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
            'name' => '1st',
            'studio_id' => '1',
            'tatami_mats' => '22帖',
        ];
        DB::table('rooms')->insert($param);

        $param = [
            // 'id'=>1,
            'name' => '2st',
            'studio_id' => '1',
            'tatami_mats' => '11帖',
        ];
        DB::table('rooms')->insert($param);

        $param = [
            // 'id'=>3,
            'name' => 'A3st',
            'studio_id' => '2',
            'tatami_mats' => '7.5帖',
        ];
        DB::table('rooms')->insert($param);

        $param = [
            // 'id'=>4,
            'name' => 'A5st',
            'studio_id' => '2',
            'tatami_mats' => '10帖',
        ];
        DB::table('rooms')->insert($param);
    }
}
