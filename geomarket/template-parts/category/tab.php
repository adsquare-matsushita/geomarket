<?php
// URLの取得
$url = $_SERVER['REQUEST_URI']; ?>
<ul class="p-news__cat tab">
  <li class="p-news__catItem <?php if (strpos($url, 'sale') === false && strpos($url, 'stock') === false && strpos($url, 'campaign') === false) echo "is-tab"; ?>"><a href="<?php echo esc_url(home_url()); ?>/information/">全てのニュース</a></li>
  <li class="p-news__catItem <?php if (strpos($url, 'campaign') !== false) echo "is-tab"; ?>"><a href="<?php echo esc_url(home_url()); ?>/information/campaign/">キャンペーン情報</a></li>
  <li class="p-news__catItem <?php if (strpos($url, 'stock') !== false) echo "is-tab"; ?>"><a href="<?php echo esc_url(home_url()); ?>/information/stock/">入荷案内</a></li>
  <li class="p-news__catItem <?php if (strpos($url, 'sale') !== false) echo "is-tab"; ?>"><a href="<?php echo esc_url(home_url()); ?>/information/sale/">販売情報</a></li>
</ul>
