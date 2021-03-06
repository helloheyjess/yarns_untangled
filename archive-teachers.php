<?php get_header('single'); ?>

<div class="main">
  <div class="container">
    <div class="content">
      <h1 class="centered">Teachers</h1>
      <?php if ( have_posts() ) the_post(); ?>


      <?php
    	/* Since we called the_post() above, we need to
    	 * rewind the loop back to the beginning that way
    	 * we can run the loop properly, in full.
    	 */
    	rewind_posts();

    	/* Run the loop for the archives page to output the posts.
    	 * If you want to overload this in a child theme then include a file
    	 * called loop-archives.php and that will be used instead.
    	 */
      get_template_part( 'loop', 'archive' );
      ?>

    </div><!--/content-->

    <?php get_sidebar(); ?>

  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>