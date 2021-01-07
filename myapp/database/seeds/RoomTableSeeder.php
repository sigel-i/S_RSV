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
            'name' =>'1st',
            'studio_id' =>'1',
            'tatami_mats' =>'22帖',
            'roomsize' =>'5人以上',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'2st',
            'studio_id' =>'1',
            'tatami_mats' =>'11帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'3st',
            'studio_id' =>'1',
            'tatami_mats' =>'11帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'4st',
            'studio_id' =>'1',
            'tatami_mats' =>'13帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'5st',
            'studio_id' =>'1',
            'tatami_mats' =>'11帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'6st',
            'studio_id' =>'1',
            'tatami_mats' =>'11帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'7st',
            'studio_id' =>'1',
            'tatami_mats' =>'13帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'A3st',
            'studio_id' =>'2',
            'tatami_mats' =>'7.5帖',
            'roomsize' =>'3人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'A5st',
            'studio_id' =>'2',
            'tatami_mats' =>'10帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'B5st',
            'studio_id' =>'2',
            'tatami_mats' =>'11帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'E2st+Sub',
            'studio_id' =>'2',
            'tatami_mats' =>'17帖+2.5帖',
            'roomsize' =>'5人以上',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'A1st',
            'studio_id' =>'2',
            'tatami_mats' =>'9帖',
            'roomsize' =>'3人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'A2st',
            'studio_id' =>'2',
            'tatami_mats' =>'10帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'B1st',
            'studio_id' =>'2',
            'tatami_mats' =>'12帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'B2st',
            'studio_id' =>'2',
            'tatami_mats' =>'12帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'B3st',
            'studio_id' =>'2',
            'tatami_mats' =>'14帖',
            'roomsize' =>'5人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'E1st',
            'studio_id' =>'2',
            'tatami_mats' =>'16帖',
            'roomsize' =>'5人以上',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Ast',
            'studio_id' =>'3',
            'tatami_mats' =>'18帖',
            'roomsize' =>'5人以上',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Bst',
            'studio_id' =>'3',
            'tatami_mats' =>'12帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Cst',
            'studio_id' =>'3',
            'tatami_mats' =>'12帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Dst',
            'studio_id' =>'3',
            'tatami_mats' =>'12帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Est',
            'studio_id' =>'3',
            'tatami_mats' =>'12帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Fst',
            'studio_id' =>'3',
            'tatami_mats' =>'12帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Gst',
            'studio_id' =>'3',
            'tatami_mats' =>'12帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'E2st',
            'studio_id' =>'4',
            'tatami_mats' =>'20帖',
            'roomsize' =>'5人以上',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Cst+Sub',
            'studio_id' =>'4',
            'tatami_mats' =>'24帖+4帖',
            'roomsize' =>'5人以上',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'GSst',
            'studio_id' =>'4',
            'tatami_mats' =>'10帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'B1st',
            'studio_id' =>'4',
            'tatami_mats' =>'14帖',
            'roomsize' =>'5人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'B2st',
            'studio_id' =>'4',
            'tatami_mats' =>'13帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'A1st',
            'studio_id' =>'4',
            'tatami_mats' =>'8帖',
            'roomsize' =>'3人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'A2st',
            'studio_id' =>'4',
            'tatami_mats' =>'8帖',
            'roomsize' =>'3人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'G1st',
            'studio_id' =>'4',
            'tatami_mats' =>'12帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'G2st',
            'studio_id' =>'4',
            'tatami_mats' =>'9.5帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'A3st',
            'studio_id' =>'4',
            'tatami_mats' =>'9帖',
            'roomsize' =>'3人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'E1st',
            'studio_id' =>'4',
            'tatami_mats' =>'21帖',
            'roomsize' =>'5人以上',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'GSst+Rec.B',
            'studio_id' =>'4',
            'tatami_mats' =>'10+5帖',
            'roomsize' =>'3人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'A1st',
            'studio_id' =>'5',
            'tatami_mats' =>'11帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'A3st',
            'studio_id' =>'5',
            'tatami_mats' =>'17帖',
            'roomsize' =>'5人以上',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'A5st',
            'studio_id' =>'5',
            'tatami_mats' =>'12帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'A7st',
            'studio_id' =>'5',
            'tatami_mats' =>'19帖',
            'roomsize' =>'5人以上',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'B2st',
            'studio_id' =>'5',
            'tatami_mats' =>'11帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'B4st',
            'studio_id' =>'5',
            'tatami_mats' =>'17帖',
            'roomsize' =>'5人以上',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'B6st',
            'studio_id' =>'5',
            'tatami_mats' =>'9帖',
            'roomsize' =>'3人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Bst',
            'studio_id' =>'6',
            'tatami_mats' =>'15帖',
            'roomsize' =>'5人以上',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'A1s',
            'studio_id' =>'6',
            'tatami_mats' =>'7帖',
            'roomsize' =>'3人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'A2s',
            'studio_id' =>'6',
            'tatami_mats' =>'6帖',
            'roomsize' =>'3人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Gst',
            'studio_id' =>'6',
            'tatami_mats' =>'12帖+2帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'A6st',
            'studio_id' =>'7',
            'tatami_mats' =>'9帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'A7st',
            'studio_id' =>'7',
            'tatami_mats' =>'9帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'E3st',
            'studio_id' =>'7',
            'tatami_mats' =>'16帖',
            'roomsize' =>'5人以上',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'G3st',
            'studio_id' =>'7',
            'tatami_mats' =>'11帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'E1st',
            'studio_id' =>'7',
            'tatami_mats' =>'18帖',
            'roomsize' =>'5人以上',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'S2st',
            'studio_id' =>'7',
            'tatami_mats' =>'6.5帖',
            'roomsize' =>'3人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'S3st',
            'studio_id' =>'7',
            'tatami_mats' =>'6.5帖',
            'roomsize' =>'3人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'G1st',
            'studio_id' =>'7',
            'tatami_mats' =>'11帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'G2st',
            'studio_id' =>'7',
            'tatami_mats' =>'11帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'B2st',
            'studio_id' =>'7',
            'tatami_mats' =>'12帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'B3st',
            'studio_id' =>'7',
            'tatami_mats' =>'13帖',
            'roomsize' =>'5人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'E2st',
            'studio_id' =>'7',
            'tatami_mats' =>'15帖',
            'roomsize' =>'5人以上',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'A2st',
            'studio_id' =>'7',
            'tatami_mats' =>'10帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'A3st',
            'studio_id' =>'7',
            'tatami_mats' =>'10帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'A5st',
            'studio_id' =>'7',
            'tatami_mats' =>'10帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'S1st',
            'studio_id' =>'7',
            'tatami_mats' =>'7帖',
            'roomsize' =>'3人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'A1st',
            'studio_id' =>'7',
            'tatami_mats' =>'9帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'B1st',
            'studio_id' =>'7',
            'tatami_mats' =>'12帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'3Cst',
            'studio_id' =>'8',
            'tatami_mats' =>'10帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'3Dst',
            'studio_id' =>'8',
            'tatami_mats' =>'16帖',
            'roomsize' =>'5人以上',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'4Est',
            'studio_id' =>'8',
            'tatami_mats' =>'12帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'4Fst',
            'studio_id' =>'8',
            'tatami_mats' =>'14帖',
            'roomsize' =>'5人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'2Ast',
            'studio_id' =>'8',
            'tatami_mats' =>'9帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'2Bst',
            'studio_id' =>'8',
            'tatami_mats' =>'11帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'5Gst',
            'studio_id' =>'8',
            'tatami_mats' =>'26帖',
            'roomsize' =>'5人以上',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'RHYTHM',
            'studio_id' =>'9',
            'tatami_mats' =>'9帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'HARMONY',
            'studio_id' =>'9',
            'tatami_mats' =>'10帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'TONE',
            'studio_id' =>'9',
            'tatami_mats' =>'11帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'KICK',
            'studio_id' =>'9',
            'tatami_mats' =>'13帖',
            'roomsize' =>'5人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'OPUS',
            'studio_id' =>'9',
            'tatami_mats' =>'17帖',
            'roomsize' =>'5人以上',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'BEAT',
            'studio_id' =>'9',
            'tatami_mats' =>'20帖',
            'roomsize' =>'5人以上',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'MULTIPLE',
            'studio_id' =>'9',
            'tatami_mats' =>'22帖',
            'roomsize' =>'5人以上',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'ATTACK',
            'studio_id' =>'9',
            'tatami_mats' =>'48帖',
            'roomsize' =>'5人以上',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'6畳',
            'studio_id' =>'10',
            'tatami_mats' =>'6帖',
            'roomsize' =>'3人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'7畳　',
            'studio_id' =>'10',
            'tatami_mats' =>'7帖',
            'roomsize' =>'3人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'7畳　30分スタート',
            'studio_id' =>'10',
            'tatami_mats' =>'7帖',
            'roomsize' =>'3人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'11畳　',
            'studio_id' =>'10',
            'tatami_mats' =>'11帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'13畳　',
            'studio_id' =>'10',
            'tatami_mats' =>'13帖',
            'roomsize' =>'5人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'14畳　',
            'studio_id' =>'10',
            'tatami_mats' =>'14帖',
            'roomsize' =>'5人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'15畳　',
            'studio_id' =>'10',
            'tatami_mats' =>'15帖',
            'roomsize' =>'5人以上',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'23畳　',
            'studio_id' =>'10',
            'tatami_mats' =>'23帖',
            'roomsize' =>'5人以上',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'6C+Sub',
            'studio_id' =>'11',
            'tatami_mats' =>'28帖+2.5帖',
            'roomsize' =>'5人以上',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'5Ast',
            'studio_id' =>'11',
            'tatami_mats' =>'8.5帖',
            'roomsize' =>'3人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'5Bst',
            'studio_id' =>'11',
            'tatami_mats' =>'14帖',
            'roomsize' =>'5人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'4Ast',
            'studio_id' =>'11',
            'tatami_mats' =>'8.5帖',
            'roomsize' =>'3人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'4Bst',
            'studio_id' =>'11',
            'tatami_mats' =>'14帖',
            'roomsize' =>'5人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'3Ast',
            'studio_id' =>'11',
            'tatami_mats' =>'8.5帖',
            'roomsize' =>'3人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'3Bst',
            'studio_id' =>'11',
            'tatami_mats' =>'14帖',
            'roomsize' =>'5人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'S1st',
            'studio_id' =>'11',
            'tatami_mats' =>'7.5帖',
            'roomsize' =>'3人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'S2st',
            'studio_id' =>'11',
            'tatami_mats' =>'7.5帖',
            'roomsize' =>'3人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'G2st',
            'studio_id' =>'11',
            'tatami_mats' =>'11帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'G1st',
            'studio_id' =>'11',
            'tatami_mats' =>'11.5帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'G1st+Sub',
            'studio_id' =>'11',
            'tatami_mats' =>'11.5＋4帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'A1st',
            'studio_id' =>'12',
            'tatami_mats' =>'8帖',
            'roomsize' =>'3人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'A2st',
            'studio_id' =>'12',
            'tatami_mats' =>'8帖',
            'roomsize' =>'3人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'G1st',
            'studio_id' =>'12',
            'tatami_mats' =>'10帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'G2st',
            'studio_id' =>'12',
            'tatami_mats' =>'10帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'B1st',
            'studio_id' =>'12',
            'tatami_mats' =>'13帖',
            'roomsize' =>'5人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'B2st',
            'studio_id' =>'12',
            'tatami_mats' =>'14帖',
            'roomsize' =>'5人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'E1st',
            'studio_id' =>'12',
            'tatami_mats' =>'16帖',
            'roomsize' =>'5人以上',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Sst',
            'studio_id' =>'12',
            'tatami_mats' =>'7帖',
            'roomsize' =>'3人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'A3st',
            'studio_id' =>'12',
            'tatami_mats' =>'8帖',
            'roomsize' =>'3人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'G3st',
            'studio_id' =>'12',
            'tatami_mats' =>'11帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'B3st',
            'studio_id' =>'12',
            'tatami_mats' =>'14帖',
            'roomsize' =>'5人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'E2st',
            'studio_id' =>'12',
            'tatami_mats' =>'16帖',
            'roomsize' =>'5人以上',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Cst',
            'studio_id' =>'12',
            'tatami_mats' =>'22帖',
            'roomsize' =>'5人以上',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'3Bst',
            'studio_id' =>'13',
            'tatami_mats' =>'7.5帖',
            'roomsize' =>'3人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'6Bst',
            'studio_id' =>'13',
            'tatami_mats' =>'7帖',
            'roomsize' =>'3人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'5Bst',
            'studio_id' =>'13',
            'tatami_mats' =>'8帖',
            'roomsize' =>'3人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'4Bst',
            'studio_id' =>'13',
            'tatami_mats' =>'8帖',
            'roomsize' =>'3人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'CSst+Sub',
            'studio_id' =>'13',
            'tatami_mats' =>'17帖+5帖',
            'roomsize' =>'5人以上',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'A studio',
            'studio_id' =>'14',
            'tatami_mats' =>'15帖',
            'roomsize' =>'5人以上',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'B studio',
            'studio_id' =>'14',
            'tatami_mats' =>'12帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'A1st',
            'studio_id' =>'15',
            'tatami_mats' =>'8帖',
            'roomsize' =>'3人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'A2st',
            'studio_id' =>'15',
            'tatami_mats' =>'9帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'G2st',
            'studio_id' =>'15',
            'tatami_mats' =>'11帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Bst',
            'studio_id' =>'15',
            'tatami_mats' =>'12帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Sst',
            'studio_id' =>'15',
            'tatami_mats' =>'6.5帖',
            'roomsize' =>'3人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'G1st',
            'studio_id' =>'15',
            'tatami_mats' =>'11帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Est',
            'studio_id' =>'15',
            'tatami_mats' =>'17帖',
            'roomsize' =>'5人以上',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'CSst+Sub',
            'studio_id' =>'16',
            'tatami_mats' =>'36帖+12帖',
            'roomsize' =>'5人以上',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'E1st',
            'studio_id' =>'16',
            'tatami_mats' =>'17帖',
            'roomsize' =>'5人以上',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'B1st',
            'studio_id' =>'16',
            'tatami_mats' =>'14帖',
            'roomsize' =>'5人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'A3st',
            'studio_id' =>'16',
            'tatami_mats' =>'9.5帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'G1st',
            'studio_id' =>'16',
            'tatami_mats' =>'12帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Asst',
            'studio_id' =>'16',
            'tatami_mats' =>'9.5帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'E2st',
            'studio_id' =>'16',
            'tatami_mats' =>'17帖',
            'roomsize' =>'5人以上',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'A1st',
            'studio_id' =>'16',
            'tatami_mats' =>'8.5帖',
            'roomsize' =>'3人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'B2st',
            'studio_id' =>'16',
            'tatami_mats' =>'14帖',
            'roomsize' =>'5人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'A2st',
            'studio_id' =>'16',
            'tatami_mats' =>'9.5帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'G2st',
            'studio_id' =>'16',
            'tatami_mats' =>'12帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'ASst+Rec.B',
            'studio_id' =>'16',
            'tatami_mats' =>'9.5＋7帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'A studio',
            'studio_id' =>'17',
            'tatami_mats' =>'16帖',
            'roomsize' =>'5人以上',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'B studio',
            'studio_id' =>'17',
            'tatami_mats' =>'10帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'C studio',
            'studio_id' =>'17',
            'tatami_mats' =>'8帖',
            'roomsize' =>'3人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'STUDIO 3',
            'studio_id' =>'18',
            'tatami_mats' =>'23帖',
            'roomsize' =>'5人以上',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'STUDIO 4',
            'studio_id' =>'18',
            'tatami_mats' =>'17帖',
            'roomsize' =>'5人以上',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'STUDIO 5',
            'studio_id' =>'18',
            'tatami_mats' =>'17帖',
            'roomsize' =>'5人以上',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Astudio',
            'studio_id' =>'19',
            'tatami_mats' =>'15帖',
            'roomsize' =>'5人以上',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Bstudio',
            'studio_id' =>'19',
            'tatami_mats' =>'14帖',
            'roomsize' =>'5人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Cstudio',
            'studio_id' =>'19',
            'tatami_mats' =>'22帖',
            'roomsize' =>'5人以上',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Mstudio',
            'studio_id' =>'19',
            'tatami_mats' =>'16帖',
            'roomsize' =>'5人以上',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Lstudio',
            'studio_id' =>'19',
            'tatami_mats' =>'38帖',
            'roomsize' =>'5人以上',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'S2Booth',
            'studio_id' =>'19',
            'tatami_mats' =>'7帖',
            'roomsize' =>'3人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'C1studio',
            'studio_id' =>'19',
            'tatami_mats' =>'20帖',
            'roomsize' =>'5人以上',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'A1s',
            'studio_id' =>'20',
            'tatami_mats' =>'8帖',
            'roomsize' =>'3人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'B1s',
            'studio_id' =>'20',
            'tatami_mats' =>'14帖',
            'roomsize' =>'5人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'E1st+Sub',
            'studio_id' =>'20',
            'tatami_mats' =>'20+4帖',
            'roomsize' =>'5人以上',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Sst',
            'studio_id' =>'20',
            'tatami_mats' =>'6.5帖',
            'roomsize' =>'3人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'A2st',
            'studio_id' =>'20',
            'tatami_mats' =>'8帖',
            'roomsize' =>'3人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'A3st',
            'studio_id' =>'20',
            'tatami_mats' =>'8帖',
            'roomsize' =>'3人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'A5st',
            'studio_id' =>'20',
            'tatami_mats' =>'10帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'B2st',
            'studio_id' =>'20',
            'tatami_mats' =>'13帖',
            'roomsize' =>'5人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'E2st+Sub',
            'studio_id' =>'20',
            'tatami_mats' =>'16+3帖',
            'roomsize' =>'5人以上',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'1st',
            'studio_id' =>'21',
            'tatami_mats' =>'11帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'2st',
            'studio_id' =>'21',
            'tatami_mats' =>'14帖',
            'roomsize' =>'5人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'3st',
            'studio_id' =>'21',
            'tatami_mats' =>'11帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'4st',
            'studio_id' =>'21',
            'tatami_mats' =>'11帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'5st',
            'studio_id' =>'21',
            'tatami_mats' =>'11帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'6st',
            'studio_id' =>'21',
            'tatami_mats' =>'11帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'7st',
            'studio_id' =>'21',
            'tatami_mats' =>'11帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'8st',
            'studio_id' =>'21',
            'tatami_mats' =>'11帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'1st',
            'studio_id' =>'22',
            'tatami_mats' =>'11帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'2st',
            'studio_id' =>'22',
            'tatami_mats' =>'14帖',
            'roomsize' =>'5人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'3st',
            'studio_id' =>'22',
            'tatami_mats' =>'14帖',
            'roomsize' =>'5人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'4st',
            'studio_id' =>'22',
            'tatami_mats' =>'14帖',
            'roomsize' =>'5人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'5st',
            'studio_id' =>'22',
            'tatami_mats' =>'14帖',
            'roomsize' =>'5人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'6st',
            'studio_id' =>'22',
            'tatami_mats' =>'11帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'7st',
            'studio_id' =>'22',
            'tatami_mats' =>'15帖',
            'roomsize' =>'5人以上',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'8st',
            'studio_id' =>'22',
            'tatami_mats' =>'14帖',
            'roomsize' =>'5人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'SMALL 1st',
            'studio_id' =>'23',
            'tatami_mats' =>'10帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'SMALL 2st',
            'studio_id' =>'23',
            'tatami_mats' =>'10帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'SMALL 3st',
            'studio_id' =>'23',
            'tatami_mats' =>'10帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'SMALL 4st',
            'studio_id' =>'23',
            'tatami_mats' =>'10帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'MEDIUM 1st',
            'studio_id' =>'23',
            'tatami_mats' =>'13帖',
            'roomsize' =>'5人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'MEDIUM 2st',
            'studio_id' =>'23',
            'tatami_mats' =>'13帖',
            'roomsize' =>'5人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'MEDIUM 3st',
            'studio_id' =>'23',
            'tatami_mats' =>'13帖',
            'roomsize' =>'5人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'MEDIUM 4st',
            'studio_id' =>'23',
            'tatami_mats' =>'13帖',
            'roomsize' =>'5人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'MEDIUM 5st',
            'studio_id' =>'23',
            'tatami_mats' =>'13帖',
            'roomsize' =>'5人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'MEDIUM 6st',
            'studio_id' =>'23',
            'tatami_mats' =>'13帖',
            'roomsize' =>'5人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'LARGE 1st',
            'studio_id' =>'23',
            'tatami_mats' =>'16帖',
            'roomsize' =>'5人以上',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'X-LARGE 1st',
            'studio_id' =>'23',
            'tatami_mats' =>'20帖',
            'roomsize' =>'5人以上',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'1st',
            'studio_id' =>'24',
            'tatami_mats' =>'9帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'2st',
            'studio_id' =>'24',
            'tatami_mats' =>'9帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'3st',
            'studio_id' =>'24',
            'tatami_mats' =>'12帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'4st',
            'studio_id' =>'24',
            'tatami_mats' =>'12帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'5st',
            'studio_id' =>'24',
            'tatami_mats' =>'12帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Ast',
            'studio_id' =>'25',
            'tatami_mats' =>'10帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Bst',
            'studio_id' =>'25',
            'tatami_mats' =>'10帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Cst',
            'studio_id' =>'25',
            'tatami_mats' =>'13帖',
            'roomsize' =>'5人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Rst',
            'studio_id' =>'25',
            'tatami_mats' =>'15帖',
            'roomsize' =>'5人以上',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Fire Star',
            'studio_id' =>'26',
            'tatami_mats' =>'7帖',
            'roomsize' =>'3人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Blue Star',
            'studio_id' =>'26',
            'tatami_mats' =>'8帖',
            'roomsize' =>'3人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Premier',
            'studio_id' =>'26',
            'tatami_mats' =>'9帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Starclassic',
            'studio_id' =>'26',
            'tatami_mats' =>'9帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Carbonply',
            'studio_id' =>'26',
            'tatami_mats' =>'10帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Sonor',
            'studio_id' =>'26',
            'tatami_mats' =>'12帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'DW',
            'studio_id' =>'26',
            'tatami_mats' =>'15帖',
            'roomsize' =>'5人以上',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'studioA',
            'studio_id' =>'27',
            'tatami_mats' =>'24帖',
            'roomsize' =>'5人以上',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'studioB',
            'studio_id' =>'27',
            'tatami_mats' =>'24帖',
            'roomsize' =>'5人以上',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'studioC',
            'studio_id' =>'27',
            'tatami_mats' =>'12帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'A-st',
            'studio_id' =>'28',
            'tatami_mats' =>'15帖',
            'roomsize' =>'5人以上',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'B-st',
            'studio_id' =>'28',
            'tatami_mats' =>'13帖',
            'roomsize' =>'5人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'C-st',
            'studio_id' =>'28',
            'tatami_mats' =>'10帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'D-st',
            'studio_id' =>'28',
            'tatami_mats' =>'13帖',
            'roomsize' =>'5人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Aスタジオ',
            'studio_id' =>'30',
            'tatami_mats' =>'14帖',
            'roomsize' =>'5人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Eスタジオ',
            'studio_id' =>'30',
            'tatami_mats' =>'10帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Bスタジオ',
            'studio_id' =>'30',
            'tatami_mats' =>'10帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Cスタジオ',
            'studio_id' =>'30',
            'tatami_mats' =>'10帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Dスタジオ',
            'studio_id' =>'30',
            'tatami_mats' =>'18帖',
            'roomsize' =>'5人以上',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'STUDIO A',
            'studio_id' =>'31',
            'tatami_mats' =>'9帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'STUDIO B',
            'studio_id' =>'31',
            'tatami_mats' =>'7帖',
            'roomsize' =>'3人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Astudio',
            'studio_id' =>'32',
            'tatami_mats' =>'12帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Bstudio',
            'studio_id' =>'32',
            'tatami_mats' =>'12帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Cstudio',
            'studio_id' =>'32',
            'tatami_mats' =>'8帖',
            'roomsize' =>'3人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Dstudio',
            'studio_id' =>'32',
            'tatami_mats' =>'5帖',
            'roomsize' =>'2人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Estudio',
            'studio_id' =>'32',
            'tatami_mats' =>'10帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'ガラパゴスstudio',
            'studio_id' =>'32',
            'tatami_mats' =>'30帖',
            'roomsize' =>'5人以上',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Ast',
            'studio_id' =>'33',
            'tatami_mats' =>'12帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Bst',
            'studio_id' =>'33',
            'tatami_mats' =>'12帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Cst',
            'studio_id' =>'33',
            'tatami_mats' =>'12帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Dst',
            'studio_id' =>'33',
            'tatami_mats' =>'16帖',
            'roomsize' =>'5人以上',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'1Bst',
            'studio_id' =>'34',
            'tatami_mats' =>'10帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'A STUDIO',
            'studio_id' =>'35',
            'tatami_mats' =>'12帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'B STUDIO',
            'studio_id' =>'35',
            'tatami_mats' =>'9帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'C STUDIO',
            'studio_id' =>'35',
            'tatami_mats' =>'12帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'428 STUDIO',
            'studio_id' =>'35',
            'tatami_mats' =>'58帖',
            'roomsize' =>'5人以上',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'ACOUSTIC ROOM',
            'studio_id' =>'35',
            'tatami_mats' =>'10帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Aスタジオ',
            'studio_id' =>'36',
            'tatami_mats' =>'13帖',
            'roomsize' =>'5人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Bスタジオ',
            'studio_id' =>'36',
            'tatami_mats' =>'15帖',
            'roomsize' =>'5人以上',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Cスタジオ',
            'studio_id' =>'36',
            'tatami_mats' =>'17帖',
            'roomsize' =>'5人以上',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Dスタジオ',
            'studio_id' =>'36',
            'tatami_mats' =>'17帖',
            'roomsize' =>'5人以上',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Studio MOE',
            'studio_id' =>'37',
            'tatami_mats' =>'20帖',
            'roomsize' =>'5人以上',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Studio STC',
            'studio_id' =>'37',
            'tatami_mats' =>'10帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Studio STD',
            'studio_id' =>'37',
            'tatami_mats' =>'10帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Ast',
            'studio_id' =>'38',
            'tatami_mats' =>'10帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Bst',
            'studio_id' =>'38',
            'tatami_mats' =>'10帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Cst',
            'studio_id' =>'38',
            'tatami_mats' =>'40帖',
            'roomsize' =>'5人以上',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Astudio',
            'studio_id' =>'39',
            'tatami_mats' =>'10帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Bstudio',
            'studio_id' =>'39',
            'tatami_mats' =>'15帖',
            'roomsize' =>'5人以上',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Ast',
            'studio_id' =>'40',
            'tatami_mats' =>'9帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Bst',
            'studio_id' =>'40',
            'tatami_mats' =>'12帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Cst',
            'studio_id' =>'40',
            'tatami_mats' =>'15帖',
            'roomsize' =>'5人以上',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Lst',
            'studio_id' =>'40',
            'tatami_mats' =>'12帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Rst',
            'studio_id' =>'40',
            'tatami_mats' =>'9帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Ast',
            'studio_id' =>'41',
            'tatami_mats' =>'14帖',
            'roomsize' =>'5人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Bst',
            'studio_id' =>'41',
            'tatami_mats' =>'9帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Cst',
            'studio_id' =>'41',
            'tatami_mats' =>'4帖',
            'roomsize' =>'2人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Lst',
            'studio_id' =>'41',
            'tatami_mats' =>'12帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Rst',
            'studio_id' =>'41',
            'tatami_mats' =>'12帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Cst',
            'studio_id' =>'43',
            'tatami_mats' =>'12帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Sst',
            'studio_id' =>'43',
            'tatami_mats' =>'6帖',
            'roomsize' =>'3人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Ast',
            'studio_id' =>'43',
            'tatami_mats' =>'10帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'1Ast',
            'studio_id' =>'44',
            'tatami_mats' =>'85帖',
            'roomsize' =>'5人以上',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'1Bst',
            'studio_id' =>'44',
            'tatami_mats' =>'60帖',
            'roomsize' =>'5人以上',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Aスタジオ',
            'studio_id' =>'45',
            'tatami_mats' =>'17帖',
            'roomsize' =>'5人以上',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Bスタジオ',
            'studio_id' =>'45',
            'tatami_mats' =>'5帖',
            'roomsize' =>'2人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'A STUDIO',
            'studio_id' =>'47',
            'tatami_mats' =>'16帖',
            'roomsize' =>'5人以上',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'B STUDIO',
            'studio_id' =>'47',
            'tatami_mats' =>'10帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'C STUDIO',
            'studio_id' =>'47',
            'tatami_mats' =>'12帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'F STUDIO',
            'studio_id' =>'47',
            'tatami_mats' =>'12帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'R STUDIO',
            'studio_id' =>'47',
            'tatami_mats' =>'15帖',
            'roomsize' =>'5人以上',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Ast',
            'studio_id' =>'48',
            'tatami_mats' =>'13帖',
            'roomsize' =>'5人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Bst',
            'studio_id' =>'48',
            'tatami_mats' =>'15帖',
            'roomsize' =>'5人以上',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Cst',
            'studio_id' =>'48',
            'tatami_mats' =>'15帖',
            'roomsize' =>'5人以上',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Sst',
            'studio_id' =>'48',
            'tatami_mats' =>'8帖',
            'roomsize' =>'3人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Ast',
            'studio_id' =>'49',
            'tatami_mats' =>'10帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'B1st',
            'studio_id' =>'49',
            'tatami_mats' =>'13帖',
            'roomsize' =>'5人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'B2st',
            'studio_id' =>'49',
            'tatami_mats' =>'13帖',
            'roomsize' =>'5人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Cst+Sub',
            'studio_id' =>'49',
            'tatami_mats' =>'23+6帖',
            'roomsize' =>'5人以上',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Est',
            'studio_id' =>'49',
            'tatami_mats' =>'16帖',
            'roomsize' =>'5人以上',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Fst+Sub',
            'studio_id' =>'49',
            'tatami_mats' =>'16+7帖',
            'roomsize' =>'5人以上',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Gst',
            'studio_id' =>'49',
            'tatami_mats' =>'11帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'1st+Sub',
            'studio_id' =>'50',
            'tatami_mats' =>'28帖+6帖',
            'roomsize' =>'5人以上',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'A1st',
            'studio_id' =>'50',
            'tatami_mats' =>'10帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'A2st',
            'studio_id' =>'50',
            'tatami_mats' =>'10帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'A3st',
            'studio_id' =>'50',
            'tatami_mats' =>'10帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Bst',
            'studio_id' =>'50',
            'tatami_mats' =>'15帖',
            'roomsize' =>'5人以上',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Cst+Sub',
            'studio_id' =>'50',
            'tatami_mats' =>'35帖+5帖',
            'roomsize' =>'5人以上',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Est',
            'studio_id' =>'50',
            'tatami_mats' =>'20帖',
            'roomsize' =>'5人以上',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Fst+Sub',
            'studio_id' =>'50',
            'tatami_mats' =>'20帖+4帖',
            'roomsize' =>'5人以上',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Gst',
            'studio_id' =>'50',
            'tatami_mats' =>'11帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'A1st',
            'studio_id' =>'51',
            'tatami_mats' =>'6帖',
            'roomsize' =>'3人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'A2st',
            'studio_id' =>'51',
            'tatami_mats' =>'8帖',
            'roomsize' =>'3人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'A3st',
            'studio_id' =>'51',
            'tatami_mats' =>'8帖',
            'roomsize' =>'3人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'B1st',
            'studio_id' =>'51',
            'tatami_mats' =>'15帖',
            'roomsize' =>'5人以上',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'B2st',
            'studio_id' =>'51',
            'tatami_mats' =>'15帖',
            'roomsize' =>'5人以上',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'B3st',
            'studio_id' =>'51',
            'tatami_mats' =>'13帖',
            'roomsize' =>'5人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Est',
            'studio_id' =>'51',
            'tatami_mats' =>'17帖',
            'roomsize' =>'5人以上',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'G2st',
            'studio_id' =>'51',
            'tatami_mats' =>'10帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'G3st',
            'studio_id' =>'51',
            'tatami_mats' =>'12帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Ast',
            'studio_id' =>'52',
            'tatami_mats' =>'10帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'B1st',
            'studio_id' =>'52',
            'tatami_mats' =>'12帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'B2st',
            'studio_id' =>'52',
            'tatami_mats' =>'12帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'B3st',
            'studio_id' =>'52',
            'tatami_mats' =>'12帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Cst',
            'studio_id' =>'52',
            'tatami_mats' =>'24帖',
            'roomsize' =>'5人以上',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Est',
            'studio_id' =>'52',
            'tatami_mats' =>'15帖',
            'roomsize' =>'5人以上',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'1st',
            'studio_id' =>'53',
            'tatami_mats' =>'10帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'2st',
            'studio_id' =>'53',
            'tatami_mats' =>'10帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'3st',
            'studio_id' =>'53',
            'tatami_mats' =>'13帖',
            'roomsize' =>'5人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'4st',
            'studio_id' =>'53',
            'tatami_mats' =>'13帖',
            'roomsize' =>'5人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'5st',
            'studio_id' =>'53',
            'tatami_mats' =>'15帖',
            'roomsize' =>'5人以上',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'6st',
            'studio_id' =>'53',
            'tatami_mats' =>'15帖',
            'roomsize' =>'5人以上',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'7st',
            'studio_id' =>'53',
            'tatami_mats' =>'25帖',
            'roomsize' =>'5人以上',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'1st',
            'studio_id' =>'54',
            'tatami_mats' =>'12帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'2st',
            'studio_id' =>'54',
            'tatami_mats' =>'20帖',
            'roomsize' =>'5人以上',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'3st',
            'studio_id' =>'54',
            'tatami_mats' =>'16帖',
            'roomsize' =>'5人以上',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'4st',
            'studio_id' =>'54',
            'tatami_mats' =>'12帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'5st',
            'studio_id' =>'54',
            'tatami_mats' =>'20帖',
            'roomsize' =>'5人以上',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'6st',
            'studio_id' =>'54',
            'tatami_mats' =>'16帖',
            'roomsize' =>'5人以上',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'1st',
            'studio_id' =>'55',
            'tatami_mats' =>'10帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'2st',
            'studio_id' =>'55',
            'tatami_mats' =>'10帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'3st',
            'studio_id' =>'55',
            'tatami_mats' =>'20帖',
            'roomsize' =>'5人以上',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'4st',
            'studio_id' =>'55',
            'tatami_mats' =>'12帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'5st',
            'studio_id' =>'55',
            'tatami_mats' =>'16帖',
            'roomsize' =>'5人以上',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Ast',
            'studio_id' =>'56',
            'tatami_mats' =>'7帖',
            'roomsize' =>'3人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Bst',
            'studio_id' =>'56',
            'tatami_mats' =>'8帖',
            'roomsize' =>'3人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Cst',
            'studio_id' =>'56',
            'tatami_mats' =>'13帖',
            'roomsize' =>'5人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'1st',
            'studio_id' =>'57',
            'tatami_mats' =>'12帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'2st',
            'studio_id' =>'57',
            'tatami_mats' =>'12帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'3st',
            'studio_id' =>'57',
            'tatami_mats' =>'11帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'4st',
            'studio_id' =>'57',
            'tatami_mats' =>'16帖',
            'roomsize' =>'5人以上',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'5st',
            'studio_id' =>'57',
            'tatami_mats' =>'14帖',
            'roomsize' =>'5人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'6st',
            'studio_id' =>'57',
            'tatami_mats' =>'16帖',
            'roomsize' =>'5人以上',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'1st',
            'studio_id' =>'58',
            'tatami_mats' =>'10帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'2st',
            'studio_id' =>'58',
            'tatami_mats' =>'10帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'3st',
            'studio_id' =>'58',
            'tatami_mats' =>'16帖',
            'roomsize' =>'5人以上',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'4st',
            'studio_id' =>'58',
            'tatami_mats' =>'12帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'5st',
            'studio_id' =>'58',
            'tatami_mats' =>'14帖',
            'roomsize' =>'5人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'6st',
            'studio_id' =>'58',
            'tatami_mats' =>'12帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'7st',
            'studio_id' =>'58',
            'tatami_mats' =>'14帖',
            'roomsize' =>'5人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Ast',
            'studio_id' =>'59',
            'tatami_mats' =>'18帖',
            'roomsize' =>'5人以上',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Bst',
            'studio_id' =>'59',
            'tatami_mats' =>'12帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Cst',
            'studio_id' =>'59',
            'tatami_mats' =>'6帖',
            'roomsize' =>'3人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Est',
            'studio_id' =>'59',
            'tatami_mats' =>'8帖',
            'roomsize' =>'3人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Fst',
            'studio_id' =>'59',
            'tatami_mats' =>'27帖',
            'roomsize' =>'5人以上',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'1st',
            'studio_id' =>'60',
            'tatami_mats' =>'9帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'3st',
            'studio_id' =>'60',
            'tatami_mats' =>'10帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'4st',
            'studio_id' =>'60',
            'tatami_mats' =>'14帖',
            'roomsize' =>'5人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'5st',
            'studio_id' =>'60',
            'tatami_mats' =>'12帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'7st',
            'studio_id' =>'60',
            'tatami_mats' =>'13帖',
            'roomsize' =>'5人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'1st',
            'studio_id' =>'61',
            'tatami_mats' =>'14帖',
            'roomsize' =>'5人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'3st',
            'studio_id' =>'61',
            'tatami_mats' =>'13帖',
            'roomsize' =>'5人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'4st',
            'studio_id' =>'61',
            'tatami_mats' =>'16帖',
            'roomsize' =>'5人以上',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'5st',
            'studio_id' =>'61',
            'tatami_mats' =>'13帖',
            'roomsize' =>'5人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'6st',
            'studio_id' =>'61',
            'tatami_mats' =>'20帖',
            'roomsize' =>'5人以上',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'7st',
            'studio_id' =>'61',
            'tatami_mats' =>'14帖',
            'roomsize' =>'5人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Sst',
            'studio_id' =>'61',
            'tatami_mats' =>'20帖',
            'roomsize' =>'5人以上',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Ast',
            'studio_id' =>'62',
            'tatami_mats' =>'9帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Bst',
            'studio_id' =>'62',
            'tatami_mats' =>'15帖',
            'roomsize' =>'5人以上',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Cst',
            'studio_id' =>'62',
            'tatami_mats' =>'15帖',
            'roomsize' =>'5人以上',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Dst',
            'studio_id' =>'62',
            'tatami_mats' =>'15帖',
            'roomsize' =>'5人以上',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'1st',
            'studio_id' =>'63',
            'tatami_mats' =>'9帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'2st',
            'studio_id' =>'63',
            'tatami_mats' =>'13帖',
            'roomsize' =>'5人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'3st',
            'studio_id' =>'63',
            'tatami_mats' =>'11帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'4st',
            'studio_id' =>'63',
            'tatami_mats' =>'13帖',
            'roomsize' =>'5人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'5st',
            'studio_id' =>'63',
            'tatami_mats' =>'18帖',
            'roomsize' =>'5人以上',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'1st',
            'studio_id' =>'64',
            'tatami_mats' =>'18帖',
            'roomsize' =>'5人以上',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'2st',
            'studio_id' =>'64',
            'tatami_mats' =>'10帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'3st',
            'studio_id' =>'64',
            'tatami_mats' =>'10帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'4st',
            'studio_id' =>'64',
            'tatami_mats' =>'18帖',
            'roomsize' =>'5人以上',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'5st',
            'studio_id' =>'64',
            'tatami_mats' =>'9帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'6st',
            'studio_id' =>'64',
            'tatami_mats' =>'9帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'7st',
            'studio_id' =>'64',
            'tatami_mats' =>'16帖',
            'roomsize' =>'5人以上',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'8st',
            'studio_id' =>'64',
            'tatami_mats' =>'25帖',
            'roomsize' =>'5人以上',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'A1st',
            'studio_id' =>'65',
            'tatami_mats' =>'9帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'A2st',
            'studio_id' =>'65',
            'tatami_mats' =>'9帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'A3st',
            'studio_id' =>'65',
            'tatami_mats' =>'9帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Bst',
            'studio_id' =>'65',
            'tatami_mats' =>'15帖',
            'roomsize' =>'5人以上',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Est',
            'studio_id' =>'65',
            'tatami_mats' =>'18帖',
            'roomsize' =>'5人以上',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'G1st',
            'studio_id' =>'65',
            'tatami_mats' =>'11帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'G2st',
            'studio_id' =>'65',
            'tatami_mats' =>'11帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'G3st',
            'studio_id' =>'65',
            'tatami_mats' =>'13帖',
            'roomsize' =>'5人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'GSst+Sub',
            'studio_id' =>'65',
            'tatami_mats' =>'11+4.5帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Sst',
            'studio_id' =>'65',
            'tatami_mats' =>'7帖',
            'roomsize' =>'3人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'A1st',
            'studio_id' =>'66',
            'tatami_mats' =>'8帖',
            'roomsize' =>'3人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'A2st',
            'studio_id' =>'66',
            'tatami_mats' =>'9帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'B1st',
            'studio_id' =>'66',
            'tatami_mats' =>'14帖',
            'roomsize' =>'5人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'B2st',
            'studio_id' =>'66',
            'tatami_mats' =>'14帖',
            'roomsize' =>'5人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Cst+Sub',
            'studio_id' =>'66',
            'tatami_mats' =>'32帖+3帖',
            'roomsize' =>'5人以上',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'E1st',
            'studio_id' =>'66',
            'tatami_mats' =>'16帖',
            'roomsize' =>'5人以上',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'E2st',
            'studio_id' =>'66',
            'tatami_mats' =>'16帖',
            'roomsize' =>'5人以上',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'E3st',
            'studio_id' =>'66',
            'tatami_mats' =>'16帖',
            'roomsize' =>'5人以上',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Fst',
            'studio_id' =>'66',
            'tatami_mats' =>'18帖',
            'roomsize' =>'5人以上',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'A1st',
            'studio_id' =>'67',
            'tatami_mats' =>'9帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'A2st',
            'studio_id' =>'67',
            'tatami_mats' =>'9帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'A3st',
            'studio_id' =>'67',
            'tatami_mats' =>'9帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'A5st',
            'studio_id' =>'67',
            'tatami_mats' =>'9帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'B1st',
            'studio_id' =>'67',
            'tatami_mats' =>'14帖',
            'roomsize' =>'5人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'B2st',
            'studio_id' =>'67',
            'tatami_mats' =>'12帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'B3st',
            'studio_id' =>'67',
            'tatami_mats' =>'12帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'B5st',
            'studio_id' =>'67',
            'tatami_mats' =>'14帖',
            'roomsize' =>'5人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'E1st',
            'studio_id' =>'67',
            'tatami_mats' =>'16+5帖',
            'roomsize' =>'5人以上',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'E2st',
            'studio_id' =>'67',
            'tatami_mats' =>'19帖',
            'roomsize' =>'5人以上',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Cst+Sub',
            'studio_id' =>'67',
            'tatami_mats' =>'26+3帖',
            'roomsize' =>'5人以上',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'CSst+Sub',
            'studio_id' =>'67',
            'tatami_mats' =>'22+6帖',
            'roomsize' =>'5人以上',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'S1st',
            'studio_id' =>'67',
            'tatami_mats' =>'6.5帖',
            'roomsize' =>'3人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'S2st',
            'studio_id' =>'67',
            'tatami_mats' =>'6.5帖',
            'roomsize' =>'3人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'101st',
            'studio_id' =>'69',
            'tatami_mats' =>'15帖',
            'roomsize' =>'5人以上',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'102st',
            'studio_id' =>'69',
            'tatami_mats' =>'15帖',
            'roomsize' =>'5人以上',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'103st',
            'studio_id' =>'69',
            'tatami_mats' =>'14帖',
            'roomsize' =>'5人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'104st',
            'studio_id' =>'69',
            'tatami_mats' =>'13帖',
            'roomsize' =>'5人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'105st',
            'studio_id' =>'69',
            'tatami_mats' =>'14帖',
            'roomsize' =>'5人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'106st',
            'studio_id' =>'69',
            'tatami_mats' =>'13帖',
            'roomsize' =>'5人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'107st',
            'studio_id' =>'69',
            'tatami_mats' =>'13帖',
            'roomsize' =>'5人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'108st',
            'studio_id' =>'69',
            'tatami_mats' =>'13帖',
            'roomsize' =>'5人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'109st',
            'studio_id' =>'69',
            'tatami_mats' =>'14帖',
            'roomsize' =>'5人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'110st',
            'studio_id' =>'69',
            'tatami_mats' =>'14帖',
            'roomsize' =>'5人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'112st',
            'studio_id' =>'69',
            'tatami_mats' =>'16帖',
            'roomsize' =>'5人以上',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'114st',
            'studio_id' =>'69',
            'tatami_mats' =>'17帖',
            'roomsize' =>'5人以上',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'115st',
            'studio_id' =>'69',
            'tatami_mats' =>'13帖',
            'roomsize' =>'5人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'116st',
            'studio_id' =>'69',
            'tatami_mats' =>'13帖',
            'roomsize' =>'5人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'117st',
            'studio_id' =>'69',
            'tatami_mats' =>'13帖',
            'roomsize' =>'5人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'211st',
            'studio_id' =>'69',
            'tatami_mats' =>'32帖',
            'roomsize' =>'5人以上',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'501st',
            'studio_id' =>'70',
            'tatami_mats' =>'11帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'502st',
            'studio_id' =>'70',
            'tatami_mats' =>'11帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'503st',
            'studio_id' =>'70',
            'tatami_mats' =>'10帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'504st',
            'studio_id' =>'70',
            'tatami_mats' =>'11帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'505st',
            'studio_id' =>'70',
            'tatami_mats' =>'15帖',
            'roomsize' =>'5人以上',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'506st',
            'studio_id' =>'70',
            'tatami_mats' =>'15帖',
            'roomsize' =>'5人以上',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'507st',
            'studio_id' =>'70',
            'tatami_mats' =>'8.5帖',
            'roomsize' =>'3人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'508st',
            'studio_id' =>'70',
            'tatami_mats' =>'8.5帖',
            'roomsize' =>'3人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'509st',
            'studio_id' =>'70',
            'tatami_mats' =>'9帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'510st',
            'studio_id' =>'70',
            'tatami_mats' =>'9帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'511st',
            'studio_id' =>'70',
            'tatami_mats' =>'10帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'1st',
            'studio_id' =>'72',
            'tatami_mats' =>'14帖',
            'roomsize' =>'5人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'2st',
            'studio_id' =>'72',
            'tatami_mats' =>'8帖',
            'roomsize' =>'3人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'3st',
            'studio_id' =>'72',
            'tatami_mats' =>'14帖',
            'roomsize' =>'5人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'4st',
            'studio_id' =>'72',
            'tatami_mats' =>'14帖',
            'roomsize' =>'5人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'5st',
            'studio_id' =>'72',
            'tatami_mats' =>'10帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'6st',
            'studio_id' =>'72',
            'tatami_mats' =>'10帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'7st',
            'studio_id' =>'72',
            'tatami_mats' =>'18帖',
            'roomsize' =>'5人以上',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'8st',
            'studio_id' =>'72',
            'tatami_mats' =>'14帖',
            'roomsize' =>'5人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'1Ast',
            'studio_id' =>'73',
            'tatami_mats' =>'12帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'2Ast',
            'studio_id' =>'73',
            'tatami_mats' =>'12帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'3Ast',
            'studio_id' =>'73',
            'tatami_mats' =>'12帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'4Ast',
            'studio_id' =>'73',
            'tatami_mats' =>'16帖',
            'roomsize' =>'5人以上',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'5Ast',
            'studio_id' =>'73',
            'tatami_mats' =>'16帖',
            'roomsize' =>'5人以上',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'2Bst',
            'studio_id' =>'73',
            'tatami_mats' =>'10帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'3Bst',
            'studio_id' =>'73',
            'tatami_mats' =>'10帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'4Bst',
            'studio_id' =>'73',
            'tatami_mats' =>'16帖',
            'roomsize' =>'5人以上',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'5Bst',
            'studio_id' =>'73',
            'tatami_mats' =>'16帖',
            'roomsize' =>'5人以上',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'2Cst',
            'studio_id' =>'73',
            'tatami_mats' =>'10帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'3Cst',
            'studio_id' =>'73',
            'tatami_mats' =>'10帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'4Cst',
            'studio_id' =>'73',
            'tatami_mats' =>'16帖',
            'roomsize' =>'5人以上',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'5Cst',
            'studio_id' =>'73',
            'tatami_mats' =>'16帖',
            'roomsize' =>'5人以上',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'2Dst',
            'studio_id' =>'73',
            'tatami_mats' =>'14帖',
            'roomsize' =>'5人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'3Dst',
            'studio_id' =>'73',
            'tatami_mats' =>'14帖',
            'roomsize' =>'5人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'1st',
            'studio_id' =>'74',
            'tatami_mats' =>'15帖',
            'roomsize' =>'5人以上',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'2st',
            'studio_id' =>'74',
            'tatami_mats' =>'13帖',
            'roomsize' =>'5人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'3st',
            'studio_id' =>'74',
            'tatami_mats' =>'10帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'4st',
            'studio_id' =>'74',
            'tatami_mats' =>'8帖',
            'roomsize' =>'3人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'5st',
            'studio_id' =>'74',
            'tatami_mats' =>'8帖',
            'roomsize' =>'3人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'6st',
            'studio_id' =>'74',
            'tatami_mats' =>'9帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'7st',
            'studio_id' =>'74',
            'tatami_mats' =>'12帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'8st',
            'studio_id' =>'74',
            'tatami_mats' =>'9帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'9st',
            'studio_id' =>'74',
            'tatami_mats' =>'9帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'10st',
            'studio_id' =>'74',
            'tatami_mats' =>'30帖',
            'roomsize' =>'5人以上',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'11st',
            'studio_id' =>'74',
            'tatami_mats' =>'10帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'12st',
            'studio_id' =>'74',
            'tatami_mats' =>'18帖',
            'roomsize' =>'5人以上',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'1st',
            'studio_id' =>'75',
            'tatami_mats' =>'11帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'2st',
            'studio_id' =>'75',
            'tatami_mats' =>'9帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'3st',
            'studio_id' =>'75',
            'tatami_mats' =>'9帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'5st',
            'studio_id' =>'75',
            'tatami_mats' =>'11帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'6st',
            'studio_id' =>'75',
            'tatami_mats' =>'13帖',
            'roomsize' =>'5人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'7st',
            'studio_id' =>'75',
            'tatami_mats' =>'13帖',
            'roomsize' =>'5人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'8st',
            'studio_id' =>'75',
            'tatami_mats' =>'11帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'9st',
            'studio_id' =>'75',
            'tatami_mats' =>'9帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'10st',
            'studio_id' =>'75',
            'tatami_mats' =>'12帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'11st',
            'studio_id' =>'75',
            'tatami_mats' =>'18帖',
            'roomsize' =>'5人以上',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'12st',
            'studio_id' =>'75',
            'tatami_mats' =>'13帖',
            'roomsize' =>'5人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'13st',
            'studio_id' =>'75',
            'tatami_mats' =>'18帖',
            'roomsize' =>'5人以上',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Ast',
            'studio_id' =>'76',
            'tatami_mats' =>'26帖',
            'roomsize' =>'5人以上',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Bst',
            'studio_id' =>'76',
            'tatami_mats' =>'13帖',
            'roomsize' =>'5人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Cst',
            'studio_id' =>'76',
            'tatami_mats' =>'11帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Dst',
            'studio_id' =>'76',
            'tatami_mats' =>'15帖',
            'roomsize' =>'5人以上',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Est',
            'studio_id' =>'76',
            'tatami_mats' =>'10帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Fst',
            'studio_id' =>'76',
            'tatami_mats' =>'10帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Gst',
            'studio_id' =>'76',
            'tatami_mats' =>'15帖',
            'roomsize' =>'5人以上',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Hst',
            'studio_id' =>'76',
            'tatami_mats' =>'13帖',
            'roomsize' =>'5人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Ist',
            'studio_id' =>'76',
            'tatami_mats' =>'10帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Bst',
            'studio_id' =>'77',
            'tatami_mats' =>'9帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Cst',
            'studio_id' =>'77',
            'tatami_mats' =>'11帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Dst',
            'studio_id' =>'77',
            'tatami_mats' =>'11帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'A Studio',
            'studio_id' =>'78',
            'tatami_mats' =>'13帖+1.5帖',
            'roomsize' =>'5人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'B Studio',
            'studio_id' =>'78',
            'tatami_mats' =>'13帖',
            'roomsize' =>'5人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'C Studio',
            'studio_id' =>'78',
            'tatami_mats' =>'13帖',
            'roomsize' =>'5人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'R1st',
            'studio_id' =>'79',
            'tatami_mats' =>'10帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'S1st',
            'studio_id' =>'79',
            'tatami_mats' =>'15帖',
            'roomsize' =>'5人以上',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'S2st',
            'studio_id' =>'79',
            'tatami_mats' =>'13帖',
            'roomsize' =>'5人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'S3st',
            'studio_id' =>'79',
            'tatami_mats' =>'13帖',
            'roomsize' =>'5人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'K1st',
            'studio_id' =>'79',
            'tatami_mats' =>'21帖',
            'roomsize' =>'5人以上',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Aスタジオ',
            'studio_id' =>'80',
            'tatami_mats' =>'16帖',
            'roomsize' =>'5人以上',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Bスタジオ',
            'studio_id' =>'80',
            'tatami_mats' =>'8帖',
            'roomsize' =>'3人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'A studio',
            'studio_id' =>'81',
            'tatami_mats' =>'20帖',
            'roomsize' =>'5人以上',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'B studio',
            'studio_id' =>'81',
            'tatami_mats' =>'9帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'studio',
            'studio_id' =>'82',
            'tatami_mats' =>'21帖',
            'roomsize' =>'5人以上',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'studio',
            'studio_id' =>'83',
            'tatami_mats' =>'14帖',
            'roomsize' =>'5人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'studio',
            'studio_id' =>'84',
            'tatami_mats' =>'18帖',
            'roomsize' =>'5人以上',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'スタジオ1',
            'studio_id' =>'85',
            'tatami_mats' =>'11帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Aスタジオ',
            'studio_id' =>'86',
            'tatami_mats' =>'12帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Bスタジオ',
            'studio_id' =>'86',
            'tatami_mats' =>'10帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Cスタジオ',
            'studio_id' =>'86',
            'tatami_mats' =>'20帖',
            'roomsize' =>'5人以上',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Dスタジオ',
            'studio_id' =>'86',
            'tatami_mats' =>'10帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Aスタジオ',
            'studio_id' =>'87',
            'tatami_mats' =>'14帖',
            'roomsize' =>'5人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Bスタジオ',
            'studio_id' =>'87',
            'tatami_mats' =>'9帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Cスタジオ',
            'studio_id' =>'87',
            'tatami_mats' =>'13帖',
            'roomsize' =>'5人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Fスタジオ',
            'studio_id' =>'87',
            'tatami_mats' =>'6.5帖',
            'roomsize' =>'3人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'1スタジオ',
            'studio_id' =>'87',
            'tatami_mats' =>'12帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'2スタジオ',
            'studio_id' =>'87',
            'tatami_mats' =>'11帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'3スタジオ',
            'studio_id' =>'87',
            'tatami_mats' =>'9帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'4スタジオ',
            'studio_id' =>'87',
            'tatami_mats' =>'8.5帖',
            'roomsize' =>'3人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'STUDIO A',
            'studio_id' =>'88',
            'tatami_mats' =>'11帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'STUDIO B',
            'studio_id' =>'88',
            'tatami_mats' =>'12帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'STUDIO C',
            'studio_id' =>'88',
            'tatami_mats' =>'16帖',
            'roomsize' =>'5人以上',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'1st',
            'studio_id' =>'89',
            'tatami_mats' =>'17帖',
            'roomsize' =>'5人以上',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'2st',
            'studio_id' =>'89',
            'tatami_mats' =>'13帖',
            'roomsize' =>'5人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'3st',
            'studio_id' =>'89',
            'tatami_mats' =>'6帖',
            'roomsize' =>'3人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'4st',
            'studio_id' =>'89',
            'tatami_mats' =>'8帖',
            'roomsize' =>'3人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'5st',
            'studio_id' =>'89',
            'tatami_mats' =>'8帖',
            'roomsize' =>'3人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Lst',
            'studio_id' =>'90',
            'tatami_mats' =>'11帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Bst',
            'studio_id' =>'90',
            'tatami_mats' =>'7帖',
            'roomsize' =>'3人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Gst',
            'studio_id' =>'90',
            'tatami_mats' =>'13帖',
            'roomsize' =>'5人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Ast',
            'studio_id' =>'90',
            'tatami_mats' =>'10帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Cst',
            'studio_id' =>'90',
            'tatami_mats' =>'11帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'3-Lst',
            'studio_id' =>'90',
            'tatami_mats' =>'11帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'3-Bst',
            'studio_id' =>'90',
            'tatami_mats' =>'7帖',
            'roomsize' =>'3人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'3-Gst',
            'studio_id' =>'90',
            'tatami_mats' =>'13帖',
            'roomsize' =>'5人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'3-Ast',
            'studio_id' =>'90',
            'tatami_mats' =>'10帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'3-Cst',
            'studio_id' =>'90',
            'tatami_mats' =>'11帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'A STUDIO',
            'studio_id' =>'91',
            'tatami_mats' =>'11帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'B STUDIO',
            'studio_id' =>'91',
            'tatami_mats' =>'9帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Bst',
            'studio_id' =>'92',
            'tatami_mats' =>'16帖',
            'roomsize' =>'5人以上',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Cst',
            'studio_id' =>'92',
            'tatami_mats' =>'14帖',
            'roomsize' =>'5人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'1-STUDIO',
            'studio_id' =>'93',
            'tatami_mats' =>'7帖',
            'roomsize' =>'3人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'2-STUDIO',
            'studio_id' =>'93',
            'tatami_mats' =>'13帖',
            'roomsize' =>'5人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'3-STUDIO',
            'studio_id' =>'93',
            'tatami_mats' =>'14帖',
            'roomsize' =>'5人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'青部屋',
            'studio_id' =>'94',
            'tatami_mats' =>'14帖',
            'roomsize' =>'5人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'緑部屋',
            'studio_id' =>'94',
            'tatami_mats' =>'14帖',
            'roomsize' =>'5人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'紫部屋',
            'studio_id' =>'94',
            'tatami_mats' =>'20帖',
            'roomsize' =>'5人以上',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'白部屋',
            'studio_id' =>'94',
            'tatami_mats' =>'15帖',
            'roomsize' =>'5人以上',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'1st',
            'studio_id' =>'95',
            'tatami_mats' =>'13帖',
            'roomsize' =>'5人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'2st',
            'studio_id' =>'95',
            'tatami_mats' =>'13帖',
            'roomsize' =>'5人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'3st',
            'studio_id' =>'95',
            'tatami_mats' =>'11帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'4st',
            'studio_id' =>'95',
            'tatami_mats' =>'11帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'5st',
            'studio_id' =>'95',
            'tatami_mats' =>'13帖',
            'roomsize' =>'5人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'101st',
            'studio_id' =>'96',
            'tatami_mats' =>'16帖',
            'roomsize' =>'5人以上',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'102st',
            'studio_id' =>'96',
            'tatami_mats' =>'16帖',
            'roomsize' =>'5人以上',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'103st',
            'studio_id' =>'96',
            'tatami_mats' =>'16帖',
            'roomsize' =>'5人以上',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'201st',
            'studio_id' =>'96',
            'tatami_mats' =>'14帖',
            'roomsize' =>'5人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'202st',
            'studio_id' =>'96',
            'tatami_mats' =>'14帖',
            'roomsize' =>'5人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'203st',
            'studio_id' =>'96',
            'tatami_mats' =>'14帖',
            'roomsize' =>'5人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'204st',
            'studio_id' =>'96',
            'tatami_mats' =>'14帖',
            'roomsize' =>'5人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'301st',
            'studio_id' =>'96',
            'tatami_mats' =>'14帖',
            'roomsize' =>'5人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'302st',
            'studio_id' =>'96',
            'tatami_mats' =>'14帖',
            'roomsize' =>'5人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'303st',
            'studio_id' =>'96',
            'tatami_mats' =>'14帖',
            'roomsize' =>'5人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'304st',
            'studio_id' =>'96',
            'tatami_mats' =>'14帖',
            'roomsize' =>'5人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'401st',
            'studio_id' =>'96',
            'tatami_mats' =>'14帖',
            'roomsize' =>'5人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'402st',
            'studio_id' =>'96',
            'tatami_mats' =>'14帖',
            'roomsize' =>'5人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'403st',
            'studio_id' =>'96',
            'tatami_mats' =>'14帖',
            'roomsize' =>'5人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'404st',
            'studio_id' =>'96',
            'tatami_mats' =>'14帖',
            'roomsize' =>'5人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'501st',
            'studio_id' =>'96',
            'tatami_mats' =>'14帖',
            'roomsize' =>'5人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'502st',
            'studio_id' =>'96',
            'tatami_mats' =>'14帖',
            'roomsize' =>'5人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'503st',
            'studio_id' =>'96',
            'tatami_mats' =>'14帖',
            'roomsize' =>'5人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'504st',
            'studio_id' =>'96',
            'tatami_mats' =>'16帖',
            'roomsize' =>'5人以上',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Studio #1',
            'studio_id' =>'97',
            'tatami_mats' =>'15帖',
            'roomsize' =>'5人以上',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Studio #2',
            'studio_id' =>'97',
            'tatami_mats' =>'12帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Studio #3',
            'studio_id' =>'97',
            'tatami_mats' =>'12帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Studio #4',
            'studio_id' =>'97',
            'tatami_mats' =>'15帖',
            'roomsize' =>'5人以上',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Studio #5',
            'studio_id' =>'97',
            'tatami_mats' =>'12帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Studio #6',
            'studio_id' =>'97',
            'tatami_mats' =>'10帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Studio #7',
            'studio_id' =>'97',
            'tatami_mats' =>'10帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Studio #8',
            'studio_id' =>'97',
            'tatami_mats' =>'10帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Studio #9',
            'studio_id' =>'97',
            'tatami_mats' =>'15帖',
            'roomsize' =>'5人以上',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Studio #10',
            'studio_id' =>'97',
            'tatami_mats' =>'12帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Studio #11',
            'studio_id' =>'97',
            'tatami_mats' =>'12帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Studio #12',
            'studio_id' =>'97',
            'tatami_mats' =>'22帖',
            'roomsize' =>'5人以上',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'1st',
            'studio_id' =>'98',
            'tatami_mats' =>'10帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'2st',
            'studio_id' =>'98',
            'tatami_mats' =>'10帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'3st',
            'studio_id' =>'98',
            'tatami_mats' =>'10帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'4st',
            'studio_id' =>'98',
            'tatami_mats' =>'10帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'5st',
            'studio_id' =>'98',
            'tatami_mats' =>'10帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'301st',
            'studio_id' =>'99',
            'tatami_mats' =>'12帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'302st',
            'studio_id' =>'99',
            'tatami_mats' =>'12帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'303st',
            'studio_id' =>'99',
            'tatami_mats' =>'10帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'304st',
            'studio_id' =>'99',
            'tatami_mats' =>'10帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'305st',
            'studio_id' =>'99',
            'tatami_mats' =>'10帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'401st',
            'studio_id' =>'99',
            'tatami_mats' =>'10帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'402st',
            'studio_id' =>'99',
            'tatami_mats' =>'10帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'403st',
            'studio_id' =>'99',
            'tatami_mats' =>'10帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'404st',
            'studio_id' =>'99',
            'tatami_mats' =>'10帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'405st',
            'studio_id' =>'99',
            'tatami_mats' =>'12帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'SMALL 1st',
            'studio_id' =>'100',
            'tatami_mats' =>'11帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'SMALL 2st',
            'studio_id' =>'100',
            'tatami_mats' =>'11帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'SMALL 3st',
            'studio_id' =>'100',
            'tatami_mats' =>'11帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'SMALL 4st',
            'studio_id' =>'100',
            'tatami_mats' =>'11帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'MEDIUM 1st',
            'studio_id' =>'100',
            'tatami_mats' =>'14帖',
            'roomsize' =>'5人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'MEDIUM 2st',
            'studio_id' =>'100',
            'tatami_mats' =>'14帖',
            'roomsize' =>'5人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'MEDIUM 3st',
            'studio_id' =>'100',
            'tatami_mats' =>'14帖',
            'roomsize' =>'5人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'MEDIUM 4st',
            'studio_id' =>'100',
            'tatami_mats' =>'14帖',
            'roomsize' =>'5人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'MEDIUM 5st',
            'studio_id' =>'100',
            'tatami_mats' =>'14帖',
            'roomsize' =>'5人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'LARGE 1st',
            'studio_id' =>'100',
            'tatami_mats' =>'16帖',
            'roomsize' =>'5人以上',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'LARGE 2st',
            'studio_id' =>'100',
            'tatami_mats' =>'16帖',
            'roomsize' =>'5人以上',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'X-LARGE 1st',
            'studio_id' =>'100',
            'tatami_mats' =>'18帖',
            'roomsize' =>'5人以上',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'X-LARGE 2st',
            'studio_id' =>'100',
            'tatami_mats' =>'18帖',
            'roomsize' =>'5人以上',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'SMALL C',
            'studio_id' =>'101',
            'tatami_mats' =>'8帖',
            'roomsize' =>'3人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'SMALL D',
            'studio_id' =>'101',
            'tatami_mats' =>'8帖',
            'roomsize' =>'3人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'MEDIUM A',
            'studio_id' =>'101',
            'tatami_mats' =>'10帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'MEDIUM B',
            'studio_id' =>'101',
            'tatami_mats' =>'10帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'MEDIUM E',
            'studio_id' =>'101',
            'tatami_mats' =>'10帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'LARGE F',
            'studio_id' =>'101',
            'tatami_mats' =>'12帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Ast',
            'studio_id' =>'102',
            'tatami_mats' =>'9帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Bst',
            'studio_id' =>'102',
            'tatami_mats' =>'12帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Cst',
            'studio_id' =>'102',
            'tatami_mats' =>'9帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Dst',
            'studio_id' =>'102',
            'tatami_mats' =>'9帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Est',
            'studio_id' =>'102',
            'tatami_mats' =>'12帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Aスタジオ',
            'studio_id' =>'103',
            'tatami_mats' =>'17帖',
            'roomsize' =>'5人以上',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Bスタジオ',
            'studio_id' =>'103',
            'tatami_mats' =>'17帖',
            'roomsize' =>'5人以上',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Cスタジオ',
            'studio_id' =>'103',
            'tatami_mats' =>'13帖',
            'roomsize' =>'5人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Dスタジオ',
            'studio_id' =>'103',
            'tatami_mats' =>'10帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Ast',
            'studio_id' =>'104',
            'tatami_mats' =>'11帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Bst',
            'studio_id' =>'104',
            'tatami_mats' =>'18帖',
            'roomsize' =>'5人以上',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Cst',
            'studio_id' =>'104',
            'tatami_mats' =>'20帖',
            'roomsize' =>'5人以上',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Dst',
            'studio_id' =>'104',
            'tatami_mats' =>'14帖',
            'roomsize' =>'5人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Jスタジオ',
            'studio_id' =>'105',
            'tatami_mats' =>'10帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Pスタジオ',
            'studio_id' =>'105',
            'tatami_mats' =>'10帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Aスタジオ',
            'studio_id' =>'106',
            'tatami_mats' =>'12帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Bスタジオ',
            'studio_id' =>'106',
            'tatami_mats' =>'13帖',
            'roomsize' =>'5人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Cスタジオ',
            'studio_id' =>'106',
            'tatami_mats' =>'14帖',
            'roomsize' =>'5人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Ast',
            'studio_id' =>'107',
            'tatami_mats' =>'18帖',
            'roomsize' =>'5人以上',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Bst',
            'studio_id' =>'107',
            'tatami_mats' =>'13帖',
            'roomsize' =>'5人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Cst',
            'studio_id' =>'107',
            'tatami_mats' =>'13帖',
            'roomsize' =>'5人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Dst',
            'studio_id' =>'107',
            'tatami_mats' =>'10帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Est',
            'studio_id' =>'107',
            'tatami_mats' =>'10帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Astudio',
            'studio_id' =>'108',
            'tatami_mats' =>'15帖',
            'roomsize' =>'5人以上',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Bstudio',
            'studio_id' =>'108',
            'tatami_mats' =>'18帖',
            'roomsize' =>'5人以上',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Cstudio',
            'studio_id' =>'108',
            'tatami_mats' =>'16帖',
            'roomsize' =>'5人以上',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Ast',
            'studio_id' =>'109',
            'tatami_mats' =>'7帖',
            'roomsize' =>'3人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Bst',
            'studio_id' =>'109',
            'tatami_mats' =>'10帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Cst',
            'studio_id' =>'109',
            'tatami_mats' =>'14帖',
            'roomsize' =>'5人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Aスタジオ',
            'studio_id' =>'110',
            'tatami_mats' =>'16帖',
            'roomsize' =>'5人以上',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Bスタジオ',
            'studio_id' =>'110',
            'tatami_mats' =>'16帖',
            'roomsize' =>'5人以上',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Cスタジオ',
            'studio_id' =>'110',
            'tatami_mats' =>'24帖',
            'roomsize' =>'5人以上',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'バンドスタジオ',
            'studio_id' =>'111',
            'tatami_mats' =>'11帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Aスタジオ',
            'studio_id' =>'112',
            'tatami_mats' =>'9帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Bスタジオ',
            'studio_id' =>'112',
            'tatami_mats' =>'9帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Ast メインスタジオ',
            'studio_id' =>'113',
            'tatami_mats' =>'9帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'101st',
            'studio_id' =>'114',
            'tatami_mats' =>'20帖',
            'roomsize' =>'5人以上',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'102st',
            'studio_id' =>'114',
            'tatami_mats' =>'20帖',
            'roomsize' =>'5人以上',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'103st',
            'studio_id' =>'114',
            'tatami_mats' =>'20帖',
            'roomsize' =>'5人以上',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'104st',
            'studio_id' =>'114',
            'tatami_mats' =>'20帖',
            'roomsize' =>'5人以上',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'201st',
            'studio_id' =>'114',
            'tatami_mats' =>'17帖',
            'roomsize' =>'5人以上',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'202st',
            'studio_id' =>'114',
            'tatami_mats' =>'17帖',
            'roomsize' =>'5人以上',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'203st',
            'studio_id' =>'114',
            'tatami_mats' =>'17帖',
            'roomsize' =>'5人以上',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'204st',
            'studio_id' =>'114',
            'tatami_mats' =>'17帖',
            'roomsize' =>'5人以上',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'205st',
            'studio_id' =>'114',
            'tatami_mats' =>'17帖',
            'roomsize' =>'5人以上',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'301st',
            'studio_id' =>'114',
            'tatami_mats' =>'17帖',
            'roomsize' =>'5人以上',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'302st',
            'studio_id' =>'114',
            'tatami_mats' =>'17帖',
            'roomsize' =>'5人以上',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'303st',
            'studio_id' =>'114',
            'tatami_mats' =>'17帖',
            'roomsize' =>'5人以上',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'304st',
            'studio_id' =>'114',
            'tatami_mats' =>'17帖',
            'roomsize' =>'5人以上',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'305st',
            'studio_id' =>'114',
            'tatami_mats' =>'17帖',
            'roomsize' =>'5人以上',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Aスタジオ',
            'studio_id' =>'115',
            'tatami_mats' =>'14帖',
            'roomsize' =>'5人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Bスタジオ',
            'studio_id' =>'115',
            'tatami_mats' =>'11帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Ast',
            'studio_id' =>'116',
            'tatami_mats' =>'10帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Bst',
            'studio_id' =>'116',
            'tatami_mats' =>'10帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Cst',
            'studio_id' =>'116',
            'tatami_mats' =>'4.5帖',
            'roomsize' =>'2人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Aスタジオ',
            'studio_id' =>'117',
            'tatami_mats' =>'12.8帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Bスタジオ',
            'studio_id' =>'117',
            'tatami_mats' =>'9.7帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'501st',
            'studio_id' =>'118',
            'tatami_mats' =>'90帖',
            'roomsize' =>'5人以上',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'601st',
            'studio_id' =>'118',
            'tatami_mats' =>'100帖',
            'roomsize' =>'5人以上',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'502st',
            'studio_id' =>'118',
            'tatami_mats' =>'60帖',
            'roomsize' =>'5人以上',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'503st',
            'studio_id' =>'118',
            'tatami_mats' =>'60帖',
            'roomsize' =>'5人以上',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'602st',
            'studio_id' =>'118',
            'tatami_mats' =>'60帖',
            'roomsize' =>'5人以上',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'S65st',
            'studio_id' =>'118',
            'tatami_mats' =>'23帖',
            'roomsize' =>'5人以上',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Ast',
            'studio_id' =>'119',
            'tatami_mats' =>'12帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Bst',
            'studio_id' =>'119',
            'tatami_mats' =>'18帖',
            'roomsize' =>'5人以上',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Cst',
            'studio_id' =>'119',
            'tatami_mats' =>'15帖',
            'roomsize' =>'5人以上',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Dst',
            'studio_id' =>'119',
            'tatami_mats' =>'15帖',
            'roomsize' =>'5人以上',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Est',
            'studio_id' =>'119',
            'tatami_mats' =>'18帖',
            'roomsize' =>'5人以上',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Fst',
            'studio_id' =>'119',
            'tatami_mats' =>'20帖',
            'roomsize' =>'5人以上',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Gst',
            'studio_id' =>'119',
            'tatami_mats' =>'12帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Hst',
            'studio_id' =>'119',
            'tatami_mats' =>'15帖',
            'roomsize' =>'5人以上',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'A-studio',
            'studio_id' =>'120',
            'tatami_mats' =>'30帖',
            'roomsize' =>'5人以上',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'B-studio',
            'studio_id' =>'120',
            'tatami_mats' =>'26帖',
            'roomsize' =>'5人以上',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'C-studio',
            'studio_id' =>'120',
            'tatami_mats' =>'26帖',
            'roomsize' =>'5人以上',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Ast',
            'studio_id' =>'121',
            'tatami_mats' =>'9帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Bst',
            'studio_id' =>'121',
            'tatami_mats' =>'10帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Cst',
            'studio_id' =>'121',
            'tatami_mats' =>'11帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Fst',
            'studio_id' =>'121',
            'tatami_mats' =>'12帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Ast',
            'studio_id' =>'122',
            'tatami_mats' =>'9.5帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Ast',
            'studio_id' =>'123',
            'tatami_mats' =>'10帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Bst',
            'studio_id' =>'123',
            'tatami_mats' =>'10帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Cst',
            'studio_id' =>'123',
            'tatami_mats' =>'10帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Dst',
            'studio_id' =>'123',
            'tatami_mats' =>'10帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Ast',
            'studio_id' =>'124',
            'tatami_mats' =>'15帖',
            'roomsize' =>'5人以上',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Bst',
            'studio_id' =>'124',
            'tatami_mats' =>'22帖',
            'roomsize' =>'5人以上',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Cst',
            'studio_id' =>'124',
            'tatami_mats' =>'25帖',
            'roomsize' =>'5人以上',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'301A',
            'studio_id' =>'125',
            'tatami_mats' =>'20帖',
            'roomsize' =>'5人以上',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'302C',
            'studio_id' =>'125',
            'tatami_mats' =>'7帖',
            'roomsize' =>'3人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'303C',
            'studio_id' =>'125',
            'tatami_mats' =>'9帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'304C',
            'studio_id' =>'125',
            'tatami_mats' =>'9帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'305C',
            'studio_id' =>'125',
            'tatami_mats' =>'14帖',
            'roomsize' =>'5人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'306C',
            'studio_id' =>'125',
            'tatami_mats' =>'9帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'307C',
            'studio_id' =>'125',
            'tatami_mats' =>'9帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'409C',
            'studio_id' =>'125',
            'tatami_mats' =>'9帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'410C',
            'studio_id' =>'125',
            'tatami_mats' =>'9帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'411B',
            'studio_id' =>'125',
            'tatami_mats' =>'14帖',
            'roomsize' =>'5人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'412A',
            'studio_id' =>'125',
            'tatami_mats' =>'20帖',
            'roomsize' =>'5人以上',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'413B',
            'studio_id' =>'125',
            'tatami_mats' =>'14帖',
            'roomsize' =>'5人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Y',
            'studio_id' =>'126',
            'tatami_mats' =>'24帖',
            'roomsize' =>'5人以上',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'L',
            'studio_id' =>'126',
            'tatami_mats' =>'14帖',
            'roomsize' =>'5人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'T',
            'studio_id' =>'126',
            'tatami_mats' =>'14帖',
            'roomsize' =>'5人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'C',
            'studio_id' =>'126',
            'tatami_mats' =>'14帖',
            'roomsize' =>'5人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'J',
            'studio_id' =>'126',
            'tatami_mats' =>'8帖',
            'roomsize' =>'3人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'1st',
            'studio_id' =>'127',
            'tatami_mats' =>'10帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'2st',
            'studio_id' =>'127',
            'tatami_mats' =>'10帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'3st',
            'studio_id' =>'127',
            'tatami_mats' =>'11帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'5st',
            'studio_id' =>'127',
            'tatami_mats' =>'15帖',
            'roomsize' =>'5人以上',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'6st',
            'studio_id' =>'127',
            'tatami_mats' =>'11帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'7st',
            'studio_id' =>'127',
            'tatami_mats' =>'8帖',
            'roomsize' =>'3人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'301st',
            'studio_id' =>'128',
            'tatami_mats' =>'10帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'302st',
            'studio_id' =>'128',
            'tatami_mats' =>'10帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'303st',
            'studio_id' =>'128',
            'tatami_mats' =>'10帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'304st',
            'studio_id' =>'128',
            'tatami_mats' =>'10帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'305st',
            'studio_id' =>'128',
            'tatami_mats' =>'10帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'201st',
            'studio_id' =>'128',
            'tatami_mats' =>'20帖',
            'roomsize' =>'5人以上',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'202st',
            'studio_id' =>'128',
            'tatami_mats' =>'20帖',
            'roomsize' =>'5人以上',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'01st',
            'studio_id' =>'128',
            'tatami_mats' =>'20帖',
            'roomsize' =>'5人以上',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'203st',
            'studio_id' =>'128',
            'tatami_mats' =>'22帖',
            'roomsize' =>'5人以上',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'02st',
            'studio_id' =>'128',
            'tatami_mats' =>'25帖',
            'roomsize' =>'5人以上',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'03st',
            'studio_id' =>'128',
            'tatami_mats' =>'33帖',
            'roomsize' =>'5人以上',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Green studio',
            'studio_id' =>'129',
            'tatami_mats' =>'16帖',
            'roomsize' =>'5人以上',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Pink studio',
            'studio_id' =>'129',
            'tatami_mats' =>'16帖',
            'roomsize' =>'5人以上',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Yellow studio',
            'studio_id' =>'129',
            'tatami_mats' =>'16帖',
            'roomsize' =>'5人以上',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Blue studio',
            'studio_id' =>'129',
            'tatami_mats' =>'21帖',
            'roomsize' =>'5人以上',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Aスタジオ',
            'studio_id' =>'130',
            'tatami_mats' =>'16帖',
            'roomsize' =>'5人以上',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Bスタジオ',
            'studio_id' =>'130',
            'tatami_mats' =>'12帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Cスタジオ',
            'studio_id' =>'130',
            'tatami_mats' =>'12帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'A STUDIO',
            'studio_id' =>'131',
            'tatami_mats' =>'0',
            'roomsize' =>'0',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'B STUDIO',
            'studio_id' =>'131',
            'tatami_mats' =>'0',
            'roomsize' =>'0',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'L STUDIO',
            'studio_id' =>'131',
            'tatami_mats' =>'0',
            'roomsize' =>'0',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'8畳スタジオ',
            'studio_id' =>'132',
            'tatami_mats' =>'8帖',
            'roomsize' =>'3人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'10畳スタジオ',
            'studio_id' =>'132',
            'tatami_mats' =>'10帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Ast',
            'studio_id' =>'133',
            'tatami_mats' =>'8帖',
            'roomsize' =>'3人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Bst',
            'studio_id' =>'133',
            'tatami_mats' =>'10帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Cst',
            'studio_id' =>'133',
            'tatami_mats' =>'14帖',
            'roomsize' =>'5人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Aスタジオ',
            'studio_id' =>'134',
            'tatami_mats' =>'6.7帖',
            'roomsize' =>'3人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Bスタジオ',
            'studio_id' =>'134',
            'tatami_mats' =>'6.6帖',
            'roomsize' =>'3人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Aスタジオ',
            'studio_id' =>'135',
            'tatami_mats' =>'20帖',
            'roomsize' =>'5人以上',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Bスタジオ',
            'studio_id' =>'135',
            'tatami_mats' =>'10帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Cスタジオ',
            'studio_id' =>'135',
            'tatami_mats' =>'9帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Ast',
            'studio_id' =>'136',
            'tatami_mats' =>'11帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Bst',
            'studio_id' =>'136',
            'tatami_mats' =>'13帖',
            'roomsize' =>'5人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Cst',
            'studio_id' =>'136',
            'tatami_mats' =>'11帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Dst',
            'studio_id' =>'136',
            'tatami_mats' =>'13帖',
            'roomsize' =>'5人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Est',
            'studio_id' =>'136',
            'tatami_mats' =>'11帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Ast',
            'studio_id' =>'137',
            'tatami_mats' =>'13帖',
            'roomsize' =>'5人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Bst',
            'studio_id' =>'137',
            'tatami_mats' =>'12帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Cst',
            'studio_id' =>'137',
            'tatami_mats' =>'12帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Lst',
            'studio_id' =>'137',
            'tatami_mats' =>'16帖',
            'roomsize' =>'5人以上',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Rst',
            'studio_id' =>'137',
            'tatami_mats' =>'10帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Ast',
            'studio_id' =>'138',
            'tatami_mats' =>'24帖',
            'roomsize' =>'5人以上',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Bst',
            'studio_id' =>'138',
            'tatami_mats' =>'8帖',
            'roomsize' =>'3人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Cst',
            'studio_id' =>'138',
            'tatami_mats' =>'12帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Dst',
            'studio_id' =>'138',
            'tatami_mats' =>'10帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Est',
            'studio_id' =>'138',
            'tatami_mats' =>'12帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Fst',
            'studio_id' =>'138',
            'tatami_mats' =>'8帖',
            'roomsize' =>'3人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'A studio',
            'studio_id' =>'139',
            'tatami_mats' =>'16帖',
            'roomsize' =>'5人以上',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'B studio',
            'studio_id' =>'139',
            'tatami_mats' =>'10帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'C studio',
            'studio_id' =>'139',
            'tatami_mats' =>'8帖',
            'roomsize' =>'3人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Ast',
            'studio_id' =>'140',
            'tatami_mats' =>'12帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Bst',
            'studio_id' =>'140',
            'tatami_mats' =>'11帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Cst',
            'studio_id' =>'140',
            'tatami_mats' =>'18帖',
            'roomsize' =>'5人以上',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'1st',
            'studio_id' =>'141',
            'tatami_mats' =>'12帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'2st',
            'studio_id' =>'141',
            'tatami_mats' =>'11帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'3st',
            'studio_id' =>'141',
            'tatami_mats' =>'11帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'4st',
            'studio_id' =>'141',
            'tatami_mats' =>'12帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'6st',
            'studio_id' =>'141',
            'tatami_mats' =>'12帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'7st',
            'studio_id' =>'141',
            'tatami_mats' =>'9帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'A studio',
            'studio_id' =>'142',
            'tatami_mats' =>'11帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'B studio',
            'studio_id' =>'142',
            'tatami_mats' =>'10帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'C studio',
            'studio_id' =>'142',
            'tatami_mats' =>'7帖',
            'roomsize' =>'3人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'D studio',
            'studio_id' =>'142',
            'tatami_mats' =>'8帖',
            'roomsize' =>'3人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'E studio',
            'studio_id' =>'142',
            'tatami_mats' =>'4帖',
            'roomsize' =>'2人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'F studio',
            'studio_id' =>'142',
            'tatami_mats' =>'5帖',
            'roomsize' =>'2人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Studio A',
            'studio_id' =>'143',
            'tatami_mats' =>'12帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Studio B',
            'studio_id' =>'143',
            'tatami_mats' =>'7帖',
            'roomsize' =>'3人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Ast',
            'studio_id' =>'144',
            'tatami_mats' =>'15帖',
            'roomsize' =>'5人以上',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Bst',
            'studio_id' =>'144',
            'tatami_mats' =>'13帖',
            'roomsize' =>'5人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Cst',
            'studio_id' =>'144',
            'tatami_mats' =>'10帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Aスタジオ',
            'studio_id' =>'145',
            'tatami_mats' =>'11帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Bスタジオ',
            'studio_id' =>'145',
            'tatami_mats' =>'7帖',
            'roomsize' =>'3人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Cスタジオ',
            'studio_id' =>'145',
            'tatami_mats' =>'9帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'L-studio',
            'studio_id' =>'146',
            'tatami_mats' =>'24帖',
            'roomsize' =>'5人以上',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'S-studio 2F',
            'studio_id' =>'146',
            'tatami_mats' =>'12帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'S-studio 3F',
            'studio_id' =>'146',
            'tatami_mats' =>'12帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'第1STUDIO',
            'studio_id' =>'147',
            'tatami_mats' =>'10帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'第2STUDIO',
            'studio_id' =>'147',
            'tatami_mats' =>'6帖',
            'roomsize' =>'3人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Astudio',
            'studio_id' =>'148',
            'tatami_mats' =>'20帖',
            'roomsize' =>'5人以上',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Bstudio',
            'studio_id' =>'148',
            'tatami_mats' =>'4帖',
            'roomsize' =>'2人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'1st',
            'studio_id' =>'149',
            'tatami_mats' =>'12帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'2st',
            'studio_id' =>'149',
            'tatami_mats' =>'10.5帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'3st',
            'studio_id' =>'149',
            'tatami_mats' =>'12帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'4st',
            'studio_id' =>'149',
            'tatami_mats' =>'12帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'5st',
            'studio_id' =>'149',
            'tatami_mats' =>'12帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'6st',
            'studio_id' =>'149',
            'tatami_mats' =>'12.5帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'7st',
            'studio_id' =>'149',
            'tatami_mats' =>'13.5帖',
            'roomsize' =>'5人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Ast',
            'studio_id' =>'150',
            'tatami_mats' =>'10帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Bst',
            'studio_id' =>'150',
            'tatami_mats' =>'15帖',
            'roomsize' =>'5人以上',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Cst',
            'studio_id' =>'150',
            'tatami_mats' =>'10帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Dst',
            'studio_id' =>'150',
            'tatami_mats' =>'15帖',
            'roomsize' =>'5人以上',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Est',
            'studio_id' =>'150',
            'tatami_mats' =>'10帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Fst',
            'studio_id' =>'150',
            'tatami_mats' =>'10帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Gst',
            'studio_id' =>'150',
            'tatami_mats' =>'10帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Ast',
            'studio_id' =>'151',
            'tatami_mats' =>'9帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Bst',
            'studio_id' =>'151',
            'tatami_mats' =>'12帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Cst',
            'studio_id' =>'151',
            'tatami_mats' =>'12帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Dst',
            'studio_id' =>'151',
            'tatami_mats' =>'9帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Est',
            'studio_id' =>'151',
            'tatami_mats' =>'25帖',
            'roomsize' =>'5人以上',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Fst',
            'studio_id' =>'151',
            'tatami_mats' =>'14帖',
            'roomsize' =>'5人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Gst',
            'studio_id' =>'151',
            'tatami_mats' =>'9帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Ast',
            'studio_id' =>'152',
            'tatami_mats' =>'9帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Bst',
            'studio_id' =>'152',
            'tatami_mats' =>'9帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Cst',
            'studio_id' =>'152',
            'tatami_mats' =>'12帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Dst',
            'studio_id' =>'152',
            'tatami_mats' =>'12帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Est',
            'studio_id' =>'152',
            'tatami_mats' =>'9帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Fst',
            'studio_id' =>'152',
            'tatami_mats' =>'9帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'1st',
            'studio_id' =>'153',
            'tatami_mats' =>'12帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'2st',
            'studio_id' =>'153',
            'tatami_mats' =>'10帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'3st',
            'studio_id' =>'153',
            'tatami_mats' =>'10帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'4st',
            'studio_id' =>'153',
            'tatami_mats' =>'12帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'5st',
            'studio_id' =>'153',
            'tatami_mats' =>'10帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'6st',
            'studio_id' =>'153',
            'tatami_mats' =>'10帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'A Studio',
            'studio_id' =>'154',
            'tatami_mats' =>'14帖',
            'roomsize' =>'5人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'B Studio',
            'studio_id' =>'154',
            'tatami_mats' =>'18帖',
            'roomsize' =>'5人以上',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'C Studio',
            'studio_id' =>'154',
            'tatami_mats' =>'14帖',
            'roomsize' =>'5人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Aスタジオ',
            'studio_id' =>'155',
            'tatami_mats' =>'18帖',
            'roomsize' =>'5人以上',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Bスタジオ',
            'studio_id' =>'155',
            'tatami_mats' =>'17帖',
            'roomsize' =>'5人以上',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Ast',
            'studio_id' =>'156',
            'tatami_mats' =>'18帖',
            'roomsize' =>'5人以上',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Bst',
            'studio_id' =>'156',
            'tatami_mats' =>'12帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Cst',
            'studio_id' =>'156',
            'tatami_mats' =>'12帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Ast',
            'studio_id' =>'157',
            'tatami_mats' =>'16帖',
            'roomsize' =>'5人以上',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Bst',
            'studio_id' =>'157',
            'tatami_mats' =>'18帖',
            'roomsize' =>'5人以上',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Cst',
            'studio_id' =>'157',
            'tatami_mats' =>'11帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Dst',
            'studio_id' =>'157',
            'tatami_mats' =>'12帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Astudio',
            'studio_id' =>'158',
            'tatami_mats' =>'17帖',
            'roomsize' =>'5人以上',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Bstudio',
            'studio_id' =>'158',
            'tatami_mats' =>'8帖',
            'roomsize' =>'3人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'A STUDIO',
            'studio_id' =>'159',
            'tatami_mats' =>'14.3帖',
            'roomsize' =>'5人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'B STUDIO',
            'studio_id' =>'159',
            'tatami_mats' =>'16.4帖',
            'roomsize' =>'5人以上',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'C STUDIO',
            'studio_id' =>'159',
            'tatami_mats' =>'9帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'D STUDIO',
            'studio_id' =>'159',
            'tatami_mats' =>'10.1帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'E STUDIO',
            'studio_id' =>'159',
            'tatami_mats' =>'10.8帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'G STUDIO',
            'studio_id' =>'159',
            'tatami_mats' =>'9.5帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'H STUDIO',
            'studio_id' =>'159',
            'tatami_mats' =>'11.5帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'1st',
            'studio_id' =>'160',
            'tatami_mats' =>'13帖',
            'roomsize' =>'5人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'2st',
            'studio_id' =>'160',
            'tatami_mats' =>'13帖',
            'roomsize' =>'5人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'3st',
            'studio_id' =>'160',
            'tatami_mats' =>'11帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'4st',
            'studio_id' =>'160',
            'tatami_mats' =>'11帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'5st',
            'studio_id' =>'160',
            'tatami_mats' =>'13帖',
            'roomsize' =>'5人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Ast',
            'studio_id' =>'161',
            'tatami_mats' =>'11帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Bst',
            'studio_id' =>'161',
            'tatami_mats' =>'11帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Cst',
            'studio_id' =>'161',
            'tatami_mats' =>'13帖',
            'roomsize' =>'5人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Dst',
            'studio_id' =>'161',
            'tatami_mats' =>'8帖',
            'roomsize' =>'3人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'本郷店',
            'studio_id' =>'162',
            'tatami_mats' =>'40帖',
            'roomsize' =>'5人以上',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'水道橋店',
            'studio_id' =>'163',
            'tatami_mats' =>'47帖',
            'roomsize' =>'5人以上',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'目黒店',
            'studio_id' =>'164',
            'tatami_mats' =>'78帖',
            'roomsize' =>'5人以上',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Aスタジオ',
            'studio_id' =>'165',
            'tatami_mats' =>'20帖',
            'roomsize' =>'5人以上',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Bスタジオ',
            'studio_id' =>'165',
            'tatami_mats' =>'14帖',
            'roomsize' =>'5人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Cスタジオ',
            'studio_id' =>'165',
            'tatami_mats' =>'12帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Dスタジオ',
            'studio_id' =>'165',
            'tatami_mats' =>'10帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'studio 1',
            'studio_id' =>'166',
            'tatami_mats' =>'10帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'studio 2',
            'studio_id' =>'166',
            'tatami_mats' =>'10帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'studio 3',
            'studio_id' =>'166',
            'tatami_mats' =>'10帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'studio 4',
            'studio_id' =>'166',
            'tatami_mats' =>'14帖',
            'roomsize' =>'5人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'studio 5',
            'studio_id' =>'166',
            'tatami_mats' =>'18帖',
            'roomsize' =>'5人以上',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'studio 6',
            'studio_id' =>'166',
            'tatami_mats' =>'14帖',
            'roomsize' =>'5人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'studio 7',
            'studio_id' =>'166',
            'tatami_mats' =>'18帖',
            'roomsize' =>'5人以上',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'studio 8',
            'studio_id' =>'166',
            'tatami_mats' =>'14帖',
            'roomsize' =>'5人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'studio 9',
            'studio_id' =>'166',
            'tatami_mats' =>'18帖',
            'roomsize' =>'5人以上',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'studio 1',
            'studio_id' =>'167',
            'tatami_mats' =>'9帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'studio 2',
            'studio_id' =>'167',
            'tatami_mats' =>'11帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'studio 3',
            'studio_id' =>'167',
            'tatami_mats' =>'11帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'studio 4',
            'studio_id' =>'167',
            'tatami_mats' =>'13帖',
            'roomsize' =>'5人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'studio 5',
            'studio_id' =>'167',
            'tatami_mats' =>'15帖',
            'roomsize' =>'5人以上',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'studio 6',
            'studio_id' =>'167',
            'tatami_mats' =>'13帖',
            'roomsize' =>'5人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'studio 7',
            'studio_id' =>'167',
            'tatami_mats' =>'15帖',
            'roomsize' =>'5人以上',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'A Studio',
            'studio_id' =>'168',
            'tatami_mats' =>'20帖',
            'roomsize' =>'5人以上',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Aスタジオ',
            'studio_id' =>'170',
            'tatami_mats' =>'26帖',
            'roomsize' =>'5人以上',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Bスタジオ',
            'studio_id' =>'170',
            'tatami_mats' =>'18帖',
            'roomsize' =>'5人以上',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Cスタジオ',
            'studio_id' =>'170',
            'tatami_mats' =>'18帖',
            'roomsize' =>'5人以上',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Dスタジオ',
            'studio_id' =>'170',
            'tatami_mats' =>'9帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'A STUDIO',
            'studio_id' =>'171',
            'tatami_mats' =>'10帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'B STUDIO',
            'studio_id' =>'171',
            'tatami_mats' =>'10帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'C STUDIO',
            'studio_id' =>'171',
            'tatami_mats' =>'10帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Ast',
            'studio_id' =>'172',
            'tatami_mats' =>'12帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Bst',
            'studio_id' =>'172',
            'tatami_mats' =>'15帖',
            'roomsize' =>'5人以上',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Cst',
            'studio_id' =>'172',
            'tatami_mats' =>'12帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Dst',
            'studio_id' =>'172',
            'tatami_mats' =>'11帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Est',
            'studio_id' =>'172',
            'tatami_mats' =>'11帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Ast',
            'studio_id' =>'173',
            'tatami_mats' =>'14帖',
            'roomsize' =>'5人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Bst',
            'studio_id' =>'173',
            'tatami_mats' =>'11帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Cst',
            'studio_id' =>'173',
            'tatami_mats' =>'10帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'A Studio',
            'studio_id' =>'174',
            'tatami_mats' =>'22帖',
            'roomsize' =>'5人以上',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'B Studio',
            'studio_id' =>'174',
            'tatami_mats' =>'12帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'C Studio',
            'studio_id' =>'174',
            'tatami_mats' =>'8帖',
            'roomsize' =>'3人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'D Studio',
            'studio_id' =>'174',
            'tatami_mats' =>'7帖',
            'roomsize' =>'3人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Studio A',
            'studio_id' =>'175',
            'tatami_mats' =>'38帖',
            'roomsize' =>'5人以上',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Studio B',
            'studio_id' =>'175',
            'tatami_mats' =>'39帖',
            'roomsize' =>'5人以上',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Studio C',
            'studio_id' =>'175',
            'tatami_mats' =>'25帖',
            'roomsize' =>'5人以上',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Studio D',
            'studio_id' =>'175',
            'tatami_mats' =>'13帖',
            'roomsize' =>'5人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Studio E',
            'studio_id' =>'175',
            'tatami_mats' =>'10帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Ast',
            'studio_id' =>'176',
            'tatami_mats' =>'8帖',
            'roomsize' =>'3人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Bst',
            'studio_id' =>'176',
            'tatami_mats' =>'10帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Dst',
            'studio_id' =>'176',
            'tatami_mats' =>'18帖',
            'roomsize' =>'5人以上',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Est',
            'studio_id' =>'176',
            'tatami_mats' =>'23帖',
            'roomsize' =>'5人以上',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Fst',
            'studio_id' =>'176',
            'tatami_mats' =>'22帖',
            'roomsize' =>'5人以上',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Aスタジオ',
            'studio_id' =>'177',
            'tatami_mats' =>'10帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'Bスタジオ',
            'studio_id' =>'177',
            'tatami_mats' =>'7帖',
            'roomsize' =>'3人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'1スタジオ',
            'studio_id' =>'178',
            'tatami_mats' =>'14帖',
            'roomsize' =>'5人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'2スタジオ',
            'studio_id' =>'178',
            'tatami_mats' =>'10帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'3スタジオ',
            'studio_id' =>'178',
            'tatami_mats' =>'10帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'4スタジオ',
            'studio_id' =>'178',
            'tatami_mats' =>'6帖',
            'roomsize' =>'3人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'A Studio',
            'studio_id' =>'179',
            'tatami_mats' =>'10帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'B Studio',
            'studio_id' =>'179',
            'tatami_mats' =>'8帖',
            'roomsize' =>'3人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'C Studio',
            'studio_id' =>'179',
            'tatami_mats' =>'9帖',
            'roomsize' =>'4人',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'STUDIO - RONNIE',
            'studio_id' =>'180',
            'tatami_mats' =>'18帖',
            'roomsize' =>'5人以上',
            ];
            DB::table('rooms')->insert($param);

            $param = [
            'name' =>'STUDIO - KEITH',
            'studio_id' =>'180',
            'tatami_mats' =>'14帖',
            'roomsize' =>'5人',
            ];
            DB::table('rooms')->insert($param);

    }

}

