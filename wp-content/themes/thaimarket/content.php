<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage TemplateMela
 * @since TemplateMela 1.0
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <?php /*?>
  <div class="entry-main-content">
	<div class="entry-main-header"><?php */?>
		<?php 
				if( $post->post_title == '' ) : 
					$entry_meta_class = "empty-entry-header";
				else :
					$entry_meta_class = "";
				endif; ?>
		  <header class="entry-header <?php echo $entry_meta_class; ?>">
			<?php if ( is_single() ) : ?>
			<h1 class="entry-title">
			  <?php the_title(); ?>
			</h1>
			<?php else : ?>
			<h1 class="entry-title"> <a href="<?php the_permalink(); ?>" rel="bookmark">
			  <?php the_title(); ?>
			  </a> </h1>
			<?php endif; ?>
			
		 </header>
<?php /*?>		 
</div>
</div>	<?php */?>
		
	
	
	
<?php if ( is_search() || !is_single()) : // Only display Excerpts for Search and not single pages ?>
	  <?php if ( has_post_thumbnail() && ! post_password_required() ) : ?>
		  <div class="entry-thumbnail">
			<div class="entry-thumbnail-inner">
			<?php 
			the_post_thumbnail('blog-posts-list');
			$postImage = wp_get_attachment_url( get_post_thumbnail_id(get_the_ID()) );
			?>
			</div>
		</div>		
		  <?php else : ?>
			  <?php if ($postImage = templatemela_get_first_post_images(get_the_ID())):?>
				  <?php if( $postImage!="0" ) : ?>
				  <div class="entry-thumbnail">
					<div class="entry-image-loop-con main">
					  <?php templatemela_print_images_thumb($postImage, get_the_title(get_the_ID()) , 600, 270,'center'); ?>
					  <article class="da-animate da-slideFromRight" style="display: block;">
						<div class="blog-icon-container"> <span class="zoom"><a data-lightbox="example-set" id="blog-zoom" href="<?php echo esc_url($postImage); ?>" title="Standard Post"></a></span> <span class="single_link"><a href="<?php echo esc_url(get_permalink()); ?>" title="View Full Image" class="standard"></a></span> </div>
					  </article>
					</div>
					
				  </div>
			  <?php endif; ?>
			<?php endif; ?>
  		<?php endif; ?>
  	<?php endif; ?>
    <div class="entry-content-other">
	<div class="entry-content-inner"> 
	
      <!-- .entry-header -->
      <?php if ( is_search() || !is_single()) : // Only display Excerpts for Search and not single pages ?>
      <div class="entry-summary">
        <div class="excerpt"> <?php echo tm_posts_short_description(); ?> </div>
      </div>
	  
	  <div class="entry-meta-inner">    
     		<?php tm_post_entry_date(); ?>
			<?php templatemela_sticky_post(); ?>
          <?php templatemela_categories_links(); ?>
          <?php templatemela_tags_links(); ?>
          <?php edit_post_link( __( 'Edit', 'templatemela' ), '<span class="edit-link"><i class="fa fa-pencil"></i>', '</span>' ); ?>
	</div>
      <!-- .entry-summary -->
      <?php else : ?>
      <div class="entry-content">
        <?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'templatemela' ) ); ?>
        <?php wp_link_pages( array( 'before' => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'templatemela' ) . '</span>', 'after' => '</div>', 'link_before' => '<span>', 'link_after' => '</span>' ) ); ?>
      </div>
      <!-- .entry-content -->
      <?php endif; ?>
    </div>
	
    <!-- entry-content-other -->
  </div>
</article>
<!-- #post -->
