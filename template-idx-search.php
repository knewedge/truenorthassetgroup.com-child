<?php /* Template Name: IDX Search Page */ ?>
<?php get_header(); ?>
<?php do_action('__before_main_wrapper'); ?>
<div id="main-wrapper" class="section">
	<div class="row">
		<div class="col-md-12">
			<h2 style="margin-bottom:2.5rem;" class="listing-title"><?php the_title(); ?></h2>
			<ul class="nav nav-tabs">
  				<li class="nav-item"><a class="nav-link active" href="#">Active</a></li>
  				<li class="nav-item"><a class="nav-link" href="#">Link</a></li>
  				<li class="nav-item"><a class="nav-link disabled" href="#">Disabled</a></li>
			</ul>
			<?php if(strpos($_SERVER['QUERY_STRING'], "tyType=COM") > 0){ ?>
			<a style="margin-bottom:20px;" class="btn btn-danger" href="/search-lease/" id="com-sale-btn">Search Commercial Properties For Lease</a>
			<?php }else if(strpos($_SERVER['REQUEST_URI'], "earch-lease") > 0){ ?>
			<a style="margin-bottom:20px;" class="btn btn-danger" href="/property-search/?propertyType=COM&propertyType=LL&propertyType=RI&status=active" id="com-sale-btn">Search Commercial Properties For Sale</a>
			<?php } ?>	
			<?php
			global $post;
			echo apply_filters('the_content',$post->post_content);
			?>
		</div>
	</div>
</div>
<!-- Hide & Show Search Sections Logic -->
<style>
a.btn-danger:hover{
	color:#ffffff!important;
}
</style>
<?php get_footer(); ?>
