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

    <link href="https://api.groovehq.com/v1/me?access_token=995c8715f855f6340bb2cbb75e5487cd66d4f37fbe18cc12d7efe9ca101e2560" />

</head>
<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
<!-- Masthead ============================================= -->
    <div class="header_wrap">
<header id="masthead" class="site-header">
    <div class="top-header">
    <div class="container-fluid">
        <div class="row">
                <div class="col-xl-3 col-lg-2 col-md-3">
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
                <div class="col-xl-7 col-lg-7 col-md-9 offset-md-0">
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
            Call us at <a href="tel:+18889183343">+188-89-18 (3343)</a>
        </div>
    </div>
    <div class="price_circle_wrap">
        <div class="container-fluid">
            <div class="row">
                <?php
                $count = 0;
                // check if the repeater field has rows of data
                if( have_rows('circle') ):
                    
                    // loop through the rows of data
                    while ( have_rows('circle') ) : the_row();
                        $count++;
                    endwhile; 
                endif;

                        if ($count > 1): ?>
                <div class="col-xl-7 offset-xl-5 col-lg-8 offset-lg-4 col-md-9 offset-md-3 offset-sm-0 offset-xs-0">
                    <?php else : ?>
                <div class="col-md-5 offset-md-7 offset-sm-0 offset-xs-0">
                    <?php endif; ?>
                    <div class="circle_row">
                    <?php

                    // check if the repeater field has rows of data
                    if( have_rows('circle') ):
                        $count = 0;
                        // loop through the rows of data
                        while ( have_rows('circle') ) : the_row();
                        $count++;
                        ?>
                            <div class="circle" style="background-image: url(<?php the_sub_field('img'); ?>)">
                                <span><?php the_sub_field('title'); ?></span>
                                <span><sup>$</sup><?php the_sub_field('price'); ?></span>
                                <span><?php the_sub_field('text'); ?></span>
                            </div>
                        <?php endwhile; endif; ?>
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
    <div class="header_bottom">
        <div class="container-fluid">
            <div class="row page_header_wrap">
                <div class="col-md-7">
                    <div class="page-header">
                        <div class="page-title"><?php the_field('page_title'); ?></div>
                    </div>
                </div>
                <div class="col-md-5 page-desc"><?php the_field('page_description'); ?></div>
            </div>
        </div>
    </div>
</div>
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