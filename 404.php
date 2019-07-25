<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Hebert-Thomas_Law
 */

get_header();
?>

<div class="error-page">
	<div class="container h-100">
		<div class="row h-100">
			<div class="col-lg-12 d-flex justify-content-center">
				<div class="my-auto text-center">
					<h1>404</h1>
					<h2 class="mb-5">The page you were looking for doesn't exit.</h2>
					<p>
						<a class="btn btn-pink btn-lg" href="<?php echo site_url('/'); ?>">Back To The Home</a>
					</p>
				</div>
			</div>
		</div>
	</div>
</div>

<?php
get_footer();
