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
                <div class="col-lg-7 col-md-12">
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
                <div class="col-lg-5 col-md-12 img_box">
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
    <section class="home_contacts">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-6 col-lg-12 col-md-12">
                    <div class="block left_block">
                        <div class="icon_block">
                            <div class="icon">
                                <img src="<?php bloginfo('template_url'); ?>/images/chat_icon.png" alt="">
                            </div>
                            <div class="text">Contact</div>
                        </div>
                        <div class="text_block">
                            <div class="title_block">Call for immediate support</div>
                            <div class="text">
                                <p>You can also visit our support area to ask a question or submit a support ticket.</p>
                            </div>
                            <div class="phone-number">
                                Call us at 888-918-EtDGE (3343)
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-12 col-md-12">
                    <div class="block right_block">
                        <div class="text_block">
                            <div class="title_block">Let’s set up a consultation…</div>
                            <div class="text">
                                <p>You can also visit our support area to ask a question or submit a support ticket.</p>
                            </div>
                            <form class="form-inline" action="">
                                <input type="text" class="form-control" placeholder="Your Name">
                                <input type="email" class="form-control" placeholder="Your Email Address">
                                <input type="submit" class="wpcf7-form-control wpcf7-submit">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php
get_footer();