$(function (jQuery) {
  /*Drawer*/
  $(".js-drawer").click(function () {
    $("body").toggleClass("is-drawerActive");

    if ($(this).attr("aria-expanded") == "false") {
      $(this).attr("aria-expanded", true);
    } else {
      $(this).attr("aria-expanded", false);
    }
  });

  /*ページ内リンク*/
  $('a[href^="#"]').click(function () {
    var speed = 900;
    var href = $(this).attr("href");
    var target = $(href == "#" || href == "" ? "html" : href);
    var position = target.offset().top;
    $("html, body").animate({ scrollTop: position }, speed, "swing");
    return false;
  });

  /* ページトップ */
  var topBtn = $("#footer-page-top");
  topBtn.hide();
  //スクロールが500に達したらボタン表示
  $(window).scroll(function () {
    if ($(this).scrollTop() > 800) {
      topBtn.fadeIn();
    } else {
      topBtn.fadeOut();
    }
  });

  topBtn.click(function () {
    $("body,html").animate(
      {
        scrollTop: 0,
      },
      500
    );
    return false;
  });

  /* アコーディオン*/
  $(".js-accordion dt").click(function () {
    $(this).next().slideToggle();
    $(this).toggleClass("is-active");
  });

  if (window.matchMedia("(max-width: 1023px)").matches) {
    $(".js-footer-accordion dt i").click(function () {
      $(this).parents().next("dd").slideToggle();
      $(this).toggleClass("is-active");
    });
  } else {
  }

  let fixedBtn = $(".l-under__buttonWrap");
  // fixedBtn.hide();
  $(window).scroll(function () {
    let scrollTop = jQuery(window).scrollTop(); // スクロール上部の位置
    let areaTop = jQuery(".target-area").offset().top; // 対象エリアの上部の位置
    let areaTop2 = jQuery(".target-area2").offset().top; // 対象エリアの上部の位置
    let areaBottom = areaTop + jQuery(".target-area").innerHeight(); // 対象エリアの下部の位置
    let areaBottom2 = areaTop2 + jQuery(".target-area2").innerHeight(); // 対象エリアの下部の位置

    //スクロールが500に達したらボタン表示
    if ($(this).scrollTop() > 500) {
      fixedBtn.addClass("is-active");
    } else {
      fixedBtn.removeClass("is-active");
      fixedBtn.removeClass("is-fixed");
    }

    if (scrollTop > areaTop && scrollTop < areaBottom) {
      jQuery(".l-under__buttonWrap").addClass("is-fixed"); // スクロールが対象エリアに入った場合
    } else if (scrollTop > areaTop2 && scrollTop < areaBottom2) {
      jQuery(".l-under__buttonWrap").removeClass("is-fixed"); // スクロールが対象エリアから出ている場合
    }
  });

  /* ==============================
  tab
  ============================== */

  $(".js_tab_btn > *").on("click", function () {
    //セレクタ設定
    var thisElm = $(this);
    var thisTabWrap = thisElm.parents(".js_tab");
    var thisTabBtn = thisTabWrap.find(".js_tab_btn > *");
    var thisTabContents = thisTabWrap.find(".js_tab_content > *");

    //current class
    var currentClass = "is-tab";

    //js-tab_btn current 切り替え
    thisTabBtn.removeClass(currentClass);
    thisElm.addClass(currentClass);

    //クリックされた tabが何番目か取得
    var thisElmIndex = thisTabBtn.index(this);

    //js-tab_contents 切り替え
    thisTabContents.removeClass(currentClass);
    thisTabContents.eq(thisElmIndex).addClass(currentClass);

        // .mv-tab_fade-in クラスを削除
        thisTabContents.each(function() {
          if ($(this).hasClass("mv-tab_fade-in")) {
              $(this).removeClass("mv-tab_fade-in");
          }
        });


  });

  // ----------------------------------------
  // 検索画面を閉じる
  $(".c-seek.-under h3").click(function () {
    $(".c-seek__innerWrap").slideToggle(300);
    $(".c-seek.-under h3 i").toggleClass("is-active");
    $(".c-seek.-under h3").toggleClass("is-close");
  });

  // ----------------------------------------
  // クラス切り替え;

  $(".iconB").click(function () {
    $(".c-card").removeClass("is-change");
    $(".c-card .effect").removeClass("is-change");
    $(".c-card__head").removeClass("is-change");
    $(".c-card__thumbnail").removeClass("is-change");
    $(".c-card__body").removeClass("is-change");
    $(".c-card__body .price-wrap").removeClass("is-change");
    $(".c-card__body .cat-wrap span").removeClass("is-change");
    $(".c-card__body .price-wrap .price.-cam").removeClass("is-change");
    $(".c-card__title").removeClass("is-change");
    $(".p-seek__list.-card").removeClass("is-change");
    $(".p-seek__listItem.-card").removeClass("is-change");
    $(".c-card__body .price-wrap .price .cat em").removeClass("is-change");
    $(".c-card__body .price .cat-text").removeClass("is-change");
    $(this).addClass("is-active");
    $(".iconA").removeClass("is-active");
  });

  $(".iconA").click(function () {
    $(".c-card").addClass("is-change");
    $(".c-card .effect").addClass("is-change");
    $(".c-card__head").addClass("is-change");
    $(".c-card__thumbnail").addClass("is-change");
    $(".c-card__body").addClass("is-change");
    $(".c-card__body .price-wrap").addClass("is-change");
    $(".c-card__body .cat-wrap span").addClass("is-change");
    $(".c-card__body .price-wrap .price.-cam").addClass("is-change");
    $(".c-card__title").addClass("is-change");
    $(".p-seek__list.-card").addClass("is-change");
    $(".p-seek__listItem.-card").addClass("is-change");
    $(".c-card__body .price-wrap .price .cat em").addClass("is-change");
    $(".c-card__body .price .cat-text").addClass("is-change");
    $(this).addClass("is-active");
    $(".iconB").removeClass("is-active");
  });

  /* モーダル*/
  $(".md-btn").each(function () {
    $(this).on("click", function (e) {
      e.preventDefault();
      var target = $(this).data("target");
      var modal = document.getElementById(target);
      $(modal).find(".md-overlay,.md-contents").fadeIn();
      $("body").addClass("is-modalActive");
    });
  });
  $(".md-close").on("click", function () {
    $(".md-overlay,.md-contents").fadeOut();
    $("body").removeClass("is-modalActive");
  });

  /* お問い合わせフォーム mw wp form 住所自動*/
  jQuery("#zip").keyup(function () {
    AjaxZip3.zip2addr(this, "", "prefecture", "address");
  });

  /* ページ印刷*/
  $(".js-print").click(function () {
    window.print();
  });

  /* レンタル期間のイベント*/
  // 情報の取得
  var input_name = document.getElementById("your-period01");
  var input_name2 = document.getElementById("your-period02");
  var check2 = document.querySelector(".checkbox__item01");

  // 期限のチェック取得
  var check = document.querySelector("#check");
  $(check).on("click", function () {
    $(input_name).val("");
    $(input_name2).val("");
  });

  // 期限のチェック外す
  $(input_name).on("click", function () {
    $(check2).prop("checked", false);
    $(check2).val("");
  });
  $(input_name2).on("click", function () {
    $(check2).prop("checked", false);
    $(check2).val("");
  });

});

