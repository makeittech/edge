<?php
/**
 * The template for displaying the footer.
 *
 * @package Theme Freesia
 * @subpackage Edge
 * @since Edge 1.0
 */
$edge_settings = edge_get_theme_options();
if($edge_settings['edge_blog_layout'] == 'photography_layout' && !is_page() && !is_single()){
	if(class_exists('WooCommerce') && is_shop()): ?>
		</div> <!-- end .container -->
	<?php else: ?>
	</div> <!-- end #main -->
	<?php
	endif;
}else{?>
</div> <!-- end .container -->
<?php
} ?>

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
                            Call us at <a href="tel:+18889183343">+188-89-18 (3343)</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-12 col-md-12">
                <div class="block right_block">
                    <div class="text_block">
                        <div class="title_block">Let’s set up a consultation…</div>
                        <div class="text">
                            <p>Leave your contact information, and we’ll get back in touch as soon as possible.</p>
                        </div>

                        <?php echo do_shortcode( ' [contact-form-7 id="100" title="Contact footer"] ' ); ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

</div> <!-- end #content -->
<!-- Footer Start ============================================= -->


<footer id="colophon" class="site-footer clearfix">
<?php
$footer_column = $edge_settings['edge_footer_column_section'];
	if( is_active_sidebar( 'edge_footer_1' ) || is_active_sidebar( 'edge_footer_2' ) || is_active_sidebar( 'edge_footer_3' ) || is_active_sidebar( 'edge_footer_4' )) { ?>
	<div class="widget-wrap">
		<div class="container-fluid">
			<div class="row widget-area">
			<?php
                $date = date("Y");
				if($footer_column == '1' || $footer_column == '2' ||  $footer_column == '3' || $footer_column == '4'){
				echo '<div class="col-xl-3 col-lg-3 col-md-4 soc_block">';
					if ( is_active_sidebar( 'edge_footer_1' ) ) :
						dynamic_sidebar( 'edge_footer_1' );
					endif;
				echo '</div><!-- end .column'.$footer_column. '  -->';
				}
				if($footer_column == '2' ||  $footer_column == '3' || $footer_column == '4'){
				echo '<div class="col-xl-6 col-lg-6 col-md-8">';
					if ( is_active_sidebar( 'edge_footer_2' ) ) :
						dynamic_sidebar( 'edge_footer_2' );
					endif;
				echo '</div><!--end .column'.$footer_column.'  -->';
				}
				if($footer_column == '3' || $footer_column == '4'){
				echo '<div class="col-xl-3 col-lg-3 col-md-12 contacs">';
					if ( is_active_sidebar( 'edge_footer_3' ) ) :
						dynamic_sidebar( 'edge_footer_3' );
					endif;
				echo '<span class="copyright">©' .$date. '  Edge Solutions. All Rights Reserved.</span><!--end .column'.$footer_column.'  -->';
				}
				?>
                <?php
            ?>
			</div> <!-- end .widget-area -->
		</div> <!-- end .container -->
	</div> <!-- end .widget-wrap -->
	<?php } ?>
<div class="site-info" <?php if($edge_settings['edge-img-upload-footer-image'] !=''){?>style="background-image:url('<?php echo esc_url($edge_settings['edge-img-upload-footer-image']); ?>');" <?php } ?>>
	<div class="container">

		</div> <!-- end .container -->
	</div> <!-- end .site-info -->
	<?php
		$disable_scroll = $edge_settings['edge_scroll'];
		if($disable_scroll == 0):?>
	<div class="go-to-top"><a title="<?php esc_html_e('Go to Top','edge');?>" href="#masthead"><i class="fa fa-angle-double-up"></i></a></div> <!-- end .go-to-top -->
	<?php endif; ?>
</footer> <!-- end #colophon -->
</div> <!-- end #page -->
<?php wp_footer(); ?>

