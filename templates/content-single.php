<?php while ( have_posts() ) : the_post(); ?>
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<header class="entry-header">
			<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
			<div class="entry-meta">
				<?php boldgrid_posted_on(); ?>
			</div><!-- .entry-meta -->
		</header><!-- .entry-header -->
		<div class="entry-content">
			<?php if ( has_post_thumbnail() ) : ?>
				<?php the_post_thumbnail(); ?>
			<?php endif; ?> 
			<?php the_content(); ?>
			<?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __( 'Pages:', 'bgtfw' ), 'after' => '</p></nav>']); ?>
		</div><!-- .entry-content -->
		<footer class="entry-footer">
			<?php boldgrid_entry_footer(); ?>
		</footer><!-- .entry-footer -->
		<?php if ( comments_open() || get_comments_number() ) : ?>
			<?php comments_template( '/templates/comments.php' ); ?>
		<?php endif; ?>
	</article><!-- #post-## -->
<?php endwhile; ?>