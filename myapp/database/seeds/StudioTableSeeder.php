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
            'url' => 'https://rinky.info/studio/ochanomizu/',
            'image_url' => 'https://rinky.info/2019new/wp-content/themes/rinkydink/img/rinkydink_logo_word.svg',
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
            'image_url' => '../images/img_header_logo.png',
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
            'image_url' => '../images/img_header_logo.png',
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
            'image_url' => '../images/header.jpg',
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
            'image_url' => '../images/header_logo.gif',
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
            'image_url' => '../images/log_under.png',
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
            'image_url' => '../images/Vivo_logo.png',
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
            'image_url' => '../images/img_header_logo.png',
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
            'image_url' => '../images/logo_header.png',
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
            'name' => 'スタジオノード水道橋',
            'email' => 'suidobashi@studio-node.com',
            'pref' => '東京都',
            'city' => '千代田区',
            'tel' => '03-3230-4646',
            'url' => 'https://www.studio-node.com/HomeS.html',
            'image_url' => 'https://www.studio-node.com/Logo1.jpg',
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
            'image_url' => '../images/ares-top1.jpg',
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
            'tel' => '03-6910-4550',
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
            'image_url' => '../images/topphoto.jpg',
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
            'image_url' => 'https://rinky.info/2019new/wp-content/themes/rinkydink/img/rinkydink_logo_word.svg',
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
            'image_url' => 'https://rinky.info/2019new/wp-content/themes/rinkydink/img/rinkydink_logo_word.svg',
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
            'image_url' => 'https://rinky.info/2019new/wp-content/themes/rinkydink/img/rinkydink_logo_word.svg',
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
            'image_url' => 'https://rinky.info/2019new/wp-content/themes/rinkydink/img/rinkydink_logo_word.svg',
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
            'image_url' => 'https://rinky.info/2019new/wp-content/themes/rinkydink/img/rinkydink_logo_word.svg',
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
            'image_url' => 'https://rinky.info/2019new/wp-content/themes/rinkydink/img/rinkydink_logo_word.svg',
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
            'image_url' => 'https://rinky.info/2019new/wp-content/themes/rinkydink/img/rinkydink_logo_word.svg',
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
            'image_url' => 'https://rinky.info/2019new/wp-content/themes/rinkydink/img/rinkydink_logo_word.svg',
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
            'image_url' => 'https://rinky.info/2019new/wp-content/themes/rinkydink/img/rinkydink_logo_word.svg',
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
            'image_url' => 'https://rinky.info/2019new/wp-content/themes/rinkydink/img/rinkydink_logo_word.svg',
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
            'image_url' => 'https://rinky.info/2019new/wp-content/themes/rinkydink/img/rinkydink_logo_word.svg',
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
            'image_url' => 'https://rinky.info/2019new/wp-content/themes/rinkydink/img/rinkydink_logo_word.svg',
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
            'image_url' => 'https://rinky.info/2019new/wp-content/themes/rinkydink/img/rinkydink_logo_word.svg',
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
            'id'=>69,
            'name' => 'BASS ON TOP 中野サンプラザ店',
            'email' => 'test49@studio.jp',
            'pref' => '東京都',
            'city' => '中野区',
            'tel' => '03-5345-5825',
            'url' => 'http://bassontop.tokyo.jp/band/nakano/',
            'image_url' => '../images/log_under.png',
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
            'image_url' => '../images/log_under.png',
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
            'image_url' => '../images/logo-wh.png',
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
            'image_url' => '../images/logo-wh.png',
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
            'image_url' => '../images/logo-wh.png',
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
            'image_url' => '../images/logo-wh.png',
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
            'image_url' => '../images/packs_logo_2015_kuroaka2.thumb_148_33.jpg',
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
            'image_url' => '../images/header_rogo_wing_02_w.png',
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
            'image_url' => '../images/logo-02.gif',
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
            'image_url' => '../images/image15.png',
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
            'name' => "ANDY'S STUDIO",
            'email' => 'test70@studio.jp',
            'pref' => '東京都',
            'city' => '世田谷区',
            'tel' => '03-5432-3805',
            'url' => 'http://www.andys.jp/',
            'image_url' => '../images/Andy_logo.png',
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
            'image_url' => '../images/header_logo.png',
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
            'url' => 'http://www.studiopenta.net/rehearsal/ohtsuka.html',
            'image_url' => 'https://pbs.twimg.com/profile_images/460591536078458880/V4yjYkAA.jpeg',
        ];
        DB::table('studios')->insert($param);

        $param = [
            'id'=>102,
            'name' => 'スタジオレッド綾瀬店',
            'email' => 'mailto@studio-red.com',
            'pref' => '東京都',
            'city' => '足立区',
            'tel' => '03-3606-4441',
            'url' => 'https://www.studio-red.com/',
            'image_url' => 'https://www.studio-red.com/wp-content/themes/studio-red/images/common/img_hd_logo.png',
        ];
        DB::table('studios')->insert($param);

        $param = [
            'id'=>103,
            'name' => 'ホワイトロードスタジオ',
            'email' => 'takao@whiteroad.com',
            'pref' => '東京都',
            'city' => '豊島区',
            'tel' => '03-3915-4465',
            'url' => 'http://www.whiteroad.com/',
            'image_url' => '../images/top-logo.gif',
        ];
        DB::table('studios')->insert($param);

        $param = [
            'id'=>104,
            'name' => 'ブラックホールstudio',
            'email' => 'test73@studio.jp',
            'pref' => '東京都',
            'city' => '豊島区',
            'tel' => '03-6912-9604',
            'url' => 'http://blackhole-studio.jp/index.html',
            'image_url' => '../images/BlackHoll_logo.png',
        ];
        DB::table('studios')->insert($param);

        $param = [
            'id'=>105,
            'name' => 'BeatsParadise',
            'email' => 'kirameki@beats-paradise.info',
            'pref' => '東京都',
            'city' => '豊島区',
            'tel' => '03-6912-1221',
            'url' => 'https://www.beats-paradise.info/index.html',
            'image_url' => 'https://www.beats-paradise.info/img/common/cmn_logo.svg',
        ];
        DB::table('studios')->insert($param);

        $param = [
            'id'=>106,
            'name' => 'スタジオDANGDANG',
            'email' => 'info@studio-dangdang.com',
            'pref' => '東京都',
            'city' => '豊島区',
            'tel' => '03-6903-7122',
            'url' => 'http://www.studio-dangdang.com/index.html',
            'image_url' => 'http://www.studio-dangdang.com/logo1111.gif',
        ];
        DB::table('studios')->insert($param);

        $param = [
            'id'=>107,
            'name' => 'スタジオ ニド',
            'email' => 'info@studio-nido.com',
            'pref' => '東京都',
            'city' => '調布市',
            'tel' => '042-499-3439',
            'url' => 'https://www.studio-nido.com/index.html',
            'image_url' => 'https://www.studio-nido.com/img/logo.png',
        ];
        DB::table('studios')->insert($param);

        $param = [
            'id'=>108,
            'name' => '調布サン・ミュージックスタジオ',
            'email' => 'info@sunmusicstudio.com',
            'pref' => '東京都',
            'city' => '調布市',
            'tel' => '042-480-2333',
            'url' => 'http://www.sunmusicstudio.com/index.html',
            'image_url' => '../images/logo.webp',
        ];
        DB::table('studios')->insert($param);

        $param = [
            'id'=>109,
            'name' => 'STUDIO VITO',
            'email' => 'info@studio-vito.com',
            'pref' => '東京都',
            'city' => '西東京市',
            'tel' => '042-423-6914',
            'url' => 'http://www.studio-vito.com/access.html',
            'image_url' => '../images/head.png',
        ];
        DB::table('studios')->insert($param);

        $param = [
            'id'=>110,
            'name' => 'SEISHO STUDIO',
            'email' => 'test74@studio.jp',
            'pref' => '東京都',
            'city' => '練馬区',
            'tel' => '03-3928-9131',
            'url' => 'https://www.studio-seisho.com/',
            'image_url' => 'https://www.studio-seisho.com/sonorsq2/wp-content/uploads/2017/04/logo3_b.png',
        ];
        DB::table('studios')->insert($param);

        $param = [
            'id'=>111,
            'name' => 'STUDIO YH',
            'email' => 'test75@studio.jp',
            'pref' => '東京都',
            'city' => '立川市',
            'tel' => '042-534-9994',
            'url' => 'http://www.studio-yh.jp/index.html',
            'image_url' => '../images/logo_header.jpg',
        ];
        DB::table('studios')->insert($param);

        $param = [
            'id'=>112,
            'name' => 'スタジオセラフィ',
            'email' => 'test75@studio.jp',
            'pref' => '東京都',
            'city' => '目黒区',
            'tel' => '03-6452-3314',
            'url' => 'https://selafy.com/',
            'image_url' => 'https://selafy.com/_img/ja/resource/9/logo/_/',
        ];
        DB::table('studios')->insert($param);

        $param = [
            'id'=>113,
            'name' => 'YOKOTA BASE STUDIO',
            'email' => 'test76@studio.jp',
            'pref' => '東京都',
            'city' => '町田市',
            'tel' => '042-723-4888',
            'url' => 'https://yokotabasestudio.com/',
            'image_url' => 'https://yokotabasestudio.com/img/logo01.png',
        ];
        DB::table('studios')->insert($param);

        $param = [
            'id'=>114,
            'name' => 'STUDIO ACT',
            'email' => 'machida@studioact.co.jp',
            'pref' => '東京都',
            'city' => '町田市',
            'tel' => '042-722-0005',
            'url' => 'http://studioact.co.jp/',
            'image_url' => '../images/ACT_logo.png',
        ];
        DB::table('studios')->insert($param);

        $param = [
            'id'=>115,
            'name' => 'スタジオBEN辿',
            'email' => 'test77@studio.jp',
            'pref' => '東京都',
            'city' => '狛江市',
            'tel' => '03-5438-2302',
            'url' => 'http://www.benten-st.com/index.html',
            'image_url' => '../images/benten_banner.png',
        ];
        DB::table('studios')->insert($param);

        $param = [
            'id'=>116,
            'name' => 'STUDIO FORTE',
            'email' => 'test78@studio.jp',
            'pref' => '東京都',
            'city' => '港区',
            'tel' => '03-3403-4350',
            'url' => 'http://studio-forte.net/',
            'image_url' => '../images/000.jpg',
        ];
        DB::table('studios')->insert($param);

        $param = [
            'id'=>117,
            'name' => 'OUR HOUSE',
            'email' => 'test79@studio.jp',
            'pref' => '東京都',
            'city' => '港区',
            'tel' => '03-3451-7428',
            'url' => 'http://www.our-house.jp/index.html/',
            'image_url' => '../images/666897_m.jpg',
        ];
        DB::table('studios')->insert($param);

        $param = [
            'id'=>118,
            'name' => '芝浦スタジオ',
            'email' => 'shibaura-booking2021@shibaura-st.co.jp',
            'pref' => '東京都',
            'city' => '港区',
            'tel' => '03-3769-4649',
            'url' => 'http://shiba-st.com/',
            'image_url' => '../images/shibaura_logo.gif',
        ];
        DB::table('studios')->insert($param);

        $param = [
            'id'=>119,
            'name' => 'Majestic Studio',
            'email' => 'majestic@st-ma.jp',
            'pref' => '東京都',
            'city' => '渋谷区',
            'tel' => '03-3378-2688',
            'url' => 'http://www.st-ma.jp/majestic/index.html',
            'image_url' => 'http://www.st-ma.jp/majestic/title.png',
        ];
        DB::table('studios')->insert($param);

        $param = [
            'id'=>120,
            'name' => 'セオリスタジオ',
            'email' => 'test80@studio.jp',
            'pref' => '東京都',
            'city' => '渋谷区',
            'tel' => '03-3466-3551',
            'url' => 'http://www.theorystudio.co.jp/index.html',
            'image_url' => '../images/THEORY_logo.png',
        ];
        DB::table('studios')->insert($param);

        $param = [
            'id'=>121,
            'name' => 'スタジオミュージアム',
            'email' => 'test81@studio.jp',
            'pref' => '東京都',
            'city' => '渋谷区',
            'tel' => '03-3373-8200',
            'url' => 'http://studio-museum.com/',
            'image_url' => '../images/museum_logo.png',
        ];
        DB::table('studios')->insert($param);

        $param = [
            'id'=>122,
            'name' => 'SHIBUYA STUDIO K2',
            'email' => 'test82@studio.jp',
            'pref' => '東京都',
            'city' => '渋谷区',
            'tel' => '03-3462-4483',
            'url' => 'http://www.studiok2.tokyo/index.html',
            'image_url' => '../images/K2_logo.png',
        ];
        DB::table('studios')->insert($param);

        $param = [
            'id'=>123,
            'name' => 'STUDIO KEYBOARD',
            'email' => 'test83@studio.jp',
            'pref' => '東京都',
            'city' => '渋谷区',
            'tel' => '03-3370-5258',
            'url' => 'http://studiokeyboard.net/index.html',
            'image_url' => '../images/index_r2_c1.gif',
        ];
        DB::table('studios')->insert($param);

        $param = [
            'id'=>124,
            'name' => 'シュールサウンドスタジオ',
            'email' => 'studio_info@s-u-r.co.jp',
            'pref' => '東京都',
            'city' => '渋谷区',
            'tel' => '03-3378-1555',
            'url' => 'https://s-u-r.co.jp/index.html',
            'image_url' => 'https://s-u-r.co.jp/parts/sub_top.jpg',
        ];
        DB::table('studios')->insert($param);

        $param = [
            'id'=>125,
            'name' => 'サウンドスタジオM小岩店',
            'email' => 'test84@studio.jp',
            'pref' => '東京都',
            'city' => '江戸川区',
            'tel' => '03-3672-6316',
            'url' => 'https://soundstudio-m.com/koiwa/index.html',
            'image_url' => '../images/header_logo_white.svg',
        ];
        DB::table('studios')->insert($param);

        $param = [
            'id'=>126,
            'name' => 'サウンドスタジオM一之江店',
            'email' => 'test85@studio.jp',
            'pref' => '東京都',
            'city' => '江戸川区',
            'tel' => '03-5674-7131',
            'url' => 'https://soundstudio-m.com/ichinoe/index.html',
            'image_url' => '../images/header_logo_white.svg',
        ];
        DB::table('studios')->insert($param);

        $param = [
            'id'=>127,
            'name' => 'Studio Leda',
            'email' => 'info@studioleda.com',
            'pref' => '東京都',
            'city' => '武蔵野市',
            'tel' => '0422-23-7227',
            'url' => 'https://www.studioleda.com/index.html',
            'image_url' => 'https://www.studioleda.com/images/logo.png',
        ];
        DB::table('studios')->insert($param);

        $param = [
            'id'=>128,
            'name' => 'Studio 壱之助',
            'email' => 'test86@studio.jp',
            'pref' => '東京都',
            'city' => '武蔵野市',
            'tel' => '0422-49-3987',
            'url' => 'http://ichinosuke.jp/',
            'image_url' => '../images/ichinosuke_logo.png',
        ];
        DB::table('studios')->insert($param);

        $param = [
            'id'=>129,
            'name' => 'スタジオ・アルファ・ベガ',
            'email' => 'test87@studio.jp',
            'pref' => '東京都',
            'city' => '武蔵野市',
            'tel' => '0422-20-0731',
            'url' => 'https://www.studioleda.com/vega/index.html',
            'image_url' => 'https://www.studioleda.com/vega/images/logo2.png',
        ];
        DB::table('studios')->insert($param);

        $param = [
            'id'=>130,
            'name' => 'サウンドスタジオキッカ吉祥寺',
            'email' => 'test88@studio.jp',
            'pref' => '東京都',
            'city' => '武蔵野市',
            'tel' => '0422-76-8615',
            'url' => 'https://studiokicca.com/',
            'image_url' => 'https://studiokicca.com/img/common/logo.svg',
        ];
        DB::table('studios')->insert($param);

        $param = [
            'id'=>131,
            'name' => 'GOK SOUND',
            'email' => 'test89@studio.jp',
            'pref' => '東京都',
            'city' => '武蔵野市',
            'tel' => '0422-20-8372',
            'url' => 'https://www.gok.jp/',
            'image_url' => '../images/666897_m.jpg',
        ];
        DB::table('studios')->insert($param);

        $param = [
            'id'=>132,
            'name' => '吉祥寺音楽スタジオ本家',
            'email' => 'test90@studio.jp',
            'pref' => '東京都',
            'city' => '武蔵野市',
            'tel' => '0422-21-2517',
            'url' => 'http://no-scooter.com/honke-test/honke.html',
            'image_url' => '../images/666897_m.jpg',
        ];
        DB::table('studios')->insert($param);

        $param = [
            'id'=>133,
            'name' => 'スタジオサウンドスクエア',
            'email' => 'soundsquare@mbm.nifty.com',
            'pref' => '東京都',
            'city' => '東村山市',
            'tel' => '042-397-1175',
            'url' => 'http://soundsquare.la.coocan.jp/',
            'image_url' => '../images/666897_m.jpg',
        ];
        DB::table('studios')->insert($param);

        $param = [
            'id'=>134,
            'name' => 'スタジオサスフォー',
            'email' => 'webmaster@tokyo-st.net',
            'pref' => '東京都',
            'city' => '東久留米市',
            'tel' => '042-472-2055',
            'url' => 'http://www.tokyo-st.net/pc/index.html',
            'image_url' => 'http://www.tokyo-st.net/pc/banner/main/sus4logo3c.gif',
        ];
        DB::table('studios')->insert($param);

        $param = [
            'id'=>135,
            'name' => 'ロサンゼルスクラブ東高円寺',
            'email' => 'staff@losangelesclub.jp',
            'pref' => '東京都',
            'city' => '杉並区',
            'tel' => '03-3314-8887',
            'url' => 'https://www.losangelesclub.jp/',
            'image_url' => 'https://www.losangelesclub.jp/wp-content/uploads/banner-la160-931-1.gif',
        ];
        DB::table('studios')->insert($param);

        $param = [
            'id'=>136,
            'name' => 'P.I.G.studio',
            'email' => 'test91@studio.jp',
            'pref' => '東京都',
            'city' => '杉並区',
            'tel' => '03-3310-9311',
            'url' => 'http://pigstudio.apricott.org/index.html',
            'image_url' => '../images/666897_m.jpg',
        ];
        DB::table('studios')->insert($param);

        $param = [
            'id'=>137,
            'name' => 'SOUND STUDIO REVIVAL',
            'email' => 'test92@studio.jp',
            'pref' => '東京都',
            'city' => '杉並区',
            'tel' => '03-6279-9113',
            'url' => 'http://heavysick.co.jp/revival/',
            'image_url' => '../images/666897_m.jpg',
        ];
        DB::table('studios')->insert($param);

        $param = [
            'id'=>138,
            'name' => 'STUDIO Zot',
            'email' => 'info@studiozot.jp',
            'pref' => '東京都',
            'city' => '杉並区',
            'tel' => '03-5356-6388',
            'url' => 'http://studiozot.jp/pc/2013/index.php',
            'image_url' => '../images/studiozot_logo2.jpg',
        ];
        DB::table('studios')->insert($param);

        $param = [
            'id'=>140,
            'name' => 'HILL VALLEY STUDIO',
            'email' => 'info@hillvalleystudio.net',
            'pref' => '東京都',
            'city' => '新宿区',
            'tel' => '03-6302-1718',
            'url' => 'https://hillvalleystudio.net/',
            'image_url' => 'https://hillvalleystudio.net/img/hillvalleylogo.jpg',
        ];
        DB::table('studios')->insert($param);

        $param = [
            'id'=>141,
            'name' => 'BAZOOKA STUDIO',
            'email' => 'info@bazooka-studio.com',
            'pref' => '東京都',
            'city' => '新宿区',
            'tel' => '03-3360-3377',
            'url' => 'https://bazookastudio.com/',
            'image_url' => 'https://bazookastudio.com/wp-content/uploads/2020/04/logo-bs.png',
        ];
        DB::table('studios')->insert($param);

        $param = [
            'id'=>142,
            'name' => 'STUDIO MUSIC CITY',
            'email' => 'studio.music.city@gmail.com',
            'pref' => '東京都',
            'city' => '新宿区',
            'tel' => '03-3205-1283',
            'url' => 'http://studio-music-city.com/',
            'image_url' => '../images/482906_401455076579469_1199147293_n.jpg',
        ];
        DB::table('studios')->insert($param);

        $param = [
            'id'=>143,
            'name' => 'STUDIO PIT INN',
            'email' => 'test95@studio.jp',
            'pref' => '東京都',
            'city' => '新宿区',
            'tel' => '03-3354-2067',
            'url' => 'http://marmie.heteml.jp/pit-inn/studio/',
            'image_url' => 'http://marmie.heteml.jp/pit-inn/studio/themes/artnomad_v2/images/logo3.jpg',
        ];
        DB::table('studios')->insert($param);

        $param = [
            'id'=>144,
            'name' => 'Sound Studio Vantage',
            'email' => 'test96@studio.jp',
            'pref' => '東京都',
            'city' => '新宿区',
            'tel' => '03-5989-1877',
            'url' => 'http://www.studiovantage.jp/',
            'image_url' => '../images/vantage_logo.gif',
        ];
        DB::table('studios')->insert($param);

        $param = [
            'id'=>145,
            'name' => 'SOUND STUDIO CRUE',
            'email' => 'test97@studio.jp',
            'pref' => '東京都',
            'city' => '新宿区',
            'tel' => '03-3352-8530',
            'url' => 'http://studio-crue.com/',
            'image_url' => '../images/crue_logo.png',
        ];
        DB::table('studios')->insert($param);

        $param = [
            'id'=>146,
            'name' => '御苑音楽スタジオ',
            'email' => 'test98@studio.jp',
            'pref' => '東京都',
            'city' => '新宿区',
            'tel' => '03-3351-2821',
            'url' => 'https://www.gyost.com/index.html',
            'image_url' => 'https://www.gyost.com/_src/sc247/8CE4899125-1.jpg',
        ];
        DB::table('studios')->insert($param);

        $param = [
            'id'=>147,
            'name' => 'STUDIO M',
            'email' => 'test99@studio.jp',
            'pref' => '東京都',
            'city' => '新宿区',
            'tel' => '03-3371-3756',
            'url' => 'https://www.okubo-studio-m.com/index.html',
            'image_url' => 'https://www.okubo-studio-m.com/images/studio-m-logo.png?crc=5573126',
        ];
        DB::table('studios')->insert($param);

        $param = [
            'id'=>148,
            'name' => 'Studio Flight',
            'email' => 'test100@studio.jp',
            'pref' => '東京都',
            'city' => '府中市',
            'tel' => '042-333-7151',
            'url' => 'http://studioflight.net/',
            'image_url' => '../images/flight_logo.gif',
        ];
        DB::table('studios')->insert($param);

        $param = [
            'id'=>149,
            'name' => 'Studio34',
            'email' => 'test101@studio.jp',
            'pref' => '東京都',
            'city' => '府中市',
            'tel' => '042-386-0034',
            'url' => 'http://mermaid-co.jp/studio34/',
            'image_url' => '../images/sign.png',
        ];
        DB::table('studios')->insert($param);

        $param = [
            'id'=>150,
            'name' => 'ガードアイランドスタジオ蒲田店',
            'email' => 'test102@studio.jp',
            'pref' => '東京都',
            'city' => '大田区',
            'tel' => '03-5703-2227',
            'url' => 'http://gourdisland-music.jp/kamata/',
            'image_url' => '../images/title.gif',
        ];
        DB::table('studios')->insert($param);

        $param = [
            'id'=>151,
            'name' => 'ガードアイランドスタジオ明大前店',
            'email' => 'test103@studio.jp',
            'pref' => '東京都',
            'city' => '世田谷区',
            'tel' => '03-5300-4144',
            'url' => 'http://gourdisland-music.jp/meidaimae/',
            'image_url' => '../images/title.gif',
        ];
        DB::table('studios')->insert($param);

        $param = [
            'id'=>152,
            'name' => 'ガードアイランドスタジオ下北沢店',
            'email' => 'test104@studio.jp',
            'pref' => '東京都',
            'city' => '世田谷区',
            'tel' => '03-3414-9833',
            'url' => 'http://gourdisland-music.jp/shimokitazawa/',
            'image_url' => '../images/title.gif',
        ];
        DB::table('studios')->insert($param);

        $param = [
            'id'=>153,
            'name' => 'ガードアイランドスタジオ下北沢ウエスト店',
            'email' => 'test105@studio.jp',
            'pref' => '東京都',
            'city' => '世田谷区',
            'tel' => '03-5430-3334',
            'url' => 'http://gourdisland-music.jp/shimokitawest/',
            'image_url' => '../images/title.gif',
        ];
        DB::table('studios')->insert($param);

        $param = [
            'id'=>154,
            'name' => '音楽スタジオ サウンドパーク',
            'email' => 'test102@studio.jp',
            'pref' => '東京都',
            'city' => '大田区',
            'tel' => '03-3764-0928',
            'url' => 'http://studio-soundpark.com/',
            'image_url' => '../images/soundpark_logo.jpg',
        ];
        DB::table('studios')->insert($param);

        $param = [
            'id'=>155,
            'name' => 'スタジオ ABR',
            'email' => 'test103@studio.jp',
            'pref' => '東京都',
            'city' => '多摩市',
            'tel' => '',
            'url' => 'http://ssk.abr.jp/index.html',
            'image_url' => '../images/ABR_logo.png',
        ];
        DB::table('studios')->insert($param);

        $param = [
            'id'=>156,
            'name' => 'M.studio多摩センター店',
            'email' => 'test104@studio.jp',
            'pref' => '東京都',
            'city' => '多摩市',
            'tel' => '042-313-7735',
            'url' => 'http://www.mare-co.jp/tamacenterstudio.htm',
            'image_url' => '../images/bar.tc.top.2015.gif',
        ];
        DB::table('studios')->insert($param);

        $param = [
            'id'=>157,
            'name' => 'M.studio永山店',
            'email' => 'test104@studio.jp',
            'pref' => '東京都',
            'city' => '多摩市',
            'tel' => '042-339-5453',
            'url' => 'http://www.mare-co.jp/nagayamatop.htm',
            'image_url' => '../images/mstlogo2016ng2.jpg',
        ];
        DB::table('studios')->insert($param);

        $param = [
            'id'=>158,
            'name' => 'BEAT WAVE',
            'email' => 'test105@studio.jp',
            'pref' => '東京都',
            'city' => '墨田区',
            'tel' => '03-5630-3226',
            'url' => 'http://bws.music.coocan.jp/',
            'image_url' => '../images/666897_m.jpg',
        ];
        DB::table('studios')->insert($param);

        $param = [
            'id'=>159,
            'name' => 'SOUND STUDIO CROSSROAD',
            'email' => 'test106@studio.jp',
            'pref' => '東京都',
            'city' => '国立市',
            'tel' => '042-577-3521',
            'url' => 'http://crossroad-studio.com/',
            'image_url' => '../images/crossroad_logo.png',
        ];
        DB::table('studios')->insert($param);

        $param = [
            'id'=>160,
            'name' => 'FIRST AVENUE',
            'email' => 'test107@studio.jp',
            'pref' => '東京都',
            'city' => '国分寺市',
            'tel' => '042-326-5656',
            'url' => 'http://first-avenue-studio.com/index.html',
            'image_url' => '../images/logo_sample2.jpg',
        ];
        DB::table('studios')->insert($param);

        $param = [
            'id'=>161,
            'name' => 'ミュージックスタジオ ensemble',
            'email' => 'test108@studio.jp',
            'pref' => '東京都',
            'city' => '台東区',
            'tel' => '03-3841-2904',
            'url' => 'https://s-ens.net/',
            'image_url' => '../images/666897_m.jpg',
        ];
        DB::table('studios')->insert($param);

        $param = [
            'id'=>162,
            'name' => '東京倶楽部 本郷店',
            'email' => 'test109@studio.jp',
            'pref' => '東京都',
            'city' => '文京区',
            'tel' => '03-6801-8322',
            'url' => 'https://tokyo-club.com/studio/',
            'image_url' => '../images/666897_m.jpg',
        ];
        DB::table('studios')->insert($param);

        $param = [
            'id'=>163,
            'name' => '東京倶楽部 水道橋店',
            'email' => 'test110@studio.jp',
            'pref' => '東京都',
            'city' => '千代田区',
            'tel' => '03-3293-6056',
            'url' => 'https://tokyo-club.com/studio/',
            'image_url' => '../images/666897_m.jpg',
        ];
        DB::table('studios')->insert($param);

        $param = [
            'id'=>164,
            'name' => '東京倶楽部 目黒店',
            'email' => 'test111@studio.jp',
            'pref' => '東京都',
            'city' => '品川区',
            'tel' => '03-6417-0166',
            'url' => 'https://tokyo-club.com/studio/',
            'image_url' => '../images/666897_m.jpg',
        ];
        DB::table('studios')->insert($param);

        $param = [
            'id'=>165,
            'name' => 'Studio J',
            'email' => 'test112@studio.jp',
            'pref' => '東京都',
            'city' => '北区',
            'tel' => '03-3903-7506',
            'url' => 'http://www.airwave.co.jp/studioj/',
            'image_url' => '../images/top-img.gif',
        ];
        DB::table('studios')->insert($param);

        $param = [
            'id'=>166,
            'name' => 'Studio nei八王子',
            'email' => 'test113@studio.jp',
            'pref' => '東京都',
            'city' => '八王子市',
            'tel' => '042-642-1113',
            'url' => 'https://www.studionei.com/',
            'image_url' => 'https://image.jimcdn.com/app/cms/image/transf/dimension=550x10000:format=png/path/s440d6d082766f710/image/i9707af45b03f70a8/version/1499507830/image.png',
        ];
        DB::table('studios')->insert($param);

        $param = [
            'id'=>167,
            'name' => 'Studio nei立川',
            'email' => 'test114@studio.jp',
            'pref' => '東京都',
            'city' => '立川市',
            'tel' => '042-525-5678',
            'url' => 'https://www.t-studionei.com/',
            'image_url' => 'https://image.jimcdn.com/app/cms/image/transf/dimension=550x10000:format=png/path/s440d6d082766f710/image/i9707af45b03f70a8/version/1499507830/image.png',
        ];
        DB::table('studios')->insert($param);

        $param = [
            'id'=>168,
            'name' => '島村楽器 八王子店',
            'email' => 'test115@studio.jp',
            'pref' => '東京都',
            'city' => '八王子市',
            'tel' => '042-656-7321',
            'url' => 'https://www.shimamura.co.jp/shop/hachioji/studio-guide',
            'image_url' => 'https://www.shimamura.co.jp/img/logo.svg?up=20180419',
        ];
        DB::table('studios')->insert($param);

        $param = [
            'id'=>170,
            'name' => 'トラフィック スタジオ',
            'email' => 'test117@studio.jp',
            'pref' => '東京都',
            'city' => '中野区',
            'tel' => '03-3336-2226',
            'url' => 'http://www.traffic-st.jp/',
            'image_url' => '../images/traffic_logo_sub.gif',
        ];
        DB::table('studios')->insert($param);

        $param = [
            'id'=>171,
            'name' => 'SONIC BAND STUDIO',
            'email' => 'test118@studio.jp',
            'pref' => '東京都',
            'city' => '中野区',
            'tel' => '03-3223-1009',
            'url' => 'https://sonicbandstudio.com/',
            'image_url' => 'https://sonicbandstudio.com/pc/wp-content/themes/thememagic/images/sonictitle.png',
        ];
        DB::table('studios')->insert($param);

        $param = [
            'id'=>172,
            'name' => 'STUDIO LIFE',
            'email' => 'test119@studio.jp',
            'pref' => '東京都',
            'city' => '中野区',
            'tel' => '03-3386-7239',
            'url' => 'https://www.studio-life.jp/',
            'image_url' => 'https://static.wixstatic.com/media/e6e7d4_42a2ae046cac43fa86b21c10c1c82c50~mv2.png/v1/fill/w_544,h_64,al_c,q_85,usm_0.66_1.00_0.01/%E3%82%A2%E3%82%BB%E3%83%83%E3%83%88%201.webp',
        ];
        DB::table('studios')->insert($param);

        $param = [
            'id'=>173,
            'name' => 'LANDRUTH',
            'email' => 'mail@landruth.com',
            'pref' => '東京都',
            'city' => '世田谷区',
            'tel' => '03-5481-7433',
            'url' => 'https://www.landruth.com/',
            'image_url' => 'https://image.jimcdn.com/app/cms/image/transf/dimension=1060x10000:format=png/path/s9a069b085ff8a8d0/image/idc5869d10119e27e/version/1604555176/image.png',
        ];
        DB::table('studios')->insert($param);

        $param = [
            'id'=>174,
            'name' => 'TADPOLE STUDIO',
            'email' => 'test120@studio.jp',
            'pref' => '東京都',
            'city' => '世田谷区',
            'tel' => '03-3428-5711',
            'url' => 'https://www.tadpolestudio.net/kyodo/index.html',
            'image_url' => 'https://www.tadpolestudio.net/img/logo.png',
        ];
        DB::table('studios')->insert($param);

        $param = [
            'id'=>175,
            'name' => "Takagi's Home",
            'email' => 'test121@studio.jp',
            'pref' => '東京都',
            'city' => '世田谷区',
            'tel' => '03-3465-6001',
            'url' => 'http://www.takagis.net/',
            'image_url' => '../images/TAKAGI%27S20%25.GIF',
        ];
        DB::table('studios')->insert($param);

        $param = [
            'id'=>176,
            'name' => 'スタジオファミリア',
            'email' => 'sanchafamilia@gmail.com',
            'pref' => '東京都',
            'city' => '世田谷区',
            'tel' => '03-6805-2131',
            'url' => 'http://studiofamilia.net/SANCHA/index.html#studiogo',
            'image_url' => '../images/stampwhite.gif',
        ];
        DB::table('studios')->insert($param);

        $param = [
            'id'=>177,
            'name' => 'スタジオゼロナイン',
            'email' => 'test122@studio.jp',
            'pref' => '東京都',
            'city' => '世田谷区',
            'tel' => '03-5314-9119',
            'url' => 'https://studiozeronine.com/',
            'image_url' => 'https://studiozeronine.com/wp-content/uploads/2018/10/studio091-1.png',
        ];
        DB::table('studios')->insert($param);

        $param = [
            'id'=>178,
            'name' => "J'Z STUDIO",
            'email' => 'test123@studio.jp',
            'pref' => '東京都',
            'city' => '世田谷区',
            'tel' => '03-6909-1181',
            'url' => 'http://jz-studio.jp/karasuyamaten.html',
            'image_url' => '../images/banner4.jpg',
        ];
        DB::table('studios')->insert($param);

        $param = [
            'id'=>179,
            'name' => 'CIRCLE SOUNDS',
            'email' => 'test124@studio.jp',
            'pref' => '東京都',
            'city' => '世田谷区',
            'tel' => '03-3703-8651',
            'url' => 'https://circlesounds.com/',
            'image_url' => 'https://circlesounds.com/wp-content/uploads/2017/04/cropped-.jpg',
        ];
        DB::table('studios')->insert($param);

        $param = [
            'id'=>180,
            'name' => 'APPLES MUSIC STUDIO',
            'email' => 'test125@studio.jp',
            'pref' => '東京都',
            'city' => '世田谷区',
            'tel' => '03-6809-7920',
            'url' => 'https://www.apples-music.com/index.html',
            'image_url' => 'https://www.apples-music.com/img/site-title.svg',
        ];
        DB::table('studios')->insert($param);

    }
}
