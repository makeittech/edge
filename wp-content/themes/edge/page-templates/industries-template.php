<?php
/**
 * Template Name: Industries Template
 *
 * @package Edge
 * @since Edge 1.0
 */
get_header(); ?>

    <div id="primary">
        <div class="content_block">
            <div class="container-fluid">
                <div class="row">
                    <div class="info_block">
                        <?php
                        // Start the loop.
                        while (have_posts()) : the_post();

                            the_content();

                            // End the loop.
                        endwhile;
                        ?>
                    </div>
                </div>
            </div>
        </div>
    <section class="indus_info">
                <?php

                // check if the repeater field has rows of data
                if( have_rows('industries_blocks') ):

                    // loop through the rows of data
                    while ( have_rows('industries_blocks') ) : the_row(); ?>
                        <div class="block-wrap <?php the_sub_field('class'); ?>">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="block">
                                        <div class="info_block">
                                            <div class="img_box">
                                                <img src="<?php the_sub_field('image'); ?>" alt="">
                                            </div>
                                            <div class="title_block">
                                                <?php the_sub_field('title'); ?>
                                            </div>
                                            <div class="text">
                                                <?php the_sub_field('text'); ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    <?php   endwhile;

                else :

                    // no rows found

                endif;

                ?>

    </section>
    <section class="solutions">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="title_block"><?php the_field('title_block_about'); ?></div>
                    <div class="text">
                        <?php the_field('text_block_about'); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    </div>

<?php
get_footer();