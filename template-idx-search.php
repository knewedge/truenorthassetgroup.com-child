<?php /* Template Name: IDX Search Page */ ?>
<?php get_header(); ?>
<?php do_action('__before_main_wrapper'); ?>
<div id="main-wrapper" class="section">
	<div class="row">
		<div class="col-md-12">
			<h2 style="margin-bottom:2.5rem;" class="listing-title"><?php the_title(); ?></h2>
			<?php if(strpos($_SERVER['QUERY_STRING'], "tyType=COM") > 0){ ?>
			<a style="margin-bottom:20px;" class="btn btn-danger" href="/property-search/?search=lease" id="com-sale-btn">Search Commercial Properties For Lease</a>
			<?php
			global $post;
			echo apply_filters('the_content',$post->post_content);
			?>
			<?php }else if(strpos($_SERVER['QUERY_STRING'], "arch=lease") > 0){ ?>
			<a style="margin-bottom:20px;" class="btn btn-danger" href="/property-search/?propertyType=COM&propertyType=LL&propertyType=RI&status=active" id="com-sale-btn">Search Commercial Properties For Sale</a>		
			<?php
			echo do_shortcode('[searchandfilter id="1052"]');
			echo do_shortcode('[searchandfilter id="1052" action="filter_next_query"]');
			echo do_shortcode('[post_grid id="1064"]');
			?>
			<?php } ?>
		</div>
	</div>
</div>
<!-- Hide & Show Search Sections Logic -->
<style>
a.btn-danger:hover{
	color:#ffffff;
}
</style>
<?php get_footer(); ?>
