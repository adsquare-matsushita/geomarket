<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="GEOMARKET（ジオマーケット）は、オンラインストアにて測量機器に特化した、中古品買取と販売を行うリユースマーケットです。トプコン、ソキア、ライカジオシステムズなど日本国内で流通している測量機器をお取り扱いしております。お客様の大切な資産である測量機器を有効活用しませんか？">

  <!-- OGP -->
  <meta property="og:url" content="https://geomarket.jp/">
  <meta property="og:type" content="website">
  <meta property="og:title" content="GEOMARKET | 測量機器総合マーケット">
  <meta property="og:description" content="GEOMARKET（ジオマーケット）は、オンラインストアにて測量機器に特化した、中古品買取と販売を行うリユースマーケットです。トプコン、ソキア、ライカジオシステムズなど日本国内で流通している測量機器をお取り扱いしております。お客様の大切な資産である測量機器を有効活用しませんか？">
  <meta property="og:site_name" content="GEOMARKET | 測量機器総合マーケット">
  <meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/assets/images/common/ogp.png">
  <meta property="og:locale" content="ja_JP">
  <!-- Twiteer -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:site" content="GEOMARKET【ジオマーケット】">

  <link rel="canonical" href="https://geomarket.jp/">

  <!-- ファビコン -->
  <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/common/favicon.ico">
  <link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/common/apple-touch-icon.png">


  <?php wp_head(); ?>

  <!-- company style -->
  <?php if (is_page('company')): // Company 
  ?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/company.css">
  <?php endif; ?>

  <script type="text/javascript">
    var _trackingid = 'LFT-32361-1';

    (function() {
      var lft = document.createElement('script');
      lft.type = 'text/javascript';
      lft.async = true;
      lft.src = ('https:' == document.location.protocol ? 'https:' : 'http:') + '//track.list-finder.jp/js/ja/track.js';
      var snode = document.getElementsByTagName('script')[0];
      snode.parentNode.insertBefore(lft, snode);
    })();
  </script>

  <!-- g tag -->
  <script>
    (function(w, d, s, l, i) {
      w[l] = w[l] || [];
      w[l].push({
        'gtm.start': new Date().getTime(),
        event: 'gtm.js'
      });
      var f = d.getElementsByTagName(s)[0],
        j = d.createElement(s),
        dl = l != 'dataLayer' ? '&l=' + l : '';
      j.async = true;
      j.src =
        'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
      f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-P9KRL5L');
  </script>

  <!-- SMP Tracking Tag Ver 3 -->
  <script type="text/javascript">
    if (typeof _cam !== 'function') {
      (function(n) {
        var w = window,
          d = document;
        w['ShanonCAMObject'] = n, w[n] = w[n] || function() {
          (w[n].q = w[n].q || []).push(arguments)
        };
        w[n].date = 1 * new Date();
        var e = d.createElement('script'),
          t = d.getElementsByTagName('script')[0];
        e.async = 1, e.type = 'text/javascript', e.charset = 'utf-8', e.src = 'https://tracker.shanon-services.com/static/js/cam3.js' + "?_=" + w[n].date;
        t.parentNode.insertBefore(e, t);
      })('_cam');

      _cam('create', 'EwDfgaPUwY-502', ['aisantec.smktg.jp', '.aisantec-geo.jp', '.geomarket.jp', '.tengun.jp', '.aisantec.co.jp', '.wn-infinity.net', '.wingearth.com', '.aisantec.com', '.aisan-its.com', '.whatmms.com']);
      _cam('require', 'crossLinker');
      _cam('crossLinker:allLink', ['aisantec.smktg.jp', '.aisantec-geo.jp', '.geomarket.jp', '.tengun.jp', '.aisantec.co.jp', '.wn-infinity.net', '.wingearth.com', '.aisantec.com', '.aisan-its.com', '.whatmms.com']);
    }
    _cam('send');
  </script>

  <script type="text/javascript" async="" src="https://www.google-analytics.com/analytics.js"></script>
  <!-- g tag -->

  <meta name="google-site-verification" content="FZI47S58-x9UYdqwkOuPy7etJU15RjfweQ711iGosCQ" />
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>

  <header class="l-header p-header">
    <div class="l-header__wrap">
      <div class="p-header__info">
        <h1 class="p-header__title">
          <a href="<?php echo esc_url(home_url()); ?>" class="p-logo"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/main-logo.svg" alt=""></a>
        </h1>
      </div>
      <nav class="p-header__nav">
        <h2 class="screen-reader-text">サイト内メニュー</h2>
        <button class="js-drawer p-hamburger" aria-controls="globalNav" aria-expanded="false">
          <span class="p-hamburger__line">
            <span class="screen-reader-text">メニューを開閉</span>
          </span>
        </button>
        <ul id="globalNav" class="p-globalNav">
          <li class="p-globalNav__item -itemMain"><a href="<?php echo esc_url(home_url()); ?>/buy/">測量機器を探す</a></li>
          <li class="p-globalNav__item -itemMain"><a href="<?php echo esc_url(home_url()); ?>/reuse/">測量機器の買取</a></li>
          <li class="p-globalNav__item -itemMain"><a href="<?php echo esc_url(home_url()); ?>/rental/">レンタル</a></li>
          <li class="p-globalNav__item -itemMain"><a href="<?php echo esc_url(home_url()); ?>/repair/">修理・点検</a></li>
          <li class="p-globalNav__item">
            <ul class="p-globalNav__innerList">
              <li class="p-globalNav__innerList-item"><a href="<?php echo esc_url(home_url()); ?>/faq">よくあるご質問</a></li>
              <li class="p-globalNav__innerList-item"><a href="<?php echo esc_url(home_url()); ?>/information">お知らせ</a></li>
              <li class="p-globalNav__innerList-item c-child"><a href="<?php echo esc_url(home_url()); ?>/information/campaign/">キャンペーン</a></li>
              <li class="p-globalNav__innerList-item c-child"><a href="<?php echo esc_url(home_url()); ?>/information/stock/">入荷情報</a></li>
              <li class="p-globalNav__innerList-item c-child"><a href="<?php echo esc_url(home_url()); ?>/information/sale/">販売情報</a></li>
              <li class="p-globalNav__innerList-item -gbn-contact"><a href="/contact/">お問い合わせ</a></li>
              <li class="p-globalNav__innerList-item -sns-icons">
                <ul>
                  <li class="twitter"><a href="https://twitter.com/geomarket1" target="_blank" rel="noopener"><span><img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/twitter-icon-wh.svg" alt="twitter"></span></a></li>
                  <li class="face"><a href="https://www.facebook.com/geomarket3R" target="_blank" rel="noopener"><span><img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/facebook-icon-wh.svg" alt="facebook"></span></a></li>
                  <li class="insta"><a href="https://www.instagram.com/geomarket_3r/" target="_blank" rel="noopener"><span><img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/insta-icon-wh.svg" alt="instagram"></span></a></li>
                </ul>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
    </div>
    <div class="p-header__bottom"></div>
    <script>
      var myThemeParams = {
        homeURL: '<?php echo esc_url(home_url()); ?>',
        themeOptions: <?php echo json_encode(get_theme_mod('mytheme_options', false)); ?>,
      };
    </script>
  </header>