<article class="col-md-2" <?php post_class( 'kiji-list' ); ?>>
	<a href="<?php the_permalink(); ?>">
		<div>
			<?  
			$img = get_field('c_logo');
			$imgurl = wp_get_attachment_image_src($img, 'full');
			if($imgurl){ ?>
				<img src="<? echo $imgurl[0]; ?>" alt="">
			<? } ?>
		</div>
		
		<div class="text">
			<!--タイトル-->
			<h2><?php the_title(); ?></h2>
			<p>
				<?  
				$txt = get_field('c_what');
				if($txt){ ?>
					<p><? echo $txt; ?></p>
				<? } ?>
			</p>

			<?php if (!is_category()): ?>
				<?php if( has_category() ): ?>
					<span class="cat-data">
						<?php $postcat=get_the_category(); echo $postcat[0]->name; ?>
					</span>
				<?php endif; ?>
			<?php endif; ?>
		</div>
	</a>
</article>