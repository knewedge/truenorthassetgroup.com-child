<?php get_header(); ?>
<?php do_action('__before_main_wrapper'); ?>
<div id="main-wrapper" class="section">
	<div class="row">
		<div class="col-md-12">
			<h2 class="listing-title"><?php the_title(); ?></h2>
			<?php
			global $post;
			echo apply_filters('the_content',$post->post_content);
			?>
		</div>
	</div>
</div>
<?php get_footer(); ?>
