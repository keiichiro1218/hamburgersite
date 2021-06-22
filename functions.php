<?php

function my_setup()
{
  add_theme_support('post-thumbnails'); // アイキャッチ画像を有効化
  add_theme_support('automatic-feed-links'); // 投稿とコメントのRSSフィードのリンクを有効化
  add_theme_support('title-tag'); // タイトルタグ自動生成
  add_theme_support(
    'html5',
    array( 
      'search-form',
      'comment-form',
      'comment-list',
      'gallery',
      'caption',
    )
  );
}

function my_script_init()
{
wp_enqueue_style( 'font-awesome', '//use.fontawesome.com/releases/v5.6.1/css/all.css', array(), '5.6.1' );
wp_enqueue_style( 'my', get_stylesheet_directory_uri() . '/css/style.css?'. date("ymdHis", filemtime( get_stylesheet_directory() . '/css/style.css')), array());
wp_enqueue_script('my', get_template_directory_uri() . '/js/script.js', array( 'jquery' ), '1.0.0', true);

if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
  wp_enqueue_script( 'comment-reply' );
}
// テーマチェックのエラー解決

}

add_action('wp_enqueue_scripts', 'my_script_init');


add_theme_support( 'title-tag' );
function setup_my_theme() {
  add_theme_support( 'title-tag' );
}

add_action( 'after_setup_theme', 'setup_my_theme');


register_nav_menus( array(
  'sidebar_nav' => 'サイドバーメニュー',
  'footer_nav' => 'フッターメニュー'
));

// カスタム投稿
add_action('init', function() {
  register_post_type('burger', [
    'label' => 'バーガー',
    'public' => true,
    'menu_position' => 5,
    'menu_icon' => 'dashicons-food',
    'supports' => ['thumbnail', 'title', 'editor'],
    'has_archive' => true
  ]);

  register_post_type('side', [
    'label' => 'サイド',
    'public' => true,
    'menu_position' => 6,
    'menu_icon' => 'dashicons-carrot',
    'supports' => ['thumbnail', 'title', 'editor'],
    'has_archive' => true
  ]);

  register_post_type('drink', [
    'label' => 'ドリンク',
    'public' => true,
    'menu_position' => 7,
    'menu_icon' => 'dashicons-coffee',
    'supports' => ['thumbnail', 'title', 'editor'],
    'has_archive' => true
  ]);

});


// アイキャッチ画像を有効にする。
add_theme_support('post-thumbnails');


//ページネーション機能追加と定義
function the_pagenation() {
  global $wp_query; 

  $big = 999999999; 
  if ( $wp_query->max_num_pages <= 1 ) 
      return; 
  echo '<nav class="pagenation">'; 
  echo paginate_links( array( 
      'base'         => str_replace( $big, '%#%', esc_url( get_pagenum_link($big) ) ),
      'format'       => '',
      'current'      => max( 1, get_query_var('paged') ),
      'total'        => $wp_query->max_num_pages,
      'prev_text'    => '&lt;&lt;',
      'next_text'    => '&gt;&gt;',
      'type'         => 'list',
      'end_size'     => 1,
      'mid_size'     => 1
          
  ) );
  echo '</nav>'; 
}

function custom_template_include( $template ) {
  if ( is_single() && in_category( 'news' )  ) {
    $new_template = locate_template( array( 'single-item.php' ) );
    if ( '' != $new_template ) {
      return $new_template ;
    }
  }
 
  return $template;
}
add_filter( 'template_include', 'custom_template_include', 99 );

if ( ! isset( $content_width ) ) $content_width = 1290; // コンテンツの幅が定義されていません。テーマチェック

// ThemeCheck
wp_list_comments( $args, $comments );

wp_body_open();
