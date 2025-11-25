<?php
/*
Template Name: 問い合わせ
*/
?>

<?php

get_header();
?>
<section class="infomation contactarea second">
		  <div class="inner">
		  <dl class="ttl">
			  <dt class="fups"><img src="<?php echo get_template_directory_uri(); ?>/ivy_img/tit_contact.svg" alt="" /></dt>
			  <dd  class="serif sabtit fups">お問い合わせ</dd>
			  </dl>
			  
			  
			  <div class="secondins">
				  <div >
					  
				<div class="forminner"><?php
if(have_posts()): while(have_posts()): the_post();?>
<?php the_content(); ?>
<?php endwhile; endif; ?>
				  </div>
				  </div>
				  
				  
			  </div>
		  
		  </div>
	  </section>

<?php get_footer(); ?>
