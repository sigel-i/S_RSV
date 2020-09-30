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
            'Nop' => '5人以上',
        ];
        DB::table('rooms')->insert($param);

        $param = [
            // 'id'=>2,
            'name' => '2st',
            'studio_id' => '1',
            'tatami_mats' => '11帖',
            'Nop' => '5人以上',
        ];
        DB::table('rooms')->insert($param);

        $param = [
            // 'id'=>3,
            'name' => 'A3st',
            'studio_id' => '2',
            'tatami_mats' => '7.5帖',
            'Nop' => '3人',
        ];
        DB::table('rooms')->insert($param);

        $param = [
            // 'id'=>4,
            'name' => 'A5st',
            'studio_id' => '2',
            'tatami_mats' => '10帖',
            'Nop' => '4人',
        ];
        DB::table('rooms')->insert($param);
    }
}
