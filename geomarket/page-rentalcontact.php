<?php get_header(); ?>

<main>
  <div class="l-contents">
    <section class="l-under">
      <div class="l-container">
        <h2 class="c-heading -main">レンタルに関する<br class="pc-hide" />お問い合わせ</h2>

        <div class="p-contact__rentalWrap">
          <div class="l-contents__box -grayLine">
            <div class="p-form">


              <!-- /.m_form_format -->
              <?php if( have_posts() ):
              while( have_posts() ):
              the_post(); ?>

              <?php remove_filter( 'the_content', 'wpautop' );
              the_content();
              ?>

              <?php endwhile;
            endif; ?>
              <!-- /.m_form_format -->


            </div>


          </div>
          <!-- /.l-contents__box -->
        </div>
        <!-- /.p-contact__rentalWrap -->
      </div>
      <!-- /  .l-container -->
    </section>
    <!-- /.l-under -->
  </div>
  <!-- /.l-contents -->
</main>

<?php get_footer(); ?>