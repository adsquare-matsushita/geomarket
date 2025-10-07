<?php

//タイトル・アイキャッチ画像・CSS・JSを読み込む
function my_theme_setup()
{
  //Titleタグ
  add_theme_support('title-tag');
  //アイキャッチ画像
  add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'my_theme_setup');

//スタイルの追加・スクリプトの追加
function my_theme_scripts()
{
  //CSS
  // ('分かりやすいハンドル名','読み込みたいcssファイルまでのパス')
  wp_enqueue_style('google-font3', 'https://fonts.googleapis.com/css?family=Barlow:wght@300;400;500;700;800|family=Noto+Sans+JP:wght@400;500;700&display=swap');
  wp_enqueue_style('swiper', get_theme_file_uri() . '/assets/css/swiper-bundle.min.css');
  wp_enqueue_style('my-theme-styleA', get_theme_file_uri() . '/assets/css/common.css');
  wp_enqueue_style('my-theme-styleB', get_theme_file_uri() . '/assets/css/maintenance.css');
  wp_enqueue_style('my-theme-styleC', get_theme_file_uri() . '/assets/css/page.css');

  //JS
  // ('分かりやすいハンドル名','読み込みたいjsファイルまでのパス')
  //日付ピッカーをjqeryより先に読み込む
  wp_enqueue_script('jquery-ui-datepicker');
  wp_enqueue_script('my_theme-jquery', 'https://code.jquery.com/jquery-1.12.4.min.js', ['jquery'], '1.12.4', true);
  wp_enqueue_script('my_theme-swiper', get_theme_file_uri() . '/assets/js/swiper-bundle.min.js');
  wp_enqueue_script('my_theme-ajaxzip3', get_theme_file_uri() . 'assets/js/ajaxzip3.js', array(), '0.51', true);
  wp_enqueue_script('my_theme-script', get_theme_file_uri() . '/assets/js/app.js', ['jquery'], '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'my_theme_scripts');

//Applying CSS for the admin panel
function admin_load_style()
{
  wp_register_style('custom_wp_admin_css', get_stylesheet_directory_uri() . '/assets/css/admin-style.css', false, '1.0.0');
  wp_enqueue_style('custom_wp_admin_css');
}
add_action('admin_enqueue_scripts', 'admin_load_style');


add_action(
  'wp_body_open',
  function () {
?>
  <noscript>
    <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-P9KRL5L" height="0" width="0" style="display:none;visibility:hidden"></iframe>
  </noscript>
<?php
  }
);

// pre_get_postsを使ってcategory.phpの投稿を設定
function custom_pagination($query)
{
  if ($query->is_category()) {
    $query->set('posts_per_page', 5);
    $query->set('paged', get_query_var('paged') ? get_query_var('paged') : 1);
  }
}
add_action('pre_get_posts', 'custom_pagination');

// 検索フォームでカスタム投稿の検索機能追加
add_filter('template_include', 'custom_search_template');
function custom_search_template($template)
{
  if (is_search()) {
    $post_types = get_query_var('post_type');
    foreach ((array) $post_types as $post_type)
      $templates[] = "search-{$post_type}.php";
    $templates[] = 'search.php';
    $template = get_query_template('search', $templates);
  }
  return $template;
}


// ◯件中◯件表示
function my_result_count()
{
  global $news_query;
  $paged = get_query_var('paged') - 1; //2ページ目  ページ数-1 *10
  $ppp   = get_query_var('posts_per_page'); // 表示件数10?
  $count = $total = $news_query->post_count; //posts_per_page(表示)の件数
  $from  = 0;
  if (0 < $ppp) { //もし表示件数が0以上の場合
    $total = $news_query->found_posts; //投稿した記事の件数
    if (0 < $paged) //もし表示件数が0以上の場合
      $from  = $paged * 15; //15はposts_per_pageと合わせる
  }
  printf(
    '<span><em>%1$s</em>件中 %2$s%3$s件を表示</span>',
    $total,
    (1 < $count ? ($from + 1 . '〜') : ''),
    ($from + $count)
  );
}

function my_result_count2()
{
  global  $wp_query;
  $paged = get_query_var('paged') - 1; //2ページ目  ページ数-1 *10
  $ppp   = get_query_var('posts_per_page'); // 表示件数10?
  $count = $total =  $wp_query->post_count; //posts_per_page(表示)の件数
  $from  = 0;
  if (0 < $ppp) { //もし表示件数が0以上の場合
    $total =  $wp_query->found_posts; //投稿した記事の件数
    if (0 < $paged) //もし表示件数が0以上の場合
      $from  = $paged * 15;
  }
  printf(
    '<span><em>%1$s</em>件中 %2$s%3$s件を表示</span>',
    $total,
    (1 < $count ? ($from + 1 . '〜') : ''),
    ($from + $count)
  );
}


function my_result_count3()
{
  global  $tax_query;
  $paged = get_query_var('paged') - 1; //2ページ目  ページ数-1 *10
  $ppp   = get_query_var('posts_per_page'); // 表示件数10?
  $count = $total =  $tax_query->post_count; //posts_per_page(表示)の件数
  $from  = 0;
  if (0 < $ppp) { //もし表示件数が0以上の場合
    $total =  $tax_query->found_posts; //投稿した記事の件数
    if (0 < $paged) //もし表示件数が0以上の場合
      $from  = $paged * 15;
  }
  printf(
    '<span><em>%1$s</em>件中 %2$s%3$s件を表示</span>',
    $total,
    (1 < $count ? ($from + 1 . '〜') : ''),
    ($from + $count)
  );
}






//お問い合わせフォーム


// 日付のフォーマットを指定
function preset_cf7_field_values($posted_data)
{
  if (isset($_GET['post_id']) && !empty($_GET['post_id']) && !is_array($_GET['post_id'])) {
    // 日付のフォーマットを指定
    $date = get_the_date('Y年m月d日', $_GET['post_id']);

    // フィールド名を 'date' に設定
    $posted_data['date'] = $date;
  }
  return $posted_data;
}
add_filter('wpcf7_posted_data', 'preset_cf7_field_values');
// 日付のフォーマットを指定

// < inputmode の追加 >
function my_do_shortcode_tag_tel($output, $tag, $attr, $m)
{
  if ($tag == 'mwform_text' && $attr['name'] == 'phone_number') {
    $output = rtrim(substr($output, 0, -3)) . ' inputmode="tel" />' . "\n";
  }
  return $output;
}
add_filter('do_shortcode_tag', 'my_do_shortcode_tag_tel', 10, 4);
// < inputmode の追加 >


// < 選択肢の初期値を設定する >
function custom_query_vars($public_query_vars)
{
  $public_query_vars[] = 'option_id';
  return $public_query_vars;
}
add_filter('query_vars', 'custom_query_vars');

// < 選択肢の初期値を設定する >

// < validation >

add_filter('wpcf7_validate_text', 'custom_validation', 10, 2);
add_filter('wpcf7_validate_text*', 'custom_validation', 10, 2);
add_filter('wpcf7_validate_email', 'custom_validation', 10, 2);
add_filter('wpcf7_validate_email*', 'custom_validation', 10, 2);
add_filter('wpcf7_validate_checkbox', 'custom_validation', 10, 2);
add_filter('wpcf7_validate_radio', 'custom_validation', 10, 2);
add_filter('wpcf7_validate_select', 'custom_validation', 10, 2);
add_filter('wpcf7_validate_select*', 'custom_validation', 10, 2);
add_filter('wpcf7_validate_date', 'custom_validation', 10, 2);
add_filter('wpcf7_validate_date*', 'custom_validation', 10, 2);
add_filter('wpcf7_validate_tel', 'custom_validation', 10, 2);
add_filter('wpcf7_validate_tel*', 'custom_validation', 10, 2);


function custom_validation($result, $tag)
{
  $name = $tag->name;
  $validation_messages = array(
    'your-know' => '※「当サイトを知ったきっかけ」は必ず入力してください。',
    'your-quantity' => '※「数量」は必ず入力してください。',
    'your-day' => '※「日数」は必ず入力してください。',
    'your-name' => '※「お名前」は必ず入力してください。',
    'your-kana' => '※「ふりがな」は必ず入力してください。',
    'zip' => '※「郵便番号」は必ず入力してください。',
    'pref' => '※「都道府県」は必ず入力してください。',
    'city' => '※「ご住所」は必ず入力してください。',
    'your-tel' => '※「お電話番号」は必ず入力してください。',
    'your-email' => '※「メールアドレス」は必ず入力してください。',
    'your-email-confirm' => '※「確認用メールアドレス」は必ず入力してください。',
    'check' => '※各規約に同意の上、チェックをしてください。',
    'radio' => '※「ご希望のご連絡方法」は必ず選択してください。',
    'your-model' => '※「機種名」は必ず入力してください。',
  );

  if (array_key_exists($name, $validation_messages) && empty($_POST[$name])) {
    $result->invalidate($tag, $validation_messages[$name]);
  }

  if ($name == 'your-image') {
    if (isset($_FILES['your-image']) && $_FILES['your-image']['size'] > 10240000) {
      $result->invalidate($tag, "添付のファイルサイズが10MBを超えています。お手数ですが、ファイルサイズを縮小いただき添付し直してください。なお、ファイルサイズが10MB以下となるようご注意ください。");
    }
  }

  // チェックボックスと期間フィールドのバリデーション
  $checkbox = isset($_POST['checkperiod']) ? true : false;
  $period01 = isset($_POST['your-period01']) ? sanitize_text_field($_POST['your-period01']) : '';
  $period02 = isset($_POST['your-period02']) ? sanitize_text_field($_POST['your-period02']) : '';
  if (empty($period01) || empty($period02)) {
    if (!$checkbox) {
      $result->invalidate('checkperiod', __('※「レンタル期間が未定の場合はチェックを入れてください。」', 'textdomain'));
    }
  } elseif ($name == 'checkperiod') {
  }

  // 日本語限定
  if ($name === 'your-name') {
    // フィールドの値を取得
    $value = isset($_POST[$name]) ? $_POST[$name] : '';
    // 改行とスペースを削除
    $sanitized_value = str_replace(array(PHP_EOL, ' '), '', $value);
    // サニタイズされた値を正規表現でチェック
    if (!empty($sanitized_value)) {
      if (!preg_match('/^[ぁ-んァ-ンー一-龠々ー\s]+$/u', $sanitized_value)) {
        $result->invalidate($tag, '※日本語で入力してください。（スペースを含めても可）');
      }
    }
  }

  // 平仮名とスペースのみ許可
  if ($name === 'your-kana') {
    $value = isset($_POST[$name]) ? $_POST[$name] : '';
    // 改行とスペース以外を削除
    $sanitized_value = str_replace(array(PHP_EOL, ' '), '', $value);
    // サニタイズされた値を正規表現でチェック
    if (!empty($sanitized_value)) {
      if (!preg_match('/^[ぁ-ん\s]+$/u', $sanitized_value)) {
        $result->invalidate($tag, '※ひらがなで入力してください。（スペースを含めても可）');
      }
    }
  }



  //機種選択
  if ($name == 'your-machine') {
    $value = isset($_POST[$name]) ? $_POST[$name] : '';

    if ($value == '選択してください') {
      $result->invalidate($tag, "※機器名を選択してください。");
    }
  }


  // contact-list フィールドのバリデーション
  $validation_messages = array(
    'contact-list' => '※「お問い合わせ項目」は必ず選択してください。',
    // 他のフィールドのエラーメッセージもここに追加できます
  );
  if ($name === 'contact-list' && $_POST['contact-list'] === '未選択') {
    $result->invalidate($tag, $validation_messages[$name]);
  }


  // radio フィールドのバリデーション
  $validation_messages = array(
    'radio' => '※「ご希望のご連絡方法」は必ず選択してください。',
    // 他のフィールドのエラーメッセージもここに追加できます
  );
  if ($name === 'radio' && $_POST['radio'] === '未選択') {
    $result->invalidate($tag, $validation_messages[$name]);
  }



  return $result;
}


// < /validation >


// ページ遷移時のリダイレクトを阻止する ページネーション

function my_disable_redirect_canonical($redirect_url)
{

  if (is_single()) {
    $subject = $redirect_url;
    $pattern = '/\/page\//'; // URLに「/page/」があるかチェック
    preg_match($pattern, $subject, $matches);

    if ($matches) {
      //リクエストURLに「/page/」があれば、リダイレクトしない。
      $redirect_url = false;
      return $redirect_url;
    }
  }
}
add_filter('redirect_canonical', 'my_disable_redirect_canonical');

function my_disable_redirect_canonical2($redirect_url)
{

  if (is_archive()) {
    $subject = $redirect_url;
    $pattern = '//page//'; // URLに「/page/」があるかチェック
    preg_match($pattern, $subject, $matches);

    if ($matches) {
      //リクエストURLに「/page/」があれば、リダイレクトしない。
      $redirect_url = false;
      return $redirect_url;
    }
  }
}
add_filter('redirect_canonical2', 'my_disable_redirect_canonical2');

// * 【測量機器を探す】ソート価格の自動入力
function default_taxonomy_select()
{
  echo '
    <script>
      jQuery(function($){
        $("input#acf-field_622b5827a55af").prop("readonly", true);

        $("input#acf-field_62167556d2383, input#acf-field_6216753dd2382").change(function() {
          var $priceNormal = null;
          var $priceCampaign = null;

          var $priceCampaign = Number( $("input#acf-field_62167556d2383").val() );
          var $priceNormal = Number( $("input#acf-field_6216753dd2382").val() );

          if( $priceCampaign != 0 ){
            $("input#acf-field_622b5827a55af").val($priceCampaign);
          }else{
            $("input#acf-field_622b5827a55af").val($priceNormal);
          }
        });
      });
    </script>
    ';
}
add_action('admin_print_footer_scripts', 'default_taxonomy_select');

// ページ遷移時のリダイレクトを阻止する ページネーション




// マイナーアップデートの自動更新を停止
add_action('init', function () {
  error_reporting(0);
  ini_set('display_errors', 0);
});
add_filter('allow_minor_auto_core_updates', '__return_false');
// マイナーアップデートの自動更新を停止

// 記事内の1枚目の画像をアイキャッチにする
function catch_that_image($post_id = NULL)
{
  if (!empty($post_id)) {
    $posts = get_post($post_id);
    $post_content = $posts->post_content;
  } else {
    global $post, $posts;
    $post_content = $post->post_content;
  }

  $first_img = '';
  ob_start();
  ob_end_clean();

  $output = preg_match_all('/<img.*?src=(["\'])(.+?)\1.*?>/i', $post_content, $matches);
  $first_img = $matches[2][0];

  if (empty($first_img)) {
    $first_img = '';
  }

  return $first_img;
}

//クラシックエディタの固定と選択できるタイプの除外
function disable_gutenberg_for_specific_post_types($use_block_editor, $post_type)
{
  // クラシックエディタを使用する投稿タイプを指定

  $classic_editor_post_types = array('buy', 'rental', 'page');
  // 'post' は通常の投稿、'custom_post_type' はカスタム投稿タイプのスラッグ

  if (in_array($post_type, $classic_editor_post_types)) {
    return false; // クラシックエディタを使用
  }

  return $use_block_editor; // その他はブロックエディタを使用
}
add_filter('use_block_editor_for_post_type', 'disable_gutenberg_for_specific_post_types', 10, 2);


function hide_editor_elements()
{
  global $typenow;
  $post_types = array('buy', 'rental', 'page');

  $delete_script = '<script defer>
    document.addEventListener("DOMContentLoaded", function() {
        var postStates = document.querySelectorAll(".post-state");
        postStates.forEach(function(postState) {
            if (postState.textContent.includes("旧エディター") || postState.textContent.includes("ブロックエディター")) {
                var dash = postState.previousSibling;
                if (dash && dash.nodeType === Node.TEXT_NODE && dash.textContent.includes("—")) {
                    dash.textContent = dash.textContent.replace("—", "");
                }
                postState.style.display = "none";
            }
        });

        var rowActions = document.querySelectorAll(".row-actions span");
        rowActions.forEach(function(action) {
            var link = action.querySelector("a");
            if (link && (link.textContent.includes("旧エディター") || link.textContent.includes("ブロックエディター"))) {
                action.style.display = "none";
            }
        });
    });
    </script>';
  if (in_array($typenow, $post_types)) {
    echo $delete_script;
  }

  //-----------------------------------------
  $link_chenge = '<script defer>
    document.addEventListener("DOMContentLoaded", function() {
        var rowTitles = document.querySelectorAll(".row-title");
        rowTitles.forEach(function(rowTitle) {
            var href = rowTitle.getAttribute("href");
            if (href.includes("classic-editor")) {
                rowTitle.setAttribute("href", href + "&classic-editor__forget");
            }
        });
    });
    </script>';
  $post_types02 = array('pickup', 'rental', 'page');
  if (in_array($typenow, $post_types02)) {
    echo $delete_script;
    echo $link_chenge;
  }
  global $pagenow;
  if ($pagenow === 'edit.php') {
    echo $delete_script;
    echo $link_chenge;
  }
}
add_action('admin_head', 'hide_editor_elements');




// Function to populate dropdown choices dynamically
  function populate_rental_dropdown()
  {
    $args = array(
      'post_type' => 'rental',
      'post_status' => 'publish', // Only get published posts
      'posts_per_page' => -1 // Retrieve all posts
    );
    $query = new WP_Query($args);

    $rental_options = array('' => '選択してください'); 

    if ($query->have_posts()) {
      while ($query->have_posts()) {
        $query->the_post();

        // Get post ID and either rental-name or post title, replace <br> with a space in title
        $post_id = get_the_ID();
        $rental_name = get_post_meta($post_id, 'rental-name', true);
        $post_title = str_replace('<br>', ' ', get_the_title());

        // Use rental-name if available, otherwise use post title
        $display_name = !empty($rental_name) ? $rental_name : $post_title;

        // Add to the rental list array
        $rental_options[$post_id] = $display_name;
      }
    }

    // Reset post data
    wp_reset_postdata();

    return $rental_options;
  }
// Add dynamic dropdown options to Contact Form 7
  add_filter('wpcf7_form_tag', 'custom_dropdown_rental_options', 10, 2);
  function custom_dropdown_rental_options($tag, $unused)
  {
    if ($tag['name'] != 'your-machine') {
      return $tag;
    }

    $rental_options = populate_rental_dropdown();

    $tag['raw_values'] = $rental_options;
    $tag['values'] = $rental_options;

    return $tag;
  }

?>