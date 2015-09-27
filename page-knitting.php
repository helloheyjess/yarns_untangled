<?php

/*
	Template Name: Knitting
*/

get_header();  ?>

<div class="main">
  <div class="container">

    <?php // Start the loop ?>
    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
      <h1><?php the_title(); ?></h1>
      <?php the_content(); ?>
    <?php endwhile; // end the loop?>
    <?php $loop = new WP_Query( array( 'post_type' => 'classes', 'category_name' => 'knitting' ) ); ?>
	    <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
	    	<div class="entry-content">
    			<h2 class="entry-title"><?php the_title(); ?></h2>
    			<div class="class-details">
	    			<?php if( get_post_meta($post->ID, 'price', true) ) { ?>
	    				<p><span class="highlight">Cost:</span> <?php the_field('price') ?></p>
	    			<?php } ?>
	    			<?php if( get_post_meta($post->ID, 'class_length', true) ) { ?>
	    				<p><span class="highlight">Class Length:</span> <?php the_field('class_length') ?></p>
	    			<?php } ?>
	    			<?php if( get_post_meta($post->ID, 'skill_level', true) ) { ?>
	    				<p><span class="highlight">Skill Level:</span> <?php the_field('skill_level') ?></p>
	    			<?php } ?>
	    			<?php if( get_post_meta($post->ID, 'materials_required', true) ) { ?>
	    				<p><span class="highlight">Materials Required:</span> <?php the_field('materials_required') ?></p>
	    			<?php } ?>
    			</div>
    			
            	<?php the_content(); ?>
	    	</div>
    	<?php endwhile; wp_reset_query(); ?>
  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>