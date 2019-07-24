<?php
/*
* Template Name: Home Page
* Home page Layout
*/
?>
<?php get_header(); ?>
<?php do_action('__before_main_wrapper'); ?>
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
		<div class="container">
			<div class="row">
				<div class="col-md-12">
			<h1 class="text-center">FEATURED LEASE LISTINGS</h1>
			<?php do_action('__before_main_container'); ?>
			<div style="text-align:center;">
			    <a id="see-all-link" href="/rapidcity/search">See all listings >></a>
			</div>
				</div>
			</div>
		</div>
    </section>
    <section class="property-management">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h1 class="text-center">PROPERTY MANAGEMENT</h1>
					
					<p>True North Asset Group provides property management services throughout the Black Hills. We can help you get the most return on your investment properties and take care of the day-to-day operations so you don’t have to. With our integrated approach, our team can manage and lease your properties and keep your tenants happy.</p>
					
					<!-- START OF ARROW SECTON -->
					<!--
					<p class="text-center">
						<img src="/wp-content/uploads/2019/06/property-mang.png" alt"property management">
					</p>
					-->
					<p class="text-center">
					<!-- Image Map -->
					<img src="http://staging.truenorthassetgroup.com/wp-content/uploads/2019/06/property-mang.png" usemap="#image-map">

					<map name="image-map">	
    						<area target="_blank" alt="" title="" href="https://tnorth.twa.rentmanager.com/" coords="3,11,118,130" shape="rect">
    						<area target="_blank" alt="" title="" href="https://tnorth.twa.rentmanager.com/applynow" coords="352,130,511,7" shape="rect">
    						<area target="_blank" alt="" title="" href="https://tnorth.owa.rentmanager.com/" coords="714,9,903,127" shape="rect">
					</map>
					</p>
					<!-- END OF ARROW SECTION -->
					
					<h2>Request a free management proposal or accounting report sample.</h2>
					<p class="text-center"><a href="/contact-us/" class="btn btn-red">Contact Us Today!</a></p>
					
				</div>
			</div>
		</div>
    </section>
    <?php get_footer(); ?>
</body>
<?php do_action( '__after_body' ); ?>
</html>
