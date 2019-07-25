<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Altair_Global
 */

?>



<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
			
			
			<?php
			if ( is_single() ) {
			} else {
			}

		if ( 'post' === get_post_type() ) : ?>
			
		</div><!-- end col 12 -->

		
		</div><!-- end row -->
		
		
		<?php
		endif; ?>
	</div><!-- .entry-header -->
	

	<div class="mb">
		
		<?php
			the_content( sprintf(
				/* translators: %s: Name of current post. */
				wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'altairglobal' ), array( 'span' => array( 'class' => array() ) ) ),
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
			) );

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'altairglobal' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
	
</article><!-- #post-## -->
