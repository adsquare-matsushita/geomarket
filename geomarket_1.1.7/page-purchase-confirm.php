<?php
/**
 * Template Name: 商品のご購入（確認）
 */
get_header();
?>
<main>
  <div class="l-contents">
    <section class="l-under -contact">
      <div class="l-container">


        <!-- 測量機器を探すのお問い合わせ -->
        <div class="p-seek__contactContent">
          <h2 class="c-heading -main">商品のご購入</h2>
          <p class="p-contact__description">
              入力内容をご確認のうえ、「送信する」ボタンを押してください。
        </p>
          <div class="p-single__under-item">

            <?php
                $args =  array (
                  'post_type' => 'buy',
                  'posts_per_page' => 1, // 表示件数
                  //  'p' => $post_id,
                );
              $news_query = new WP_Query($args);
              ?>
            <figure>
              <img src="<?php the_field('main_image', $_GET['post_id']) ?>" alt="">
            </figure>


            <div class="p-single__under-itemDetail">
              <?php $title = get_the_title($_GET['post_id']); ?>

              <h3 class="c-heading -singleBuy"><?php echo $title ?></h3>

              <div class="p-single__under-itemDetailInner">
                <dl>
                  <dt>商品コード</dt>
                  <dd><?php the_field('code',$_GET['post_id']); ?></dd>
                </dl>
                <dl>
                  <dt>機種モデル</dt>
                  <dd><?php the_field('model',$_GET['post_id']); ?></dd>
                </dl>

                <dl>
                  <dt>メーカー</dt>
                  <dd> <?php
                      $maker = get_field('maker', $_GET['post_id']); ?>
                    <?php  if( $maker == 'topcon' ): ?>
                    <?php echo"TOPCON" ?>
                    <?php elseif( $maker == 'sokkia' ): ?>
                    <?php echo"SOKKIA" ?>
                    <?php elseif( $maker == 'leica' ): ?>
                    <?php echo"Leica Geosystems" ?>
                    <?php elseif( $maker == 'pentax' ): ?>
                    <?php echo"PENTAX" ?>
                    <?php elseif( $maker == 'nikon' ): ?>
                    <?php echo"NIKON" ?>
                    <?php elseif( $maker == 'ti' ): ?>
                    <?php echo"TIアサヒ" ?>
                    <?php elseif( $maker == 'other' ): ?>
                    <?php echo"その他" ?>
                    <?php endif; ?></dd>
                </dl>
                <dl>
                  <dt>商品価格</dt>

                  <?php
                    // vars
                    $category = get_field('select_price', $_GET['post_id']);
                    ?>
                  <dd>
                    <?php if(get_field('cam_price',$_GET['post_id'])):  ?>
                    <?php echo number_format(get_field("cam_price",$_GET['post_id'] )); ?>円(税込)
                    <?php else: ?>
                    <?php echo number_format(get_field("nomal_price",$_GET['post_id'] )); ?>円(税込)
                    <?php endif; ?>
                  </dd>
                </dl>
              </div>
            </div>

          </div>


          <div class="l-contents__box -grayLine">
            <div class="p-form">

              <!-- /.m_form_format -->
              <?php if( have_posts() ):
        while( have_posts() ):
        the_post(); ?>

              <?php remove_filter( 'the_content', 'wpautop' );
         the_content();
         ?>

              <?php endwhile;
        endif; ?>
              <!-- /.m_form_format -->


            </div>
          </div>
          <!-- /.l-contents__box -->
        </div>
        <!-- /  .l-container -->
    </section>
    <!-- /.l-under -->
  </div>
  <!-- /.l-contents -->
</main>

<?php get_footer(); ?>