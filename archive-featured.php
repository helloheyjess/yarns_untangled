<?php get_header('single'); ?>

<div class="main">
  <div class="container">
    <div class="content">
      <h1 class="centered">Featured Yarns</h1>
      <?php $loop = new WP_Query( array( 'post_type' => 'featured' ) ); ?>
        <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
            <section class="entry-content">
              <div class="item-container">
                <div class="img-thumb">
                    <?php 
                  if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
                    the_post_thumbnail('medium');
                  } 
                  ?>
                </div>
                <div class="post-content">
                  <h2 class="entry-title"><?php the_title(); ?></h2>
                  <?php the_content(); ?>
                </div>
              </div>
            </section>
        <?php endwhile; wp_reset_query(); ?>
  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>