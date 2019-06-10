<?php
/*
* Template Name: Home Page
* Home page Layout
*/
?>
<?php get_header(); ?>
<?php do_action('__before_main_wrapper'); ?>
<a name="services"></a>
<?php dynamic_sidebar('services-section'); ?>
<style>
/*Override styles on index.php*/
.fpc-marketing .fpc-widget-front .fp-title{
	font-size: 1.2em;
    font-weight: bold;
}
</style>
<?php /*
<div id="main-wrapper" class="section">
	<div class="featured-section-wrap">
		<h3 class="center-h3" style="color:#ffffff!important;">Featured Listings</h3>
		<?php do_action('__before_main_container'); ?>
		<div style="text-align:center;">
			<a id="see-all-link" href="/rapidcity/search">See all listings >></a>
		</div>
	</div>
</div>
<div id="contact-section" class="row">
	<div class="col-md-6"><?php dynamic_sidebar('getintouch-section'); ?></div>
	<div id="contact-second-col" class="col-md-6"><?php dynamic_sidebar('connected-section'); ?></div>
</div>

*/ ?>


<?php //get_footer(); ?>
 <!-- FOOTER -->
 <footer id="footer" class="<?php echo czr_fn__f('tc_footer_classes', '') ?>">
  	<?php //do_action( '__footer' ); // hook of footer widget and colophon?>
	<div class="row">
		<div class="col-md-6">
			<p>&copy; <?php echo date('Y'); ?></span> <a href="#">Keller Williams Realty Black Hills</a> &ndash; All rights reserved</p>
		</div>
		<!--Removed
		<div class="col-md-6">
			<p>Listings provided by Keller Williams Realty Black Hills
		</div>
		-->
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
