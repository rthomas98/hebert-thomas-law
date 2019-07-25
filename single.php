<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Hebert-Thomas_Law
 */

get_header();
?>

<?php get_template_part('partials/nav'); ?>

<div class="sub-header insight-header mb-5">
      <div class="banner-tint animated fadeInLeft"></div>
      <div class="container h-100">
        <div class="row h-100">
          <div class="col-lg-12 d-flex justify-content-center text-center">
            <div class="my-auto">
                <p class="lead animated fadeInDown">Exceptional Legal Advice for  Businesses, Professionals, & Creative People</p>
                <h1 class="animated fadeInUp"><?php the_title(); ?></h1>
            </div>
          </div>
        </div>
      </div>
  </div>

<div class="container mb-5">
	<div class="row">
		<div class="col-lg-12">

		<?php
		while ( have_posts() ) : the_post();

			get_template_part( 'template-parts/content', get_post_format() );


		endwhile; // End of the loop.
		?>
			
		</div>
	</div>
</div><!-- #primary -->

<?php get_template_part('partials/recent-posts'); ?>

<?php get_template_part('partials/footer'); ?>

<?php
get_footer();
