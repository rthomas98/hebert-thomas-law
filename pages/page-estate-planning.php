<?php
/*
  Template Name: Estate Planning Template
 */

get_header(); ?>

<?php get_template_part('partials/nav'); ?>


<?php
while (have_posts()) : the_post();

    get_template_part('template-parts/content', 'estate-planning');

endwhile; // End of the loop.
?>

<?php get_template_part('partials/footer'); ?>

<script type="text/javascript" src="//downloads.mailchimp.com/js/signup-forms/popup/unique-methods/embed.js" data-dojo-config="usePlainJson: true, isDebug: false"></script><script type="text/javascript">window.dojoRequire(["mojo/signup-forms/Loader"], function(L) { L.start({"baseUrl":"mc.us19.list-manage.com","uuid":"e4b0a3faf160e76a19bcdc3c4","lid":"b2ede287ff","uniqueMethods":true}) })</script>


<?php
get_footer();