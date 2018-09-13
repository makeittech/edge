<?php
/**
 * Template Name: Groove Template
 *
 * @package Edge
 * @since Edge 1.0
 */
get_header(); ?>

    <div id="primary">

    <?php

$args['body'] = array(
    'title' => 'API TEST',
    'status' => 'draft',
    'content' => 'content'
);
$response = wp_remote_post( 'http://admin:123123@edge/wp-json/wp/v2/posts/1', $args );

//    print_r($response);







    ?>

    <section>

        <div class="u-text-center">
            <form id="js-support-form" class="support-form">
                <label>
                    <span class="label-text">Email</span>
                    <input name="email" type="email" placeholder="Your email" required>
                </label>

                <label>
                    <span class="label-text">Name</span>
                    <input name="fullname" type="text"  placeholder="Your name" required>
                </label>

                <label>
                    <span class="label-text">Category</span>
                    <select name="category" required>
                        <option disabled selected value> -- select a category -- </option>
                        <option value="first label">First category</option>
                        <option value="second label">Second category</option>
                        <option value="third label">Third category</option>
                    </select>
                </label>

                <label>
                    <span class="label-text">Message</span>
                    <textarea name="message" placeholder="Your message" required></textarea>
                </label>

                <button class="submit-button">Send feedback</button>
            </form>
        </div>


    </section>



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
                <div class="col-md-5 resume_form">
                    <?php echo do_shortcode( ' [contact-form-7 id="137" title="Support"] ' ); ?>
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
get_footer(); ?>



        <script>
            (function() {var s=document.createElement('script');
                s.type='text/javascript';s.async=true;
                s.src=('https:'==document.location.protocol?'https':'http') +
                    '://edgesolutions.groovehq.com/widgets/abb0413e-1ce3-43e8-afda-cc139f2e160a/ticket.js'; var q = document.getElementsByTagName('script')[0];q.parentNode.insertBefore(s, q);})();
        </script>

<!--        <script>-->
<!--            Groove.createTicket(-->
<!--                {-->
<!--                    email: 'jake@spreadtruth.com',-->
<!--                    name: 'Jake Bennett',-->
<!--                    about: 'phone: 9895984357',-->
<!--                    message: 'Hey there, this is a test message',-->
<!---->
<!--                    //only included because I kept getting an error about the title needing to be set-->
<!--                    title: 'random title in here'-->
<!--                },-->
<!---->
<!--                //callback function-->
<!--                function(data) {console.dir(data);}-->
<!--            );-->
<!--        </script>-->
