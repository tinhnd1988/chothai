<?php
/**
 * The template for displaying posts in the Image post format
 *
 * @package WordPress
 * @subpackage TemplateMela
 * @since TemplateMela 1.0
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  
 <?php /*?> <div class="entry-main-content">
   <div class="entry-main-header"><?php */?>
	 <header class="entry-header">
        <?php
			if ( is_single() ) :
				the_title( '<h1 class="entry-title">', '</h1>' );
			else :
				the_title( '<h1 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h1>' );
			endif;
		?>
		 
      </header>
	 
	 <?php /*?> </div>
	
	
					
     </div><?php */?>
	 
      <!-- .entry-header -->
   
   <?php if ( is_search() || !is_single()) : ?>
 		 <?php if ( has_post_thumbnail() && ! post_password_required() ) : ?>
			<div class="entry-thumbnail">
				<div class="entry-thumbnail-inner">
				<?php 
				the_post_thumbnail('blog-posts-list'); 
				$postImage = wp_get_attachment_url( get_post_thumbnail_id(get_the_ID()) );
				?>
	<?php 
	if(!empty($postImage)): ?>
	<?php /*?><div class="block_hover">
		<div class="links">
			  <a href="<?php echo $postImage; ?>" title="Click to view Full Image" data-lightbox="example-set" class="icon zoom mustang-gallery"><i class="fa fa-search"></i></a> <a href="<?php echo get_permalink(); ?>" title="Click to view Read More" class="icon readmore"><i class="fa fa-share"></i></a> 
			 
		</div>
	</div><?php */?>
	<?php	endif; ?>			
				</div>
			</div>	  
  		 <?php endif; ?>
  	<?php endif; ?>
    <div class="entry-content-other">
	<div class="entry-content-inner">
	
      <div class="entry-content">
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
      <!-- .entry-content -->
	  <div class="entry-meta-inner">    
				<?php tm_post_entry_date(); ?>
    			<?php templatemela_sticky_post(); ?>
          <?php templatemela_categories_links(); ?>
          <?php templatemela_tags_links(); ?>
		<?php edit_post_link( __( 'Edit', 'templatemela' ), '<span class="edit-link"><i class="fa fa-pencil"></i>', '</span>' ); ?>
    	</div>
        <!-- .entry-meta -->
    </div>
    <!-- .entry-content-other -->
  </div>
  <!-- .entry-main-content -->
</article>
<!-- #post-## -->
