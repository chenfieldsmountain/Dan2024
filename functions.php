<?php

//サイドバーのセット

register_sidebar(1); 
register_sidebar(2); 
register_sidebar(3); 


//アイキャッチ画像

add_theme_support( 'post-thumbnails' );

//画像サイズの変更

add_image_size( 'medium', 640, 480, true );
add_image_size( 'eye_catch', 320, 240, true );


//もっと読むのハッシュ消し

function new_excerpt_more($more) {
  return ' ... ';
}
add_filter('excerpt_more', 'new_excerpt_more');


//もっと読むの文字数

function twpp_change_excerpt_length( $length ) {
  return 50; 
}
add_filter( 'excerpt_length', 'twpp_change_excerpt_length', 999 );

/* カスタムメニュー */

add_theme_support( 'menus' );


/* カスタム投稿タイプの月別アーカイブ */

add_filter( 'getarchives_where', 'my_getarchives_where', 10, 2 );
function my_getarchives_where( $where, $r ) {
  global $taxonomy_getarchives_data;
  if ( isset($r['post_type']) ){
    $taxonomy_getarchives_data['post_type'] = $r['post_type'];
    $where = str_replace( '\'post\'', '\'' . $r['post_type'] . '\'',
             $where );
  }
  return $where;
}

function archive_link_for_taxonomy($url){
  global $taxonomy_getarchives_data;
  if (isset($taxonomy_getarchives_data['post_type'])){
    $url .= strpos($url, '?') === false ? '?' : '&';
    $url .= 'post_type=' . $taxonomy_getarchives_data['post_type'];
  }
  return $url;
}
add_filter('year_link', 'archive_link_for_taxonomy');
add_filter('month_link', 'archive_link_for_taxonomy');
add_filter('day_link', 'archive_link_for_taxonomy');

add_filter('posts_search_orderby', 'custom_posts_search_orderby');
function custom_posts_search_orderby() {
    return ' post_date desc ';
}


/* ドロワーメニュー呼び出し */

function navbutton_scripts(){
  wp_enqueue_script( 'navbutton_script', get_template_directory_uri() .'/js/navbutton.js', array('jquery') );
}
add_action( 'wp_enqueue_scripts' , 'navbutton_scripts' );


?>