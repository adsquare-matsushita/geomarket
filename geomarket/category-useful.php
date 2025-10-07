<?php get_header(); ?>

<main class="">
  <div class="l-contents">
    <section class="l-under">
      <div class="pan-top">
        <?php get_template_part("/template-parts/pankuzu") ?>
      </div>
      <div class="l-container ">
        <h2 class="c-heading -main">お役立ち情報</h2>
      </div>
      <!-- /.l-container -->

      <div class="l-container -sizeS  p-useful">
        <div class="p-news__inner -sub">
          <p><br></p>
          <?php
          $paged = get_query_var('paged') ? get_query_var('paged') : 1;
          $args =  array(
            'post_type'      => 'post', //投稿タイプの指定
            'paged' => $paged,      // ページネーションを使用するためのオプション
            'posts_per_page' => 5, // 表示件数
            'category_name' => 'useful',
            'orderby' => 'date',
            'order' => 'desc',

          );
          $news_query = new WP_Query($args);
          $max_num_pages = $news_query->max_num_pages;
          ?>

          <ul class="p-news__list -under">
            <?php if ($news_query->have_posts()) : ?>
              <?php while ($news_query->have_posts()) : ?>
                <?php
                  $news_query->the_post();
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

                      <!-- <p class="p-news__listContent_text"><?php //echo text_excerpt( get_the_content(), '200' ); ?></p> -->
                    </div>
                  </a>
                </li>
              <?php endwhile; ?>
          </ul>
          <?php wp_reset_postdata(); ?>
        <?php else : ?>
          <p>まだ投稿がありません。</p>
        <?php endif; ?>


          <!-- 20231107 pagination -->
          <div class="pagenation">
            <?php
            // Calculate $max_num_pages
            $max_num_pages = $news_query->max_num_pages;

            // Define the pagination arguments
            $args = array(
              'base' => esc_url(get_pagenum_link()) . '%_%',
              'format' => '?paged=%#%',
              'prev_text' => '<span class="screen-reader-text">前へ</span>',
              'next_text' => '<span class="screen-reader-text">次へ</span>',
              'total' => $max_num_pages,
              'current' => $paged,
              'mid_size' => 2,
            );

            // Output the pagination links
            echo paginate_links($args);
            ?>
          </div>
          <!-- /20231107 pagination -->

        </div>
      </div>
      <div class="pan-bottom">
        <?php get_template_part("/template-parts/pankuzu") ?>
      </div>
    </section>
    <!-- /.l-under -->
  </div>
  <!-- /.l-contents -->
</main>

<?php get_footer(); ?>
