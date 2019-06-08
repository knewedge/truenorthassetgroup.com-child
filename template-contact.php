<?php /* Template Name: Contact Page */ ?>
<?php get_header(); ?>
<?php do_action( '__before_main_wrapper' ); ?>
<div id="main-wrapper" class="<?php echo implode(' ', apply_filters( 'tc_main_wrapper_classes' , array('container') ) ) ?>">
	<div class="row">
		<div class="col-md-12 listing-left">
			<h2 class="listing-title"><?php the_title(); ?></h2>
			<div class="row">
				<div class="col-md-12">
					<h3 style="display:block;width:100%;text-align:left;">Overview</h3>
					<?php
					global $post;
					echo apply_filters('the_content',$post->post_content);
					?>
				</div>
			</div>
		</div>
	</div>
</div>
<div id="contact-section" class="row">
	<div class="col-md-6"><?php dynamic_sidebar('getintouch-section'); ?></div>
	<div id="contact-second-col" class="col-md-6"><?php dynamic_sidebar('connected-section'); ?></div>
</div>
<?php //get_footer(); ?>
 <!-- FOOTER -->
 <footer id="footer" class="<?php echo czr_fn__f('tc_footer_classes', '') ?>">
  	<?php //do_action( '__footer' ); // hook of footer widget and colophon?>
	<div class="row">
		<div class="col-md-6">
			<p>&copy; <?php echo date('Y'); ?></span> <a href="#">Keller Williams Realty Black Hills</a> &ndash; All rights reserved</p>
		</div>
	</div>
</footer>
<?php
do_action( '__after_page_wrap' );
wp_footer(); //do not remove, used by the theme and many plugins
do_action( '__after_footer' );
?>
</body>
<?php do_action( '__after_body' ); ?>
</html>