/* swiper */

  var topSwiper = new Swiper(".swiper-top", {
    centeredSlides: true, //1枚目のスライド中央配置
    slidesPerView: "auto", //何枚見せるか
    spaceBetween: 20, //余白
    initialSlide: 0, //最初に何枚目のスライドを表示させるか 0始まり
    loop: false,

    navigation: {
      nextEl: ".nextTop", //ボタン表示
      prevEl: ".prevTop", //ボタン表示
    },


    scrollbar: {
      el: ".pageTop",
      draggable: true,
    },

    breakpoints: {
      // 1024px以上の場合
      1024: {
        centeredSlides: false, //1枚目のスライド中央配置
      },
    },
  });

  var topSwiper02 = new Swiper(".swiper-top02", {
    centeredSlides: true, //1枚目のスライド中央配置
    slidesPerView: "auto", //何枚見せるか
    spaceBetween: 20, //余白
    initialSlide: 0, //最初に何枚目のスライドを表示させるか 0始まり
    loop: false,

    navigation: {
      nextEl: ".nextTop02", //ボタン表示
      prevEl: ".prevTop02", //ボタン表示
    },

    scrollbar: {
      el: ".pageTop02",
      draggable: true,
    },

    breakpoints: {
      // 1024px以上の場合
      1024: {
        centeredSlides: false, //1枚目のスライド中央配置
      },
    },
  });

  const singleRelationSwiper = new Swiper(".swiper-single__reration", {
    centeredSlides: true, //1枚目のスライド中央配置
    slidesPerView: "auto", //何枚見せるか
    spaceBetween: 20, //余白
    initialSlide: 0, //最初に何枚目のスライドを表示させるか 0始まり
    loop: false,

    navigation: {
      nextEl: ".nextSingleRelation", //ボタン表示
      prevEl: ".prevSingleRelation", //ボタン表示
    },

    scrollbar: {
      el: ".singleRelation",
      draggable: true,
    },

    breakpoints: {
      // 1024px以上の場合
      1024: {
        centeredSlides: false, //1枚目のスライド中央配置
      },
    },
  });

  var newsSwiper = new Swiper(".swiper-info", {
    centeredSlides: true, //1枚目のスライド中央配置
    slidesPerView: "auto", //必須
    spaceBetween: 20, //余白
    initialSlide: 0, //最初に何枚目のスライドを表示させるか
    loop: false,

    navigation: {
      nextEl: ".nextInfo", //ボタン表示
      prevEl: ".prevInfo", //ボタン表示
    },

    pagination: {
      el: ".pageInfo", //ページネーション表示
      type: "bullets", //ページネーション ドット
      clickable: true,
    },

    breakpoints: {
      // 1024px以上の場合
      1024: {
        centeredSlides: false, //1枚目のスライド中央配置
        slidesPerView: "2", //必須
      },
    },
  });

  var galleryThumbs = new Swiper(".gallery-thumbs", {
    spaceBetween: 10,
    slidesPerView: 5,
    direction: "vertical",

    freeMode: true,
    watchSlidesVisibility: true,
    watchSlidesProgress: true,
  });

  var galleryTop = new Swiper(".gallery-top", {
    pagination: {
      el: ".pageSingle", //ページネーション表示
      type: "bullets", //ページネーション ドット
      clickable: true,
    },
    thumbs: {
      swiper: galleryThumbs,
    },
  });


