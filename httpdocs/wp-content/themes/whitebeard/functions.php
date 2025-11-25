<?php 





// 投稿のアーカイブページを作成する
function post_has_archive($args, $post_type)
{
    if ('post' == $post_type) {
        $args['rewrite'] = true; // リライトを有効にする
        $args['has_archive'] = 'information'; // 任意のスラッグ名
    }
    return $args;
}
add_filter('register_post_type_args', 'post_has_archive', 10, 2);

add_theme_support('post-thumbnails');

function custom_pager(){
	the_posts_pagination(
		array(
			'mid_size'  => '2',// 現在のページの両端に表示するページ数
			'prev_text' => '< 前へ',
			'next_text' => '次へ >',
		)
	);
}

/**
 * アイキャッチ画像に対応する
 */
function my_after_setup_theme(){
	// アイキャッチ画像を有効にする
	add_theme_support( 'post-thumbnails' ); 
	// アイキャッチ画像サイズを指定する（横：640px 縦：384）
	// 画像サイズをオーバーした場合は切り抜き
	set_post_thumbnail_size( 640, 384, true ); 
}
add_action( 'after_setup_theme', 'my_after_setup_theme' );

?>