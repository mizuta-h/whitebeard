<?php
/**
 * The main template file
 */
get_header();
?>







<section class="aboutmain">
		      <div class="contentInner">
		
		<div class="secontTitWrapp">
			<dl class="sectt secondmaiTit">
			<dt>YORIMICHIYA</dt>
			<dd>よりみち屋 イベント</dd>
				  
				  </dl></div>
		
		<ul class="pnav">
				  <li><a href="/"><span>HOME</span></a></li>
				  <li><a href="#"><span>よりみち屋 イベント</span></a></li>
				  <li>記事タイトルが入ります、大見出しのスタイル…</li>
				  </ul>
		</div>
	
	</section>
	
	

  </section>

	
	
		<section class="aboutsecond">
	<div class="contentInner">
		
		
		
		<div class="servisecontant">
			
			<div class="svinner">
			  <div class="dtcon">
					
					<dl class="ctgdate">
					<dt>イベント</dt>
					  <dd><?php the_time('Y.m.d'); ?></dd>
					</dl>
					
				<h1> <?php the_title(); ?></h1>
				 <?php the_content(); ?>
				</div>
				
				
	
			</div></div>
		
</div>
			
		
	</section>
	





















<?php
get_footer();
?>
