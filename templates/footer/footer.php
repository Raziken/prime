<footer id="colophon" class="site-footer" role="contentinfo" <?php BoldGrid_Framework_Schema::footer( true ); ?>>
	<?php do_action( 'boldgrid_footer_top' ); ?>
	<div class="row">
		<div class="col-md-12">
			<div class="site-info">
				<?php do_action( 'boldgrid_menu_footer_center' ); ?>
			</div><!-- .site-info -->
		</div><!-- .col -->
	</div><!-- .row -->
	<div class="row">
		<div class="col-md-12">
			<?php dynamic_sidebar( 'boldgrid-widget-3' ); ?>
		</div><!-- .col -->
	</div><!-- .row -->
	<div class="row">
		<div class="col-md-12">
			<div class="attribution">
				<?php do_action( 'boldgrid_display_attribution_links' ); ?>
			</div><!-- .attribution -->
		</div><!-- .col -->
	</div><!-- .row -->
	<?php do_action( 'boldgrid_footer_bottom' ); ?>
</footer><!-- #colophon -->