<?php
/**
 * Template Name: Careers Template
 *
 * @package Edge
 * @since Edge 1.0
 */
get_header(); ?>

    <div id="primary">
    <section class="resume_wrap">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-7">
                    <div class="info_block">
                        <div class="info_block_wrap">
                            <div class="title_block"><?php the_field('resume_info_title'); ?></div>
                            <div class="text">
                                <?php the_field('resume_info_text'); ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 resume_form">
                    <?php echo do_shortcode( ' [contact-form-7 id="129" title="Contact resume"] ' ); ?>
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
    </div>
<?php
get_footer();