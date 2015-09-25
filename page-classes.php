<?php

/*
	Template Name: Classes
*/

get_header();  ?>

<div class="main">
  <div class="container">

    <?php // Start the loop ?>
    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

      <h1><?php the_title(); ?></h1>
      <?php the_content(); ?>

    <?php endwhile; // end the loop?>
    <?php $loop = new WP_Query( array( 'post_type' => 'classes' ) ); ?>
	    <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
	    	<div class="entry-content">
    			<h2 class="entry-title"><?php the_title(); ?></h2>
            	<?php the_content(); ?>
	    	</div>
    	<?php endwhile; wp_reset_query(); ?>
  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>