//検索行為後は一覧というタイトルを消す（今後いるか不明）
  const chageTitle = () => {
    // 現在のURLを取得
    const currentURL = window.location.href;

    // #seek__resultTextがURLに存在したら
    if (currentURL.indexOf("#seek__resultText") !== -1 || currentURL.indexOf("#lineup") !== -1) {
      const resultTarget = document.querySelector(".c-seek__resultText > span");
      const rentalTitle = document.querySelector(".rental-title");
      const buyTitle = document.querySelector(".buy-title");

      if (resultTarget && rentalTitle) {
        // 結果のテキストを隠す
        const resultSubDescriptin = document.getElementsByClassName("p-sub__description")[0];
        resultSubDescriptin.classList.add("is-hide");
        resultTarget.classList.add("is-remove");
        rentalTitle.textContent = "";
        rentalTitle.appendChild(resultTarget);
      } else if (resultTarget && buyTitle) {
        resultTarget.classList.add("is-remove");
        buyTitle.textContent = "";
        buyTitle.appendChild(resultTarget);
      }
    }
  };
  chageTitle();


//問合せ確認ページへの移管時は、パラメーターを引き継ぐ
  document.addEventListener("DOMContentLoaded", function() {
    // 現在のURLを取得
    var currentURL = window.location.href;

    // URLが 'confirm/' または 'thanks/' で終わるかを確認
    if (currentURL.endsWith("confirm/") || currentURL.endsWith("thanks/")) {
        var params = getQueryParamsFromReferrer(document.referrer);

        // パラメータが存在する場合のみ追加
        if (Object.keys(params).length > 0) {
            var newURL = generateURLWithParams(currentURL, params);

            // 新しいURLに変更（リロードなし）
            window.history.replaceState(null, null, newURL);

            // PHPで新しいURLパラメータを使用できるようにリロードを発火
            window.location.reload();
        }
    }
  });

  function getQueryParamsFromReferrer(referrer) {
    var params = {};
    var queryString = referrer ? referrer.split('?')[1] : '';
    if (!queryString) return params;

    var queries = queryString.split("&");

    queries.forEach(function(query) {
        var [key, value] = query.split("=");
        params[key] = decodeURIComponent(value || "");
    });

    return params;
  }

  function generateURLWithParams(url, params) {
    var queryString = Object.keys(params).map(function(key) {
        return key + "=" + encodeURIComponent(params[key]);
    }).join("&");

    return url + "?" + queryString;
  }




//レンタルフォーム 入力必須分岐 レンタル期間
// document.addEventListener("DOMContentLoaded", function() {

//   // novalidate属性を削除する
//   var form = document.querySelector('form');
//   form.removeAttribute('novalidate');


//   var checkperiod = document.querySelector('#checkperiod .wpcf7-list-item label input');
//   var period01 = document.getElementById('your-period01');
//   var period02 = document.getElementById('your-period02');

//   // ページ読み込み時に `required` 属性を削除
//     period01.setAttribute('required', 'required');
//     period02.setAttribute('required', 'required');

//   checkperiod.addEventListener('change', function() {
//     if (checkperiod.checked) {
//       period01.removeAttribute('required');
//       period02.removeAttribute('required');
//     } else {
//       period01.setAttribute('required', 'required');
//       period02.setAttribute('required', 'required');
//     }
//   });



// });


//サイトのリンクを表示させないように
document.addEventListener("DOMContentLoaded", function() {
  var elements = document.querySelectorAll('.upload-box label');

  elements.forEach(function(element) {
      var text = element.textContent;
      var index = text.indexOf('wpcf7-files/');

      if (index !== -1) {
          // 'wpcf7-files/' を含めた左側の文字を削除
          element.textContent = text.substring(index + 'wpcf7-files/'.length);

          // 透明度を1に変更して表示
          element.style.opacity = 1;
      }
  });
});
