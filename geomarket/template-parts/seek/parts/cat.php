<?php $url = (empty($_SERVER['HTTPS']) ? 'http://' : 'https://') . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>
<div class="c-seek__inner--sec">
  <?php if (strpos($url, 'rental') !== false) :// URLにレンタルが含まれるとき ?>
    <dt class="c-seek__content-title">カテゴリ検索</dt>
  <?php else : ?>
    <dt class="c-seek__content-title">キーワードから探す</dt>
  <?php endif; ?>
  <dd class="c-seek__content-block -blockB">


    <?php
    $args = array(
      'post_type' => 'buy',
      // 'posts_per_page' => 15,
    );
    $news_query = new WP_Query($args);
    ?>


    <?php
    // urlにrentalが含まれている時
          if (strpos($url, 'rental') !== false) :
    ?>
      <?php $tax_name = 'rental-cat'; ?>
    <?php else : ?>
      <?php $tax_name = 'keyword'; ?>
    <?php endif; ?>

    <?php $terms = get_terms($tax_name);  ?>
    <ul class="<?php echo (strpos($url, 'rental') === false) ? 'c-seek__word-list' : 'c-seek__word-list-rental'; ?>">
      <?php foreach ($terms as $term) : ?>
        <li class="c-seek__word-item">
          <a href="<?php echo get_term_link($term->slug, $tax_name) ?>#seek__resultText">
            <span><?php echo $term->name ?></span>
          </a>
        </li>
      <?php endforeach; ?>
    </ul>


    <!-- urlにrentalが含まれていない時 -->
    <?php if (strpos($url, 'rental') === false) : ?>
      <div class="c-seek__seach-block">
        <?php get_search_form(); ?>
      </div>
    <?php endif; ?>


  </dd>
</div>

<div class="c-seek__inner--sec -price">
  <dt class="c-seek__content-title">価格帯</dt>
  <dd class="c-seek__content-block -blockB">
    <ul class="<?php echo (strpos($url, 'rental') === false) ? 'c-seek__word-list' : 'c-seek__word-list-rental'; ?>">
      <!-- <li class="c-seek__word-h">【価格帯】</li> -->
      <li class="c-seek__word-item">
        <a href="<?php echo esc_url(home_url('/buy/price/?filter=fill01#seek__resultText')); ?>">
          <span>30万円未満</span>
        </a>
      </li>
      <li class="c-seek__word-item">
        <a href="<?php echo esc_url(home_url('/buy/price/?filter=fill02#seek__resultText')); ?>">
          <span>30～50万円</span>
        </a>
      </li>
      <li class="c-seek__word-item">
        <a href="<?php echo esc_url(home_url('/buy/price/?filter=fill03#seek__resultText')); ?>">
          <span>50～80万円</span>
        </a>
      </li>
      <li class="c-seek__word-item">
        <a href="<?php echo esc_url(home_url('/buy/price/?filter=fill04#seek__resultText')); ?>">
          <span>80～100万円</span>
        </a>
      </li>
      <li class="c-seek__word-item">
        <a href="<?php echo esc_url(home_url('/buy/price/?filter=fill05#seek__resultText')); ?>">
          <span>100万円以上</span>
        </a>
      </li>
    </ul>

  </dd>
</div>




<?php
// urlにrentalが含まれている時
if (strpos($url, 'rental') !== false) :
?>
  <?php $tax_name = 'rental_industry'; ?>
<?php else : ?>
  <?php $tax_name = 'industry'; ?>
<?php endif; ?>

<?php 
  // Get terms and order them by the order specified in the sorting plugin
  $terms = get_terms(array(
    'taxonomy' => $tax_name,
    'orderby' => 'term_order', // This assumes your sorting plugin uses 'term_order'
    'order' => 'ASC' // Change to 'DESC' if you want descending order
  ));  
?>
<?php if (!empty($terms) && !is_wp_error($terms)) :?>
<div class="c-seek__inner--sec -industry">
  <dt class="c-seek__content-title">業種</dt>
  <dd class="c-seek__content-block -blockB">
      <ul class="<?php echo (strpos($url, 'rental') === false) ? 'c-seek__word-list' : 'c-seek__word-list-rental'; ?>">
        <!-- <li class="c-seek__word-h">【業種】</li> -->
        <?php foreach ($terms as $term) : ?>
          <li class="c-seek__word-item">
            <a href="<?php echo get_term_link($term->slug, $tax_name) ?>#seek__resultText">
              <span><?php echo $term->name ?></span>
            </a>
          </li>
        <?php endforeach; ?>
      </ul>
  </dd>
</div>
<?php else : ?>
<?php endif; ?>

