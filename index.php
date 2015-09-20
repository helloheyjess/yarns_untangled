<?php //index.php is the last resort template, if no other templates match ?>
<?php get_header('single'); ?>

<div class="main">
  <div class="container">

    <div class="content">
    	<div class="post">
    		<?php if ( have_posts() ) : ?>
    		<?php while ( have_posts() ) : the_post();  ?>
    			<h2><?php the_title(); ?></h2>
    			<?php the_excerpt(); ?>
			<?php endwhile; ?>
			<div class="nav-previous alignleft"><?php next_posts_link( 'Older posts' ); ?></div>
			<div class="nav-next alignright"><?php previous_posts_link( 'Newer posts' ); ?></div>

			<?php else : ?>
			<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
			<?php endif; ?>
    	</div>
    </div> <!--/.content -->

    <?php get_sidebar(); ?>

  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>