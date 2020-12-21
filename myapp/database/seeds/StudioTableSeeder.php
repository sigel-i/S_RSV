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
            'email' => 'info@studiopenta.net',
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

        $param = [
            'id'=>6,
            'name' => 'サウンドスタジオノア 銀座店',
            'email' => 'test5@studio.jp',
            'pref' => '東京都',
            'city' => '中央区',
            'tel' => '03-3524-2155',
            'url' => 'https://www.studionoah.jp/ginza/',
            'image_url' => 'https://www.studionoah.jp/images/common/logo.svg',
        ];
        DB::table('studios')->insert($param);

        $param = [
            'id'=>7,
            'name' => 'サウンドスタジオノア 新宿店',
            'email' => 'test6@studio.jp',
            'pref' => '東京都',
            'city' => '新宿区',
            'tel' => '03-5332-8366',
            'url' => 'https://www.studionoah.jp/shinjuku/',
            'image_url' => 'https://www.studionoah.jp/images/common/logo.svg',
        ];
        DB::table('studios')->insert($param);

        $param = [
            'id'=>8,
            'name' => 'スタジオノード新宿',
            'email' => 'shinjuku@studio-node.com',
            'pref' => '東京都',
            'city' => '新宿区',
            'tel' => '03-5386-3636',
            'url' => 'https://www.studio-node.com/HomeSH.html',
            'image_url' => 'https://www.studio-node.com/Logo1.jpg',
        ];
        DB::table('studios')->insert($param);

        $param = [
            'id'=>9,
            'name' => 'スタジオ音楽館 新宿西口',
            'email' => 'info@st-ongakukan.com',
            'pref' => '東京都',
            'city' => '新宿区',
            'tel' => '03-3368-0131',
            'url' => 'http://www.st-ongakukan.com/sinjukunishi/sinjukunishi.html',
            'image_url' => 'http://www.st-ongakukan.com/image_top/img_header_logo.png',
        ];
        DB::table('studios')->insert($param);

        $param = [
            'id'=>10,
            'name' => 'スタジオ音楽館 高田馬場駅前',
            'email' => 'info@st-ongakukan.com',
            'pref' => '東京都',
            'city' => '新宿区',
            'tel' => '03-6278-9288',
            'url' => 'http://www.st-ongakukan.com/takadanobabaekimae/takadanobabaekimae.html',
            'image_url' => 'http://www.st-ongakukan.com/image_top/img_header_logo.png',
        ];
        DB::table('studios')->insert($param);

        $param = [
            'id'=>11,
            'name' => 'サウンドスタジオノア 代々木店',
            'email' => 'test7@studio.jp',
            'pref' => '東京都',
            'city' => '渋谷区',
            'tel' => '03-3408-8819',
            'url' => 'https://www.studionoah.jp/yoyogi/',
            'image_url' => 'https://www.studionoah.jp/images/common/logo.svg',
        ];
        DB::table('studios')->insert($param);

        $param = [
            'id'=>12,
            'name' => 'サウンドスタジオノア 渋谷2号店',
            'email' => 'test8@studio.jp',
            'pref' => '東京都',
            'city' => '渋谷区',
            'tel' => '03-3780-5766',
            'url' => 'https://www.studionoah.jp/shibuya2/',
            'image_url' => 'https://www.studionoah.jp/images/common/logo.svg',
        ];
        DB::table('studios')->insert($param);

        $param = [
            'id'=>13,
            'name' => 'サウンドスタジオノア 赤坂店',
            'email' => 'test9@studio.jp',
            'pref' => '東京都',
            'city' => '港区',
            'tel' => '03-3589-6211',
            'url' => 'https://www.studionoah.jp/akasaka/',
            'image_url' => 'https://www.studionoah.jp/images/common/logo.svg',
        ];
        DB::table('studios')->insert($param);

        $param = [
            'id'=>14,
            'name' => 'GAMP SOUND STUDIO',
            'email' => 'test10@studio.jp',
            'pref' => '東京都',
            'city' => '港区',
            'tel' => '03-6435-2260',
            'url' => 'http://www.gamp-st.com/index.html',
            'image_url' => 'http://www.gamp-st.com/images/sub-header-information.jpg',
        ];
        DB::table('studios')->insert($param);

        $param = [
            'id'=>15,
            'name' => 'サウンドスタジオノア 中野店',
            'email' => 'test10@studio.jp',
            'pref' => '東京都',
            'city' => '中野区',
            'tel' => '03-5318-4110',
            'url' => 'https://www.studionoah.jp/nakano/',
            'image_url' => 'https://www.studionoah.jp/images/common/logo.svg',
        ];
        DB::table('studios')->insert($param);

        $param = [
            'id'=>16,
            'name' => 'サウンドスタジオノア 野方店',
            'email' => 'test11@studio.jp',
            'pref' => '東京都',
            'city' => '中野区',
            'tel' => '03-5380-1969',
            'url' => 'https://www.studionoah.jp/nogata/',
            'image_url' => 'https://www.studionoah.jp/images/common/logo.svg',
        ];
        DB::table('studios')->insert($param);

        $param = [
            'id'=>17,
            'name' => 'South Sound Studio',
            'email' => 'test12@studio.jp',
            'pref' => '東京都',
            'city' => '杉並区',
            'tel' => '03-3316-3061',
            'url' => 'http://sub.southsoundstudio.com/index.html',
            'image_url' => 'http://sub.southsoundstudio.com/common/header/header_logo.gif',
        ];
        DB::table('studios')->insert($param);

        $param = [
            'id'=>18,
            'name' => 'G-ROKS',
            'email' => 'groks@groks.co.jp',
            'pref' => '東京都',
            'city' => '杉並区',
            'tel' => '03-3325-3311',
            'url' => 'https://www.groks.co.jp/',
            'image_url' => 'https://static.wixstatic.com/media/b1dc3b_af2d87b5112d435abeacfa7933c59a33~mv2.jpg/v1/fill/w_186,h_88,al_c,q_80,usm_0.66_1.00_0.01/b1dc3b_af2d87b5112d435abeacfa7933c59a33~mv2.webp',
        ];
        DB::table('studios')->insert($param);

        $param = [
            'id'=>19,
            'name' => 'STUDIO UEN',
            'email' => 'test13@studio.jp',
            'pref' => '東京都',
            'city' => '杉並区',
            'tel' => '03-5382-3631',
            'url' => 'https://uen.co.jp/?md=atjazz',
            'image_url' => 'https://uen.co.jp/common/img/img177qi0934_1.png',
        ];
        DB::table('studios')->insert($param);

        $param = [
            'id'=>20,
            'name' => 'サウンドスタジオノア 池袋店',
            'email' => 'test14@studio.jp',
            'pref' => '東京都',
            'city' => '豊島区',
            'tel' => '03-5951-8400',
            'url' => 'https://www.studionoah.jp/ikebukuro/',
            'image_url' => 'https://www.studionoah.jp/images/common/logo.svg',
        ];
        DB::table('studios')->insert($param);

        $param = [
            'id'=>21,
            'name' => 'BASS ON TOP 池袋西口店',
            'email' => 'test15@studio.jp',
            'pref' => '東京都',
            'city' => '豊島区',
            'tel' => '03-5992-7720',
            'url' => 'http://bassontop.tokyo.jp/band/ikebukuro-nishiguchi/',
            'image_url' => 'http://bassontop.tokyo.jp/img/common/log_under.png',
        ];
        DB::table('studios')->insert($param);

        $param = [
            'id'=>22,
            'name' => 'サウンドスタジオペンタ 池袋ハンズサイド',
            'email' => 'info@studiopenta.net',
            'pref' => '東京都',
            'city' => '豊島区',
            'tel' => '03-3981-4436',
            'url' => 'http://www.studiopenta.net/rehearsal/hands.html',
            'image_url' => 'https://pbs.twimg.com/profile_images/460591536078458880/V4yjYkAA.jpeg',
        ];
        DB::table('studios')->insert($param);

        $param = [
            'id'=>23,
            'name' => 'サウンドスタジオペンタ 池袋ロックオン',
            'email' => 'info@studiopenta.net',
            'pref' => '東京都',
            'city' => '豊島区',
            'tel' => '03-3986-2022',
            'url' => 'http://www.studiopenta.net/rehearsal/rockon.html',
            'image_url' => 'https://pbs.twimg.com/profile_images/460591536078458880/V4yjYkAA.jpeg',
        ];
        DB::table('studios')->insert($param);

        $param = [
            'id'=>24,
            'name' => 'サウンドスタジオペンタ 池袋店',
            'email' => 'info@studiopenta.net',
            'pref' => '東京都',
            'city' => '豊島区',
            'tel' => '03-3981-5540',
            'url' => 'http://www.studiopenta.net/rehearsal/ikebukuro.html',
            'image_url' => 'https://pbs.twimg.com/profile_images/460591536078458880/V4yjYkAA.jpeg',
        ];
        DB::table('studios')->insert($param);

        $param = [
            'id'=>25,
            'name' => 'Vivo Sound Studio',
            'email' => 'test16@studio.jp',
            'pref' => '東京都',
            'city' => '豊島区',
            'tel' => '03-5391-3411',
            'url' => 'http://www.vivo-studio.com/',
            'image_url' => 'http://www.vivo-studio.com/images/default/logo.png',
        ];
        DB::table('studios')->insert($param);

        $param = [
            'id'=>26,
            'name' => 'スタジオ音楽館 上野御徒町',
            'email' => 'info@st-ongakukan.com',
            'pref' => '東京都',
            'city' => '台東区',
            'tel' => '03-5812-1169',
            'url' => 'http://www.st-ongakukan.com/ueno/ueno.html',
            'image_url' => 'http://www.st-ongakukan.com/image_top/img_header_logo.png',
        ];
        DB::table('studios')->insert($param);

        $param = [
            'id'=>27,
            'name' => 'Studio Scout',
            'email' => 'test17@studio.jp',
            'pref' => '東京都',
            'city' => '北区',
            'tel' => '03-3910-0031',
            'url' => 'http://studio-scout.com/index.html',
            'image_url' => 'http://studio-scout.com/images/logo_header.png',
        ];
        DB::table('studios')->insert($param);

        $param = [
            'id'=>28,
            'name' => 'SoundStudio FACE',
            'email' => 'info@st-face.com',
            'pref' => '東京都',
            'city' => '北区',
            'tel' => '03-3598-0300',
            'url' => 'https://st-face.com/main.html',
            'image_url' => 'https://st-face.com/images/header-logo-bg.png',
        ];
        DB::table('studios')->insert($param);

        $param = [
            'id'=>29,
            'name' => 'S0S-MISIC',
            'email' => 'sos69on@gmail.com',
            'pref' => '東京都',
            'city' => '江東区',
            'tel' => '03-5245-3777',
            'url' => 'http://sos-music.jp/?md=atjazz#myPage',
            'image_url' => 'http://sos-music.jp/img/sos_logo01.jpg',
        ];
        DB::table('studios')->insert($param);

        $param = [
            'id'=>30,
            'name' => 'Studio DIVO 亀戸',
            'email' => 'test18@studio.jp',
            'pref' => '東京都',
            'city' => '江東区',
            'tel' => '03-5858-9197',
            'url' => 'https://ojji91.wixsite.com/pre-sudio-divo',
            'image_url' => 'https://static.wixstatic.com/media/7cf67c_ed621b644cc742509b9872ae662a5827.png/v1/fill/w_140,h_140,al_c,lg_1,q_85/7cf67c_ed621b644cc742509b9872ae662a5827.webp',
        ];
        DB::table('studios')->insert($param);

        $param = [
            'id'=>31,
            'name' => 'STUDIO ALES',
            'email' => 'test19@studio.jp',
            'pref' => '東京都',
            'city' => '板橋区',
            'tel' => '03-3964-6377',
            'url' => 'http://www.studio-ales.net/index.html',
            'image_url' => 'http://www.studio-ales.net/images/ares-top1.jpg',
        ];
        DB::table('studios')->insert($param);

        $param = [
            'id'=>32,
            'name' => 'STUDIO Dabo',
            'email' => 'st@dabo.co.jp',
            'pref' => '東京都',
            'city' => '板橋区',
            'tel' => '03-3963-0146',
            'url' => 'http://dabo.co.jp/',
            'image_url' => '../images/666897_m.jpg',
        ];
        DB::table('studios')->insert($param);

        $param = [
            'id'=>33,
            'name' => 'サウンドスタジオペンタ 五反田店',
            'email' => 'info@studiopenta.net',
            'pref' => '東京都',
            'city' => '品川区',
            'tel' => '03-3447-2333',
            'url' => 'http://www.studiopenta.net/rehearsal/gotanda.html',
            'image_url' => 'https://pbs.twimg.com/profile_images/460591536078458880/V4yjYkAA.jpeg',
        ];
        DB::table('studios')->insert($param);

        $param = [
            'id'=>34,
            'name' => 'サウンドスタジオノア 目黒不動前店',
            'email' => 'test20@studio.jp',
            'pref' => '東京都',
            'city' => '品川区',
            'tel' => '03-5951-8400',
            'url' => 'https://www.studionoah.jp/fudomae/',
            'image_url' => 'https://www.studionoah.jp/images/common/logo.svg',
        ];
        DB::table('studios')->insert($param);

        $param = [
            'id'=>35,
            'name' => 'シブヤ楽器店スタジオ',
            'email' => 'fvgw7420@nifty.com',
            'pref' => '東京都',
            'city' => '品川区',
            'tel' => '03-3773-0131',
            'url' => 'http://www.shibuyagakki.com/website/studio.html',
            'image_url' => 'http://www.shibuyagakki.com/website/images/toplogo.gif',
        ];
        DB::table('studios')->insert($param);

        $param = [
            'id'=>36,
            'name' => 'STUDIO BAYD 高輪店',
            'email' => 'test21@studio.jp',
            'pref' => '東京都',
            'city' => '品川区',
            'tel' => '03-5789-0054',
            'url' => 'http://www.studio-bayd.com/takanawa/',
            'image_url' => 'http://www.studio-bayd.com/wp/wp-content/themes/twentyseventeen_child/img/logo_PC.png',
        ];
        DB::table('studios')->insert($param);

        $param = [
            'id'=>37,
            'name' => 'サウンドショット武蔵関',
            'email' => 'soundshot.rec@gmail.com',
            'pref' => '東京都',
            'city' => '練馬区',
            'tel' => '03-3594-0029',
            'url' => 'http://sound-shot.tokyo/',
            'image_url' => 'http://sound-shot.tokyo/wp-content/uploads/2017/12/top3.png',
        ];
        DB::table('studios')->insert($param);

        $param = [
            'id'=>38,
            'name' => 'Studio Dusty Miller',
            'email' => 'mail@dusty.jp',
            'pref' => '東京都',
            'city' => '練馬区',
            'tel' => '03-5995-1389',
            'url' => 'http://dusty.jp/studio/',
            'image_url' => 'http://dusty.jp/studio/sozai/top/topphoto.jpg',
        ];
        DB::table('studios')->insert($param);

        $param = [
            'id'=>39,
            'name' => 'Dot Spot Studio',
            'email' => 'test22@studio.jp',
            'pref' => '東京都',
            'city' => '練馬区',
            'tel' => '03-5393-2555',
            'url' => 'https://bighitcompany.com/dot-spot/',
            'image_url' => '../images/666897_m.jpg',
        ];
        DB::table('studios')->insert($param);

        $param = [
            'id'=>40,
            'name' => 'STUDIO MOTHER HOUSE 練馬店',
            'email' => 'test23@studio.jp',
            'pref' => '東京都',
            'city' => '練馬区',
            'tel' => '03-3991-0600',
            'url' => 'https://www.mother-house.com/nerima/',
            'image_url' => 'https://www.mother-house.com/wp-content/uploads/2019/03/sutadiobana-.png',
        ];
        DB::table('studios')->insert($param);

        $param = [
            'id'=>41,
            'name' => 'STUDIO MOTHER HOUSE 江古田店',
            'email' => 'test24@studio.jp',
            'pref' => '東京都',
            'city' => '練馬区',
            'tel' => '03-3959-2083',
            'url' => 'https://www.mother-house.com/ekoda/',
            'image_url' => 'https://www.mother-house.com/wp-content/uploads/2019/03/sutadiobana-.png',
        ];
        DB::table('studios')->insert($param);

        $param = [
            'id'=>42,
            'name' => 'STUDIO MOTHER HOUSE 池袋店',
            'email' => 'test25@studio.jp',
            'pref' => '東京都',
            'city' => '豊島区',
            'tel' => '03-3959-2083',
            'url' => 'https://www.mother-house.com/ikebukuro/',
            'image_url' => 'https://www.mother-house.com/wp-content/uploads/2019/03/sutadiobana-.png',
        ];
        DB::table('studios')->insert($param);

        $param = [
            'id'=>43,
            'name' => 'サウンドスタジオノア 池尻大橋店',
            'email' => 'test26@studio.jp',
            'pref' => '東京都',
            'city' => '目黒区',
            'tel' => '03-3467-1101',
            'url' => 'https://www.studionoah.jp/ikejiri/',
            'image_url' => 'https://www.studionoah.jp/images/common/logo.svg',
        ];
        DB::table('studios')->insert($param);

        $param = [
            'id'=>44,
            'name' => 'サウンドスタジオノア 学芸大店',
            'email' => 'test27@studio.jp',
            'pref' => '東京都',
            'city' => '目黒区',
            'tel' => '03-3710-2011',
            'url' => 'https://www.studionoah.jp/gakudai/',
            'image_url' => 'https://www.studionoah.jp/images/common/logo.svg',
        ];
        DB::table('studios')->insert($param);

        $param = [
            'id'=>45,
            'name' => 'KEN MUSIC STUDIO',
            'email' => 'test28@studio.jp',
            'pref' => '東京都',
            'city' => '足立区',
            'tel' => '03-3852-4174',
            'url' => 'https://www.kenmusic.co.jp/KMS/',
            'image_url' => 'https://www.kenmusic.co.jp/KMS/img/kenmusic.png',
        ];
        DB::table('studios')->insert($param);

        $param = [
            'id'=>46,
            'name' => 'サウンドスタジオノア 田園調布店',
            'email' => 'test28@studio.jp',
            'pref' => '東京都',
            'city' => '大田区',
            'tel' => '03-5483-0082',
            'url' => 'https://www.grandpiano.jp/denenchofu/',
            'image_url' => 'https://www.studionoah.jp/images/common/logo.svg',
        ];
        DB::table('studios')->insert($param);

        $param = [
            'id'=>47,
            'name' => 'SOUND STUDIO OTOKITI',
            'email' => 'info@studio-otokiti.com',
            'pref' => '東京都',
            'city' => '江戸川区',
            'tel' => '03-5948-5602',
            'url' => 'https://www.studio-otokiti.com/?md=atjazz',
            'image_url' => 'https://static.wixstatic.com/media/d6ff62_20f532b100844029a285319ad3375e3e~mv2.png/v1/fill/w_356,h_110,al_c,q_85,usm_0.66_1.00_0.01/otokiti_logo2020.webp',
        ];
        DB::table('studios')->insert($param);

        $param = [
            'id'=>48,
            'name' => 'リンキィディンクスタジオ葛西店',
            'email' => 'test32@studio.jp',
            'pref' => '東京都',
            'city' => '江戸川区',
            'tel' => '03-5676-2135',
            'url' => 'https://rinky.info/studio/kasai/',
            'image_url' => 'http://studio-navi.jp/img_photo/pic_main_1/Rinkydinkstudio-1.jpg',
        ];
        DB::table('studios')->insert($param);

        $param = [
            'id'=>49,
            'name' => 'サウンドスタジオノア 駒沢店',
            'email' => 'test29@studio.jp',
            'pref' => '東京都',
            'city' => '世田谷区',
            'tel' => '03-5433-5711',
            'url' => 'https://www.studionoah.jp/komazawa/',
            'image_url' => 'https://www.studionoah.jp/images/common/logo.svg',
        ];
        DB::table('studios')->insert($param);

        $param = [
            'id'=>50,
            'name' => 'サウンドスタジオノア 三軒茶屋店',
            'email' => 'test30@studio.jp',
            'pref' => '東京都',
            'city' => '世田谷区',
            'tel' => '03-5432-7221',
            'url' => 'https://www.studionoah.jp/sancha/',
            'image_url' => 'https://www.studionoah.jp/images/common/logo.svg',
        ];
        DB::table('studios')->insert($param);

        $param = [
            'id'=>51,
            'name' => 'サウンドスタジオノア 下北沢店',
            'email' => 'test31@studio.jp',
            'pref' => '東京都',
            'city' => '世田谷区',
            'tel' => '03-3466-0058',
            'url' => 'https://www.studionoah.jp/shimokita/',
            'image_url' => 'https://www.studionoah.jp/images/common/logo.svg',
        ];
        DB::table('studios')->insert($param);

        $param = [
            'id'=>52,
            'name' => 'サウンドスタジオノア 自由が丘店',
            'email' => 'test31@studio.jp',
            'pref' => '東京都',
            'city' => '目黒区',
            'tel' => '03-5701-7700',
            'url' => 'https://www.studionoah.jp/jiyugaoka/',
            'image_url' => 'https://www.studionoah.jp/images/common/logo.svg',
        ];
        DB::table('studios')->insert($param);

        $param = [
            'id'=>53,
            'name' => 'リンキィディンクスタジオ梅ヶ丘店',
            'email' => 'test33@studio.jp',
            'pref' => '東京都',
            'city' => '世田谷区',
            'tel' => '03-3420-3721',
            'url' => 'https://rinky.info/studio/umegaoka/',
            'image_url' => 'http://studio-navi.jp/img_photo/pic_main_1/Rinkydinkstudio-1.jpg',
        ];
        DB::table('studios')->insert($param);

        $param = [
            'id'=>54,
            'name' => 'リンキィディンクスタジオ下北沢1st店',
            'email' => 'test34@studio.jp',
            'pref' => '東京都',
            'city' => '世田谷区',
            'tel' => '03-5465-6569',
            'url' => 'https://rinky.info/studio/shimokitazawa1/',
            'image_url' => 'http://studio-navi.jp/img_photo/pic_main_1/Rinkydinkstudio-1.jpg',
        ];
        DB::table('studios')->insert($param);

        $param = [
            'id'=>55,
            'name' => 'リンキィディンクスタジオ下北沢2nd店',
            'email' => 'test35@studio.jp',
            'pref' => '東京都',
            'city' => '世田谷区',
            'tel' => '03-3466-0169',
            'url' => 'https://rinky.info/studio/shimokitazawa2/',
            'image_url' => 'http://studio-navi.jp/img_photo/pic_main_1/Rinkydinkstudio-1.jpg',
        ];
        DB::table('studios')->insert($param);

        $param = [
            'id'=>56,
            'name' => 'リンキィディンクスタジオ都立大店',
            'email' => 'test36@studio.jp',
            'pref' => '東京都',
            'city' => '目黒区',
            'tel' => '03-3718-7176',
            'url' => 'https://rinky.info/studio/toritsu/',
            'image_url' => 'http://studio-navi.jp/img_photo/pic_main_1/Rinkydinkstudio-1.jpg',
        ];
        DB::table('studios')->insert($param);

        $param = [
            'id'=>57,
            'name' => 'リンキィディンクスタジオ中野店',
            'email' => 'test37@studio.jp',
            'pref' => '東京都',
            'city' => '中野区',
            'tel' => '03-5385-0354',
            'url' => 'https://rinky.info/studio/nakano/',
            'image_url' => 'http://studio-navi.jp/img_photo/pic_main_1/Rinkydinkstudio-1.jpg',
        ];
        DB::table('studios')->insert($param);

        $param = [
            'id'=>58,
            'name' => 'リンキィディンクスタジオ荻窪店',
            'email' => 'test38@studio.jp',
            'pref' => '東京都',
            'city' => '杉並区',
            'tel' => '03-3393-3359',
            'url' => 'https://rinky.info/studio/ogikubo/',
            'image_url' => 'http://studio-navi.jp/img_photo/pic_main_1/Rinkydinkstudio-1.jpg',
        ];
        DB::table('studios')->insert($param);

        $param = [
            'id'=>59,
            'name' => 'リンキィディンクスタジオ西荻店',
            'email' => 'test39@studio.jp',
            'pref' => '東京都',
            'city' => '杉並区',
            'tel' => '03-3335-9131',
            'url' => 'https://rinky.info/studio/nishiogi/',
            'image_url' => 'http://studio-navi.jp/img_photo/pic_main_1/Rinkydinkstudio-1.jpg',
        ];
        DB::table('studios')->insert($param);

        $param = [
            'id'=>60,
            'name' => 'リンキィディンクスタジオ吉祥寺1st WARP店',
            'email' => 'test40@studio.jp',
            'pref' => '東京都',
            'city' => '武蔵野市',
            'tel' => '0422-22-3516',
            'url' => 'https://rinky.info/studio/kichijoji1/',
            'image_url' => 'http://studio-navi.jp/img_photo/pic_main_1/Rinkydinkstudio-1.jpg',
        ];
        DB::table('studios')->insert($param);

        $param = [
            'id'=>61,
            'name' => 'リンキィディンクスタジオ吉祥寺スタジオORES店',
            'email' => 'test41@studio.jp',
            'pref' => '東京都',
            'city' => '武蔵野市',
            'tel' => '0422-20-2355',
            'url' => 'https://rinky.info/studio/ores/',
            'image_url' => 'http://studio-navi.jp/img_photo/pic_main_1/Rinkydinkstudio-1.jpg',
        ];
        DB::table('studios')->insert($param);

        $param = [
            'id'=>62,
            'name' => 'リンキィディンクスタジオ町田店',
            'email' => 'test42@studio.jp',
            'pref' => '東京都',
            'city' => '町田市',
            'tel' => '042-723-6951',
            'url' => 'https://rinky.info/studio/machida/',
            'image_url' => 'http://studio-navi.jp/img_photo/pic_main_1/Rinkydinkstudio-1.jpg',
        ];
        DB::table('studios')->insert($param);

        $param = [
            'id'=>63,
            'name' => 'リンキィディンクスタジオ八王子1st店',
            'email' => 'test43@studio.jp',
            'pref' => '東京都',
            'city' => '八王子市',
            'tel' => '042-626-2282',
            'url' => 'https://rinky.info/studio/hachioji1/',
            'image_url' => 'http://studio-navi.jp/img_photo/pic_main_1/Rinkydinkstudio-1.jpg',
        ];
        DB::table('studios')->insert($param);

        $param = [
            'id'=>64,
            'name' => 'リンキィディンクスタジオ八王子2nd店',
            'email' => 'test44@studio.jp',
            'pref' => '東京都',
            'city' => '八王子市',
            'tel' => '042-627-1200',
            'url' => 'https://rinky.info/studio/hachioji2/',
            'image_url' => 'http://studio-navi.jp/img_photo/pic_main_1/Rinkydinkstudio-1.jpg',
        ];
        DB::table('studios')->insert($param);

        $param = [
            'id'=>65,
            'name' => 'サウンドスタジオノア 吉祥寺店',
            'email' => 'test45@studio.jp',
            'pref' => '東京都',
            'city' => '武蔵野市',
            'tel' => '0422-23-1741',
            'url' => 'https://www.studionoah.jp/kichijoji/',
            'image_url' => 'https://www.studionoah.jp/images/common/logo.svg',
        ];
        DB::table('studios')->insert($param);

        $param = [
            'id'=>66,
            'name' => 'サウンドスタジオノア 初台店',
            'email' => 'test46@studio.jp',
            'pref' => '東京都',
            'city' => '渋谷区',
            'tel' => '03-3373-3711',
            'url' => 'https://www.studionoah.jp/hatsudai/',
            'image_url' => 'https://www.studionoah.jp/images/common/logo.svg',
        ];
        DB::table('studios')->insert($param);

        $param = [
            'id'=>67,
            'name' => 'サウンドスタジオノア 恵比寿店',
            'email' => 'test47@studio.jp',
            'pref' => '東京都',
            'city' => '渋谷区',
            'tel' => '03-5447-6066',
            'url' => 'https://www.studionoah.jp/ebisu/',
            'image_url' => 'https://www.studionoah.jp/images/common/logo.svg',
        ];
        DB::table('studios')->insert($param);

        $param = [
            'id'=>68,
            'name' => 'サウンドスタジオノア 恵比寿店',
            'email' => 'test48@studio.jp',
            'pref' => '東京都',
            'city' => '渋谷区',
            'tel' => '03-5447-6066',
            'url' => 'https://www.studionoah.jp/ebisu/',
            'image_url' => 'https://www.studionoah.jp/images/common/logo.svg',
        ];
        DB::table('studios')->insert($param);

        $param = [
            'id'=>69,
            'name' => 'BASS ON TOP 中野サンプラザ店',
            'email' => 'test49@studio.jp',
            'pref' => '東京都',
            'city' => '中野区',
            'tel' => '03-5345-5825',
            'url' => 'http://bassontop.tokyo.jp/band/nakano/',
            'image_url' => 'http://bassontop.tokyo.jp/img/common/log_under.png',
        ];
        DB::table('studios')->insert($param);

        $param = [
            'id'=>70,
            'name' => 'BASS ON TOP 高田馬場店',
            'email' => 'test50@studio.jp',
            'pref' => '東京都',
            'city' => '新宿区',
            'tel' => '03-3203-9502',
            'url' => 'http://bassontop.tokyo.jp/band/takadanobaba/',
            'image_url' => 'http://bassontop.tokyo.jp/img/common/log_under.png',
        ];
        DB::table('studios')->insert($param);

        $param = [
            'id'=>71,
            'name' => 'BASS ON TOP 高田馬場店',
            'email' => 'test51@studio.jp',
            'pref' => '東京都',
            'city' => '新宿区',
            'tel' => '03-3203-9502',
            'url' => 'http://bassontop.tokyo.jp/band/takadanobaba/',
            'image_url' => 'http://bassontop.tokyo.jp/img/common/log_under.png',
        ];
        DB::table('studios')->insert($param);

        $param = [
            'id'=>72,
            'name' => 'GATEWAYSTUDIO 池袋北口店',
            'email' => 'test52@studio.jp',
            'pref' => '東京都',
            'city' => '豊島区',
            'tel' => '03-5396-1119',
            'url' => 'http://www.gw-studio.com/studios/studio_iken/index',
            'image_url' => 'http://www.gw-studio.com/wp-content/uploads/2019/10/logo-wh.png',
        ];
        DB::table('studios')->insert($param);

        $param = [
            'id'=>73,
            'name' => 'GATEWAYSTUDIO 高田馬場3号店',
            'email' => 'test53@studio.jp',
            'pref' => '東京都',
            'city' => '新宿区',
            'tel' => '03-3200-9997',
            'url' => 'http://www.gw-studio.com/studios/studio_baba3rd/index',
            'image_url' => 'http://www.gw-studio.com/wp-content/uploads/2019/10/logo-wh.png',
        ];
        DB::table('studios')->insert($param);

        $param = [
            'id'=>74,
            'name' => 'GATEWAYSTUDIO 渋谷道玄坂店',
            'email' => 'test54@studio.jp',
            'pref' => '東京都',
            'city' => '渋谷区',
            'tel' => '03-3462-5552',
            'url' => 'http://www.gw-studio.com/studios/studio_shibu2/index',
            'image_url' => 'http://www.gw-studio.com/wp-content/uploads/2019/10/logo-wh.png',
        ];
        DB::table('studios')->insert($param);

        $param = [
            'id'=>75,
            'name' => 'GATEWAYSTUDIO 町田店',
            'email' => 'test55@studio.jp',
            'pref' => '東京都',
            'city' => '町田市',
            'tel' => '042-747-9990',
            'url' => 'http://www.gw-studio.com/studios/studio_machi/index',
            'image_url' => 'http://www.gw-studio.com/wp-content/uploads/2019/10/logo-wh.png',
        ];
        DB::table('studios')->insert($param);

        $param = [
            'id'=>76,
            'name' => 'クラウドナインスタジオ 町田店',
            'email' => 'test56@studio.jp',
            'pref' => '東京都',
            'city' => '町田市',
            'tel' => '042-721-9091',
            'url' => 'https://www.cloud-9-studio.com/studio/machida.html',
            'image_url' => 'https://www.cloud-9-studio.com/global/img/ci_pc.png',
        ];
        DB::table('studios')->insert($param);

        $param = [
            'id'=>77,
            'name' => 'granlead studio',
            'email' => 'test57@studio.jp',
            'pref' => '東京都',
            'city' => '渋谷区',
            'tel' => '050-3628-1033',
            'url' => 'https://www.granlead-studio.com/',
            'image_url' => 'https://www.granlead-studio.com/wp-content/themes/granleadstudio-thema/assets/img/common/header-logo.png',
        ];
        DB::table('studios')->insert($param);

        $param = [
            'id'=>78,
            'name' => 'STUDIO SEEZE',
            'email' => 'test58@studio.jp',
            'pref' => '東京都',
            'city' => '目黒区',
            'tel' => '03-6804-8133',
            'url' => 'http://www.studio-seeze.com/index.html',
            'image_url' => 'http://www.studio-seeze.com/images/seeze_logo-a.jpg',
        ];
        DB::table('studios')->insert($param);

        $param = [
            'id'=>79,
            'name' => 'サウンドスタジオパックス 北千住店',
            'email' => 'test59@studio.jp',
            'pref' => '東京都',
            'city' => '足立区',
            'tel' => '03-6806-2878',
            'url' => 'http://www.studio-packs.jp/kitasenju',
            'image_url' => 'http://www.studio-packs.jp/unisoncms_studio_packs/static/uploads/contents/managed_html_file.name.a0ddbfde3103be5b.7061636b735f6c6f676f5f323031355f6b75726f616b61322e6a7067/packs_logo_2015_kuroaka2.thumb_148_33.jpg',
        ];
        DB::table('studios')->insert($param);

        $param = [
            'id'=>80,
            'name' => '島村楽器 赤羽アピレ店',
            'email' => 'test60@studio.jp',
            'pref' => '東京都',
            'city' => '北区',
            'tel' => '03-3900-6999',
            'url' => 'https://www.shimamura.co.jp/shop/akabane/studio-guide',
            'image_url' => 'https://www.shimamura.co.jp/img/logo.svg?up=20180419',
        ];
        DB::table('studios')->insert($param);

        $param = [
            'id'=>81,
            'name' => '島村楽器 イオン葛西店',
            'email' => 'test61@studio.jp',
            'pref' => '東京都',
            'city' => '江戸川区',
            'tel' => '03-3675-1151',
            'url' => 'https://www.shimamura.co.jp/shop/kasai/studio-guide',
            'image_url' => 'https://www.shimamura.co.jp/img/logo.svg?up=20180419',
        ];
        DB::table('studios')->insert($param);

        $param = [
            'id'=>82,
            'name' => '島村楽器 イオンモール日の出店',
            'email' => 'test62@studio.jp',
            'pref' => '東京都',
            'city' => '西多摩郡',
            'tel' => '042-588-8606',
            'url' => 'https://www.shimamura.co.jp/shop/hinode/studio-guide',
            'image_url' => 'https://www.shimamura.co.jp/img/logo.svg?up=20180419',
        ];
        DB::table('studios')->insert($param);

        $param = [
            'id'=>83,
            'name' => '島村楽器 丸井錦糸町クラシック店',
            'email' => 'test63@studio.jp',
            'pref' => '東京都',
            'city' => '墨田区',
            'tel' => '03-5600-3888',
            'url' => 'https://www.shimamura.co.jp/shop/kinshicho/studio-guide',
            'image_url' => 'https://www.shimamura.co.jp/img/logo.svg?up=20180419',
        ];
        DB::table('studios')->insert($param);

        $param = [
            'id'=>84,
            'name' => '島村楽器 ミュージックサロン船堀店',
            'email' => 'test64@studio.jp',
            'pref' => '東京都',
            'city' => '江戸川区',
            'tel' => '03-3689-4340',
            'url' => 'https://www.shimamura.co.jp/shop/ms-funabori/studio-guide',
            'image_url' => 'https://www.shimamura.co.jp/img/logo.svg?up=20180419',
        ];
        DB::table('studios')->insert($param);

        $param = [
            'id'=>85,
            'name' => '島村楽器 ミーナ町田店',
            'email' => 'test65@studio.jp',
            'pref' => '東京都',
            'city' => '町田市',
            'tel' => '042-710-6088',
            'url' => 'https://www.shimamura.co.jp/shop/machida/studio-guide',
            'image_url' => 'https://www.shimamura.co.jp/img/logo.svg?up=20180419',
        ];
        DB::table('studios')->insert($param);

        $param = [
            'id'=>86,
            'name' => 'studio WING',
            'email' => 'test66@studio.jp',
            'pref' => '東京都',
            'city' => '北区',
            'tel' => '03-3903-1761',
            'url' => 'https://www.liquid-gain.com/',
            'image_url' => 'https://www.liquid-gain.com/wing_ver5/images/header_rogo_wing_02.png',
        ];
        DB::table('studios')->insert($param);

        $param = [
            'id'=>87,
            'name' => 'スタジオ・コヤーマ',
            'email' => 'test67@studio.jp',
            'pref' => '東京都',
            'city' => '杉並区',
            'tel' => '03-5373-8248',
            'url' => 'http://s-kym.com/',
            'image_url' => 'http://s-kym.com/img/logo-02.gif',
        ];
        DB::table('studios')->insert($param);

        $param = [
            'id'=>88,
            'name' => 'スタジオ ポハサ',
            'email' => 'test68@studio.jp',
            'pref' => '東京都',
            'city' => '大田区',
            'tel' => '03-3733-5504',
            'url' => 'https://www.pohasa.com/',
            'image_url' => '../images/666897_m.jpg',
        ];
        DB::table('studios')->insert($param);

        $param = [
            'id'=>89,
            'name' => 'パンキースタジオ',
            'email' => 'tencho3356@yahoo.co.jp',
            'pref' => '東京都',
            'city' => '八王子市',
            'tel' => '042-677-9500',
            'url' => 'http://www.pandkey.co.jp/index.html',
            'image_url' => 'http://www.pandkey.co.jp/img/image15.png',
        ];
        DB::table('studios')->insert($param);

        $param = [
            'id'=>90,
            'name' => 'Music Man サウンドスタジオ',
            'email' => 'test69@studio.jp',
            'pref' => '東京都',
            'city' => '新宿区',
            'tel' => '03-3367-2727',
            'url' => 'http://www.music-man.jp/',
            'image_url' => 'http://www.music-man.jp/images/header2.gif',
        ];
        DB::table('studios')->insert($param);

        $param = [
            'id'=>91,
            'name' => 'RE:BIRTH STUDIO',
            'email' => 're-birthstudio@tc-tc.com',
            'pref' => '東京都',
            'city' => '渋谷区',
            'tel' => '03-6276-7516',
            'url' => 'https://www.tc-tc.com/re-birth/',
            'image_url' => 'https://www.tc-tc.com/re-birth/wp-content/themes/rebirth/assets/img/base/image_header.jpg',
        ];
        DB::table('studios')->insert($param);

        $param = [
            'id'=>92,
            'name' => 'ANDY&#39;S STUDIO',
            'email' => 'test70@studio.jp',
            'pref' => '東京都',
            'city' => '世田谷区',
            'tel' => '03-5432-3805',
            'url' => 'http://www.andys.jp/',
            'image_url' => 'http://www.andys.jp/wp/wp-content/uploads/2019/10/logo.png',
        ];
        DB::table('studios')->insert($param);

        $param = [
            'id'=>93,
            'name' => 'サウンドスタジオエイト府中',
            'email' => 'test71@studio.jp',
            'pref' => '東京都',
            'city' => '府中市',
            'tel' => '042-340-3838',
            'url' => 'http://sound-studio-eight.com/',
            'image_url' => 'http://sound-studio-eight.com/sys/wp-content/themes/studio8_1.4/resources/images/header_logo.png',
        ];
        DB::table('studios')->insert($param);

        $param = [
            'id'=>94,
            'name' => 'サウンドスタジオブルームーン立川店',
            'email' => 'test72@studio.jp',
            'pref' => '東京都',
            'city' => '立川市',
            'tel' => '042-521-5060',
            'url' => 'https://bluemoonworld.net/',
            'image_url' => 'https://bluemoonworld.net/wp-content/uploads/2020/10/main-visual-pc-2.jpg',
        ];
        DB::table('studios')->insert($param);

        $param = [
            'id'=>95,
            'name' => 'サウンドスタジオペンタ 立川店',
            'email' => 'info@studiopenta.net',
            'pref' => '東京都',
            'city' => '立川市',
            'tel' => '042-525-9911',
            'url' => 'http://www.studiopenta.net/rehearsal/tachikawa.html',
            'image_url' => 'https://pbs.twimg.com/profile_images/460591536078458880/V4yjYkAA.jpeg',
        ];
        DB::table('studios')->insert($param);

        $param = [
            'id'=>96,
            'name' => 'サウンドスタジオペンタ 新宿店',
            'email' => 'info@studiopenta.net',
            'pref' => '東京都',
            'city' => '新宿区',
            'tel' => '03-3351-3140',
            'url' => 'http://www.studiopenta.net/rehearsal/shinjuku.html',
            'image_url' => 'https://pbs.twimg.com/profile_images/460591536078458880/V4yjYkAA.jpeg',
        ];
        DB::table('studios')->insert($param);

        $param = [
            'id'=>97,
            'name' => 'サウンドスタジオペンタ 渋谷ジュークハウス',
            'email' => 'info@studiopenta.net',
            'pref' => '東京都',
            'city' => '渋谷区',
            'tel' => '03-3496-3730',
            'url' => 'http://www.studiopenta.net/rehearsal/juke.html',
            'image_url' => 'https://pbs.twimg.com/profile_images/460591536078458880/V4yjYkAA.jpeg',
        ];
        DB::table('studios')->insert($param);

        $param = [
            'id'=>98,
            'name' => 'サウンドスタジオペンタ 渋谷シティサイド',
            'email' => 'info@studiopenta.net',
            'pref' => '東京都',
            'city' => '渋谷区',
            'tel' => '03-3770-6646',
            'url' => 'http://www.studiopenta.net/rehearsal/city.html',
            'image_url' => 'https://pbs.twimg.com/profile_images/460591536078458880/V4yjYkAA.jpeg',
        ];
        DB::table('studios')->insert($param);

        $param = [
            'id'=>99,
            'name' => 'サウンドスタジオペンタ 吉祥寺サウスサイド',
            'email' => 'info@studiopenta.net',
            'pref' => '東京都',
            'city' => '武蔵野市',
            'tel' => '0422-42-0765',
            'url' => 'http://www.studiopenta.net/rehearsal/south.html',
            'image_url' => 'https://pbs.twimg.com/profile_images/460591536078458880/V4yjYkAA.jpeg',
        ];
        DB::table('studios')->insert($param);

        $param = [
            'id'=>100,
            'name' => 'サウンドスタジオペンタ 立川II',
            'email' => 'info@studiopenta.net',
            'pref' => '東京都',
            'city' => '立川市',
            'tel' => '042-529-5088',
            'url' => 'http://www.studiopenta.net/rehearsal/tachikawa2.html',
            'image_url' => 'https://pbs.twimg.com/profile_images/460591536078458880/V4yjYkAA.jpeg',
        ];
        DB::table('studios')->insert($param);

        $param = [
            'id'=>101,
            'name' => 'サウンドスタジオペンタ 大塚店',
            'email' => 'info@studiopenta.net',
            'pref' => '東京都',
            'city' => '豊島区',
            'tel' => '03-3988-7774',
            'url' => 'http://www.studiopenta.net/rehearsal/tachikawa2.html',
            'image_url' => 'https://pbs.twimg.com/profile_images/460591536078458880/V4yjYkAA.jpeg',
        ];
        DB::table('studios')->insert($param);
    }
}
