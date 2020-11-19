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
            'id'=>1,
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
            'id'=>2,
            'name' => 'サウンドスタジオノア 渋谷1号店',
            'email' => 'test2@studio.jp',
            'pref' => '東京都',
            'city' => '渋谷区',
            'tel' => '03-5485-1441',
            'url' => 'https://www.studionoah.jp/shibuya1/',
            'image_url' => 'https://www.studionoah.jp/images/common/logo.svg',
        ];
        DB::table('studios')->insert($param);

        $param = [
            'id'=>3,
            'name' => 'サウンドスタジオペンタ 渋谷ムーンサイド',
            'email' => 'test3@studio.jp',
            'pref' => '東京都',
            'city' => '渋谷区',
            'tel' => '03-3496-3433',
            'url' => 'http://www.studiopenta.net/rehearsal/moon.html',
            'image_url' => 'https://pbs.twimg.com/profile_images/460591536078458880/V4yjYkAA.jpeg',
        ];
        DB::table('studios')->insert($param);

        $param = [
            'id'=>4,
            'name' => 'サウンドスタジオノア 秋葉原店',
            'email' => 'test4@studio.jp',
            'pref' => '東京都',
            'city' => '千代田区',
            'tel' => '03-5816-8383',
            'url' => 'https://www.studionoah.jp/akihabara/',
            'image_url' => 'https://www.studionoah.jp/images/common/logo.svg',
        ];
        DB::table('studios')->insert($param);

        $param = [
            'id'=>5,
            'name' => 'スタジオノード秋葉原',
            'email' => 'akihabara@studio-node.com',
            'pref' => '東京都',
            'city' => '千代田区',
            'tel' => '03-5823-4477',
            'url' => 'https://www.studio-node.com/HomeA.html',
            'image_url' => 'https://www.studio-node.com/Logo1.jpg',
        ];
        DB::table('studios')->insert($param);
    }
}
