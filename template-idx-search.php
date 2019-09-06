<?php /* Template Name: IDX Search Page */ ?>
<?php get_header(); ?>
<?php do_action('__before_main_wrapper'); ?>
<div id="main-wrapper" class="section">
	<div class="row">
		<div class="col-md-12">
			<?php if(strpos($_SERVER['QUERY_STRING'], "tyType=COM") > 0){ ?>
			<h2 style="margin-bottom:2.5rem;" class="listing-title"><?php the_title(); ?> - Commercial</h2>
			<ul class="nav nav-tabs">
				<li class="nav-item"><a class="nav-link active" href="#">For Sale</a></li>
				<li class="nav-item"><a class="nav-link disabled" href="/search-lease/">For Lease</a></li>
			</ul>
			<?php }else if(strpos($_SERVER['REQUEST_URI'], "earch-lease") > 0){ ?>
			<h2 style="margin-bottom:2.5rem;" class="listing-title"><?php the_title(); ?> - Commercial</h2>
			<ul class="nav nav-tabs">	
				<li class="nav-item"><a class="nav-link disabled" href="/property-search/?propertyType=COM&propertyType=LL&propertyType=RI&status=active">For Sale</a></li>
  				<li class="nav-item"><a class="nav-link active" href="#">For Lease</a></li>
			</ul>
			<?php }else{ ?>
			<h2 style="margin-bottom:2.5rem;" class="listing-title"><?php the_title(); ?></h2>
			<?php } ?>	
			<?php
			global $post;
			echo apply_filters('the_content',$post->post_content);
			?>
		</div>
	</div>
</div>
<?php get_footer(); ?>
