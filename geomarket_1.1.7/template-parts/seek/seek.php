    <!-- url取得 -->
    <?php $url = (empty($_SERVER['HTTPS']) ? 'http://' : 'https://') . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>


    <?php //class="c-seek" 開始タグ分岐 ?>
      <?php if (is_home() || is_front_page()) : ?>
      <div class="c-seek" class="c-seek -under">
      <?php else : ?>
      <div class="c-seek -under <?php echo (strpos($url, 'rental') !== false) ? "ohter-section" : '' ?>">
      <?php endif; ?>
    <?php //class="c-seek" 開始タグ分岐 ?>

      <?php //div 開始タグ分岐 ?>
        <?php if (strpos($url, 'rental') !== false) : ?>
        <div class="l-container">
        <?php endif; ?>
      <?php //div 開始タグ分岐 ?>

      <div class="l-spacer -sizeS">
        <?php //クラス書き出し
          $brands = 'topcon|sokkia|pentax|leica|nikon|trimble|ti-asahi|other|keyword|meta_value_num';
          $isCloseClass = (strpos($url, $brands) !== false) ? 'is-close' : '';
        ?>

        <?php //見出し分岐 ?>
          <?php //レンタルではない時 ?>
          <?php if (strpos($url, 'rental') === false) : ?>
          <h3 class="c-heading -sub <?php echo $isCloseClass; ?>">
            詳細検索<i></i>
          </h3>
          <?php //レンタルの時 ?>
          <?php else : ?>
          <h2 class="c-heading -main -seek -line">
            レンタル機器を探す
          </h2>
          <?php endif; ?>
        <?php //見出し分岐 ?>

        <?php //カテゴリ検索 ?>
        <div class="c-seek__innerWrap <?php echo $isCloseClass; ?>">
          <dl class="c-seek__content -top">
            <?php //レンタルの時 ?>
            <?php if (strpos($url, 'rental') !== false) : ?>
            <dt class="c-seek__content-title">カテゴリ検索</dt>
            <dd class="c-seek__content-block -blockB">
              <?php //クエリ
                $args = array(
                'post_type' => 'buy',
                );
                $news_query = new WP_Query($args);
              ?>
              <?php //取得ターム分岐
                if (strpos($url, 'rental') !== false):
                $tax_name = 'rental-cat';
                else : 
                $tax_name = 'keyword';
                endif; 
                $terms = get_terms($tax_name); 
              ?>
              <ul class="<?php echo (strpos($url, 'rental') === false) ? 'c-seek__word-list' : 'c-seek__word-list-rental'; ?>">
                <?php foreach ($terms as $term) : ?>
                  <li class="c-seek__word-item">
                    <a href="<?php echo get_term_link($term->slug, $tax_name) ?>#seek__resultText">
                      <span><?php echo $term->name ?></span>
                    </a>
                  </li>
                <?php endforeach; ?>
              </ul>
            </dd>
            <?php //レンタルではない時 ?>
            <?php else : ?>
            <?php get_template_part('/template-parts/seek/parts/maker'); ?>
            <?php endif; ?>
          </dl>
          <div class="c-seek__inner">
            <dl class="c-seek__content -bottom">
              <?php if (strpos($url, 'rental') !== false) : ?>
                <?php //メーカーボタン ?>
                <?php get_template_part('/template-parts/seek/parts/maker'); ?>
              <?php else : ?>
                <?php //キーワード検索 ?>
                <?php get_template_part('/template-parts/seek/parts/cat'); ?>
              <?php endif; ?>
            </dl>
          </div>
        </div>

      </div>

      <?php //div 終了タグ分岐 ?>
        <?php if (strpos($url, 'rental') !== false) : ?>
        </div>
        <?php endif; ?>
      <?php //div 終了タグ分岐 ?>

    </div class="c-seek">

    <?php //クエリ取得  ?>
        <?php //トプコン
        if (strpos($url, 'topcon') !== false)
          $args =  array(
            'post_type' => 'buy', //カスタム投稿タイプ
            'meta_query' => array(
              array(
                'key'     => 'maker',
                'value' => $_GET['meta_value'] ? $_GET['meta_value'] : 'topcon',
              ),
            ),
          );
        $news_query = new WP_Query($args);
        ?>
        <?php //トプコン-レンタル
        if (strpos($url, 'rental/topcon') !== false)
          $args =  array(
            'post_type' => 'rental',
            'meta_query' => array(
              array(
                'key' => 'maker',  // カスタムフィールド（メタキー）の名前
                'value' => 'topcon',
                'compare' => '=',  // 比較演算子
              ),
            ),
          );
        $news_query = new WP_Query($args);
        ?>

        <?php //ソキア
        if (strpos($url, 'sokkia') !== false)
          $args =  array(
            'post_type' => 'buy', //カスタム投稿タイプ
            'meta_query' => array(
              array(
                'key'     => 'maker',
                'value'   => $_GET['meta_value'] ? $_GET['meta_value'] : 'sokkia',
              ),
            ),
          );
        $news_query = new WP_Query($args);
        ?>
        <?php //ソキア-レンタル
        if (strpos($url, 'rental/sokkia') !== false)
          $args =  array(
            'post_type' => 'rental',
            'meta_query' => array(
              array(
                'key' => 'maker',  // カスタムフィールド（メタキー）の名前
                'value' => 'sokkia',
                'compare' => '=',  // 比較演算子
              ),
            ),
          );
        $news_query = new WP_Query($args);
        ?>

        <?php //ペンタックス
        if (strpos($url, 'pentax') !== false)
          $args =  array(
            'post_type' => 'buy', //カスタム投稿タイプ
            'meta_query' => array(
              array(
                'key'     => 'maker',
                'value'   => $_GET['meta_value'] ? $_GET['meta_value'] : 'pentax',
              ),
            ),
          );
        $news_query = new WP_Query($args);
        ?>
        <?php //ペンタックス-レンタル
        if (strpos($url, 'rental/pentax') !== false)
          $args =  array(
            'post_type' => 'rental',
            'meta_query' => array(
              array(
                'key' => 'maker',  // カスタムフィールド（メタキー）の名前
                'value' => 'pentax',
                'compare' => '=',  // 比較演算子
              ),
            ),
          );
        $news_query = new WP_Query($args);
        ?>

        <?php //ニコン
        if (strpos($url, 'nikon') !== false)
          $args =  array(
            'post_type' => 'buy', //カスタム投稿タイプ
            'meta_query' => array(
              array(
                'key'     => 'maker',
                'value'   => $_GET['meta_value'] ? $_GET['meta_value'] : 'nikon',
              ),
            ),
          );
        $news_query = new WP_Query($args);
        ?>
        <?php //ニコン-レンタル
        if (strpos($url, 'rental/nikon') !== false)
          $args =  array(
            'post_type' => 'rental',
            'meta_query' => array(
              array(
                'key' => 'maker',  // カスタムフィールド（メタキー）の名前
                'value' => 'nikon',
                'compare' => '=',  // 比較演算子
              ),
            ),
          );
        $news_query = new WP_Query($args);
        ?>

        <?php //ニコントリンブル
        if (strpos($url, 'trimble') !== false)
          $args =  array(
            'post_type' => 'buy', //カスタム投稿タイプ
            'meta_query' => array(
              array(
                'key'     => 'maker',
                'value'   => $_GET['meta_value'] ? $_GET['meta_value'] : 'trimble',
              ),
            ),
          );
        $news_query = new WP_Query($args);
        ?>
        <?php //ニコントリンブル-レンタル
        if (strpos($url, 'rental/trimble') !== false)
          $args =  array(
            'post_type' => 'rental',
            'meta_query' => array(
              array(
                'key' => 'maker',  // カスタムフィールド（メタキー）の名前
                'value' => 'trimble',
                'compare' => '=',  // 比較演算子
              ),
            ),
          );
        $news_query = new WP_Query($args);
        ?>

        <?php //ライカジオシステムズ
        if (strpos($url, 'leica') !== false)
          $args =  array(
            'post_type' => 'buy', //カスタム投稿タイプ
            'meta_query' => array(
              array(
                'key'     => 'maker',
                'value'   => $_GET['meta_value'] ? $_GET['meta_value'] : 'leica',
              ),
            ),
          );
        $news_query = new WP_Query($args);
        ?>
        <?php //ライカジオシステムズ-レンタル
        if (strpos($url, 'rental/leica') !== false)
          $args =  array(
            'post_type' => 'rental',
            'meta_query' => array(
              array(
                'key' => 'maker',  // カスタムフィールド（メタキー）の名前
                'value' => 'leica',
                'compare' => '=',  // 比較演算子
              ),
            ),
          );
        $news_query = new WP_Query($args);
        ?>

        <?php //TIアサヒ
        if (strpos($url, 'ti-asahi') !== false)
          $args =  array(
            'post_type' => 'buy', //カスタム投稿タイプ
            'meta_query' => array(
              array(
                'key'     => 'maker',
                'value'   => $_GET['meta_value'] ? $_GET['meta_value'] : 'ti-asahi',
              ),
            ),
          );
        $news_query = new WP_Query($args);
        ?>
        <?php //TIアサヒ-レンタル
        if (strpos($url, 'rental/ti-asahi') !== false)
          $args =  array(
            'post_type' => 'rental',
            'meta_query' => array(
              array(
                'key' => 'maker',  // カスタムフィールド（メタキー）の名前
                'value' => 'ti-asahi',
                'compare' => '=',  // 比較演算子
              ),
            ),
          );
        $news_query = new WP_Query($args);
        ?>

        <?php //その他
        if (strpos($url, 'other') !== false)
          $args =  array(
            'post_type' => 'buy', //カスタム投稿タイプ
            'meta_query' => array(
              array(
                'key'     => 'maker',
                'value'   => $_GET['meta_value'] ? $_GET['meta_value'] : 'other',
              ),
            ),
          );
        $news_query = new WP_Query($args);
        ?>
        <?php //その他-レンタル
        if (strpos($url, 'rental/other') !== false)
          $args =  array(
            'post_type' => 'rental',
            'meta_query' => array(
              array(
                'key' => 'maker',  // カスタムフィールド（メタキー）の名前
                'value' => 'other',
                'compare' => '=',  // 比較演算子
              ),
            ),
          );
          $news_query = new WP_Query($args);
        ?>

        <?php //料金別ページ
        if (strpos($url, '?filter') !== false)
          // URLパラメータからフィルターを取得
          $filter = isset($_GET['filter']) ? $_GET['filter'] : 'fill01';
          // フィルターに応じて価格範囲を設定
          switch ($filter) {
              case 'fill01':
                  $min_price = 1000;
                  $max_price = 299999;
                  break;
              case 'fill02':
                  $min_price = 300000;
                  $max_price = 499999;
                  break;
              case 'fill03':
                  $min_price = 500000;
                  $max_price = 799999;
                  break;
              case 'fill04':
                  $min_price = 800000;
                  $max_price = 999999;
                  break;
              case 'fill05':
                  $min_price = 1000000;
                  $max_price = 99999999999;
                  break;
              // 他のフィルター条件を追加
              default:
                  $min_price = 0;
                  $max_price = 299999;
                  break;
          }
          $args = array(
            'post_type' => 'buy', //カスタム投稿タイプ
            'meta_query' => array(
              'relation' => 'OR',
              array(
                'key' => 'cam_price',
                'value' => array($min_price, $max_price),
                'compare' => 'BETWEEN',
                'type' => 'NUMERIC'
              ),
              array(
                'key' => 'nomal_price',
                'value' => array($min_price, $max_price),
                'compare' => 'BETWEEN',
                'type' => 'NUMERIC'
              )
            )
          );
          $price_query = new WP_Query($args);
        ?>



    <?php //クエリ取得  ?>

    <?php // タクソノミースラッグ取得
      error_reporting(0);
      $taxonomy = $wp_query->get_queried_object();
      $taxonomy_name = $taxonomy->name;
    ?>

    <?php //フィルター後の件数表示  ?>
        <?php // urlにkeywordがある場合
        if (strpos($url, 'keyword') !== false) : 
        ?>
          <?php
          $args = array(
            'post_type' => 'buy', //カスタム投稿タイプ
            'tax_query' => array(
              array(
                'taxonomy' => 'keyword', //タクソノミー名を指定
                'terms' =>  $taxonomy_name, //取得したタームが入る ,//タームを指定
              )
            )
          );
          $tax_query = new WP_Query($args);
          ?>
          <p class="c-seek__resultText" id="seek__resultText">
            <span><span class="color"><?php echo $wp_query->found_posts; ?>件</span>の<?php echo $taxonomy_name; ?>が見つかりました。</span>
          </p>
        <?php endif; ?>


        <?php  // urlにrental-catがある場合
        if (strpos($url, 'rental-cat') !== false) :
        ?>
          <?php
          // タクソノミースラッグ取得
          $args =  array(
            'post_type' => 'rental', //カスタム投稿タイプ
            'tax_query' => array(
              array(
                'taxonomy' => 'rental-cat', //タクソノミー名を指定
                'field' => 'slug',
                'terms' =>  $taxonomy_name, //取得したタームが入る ,//タームを指定

              )
            )
          );
          $tax_query = new WP_Query($args);
          ?>
          <div class="l-container">
            <p class="c-seek__resultText" id="seek__resultText">
              <span><span class="color"><?php echo $wp_query->found_posts; ?>件</span>の<?php echo $taxonomy_name; ?>が見つかりました。</span>
            </p>
          </div>
          <!-- /.l-container -->

        <?php endif; ?>


        <?php //urlにトプコンがある場合
        if (strpos($url, 'buy/topcon') !== false) :
        ?>
          <p class="c-seek__resultText" id="seek__resultText">
            <span><span class="color"><?php echo $news_query->found_posts; ?>件</span>のトプコンが見つかりました。</span>
          </p>
        <?php endif; ?>


        <?php if (strpos($url, 'rental/topcon') !== false) : ?>
          <div class="l-container">
            <p class="c-seek__resultText" id="seek__resultText">
              <span><span class="color"><?php echo $news_query->found_posts; ?>件</span>のトプコンが見つかりました。</span>
            </p>
          </div>
          <!-- /.l-container -->
        <?php endif; ?>


        <?php
        // urlにペンタックスがある場合
        if (strpos($url, 'buy/pentax') !== false) :
        ?>
          <p class="c-seek__resultText" id="seek__resultText">
            <span><span class="color"><?php echo $news_query->found_posts; ?>件</span>のペンタックスが見つかりました。</span>
          </p>
        <?php endif; ?>

        <?php if (strpos($url, 'rental/pentax') !== false) : ?>
          <div class="l-container">
            <p class="c-seek__resultText" id="seek__resultText">
              <span><span class="color"><?php echo $news_query->found_posts; ?>件</span>のペンタックスが見つかりました。</span>
            </p>
          </div>
          <!-- /.l-container -->
        <?php endif; ?>


        <?php
        //urlにソキアがある場合
        if (strpos($url, 'buy/sokkia') !== false) :
        ?>
          <p class="c-seek__resultText" id="seek__resultText">
            <span><span class="color"><?php echo $news_query->found_posts; ?>件</span>のソキアが見つかりました。</span>
          </p>
        <?php endif; ?>


        <?php if (strpos($url, 'rental/sokkia') !== false) : ?>
          <div class="l-container">
            <p class="c-seek__resultText" id="seek__resultText">
              <span><span class="color"><?php echo $news_query->found_posts; ?>件</span>のソキアが見つかりました。</span>
            </p>
          </div>
          <!-- /.l-container -->
        <?php endif; ?>


        <?php
        // urlにライカジオシステムズがある場合
        if (strpos($url, 'buy/leica') !== false) :
        ?>
          <p class="c-seek__resultText" id="seek__resultText">
            <span><span class="color"><?php echo $news_query->found_posts; ?>件</span>のライカジオシステムズが見つかりました。</span>
          </p>
        <?php endif; ?>

        <?php if (strpos($url, 'rental/leica') !== false) : ?>
          <div class="l-container">
            <p class="c-seek__resultText" id="seek__resultText">
              <span><span class="color"><?php echo $news_query->found_posts; ?>件</span>のライカジオシステムズが見つかりました。</span>
            </p>
          </div>
          <!-- /.l-container -->
        <?php endif; ?>


        <?php
        // urlにニコンがある場合
        if (strpos($url, 'buy/nikon') !== false) :
        ?>
          <p class="c-seek__resultText" id="seek__resultText">
            <span><span class="color"><?php echo $news_query->found_posts; ?>件</span>のニコンが見つかりました。</span>
          </p>
        <?php endif; ?>


        <?php if (strpos($url, 'rental/nikon') !== false) : ?>
          <div class="l-container">
            <p class="c-seek__resultText" id="seek__resultText">
              <span><span class="color"><?php echo $news_query->found_posts; ?>件</span>のニコンが見つかりました。</span>
            </p>
          </div>
          <!-- /.l-container -->
        <?php endif; ?>


        <?php
        // urlにトリンブルがある場合
        if (strpos($url, 'buy/trimble') !== false) : ?>
          <p class="c-seek__resultText" id="seek__resultText">
            <span><span class="color"><?php echo $news_query->found_posts; ?>件</span>のニコントリンブルが見つかりました。</span>
          </p>
        <?php endif; ?>

        <?php if (strpos($url, 'rental/trimble') !== false) : ?>
          <div class="l-container">
            <p class="c-seek__resultText" id="seek__resultText">
              <span><span class="color"><?php echo $news_query->found_posts; ?>件</span>のニコントリンブルが見つかりました。</span>
            </p>
          </div>
          <!-- /.l-container -->
        <?php endif; ?>


        <?php
        // urlにti - asahiがある場合
        if (strpos($url, 'buy/ti-asahi') !== false) :
        ?>
          <p class="c-seek__resultText" id="seek__resultText">
            <span><span class="color"><?php echo $news_query->found_posts; ?>件</span>のTIアサヒが見つかりました。</span>
          </p>
        <?php endif; ?>

        <?php if (strpos($url, 'rental/ti-asahi') !== false) : ?>
          <div class="l-container">
            <p class="c-seek__resultText" id="seek__resultText">
              <span><span class="color"><?php echo $news_query->found_posts; ?>件</span>のTIアサヒが見つかりました。</span>
            </p>
          </div>
          <!-- /.l-container -->
        <?php endif; ?>


        <?php
        // urlにその他の機器がある場合
        if (strpos($url, 'buy/other') !== false) : ?>
          <p class="c-seek__resultText" id="seek__resultText">
            <span><span class="color"><?php echo $news_query->found_posts; ?>件</span>のその他の機器が見つかりました。</span>
          </p>
        <?php endif; ?>

        <?php if (strpos($url, 'rental/other') !== false) : ?>
          <div class="l-container">
            <p class="c-seek__resultText" id="seek__resultText">
              <span><span class="color"><?php echo $news_query->found_posts; ?>件</span>のその他の機器が見つかりました。</span>
            </p>
          </div>
          <!-- /.l-container -->
        <?php endif; ?>


        <!-- urlに?s=がある場合（検索） -->
        <?php
        $total_results = $wp_query->found_posts; //該当件数を取得
        $search_query = get_search_query(); //検索キーワードを取得
        if (strpos($url, '?s=') !== false) :  ?>


          <p class="c-seek__resultText" id="seek__resultText">
            <span><span class="color"><?php echo $wp_query->found_posts; ?>件</span>の<?php echo $search_query; ?>が見つかりました。</span>
          </p>
        <?php endif; ?>


        <!-- urlに??filterがある場合（料金別） -->
        <?php
         // URLパラメータからフィルターを取得
          $filter = isset($_GET['filter']) ? $_GET['filter'] : 'fill01';
          // フィルターに応じて価格範囲を設定
          switch ($filter) {
              case 'fill01':
                  $price_fll = "30万円未満の機器";
                  break;
              case 'fill02':
                  $price_fll = "30～50万円の機器";
                  break;
              case 'fill03':
                  $price_fll = "50～80万円の機器";
                  break;
              case 'fill04':
                  $price_fll = "80～100万円の機器";
                  break;
              case 'fill05':
                  $price_fll =  "100万円以上の機器";
                  break;
              // 他のフィルター条件を追加
              default:
                  $price_fll = "";
                  break;
          } ;


        if (strpos($url, '?filter') !== false) :  ?>
          <p class="c-seek__resultText" id="seek__resultText">
            <span><span class="color"><?php echo $price_query->found_posts; ?>件</span>の<?php echo $price_fll; ?>が見つかりました。</span>
          </p>
        <?php endif; ?>


        <?php // urlにindustryがある場合
        if (strpos($url, 'industry') !== false) : 
        ?>
          <?php
          $args = array(
            'post_type' => 'buy', //カスタム投稿タイプ
            'tax_query' => array(
              array(
                'taxonomy' => 'industry', //タクソノミー名を指定
                'terms' =>  $taxonomy_name, //取得したタームが入る ,//タームを指定
              )
            )
          );
          $tax_query = new WP_Query($args);
          ?>
          <p class="c-seek__resultText" id="seek__resultText">
            <span><span class="color"><?php echo $wp_query->found_posts; ?>件</span>の<?php echo $taxonomy_name; ?>におすすめの機器が見つかりました。</span>
          </p>
        <?php endif; ?>


    <?php //フィルター後の件数表示  ?>