<?php get_header(); ?>

	<div class="container mt-5">
  
    <?php while ( have_posts() ) : the_post(); ?>

      <article id="post-<?php the_ID(); ?>" class="container py-5">
        <div class="row justify-content-md-center">
          <div class="col-lg-8">
            <?php the_title( sprintf( '<h1 class="fs-1 fw-bolder">', esc_url( get_permalink() ) ), '</h1>' ); ?>

            <p>
              <?php the_content(); ?>
            </p>
          </div>
        </div>
      </article>


      <?php
        // If comments are open or we have at least one comment, load up the comment template
        if ( comments_open() || '0' != get_comments_number() ) :
          comments_template();
        endif;
      ?>

    <?php endwhile; // end of the loop. ?>

	</div>

<?php // get_sidebar(); ?>
<?php get_footer(); ?>