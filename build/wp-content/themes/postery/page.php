<?php

/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package postery
 */

get_header('normal');
?>

<main id="primary" class="site-main">
	<div class="container">
		<?php
		while (have_posts()) :
			the_post();

			get_template_part('template-parts/content', 'page');

			// If comments are open or we have at least one comment, load up the comment template.
			if (comments_open() || get_comments_number()) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>
	</div>
</main><!-- #main -->
<!-- SHAPE
    ================================================== -->
<div class="position-relative" style="z-index: 1;">
	<div class="shape shape-bottom shape-fluid-x svg-shim text-light">
		<svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
			<path d="M0 48h2880V0h-720C1442.5 52 720 0 720 0H0v48z" fill="currentColor" />
		</svg>
	</div>
</div>

<?php
//get_sidebar();
get_footer();
