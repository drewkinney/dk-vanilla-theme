<!-- upcoming-shows.php -->
<div class="shows">
<?php
	$upcoming_query = new WP_Query( array( 'category_name' => 'upcoming-shows', 'posts_per_page' => '4', 'orderby' => 'date'));
	if ( $upcoming_query->have_posts() ) :
		/* Start the Loop */
		while ( $upcoming_query->have_posts() ) : $upcoming_query->the_post();
?>
    	<!-- Loop post: <?php the_title();?> -->
        <div class="col-sm-6 col-md-3">
            <div class="show">
				<div class="info">
					<div class="upcoming-show-image">
						<?php if ( has_post_thumbnail() ) : ?>
							<a href="<?php the_permalink(); ?>" title="Click to learn more about <?php the_title_attribute(); ?>">
								<?php the_post_thumbnail('medium'); ?>
							</a>
						<?php else: ?>
							<a href="<?php the_permalink(); ?>" title="Click to learn more about <?php the_title_attribute(); ?>">
								<img class="show-poster" src="http://www.octconcord.com/new-site-2/wp-content/uploads/2017/04/show-poster-featured-image-placeholder.jpg" alt="This is a placeholder image, specify a featured image for this post">
							</a>
						<?php endif; ?>
					</div>
					<h3><?php the_title();?></h3>
					<p><?php the_excerpt();?></p>
					<p class="buttons">
						<a href="<?php the_permalink();?>" class="btn btn-primary-reverse pull-left" role="button">
							<i class="fa fa-ticket" aria-hidden="true"></i> <span class="label-txt">Buy Tickets</span>
						</a>
						<a href="<?php the_permalink();?>" class="btn btn-primary pull-right" role="button">
							<span class="label-txt">Learn More</span> <i class="fa fa-chevron-right" aria-hidden="true"></i>
						</a>
					</p>
				</div>
            </div>
        </div>
<?php
		endwhile;
		wp_reset_postdata();
	endif; 
?>
</div><!-- /.shows -->
<!-- /upcoming-shows.php -->