<!-- category-shows.php -->
<?php get_header();?>
    <div id="main-content">


<!-- START the Loop -->
	<div class="row">
		<div class="container">
			<h1><?php single_cat_title(); ?></h1>
			<?php echo category_description(4); ?>

			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?><!-- the Loop -->
				<div class="col-md-3">
					<?php if ( has_post_thumbnail() ) : ?>
						<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
							<?php the_post_thumbnail('medium'); ?>
						</a>
					<?php else: ?>
						<a href="<?php the_permalink(); ?>" title="Click to learn more about <?php the_title_attribute(); ?>">
							<img class="show-poster" src="http://www.octconcord.com/new-site-2/wp-content/uploads/2017/04/show-poster-featured-image-placeholder.jpg" alt="This is a placeholder image, specify a featured image for this post">
						</a>
					<?php endif; ?>
					<h2><?php the_title();?></h2>
					<?php the_excerpt(); ?>
				</div>
			<?php endwhile; else: ?>
				<p class="error">Sorry, no posts to list</p>
			<?php endif; ?><!-- /the Loop -->
		</div><!-- /.container -->
	</div><!-- /.row -->
<!-- END the Loop -->

<!-- START the oct-about Loop -->
     <div class="front-content row">
		<div class="container">
			<?php get_template_part( 'assets/php/front-content' ); ?>
		</div><!-- /.container -->
	 </div><!-- /.front-content.row -->
<!-- END the oct-about Loop -->

</div><!-- /.main-content -->
<?php get_footer();?>
<!-- /category-shows.php -->
