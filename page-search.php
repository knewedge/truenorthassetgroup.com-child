<?php get_header(); ?>
<?php do_action('__before_main_wrapper'); ?>
<div id="main-wrapper" class="section">
	<div class="row">
		<div class="col-md-12">
			<h2 class="listing-title"><?php the_title(); ?></h2>
			<div class="row">
				<div class="col-md-12">
					<a class="btn btn-danger" href="#" id="com-sale-btn">For Sale</a> &nbsp; &nbsp; <a class="btn btn-danger" href="#" id="com-leas-btn">For Lease</a> 
				</div>
			</div>
			<div id="com-leas-search">
			<?php
			global $post;
			echo apply_filters('the_content',$post->post_content);
			?>
			</div>
			<div id="com-sale-search">
			<?php the_field('optima_shortcode'); ?>
			</div>
		</div>
	</div>
</div>
<!-- Hide & Show Search Sections Logic -->
<style>
#com-leas-search{
	display:none;
}
</style>
<script>
jQuery(document).ready(function(){
	jQuery("#com-leas-btn").click(function(){
		jQuery("#com-sale-search").hide();
		jQuery("#com-leas-search").show();
	});
	jQuery("#com-sale-btn").click(function(){
		jQuery("#com-leas-search").hide();
		jQuery("#com-sale-search").show();
	});
});
</script>
<?php get_footer(); ?>
