<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other 'pages' on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage TemplateMela
 * @since TemplateMela 1.0
 */

get_header();
?>

<div id="main-content" class="main-content <?php echo esc_attr(tm_sidebar_position()); ?> <?php echo esc_attr(tm_page_layout()); ?>">

  <?php
	if ( is_front_page() && templatemela_has_featured_posts() ) {
		// Include the featured content template.
		get_template_part( 'featured-content' );
	}
	?>
  <div id="primary" class="content-area">
  <?php 
			global $wp_query;
			$id = $wp_query->get_queried_object_id();
			$single_page = is_single();
			if( !empty($id) && isset($id) ) : ?> 
  			<div class="page-title">
   				<div class="page-title-inner">
    				<h1 class="entry-title-main">
     					<?php $page = get_post($id);
     						echo $page->post_title; ?>
    					</h1>
    						<?php templatemela_breadcrumbs(); ?>
  				 </div>
  			</div>
  			<?php endif;?>
    <div id="content" class="site-content" role="main">
      <?php
		// Start the Loop.
		while ( have_posts() ) : the_post();
			// Include the page content template.
			get_template_part( 'content', 'page' ); ?>
      <?php  endwhile;	?>
    </div>
    <!-- #content -->
  </div>
  <!-- #primary -->
  <?php get_sidebar(); ?>
</div>
<!-- #main-content -->
<?php get_footer(); ?>
