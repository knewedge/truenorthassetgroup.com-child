<?php
/*
* Template Name: Home Page
* Home page Layout
*/
?>
<?php get_header(); ?>
<?php do_action('__before_main_wrapper'); ?>

<div class="container">
    <div class="row">
        <div class="col-md-3 text-center"><img src="https://truenorthassetgroup.com/wp-content/uploads/2019/03/service1.png"></div>
        <div class="col-md-3 text-center"><img src="https://truenorthassetgroup.com/wp-content/uploads/2019/03/service2.png"></div>
        <div class="col-md-3 text-center"><img src="https://truenorthassetgroup.com/wp-content/uploads/2019/03/service3.png"></div>
        <div class="col-md-3 text-center"><img src="https://truenorthassetgroup.com/wp-content/uploads/2019/03/service4.png"></div>
    </div>
</div>






<?php /*
<a name="services"></a>

<?php dynamic_sidebar('services-section'); ?>


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
