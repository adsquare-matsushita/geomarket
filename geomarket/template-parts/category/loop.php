<?php
$cats = get_the_category();
$cat = $cats[0]->cat_name;
$imgUrl = catch_that_image();
?>

<li class="p-news__listItem">
  <a href="<?php the_permalink(); ?>">
    <span>
      <time><?php the_time('Y/m/d'); ?></time>
      <span class="cat"><?php echo $cat; ?></span>
    </span>

    <h3><?php the_title(); ?></h3>

    <div class="p-news__listContent">
      <?php if($cat == 'キャンペーン情報' && !empty($imgUrl) ): ?>
        <img class="p-news__listContent_img" src="<?php echo $imgUrl; ?>">
      <?php endif; ?>

      <div class="p-news__listContent_text">
        <?php the_content(); ?>
      </div>
    </div>
  </a>
</li>
