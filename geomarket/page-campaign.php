<?php get_header(); ?>

<main>
  <div class="l-contents">
    <section class="l-under">
      <div class="l-container">
        <h2 class="c-heading -main">お知らせ</h2>
      </div>
      <!-- /.l-container -->

      <div class="l-container -sizeS">
        <div class="p-news__inner -sub">

          <ul class="p-news__cat tab">
            <li class="p-news__catItem"><a href="<?php echo esc_url( home_url( ) ); ?>/information/">全てのニュース</a></li>
            <li class="p-news__catItem is-tab"><a href="<?php echo esc_url( home_url( ) ); ?>/information/campaign/">キャンペーン情報</a></li>
            <li class="p-news__catItem"><a href="<?php echo esc_url( home_url( ) ); ?>/information/stock/">入荷案内</a></li>
            <li class="p-news__catItem "><a href="<?php echo esc_url( home_url( ) ); ?>/information/sale/">販売情報</a></li>
          </ul>


          <?php
              $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
              $args =  array (
                'post_type'      => 'post', //投稿タイプの指定
                'paged' => $paged,      // ページネーションを使用するためのオプション
                'category_name' => 'campaign',
                'posts_per_page' => 5, // 表示件数

              );
              $news_query = new WP_Query($args);
              ?>

          <ul class="p-news__list">
            <?php if ( $news_query->have_posts() ) : ?>
            <?php while ( $news_query->have_posts() ) : ?>
            <?php $news_query->the_post(); ?>
            <li class="p-news__listItem">
              <a href="<?php the_permalink(); ?>">
                <span>
                  <time><?php the_time( 'Y/m/d' ); ?></time><span class="cat"><?php $cats = get_the_category(); echo $cats[0]->cat_name; ?></span>
                </span>
                <h3><?php the_title(); ?></h3>
                <div class="p-news__listContent">
                  <?php the_content(); ?>
                </div>
              </a>
            </li>
            <?php endwhile; ?>
          </ul>
          <?php else:?>
          <p>まだ投稿がありません。</p>
          <?php endif; ?>
          <div class="pagenation">
            <?php
if ($news_query->max_num_pages > 1) {
    echo paginate_links(array(
        // 'base' => get_pagenum_link(1) . '%_%',
        'format' => 'page/%#%/',
        'current' => max(1, $paged),
        'mid_size' => 1,
        'total' => $news_query->max_num_pages,
       'prev_text' => '<i class="fa fa-caret-left"></i>',
       'next_text' => '<i class="fa fa-caret-right"></i>'

    ));
}
wp_reset_postdata();?>

          </div>


        </div>
      </div>
    </section>
    <!-- /.l-under -->
  </div>
  <!-- /.l-contents -->
</main>

<?php get_footer(); ?>