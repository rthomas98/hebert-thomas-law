<?php
/*
  Template Name: Trademark and Copyright Law Template
 */

get_header(); ?>

<?php get_template_part('partials/nav'); ?>


<?php
while (have_posts()) : the_post();

    get_template_part('template-parts/content', 'trademark-and-copyright-law');

endwhile; // End of the loop.
?>

<?php get_template_part('partials/footer'); ?>


<?php
get_footer();