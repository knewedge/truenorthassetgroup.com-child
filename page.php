<?php
if ( apply_filters( 'czr_ms', false ) ) {
  do_action( 'czr_ms_tmpl' );
  return;
}
?>
<?php get_header(); ?>
<?php do_action( '__before_main_wrapper' ); ?>
<div id="main-wrapper" class="<?php echo implode(' ', apply_filters( 'tc_main_wrapper_classes' , array('container') ) ) ?>">
	<div class="row">
		<div class="col-md-12 listing-left">
			<div class="row">
				<div class="col-md-12">
					<h2>TEST - <?php the_title(); ?></h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<?php
					global $post;
					echo apply_filters('the_content',$post->post_content);
					?>
				</div>
			</div>
		</div>
	</div>
</div>
<?php
do_action( '__after_page_wrap' );
wp_footer(); //do not remove, used by the theme and many plugins
do_action( '__after_footer' );
?>
</body>
<?php do_action( '__after_body' ); ?>
</html>
