  <!-- pankuzu -->
  <!-- url取得 -->
  <?php $url = (empty($_SERVER['HTTPS']) ? 'http://' : 'https://') . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>

  <section class="pan <?php echo (is_post_type_archive('rental') || is_tax('rental-cat') || preg_match('/rental\/(topcon|sokkia|leica|pentax|nikon|trimble|ti-asahi|other)/', $url)) ? 'bg-gray' : ''; ?>">


    <div class="l-container">
      <?php
      if (function_exists('bcn_display') && !is_front_page()) {
        echo '<ol class="breadcrumbs">';
        bcn_display_list();
        echo '</ol>';
      }
      ?>

    </div>
    <!-- /.l-container -->
  </section>
  <!-- /.pan -->
