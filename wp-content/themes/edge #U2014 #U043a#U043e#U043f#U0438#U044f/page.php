<?php
/**
 * The template for displaying all pages.
 *
 * @package Theme Freesia
 * @subpackage Edge
 * @since Edge 1.0
 */

get_header(); ?>

<div id="primary">
	<main id="main">
        <?php
        // Start the loop.
        while ( have_posts() ) : the_post();

            the_content();

            // End the loop.
        endwhile;
        ?>
	</main> <!-- #main -->
	<?php

get_sidebar();
get_footer();