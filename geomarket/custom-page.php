<?php
/*
Template Name: カスタム
*/
?>

<?php get_header() ?>

<main>
  <div class="l-contents">
    <section class="l-under">
      <div class="pan-top">
        <?php get_template_part("/template-parts/pankuzu") ?>
      </div>
      <div class="l-container">

        <div class="m_cms_wysiwyg">
          <?php the_content(); ?>

        </div>

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