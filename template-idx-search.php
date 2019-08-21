<?php /* Template Name: IDX Search Page */ ?>
<?php get_header(); ?>
<?php do_action('__before_main_wrapper'); ?>
<div id="main-wrapper" class="section">
	<div class="row">
		<div class="col-md-12">
			<h2 style="margin-bottom:2.5rem;" class="listing-title"><?php the_title(); ?></h2>
			<?php
			echo $_SERVER['QUERY_STRING'];
			?>	
			<!--
			<div class="row">
				<div class="col-md-12">
					<a class="btn btn-danger" href="#" id="com-sale-btn">Search For Sale</a> &nbsp; &nbsp; <a class="btn btn-danger" href="#" id="com-leas-btn">Search For Lease</a> 
				</div>
			</div>
			-->
			<!--
			<div id="com-sale-search">
			<h3 style="margin-bottom:0.5rem;">Commercial Properties - For Sale</h3>
			<div style="margin-bottom:20px;">Click the <strong>Search For Lease</strong> button above to search commercial properties for lease.</div> 
			<?php //the_field('optima_shortcode'); ?>
			</div>
			-->
			<div id="com-leas-search">
			<!--
			<h3 style="margin-bottom:0.5rem;">Commercial Properties - For Lease</h3>
			<div style="margin-bottom:20px;">Click the <strong>Search For Sale</strong> button above to search commerical properties for sale.</div>
			-->
			<?php
			global $post;
			echo apply_filters('the_content',$post->post_content);
			?>
			</div>
		</div>
	</div>
</div>
<!-- Hide & Show Search Sections Logic -->
<style>
#com-leas-search{
	/*display:none;*/
}
</style>
<script>
/*
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
*/
</script>
<?php get_footer(); ?>
