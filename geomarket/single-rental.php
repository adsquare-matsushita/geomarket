<?php get_header(); ?>

<main>
  <div class="l-contents">
    <section class="l-under">
      <!-- <div class="l-spacer -sizeS">
        <?php // get_template_part('template-parts/pankuzu'); ?>
      </div> -->
      <div class="l-spacer -sizeS">
        <div class="p-single__content">
          <div class="modal-mainContent">
            <div class="modal-mainInner">
              <figure class="c-card__thumbnail -rental">
                <?php if (get_field('main_image')) : ?>
                  <img src="<?php the_field('main_image'); ?>">
                <?php else : ?>
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/no-picture.png" alt="商品画像を準備中です。">
                <?php endif; ?>
              </figure>
              <div>
                <h3><?php the_title(); ?></h3>
                <?php get_template_part("/template-parts/rental/custom/reco") ?>
                <dl>
                  <dt>メーカー</dt>
                  <dd>
                    <?php get_template_part("/template-parts/rental/custom/maker") ?>
                  </dd>
                </dl>
                <?php get_template_part("/template-parts/rental/custom/category") ?>
                <?php get_template_part("/template-parts/rental/custom/use") ?>
                <dl>
                  <dt>主な機能</dt>
                  <dd>
                    <?php get_template_part("/template-parts/rental/custom/description") ?>
                  </dd>
                </dl>
                <?php get_template_part("/template-parts/rental/custom/catalog") ?>
              </div>
            </div>
            <?php get_template_part("/template-parts/rental/custom/button") ?>
            
            <div class=" l-container">
              <div class="p-single__butonContent">
                <a href="<?php echo esc_url(home_url()); ?>/rental/" class="button">一覧に戻る</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>      
    <?php get_template_part('template-parts/tour-button'); ?>
  </div>
</main>

<?php get_footer(); ?>
