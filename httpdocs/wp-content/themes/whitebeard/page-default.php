<?php
/**
 * Template Name: 固定ページ(デフォルト)テンプレート
 */
get_header();
?>

<main>
  <section class="aboutmain">
    <div class="contentInner">
      <div class="secontTitWrapp">
        <dl class="sectt secondmaiTit">
          <dt><?php the_title(); ?></dt>
          <dd><h1><?php the_title(); ?></h1></dd>
        </dl>
      </div>
      <ul class="pnav">
        <li><a href="/"><span>HOME</span></a></li>
        <li><?php the_title(); ?></li>
      </ul>
    </div>
  </section>
  <div class="default-contentwrap">
    <div class="post_thumbnail">
      <?php 
        // アイキャッチ画像が設定されているかチェック
        if(has_post_thumbnail()){
            // アイキャッチ画像を表示する
            the_post_thumbnail();
        } else {
        }
      ?>
    </div>
    <?php the_content(); ?>
  </div>
</main><!-- #main -->

<?php 
get_footer();
?>
