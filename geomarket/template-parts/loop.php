<li class="p-seek__listItem -card">
  <a class="c-card" href="<?php the_permalink(); ?>">
    <div class="c-card__head">
      <figure class="c-card__thumbnail">
        <?php if (get_field('main_image')) : ?>
          <img src="<?php the_field('main_image'); ?>">
        <?php else : ?>
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/no-picture.png" alt="商品画像を準備中です。">
        <?php endif; ?>
      </figure>

      <?php

      $goods = get_field('select_goods'); //カテゴリーの取得

      $days = 14;  //日付取得の宣言
      $today = date_i18n('U');
      $entry_day = get_the_time('U');
      $keika = date('U', ($today - $entry_day)) / 86400;
      ?>

      <?php if ($days > $keika) : ?>
        <p class="effect <?php {
                            echo "-new";
                          } ?>">
          <?php {
            echo "NEW";
          }   ?>
        </p>
      <?php endif; ?>


      <p class="effect <?php if ($goods == "oppo") {
                          echo "-oppo";
                        } elseif ($goods == "sould") {
                          echo "-sould";
                        } elseif ($goods == "no") {
                          echo "";
                        } ?>">
        <?php if ($goods == "oppo") {
          echo "商談中";
        } elseif ($goods == "sould") {
          echo "SOLD OUT";
        }  ?>
      </p>


    </div>


    <div class="c-card__body">
      <?php get_template_part("/template-parts/rental/custom/maker") ?>


      <h3 class="c-card__title -top"><?php the_title(); ?></h3>


      <div class="cat-wrap">
        <?php
        if ($terms = get_the_terms($post->ID, 'keyword')) {
          foreach ($terms as $term) {
            echo ('<span class="category"> #');
            echo esc_html($term->name);
            echo ('</span>');
          }
        }
        ?>
      </div>


      <div class="price-wrap">
        <?php if (get_field('nomal_price')) : ?>
          <span class="price">
            <span class="cat">
              <span class="cat-text">販売価格(税込)</span>
              <em><?php echo number_format(get_field('nomal_price')); ?></em>
            </span>
            <span class="yen">円</span>
          </span>
        <?php endif; ?>


        <?php if (get_field('cam_price')) : ?>

          <span class="price -cam">
            <span class="cat">
              <span class="cat-text">キャンペーン価格(税込)</span>
              <em><?php echo number_format(get_field('cam_price')); ?></em>
            </span>
            <span class="yen">円</span>
          </span>
        <?php endif; ?>
      </div>
      <!-- /.price-wrap -->
      <p class="button">VIEW DETAIL</p>
    </div>
  </a>
</li>
