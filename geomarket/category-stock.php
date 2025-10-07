<?php get_header(); ?>

<main>
  <div class="l-contents">
    <section class="l-under">
      <div class="pan-top">
        <?php get_template_part("/template-parts/pankuzu") ?>
      </div>
      <div class="l-container">
        <h2 class="c-heading -main">お知らせ</h2>
      </div>
      <!-- /.l-container -->

      <div class="l-container -sizeS">
        <div class="p-news__inner -sub">

          <?php get_template_part("/template-parts/category/tab") ?>


          <ul class="p-news__list -under">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <?php get_template_part("/template-parts/category/loop") ?>
              <?php endwhile; ?>
          </ul>
        <?php else : ?>
          <p>まだ投稿がありません。</p>
        <?php endif;
            wp_reset_postdata(); ?>


        <?php get_template_part("/template-parts/category/pagination") ?>

        </div>
      </div>
      <div class="pan-bottom">
        <?php get_template_part("/template-parts/pankuzu") ?>
      </div>
    </section>
    <!-- /.l-under -->
  </div>
  <!-- /.l-contents -->
</main>
<?php get_footer(); ?>
