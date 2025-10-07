<?php

/**
 * Template Name: Fixed Page
 */

 get_header()
 ?>

<main>
  <div class="l-contents">
    <section class="l-under">
      <div class="pan-top">
        <?php get_template_part("/template-parts/pankuzu") ?>
      </div>

      <div class="l-container page-ttl">
        <h2 class="c-heading -main"><?php the_title(); ?></h2>
      </div>

      <div class="l-container -sizeS">

        <?php if( have_posts() ): ?>
        	<?php while( have_posts() ): ?>
        		<?php the_post(); ?>

        		<?php remove_filter( 'the_content', 'wpautop' ); ?>
        		<?php the_content(); ?>

        	<?php endwhile; ?>
        <?php endif; ?>

      </div>
      <!-- /.l-container -->


      <div class="pan-bottom">
        <?php get_template_part("/template-parts/pankuzu") ?>
      </div>
    </section>
    <!-- /.l-under -->
  </div>
  <!-- /.l-contents -->
</main>

<?php get_footer(); ?>
