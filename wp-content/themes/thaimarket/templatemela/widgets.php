<?php
/**
 * TemplateMela
 * @copyright  Copyright (c) 2010 TemplateMela. (http://www.templatemela.com)
 * @license    http://www.templatemela.com/license/
 */
?>
<?php 
//  Creating Widget 
// Reference : http://codex.wordpress.org/Widgets_API

/**
 * Register widgetized areas, including two sidebars and four widget-ready columns in the footer.
 *
 * To override templatemela_widgets_init() in a child theme, remove the action hook and add your own
 * function tied to the init hook.
 *
 
 * @uses register_sidebar
 */
function templatemela_register_sidebars() {
	register_sidebar( array(
		'name' => __( 'Header Area', 'templatemela' ),
		'id' => 'header-widget',
		'description' => __( 'The primary widget area on header', 'templatemela' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s tab_content">',
		'after_widget' => "</aside>",
		'before_title' => '<div class="top-arrow"> </div> <h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
	
	register_sidebar( array(
		'name' => __( 'Footer Area', 'templatemela' ),
		'id' => 'footer-widget',
		'description' => __( 'The footer widget area', 'templatemela' ),
		'before_widget' => '<aside id="%1$s" class="widget footer-widget %2$s">',
		'after_widget' => "</aside>",
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );		
	
	register_sidebar( array(
		'name' => __( 'First Footer Widget Area', 'templatemela' ),
		'id' => 'first-footer-widget-area',
		'description' => __( 'The first footer widget area', 'templatemela' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => "</aside>",
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
	
	register_sidebar( array(
		'name' => __( 'Second Footer Widget Area', 'templatemela' ),
		'id' => 'second-footer-widget-area',
		'description' => __( 'The second footer widget area', 'templatemela' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => "</aside>",
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
	
	register_sidebar( array(
		'name' => __( 'Third Footer Widget Area', 'templatemela' ),
		'id' => 'third-footer-widget-area',
		'description' => __( 'The third footer widget area', 'templatemela' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => "</aside>",
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
	
	register_sidebar( array(
		'name' => __( 'Fourth Footer Widget Area', 'templatemela' ),
		'id' => 'forth-footer-widget-area',
		'description' => __( 'The forth footer widget area', 'templatemela' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => "</aside>",
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
	
	register_sidebar( array(
		'name' => __( 'Header Search Widget Area', 'templatemela' ),
		'id' => 'header-search',
		'description' => __( 'The header search widget area', 'templatemela' ),
		'before_widget' => '',
		'after_widget' => " ",
		'before_title' => ' ',
		'after_title' => ' ',
	) );
	register_sidebar( array(
		'name' => __( 'Home Banner Widget Area', 'templatemela' ),
		'id' => 'home-banner',
		'description' => __( 'The Home Banner widget area', 'templatemela' ),
		'before_widget' => '',
		'after_widget' => " ",
		'before_title' => ' ',
		'after_title' => ' ',
	) );
	register_sidebar( array(
		'name' => __( 'Home Brand Logo Widget Area', 'templatemela' ),
		'id' => 'home-brand-banner',
		'description' => __( 'The Home Brand Logo widget area', 'templatemela' ),
		'before_widget' => '',
		'after_widget' => " ",
		'before_title' => ' ',
		'after_title' => ' ',
	) );
}
/**
 * Register sidebars by running templatemela_widgets_init() on the widgets_init hook. 
 */
add_action( 'widgets_init', 'templatemela_register_sidebars' );
include_once(TEMPLATEPATH . '/templatemela/widgets/tm-follow-us.php');
include_once(TEMPLATEPATH . '/templatemela/widgets/tm-footer-contactus.php');
include_once(TEMPLATEPATH . '/templatemela/widgets/tm-static-links.php');
?>