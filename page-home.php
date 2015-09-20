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
				<a href="http://localhost:8888/Work/003-yarns-untangled/wordpress/about-us/" class="btn">Learn more about us</a>
			<?php endwhile; // end the loop?>
		</div>
		<?php $loop = new WP_Query( array( 'post_type' => 'featured' ) ); ?>
			<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
					<?php 
						if( get_field('feature_on_front_page') )
						{ ?>
							<div class="feature">
							<h2>Featured Yarn</h2>
			  				<?php 
							if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
								the_post_thumbnail('medium');
							} 
							?>
						    <h3><?php the_title(); ?></h3>
						    <p><?php the_field('short_desc'); ?>...</p>
						    <a href="<?php the_permalink() ?>">Learn More</a>
					    </div>
					<?php } ?>
				
			<?php endwhile; wp_reset_query(); ?>
	</div>
	<div class="inner-container">
		<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Latest') ) ?>
	</div>
  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>