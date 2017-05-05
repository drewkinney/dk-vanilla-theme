<!-- category-shows.php -->
<?php get_header();?>
<div id="main-content">
<!-- after main div -->

<h1><?php the_title();?></h1>
<!-- after <title> -->
  
     
<!-- START the Loop -->
	<div class="row">
		<div class="container">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?><!-- the Loop -->
				<div class="col-md-3">
					<?php if ( has_post_thumbnail() ) : ?>
						<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
							<?php the_post_thumbnail('large'); ?>
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
