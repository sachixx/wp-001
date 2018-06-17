<?php
// 自分で定義したサムネイル画像を登録する
if (function_exists('add_theme_support')) {
add_theme_support('post-thumbnails');
add_image_size( 'add_img01', 320, 180, true );
}


//本文抜粋を取得する関数
function get_the_custom_excerpt($content, $length) {
  $length = ($length ? $length : 70);//デフォルトの長さを指定する
  $content =  preg_replace('/<!--more-->.+/is',"",$content); //moreタグ以降削除
  $content =  strip_shortcodes($content);//ショートコード削除
  $content =  strip_tags($content);//タグの除去
  $content =  str_replace("&nbsp;","",$content);//特殊文字の削除（今回はスペースのみ）
  $content =  mb_substr($content,0,$length);//文字列を指定した長さで切り取る
  return $content;
}
