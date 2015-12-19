<?php
/**
 * The template for displaying posts in the Video post format
 *
 * @package WordPress
 * @subpackage TemplateMela
 * @since TemplateMela 1.0
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  
  <?php /*?><div class="entry-main-content">
	<div class="entry-main-header"><?php */?>
			<header class="entry-header">
				<?php 		
					if ( is_single() ) :
						the_title( '<h1 class="entry-title">', '</h1>' );
					else :
						the_title( '<h1 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h1>' );
					endif;
				?>
				 <div class="entry-meta-inner"> 
	 
		  </header>
      <!-- .entry-header -->
<?php /*?></div>
  <!-- .entry-main-content -->
	 </div>
<?php */?>	 
	  <div class="entry-video">
        <?php
					the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'templatemela' ) );
					wp_link_pages( array(
						'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'templatemela' ) . '</span>',
						'after'       => '</div>',
						'link_before' => '<span>',
						'link_after'  => '</span>',
					) );
				?>
		</div>		
	 <div class="entry-content-other">
    	      <!-- .entry-content -->
		 <div class="entry-content-date">
		  <?php tm_post_entry_date(); ?>
		  <?php edit_post_link( __( 'Edit', 'templatemela' ), '<span class="edit-link"><i class="fa fa-pencil"></i>', '</span>' ); ?>
		</div>
		
	    </div>
    <!-- .entry-content-other -->
</article>
<!-- #post-## -->
