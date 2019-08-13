<?php get_header(); ?>
<?php do_action('__before_main_wrapper'); ?>
<div id="main-wrapper" class="section">
	<div class="row">
		<div class="col-md-12">
			<h2 class="listing-title"><?php the_title(); ?></h2>
			<div class="row">
				<div class="col-md-6">
					<a href="#" id="com-leas-btn">For Lease</a>
				</div>
				<div class="col-md-6">
					<a href="#" id="com-sale-btn">For Sale</a>
				</div>
			</div>
			<div id="com-leas-search">
			<?php
			global $post;
			echo apply_filters('the_content',$post->post_content);
			?>
			</div>
			<div class="com-sale-search">
			<?php the_field('optima_shortcode'); ?>
			</div>
		</div>
	</div>
</div>
<style>
#com-leas-search, #com-sale-search{
	display:none;
}
</style>
<script>
$(function(){
	$("#com-leas-bntn").click(function(){
		alert("click lease");
	});
	$("#com-sale-bntn").click(function(){
		alert("click sale");
	});
});
</script>
<?php get_footer(); ?>
