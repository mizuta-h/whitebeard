<?php wp_footer(); ?>



<section class="contactarea">
	<div class="contentInner">
		<div class="sns">
			<div class="contactIns">
				<dl class="sectt fntdmn">
					<dt>SNS</dt>
					<dd>INSTAGRAM</dd>
				</dl>
				<p class="istomg animein"><a href="https://www.instagram.com/shirohige.base/"><img src="<?php echo get_template_directory_uri(); ?>/img/img_insta.png" alt="" /></a></p>

			</div>
		</div>
		<div class="contact">
			<div class="contactIns">
				<dl class="sectt">
					<dt>CONTACT</dt>
					<dd>お問い合わせ</dd>
				</dl>

				<p class="animein mailtxt">メールの方はこちら</p>
				<p class="morerink animein"><a href="/contact">お問い合わせフォーム</a></p>

				<dl class="teltxts animein">
					<dt>お電話の方はこちら</dt>
					<dd class="telnam ">03-6638-7564</dd>
					<dd class="teltxt ">受付時間 平日 9：00～17：00</dd>
				</dl>

			</div>
		</div>
	</div>
	<p class="obj06 objcts luxy-el" data-speed-y="-10" data-offset="50"><img class="pc" src="<?php echo get_template_directory_uri(); ?>/common/img/item06.svg" alt="" /><img class="sp" src="<?php echo get_template_directory_uri(); ?>/common/img/item06_sp.png" alt="" /></p>

</section>


<footer class="footer">
	<div class="contentInner clearfix">
		<div class="footlogos">
			<h2 class="logofoot"><a href="/"><img src="<?php echo get_template_directory_uri(); ?>/common/img/logo.svg" alt="" /></a></h2>
			<p>Copyright © white beard</p>
		</div>
		<div class="footnavWrap pc">
			<ul class="footnavlist">
				<li><a href="/about">ホワイトビアードとは</a></li>
				<li><a href="/service/yorimichiya/">駄菓子屋居場所 よりみち屋</a></li>
				<li><a href="https://memory.whitebeard.co.jp">想い出コンシェルジュ</a></li>
				<li><a href="/category/event">イベント</a></li>
				<li><a href="/information">ニュース&メディア</a></li>
				<li><a href="/recruit">採用情報</a></li>
			</ul>
			<div class="footnavbtm">
				<p class="footmorerink"><a href="/contact">お問い合わせ</a></p>
				<p class="footinsta"><a href="https://www.instagram.com/shirohige.base/">INSTAGRAM</a></p>
				<dl>
					<dt>03-6638-7564</dt>
					<dd>受付時間 平日 9：00～17：00</dd>
				</dl>
			</div>

		</div>





	</div>
	<p class="obj07 objcts luxy-el" data-speed-y="-10" data-offset="50"><img class="pc" src="<?php echo get_template_directory_uri(); ?>/common/img/item07.svg" alt="" /><img class="sp" src="<?php echo get_template_directory_uri(); ?>/common/img/item07_sp.png" alt="" /></p>

</footer>
<!-- /contents -->
</div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/common/js/main.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/common/js/wpn.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/common/js/luxy.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/common/js/jquery.matchHeight-min.js"></script>

<!--<script charset="utf-8">
    luxy.init();
</script>-->

<script type="text/javascript">
	$('.animein,.sectt,.contit dt,.contit dd,.linkList,.movList li,.rsttwarp,.rslist li,.industryListUl li,.logoList li,.rstxt').waypoint(function(direction) {
		var activePoint = $(this.element);
		if (direction === 'down') { //scroll down
			activePoint.addClass('active');
		} else { //scroll up
			activePoint.removeClass('active');
		}
	}, {
		offset: '75%'
	});
</script>
</script>

<script type="text/javascript">
	$(function() {
		$('.sptin dd').matchHeight();
	});
</script>
<script type="text/javascript">
	$(function() {
		$('.contactIns').matchHeight();

	});
</script>
</body>

</html>