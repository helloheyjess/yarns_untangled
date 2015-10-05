<?php

/*
	Template Name: Classes
*/

get_header();  ?>

<div class="main">
  <div class="container" id="classes">

    <?php // Start the loop ?>
    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
      <h1>Classes at Yarns Untangled</h1>
      <?php the_content(); ?>
    <?php endwhile; // end the loop?>
    <h2>Knitting Classes</h2>
    <?php $loop = new WP_Query( array( 'post_type' => 'classes', 'category_name' => 'knitting', 'posts_per_page' => -1 ) ); ?>
	    <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
	    	<div class="entry-content">
    			<div class="class-details">
	  				<?php 
					if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
						the_post_thumbnail('medium');
					} 
					?>
	    			<h3 class="entry-title"><?php the_title(); ?></h3>
    				<ul>
	    				<?php if( get_post_meta($post->ID, 'price', true) ) { ?>
    					<li>
    						<span class="highlight">Cost:</span> <?php the_field('price') ?>
    					</li>
    					<?php } ?>
    					<?php if( get_post_meta($post->ID, 'teacher', true) ) { ?>
    					<li>
    						<span class="highlight">Teacher:</span> <?php the_field('teacher') ?>
    					</li>
    					<?php } ?>
    					<?php if( get_post_meta($post->ID, 'dates', true) ) { ?>
    					<li>
    						<span class="highlight">Dates:</span> <?php the_field('dates') ?>
    					</li>
    					<?php } ?>
    				</ul>
	    			
	    			<?php the_content(); ?>
	    			<ul>
		    			<?php if( get_post_meta($post->ID, 'skill_level', true) ) { ?>
	    				<li>
	    					<span class="highlight blue">Skill Level:</span> <?php the_field('skill_level') ?>
	    				</li>
	    				<?php } ?>
	    				<?php if( get_post_meta($post->ID, 'materials_required', true) ) { ?>
	    				<li>
	    					<span class="highlight blue">Materials Required:</span> <?php the_field('materials_required') ?>
	    				</li>
	    				<?php } ?>
	    			</ul>
    			</div>
	    	</div>
    	<?php endwhile; wp_reset_query(); ?>
    <h2>Crochet Classes</h2>
        <?php $loop = new WP_Query( array( 'post_type' => 'classes', 'category_name' => 'crocheting', 'posts_per_page' => -1 ) ); ?>
    	    <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
    	    	<div class="entry-content">
        			<div class="class-details">
		  				<?php 
						if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
							the_post_thumbnail('medium');
						} 
						?>
	        			<h3 class="entry-title"><?php the_title(); ?></h3>
    	    			<ul>
		    				<?php if( get_post_meta($post->ID, 'price', true) ) { ?>
	    					<li>
	    						<span class="highlight">Cost:</span> <?php the_field('price') ?>
	    					</li>
	    					<?php } ?>
	    					<?php if( get_post_meta($post->ID, 'teacher', true) ) { ?>
	    					<li>
	    						<span class="highlight">Teacher:</span> <?php the_field('teacher') ?>
	    					</li>
	    					<?php } ?>
	    					<?php if( get_post_meta($post->ID, 'dates', true) ) { ?>
	    					<li>
	    						<span class="highlight">Dates:</span> <?php the_field('dates') ?>
	    					</li>
	    					<?php } ?>
	    				</ul>
		    			
		    			<?php the_content(); ?>
		    			<ul>
			    			<?php if( get_post_meta($post->ID, 'skill_level', true) ) { ?>
		    				<li>
		    					<span class="highlight blue">Skill Level:</span> <?php the_field('skill_level') ?>
		    				</li>
		    				<?php } ?>
		    				<?php if( get_post_meta($post->ID, 'materials_required', true) ) { ?>
		    				<li>
		    					<span class="highlight blue">Materials Required:</span> <?php the_field('materials_required') ?>
		    				</li>
		    				<?php } ?>
		    			</ul>
        			</div>
      	    	</div>
        	<?php endwhile; wp_reset_query(); ?>
  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>