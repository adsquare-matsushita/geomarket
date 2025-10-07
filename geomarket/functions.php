<?php
/*======================================
  コンテンツ幅
======================================*/

// 必要な場合記述する
// if ( !isset( $content_width ) ) {
// $content_width = 776;
// }

/*======================================
初期設定
タイトル・アイキャッチ画像・CSS・JSを読み込む
======================================*/

function my_theme_setup() {
  /*
Titleタグ
----------------------------------- */
  add_theme_support('title-tag');
  /*
アイキャッチ画像
----------------------------------- */
  add_theme_support('post-thumbnails');

  // 画像サイズを追加
  // set_post_thumbnail_size('single_thumbnail_size',776, 549, true); // 投稿ページ用
  // add_image_size('thumbnail_size', 380, 240, true); // 投稿一覧用
  // add_image_size('thumbnail_size@2x', 400, 224, true); // 投稿一覧のレティーナ用

}
add_action('after_setup_theme', 'my_theme_setup');

/*======================================
スタイルの追加・スクリプトの追加
======================================*/
function my_theme_scripts() {
  /*
CSS
----------------------------------- */
  // ('分かりやすいハンドル名','読み込みたいcssファイルまでのパス')

  wp_enqueue_style('google-font3', 'https://fonts.googleapis.com/css?family=Barlow:wght@300;400;500;700;800|family=Noto+Sans+JP:wght@400;500;700&display=swap');
  wp_enqueue_style('swiper', get_theme_file_uri() . '/assets/css/swiper-bundle.min.css');
  wp_enqueue_style('my-theme-styleA', get_theme_file_uri() . '/assets/css/common.css');
  wp_enqueue_style('my-theme-styleB', get_theme_file_uri() . '/assets/css/maintenance.css');
  wp_enqueue_style('my-theme-styleC', get_theme_file_uri() . '/assets/css/page.css');



  /*
JS
----------------------------------- */
  // ('分かりやすいハンドル名','読み込みたいjsファイルまでのパス')

  //日付ピッカーをjqeryより先に読み込む
  wp_enqueue_script('jquery-ui-datepicker');
  wp_enqueue_script('my_theme-jquery', 'https://code.jquery.com/jquery-1.12.4.min.js', ['jquery'], '1.12.4', true);
  wp_enqueue_script('my_theme-swiper', get_theme_file_uri() . '/assets/js/swiper-bundle.min.js');
  wp_enqueue_script('my_theme-ajaxzip3', get_theme_file_uri() . 'assets/js/ajaxzip3.js', array(), '0.51', true);
  wp_enqueue_script('my_theme-script', get_theme_file_uri() . '/assets/js/app.js', ['jquery'], '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'my_theme_scripts');

// * Applying CSS for the admin panel
function admin_load_style(){
	wp_register_style( 'custom_wp_admin_css', get_stylesheet_directory_uri(). '/assets/css/admin-style.css', false, '1.0.0' );
	wp_enqueue_style( 'custom_wp_admin_css' );
}
add_action( 'admin_enqueue_scripts', 'admin_load_style' );


add_action(
  'wp_body_open',
  function () {
?>
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-P9KRL5L" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<?php
  }
);

// * ----------------------------------------
// pre_get_postsを使ってcategory.phpの投稿を設定
// * ----------------------------------------
function custom_pagination($query) {
  if ($query->is_category()) {
    $query->set('posts_per_page', 5);
    $query->set('paged', get_query_var('paged') ? get_query_var('paged') : 1);
  }
}
add_action('pre_get_posts', 'custom_pagination');



/*======================================
 検索件数の表示  ソート関連
======================================*/

// 検索フォームでカスタム投稿の検索機能追加
add_filter('template_include', 'custom_search_template');
function custom_search_template($template) {
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
function my_result_count() {
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

function my_result_count2() {
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


function my_result_count3() {
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






/*======================================
 お問い合わせフォーム mw wp form関連
======================================*/

function my_mwform_value($value, $name) {
  if ($name === 'date' && !empty($_GET['post_id']) && !is_array($_GET['post_id'])) {
    return get_the_date('Y年m月d日', $_GET['post_id']);
  }
  return $value;
}
add_filter('mwform_value_mw-wp-form-94', 'my_mwform_value', 10, 2);


// 商品のお問い合わせ価格の表示 single.phpの内容をフォームに表示させる
function my_mwform_post_content($content, $Data) {
  $post_id = $_GET["post_id"];
  $has_cam_price = get_field('cam_price', $post_id);

  if ($has_cam_price) {
    $content = str_replace('{nomal_price}', '{cam_price}', $content);
  }
  return $content;
}
add_filter('mwform_post_content_mw-wp-form-94', 'my_mwform_post_content', 10, 2);

// 商品のお問い合わせ価格の表示 single.phpの内容をフォームに表示させる
function my_mwform_post_content2($content, $Data) {
  $post_id = $_GET["post_id"];
  $has_cam_price = get_field('cam_price', $post_id);

  if ($has_cam_price) {
    $content = str_replace('{nomal_price}', '{cam_price}', $content);
  }
  return $content;
}
add_filter('mwform_post_content_mw-wp-form-248', 'my_mwform_post_content2', 10, 2);


// inputmode の追加
function my_do_shortcode_tag_tel($output, $tag, $attr, $m) {
  if ($tag == 'mwform_text' && $attr['name'] == 'phone_number') {
    $output = rtrim(substr($output, 0, -3)) . ' inputmode="tel" />' . "\n";
  }
  return $output;
}
add_filter('do_shortcode_tag', 'my_do_shortcode_tag_tel', 10, 4);



/* -------------------------------------------------------------------
 * 選択肢の初期値を設定する
 * ------------------------------------------------------------------- */

function custom_query_vars($public_query_vars) {
  $public_query_vars[] = 'option_id';
  return $public_query_vars;
}
add_filter('mwform_value_mw-wp-form-187', 'my_mwform_value', 10, 2);
add_filter('query_vars', 'custom_query_vars');



// contact mw wp form validation
// お問い合わせ
function plugin_validation_rule($Validation) {
  $Validation->set_rule('your-know', 'required', array('message' => '※「当サイトを知ったきっかけ」は必ず入力してください。'));
  $Validation->set_rule('radio', 'required', array('message' => '※「お問い合わせ項目」は必ず選択してください。'));
  $Validation->set_rule('your-name', 'noEmpty', array('message' => '※「お名前」は必ず入力してください。'));
  $Validation->set_rule('your-kana', 'noEmpty', array('message' => '※「ふりがな」は必ず入力してください。'));
  $Validation->set_rule('zip', 'noEmpty', array('message' => '※「郵便番号」は必ず入力してください。'));
  $Validation->set_rule('pref', 'noEmpty', array('message' => '※「都道府県」は必ず入力してください。'));
  $Validation->set_rule('city', 'noEmpty', array('message' => '※「ご住所」は必ず入力してください。'));
  $Validation->set_rule('your-tel', 'noEmpty', array('message' => '※「お電話番号」は必ず入力してください。'));
  $Validation->set_rule('your-email', 'noEmpty', array('message' => '※「メールアドレス」は必ず入力してください。'));
  $Validation->set_rule('your-email-confirm', 'noEmpty', array('message' => '※「確認用メールアドレス」は必ず入力してください。'));
  $Validation->set_rule('check', 'required', array('message' => '※各規約に同意の上、チェックをしてください。'));
  return $Validation;
}
// mwform_validation_mw-wp-form-176は指定された数字
add_filter('mwform_validation_mw-wp-form-176', 'plugin_validation_rule');


// 測量機器を探す-商品のお問い合わせ
function plugin_validation_rule2($Validation) {
  $Validation->set_rule('your-know', 'required', array('message' => '※「当サイトを知ったきっかけ」は必ず入力してください。'));
  $Validation->set_rule('radio', 'required', array('message' => '※「ご希望のご連絡方法」は必ず選択してください。'));
  $Validation->set_rule('your-name', 'noEmpty', array('message' => '※「お名前」は必ず入力してください。'));
  $Validation->set_rule('your-kana', 'noEmpty', array('message' => '※「ふりがな」は必ず入力してください。'));
  $Validation->set_rule('zip', 'noEmpty', array('message' => '※「郵便番号」は必ず入力してください。'));
  $Validation->set_rule('pref', 'noEmpty', array('message' => '※「都道府県」は必ず入力してください。'));
  $Validation->set_rule('city', 'noEmpty', array('message' => '※「ご住所」は必ず入力してください。'));
  $Validation->set_rule('your-tel', 'noEmpty', array('message' => '※「お電話番号」は必ず入力してください。'));
  $Validation->set_rule('your-email', 'noEmpty', array('message' => '※「メールアドレス」は必ず入力してください。'));
  $Validation->set_rule('your-email-confirm', 'noEmpty', array('message' => '※「確認用メールアドレス」は必ず入力してください。'));
  $Validation->set_rule('check', 'required', array('message' => '※各規約に同意の上、チェックをしてください。'));
  return $Validation;
}

add_filter('mwform_validation_mw-wp-form-94', 'plugin_validation_rule2');

// 測量機器を探す-商品のご購入
function plugin_validation_rule6($Validation) {
  $Validation->set_rule('your-know', 'required', array('message' => '※「当サイトを知ったきっかけ」は必ず入力してください。'));
  $Validation->set_rule('radio', 'required', array('message' => '※「ご希望のお支払い方法」は必ず選択してください。'));
  $Validation->set_rule('your-name', 'noEmpty', array('message' => '※「お名前」は必ず入力してください。'));
  $Validation->set_rule('your-kana', 'noEmpty', array('message' => '※「ふりがな」は必ず入力してください。'));
  $Validation->set_rule('zip', 'noEmpty', array('message' => '※「郵便番号」は必ず入力してください。'));
  $Validation->set_rule('pref', 'noEmpty', array('message' => '※「都道府県」は必ず入力してください。'));
  $Validation->set_rule('city', 'noEmpty', array('message' => '※「ご住所」は必ず入力してください。'));
  $Validation->set_rule('your-tel', 'noEmpty', array('message' => '※「お電話番号」は必ず入力してください。'));
  $Validation->set_rule('your-email', 'noEmpty', array('message' => '※「メールアドレス」は必ず入力してください。'));
  $Validation->set_rule('your-email-confirm', 'noEmpty', array('message' => '※「確認用メールアドレス」は必ず入力してください。'));
  $Validation->set_rule('check', 'required', array('message' => '※各規約に同意の上、チェックをしてください。'));
  return $Validation;
}

add_filter('mwform_validation_mw-wp-form-248', 'plugin_validation_rule6');



// 無料査定のお申し込み
function plugin_validation_rule3($Validation) {
  $Validation->set_rule('your-know', 'required', array('message' => '※「当サイトを知ったきっかけ」は必ず入力してください。'));
  $Validation->set_rule('your-model', 'noEmpty', array('message' => '※「機種名」は必ず入力してください。'));
  $Validation->set_rule('your-image', 'fileSize', array(
    'bytes' => 10240000,
    'message' => '添付のファイルサイズが10MBを超えています。お手数ですが、ファイルサイズを縮小いただき添付し直してください。
    なお、ファイルサイズが10MB以下となるようご注意ください。'
  ));
  $Validation->set_rule('your-name', 'noEmpty', array('message' => '※「お名前」は必ず入力してください。'));
  $Validation->set_rule('your-kana', 'noEmpty', array('message' => '※「ふりがな」は必ず入力してください。'));
  $Validation->set_rule('zip', 'noEmpty', array('message' => '※「郵便番号」は必ず入力してください。'));
  $Validation->set_rule('pref', 'noEmpty', array('message' => '※「都道府県」は必ず入力してください。'));
  $Validation->set_rule('city', 'noEmpty', array('message' => '※「ご住所」は必ず入力してください。'));
  $Validation->set_rule('your-tel', 'noEmpty', array('message' => '※「お電話番号」は必ず入力してください。'));
  $Validation->set_rule('your-email', 'noEmpty', array('message' => '※「メールアドレス」は必ず入力してください。'));
  $Validation->set_rule('your-email-confirm', 'noEmpty', array('message' => '※「確認用メールアドレス」は必ず入力してください。'));
  $Validation->set_rule('check', 'required', array('message' => '※各規約に同意の上、チェックをしてください。'));
  return $Validation;
}

add_filter('mwform_validation_mw-wp-form-2545', 'plugin_validation_rule3');

// レンタルのお申込み
function plugin_validation_rule4($Validation) {
  $Validation->set_rule('your-know', 'required', array('message' => '※「当サイトを知ったきっかけ」は必ず入力してください。'));
  $Validation->set_rule('your-quantity', 'noEmpty', array('message' => '※「数量」は必ず入力してください。'));
  $Validation->set_rule('your-day', 'noEmpty', array('message' => '※「日数」は必ず入力してください。'));
  // $Validation->set_rule( 'your-period01', 'noEmpty' );
  // $Validation->set_rule( 'checkperiod','required' );
  // $Validation->set_rule( 'your-period01', 'noEmpty', array( 'message' => '※レンタル期間を入力してください。' ) );
  // $Validation->set_rule( 'checkperiod','required', array( 'message' => '※レンタル期間が未定の場合はチェックをしてください。' ) );
  $Validation->set_rule('your-name', 'noEmpty', array('message' => '※「お名前」は必ず入力してください。'));
  $Validation->set_rule('your-kana', 'noEmpty', array('message' => '※「ふりがな」は必ず入力してください。'));
  $Validation->set_rule('zip', 'noEmpty', array('message' => '※「郵便番号」は必ず入力してください。'));
  $Validation->set_rule('pref', 'noEmpty', array('message' => '※「都道府県」は必ず入力してください。'));
  $Validation->set_rule('city', 'noEmpty', array('message' => '※「ご住所」は必ず入力してください。'));
  $Validation->set_rule('your-tel', 'noEmpty', array('message' => '※「お電話番号」は必ず入力してください。'));
  $Validation->set_rule('your-email', 'noEmpty', array('message' => '※「メールアドレス」は必ず入力してください。'));
  $Validation->set_rule('your-email-confirm', 'noEmpty', array('message' => '※「確認用メールアドレス」は必ず入力してください。'));
  $Validation->set_rule('check', 'required', array('message' => '※各規約に同意の上、チェックをしてください。'));
  return $Validation;
}

add_filter('mwform_validation_mw-wp-form-187', 'plugin_validation_rule4');

function add_mwform_validation_rule($Validation, $data) {
  $validation_message = 'レンタル期間の入力または、期限が未定の場合のチェックを入れてください';

  if ($data['checkperiod']['data'] != NULL) {
    return $Validation;
  }

  if ($data['your-period01'] == "" || $data['your-period02'] == "") {
    $Validation->set_rule('hoge', 'noempty', array('message' => $validation_message));
  }
  return $Validation;
}
add_filter('mwform_validation_mw-wp-form-187', 'add_mwform_validation_rule', 10, 2);




// レンタルに関するお問い合わせ
function plugin_validation_rule5($Validation) {
  $Validation->set_rule('your-name', 'noEmpty', array('message' => '※「お名前」は必ず入力してください。'));
  $Validation->set_rule('your-kana', 'noEmpty', array('message' => '※「ふりがな」は必ず入力してください。'));
  $Validation->set_rule('radio', 'required', array('message' => '※「企業・個人選択」は必ず選択してください。'));
  $Validation->set_rule('zip', 'noEmpty', array('message' => '※「郵便番号」は必ず入力してください。'));
  $Validation->set_rule('pref', 'noEmpty', array('message' => '※「都道府県」は必ず入力してください。'));
  $Validation->set_rule('city', 'noEmpty', array('message' => '※「ご住所」は必ず入力してください。'));
  $Validation->set_rule('your-tel', 'noEmpty', array('message' => '※「お電話番号」は必ず入力してください。'));
  $Validation->set_rule('your-email', 'noEmpty', array('message' => '※「メールアドレス」は必ず入力してください。'));
  $Validation->set_rule('your-email-confirm', 'noEmpty', array('message' => '※「確認用メールアドレス」は必ず入力してください。'));
  $Validation->set_rule('check', 'required', array('message' => '※各規約に同意の上、チェックをしてください。'));
  return $Validation;
}

add_filter('mwform_validation_mw-wp-form-182', 'plugin_validation_rule5');



/*======================================
 // ページ遷移時のリダイレクトを阻止する ページネーション
======================================*/

add_filter('redirect_canonical', 'my_disable_redirect_canonical');

function my_disable_redirect_canonical($redirect_url) {

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

add_filter('redirect_canonical2', 'my_disable_redirect_canonical2');

function my_disable_redirect_canonical2($redirect_url) {

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

// * ----------------------------------------
// * 【測量機器を探す】ソート価格の自動入力
function default_taxonomy_select() {
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


/* メンテナンス表示 */
// function maintenance_mode() {
//     if (!current_user_can('edit_themes') || !is_user_logged_in()) {
//         wp_die('ただいま、サイトのメンテナンスを行っております。完了までお待ちください。');
//     }
// }
// add_action('get_header', 'maintenance_mode');




// * ----------------------------------------
// * マイナーアップデートの自動更新を停止
// * ----------------------------------------
add_filter('allow_minor_auto_core_updates', '__return_false');


add_action('init', function() {
  error_reporting(0);
  ini_set('display_errors', 0);
});

// * ----------------------------------------
// * 記事内の1枚目の画像をアイキャッチにする
// * ----------------------------------------
function catch_that_image($post_id = NULL) {
  if ( !empty($post_id) )	{
    $posts = get_post($post_id);
    $post_content = $posts->post_content;
  }	else	{
    global $post, $posts;
    $post_content = $post->post_content;
  }

  $first_img = '';
  ob_start();
  ob_end_clean();

  $output = preg_match_all('/<img.*?src=(["\'])(.+?)\1.*?>/i', $post_content, $matches);
  $first_img = $matches[2][0];

  if ( empty($first_img) ) { $first_img = ''; }

  return $first_img;
}

//クラシックエディタの固定と選択できるタイプの除外
add_filter('use_block_editor_for_post_type', 'disable_gutenberg_for_specific_post_types', 10, 2);
function disable_gutenberg_for_specific_post_types($use_block_editor, $post_type) {
    // クラシックエディタを使用する投稿タイプを指定

    $classic_editor_post_types = array('buy', 'rental', 'page'); 
    // 'post' は通常の投稿、'custom_post_type' はカスタム投稿タイプのスラッグ

    if (in_array($post_type, $classic_editor_post_types)) {
        return false; // クラシックエディタを使用
    }

    return $use_block_editor; // その他はブロックエディタを使用
}

// クイック編集にエディタ切り替えオプションを追加

// function remove_editor_choice_from_list() {
//   global $pagenow;
//   if ($pagenow === 'edit.php') {
//       echo '<style>
//           .post-state { display: none; }
//           .row-actions span:nth-child(1){
//               display: none!important;
//           }
//       </style>';

//       echo '<script>
//           document.addEventListener("DOMContentLoaded", function() {
//               var postStates = document.querySelectorAll(".post-state");
//               postStates.forEach(function(postState) {
//                   var dash = postState.previousSibling;
//                   if (dash && dash.nodeType === Node.TEXT_NODE && dash.textContent.includes("—")) {
//                       dash.textContent = dash.textContent.replace("—", "");
//                   }
//               });
//           });
//       </script>';
//   }
// }
// add_action('admin_head', 'remove_editor_choice_from_list');

function hide_editor_elements() {  
    global $typenow;
    $post_types = array('buy', 'rental', 'page'); 

    $delete_script ='<script defer>
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
    if(in_array($typenow, $post_types02)) {
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


?>