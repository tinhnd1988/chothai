<?php
/**
 * The Header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Templatemela
 */
?>
<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8) ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width,user-scalable=no">
<title>
<?php wp_title( '|', true, 'right' ); ?>
</title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
<?php templatemela_header(); ?>
 
	
<!--Display favivon -->
<?php tm_favicon(); ?>
	 
<style>
<?php templatemela_custom_css(); ?>

</style>	
<?php
wp_head();
?> 
</head>
<body <?php body_class(); ?>>
<?php if ( get_option('tmoption_control_panel') == 'yes' ) do_action('tm_show_panel'); ?>
<div id="page" class="hfeed site">
<?php if ( get_header_image() ) : ?>
<div id="site-header"> <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"> <img src="<?php header_image(); ?>" width="<?php echo esc_attr(get_custom_header()->width); ?>" height="<?php echo esc_attr(get_custom_header()->height); ?>" alt=""> </a> </div>
<?php endif; ?>
<!-- Header -->
<?php templatemela_header_before(); ?>
<header id="masthead" class="site-header<?php echo " header".get_option('tmoption_header_layout'); ?> <?php echo esc_attr(tm_sidebar_position()); ?>" role="banner">
  <div class="site-header-main">
    <div class="header-main">
      <div class="header_left">
        <?php if (get_option('tmoption_logo_image') != '') : ?>
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
        <?php tm_get_logo(); ?>
        </a>
        <?php else: ?>
        <h1 class="site-title"> <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
          <?php bloginfo( 'name' ); ?>
          </a> </h1>
        <?php endif; ?>
        <?php if(get_option('tmoption_showsite_description') == 'yes') : ?>
        <h2 class="site-description">
          <?php bloginfo( 'description' ); ?>
        </h2>
        <?php endif; // End tmoption_showsite_description ?>
      </div>
      <?php templatemela_header_inside(); ?>
	  <div class="header_right">
	  		<?php /*templatemela_get_widget('header-cms');*/?>
					<?php if (is_active_sidebar('header-search')) : ?>
							<div class="header-search">
								<?php templatemela_get_widget('header-search');  ?>	
							</div>
						<?php endif; ?>				
			
						
									<?php if ( in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) : ?>
									
									<?php tm_header_cart()?>
															
									<?php endif; ?>	

											
								
      <?php /*?><?php if (get_option('tmoption_show_topbar_social') == 'yes') : ?>
      <div class="topbar-right">
        <?php templatemela_get_topbar_social(); ?>
      </div>
      <?php endif; ?> 
	  </div><?php */?>
	  
    </div>
	<?php /*?><div class="site-top">
				<div class="top_main">
				<?php if (get_option('tmoption_custom_banner') == 'yes') : ?>
				  <div class="topbar-banner">
					<?php templatemela_get_topbar_banner(); ?>
				  </div>
				<?php endif; ?>		
				</div>	
			</div><?php */?>
	
    <!-- End header-main -->
  </div>
  <?php /*?><?php if (get_option('tmoption_show_topbar') == 'yes') : ?>
  <div class="topbar-outer">
    <div class="topbar-main">
     		
    </div>
  </div>
  <?php endif; ?><?php */?>
  
  <!-- End site-main -->
  </div>
</header>
<!-- #masthead -->

<?php templatemela_header_after(); ?>
<?php templatemela_main_before(); ?>
<!-- Center -->
<div class="top_main">
	<div id="navbar" class="header-bottom navbar default">
						<nav id="site-navigation" class="navigation main-navigation" role="navigation">
							<h3 class="menu-toggle"><?php _e( 'Menu', 'templatemela' ); ?></h3>
		  				    <a class="screen-reader-text skip-link" href="#content" title="<?php esc_attr_e( 'Skip to content', 'templatemela' ); ?>"><?php _e( 'Skip to content', 'templatemela' ); ?></a>	
							<div class="mega-menu">
								<?php wp_nav_menu( array( 'theme_location' => 'primary','menu_class' => 'mega' ) ); ?>
							</div>	
													
						</nav><!-- #site-navigation -->
						<div class="header_bottom">
							<div class="header_bottom_inner">
								<div class="header-menu-links">
									<?php 
										// Woo commerce Header Cart
										$tm_header_menu =array(
										'menu' => ' TM Header Shop Links',
										'depth'=> 1,
										'echo' => false,
										'menu_class'      => 'header-menu', 
										'container'       => '', 
										'container_class' => '', 
										'theme_location' => 'header-links'
									);
							echo wp_nav_menu($tm_header_menu);				    
							?>
							</div>
							
								<?php if ( in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) : ?>
										<div class="header_login"><!-- Start header cart -->
											<div class="header_logout">					
												<?php
												$account_text = get_option("tmoption_myaccount_text");
												$login_text = get_option("tmoption_register_text");
												$logout_text = get_option("tmoption_logout_text");
												
												if ( is_user_logged_in() ) {
													$myaccount_page_id = get_option( 'woocommerce_myaccount_page_id' ); 
													if ( $myaccount_page_id ) { 
													$logout_url = wp_logout_url( get_permalink( $myaccount_page_id ) ); 
													if ( get_option( 'woocommerce_force_ssl_checkout' ) == 'yes' )
													$logout_url = str_replace( 'http:', 'https:', $logout_url );
												} ?>
												<a href="<?php echo esc_url(get_permalink( get_option('woocommerce_myaccount_page_id') ) ); ?>" class="account"><i class="fa fa-user"></i>
												<?php echo _e('MyAccount','templatemela'); ?> &nbsp;/ </a>
												<a href="<?php echo esc_url($logout_url); ?>" class="logout" ><i class="fa fa-power-off"></i><?php echo _e('Logout','templatemela'); ?></a> <?php }
												else { ?>
												<a href="<?php echo esc_url(get_permalink( get_option('woocommerce_myaccount_page_id') ) ); ?>" class="login show-login-link" id="show-login-link" ><i class="fa fa-unlock-alt"></i><?php echo _e('Login/Register','templatemela'); ?></a>
												<?php } ?>  
											</div>
										</div>
	  	<?php endif; ?>
							</div>
						</div>
					</div><!-- End header-bottom #navbar -->	
	
	<!-- Start main slider -->
	
</div>	
<div id="main" class="site-main <?php if (get_option('tmoption_show_topbar') == 'yes') echo "extra"; ?>">
<div class="main_inner">
	<div class="main-inner-sub">
<?php if ( is_page_template('page-templates/home.php') ) : ?>
	<div class="top-area-inner">
	
				<?php include_once(get_template_directory() . '/slider.php'); ?>
			
		<!-- End main slider -->
		<div class="home-subbanner">
			<?php if ( is_page_template('page-templates/home.php') ) : ?>
				<?php templatemela_get_widget('home-banner'); ?>
			<?php endif; ?>	

		</div>
	</div>
	<?php endif; ?>
<?php 
	$tm_page_layout = tm_page_layout(); 
	if( isset( $tm_page_layout) && !empty( $tm_page_layout ) ):
	$tm_page_layout = $tm_page_layout; 
	else:
	$tm_page_layout = '';
	endif;
	if ( in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) :
	if(is_shop() || is_product_category() || is_product_tag())
		$tm_page_layout = 'wide-page';
	endif;
	if ( is_page_template('page-templates/home.php') || $tm_page_layout == 'wide-page' ) : ?>
		<div class="main-content-inner-full">
			
	<?php else: ?>
		<div class="main-content-inner">
		
		<?php endif; ?>
<?php templatemela_content_before(); ?>