<?php
/**
 * Displays the header content
 *
 * @package Theme Freesia
 * @subpackage Edge
 * @since Edge 1.0
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<?php
$edge_settings = edge_get_theme_options(); ?>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
<!-- Masthead ============================================= -->
<header id="masthead" class="site-header">
    <div class="top-header">
    <div class="container-fluid">
        <div class="row">
                <div class="col-xl-3 col-md-3">
                    <?php
                        if( is_active_sidebar( 'edge_header_info' )) {
                            dynamic_sidebar( 'edge_header_info' );
                        }
                        if($edge_settings['edge_top_social_icons'] == 0):
                            echo '<div class="header-social-block">';
                                do_action('social_links');
                            echo '</div>'.'<!-- end .header-social-block -->';
                        endif;
                         do_action('edge_site_branding'); ?>
                </div>
                <div class="col-xl-6 offset-xl-1 col-md-6 offset-md-1">
                    <div id="sticky_header">
						<!-- Main Nav ============================================= -->
						<?php
							if (has_nav_menu('primary')) { ?>
						<?php $args = array(
							'theme_location' => 'primary',
							'container'      => '',
							'items_wrap'     => '<ul id="primary-menu" class="menu nav-menu">%3$s</ul>',
							); ?>
						<nav id="site-navigation" class="main-navigation clearfix">
							<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
								<span class="line-one"></span>
					  			<span class="line-two"></span>
					  			<span class="line-three"></span>
						  	</button>
					  		<!-- end .menu-toggle -->
							<?php wp_nav_menu($args);//extract the content from apperance-> nav menu ?>
						</nav> <!-- end #site-navigation -->
						<?php } else {// extract the content from page menu only ?>
						<nav id="site-navigation" class="main-navigation clearfix">
							<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
								<span class="line-one"></span>
					  			<span class="line-two"></span>
					  			<span class="line-three"></span>
						  	</button>
					  	<!-- end .menu-toggle -->
							<?php	wp_page_menu(array('menu_class' => 'menu', 'items_wrap'     => '<ul id="primary-menu" class="menu nav-menu">%3$s</ul>')); ?>
						</nav> <!-- end #site-navigation -->
						<?php }
						$search_form = $edge_settings['edge_search_custom_header'];
						if (1 != $search_form) { ?>
							<div id="search-toggle" class="header-search"></div>
							<div id="search-box" class="clearfix">
								<?php get_search_form();?>
							</div>  <!-- end #search-box -->
						<?php }
			echo '
			</div> <!-- end #sticky_header -->';
		$enable_slider = $edge_settings['edge_enable_slider'];
		edge_slider_value();
		if ($enable_slider=='frontpage'|| $enable_slider=='enitresite'){
			if(is_front_page() && ($enable_slider=='frontpage') ) {
				if($edge_settings['edge_slider_type'] == 'default_slider') {
						edge_page_sliders();
				}else{
					if(class_exists('Edge_Plus_Features')):
						edge_image_sliders();
					endif;
				}
			}
			if($enable_slider=='enitresite'){
				if($edge_settings['edge_slider_type'] == 'default_slider') {
						edge_page_sliders();
				}else{
					if(class_exists('Edge_Plus_Features')):
						edge_image_sliders();
					endif;
				}
			}
		} ?>
            </div>
        </div>
        </div>
        <div class="phone-number">
            Call us at 888-918-EtDGE (3343)
        </div>
    </div>
        <div class="container-fluid">
            <div class="row page_header_wrap">
                <div class="col-md-7 page-header">
                    <div class="page-title"><?php the_field('page_title'); ?></div>
                </div>
                <div class="col-md-5 page-desc"><?php the_field('page_description'); ?></div>
            </div>
        </div>
    <div class="price_circle_wrap">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="circle green">
                        <span>Starter</span>
                        <span>149<sup>$</sup></span>
                        <span>See the details</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
		<?php if ( function_exists( 'the_custom_header_markup' ) ) {
			if ( is_header_video_active() && ( has_header_video() || is_customize_preview() ) ) {
				echo '<div class="custom-header">
					<div class="custom-header-media">';
				the_custom_header_markup();
				echo '</div>
				</div>';
			}else{ 
				if ( has_header_image() ) {?>
					<a href="<?php echo esc_url(home_url('/'));?>"><img src="<?php header_image(); ?>" class="header-image" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="<?php echo esc_attr(get_bloginfo('name', 'display'));?>" /> </a>
				<?php }
			}
		} else { ?>
		<a href="<?php echo esc_url(home_url('/'));?>"><img src="<?php header_image(); ?>" class="header-image" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="<?php echo esc_attr(get_bloginfo('name', 'display'));?>" /> </a>
		<?php } ?>
</header> <!-- end #masthead -->
<!-- Main Page Start ============================================= -->
<div id="content">
<div class="container-fluid">
<!--    <div class="row page_header_wrap">-->
<!--        <div class="col-md-7 page-header">-->
<!--            <div class="page-title">--><?php //the_field('page_title'); ?><!--</div>-->
<!--        </div>-->
<!--        <div class="col-md-5 page-desc">--><?php //the_field('page_description'); ?><!--</div>-->
<!--    </div>-->
</div>