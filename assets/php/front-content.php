<!-- front-content.php -->


<div class="front-content">
	<h3>the old courthouse</h3>
<?php
	$front_content_query = new WP_Query( array( 'category_name' => 'front-content', 'posts_per_page' => '2', 'orderby' => 'date'));
	if ( $front_content_query->have_posts() ) :
		while ( $front_content_query->have_posts() ) : $front_content_query->the_post();
			if (has_post_thumbnail( $post->ID ) ){ $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'large' ); 	}
?>
        <div class="col-sm-6 col-md-6">
            <div class="front-content">
                <div class="front-content-image">
                	<a class="feature-thumbnail"  href="<?php the_permalink();?>" title="Click here to see show info"  style="background: url('<?php echo $image; ?>');background-size: cover; background-repeat: no-repeat;"></a>
                </div>
                <div class="front-content-info">
					<div class="front-content-image">
						<?php if ( has_post_thumbnail() ) : ?>
							<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
								<?php the_post_thumbnail('large'); ?>
							</a>
						<?php endif; ?>
					</div>
                  <h3><?php the_title();?></h3>
                  <p><?php the_excerpt();?></p>
                  <p><a href="<?php the_permalink();?>" class="btn btn-primary" role="button">Learn More</a></p>
                </div>
            </div>
        </div>
<?php
		endwhile;
		wp_reset_postdata();
		
	endif; 
?>

</div><!-- /.front-content -->

<!-- /front-content.php -->








    
