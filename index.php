<?php get_header(); ?>
<div class="container-wrp">
	<div class="contents">
		<div>
			<!-- <?php wp_list_categories('title_li='); ?> -->
		</div>

		<div>
			<div>
				<?php if(have_posts()): while(have_posts()): the_post(); ?>
					<?php include('loop.php'); ?>
				<?php endwhile; endif; ?>
			</div>

			<div class="pagination">
				<?php echo paginate_links( array(
					'type' => 'list',
					'mid_size' => '1',
					'prev_text' => '&laquo;',
					'next_text' => '&raquo;'
				) ); ?>
			</div>
		</div>

	</div>
	<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>
