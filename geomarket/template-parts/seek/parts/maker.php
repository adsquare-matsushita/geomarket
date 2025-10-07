
<?php $url = (empty($_SERVER['HTTPS']) ? 'http://' : 'https://') . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>
<dt class="c-seek__content-title">メーカー検索</dt>
<dd class="c-seek__content-block">

  <ul class=" <?php echo (strpos($url, 'rental') !== false) ? "c-seek__maker-list-rental" : "c-seek__maker-list"; ?>">
    <li class="c-seek__maker-item">
      <!-- URLにレンタルが含まれるとき -->
      <?php if (strpos($url, 'rental') !== false) : ?>
        <a href="<?php echo esc_url(home_url('/rental/topcon#seek__resultText')); ?>">
        <?php else : ?>
          <!-- URLレンタルが含まれないとき -->
          <a href="<?php echo esc_url(home_url('/buy/topcon#seek__resultText')); ?>">
          <?php endif; ?>
          <figure>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/logo-topcon.png" alt="topconのロゴ">
          </figure>
          <span>トプコン</span>
          </a>
    </li>

    <li class="c-seek__maker-item">
      <!-- URLにレンタルが含まれるとき -->
      <?php if (strpos($url, 'rental') !== false) : ?>
        <a href="<?php echo esc_url(home_url('/rental/sokkia#seek__resultText')); ?>">
          <!-- URLレンタルが含まれないとき -->
        <?php else : ?>
          <a href="<?php echo esc_url(home_url('/buy/sokkia#seek__resultText')); ?>">
          <?php endif; ?>
          <figure>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/logo-sokkia.png" alt="sokkiaのロゴ">
          </figure>
          <span>ソキア</span>
          </a>
    </li>

    <li class="c-seek__maker-item">
      <?php if (strpos($url, 'rental') !== false) : ?>
        <!-- URLにレンタルが含まれるとき -->
        <a href="<?php echo esc_url(home_url('/rental/leica#seek__resultText')); ?>">
          <!-- URLレンタルが含まれないとき -->
        <?php else : ?>
          <a href="<?php echo esc_url(home_url('/buy/leica#seek__resultText')); ?>">
          <?php endif; ?>
          <figure>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/logo-leica.png" alt="leicageosystemsのロゴ">
          </figure>
          <span>ライカ<br class="sp-hide">ジオシステムズ</span>
          </a>
    </li>


    <li class="c-seek__maker-item">
      <?php if (strpos($url, 'rental') !== false) : ?>
        <!-- URLにレンタルが含まれるとき -->
        <a href="<?php echo esc_url(home_url('/rental/pentax#seek__resultText')); ?>">
        <?php else : ?>
          <!-- URLレンタルが含まれないとき -->
          <a href="<?php echo esc_url(home_url('/buy/pentax#seek__resultText')); ?>">
          <?php endif; ?>

          <figure>
            <img src=" <?php echo get_template_directory_uri(); ?>/assets/images/top/logo-pentax.png" alt="pentaxのロゴ">
          </figure>
          <span>ペンタックス</span>
          </a>
    </li>

    <li class="c-seek__maker-item">
      <!-- URLにレンタルが含まれるとき -->
      <?php if (strpos($url, 'rental') !== false) : ?>
        <a href="<?php echo esc_url(home_url('/rental/nikon#seek__resultText')); ?>">
          <!-- URLレンタルが含まれないとき -->
        <?php else : ?>
          <a href="<?php echo esc_url(home_url('/buy/nikon#seek__resultText')); ?>">
          <?php endif; ?>
          <span>ニコン</span>
          </a>
    </li>


    <li class="c-seek__maker-item">
      <!-- URLにレンタルが含まれるとき -->
      <?php if (strpos($url, 'rental') !== false) : ?>
        <a href="<?php echo esc_url(home_url('/rental/trimble#seek__resultText')); ?>">
          <!-- URLレンタルが含まれないとき -->
        <?php else : ?>
          <a href="<?php echo esc_url(home_url('/buy/trimble#seek__resultText')); ?>">
          <?php endif; ?>
          <span>ニコン<br>トリンブル</span>
          </a>
    </li>

    <li class="c-seek__maker-item">
      <!-- URLにレンタルが含まれるとき -->
      <?php if (strpos($url, 'rental') !== false) : ?>
        <a href="<?php echo esc_url(home_url('/rental/ti-asahi#seek__resultText')); ?>">
          <!-- URLレンタルが含まれないとき -->
        <?php else : ?>
          <a href="<?php echo esc_url(home_url('/buy/ti-asahi#seek__resultText')); ?>">
          <?php endif; ?>
          <span>TIアサヒ</span>
          </a>
    </li>

    <li class="c-seek__maker-item">
      <?php if (strpos($url, 'rental') !== false) : ?>
        <!-- URLにレンタルが含まれるとき -->
        <a href="<?php echo esc_url(home_url('/rental/other#seek__resultText')); ?>">
        <?php else : ?>
          <!-- URLレンタルが含まれないとき -->
          <a href="<?php echo esc_url(home_url('/buy/other#seek__resultText')); ?>">
          <?php endif; ?>
          <span>その他</span>
          </a>
    </li>
  </ul>

</dd>
