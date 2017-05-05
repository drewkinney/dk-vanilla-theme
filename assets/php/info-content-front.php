<!-- info-content-front.php -->


<div class="info-content">
<?php
	$info_content_query  = new WP_Query( array( 'category_name' => 'info', 'posts_per_page' => '2', 'orderby' => 'date'));
	if ( $info_content_query ->have_posts() ) :
		while ( $info_content_query ->have_posts() ) : $info_content_query ->the_post();
			if (has_post_thumbnail( $post->ID ) ){ $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'large' ); 	}
?>
       
       
       
  	 <h3><?php single_cat_title(); ?></h3> 
     
       
       
       
        <div class="col-sm-6 col-md-6">
				<div class="info-content-image">
				<?php if ( has_post_thumbnail() ) : ?>
					<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_post_thumbnail('large'); ?></a>
				<?php else: ?>
					<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><img src="http://placehold.it/400x350"></a>
				<?php endif; ?>
				</div>
				<div class="info-content">
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

</div><!-- /.info-content -->

<!-- /info-content.php -->








    
