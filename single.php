<?php get_header(); ?>
<div class="container-wrp">
	<div>
		<?  
		$img = get_field('c_home');
		$imgurl = wp_get_attachment_image_src($img, 'full');
		if($imgurl){ ?>
			<img src="<? echo $imgurl[0]; ?>" alt="">
		<? } ?>
	</div>
	<div class="contents">

		<?php if(have_posts()): the_post(); ?>
			<article <?php post_class( 'kiji' ); ?>>

				<div class="clearfix sin-icon-box">
					<div class="float-left">
						<?  
						$img = get_field('c_logo');
						$imgurl = wp_get_attachment_image_src($img, 'full');
						if($imgurl){ ?>
							<div class="c-logo-img bkimg icon" style="background-image: url('<? echo $imgurl[0]; ?>')"></div>
						<? } ?>
					</div>
					<div class="float-left pdl10">
						<p><?php the_title(); ?></p>
						<?php if(has_category() ): ?>
							<span class="cat-data">
								<?php echo get_the_category_list( ' ' ); ?>
							</span>
						<?php endif; ?>				
					</div>
				</div>

				<div class="sin-content-wrp clear">
					<div class="mgtb30 pd20">
						<h5 class="mgb20">団体紹介</h5>
						<?  
						$area = get_field('c_intro');
						if($area){ ?>
							<p><? echo $area; ?></p>
						<? } ?>
					</div>

					<div class="mgtb30 pd20">
						<h5 class="mgb20">活動</h5>
						<?  
						$area = get_field('c_activity');
						if($area){ ?>
							<p><? echo $area; ?></p>
						<? } ?>
					</div>

					<div class="mgtb30 pd20">
						<h5 class="mgb20">活動詳細</h5>
						<?  
						$txt = get_field('c_place');
						if($txt){ ?>
							<p>活動場所：<? echo $txt; ?></p>
						<? } ?>

						<p>
							活動日：
							<?  
							$check = get_field('c_when');
							if($check){
								foreach((array)$check as $value) {
									echo $value.", ";
								}
							} ?>
						</p>

						<?  
						$select = get_field('c_time');
						if($select){ ?>
							<p>活動時間：<? echo $select; ?></p>
						<? } ?>

						<?  
						$num = get_field('c_frex');
						if($num){ ?>
							<p>活動頻度：<? echo $num; ?>/月</p>
						<? } ?>

						<?  
						$num = get_field('c_member');
						if($num){ ?>
							<p>メンバ数：<? echo $num; ?>人</p>
						<? } ?>
					</div>

					<div class="mgtb30 pd20">
						<h5 class="mgb20">連絡先</h5>
						<div class="sin-icon-wrp row">
							<?  
							$txt = get_field('c_twitter');
							if($txt){ ?>
								<a href="https://twitter.com/<? echo $txt; ?>" class="col-xs-4" target="_blank">
									<img src="<?php bloginfo('template_directory'); ?>/images/icon/00_twitter.png">
								</a>
							<? } ?>

							<?  
							$txt = get_field('c_facebook');
							if($txt){ ?>
								<a href="https://www.facebook.com/<? echo $txt; ?>" class="col-xs-4" target="_blank">
									<img src="<?php bloginfo('template_directory'); ?>/images/icon/00_facebook.png">
								</a>
							<? } ?>

							<?  
							$txt = get_field('c_mail');
							if($txt){ ?>
								<a href="<? echo $txt; ?>" class="col-xs-4" target="_blank">
									<img src="<?php bloginfo('template_directory'); ?>/images/icon/00_mail.png">
								</a>
							<? } ?>
						</div>
					</div>
				</div>
			</article>
		<?php endif; ?>
		<?php get_sidebar(); ?>
	</div>
</div>
<?php get_footer(); ?>
