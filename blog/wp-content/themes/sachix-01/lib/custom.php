<?php 
// functions.phpに以下を追記
add_action('admin_menu', 'add_custom_fields');
add_action('save_post', 'save_custom_fields');
 
// 記事ページと固定ページでカスタムフィールドを表示
function add_custom_fields() {
  add_meta_box( 'my_sectionid', 'カスタムフィールド', 'my_custom_fields', 'post');
  add_meta_box( 'my_sectionid', 'カスタムフィールド', 'my_custom_fields', 'page');
}
 
function my_custom_fields() {
  global $post;
  $keywords = get_post_meta($post->ID,'keywords',true);
  $description = get_post_meta($post->ID,'description',true);
   
  echo '<p>キーワード（半角カンマ区切り）<br>';
  echo '<input type="text" name="keywords" value="'.esc_html($keywords).'" size="60" /></p>';
   
  echo '<p>ページの説明（description）160文字以内<br>';
  echo '<input type="text" style="width: 600px;height: 40px;" name="description" value="'.esc_html($description).'" maxlength="160" /></p>';
}
 
// カスタムフィールドの値を保存
function save_custom_fields( $post_id ) {
  if(!empty($_POST['keywords']))
    update_post_meta($post_id, 'keywords', $_POST['keywords'] );
  else delete_post_meta($post_id, 'keywords');
 
  if(!empty($_POST['description']))
    update_post_meta($post_id, 'description', $_POST['description'] );
  else delete_post_meta($post_id, 'description');
}
 
function my_description() {
 
// カスタムフィールドの値を読み込む
$custom = get_post_custom();
if(!empty( $custom['keywords'][0])) {
  $keywords = $custom['keywords'][0];
}
if(!empty( $custom['description'][0])) {
  $description = $custom['description'][0];
}
?>
<?php if(is_home()): // トップページ ?>
<meta name="robots" content="index, follow" />
<meta name="keywords" content="トップページに表示させるkeywords(半角カンマ区切り)">
<meta name="description" content="トップページに表示させるdescription" />
<?php elseif(is_single()): // 記事ページ ?>
<meta name="robots" content="index, follow" />
<meta name="keywords" content="<?php echo $keywords ?>">
<meta name="description" content="<?php echo $description ?>">
<?php elseif(is_page()): // 固定ページ ?>
<meta name="robots" content="index, follow" />
<meta name="keywords" content="<?php echo $keywords ?>">
<meta name="description" content="<?php echo $description ?>">
<?php elseif (is_category()): // カテゴリーページ ?>
<meta name="robots" content="index, follow" />
<meta name="description" content="<?php single_cat_title(); ?>の記事一覧" />
<?php elseif (is_tag()): // タグページ ?>
<meta name="robots" content="noindex, follow" />
<meta name="description" content="<?php single_tag_title("", true); ?>の記事一覧" />
<?php elseif(is_404()): // 404ページ ?>
<meta name="robots" content="noindex, follow" />
<title><?php echo 'お探しのページが見つかりませんでした'; ?></title>
<?php else: // その他ページ ?>
<meta name="robots" content="noindex, follow" />
<?php endif; ?>
<?php
}


// functions.phpに以下を追記
//https://plusers.net/wordpress_toc
/*
function read_toc_scripts(){
  wp_enqueue_script( 'toc', get_template_directory_uri() .'/toc.js', array('jquery') );
}
add_action( 'wp_enqueue_scripts' , 'read_toc_scripts' );
*/