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

// タブタイトル書き換え
add_theme_support( 'title-tag' );
  function rewrite_title($title) {
    if (is_home()) {
      $title['tagline'] = '';
    } else if (is_singular('burger')) {
      $title['title'] =  $title['title'];
    }
    return $title;
    }
  add_filter('document_title_parts', 'rewrite_title');

  function rewrite_separator($separator) {
    $separator = '|';
    return $separator;
  }

  add_filter('document_title_separator', 'rewrite_separator');



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

// カスタム投稿のurlをidへ
function burger_post_type_link( $link, $post ){
  if ( $post->post_type === 'burger' ) {
    return home_url( '/burger/' . $post->ID );
  } else {
    return $link;
  }
}
add_filter( 'post_type_link', 'burger_post_type_link', 1, 2 );

function burger_rewrite_rules_array( $rules ) {
  $new_rewrite_rules = array( 
    'burger/([0-9]+)/?$' => 'index.php?post_type=burger&p=$matches[1]',
  );
  return $new_rewrite_rules + $rules;
}
add_filter( 'rewrite_rules_array', 'burger_rewrite_rules_array' );

// カスタム投稿のurlをidへ
function side_post_type_link( $link, $post ){
  if ( $post->post_type === 'side' ) {
    return home_url( '/side/' . $post->ID );
  } else {
    return $link;
  }
}
add_filter( 'post_type_link', 'side_post_type_link', 1, 2 );

function side_rewrite_rules_array( $rules ) {
  $new_rewrite_rules = array( 
    'side/([0-9]+)/?$' => 'index.php?post_type=side&p=$matches[1]',
  );
  return $new_rewrite_rules + $rules;
}
add_filter( 'rewrite_rules_array', 'side_rewrite_rules_array' );

// カスタム投稿のurlをidへ
function drink_post_type_link( $link, $post ){
  if ( $post->post_type === 'drink' ) {
    return home_url( '/drink/' . $post->ID );
  } else {
    return $link;
  }
}
add_filter( 'post_type_link', 'drink_post_type_link', 1, 2 );

function drink_rewrite_rules_array( $rules ) {
  $new_rewrite_rules = array( 
    'drink/([0-9]+)/?$' => 'index.php?post_type=drink&p=$matches[1]',
  );
  return $new_rewrite_rules + $rules;
}
add_filter( 'rewrite_rules_array', 'drink_rewrite_rules_array' );




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
