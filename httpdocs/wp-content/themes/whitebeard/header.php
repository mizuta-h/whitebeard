  <!DOCTYPE html>
  <html lang="ja">

  <head>
  	<meta charset="utf-8">
  	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<meta name="format-detection" content="telephone=no">

  	<?php if (is_home() || is_front_page()) : ?>
  		<title>︎株式会社ホワイトビアード</title>
  	<?php else : ?>
  		<title><?php wp_title('|', true, 'right');
					bloginfo('name'); ?></title>
  	<?php endif; ?>
  	<meta name="description" content="地域の人々１人ひとりの心に寄り添う支援">
  	<!-- og page properties -->
  	<meta property="og:title" content="<?php wp_title('|', true, 'right');
											bloginfo('name'); ?>">
  	<meta property="og:type" content="website" />
  	<meta property="og:url" content="https://whitebeard.co.jp">
  	<meta property="og:site_name" content="株式会社ホワイトビアード" />
  	<meta property="og:image" content="https://whitebeard.co.jp/wp-content/themes/whitebeard/common/img/ogp.png">
  	<meta property="og:description" content="地域の人々１人ひとりの心に寄り添う支援">

  	<!-- Google Tag Manager -->
  	<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/common/img/favicon.ico">
  	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/common/css/reset.css">
  	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/common/css/base.css">
  	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
  	<?php if (!is_home() && !is_front_page()) : ?>
  		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/second.css">
  	<?php endif; ?>
  	<script>
  		console.log("")
  	</script>
	<!-- gutenberg style _ 20251021 seki-->
	<?php if ( is_page() ): ?>
		<link rel="stylesheet" class="wp-block-library-css" href="<?php echo includes_url(); ?>/blocks/button/style.min.css" type="text/css" media="all">
		<link rel="stylesheet" class="wp-block-library-css" href="<?php echo includes_url(); ?>/blocks/buttons/style.min.css" type="text/css" media="all">
		<link rel="stylesheet" class="wp-block-library-css" href="<?php echo includes_url(); ?>/blocks/post-comments-form/style.min.css" type="text/css" media="all">
		<link rel="stylesheet" class="wp-block-library-css" href="<?php echo includes_url(); ?>/css/dist/block-editor/style.min.css" type="text/css" media="all">
		<link rel="stylesheet" class="wp-block-library-css" href="<?php echo includes_url(); ?>/css/dist/block-library/style.min.css" type="text/css" media="all">
		<link rel="stylesheet" class="wp-block-library-css" href="<?php echo includes_url(); ?>/css/dist/edit-post/style.min.css" type="text/css" media="all">
		<link rel="stylesheet" class="wp-block-library-css" href="<?php echo includes_url(); ?>/css/dist/editor/style.min.css" type="text/css" media="all">
		<link rel="stylesheet" class="wp-block-library-css" href="<?php echo includes_url(); ?>/css/dist/components/style.min.css" type="text/css" media="all">
		<link rel="stylesheet" class="wp-block-library-css" href="<?php echo includes_url(); ?>/css/dist/edit-site/style.min.css" type="text/css" media="all">
		<link rel="stylesheet" class="wp-block-library-css" href="<?php echo includes_url(); ?>/blocks/pullquote/style.min.css" type="text/css" media="all">
		<link rel="stylesheet" class="wp-block-library-css" href="<?php echo includes_url(); ?>/blocks/rss/style.min.css" type="text/css" media="all">
		<link rel="stylesheet" class="wp-block-library-css" href="<?php echo includes_url(); ?>/blocks/social-links/style.min.css" type="text/css" media="all">
		<link rel="stylesheet" class="wp-block-library-css" href="<?php echo includes_url(); ?>/css/dist/format-library/style.min.css" type="text/css" media="all">
		<link rel="stylesheet" class="wp-block-library-css" href="<?php echo includes_url(); ?>/blocks/latest-posts/format-library/style.min.css" type="text/css" media="all">
		<link rel="stylesheet" class="wp-block-library-css" href="<?php echo includes_url(); ?>/blocks/code/style.min.css" type="text/css" media="all">
		<link rel="stylesheet" class="wp-block-library-css" href="<?php echo includes_url(); ?>/blocks/image/style.min.css" type="text/css" media="all">
		<link rel="stylesheet" class="wp-block-library-css" href="<?php echo includes_url(); ?>/blocks/comment-template/style.min.css" type="text/css" media="all">
		<link rel="stylesheet" class="wp-block-library-css" href="<?php echo includes_url(); ?>/blocks/comments/style.min.css" type="text/css" media="all">
		<link rel="stylesheet" class="wp-block-library-css" href="<?php echo includes_url(); ?>/blocks/comments-pagination/style.min.css" type="text/css" media="all">
		<link rel="stylesheet" class="wp-block-library-css" href="<?php echo includes_url(); ?>/blocks/cover/style.min.css" type="text/css" media="all">
		<link rel="stylesheet" class="wp-block-library-css" href="<?php echo includes_url(); ?>/blocks/media-text/style.min.css" type="text/css" media="all">
		<link rel="stylesheet" class="wp-block-library-css" href="<?php echo includes_url(); ?>/blocks/navigation/style.min.css" type="text/css" media="all">
		<link rel="stylesheet" class="wp-block-library-css" href="<?php echo includes_url(); ?>/blocks/page-list/style.min.css" type="text/css" media="all">
		<link rel="stylesheet" class="wp-block-library-css" href="<?php echo includes_url(); ?>/blocks/post-template/style.min.css" type="text/css" media="all">
		<link rel="stylesheet" class="wp-block-library-css" href="<?php echo includes_url(); ?>/blocks/query-total/style.min.css" type="text/css" media="all">
		<link rel="stylesheet" class="wp-block-library-css" href="<?php echo includes_url(); ?>/blocks/read-more/style.min.css" type="text/css" media="all">
		<link rel="stylesheet" class="wp-block-library-css" href="<?php echo includes_url(); ?>/blocks/search/style.min.css" type="text/css" media="all">
		<link rel="stylesheet" class="wp-block-library-css" href="<?php echo includes_url(); ?>/blocks/text-columns/style.min.css" type="text/css" media="all">
		<link rel="stylesheet" class="wp-block-library-css" href="<?php echo includes_url(); ?>/css/dist/block-directory/style.min.css" type="text/css" media="all">
		<link rel="stylesheet" class="wp-block-library-css" href="<?php echo includes_url(); ?>/css/dist/customize-widgets/style.min.css" type="text/css" media="all">
		<link rel="stylesheet" class="wp-block-library-css" href="<?php echo includes_url(); ?>/css/dist/nux/style.min.css" type="text/css" media="all">
		<link rel="stylesheet" class="wp-block-library-css" href="<?php echo includes_url(); ?>/css/dist/edit-widgets/style.min.css" type="text/css" media="all">
		<link rel="stylesheet" class="wp-block-library-css" href="<?php echo includes_url(); ?>/blocks/post-content/style.min.css" type="text/css" media="all">
		<link rel="stylesheet" class="wp-block-library-css" href="<?php echo includes_url(); ?>/css/dist/list-reusable-blocks/style.min.css" type="text/css" media="all">
		<link rel="stylesheet" class="wp-block-library-css" href="<?php echo includes_url(); ?>/blocks/categories/style.min.css" type="text/css" media="all">
		<link rel="stylesheet" class="wp-block-library-css" href="<?php echo includes_url(); ?>/blocks/comment-author-name/style.min.css" type="text/css" media="all">
		<link rel="stylesheet" class="wp-block-library-css" href="<?php echo includes_url(); ?>/blocks/comment-content/style.min.css" type="text/css" media="all">
		<link rel="stylesheet" class="wp-block-library-css" href="<?php echo includes_url(); ?>/blocks/comment-date/style.min.css" type="text/css" media="all">
		<link rel="stylesheet" class="wp-block-library-css" href="<?php echo includes_url(); ?>/blocks/comment-edit-link/style.min.css" type="text/css" media="all">
		<link rel="stylesheet" class="wp-block-library-css" href="<?php echo includes_url(); ?>/blocks/gallery/style.min.css" type="text/css" media="all">
		<link rel="stylesheet" class="wp-block-library-css" href="<?php echo includes_url(); ?>/blocks/comment-reply-link/style.min.css" type="text/css" media="all">
		<link rel="stylesheet" class="wp-block-library-css" href="<?php echo includes_url(); ?>/blocks/list/style.min.css" type="text/css" media="all">
		<link rel="stylesheet" class="wp-block-library-css" href="<?php echo includes_url(); ?>/blocks/loginout/style.min.css" type="text/css" media="all">
		<link rel="stylesheet" class="wp-block-library-css" href="<?php echo includes_url(); ?>/blocks/post-author/style.min.css" type="text/css" media="all">
		<link rel="stylesheet" class="wp-block-library-css" href="<?php echo includes_url(); ?>/blocks/post-author-biography/style.min.css" type="text/css" media="all">
		<link rel="stylesheet" class="wp-block-library-css" href="<?php echo includes_url(); ?>/blocks/post-author-name/style.min.css" type="text/css" media="all">
		<link rel="stylesheet" class="wp-block-library-css" href="<?php echo includes_url(); ?>/blocks/post-excerpt/style.min.css" type="text/css" media="all">
		<link rel="stylesheet" class="wp-block-library-css" href="<?php echo includes_url(); ?>/blocks/post-title/style.min.css" type="text/css" media="all">
		<link rel="stylesheet" class="wp-block-library-css" href="<?php echo includes_url(); ?>/blocks/query-pagination/style.min.css" type="text/css" media="all">
		<link rel="stylesheet" class="wp-block-library-css" href="<?php echo includes_url(); ?>/blocks/site-title/style.min.css" type="text/css" media="all">
		<link rel="stylesheet" class="wp-block-library-css" href="<?php echo includes_url(); ?>/blocks/term-description/style.min.css" type="text/css" media="all">
		<link rel="stylesheet" class="wp-block-library-css" href="<?php echo includes_url(); ?>/css/dist/preferences/style.min.css" type="text/css" media="all">
		<link rel="stylesheet" class="wp-block-library-css" href="<?php echo includes_url(); ?>/blocks/post-featured-image/style.min.css" type="text/css" media="all">
		<link rel="stylesheet" class="wp-block-library-css" href="<?php echo includes_url(); ?>/blocks/audio/style.min.css" type="text/css" media="all">
		<link rel="stylesheet" class="wp-block-library-css" href="<?php echo includes_url(); ?>/blocks/embed/style.min.css" type="text/css" media="all">
		<link rel="stylesheet" class="wp-block-library-css" href="<?php echo includes_url(); ?>/blocks/video/style.min.css" type="text/css" media="all">
		<link rel="stylesheet" class="wp-block-library-css" href="<?php echo includes_url(); ?>/css/dist/patterns/style.min.css" type="text/css" media="all">
		<link rel="stylesheet" class="wp-block-library-css" href="<?php echo includes_url(); ?>/blocks/paragraph/style.min.css" type="text/css" media="all">
		<link rel="stylesheet" class="wp-block-library-css" href="<?php echo includes_url(); ?>/blocks/separator/style.min.css" type="text/css" media="all">
		<link rel="stylesheet" class="wp-block-library-css" href="<?php echo includes_url(); ?>/blocks/site-logo/style.min.css" type="text/css" media="all">
		<link rel="stylesheet" class="wp-block-library-css" href="<?php echo includes_url(); ?>/blocks/tag-cloud/style.min.css" type="text/css" media="all">
		<link rel="stylesheet" class="wp-block-library-css" href="<?php echo includes_url(); ?>/blocks/group/style.min.css" type="text/css" media="all">
		<link rel="stylesheet" class="wp-block-library-css" href="<?php echo includes_url(); ?>/blocks/details/style.min.css" type="text/css" media="all">
		<link rel="stylesheet" class="wp-block-library-css" href="<?php echo includes_url(); ?>/blocks/navigation-link/style.min.css" type="text/css" media="all">
		<link rel="stylesheet" class="wp-block-library-css" href="<?php echo includes_url(); ?>/css/dist/commands/style.min.css" type="text/css" media="all">
		<link rel="stylesheet" class="wp-block-library-css" href="<?php echo includes_url(); ?>/css/dist/widgets/style.min.css" type="text/css" media="all">
		<link rel="stylesheet" class="wp-block-library-css" href="<?php echo includes_url(); ?>/css/dist/reusable-blocks/style.min.css" type="text/css" media="all">
		<link rel="stylesheet" class="wp-block-library-css" href="<?php echo includes_url(); ?>/blocks/table/style.min.css" type="text/css" media="all">
		<link rel="stylesheet" class="wp-block-library-css" href="<?php echo includes_url(); ?>/blocks/quote/style.min.css" type="text/css" media="all">
		<link rel="stylesheet" class="wp-block-library-css" href="<?php echo includes_url(); ?>/blocks/file/style.min.css" type="text/css" media="all">
		<link rel="stylesheet" class="wp-block-library-css" href="<?php echo includes_url(); ?>/blocks/columns/style.min.css" type="text/css" media="all">
		<link rel="stylesheet" class="wp-block-library-css" href="<?php echo includes_url(); ?>/blocks/heading/style.min.css" type="text/css" media="all">
		<link rel="stylesheet" class="wp-block-library-css" href="<?php echo includes_url(); ?>/blocks/post-navigation-link/style.min.css" type="text/css" media="all">
		<link rel="stylesheet" class="wp-block-library-css" href="<?php echo includes_url(); ?>/blocks/preformatted/style.min.css" type="text/css" media="all">
		<link rel="stylesheet" class="wp-block-library-css" href="<?php echo includes_url(); ?>/blocks/footnotes/style.min.css" type="text/css" media="all">
		<link rel="stylesheet" class="wp-block-library-css" href="<?php echo includes_url(); ?>/blocks/avatar/style.min.css" type="text/css" media="all">
		<link rel="stylesheet" class="wp-block-library-css" href="<?php echo includes_url(); ?>/blocks/latest-comments/style.min.css" type="text/css" media="all">
		<link rel="stylesheet" class="wp-block-library-css" href="<?php echo includes_url(); ?>/blocks/archives/style.min.css" type="text/css" media="all">
		<link rel="stylesheet" class="wp-block-library-css" href="<?php echo includes_url(); ?>/blocks/calendar/style.min.css" type="text/css" media="all">
		<link rel="stylesheet" class="wp-block-library-css" href="<?php echo includes_url(); ?>/blocks/post-date/style.min.css" type="text/css" media="all">
		<link rel="stylesheet" class="wp-block-library-css" href="<?php echo includes_url(); ?>/blocks/post-terms/style.min.css" type="text/css" media="all">
		<link rel="stylesheet" class="wp-block-library-css" href="<?php echo includes_url(); ?>/blocks/query-title/style.min.css" type="text/css" media="all">
		<link rel="stylesheet" class="wp-block-library-css" href="<?php echo includes_url(); ?>/blocks/spacer/style.min.css" type="text/css" media="all">
		<link rel="stylesheet" class="wp-block-library-css" href="<?php echo includes_url(); ?>/blocks/verse/style.min.css" type="text/css" media="all">
		<link rel="stylesheet" class="wp-block-library-css" href="<?php echo includes_url(); ?>/css/dist/block-editor/default-editor-styles.min.css" type="text/css" media="all">
	<?php endif; ?>
  </head>
  <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-1Y8FJ1WBM8"></script>
  <script>
  	window.dataLayer = window.dataLayer || [];

  	function gtag() {
  		dataLayer.push(arguments);
  	}
  	gtag('js', new Date());

  	gtag('config', 'G-1Y8FJ1WBM8');
  </script>

  <body>
  <script src="//accaii.com/whitebeard/script.js" async></script><noscript><img src="//accaii.com/whitebeard/script?guid=on"></noscript>



  	<header id="header">
  		<div class="hedder">
  			<div class="inner clearfix">
  				<h2 class="logohed"><a href="/"><img src="<?php echo get_template_directory_uri(); ?>/common/img/logo.svg" alt="" /></a></h2>
  				<ul class="gnav pc">
  					<li class="navsbout"><a href="/about">
  							<p><img src="<?php echo get_template_directory_uri(); ?>/common/img/nav_about.png" alt="" /></p>
  							<dl>
  								<dt>私たちについて</dt>
  								<dd>ABOUT</dd>
  							</dl>
  						</a>
  					</li>
  					<li class="navsservice"><a href="/service">
  							<p><img src="<?php echo get_template_directory_uri(); ?>/common/img/nav_service.png" alt="" /></p>
  							<dl>
  								<dt>事業内容</dt>
  								<dd>SERVICE</dd>
  							</dl>
  						</a>
  					</li>
  					<li class="navsbout"><a href="/information">
  							<p><img src="<?php echo get_template_directory_uri(); ?>/common/img/nav_ingfo.png" alt="" /></p>
  							<dl>
  								<dt>お知らせ</dt>
  								<dd>INFORMATION</dd>
  							</dl>
  						</a>
  					</li>

  					<li class="navsbout"><a href="/recruit">
  							<p><img src="<?php echo get_template_directory_uri(); ?>/common/img/nav_rec.png" alt="" /></p>
  							<dl>
  								<dt>採用情報</dt>
  								<dd>RECRUIT</dd>
  							</dl>
  						</a>
  					</li>
  					<li class="navsbout"><a href="/contact">
  							<p><img src="<?php echo get_template_directory_uri(); ?>/common/img/nav_mail.png" alt="" /></p>
  							<dl>
  								<dt>お問い合わせ</dt>
  								<dd>CONTACT</dd>
  							</dl>
  						</a>
  					</li>


  				</ul>
  			</div>
  			<div class="headerWrap">
  				<div id="menu-btn_sp" class="menu-trigger sp"> <span></span> <span></span> <span></span> </div>
  			</div>
  			<!-- /headerWrap -->
  			<div class="menuWrapp">
  				<div class="sp_menu">
  					<nav class="sp_menuWrap">
  						<ul>
  							<li class="navsbout"><a href="/about">
  									<p><img src="<?php echo get_template_directory_uri(); ?>/common/img/nav_about.svg" alt="" /></p>
  									<dl>
  										<dt>私たちについて</dt>
  										<dd>ABOUT</dd>
  									</dl>
  								</a>
  							</li>
  							<li class="navsservice"><a href="/service">
  									<p><img src="<?php echo get_template_directory_uri(); ?>/common/img/nav_service.svg" alt="" /></p>
  									<dl>
  										<dt>事業内容</dt>
  										<dd>SERVICE</dd>
  									</dl>
  								</a>
  							</li>
  							<li class="navsbout"><a href="/information">
  									<p><img src="<?php echo get_template_directory_uri(); ?>/common/img/nav_ingfo.svg" alt="" /></p>
  									<dl>
  										<dt>お知らせ</dt>
  										<dd>INFORMATION</dd>
  									</dl>
  								</a>
  							</li>

  							<li class="navsbout"><a href="/recruit">
  									<p><img src="<?php echo get_template_directory_uri(); ?>/common/img/nav_rec.svg" alt="" /></p>
  									<dl>
  										<dt>採用情報</dt>
  										<dd>RECRUIT</dd>
  									</dl>
  								</a>
  							</li>
  							<li class="navsbout"><a href="/contact">
  									<p><img src="<?php echo get_template_directory_uri(); ?>/common/img/nav_mail.svg" alt="" /></p>
  									<dl>
  										<dt>お問い合わせ</dt>
  										<dd>CONTACT</dd>
  									</dl>
  								</a>
  							</li>

  						</ul>

  						<dl class="navtel">
  							<dt>03-6638-7564</dt>
  							<dd>受付時間 平日 9：00～17：00</dd>
  						</dl>

  						<div class="navbtmlinks">
  							<p class="footinsta"><a href="https://www.instagram.com/shirohige.base/">INSTAGRAM</a></p>
  							<p class="f"><a href="/privacypolicy">プライバシーポリシー</a></p>
  						</div>
  						<p class="navcp">Copyright © white beard</p>
  					</nav>
  				</div>
  			</div>
  			<!-- /headerWrap -->

  	</header>

  	<div id="luxy">
  		<div id="wrapper">
  			<div　lass="contents">