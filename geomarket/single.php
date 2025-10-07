<?php get_header(); ?>

<main>
  <div class="l-contents">
    <section class="l-under">
      <div class="pan-top">
        <?php get_template_part("/template-parts/pankuzu") ?>
      </div>
      <div class="l-container">
        <div class="m_cms_wysiwyg">
          <time datetime="<?php the_time( DATE_W3C ); ?>"><?php the_time( 'Y/m/d' ); ?></time>
          <h1><?php the_title(); ?></h1>
          <p class="m_cms_icatch">
              <?php if ( has_post_thumbnail() ) : ?>
                <?php the_post_thumbnail() ?>
                <?php else : ?>
                  <?php endif; ?>
          </p>

          <?php the_content( ); ?>

        </div>


      </div>
      <!-- /.l-container -->


      <ul class="single-navigation-list">
        <li class="single-navigation-list__item navileft"><?php previous_post_link('%link', '前の記事'); ?></li>
        <li class="single-navigation-list__item navitop"><a href="<?php echo esc_url( home_url( '/information') ); ?>">一覧ページ</a></li>
        <li class="single-navigation-list__item naviright"><?php next_post_link('%link', '次の記事'); ?></li>
      </ul>


      <div class="pan-bottom">
        <?php get_template_part("/template-parts/pankuzu") ?>
      </div>
    </section>
    <!-- /.l-under -->
  </div>
  <!-- /.l-contents -->
</main>

<?php get_footer(); ?>