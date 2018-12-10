<?php
//テーマのセットアップ
// titleタグをhead内に生成する
add_theme_support( 'title-tag' );
// HTML5でマークアップさせる
add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ) );
// Feedのリンクを自動で生成する
add_theme_support( 'automatic-feed-links' );
//アイキャッチ画像を使用する設定
add_theme_support( 'post-thumbnails' );


//カスタムメニュー
register_nav_menu( 'header-nav',  ' ヘッダーナビゲーション ' );
register_nav_menu( 'footer-nav',  ' フッターナビゲーション ' );


//サイドバーにウィジェット追加
function widgetarea_init() {
	register_sidebar(array(
		'name'=>'サイドバー',
		'id' => 'side-widget',
		'before_widget'=>'<div id="%1$s" class="%2$s sidebar-wrapper">',
		'after_widget'=>'</div>',
		'before_title' => '<h4 class="sidebar-title">',
		'after_title' => '</h4>'
	));
}
add_action( 'widgets_init', 'widgetarea_init' );


// jsの追加
if (!is_admin()) {
	function register_script(){
		wp_register_script( 'ink', get_stylesheet_directory_uri() . '/js/ink.js', array( 'jquery' ), '', true);
	}
	function add_script() {
		register_script();
		wp_enqueue_script('ink');
	}
	add_action('wp_enqueue_scripts', 'add_script');
}