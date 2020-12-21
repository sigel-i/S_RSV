  <?php
// Composerのautoload.phpを読み込み
require __DIR__ . '/vendor/autoload.php';
// WebサイトのDOMをパースしオブジェクト型に変換
$html = file_get_html('https://example.com/');

// .main-list内のa要素をすべて取得しループで処理
foreach($html->find('.main-list a') as $element) {
	// href属性の値を取得し表示
    echo $element->href . '<br>';
}

// 最初のh2要素内のテキストを取得し表示
echo $html->find('h2', 0)->plaintext;
