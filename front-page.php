<?php
/*
* Template Name: Home Page
* Home page Layout
*/
?>
<?php get_header(); ?>
<?php do_action('__before_main_wrapper'); ?>
<!-- Removed Container
<div class="container">
-->
    <section class="services">
	<div class="container">
	<div class="row">
            <div class="col-md-12">
                <h1 class="text-center">OUR SERVICES</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 text-center">
                <a href="/sales/"><img src="/wp-content/uploads/2019/03/service1.png"></a>
                <h2 class="text-center">Commercial Sales</h2>
            </div>
            <div class="col-md-3 text-center">
                <a href="/leasing/"><img src="/wp-content/uploads/2019/03/service2.png"></a>
                <h2 class="text-center">Commercial Leasing</h2>
            </div>
            <div class="col-md-3 text-center">
                <a href="/property-management/"><img src="/wp-content/uploads/2019/03/service3.png"></a>
                <h2 class="text-center">Property Management</h2>
            </div>
            <div class="col-md-3 text-center">
                <a href="/bookkeeping-business-services/"><img src="/wp-content/uploads/2019/03/service4.png"></a>
                <h2 class="text-center">Business Services</h2>
            </div>
	</div>
	</div>
    </section>
    <section class="featured-listings">
        <div class="row">
            <div class="col-md-12">
		<h1 class="text-center">FEATURED LISTINGS</h1>
		<?php do_action('__before_main_container'); ?>
		<div style="text-align:center;">
			<a id="see-all-link" href="/rapidcity/search">See all listings >></a>
		</div>
            </div>
        </div>
    </section>
    <section class="property-management">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center">PROPERTY MANAGEMENT</h1>
                
                <p>True North Asset Group provides property management services throughout the Black Hills. We can help you get the most return on your investment properties and take care of the day-to-day operations so you don’t have to. With our integrated approach, our team can manage and lease your properties and keep your tenants happy.</p>
                
                <!-- START OF ARROW SECTON -->
                
                <p class="text-center">
                    <img src="/wp-content/uploads/2019/06/property-mang.png" alt"property management">
                </p>
                
                <!-- END OF ARROW SECTION -->
                
                <h2>Request a free management proposal or accounting report sample.</h2>
                <p class="text-center"><button type="button" class="btn btn-red">Contact Us Today!</button></p>
                
                
            </div>
        </div>
    </section>
<!-- Removed Container
</div>
-->

<?php get_footer(); ?>


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
*/ ?>

</body>
<?php do_action( '__after_body' ); ?>
</html>
