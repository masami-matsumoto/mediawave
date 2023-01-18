<?php
// アイキャッチ画像を有効にする
function my_after_setup_theme(){
	// アイキャッチ画像を有効にする
	add_theme_support( 'post-thumbnails' ); 
	// アイキャッチ画像サイズを指定する（横：640px 縦：384）
	// 画像サイズをオーバーした場合は切り抜き
	set_post_thumbnail_size( 306, 230, true ); 
}
add_action( 'after_setup_theme', 'my_after_setup_theme' );

/**
 *ヘッダー、フッターのカスタムメニュー化
 */
register_nav_menus(
array(
'place_global' => 'グローバル',
'place_contact' => 'コンタクト',
'place_footer' => 'フッターナビ',
)
);

// wp_nav_menuのliにclass追加
function add_additional_class_on_li($classes, $item, $args)
{
  if (isset($args->add_li_class)) {
    $classes['class'] = $args->add_li_class;
  }
  return $classes;
}
add_filter('nav_menu_css_class', 'add_additional_class_on_li', 1, 3);

// wp_nav_menuのaにclass追加
function add_additional_class_on_a($classes, $item, $args)
{
  if (isset($args->add_li_class)) {
    $classes['class'] = $args->add_a_class;
  }
  return $classes;
}
add_filter('nav_menu_link_attributes', 'add_additional_class_on_a', 1, 3);

// 固定ページでカテゴリーを有効化
function add_category_to_page() {
	register_taxonomy_for_object_type('category','page');
}
add_action('init','add_category_to_page');
// カテゴリアーカイブに固定ページを含める
function add_page_to_category_archive($query) {
	if ($query->is_category== true && $query->is_main_query()) {
		$query->set('post_type', array('post','page'));
	}
}
add_action('pre_get_posts','add_page_to_category_archive');

// 固定ページでタグを有効化
function add_tag_to_page() {
	register_taxonomy_for_object_type('post_tag','page');
}
add_action('init','add_tag_to_page');
// タグアーカイブに固定ページを含める
function add_page_to_tag_archive($obj) {
	if (is_tag()) {
		$obj->query_vars['post_type'] = array('post','page');
	}
}
add_action('pre_get_posts','add_page_to_tag_archive');