<script>

    if( jQuery(window).width() > 768 )
    {
        // Btn efect
        // jQuery( document ).ready(function() {
        //     setInterval(function () {
        //         jQuery(".phone_circle").effect("pulsate", "slow");
        //     }, 3000);
        // });

        jQuery(".product").hover(function(){
            jQuery(this).find('.prod_info').toggle();
        }, function() {
            jQuery(this).find('.prod_info').toggle();
        });

        jQuery(".phone_circle").hover(function(){
            jQuery(this).find('.phone_info').toggle();
            jQuery(this).css();

        }, function() {
            jQuery(this).find('.phone_info').toggle();
        });
    } else {
        jQuery(".product").click(function(){
            jQuery(".prod_info").hide();
            jQuery(this).find('.prod_info').toggle();
        }, function() {
            jQuery(".prod_info").hide();
            jQuery(this).find('.prod_info').toggle();
        });

        jQuery(".phone_circle").click(function(){
            jQuery(".phone_info").hide();
            jQuery(this).find('.phone_info').toggle();
        }, function() {
            jQuery(".phone_info").hide();
            jQuery(this).find('.phone_info').toggle();
        });
    }
    jQuery(".phone_circle .close_btn").click(function(e) {
        e.stopImmediatePropagation();
        jQuery(this).closest(".phone_info").hide('style');
    });


    jQuery(function($){
        $(document).mouseup(function (e){
            var block = $(".phone_info");
            if (!block.is(e.target)
                && block.has(e.target).length === 0) {
                block.hide();
            }
        });
    });

</script>


<script>
    (function() {var s=document.createElement('script');
        s.type='text/javascript';s.async=true;
        s.src=('https:'==document.location.protocol?'https':'http') +
            '://3dr2xiq72q8hvcf23hnagnte.groovehq.com/widgets/e008f13c-7766-42db-96c9-2dadb8fd5d19/ticket/api.js'; var q = document.getElementsByTagName('script')[0];q.parentNode.insertBefore(s, q);})();
</script>



