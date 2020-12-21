<?php
// simple_html_dom.phpファイルの読み込み
include_once('simple_html_dom.php');
//スクレイピングしたいURLを指定
$html = file_get_html( 'http://www.kaasan.info/' );

//○○の中のある特定の要素もCSSと同じように指定できます。
foreach($html->find('#rightcol .category_list a') as $element)
echo $element->href . '<br>';
