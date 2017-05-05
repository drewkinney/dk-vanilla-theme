<!-- single-gallery.php -->
<?php get_header();?>

	<!-- START the Loop -->
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	
	<article class="single-post row">
		<div class="col-md-12 featured-header">
			<?php if ( has_post_thumbnail() ) : ?>
				<?php the_post_thumbnail('full-size'); ?>
			<?php else: ?>
				<img src="http://placehold.it/1920x500" alt="This is a placeholder image, specify a featured image for this post">
			<?php endif // end of 'if ( has_post_thumbnail() ) :'?>
		</div>
		<div class="container">
			<div class="col-md-12">
				<h2><?php the_title();?></h2> 
				<div><?php the_content(); ?></div>
			</div><!-- /.col-md-7 -->
		</div><!-- /.container -->
	</article><!-- /.sinlge-post -->
	
	<?php endwhile; else: ?>
	
	<article class="container error">
		<h1 class="error-header">Oops!</h1>
		<p class="error-message">There seems to be slight issue with your request. We aplogize for the inconvenience.</p>   
	</article><!-- /.error -->
	
	<?php endif; ?>
	<!-- END the Loop -->
	
<?php get_footer();?>
<!-- /single-gallery.php -->