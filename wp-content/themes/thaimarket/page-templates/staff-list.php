<?php
/* Template Name: Staff List */
?>
<?php get_header(); 
$tm_content_position = tm_content_position();
?>
<!-- Start blog-list -->

<div id="main-content" class="main-content staff-page staff-list <?php echo esc_attr( tm_sidebar_position() ) ; ?>">
  <div id="primary" class="content-area">
    <div id="content" class="site-content" role="main">
      <?php if($tm_content_position == 'above') : 
				// Page thumbnail
				templatemela_post_thumbnail();
				the_content(); 
			endif; ?>
      <div id="container" class="staff-list-container list-container">
        <?php	
			if ( get_query_var('paged') ) { $paged = get_query_var('paged'); } else if ( get_query_var('page') ) {$paged = get_query_var('page'); } else {$paged = 1; }
			
			$last_class = "";
				$staff_args = array(
					'posts_per_page' 	=> tm_staff_box_posts_per_page(), 
					'paged' 			=> $paged,
					'post_type'			=> 'staff',
					'status'			=> 'publish',
				);
				$wp_query = new WP_Query();
    			$wp_query->query( $staff_args );
				if ( $wp_query->have_posts() ): ?>
        <div class="list">
          <?php while( $wp_query->have_posts() ): $wp_query->the_post(); 
						get_post_meta($post->ID, 'staff_position', TRUE) ? $staff_position = get_post_meta($post->ID, 'staff_position', TRUE) : $staff_position = '';
						get_post_meta($post->ID, 'staff_link', TRUE) ? $staff_link = get_post_meta($post->ID, 'staff_link', TRUE) : $staff_link = '';
						get_post_meta($post->ID, 'staff_phone', TRUE) ? $staff_phone = get_post_meta($post->ID, 'staff_phone', TRUE) : $staff_phone = '';
						get_post_meta($post->ID, 'staff_email', TRUE) ? $staff_email = get_post_meta($post->ID, 'staff_email', TRUE) : $staff_email = '';
						get_post_meta($post->ID, 'staff_twitter', TRUE) ? $staff_twitter = get_post_meta($post->ID, 'staff_twitter', TRUE) : $staff_twitter = '';
						get_post_meta($post->ID, 'staff_facebook', TRUE) ? $staff_facebook = get_post_meta($post->ID, 'staff_facebook', TRUE) : $staff_facebook = '';
						get_post_meta($post->ID, 'staff_google_plus', TRUE) ? $staff_google_plus = get_post_meta($post->ID, 'staff_google_plus', TRUE) : $staff_google_plus = '';
						get_post_meta($post->ID, 'staff_linkedin', TRUE) ? $staff_linkedin = get_post_meta($post->ID, 'staff_linkedin', TRUE) : $staff_linkedin = '';
						get_post_meta($post->ID, 'staff_youtube', TRUE) ? $staff_youtube = get_post_meta($post->ID, 'staff_youtube', TRUE) : $staff_youtube = '';
						get_post_meta($post->ID, 'staff_rss', TRUE) ? $staff_rss = get_post_meta($post->ID, 'staff_rss', TRUE) : $staff_rss = '';
						get_post_meta($post->ID, 'staff_pinterest', TRUE) ? $staff_pinterest = get_post_meta($post->ID, 'staff_pinterest', TRUE) : $staff_pinterest = '';
						get_post_meta($post->ID, 'staff_skype', TRUE) ? $staff_skype = get_post_meta($post->ID, 'staff_skype', TRUE) : $staff_skype = ''; ?>
          <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <?php if ( has_post_thumbnail() && ! post_password_required() ) : 
							$post_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); 
						else:
							$post_image = templatemela_get_first_post_images(get_the_ID());
						endif;
						?>
            <div class="entry-content">
              <div class="staff-left">
                <div class="staff-image">
                  <?php templatemela_print_images_thumb($post_image, get_the_title(get_the_ID()), 200, 200, 'left'); ?>
                </div>
              </div>
              <div class="staff-right">
                <div class="staff-name"><?php echo esc_attr( the_title() ); ?></div>
                <div class="staff-position"><?php echo "- ".$staff_position; ?></div>
                <div class="staff-description"><?php echo esc_attr( the_content() ); ?></div>
                <div class="staff-social">
                  <?php if(!empty($staff_link)) :  ?>
                  <a href="<?php echo esc_attr( $staff_link ); ?>" title="<?php echo __('Website', 'templatemela');?>" class="website icon"><i class="fa fa-link"></i></a>
                  <?php endif; ?>
                  <?php if(!empty($staff_email)) :  ?>
                  <a href="<?php echo esc_attr( $staff_email ); ?>" title="<?php echo __('Email', 'templatemela');?>" class="email icon"><i class="fa fa-envelope-o"></i></a>
                  <?php endif; ?>
                  <?php if(!empty($staff_twitter)) :  ?>
                  <a href="<?php echo esc_attr( $staff_twitter ); ?>" title="<?php echo __('Twitter', 'templatemela');?>" class="twitter icon"><i class="fa fa-twitter"></i></a>
                  <?php endif; ?>
                  <?php if(!empty($staff_facebook)) :  ?>
                  <a href="<?php echo esc_attr( $staff_facebook ); ?>" title="<?php echo __('Facebook', 'templatemela');?>" class="facebook icon"><i class="fa fa-facebook"></i></a>
                  <?php endif; ?>
                  <?php if(!empty($staff_google_plus)) :  ?>
                  <a href="<?php echo esc_attr( $staff_google_plus ); ?>" title="<?php echo __('Google Plus', 'templatemela');?>" class="google-plus icon"><i class="fa fa-google-plus"></i></a>
                  <?php endif; ?>
                  <?php if(!empty($staff_linkedin)) :  ?>
                  <a href="<?php echo esc_attr( $staff_linkedin ); ?>" title="<?php echo __('Linkedin', 'templatemela');?>" class="linkedin icon"><i class="fa fa-linkedin"></i></a>
                  <?php endif; ?>
                  <?php if(!empty($staff_youtube)) :  ?>
                  <a href="<?php echo  esc_attr( $staff_youtube ); ?>" title="<?php echo __('Youtube', 'templatemela');?>" class="youtube icon"><i class="fa fa-youtube"></i></a>
                  <?php endif; ?>
                  <?php if(!empty($staff_rss)) :  ?>
                  <a href="<?php echo esc_attr( $staff_rss ); ?>" title="<?php echo __('RSS', 'templatemela');?>" class="rss icon"><i class="fa fa-rss"></i></a>
                  <?php endif; ?>
                  <?php if(!empty($staff_pinterest)) :  ?>
                  <a href="<?php echo esc_attr( $staff_pinterest ); ?>" title="<?php echo __('Pinterest', 'templatemela');?>" class="pinterest icon"><i class="fa fa-pinterest"></i></a>
                  <?php endif; ?>
                  <?php if(!empty($staff_skype)) :  ?>
                  <a href="<?php echo esc_attr( $staff_skype ); ?>" title="<?php echo __('Skype', 'templatemela');?>" class="skype icon"><i class="fa fa-skype"></i></a>
                  <?php endif; ?>
                </div>
              </div>
            </div>
          </article>
          <!-- #post -->
          <?php endwhile; ?>
        </div>
        <?php else:  ?>
        <p>
          <?php  __( 'Sorry, no posts matched your criteria.', 'templatemela' ); ?>
        </p>
        <?php endif; ?>
      </div>
      <?php // Post navigation.
			   templatemela_paging_nav();
			   wp_reset_query();  
			    if($tm_content_position == 'below') : 
				// Page thumbnail
				templatemela_post_thumbnail();
				the_content(); 
			endif; 
			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) {
				comments_template();
			} ?>
    </div>
    <!-- #content -->
  </div>
  <!-- #primary -->
  <?php get_sidebar(); ?>
</div>
<!-- End staff-list -->
<?php get_footer(); ?>
