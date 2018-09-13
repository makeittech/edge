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
        <section class="home_first_block">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <div class="info_block">
                            <div class="info_block_wrap">
                                <div class="title_block"><?php the_field('title_block1'); ?></div>
                                <div class="text">
                                    <?php the_field('text_block1'); ?>
                                </div>
                            </div>
                            <div class="phone-number">
                                Call us at <a href="tel:+18889183343">+188-89-18 (3343)</a>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="col-md-5 phone_circle_wrap">
                        <div class="phone_circle">
<!--                            <img src="--><?php //bloginfo('template_url'); ?><!--/images/phone_circle.png" alt="">-->
                            <div class="right_block phone_info">
                                <div class="close_btn">x</div>
                                <div class="title"><?php the_field('title_block1_phone'); ?></div>
                                <div class="text">
                                    <?php the_field('text_block1_phone'); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="services_block">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 title_block"><?php the_field('title_block_serv'); ?></div>
                    <div class="col-md-12 desc_block"><?php the_field('desc_block_serv'); ?></div>
                </div>
                <div class="row services_wrap">
                    <?php

                    // check if the repeater field has rows of data
                    if( have_rows('service') ):

                        // loop through the rows of data
                        while ( have_rows('service') ) : the_row(); ?>
                            <div class="service">
                                <div class="icon-box">
                                    <img src="<?php the_sub_field('icon'); ?>" alt="">
                                </div>
                                <div class="border_box"></div>
                                <div class="title"><?php the_sub_field('title'); ?></div>
                                <div class="text"><?php the_sub_field('text'); ?></div>
                            </div>
                        <?php endwhile;

                    endif;

                    ?>
                </div>

            </div>
    </div>
    </section>
    <section class="voip">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-5 col-md-12 img_box">
                    <img src="<?php the_field('image_voip'); ?>" alt="">
                </div>
                <div class="col-lg-7 col-md-12">
                    <div class="info_block">
                        <div class="info_block_wrap">
                            <div class="title_block"><?php the_field('title_block_voip'); ?></div>
                            <div class="text">
                                <?php the_field('text_block_voip'); ?>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="data_cabling">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-12 info_block_order">
                    <div class="info_block">
                        <div class="info_block_wrap">
                            <div class="title_block"><?php the_field('title_block_cabling'); ?></div>
                            <div class="text">
                                <?php the_field('text_block_cabling'); ?>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 img_box">
                    <img src="<?php the_field('image_cabling'); ?>" alt="">
                </div>
            </div>
        </div>
    </section>
    <section class="cameras">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 col-md-12 img_box">
                    <img src="<?php the_field('image_cameras'); ?>">
                </div>
                <div class="col-lg-7 offset-lg-1 col-md-12">
                    <div class="info_block">
                        <div class="info_block_wrap">
                            <div class="title_block"><?php the_field('title_block_cameras'); ?></div>
                            <div class="text">
                                <?php the_field('text_block_cameras'); ?>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="nec">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <div class="info_block">
                        <div class="info_block_wrap">
                            <div class="title_block"><?php the_field('title_block_nec'); ?></div>
                            <div class="text">
                                <?php the_field('text_block_nec'); ?>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 img_box">
                    <img src="<?php the_field('image_nec'); ?>" alt="">
                </div>
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


<?php
get_footer();