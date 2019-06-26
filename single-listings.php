<?php get_header(); ?>
<?php do_action('__before_main_wrapper'); ?>
<div class="featured-image">
	<!--
	<img src="<?php the_post_thumbnail_url('full'); ?>" />
	-->
	<?php
	echo do_shortcode(get_field('listing_gallery'));
	?>
</div>
<div id="main-wrapper" class="section">
	<div class="row">
		<div class="col-md-8 listing-left">
			<h2 class="listing-title"><?php the_title(); ?></h2>
			<h3 style="display:block;width:100%;text-align:left;">Property Features</h3>
			<div class="row">
				<div class="col-md-6">
					<p><strong>Available Space (SF):</strong> <?php the_field('space_available'); ?></p>
					<p><strong>Property Type:</strong> <?php the_field('property_type'); ?></p>
					<p><strong>Lease Type:</strong> <?php the_field('lease_type'); ?></p>
					<p><strong>Base Price per SF/YR:</strong> <?php the_field('base_price_per_sfyr'); ?></p>
				</div>
				<div class="col-md-6">
					<p><strong>NNN:</strong> <?php the_field('nnn'); ?></p>
					<p><strong>Monthly Price:</strong> $<?php the_field('monthly_price'); ?></p>
					<p><strong>Area:</strong> <?php the_field('area'); ?></p>
					<p><strong>Zoning:</strong> <?php the_field('zoning'); ?></p>
				</div>
			</div>
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
		<div class="col-md-4 listing-right">
			<div class="sb-realtor">
				<div class="row">
					<div class="col-md-12">
						<h3 style="display:block;width:100%;text-align:left;margin:0;">Interested in this property?</h3>
						<div><i class="fas fa-phone"></i> <a href="tel:+6054157222">(605) 415-7222</a></div>
						<div><i class="fas fa-envelope"></i> <a href="mailto:contact@truenorthassetgroup.com">contact@truenorthassetgroup.com</a></div>
						<a class="btn btn-danger" href="/rapidcity/contact/">Contact Us</a>
					</div>
					<!--
					<div class="col-md-4">
						<img src="<?php echo $photo; ?>" />
					</div>
					-->
				</div>
				<div class="row">
					<div class="col-md-12">
						<h3 style="display:block;width:100%;text-align:left;">Share this listing</h3>
						<?php echo sharethis_inline_buttons(); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<?php
			$gaddr = urlencode(get_field('address'));
			$gcity = urlencode(get_field('city'));
			$gstat = urlencode(get_field('state'));
			$url = "https://maps.googleapis.com/maps/api/geocode/json?address=".$gaddr.",+".$gcity.",+".$gstat."&key=AIzaSyDtqbZzSNq8tm_kTLy3EwOoPn4NItFdAt8";
			$resp_json = file_get_contents($url);
			$resp = json_decode($resp_json, true);
			if($resp['status']=='OK'){
				$lati = isset($resp['results'][0]['geometry']['location']['lat']) ? $resp['results'][0]['geometry']['location']['lat'] : "";
				$long = isset($resp['results'][0]['geometry']['location']['lng']) ? $resp['results'][0]['geometry']['location']['lng'] : "";
				$form = isset($resp['results'][0]['formatted_address']) ? $resp['results'][0]['formatted_address'] : "";
			}else{
				$lati = "44.080544";
				$long = "-103.231018";
			}
			?>
		    <style>
			#map{
				height:400px;
				width:100%;
			}
			</style>
			<!--The div element for the map -->
			<div id="map"></div>
			<script>
			/*Initialize Map*/
			function initMap(){
				var uluru = {lat: <?php echo $lati; ?>, lng: <?php echo $long; ?>};
				var map = new google.maps.Map(
				document.getElementById('map'), {zoom: 14, center: uluru});
				var marker = new google.maps.Marker({position: uluru, map: map});
			}
			</script>
			<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDtqbZzSNq8tm_kTLy3EwOoPn4NItFdAt8&callback=initMap"></script>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<p style="font-size:0.8em;">Listing provided by <?php the_field('broker'); ?>, <?php the_field('brokerage'); ?>.</p>
			<p style="font-size:0.8em;">We have obtained the above information from sources we deem reliable. However, we have not verified its accuracy and make no guarantee or warranty. It is submitted subject to the possibility of errors, omissions, change of price, rental or other conditions, prior sale, lease or financing, or withdrawal without notice. All information should be verified prior to purchase or lease.</p>
		</div>
	</div>
</div>
<div id="contact-section" class="row">
	<div class="col-md-6"><?php dynamic_sidebar('getintouch-section'); ?></div>
	<div id="contact-second-col" class="col-md-6"><?php dynamic_sidebar('connected-section'); ?></div>
</div>
<?php include "footer.php"; ?>
<?php
do_action( '__after_page_wrap' );
wp_footer(); //do not remove, used by the theme and many plugins
do_action( '__after_footer' );
?>
</body>
<?php do_action( '__after_body' ); ?>
</html>
