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
            'name' => '1st',
            'studio_id' => '1',
            'tatami_mats' => '22帖',
            'roomsize' => '5人以上',
        ];
        DB::table('rooms')->insert($param);

        $param = [
            'name' => '2st',
            'studio_id' => '1',
            'tatami_mats' => '11帖',
            'roomsize' => '4人',
        ];
        DB::table('rooms')->insert($param);

        $param = [
            'name' => '3st',
            'studio_id' => '1',
            'tatami_mats' => '11帖',
            'roomsize' => '4人',
        ];
        DB::table('rooms')->insert($param);

        $param = [
            'name' => '4st',
            'studio_id' => '1',
            'tatami_mats' => '13帖',
            'roomsize' => '4人',
        ];
        DB::table('rooms')->insert($param);

        $param = [
            'name' => '5st',
            'studio_id' => '1',
            'tatami_mats' => '11帖',
            'roomsize' => '4人',
        ];
        DB::table('rooms')->insert($param);

        $param = [
            'name' => '6st',
            'studio_id' => '1',
            'tatami_mats' => '11帖',
            'roomsize' => '4人',
        ];
        DB::table('rooms')->insert($param);

        $param = [
            'name' => '7st',
            'studio_id' => '1',
            'tatami_mats' => '13帖',
            'roomsize' => '4人',
        ];
        DB::table('rooms')->insert($param);

        $param = [
            'name' => 'A3st',
            'studio_id' => '2',
            'tatami_mats' => '7.5帖',
            'roomsize' => '3人',
        ];
        DB::table('rooms')->insert($param);

        $param = [
            'name' => 'A5st',
            'studio_id' => '2',
            'tatami_mats' => '10帖',
            'roomsize' => '4人',
        ];
        DB::table('rooms')->insert($param);

        $param = [
            'name' => 'B5st',
            'studio_id' => '2',
            'tatami_mats' => '11帖',
            'roomsize' => '4人',
        ];
        DB::table('rooms')->insert($param);

        $param = [
            'name' => 'E2st+Sub',
            'studio_id' => '2',
            'tatami_mats' => '17帖+2.5帖',
            'roomsize' => '5人以上',
        ];
        DB::table('rooms')->insert($param);

        $param = [
            'name' => 'R/P STUDIO',
            'studio_id' => '2',
            'tatami_mats' => '6帖',
            'roomsize' => '2人',
        ];
        DB::table('rooms')->insert($param);

        $param = [
            'name' => 'A1st',
            'studio_id' => '2',
            'tatami_mats' => '9帖',
            'roomsize' => '3人',
        ];
        DB::table('rooms')->insert($param);

        $param = [
            'name' => 'A2st',
            'studio_id' => '2',
            'tatami_mats' => '10帖',
            'roomsize' => '3人',
        ];
        DB::table('rooms')->insert($param);

        $param = [
            'name' => 'B1st',
            'studio_id' => '2',
            'tatami_mats' => '12帖',
            'roomsize' => '4人',
        ];
        DB::table('rooms')->insert($param);

        $param = [
            'name' => 'B2st',
            'studio_id' => '2',
            'tatami_mats' => '12帖',
            'roomsize' => '4人',
        ];
        DB::table('rooms')->insert($param);

        $param = [
            'name' => 'B3st',
            'studio_id' => '2',
            'tatami_mats' => '14帖',
            'roomsize' => '5人',
        ];
        DB::table('rooms')->insert($param);

        $param = [
            'name' => 'E1st',
            'studio_id' => '2',
            'tatami_mats' => '16帖',
            'roomsize' => '5人以上',
        ];
        DB::table('rooms')->insert($param);

        $param = [
            'name' => 'Ast',
            'studio_id' => '3',
            'tatami_mats' => '18帖',
            'roomsize' => '5人以上',
        ];
        DB::table('rooms')->insert($param);

        $param = [
            'name' => 'Bst',
            'studio_id' => '3',
            'tatami_mats' => '12帖',
            'roomsize' => '4人',
        ];
        DB::table('rooms')->insert($param);

        $param = [
            'name' => 'Cst',
            'studio_id' => '3',
            'tatami_mats' => '12帖',
            'roomsize' => '4人',
        ];
        DB::table('rooms')->insert($param);

        $param = [
            'name' => 'Dst',
            'studio_id' => '3',
            'tatami_mats' => '12帖',
            'roomsize' => '4人',
        ];
        DB::table('rooms')->insert($param);

        $param = [
            'name' => 'Est',
            'studio_id' => '3',
            'tatami_mats' => '12帖',
            'roomsize' => '4人',
        ];
        DB::table('rooms')->insert($param);

        $param = [
            'name' => 'E2st',
            'studio_id' => '4',
            'tatami_mats' => '20帖',
            'roomsize' => '5人以上',
        ];
        DB::table('rooms')->insert($param);

        $param = [
            'name' => 'Cst+Sub',
            'studio_id' => '4',
            'tatami_mats' => '24帖+4帖',
            'roomsize' => '5人以上',
        ];
        DB::table('rooms')->insert($param);

        $param = [
            'name' => 'GSst',
            'studio_id' => '4',
            'tatami_mats' => '10帖',
            'roomsize' => '4人',
        ];
        DB::table('rooms')->insert($param);

        $param = [
            'name' => 'REC.Booth',
            'studio_id' => '4',
            'tatami_mats' => '5帖',
            'roomsize' => '2人',
        ];
        DB::table('rooms')->insert($param);

        $param = [
            'name' => 'B1st',
            'studio_id' => '4',
            'tatami_mats' => '14帖',
            'roomsize' => '5人',
        ];
        DB::table('rooms')->insert($param);

        $param = [
            'name' => 'B2st',
            'studio_id' => '4',
            'tatami_mats' => '13帖',
            'roomsize' => '4人',
        ];
        DB::table('rooms')->insert($param);

        $param = [
            'name' => 'A1st',
            'studio_id' => '4',
            'tatami_mats' => '8帖',
            'roomsize' => '3人',
        ];
        DB::table('rooms')->insert($param);

        $param = [
            'name' => 'A2st',
            'studio_id' => '4',
            'tatami_mats' => '8帖',
            'roomsize' => '3人',
        ];
        DB::table('rooms')->insert($param);

        $param = [
            'name' => 'G1st',
            'studio_id' => '4',
            'tatami_mats' => '12帖',
            'roomsize' => '4人',
        ];
        DB::table('rooms')->insert($param);

        $param = [
            'name' => 'G2st',
            'studio_id' => '4',
            'tatami_mats' => '9.5帖',
            'roomsize' => '4人',
        ];
        DB::table('rooms')->insert($param);

        $param = [
            'name' => 'A3st',
            'studio_id' => '4',
            'tatami_mats' => '9帖',
            'roomsize' => '3人',
        ];
        DB::table('rooms')->insert($param);

        $param = [
            'name' => 'E1st',
            'studio_id' => '4',
            'tatami_mats' => '21帖',
            'roomsize' => '5人以上',
        ];
        DB::table('rooms')->insert($param);

        $param = [
            'name' => 'Booth1',
            'studio_id' => '4',
            'tatami_mats' => '3帖',
            'roomsize' => '2人',
        ];
        DB::table('rooms')->insert($param);

        $param = [
            'name' => 'Booth2',
            'studio_id' => '4',
            'tatami_mats' => '3帖',
            'roomsize' => '2人',
        ];
        DB::table('rooms')->insert($param);

        $param = [
            'name' => 'P1st',
            'studio_id' => '4',
            'tatami_mats' => '6帖',
            'roomsize' => '3人',
        ];
        DB::table('rooms')->insert($param);

        $param = [
            'name' => 'P2st',
            'studio_id' => '4',
            'tatami_mats' => '9帖',
            'roomsize' => '3人',
        ];
        DB::table('rooms')->insert($param);

        $param = [
            'name' => 'P3st',
            'studio_id' => '4',
            'tatami_mats' => '5帖',
            'roomsize' => '2人',
        ];
        DB::table('rooms')->insert($param);


        $param = [
            'name' => 'P5st',
            'studio_id' => '4',
            'tatami_mats' => '5帖',
            'roomsize' => '2人',
        ];
        DB::table('rooms')->insert($param);

        $param = [
            'name' => 'P9st',
            'studio_id' => '4',
            'tatami_mats' => '5帖',
            'roomsize' => '2人',
        ];
        DB::table('rooms')->insert($param);

        $param = [
            'name' => 'P7st',
            'studio_id' => '4',
            'tatami_mats' => '2.5帖',
            'roomsize' => '1人',
        ];
        DB::table('rooms')->insert($param);

        $param = [
            'name' => 'P8st',
            'studio_id' => '4',
            'tatami_mats' => '3帖',
            'roomsize' => '2人',
        ];
        DB::table('rooms')->insert($param);

        $param = [
            'name' => 'D5',
            'studio_id' => '4',
            'tatami_mats' => '60帖',
            'roomsize' => '5人以上',
        ];
        DB::table('rooms')->insert($param);

        $param = [
            'name' => 'D9',
            'studio_id' => '4',
            'tatami_mats' => '32帖',
            'roomsize' => '5人以上',
        ];
        DB::table('rooms')->insert($param);

        $param = [
            'name' => 'D6',
            'studio_id' => '4',
            'tatami_mats' => '60帖',
            'roomsize' => '5人以上',
        ];
        DB::table('rooms')->insert($param);

        $param = [
            'name' => 'GSst+Rec.B',
            'studio_id' => '4',
            'tatami_mats' => '10+5帖',
            'roomsize' => '3人',
        ];
        DB::table('rooms')->insert($param);

        $param = [
            'name' => 'A1st',
            'studio_id' => '5',
            'tatami_mats' => '11帖',
            'roomsize' => '3人',
        ];
        DB::table('rooms')->insert($param);

        $param = [
            'name' => 'A3st',
            'studio_id' => '5',
            'tatami_mats' => '17帖',
            'roomsize' => '5人以上',
        ];
        DB::table('rooms')->insert($param);

        $param = [
            'name' => 'A5st',
            'studio_id' => '5',
            'tatami_mats' => '12帖',
            'roomsize' => '4人',
        ];
        DB::table('rooms')->insert($param);

        $param = [
            'name' => 'A7st',
            'studio_id' => '5',
            'tatami_mats' => '19帖',
            'roomsize' => '5人以上',
        ];
        DB::table('rooms')->insert($param);

        $param = [
            'name' => 'B2st',
            'studio_id' => '5',
            'tatami_mats' => '11帖',
            'roomsize' => '3人',
        ];
        DB::table('rooms')->insert($param);

        $param = [
            'name' => 'B4st',
            'studio_id' => '5',
            'tatami_mats' => '17帖',
            'roomsize' => '5人以上',
        ];
        DB::table('rooms')->insert($param);

        $param = [
            'name' => 'B6st',
            'studio_id' => '5',
            'tatami_mats' => '9帖',
            'roomsize' => '3人',
        ];
        DB::table('rooms')->insert($param);

        $param = [
            'name' => 'VPBooth',
            'studio_id' => '5',
            'tatami_mats' => '4帖',
            'roomsize' => '2人',
        ];
        DB::table('rooms')->insert($param);
    }
}
