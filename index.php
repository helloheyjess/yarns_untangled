<?php //index.php is the last resort template, if no other templates match ?>
<?php get_header('single'); ?>

<div class="main">
  <div class="container">

    <div class="content">
        <h1>Yarns Untangled Blog</h1>
		<?php if ( have_posts() ) : ?>
		<?php while ( have_posts() ) : the_post();  ?>

            <div class="the-post">
                <?php 
                if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
                    the_post_thumbnail('medium');
                } 
                ?>
                <h2><?php the_title(); ?></h2>
                <?php the_excerpt(); ?>
            </div>
		<?php endwhile; ?>
		<div class="nav-previous alignleft"><?php next_posts_link( 'Older posts' ); ?></div>
		<div class="nav-next alignright"><?php previous_posts_link( 'Newer posts' ); ?></div>

		<?php else : ?>
		<p><?php _e('Coming Soon!'); ?></p>
		<?php endif; ?>
    </div> <!--/.content -->

    <?php get_sidebar(); ?>

  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>