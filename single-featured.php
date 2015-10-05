<?php get_header('single'); ?>

<div class="main">
  <div class="container">

    <div class="content content-featured">
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

        <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
          <div class="featured-yarn-img">
            <?php 
              if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
                the_post_thumbnail('medium');
              } 
             ?>
          </div>
          <div class="featured-yarn-content">
            <h1 class="entry-title"><?php the_title(); ?></h1>
            <div class="entry-content">
              <?php the_content(); ?>
              <?php wp_link_pages(array(
                'before' => '<div class="page-link"> Pages: ',
                'after' => '</div>'
              )); ?>
              <a href="http://localhost:8888/Work/003-yarns-untangled/wordpress/featured/" class="btn">Back to Featured Yarns</a>
            </div><!-- .entry-content -->
         </div>
        </div><!-- #post-## -->

        <?php comments_template( '', true ); ?>

      <?php endwhile; // end of the loop. ?>

    </div> <!-- /.content -->

  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>