<script type="text/javascript">
    jQuery(document).ready(function() {
        jQuery('#contact_form').bootstrapValidator({
            // To use feedback icons, ensure that you use Bootstrap v3.1.0 or later
            feedbackIcons: {
                valid: 'glyphicon glyphicon-ok',
                invalid: 'glyphicon glyphicon-remove',
                validating: 'glyphicon glyphicon-refresh'
            },
            fields: {
                your_name: {
                    validators: {
                        stringLength: {
                            min: 1,
                        },
                        notEmpty: {
                            message: 'No name added'
                        }
                    }
                },
                your_email: {
                    validators: {
                        notEmpty: {
                            message: 'Supply email address'
                        },
                        emailAddress: {
                            message: 'No email added'
                        }
                    }
                },
            }
        })
            .on('success.form.bv', function(e) {
                jQuery('#success_message').slideDown({ opacity: "show" }, "slow") // Do something ...
                jQuery('#contact_form').data('bootstrapValidator').resetForm();

                // Prevent form submission
                e.preventDefault();

                // Get the form instance
                var $form = $(e.target);

                // Get the BootstrapValidator instance
                var bv = $form.data('bootstrapValidator');

                // Use Ajax to submit form data
                $.post($form.attr('action'), $form.serialize(), function(result) {
                    console.log(result);
                }, 'json');
            });
    });

    jQuery(document).ready(function() {
        jQuery('#contact_resume').bootstrapValidator({
            // To use feedback icons, ensure that you use Bootstrap v3.1.0 or later
            feedbackIcons: {
                valid: 'glyphicon glyphicon-ok',
                invalid: 'glyphicon glyphicon-remove',
                validating: 'glyphicon glyphicon-refresh'
            },
            fields: {
                your_name: {
                    validators: {
                        stringLength: {
                            min: 1,
                        },
                        notEmpty: {
                            message: 'No name added'
                        }
                    }
                },
                your_last_name: {
                    validators: {
                        stringLength: {
                            min: 1,
                        },
                        notEmpty: {
                            message: 'No name added'
                        }
                    }
                },
                your_email: {
                    validators: {
                        notEmpty: {
                            message: 'Supply email address'
                        },
                        emailAddress: {
                            message: 'No email added'
                        }
                    }
                },
            }
        })
            .on('success.form.bv', function(e) {
                jQuery('#success_message').slideDown({ opacity: "show" }, "slow") // Do something ...
                jQuery('#contact_resume').data('bootstrapValidator').resetForm();

                // Prevent form submission
                e.preventDefault();

                // Get the form instance
                var $form = $(e.target);

                // Get the BootstrapValidator instance
                var bv = $form.data('bootstrapValidator');

                // Use Ajax to submit form data
                $.post($form.attr('action'), $form.serialize(), function(result) {
                    console.log(result);
                }, 'json');
            });
    });

    jQuery(document).ready(function($) {
        jQuery('#support_form')
        .bootstrapValidator({
            // To use feedback icons, ensure that you use Bootstrap v3.1.0 or later
            feedbackIcons: {
                valid: 'glyphicon glyphicon-ok',
                invalid: 'glyphicon glyphicon-remove',
                validating: 'glyphicon glyphicon-refresh'
            },
            fields: {
                first_name: {
                    validators: {
                        stringLength: {
                            min: 1,
                        },
                        notEmpty: {
                            message: 'No name added'
                        }
                    }
                },
                last_name: {
                    validators: {
                        stringLength: {
                            min: 1,
                        },
                        notEmpty: {
                            message: 'No last name added'
                        }
                    }
                },
                email: {
                    validators: {
                        notEmpty: {
                            message: 'Supply email address'
                        },
                        emailAddress: {
                            message: 'No email added'
                        }
                    }
                },
                reason: {
                    validators: {
                        notEmpty: {
                            message: 'Please select your reason'
                        }
                    }
                },
                message: {
                    validators: {
                        stringLength: {
                            min: 2,
                            max: 200,
                            message:'Please enter at least 2 characters and no more than 200'
                        },
                        notEmpty: {
                            message: 'Please supply a description of your request'
                        }
                    }
                }
            }
        })
        .on('success.form.bv', function (e) {
            $.post(
                ajaxObj.url+'?action=support', 
                jQuery('#support_form').serialize(), 
                function(result) {
                    console.log(result);
                    if (result.success) {
                        // alert('Your ticket creted');
                        jQuery('.message_box').show();
                        jQuery('#support_form')[0].reset()
                    }
            }, 'json');
        })
    });


    jQuery(document).ready(function() {
        jQuery('#contact_page_form').bootstrapValidator({
            // To use feedback icons, ensure that you use Bootstrap v3.1.0 or later
            feedbackIcons: {
                valid: 'glyphicon glyphicon-ok',
                invalid: 'glyphicon glyphicon-remove',
                validating: 'glyphicon glyphicon-refresh'
            },
            fields: {
                your_name: {
                    validators: {
                        stringLength: {
                            min: 1,
                        },
                        notEmpty: {
                            message: 'No name added'
                        }
                    }
                },
                your_email: {
                    validators: {
                        notEmpty: {
                            message: 'Supply email address'
                        },
                        emailAddress: {
                            message: 'No email added'
                        }
                    }
                },
                your_phone: {
                    validators: {
                        integer: {
                            message: 'The number is not an integer'
                        }
                    }
                },
                last_name: {
                    validators: {
                        stringLength: {
                            min: 1,
                        },
                        notEmpty: {
                            message: 'No last name added'
                        }
                    }
                },
            }
        })
            .on('success.form.bv', function(e) {
                jQuery('#success_message').slideDown({ opacity: "show" }, "slow") // Do something ...
                jQuery('#contact_page_form').data('bootstrapValidator').resetForm();

                // Prevent form submission
                e.preventDefault();

                // Get the form instance
                var $form = $(e.target);

                // Get the BootstrapValidator instance
                var bv = $form.data('bootstrapValidator');

                // Use Ajax to submit form data
                $.post($form.attr('action'), $form.serialize(), function(result) {
                    console.log(result);
                }, 'json');
            });
    });

</script>

</body>
</html>