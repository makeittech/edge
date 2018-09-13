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
				echo '</div><!--end .column'.$footer_column.'  -->';
				}
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
        jQuery(".product").hover(function(){
            jQuery(this).find('.prod_info').toggle();
        }, function() {
            jQuery(this).find('.prod_info').toggle();
        });
    } else {
        jQuery(".product").click(function(){
            jQuery(this).find('.prod_info').toggle();
        }, function() {
            jQuery(this).find('.prod_info').toggle();
        });
    }

</script>


<script>
    (function() {var s=document.createElement('script');
        s.type='text/javascript';s.async=true;
        s.src=('https:'==document.location.protocol?'https':'http') +
            '://3dr2xiq72q8hvcf23hnagnte.groovehq.com/widgets/e008f13c-7766-42db-96c9-2dadb8fd5d19/ticket/api.js'; var q = document.getElementsByTagName('script')[0];q.parentNode.insertBefore(s, q);})();
</script>


<script>
    function grooveOnReady() {
        // Contents of this function will be
        // executed when Groove JS API loads
        // (i.e. you can start creating tickets)
        //
        // Make sure to not change its name!

        var form = document.getElementById('js-support-form');
        form.addEventListener('submit', function(event) {
            event.preventDefault();  // stop browser from trying to submit the form

            /**
             * Pull infromation from the from
             */
            var email = form.querySelector('[name=email]').value;
            var name = form.querySelector('[name=fullname]').value;
            var message = form.querySelector('[name=message]').value;

            // ticket will have default label and a user-selected label
            var label = 'custom form,' + form.querySelector('[name=category]').value;

            var subject = 'Ticket created using custom form on ' + new Date().toUTCString();

            // your custom information about user submitting the form
            // will appear in Groove's right sidebar, under customer email/name
            var customerInfo = 'Customer visited our site 3 times.';


            /**
             * Push all collected information into Groove
             */
            Groove.createTicket(
                {
                    email: email,
                    name: name,
                    about: customerInfo,
                    subject: subject,
                    labels: label,
                    message: message
                },
                responseCallbackFn  // optional, can be omitted
            );





            /**
             * Non-essential functionality:
             *  notify user about success, disable button
             *  to prevent accidental duplicates, and log
             *  errors to console if something is wrong
             */
            var button = form.querySelector('.submit-button');
            button.classList.add('loading');

            function responseCallbackFn(response) {
                if (response.status === 200) {
                    var successMessage = document.createElement('div');
                    successMessage.innerText = 'Thank you for your feedback!';
                    successMessage.classList = 'success-message';

                    form.innerHTML = '';
                    form.appendChild(successMessage);
                } else {
                    button.classList.remove('loading');
                    console.error('Something went wrong with creating support ticket:', response);
                }
            }



        });
    }
</script>

</body>
</html>