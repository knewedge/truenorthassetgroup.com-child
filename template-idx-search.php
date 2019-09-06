<?php /* Template Name: IDX Search Page */ ?>
<?php get_header(); ?>
<?php do_action('__before_main_wrapper'); ?>
<div id="main-wrapper" class="section">
	<div class="row">
		<div class="col-md-12">
			<h2 style="margin-bottom:2.5rem;" class="listing-title"><?php the_title(); ?></h2>
			<ul class="nav nav-tabs">
			<?php if(strpos($_SERVER['QUERY_STRING'], "tyType=COM") > 0){ ?>
			<li class="nav-item"><a class="nav-link active" href="#">For Sale</a></li>
  			<li class="nav-item"><a class="nav-link disabled" href="/search-lease/">For Lease</a></li>
			<?php }else if(strpos($_SERVER['REQUEST_URI'], "earch-lease") > 0){ ?>
			<li class="nav-item"><a class="nav-link disabled" href="/property-search/?propertyType=COM&propertyType=LL&propertyType=RI&status=active">For Sale</a></li>
  			<li class="nav-item"><a class="nav-link active" href="#">For Lease</a></li>
			<?php } ?>
			</ul>	
			<?php
			global $post;
			echo apply_filters('the_content',$post->post_content);
			?>
		</div>
	</div>
</div>
<?php get_footer(); ?>
