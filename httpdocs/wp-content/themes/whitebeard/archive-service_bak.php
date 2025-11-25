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
			<dt>SERVICE</dt>
			<dd>事業案内</dd>
				  
				  </dl></div>
		
		<ul class="pnav">
				  <li><a href="/"><span>HOME</span></a></li>
				  <li>事業案内</li>
				  </ul>
		</div>
	
	</section>
	
	

	
		<section class="service">
	<div class="contentInner">
		

		
		<div class="servesecon">
			<div class="svinner">
						<dl class="sectt ">
			  <dt>YORIMICHIYA</dt>
			  <dd>江戸川区<br class="sp">駄菓子屋居場所 <br class="sp">よりみち屋</dd>
			  
		 </dl>
				
		
		      <div class="svmg animein"><img src="<?php echo get_template_directory_uri(); ?>/img/img_servise.png" alt=""/></div>
			<div class="svTxt animein">
			<p class="svtittxt" >江戸川区ひきこもり支援推進事業</p>
				<p class="ulTxt"><span>ひきこもり状態にある方に安心して</span><br class="pc"><span>過ごしてもらい、交流や就労体験により</span><br class="pc"><span>社会とのつながりと自立を支援。</span></p>
				<p class="stxt">ひきこもり状態の方が<br class="pc">安心して過ごすことのできるスペースです。<br class="pc">テレビやボードゲーム、漫画などがあります。<br class="pc">懐かしの駄菓子を販売しています。<br class="pc"><br class="pc">ひきこもり状態の方が<br class="pc">短時間の就労体験を行うことも可能です。</p>
				
						  

			</div>

		</div>
		
		<div class="event">
			
			<div class="eventin">
				<dl class="sectt ">
			  <dt>EVENT</dt>
			  <dd>イベント</dd>
							<dd class="titredas ">よりみち屋で企画するイベント情報のご紹介</dd>
			  
		 </dl>
			<div class="eventList">
				
						

<?php
  $arg = array(
             'posts_per_page' => 3, // 表示する件数
             'orderby' => 'date', // 日付でソート
             'order' => 'DESC', // DESCで最新から表示、ASCで最古から表示
             'category_name' => 'event' // 表示したいカテゴリーのスラッグを指定
         );
  $posts = get_posts( $arg );
  if( $posts ): ?>
   
				
			<ul class="svlists">
					
			  <?php
      foreach ( $posts as $post ) :
        setup_postdata( $post ); ?>
				
			 <li class="animein">
         <a href="<?php the_permalink(); ?>">
			
<p class="infoimg"> <?php
            if ( has_post_thumbnail() ):
              the_post_thumbnail();
            else :
              ?>
            <img src="<?php echo get_template_directory_uri(); ?>/common/img/noimg.png" alt="" />
            <?php endif; ?></p>
						
							
								<dl>
						<dt class="days"><?php the_time('Y.m.d'); ?></dt>
							<dd><?php the_title(); ?></dd>
						</dl>
								
						
														  

          </a> </li>
								  
 
<?php endforeach; ?>

    
 </ul>
<?php
  endif;
  wp_reset_postdata();
?>		
			</div>
				
				
				
			</div>
			
			<div class="mapcontent">
			
			<dl>
                        <dt class="animein">駄菓子屋居場所「よりみち屋」</dt>
                        <dd class="animein">
                            〒132-0011 東京都江戸川区瑞江２丁目４−３<br>

                            利用時間 : 月曜日から金曜日　午前11時から午後5時<br>
                            お休み: 土曜日・日曜日・祝日<br>
                            <a href="#">Google Map</a><br><br>
                            <span class="bltxt ttls">・よりみち屋の運営に関するお問い合わせ</span>
                            <span class="bltxt">【専用電話】</span><a href="tel:0356661606">03-5666-1606</a><br>
                            <span class="bltxt">【代表電話】</span>、<a href="tel:0366387564">03-6638-7564</a><br>
                            <span class="bltxt">【メール】</span><a href="mailto:event-info@shirohige.clinic" target="_blank">event-info@shirohige.clinic</a><br><br>
                            <span class="bltxt ttls">・取材に関するお問い合わせ</span>
                            江戸川区福祉部生活援護管理課ひきこもり施策係<br>
                            <span class="bltxt">【電話】</span><a href="tel:0366574670">03-6657-4670</a><br>
                            <span class="bltxt">【WEB】<a href="https://www.city.edogawa.tokyo.jp/e091/kenko/fukushikaigo/hikikomori/dagashiyaibasyo.html" target="_blank">江戸川区HP</a></span><br>
                            <br>
                            <span class="bltxt ttls">・ひきこもり相談に関するお問い合わせ</span>
                            江戸川区福祉部生活援護管理課ひきこもり施策係<br>
                            <span class="bltxt">【電話】</span><a href="tel:0366574688">03-6657-4688</a><br>
                            <span class="bltxt">【時間】</span>午前8時30分から午後5時まで<br>
                            <span class="bltxt">【WEB】<a href="https://www.city.edogawa.tokyo.jp/e091/kenko/fukushikaigo/hikikomori/soudan.html" target="_blank">江戸川区HP</a></span><br>


                        </dd>
                    </dl>
				
				<p class="mapimg"><img src="<?php echo get_template_directory_uri(); ?>/img/servise/mapimg.png"/></p>
			</div>
			

				<div class="svscon">
				<p class="svsimg animein"><img src="<?php echo get_template_directory_uri(); ?>/img/servise/img01.png"/></p>
				<dl class="svsTxt  animein">
				<dt>駄菓子販売コーナー</dt>
					<dd>懐かしの駄菓子が勢揃い！<br>
ひきこもりの方が短時間の就労体験もできる駄菓子屋さんです。</dd>
				</dl>
		</div>
			
		<div class="harfcon">	<div class="svscon">
				<p class="svsimg animein"><img src="<?php echo get_template_directory_uri(); ?>/img/servise/img02.png"/></p>
				<dl class="svsTxt animein">
				<dt>駄菓子販売コーナー</dt>
					<dd>懐かしの駄菓子が勢揃い！<br>
ひきこもりの方が短時間の就労体験もできる駄菓子屋さんです。</dd>
				</dl>
		</div>
			
				<div class="svscon animein">
				<p class="svsimg  animein"><img src="<?php echo get_template_directory_uri(); ?>/img/servise/img03.png"/></p>
				<dl class="svsTxt  animein">
				<dt>交流スペース</dt>
					<dd>ひきこもりの方が安心して過ごせるスペースです。人とつながるきっかけにも。</dd>
				</dl>
		</div>
			</div>	
			
			<dl class="selsttxt animein">
			<dt>江戸川区ひきこもり支援推進事業</dt>
				<dd>江戸川区駄菓子屋居場所「よりみち屋」は、株式会社ホワイトビアードが、江戸川区より委託を受けて運営しています。</dd>
			</dl>
		</div>
			  <p class="obj05 objcts luxy-el" data-speed-y="-10" data-offset="50"><img class="pc" src="<?php echo get_template_directory_uri(); ?>/common/img/item05.svg" alt=""/><img class="sp" src="<?php echo get_template_directory_uri(); ?>/common/img/item05_sp.png" alt=""/></p>
	</section>
		  
		 


<?php
get_footer();
?>
