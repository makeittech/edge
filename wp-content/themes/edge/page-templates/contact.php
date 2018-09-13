<?php
/**
 * Template Name: Contact Template
 *
 * @package Edge
 * @since Edge 1.0
 */
get_header();



?>

    <div id="primary">
        <section class="support_wrap">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-7">
                        <?php

                        // check if the repeater field has rows of data
                        if( have_rows('support_info') ):

                            // loop through the rows of data
                            while ( have_rows('support_info') ) : the_row(); ?>


                                <div class="info_block">
                                    <div class="info_block_wrap">
                                        <div class="title_block"><?php the_sub_field('support_info_title'); ?></div>
                                        <div class="text">
                                            <?php the_sub_field('support_info_text'); ?>
                                        </div>
                                    </div>
                                </div>

                            <?php endwhile;

                        endif;

                        ?>
                    </div>

                    <?php
                    if(isset($_POST['submit'])){
                        $url = "https://api.groovehq.com/v1/tickets?access_token=995c8715f855f6340bb2cbb75e5487cd66d4f37fbe18cc12d7efe9ca101e2560";
                        $body = $_POST['message'];
                        $email = $_POST['email'] . "<br>";
                        $first_name = $_POST['first_name'];
                        $last_name = $_POST['last_name'];


                        $response = wp_remote_post( $url, array(
                                'method' => 'POST',
                                'timeout' => 45,
                                'redirection' => 5,
                                'httpversion' => '1.0',
                                'blocking' => true,
                                'headers' => array(),
                                'body' => array(
                                    'body' => "My email: $email $body",
                                    'from' => 'walt@edgesolutionsllc.net',
                                    'to' => "vitalikmihaylishin@gmail.com",
                                    'subject' => "$first_name $last_name",
//                                    'send_copy_to_customer' => true
                                ),
                                'cookies' => array()
                            )
                        );
                    };
                    ?>
                    <div class="col-md-5 resume_form">
                        <?php echo do_shortcode( ' [contact-form-7 id="280" title="Contact page"] ' ); ?>
                    </div>
                </div>
            </div>
        </section>
<!--        <section class="solutions">-->
<!--            <div class="container-fluid">-->
<!--                <div class="row">-->
<!--                    <div class="col-md-12">-->
<!--                        <div class="title_block">--><?php //the_field('title_block_about'); ?><!--</div>-->
<!--                        <div class="text">-->
<!--                            --><?php //the_field('text_block_about'); ?>
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </section>-->

    </div>
<?php
get_footer();