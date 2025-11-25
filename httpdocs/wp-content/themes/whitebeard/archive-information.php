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
			<dt>INFORMATION</dt>
			<dd>お知らせ</dd>
				  
				  </dl></div>
		
		<ul class="pnav">
				  <li><a href="/"><span>HOME</span></a></li>
				  <li>お知らせ</li>
				  </ul>
		</div>
	
	</section>



<section class="aboutsecond">
	<div class="contentInner">
		
		
		
		<div class="servisecontant">
			
			<p class="imginfifo"><img src="<?php echo get_template_directory_uri(); ?>/img/infomation/infoimg.png" alt=""/></p>
			<div class="svinner">
				
				<div class="dhycont">
			<div class="">
				<dl class="sectt ">
			  <dt>Notification of new information</dt>
			  <dd>弊社の新着情報をお知らせ</dd>
			  
		 </dl>
				
				</div>
				<div class="serchis"><!--<input type="checkbox" name="food" value="1">ニュース
<input type="checkbox" name="food" value="2">メディア
<input type="checkbox" name="food" value="3">よりみち屋
<input type="checkbox" name="food" value="4">イベント
<input class="favorite styled" type="button" value="検索" />-->
				

					
					<div class="pc"><?php echo do_shortcode( '[searchandfilter fields="category" hide_empty="1" types="checkbox" submit_label="検索"]'  ); ?></div>
					
					</div>
			

				
				<div class="sp"><?php echo do_shortcode( '[searchandfilter fields="category" hide_empty="1" submit_label="検索"]' ); ?></div>

				
				</div>
				
				
				
				
				<div class="infolists">

					
					 <ul class="infists">

  <?php
    $args = array(
    'paged'          => $paged,
'post_type' => 'information',
    'posts_per_page' => 10,
    ); 
    $my_query = new WP_Query($args);
    if ($my_query->have_posts()) :
    while ($my_query->have_posts()) : $my_query->the_post();
    ?>	
		  <?php
  $cat = get_the_category();
  $catname = $cat[0]->cat_name; //カテゴリー名
  $catslug = $cat[0]->slug; //スラッグ名
?>

		  
        <li> <a href="<?php the_permalink(); ?>">
			<p><?php
            if ( has_post_thumbnail() ):
              the_post_thumbnail();
            else :
              ?>
            <img src="<?php echo get_template_directory_uri(); ?>/ivy_img/infoimg_p.jpg" alt="" />
            <?php endif; ?></p>
			
			<dt> <?php the_time('Y.m.d'); ?></dt>
							<dd> <?php the_title(); ?></dd>
						</dl>
        
       
          </a> 
					<ul class="ctgList">
						<li class="<?php echo $catslug; ?>"><?php echo $catname; ?></li>
						</ul>
					
					
					</li>
        <?php endwhile; ?>
		
      </ul>					
				
					
					
					
 	
				</div>
			</div></div>
		
</div>
			
		<?php wp_reset_query();endif; ?>
	
	

<?php the_posts_pagination(); ?>
 
	</section>







<?php
get_footer();
?>
