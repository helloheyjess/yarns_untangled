<?php

/*
	Template Name: Home Page
*/

get_header();  ?>

<div class="main">
  <div class="container">
	<div class="inner-container">
		<div class="welcome">
			<?php // Start the loop ?>
			<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

				<h1><?php the_title(); ?></h1>
				<?php the_content(); ?>
				<a href="#" class="btn">Learn more about us</a>
			<?php endwhile; // end the loop?>
		</div>
		<?php $loop = new WP_Query( array( 'post_type' => 'featured' ) ); ?>
			<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
				<div class="feature">
					<?php 
						if( get_field('feature_on_front_page') )
						{ ?>
			  				<?php 
							if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
								the_post_thumbnail('medium');
							} 
							?>
						    <h3><?php the_title(); ?></h3>
						    <p><?php the_field('short_desc'); ?>...</p>
						    <a href="<?php the_permalink() ?>">Learn More</a>
					<?php } ?>
				</div>
			<?php endwhile; wp_reset_query(); ?>
	</div>
	<div class="inner-container">
		<h2>Latest from the Blog</h2>
	</div>
  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>