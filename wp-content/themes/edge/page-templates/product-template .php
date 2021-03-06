<?php
/**
 * Template Name: Product Template
 *
 * @package Edge
 * @since Edge 1.0
 */
get_header(); ?>

    <div id="primary">
    <section class="product_benefits">
        <div class="container-fluid">
            <div class="row">
                <?php

                // check if the repeater field has rows of data
                if( have_rows('service_info') ):

                    // loop through the rows of data
                    while ( have_rows('service_info') ) : the_row(); ?>

                        <div class="col-xl-6 col-lg-10 col-md-10">
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
    <section class="products_wrap">
        <div class="container-fluid">
            <div class="row">
                <?php

                // check if the repeater field has rows of data
                if( have_rows('product') ):
                    $count = 0;
                    // loop through the rows of data
                    while ( have_rows('product') ) : the_row();
                    $count++;
                ?>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 product">
                    <div class="img_box">
                        <img src="<?php the_sub_field('icon'); ?>" alt="">
                    </div>
                    <div class="title_box">
                        <?php the_sub_field('title'); ?>
                        <span>Info</span>
                    </div>
                    <div class="prod_info">
                        <div class="wrap">
                            <div class="title">
                                <?php the_sub_field('pop_up_title'); ?>
                            </div>
                            <div class="text">
                                <?php the_sub_field('pop_up_text'); ?>
                            </div>
                        </div>
                    </div>
                </div>

                    <?php endwhile;

                endif;
//                echo (12%8);
                ?>

                <?php
                if (12%$count == 3) :
                    ?>
                <div class="col-xl-7 col-lg-12 offset-lg-0 col-md-10 offset-1 product_desc">
                <?php else : ?>
                    <div class="col-md-3">
                        <?php endif; ?>
                    <?php the_field('desc_block_prod'); ?>
                </div>

            </div>
        </div>
    </section>
    <section class="serv_info_block">
        <div class="container-fluid">
            <div class="row">
                <?php

                // check if the repeater field has rows of data
                if( have_rows('product_info') ):

                    // loop through the rows of data
                    while ( have_rows('product_info') ) : the_row(); ?>

                        <div class="col-lg-6 col-md-12 nth">
                            <div class="info_block">
                                <div class="info_block_wrap">
                                    <div class="title_block"><?php the_sub_field('product_info_title'); ?></div>
                                    <div class="text">
                                        <?php the_sub_field('product_info_text'); ?>
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