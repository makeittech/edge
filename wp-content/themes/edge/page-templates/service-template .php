<?php
/**
 * Template Name: Service Template
 *
 * @package Edge
 * @since Edge 1.0
 */
get_header(); ?>

    <div id="primary">
        <section class="serv_info_block">
            <div class="container-fluid">
                <div class="row">
                    <?php

                    // check if the repeater field has rows of data
                    if( have_rows('service_info') ):

                        // loop through the rows of data
                        while ( have_rows('service_info') ) : the_row(); ?>

                            <div class="col-md-10">
                                <div class="info_block">
                                    <div class="info_block_wrap">
                                        <div class="title_block"><?php the_sub_field('service_info_title'); ?></div>
                                        <div class="text">
                                            <?php the_sub_field('service_info_text'); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        <?php endwhile;

                    endif;

                    ?>
                </div>
            </div>
        </section>

    <section class="service_list_info">
        <?php

        // check if the repeater field has rows of data
        if( have_rows('informations_blocks') ):

            // loop through the rows of data
            while ( have_rows('informations_blocks') ) : the_row(); ?>
                <div class="block-wrap <?php the_sub_field('class'); ?>">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="block">
                                <div class="info_block">
                                    <div class="title_block">
                                        <?php the_sub_field('title'); ?>
                                    </div>
                                    <div class="text">
                                        <div class="left_block">
                                            <?php the_sub_field('left_block'); ?>
                                        </div>
                                        <div class="right_block">
                                            <?php the_sub_field('right_block'); ?>
                                        </div>
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