<?php
/**
 * Template Name: Support Template
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
                    $reason = $_POST['reason'] . "<br>";


                    $response = wp_remote_post( $url, array(
                            'method' => 'POST',
                            'timeout' => 45,
                            'redirection' => 5,
                            'httpversion' => '1.0',
                            'blocking' => true,
                            'headers' => array(),
                            'body' => array(
                                'body' => "My email: $email Reason: $reason Text: $body",
                                'from' => 'walt@edgesolutionsllc.net',
                                'to' => "support@edgesolutionsllc.net",
                                'subject' => "$first_name $last_name",
//                                    'send_copy_to_customer' => true
                            ),
                            'cookies' => array()
                        )
                    );
                };
                ?>
                <div class="col-md-5 resume_form">
                        <form action="" method="post" id="support_form">
                            <div class="form-group">
                                <div class="selectContainer">
                                    <div class="input-group">
                                        <select name="reason" class="form-control selectpicker wpcf7-select">
                                            <option value=" " >Reason for contacting support</option>
                                            <option value="Report an issue">Report an issue</option>
                                            <option value="Ask a question">Ask a question</option>
                                            <option value="Pay my bill">Pay my bill</option>
                                            <option value="Add Services">Add Services</option>
                                            <option value="Add equipment">Add equipment</option>
                                            <option value="Schedule a service call">Schedule a service call</option>
                                            <option value="Refer a client">Refer a client</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="inputGroupContainer">
                                    <div class="input-group">
                                        <input name="first_name" placeholder="Your Name" class="wpcf7-form-control form-control" type="text">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="inputGroupContainer">
                                    <div class="input-group">
                                        <input name="last_name" placeholder="Your last Name" class="wpcf7-form-control form-control" type="text">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="inputGroupContainer">
                                    <div class="input-group">
                                        <input name="email" placeholder="Your email address" class="wpcf7-form-control form-control" type="text">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="inputGroupContainer">
                                    <div class="input-group">
                                        <textarea rows="5" cols="30" name="message"  class="form-control" placeholder="The problem..."></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="submit_wrap">
                                <input type="submit" name="submit" value="Submit">
                            </div>
                            <div class="clearfix"></div>
                            <div class="message_box" style="display: none;">
                                Your ticket has been sent.
                            </div>
                        </form>
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