//600以下の画面幅の時、.sec04-center-wrap-col-img-dtをクリックすると.sec04-center-wrap-col-img-ddがスライドダウンする
$(document).ready(function () {
  function adjustAccordion() {
    if (window.innerWidth <= 600) {
      // 600px以下のときの処理
      $('.sec04-center-wrap-col-img-dt')
        .off('click')
        .on('click', function () {
          $(this).next('.sec04-center-wrap-col-img-dd').slideToggle();
          $(this).toggleClass('active');
        });
    }
  }

  // 初回実行
  adjustAccordion();

  // ウィンドウリサイズ時に再度チェック
  $(window).on('resize', function () {
    adjustAccordion();
  });
});

//.accordion dl dtクリックで開閉
$('.accordion dl dt').on('click', function () {
  //クリックされたdtにactiveクラスを付与し、他のdtからはactiveクラスを削除
  $(this).toggleClass('active');
  //クリックされたdtの次のddをスライドダウンし、他のddはスライドアップ
  $(this).next().slideToggle();
  $(this).parent().siblings().find('dd').slideUp();
  $(this).parent().siblings().find('dt').removeClass('active');
});

// footer-accordion 専用 (SPだけでスライド)
$(function () {
  $(function () {
    $('.footer-accordion-switch').on('click', function () {
      const $dl = $(this).closest('dl'); // ← 親のdlを取得
      const $dd = $(this).next('dd');
      const isActive = $dd.hasClass('active');

      if (!isActive) {
        const h = $dd.prop('scrollHeight');
        $dd.css('max-height', h + 'px');
        $dd.addClass('active');
        $dl.addClass('open'); // ← dlにopenクラス追加
      } else {
        $dd.css('max-height', 0);
        $dd.removeClass('active');
        $dl.removeClass('open'); // ← dlからopenクラス削除
      }
    });
  });
});

//.mwform-checkbox-fieldの.mwform-checkbox-field-textに<a href="/privacy" target="_blank" class="contact_inner_form-link">個人情報保護方針</a>に同意する'を追加
$(document).ready(function () {
  // .mwform-checkbox-field の中の .mwform-checkbox-field-text を探す
  $('.mwform-checkbox-field .mwform-checkbox-field-text').html(
    '<a href="/privacy" target="_blank" class="contact_inner_form-link">個人情報保護方針</a>に同意する'
  );
});

//header-drawerのaタグがクリックされたら、.header-drawerからactiveを削除
$('.header-btn').on('click', function () {
  $(this).toggleClass('header-btn-active');
  $(this).toggleClass('is-open'); // ← header-btn-active ではなく is-open
  $('.header-drawer').toggleClass('drawer-open'); // ← header-drawer-active ではなく drawer-open
  $('.new-drawer').toggleClass('header-drawer-active');
  $('body').toggleClass('body-drawer');
  $('body').toggleClass('body-drawer-open'); // ← body-drawer ではなく body-drawer-open
});

$('.header-drawer-wrap a').on('click', function () {
  $('.header-btn').toggleClass('header-btn-active');
  $('.header-btn').toggleClass('is-open'); // ← header-btn-active ではなく is-open
  $('.header-drawer').toggleClass('drawer-open'); // ← header-drawer-active ではなく drawer-open
  $('.new-drawer').toggleClass('header-drawer-active');
  $('body').toggleClass('body-drawer');
  $('body').toggleClass('body-drawer-open'); // ← body-drawer ではなく body-drawer-open
});

$('.footer-link-btn').on('click', function () {
  $(this).toggleClass('footer-link-btn-active');
  $(this).parent().next().toggleClass('ul-active');
});

//footerのsp版でメニュークリックすると開くギミック
$(function () {
  $('.acdn-switch').on('click', function () {
    $(this).next().slideToggle();
    if ($(this).hasClass('open')) {
      $(this).removeClass('open');
    } else {
      $(this).addClass('open');
    }
  });
});

//
$(document).ready(function () {
  // ハッシュが存在する場合（URLが#で終わっている）
  if (window.location.hash) {
    // ハッシュをターゲットに変換
    var target = $(window.location.hash);
    // ターゲットが存在する場合
    if (target.length) {
      //headerの高さを取得
      var headerHeight = $('header').outerHeight();
      // ターゲットの位置を取得

      // スクロール位置を取得し、50px上に余白を設定
      var position = target.offset().top - headerHeight - 20; // 50px上に設定
      // アニメーションでスクロール
      $('html, body').animate({ scrollTop: position }, 600, 'swing');
    }
  }
});

// #にダブルクォーテーションが必要
$('a[href^="#"]').click(function () {
  var speed = 600;
  var href = $(this).attr('href');
  var target = $(href == '#' || href == '' ? 'html' : href);
  var position = target.offset().top - 120;
  $('html, body').animate({ scrollTop: position }, speed, 'swing'); // 修正箇所
  return false;
});

// すべての ".ani-fade" 要素を取得
const elements_fade = document.querySelectorAll('.ani-fade');

// 各要素に対してアニメーションを適用
elements_fade.forEach((element) => {
  gsap.fromTo(
    element, // アニメーションさせる要素
    {
      y: 50, // アニメーション開始前の縦位置(下に100px)
      autoAlpha: 0, // アニメーション開始前は透明
    },
    {
      y: 0, // アニメーション後の縦位置(上に100px)
      autoAlpha: 1, // アニメーション後に出現(透過率0)
      duration: 2, // アニメーションの時間(秒)を指定
      scrollTrigger: {
        trigger: element, // アニメーションが始まるトリガーとなる要素
        toggleActions: 'play none none reverse', // 上スクロールで戻る
        start: 'top 65%', // アニメーションの開始位置
        markers: false, // マーカー表示
        //once: true // 一度だけ発火
      },
    }
  );
});

const titleElements = document.querySelectorAll('.text-split');

titleElements.forEach((titleElement) => {
  const originalText = titleElement.textContent; // textContentで取得（HTMLエンティティを保持）

  // HTMLをクリア
  titleElement.innerHTML = '';

  // 文字単位で処理しつつ、<br> タグをそのまま維持する
  originalText.split(/(<br[^>]*>)/g).forEach((fragment) => {
    if (fragment.startsWith('<br')) {
      titleElement.insertAdjacentHTML('beforeend', fragment); // <br>タグをそのまま追加
    } else {
      fragment.split('').forEach((char) => {
        const span = document.createElement('span');
        span.textContent = char === ' ' ? '\u00A0' : char; // 空白を &nbsp; に変換
        titleElement.appendChild(span);
      });
    }
  });
});

const elements_check = document.querySelectorAll('.title-ani');

// 各要素に対してアニメーションを適用
elements_check.forEach((element) => {
  gsap.fromTo(
    element, // アニメーションさせる要素
    {},
    {
      scrollTrigger: {
        trigger: element, // アニメーションが始まるトリガーとなる要素
        toggleActions: 'play none none reverse', // 上スクロールで戻る
        start: 'top center+=35%', // アニメーションの開始位置
        markers: false, // マーカー表示
        once: true, // 一度だけ発火
        //class追加
        onEnter: () => {
          // -visible クラスを追加
          //element.classList.add('-visible');
          // 各 span にアニメーションを適用（時間差あり）
          gsap.fromTo(
            element.querySelectorAll('span'),
            {
              opacity: 0,
              y: '50%',
            },
            {
              opacity: 1,
              y: '0%',
              duration: 0.1, // 0.6秒で変化
              stagger: 0.05, // 0.1秒ごとに順番にアニメーション
              //ease: "power2.out"
            }
          );
        },
      },
    }
  );
});

/*
// すべての ".ani-fade" 要素を取得
const elements_check = document.querySelectorAll(".check-list");

// 各要素に対してアニメーションを適用
elements_check.forEach(element => {
    gsap.fromTo(
        element, // アニメーションさせる要素
        {},
        {
            scrollTrigger: {
                trigger: element, // アニメーションが始まるトリガーとなる要素
                toggleActions: "play none none reverse", // 上スクロールで戻る
                start: "top-=150 center", // アニメーションの開始位置
                markers: false, // マーカー表示
                once: true, // 一度だけ発火
                //class追加
                toggleClass: "check-active",

            },
        }
    );
});


gsap.fromTo(
    ".delay_ani", // アニメーションさせる要素
    {
      y: 20, // アニメーション開始前の縦位置(下に100px)
      autoAlpha: 0, // アニメーション開始前は透明
    },
    {
      y: 0, // アニメーション後の縦位置(上に100px)
      autoAlpha: 1, // アニメーション後に出現(透過率0)
      stagger: 0.2, // 0.2秒遅れて順番に再生
      scrollTrigger: {
        trigger: ".delay_ani", // アニメーションが始まるトリガーとなる要素
        toggleActions: "play none none reverse", // 上スクロールで戻る
        start: "top-=50 center", // アニメーションの開始位置
        markers: false, // マーカー表示
        once: true, // 一度だけ発火
      },
    }
  );
  */

$(function () {
  function moveSlideBg(target) {
    const index = target.parent().index();
    const left = index * 33.333; // liの幅に合わせて移動
    $('.slide-bg').css('left', left + '%');
  }

  $('.tab a').on('click', function () {
    var idName = $(this).data('id');
    //#を削除にしてから再度追加
    var isName_no_hash = idName.replace('#', '');
    $('.tab li').removeClass('active');
    $(this).parent().addClass('active');

    // 背景スライド移動
    moveSlideBg($(this));

    $('.area').removeClass('is-active');
    $(idName).addClass('is-active');

    //.tabの.active-area02と.active-area01を削除
    $('.tab').removeClass('active-area01 active-area02 active-area03');

    $(this)
      .parent()
      .parent()
      .addClass('active-' + isName_no_hash);
    return false;
  });

  // 初期表示（すべて）
  moveSlideBg($('.tab li.active a'));
});

//enjoy .popup-btnが押されたら、data-idからidを取得して、.popupにactiveを追加
$(document).ready(function () {
  $('.popup-btn').on('click', function () {
    //.enjoy-fixedを表示
    $('.enjoy-fixed').addClass('enjoy-fixed-active');
    //.enjoy-fixed-container-wrapを非表示
    $('.enjoy-fixed-container-wrap').fadeOut(0);
    var popupId = $(this).data('id'); // data-idの値を取得
    $('#' + popupId).fadeIn(); // idを使って要素をフェードイン
    //$('.body').addClass('body-drawer'); // 追加
  });
});
//.enjoy-fixed-btn-closeが押されたら、.enjoy-fixedからactiveを削除
$(document).ready(function () {
  $('.enjoy-fixed-btn-close').on('click', function () {
    $('.enjoy-fixed').removeClass('enjoy-fixed-active');
    $('.enjoy-fixed-container-wrap').fadeOut(0);
  });
});

//enjoy .popup-btnが押されたら、data-idからidを取得して、.popupにactiveを追加
$(document).ready(function () {
  $('.stone-btn').on('click', function () {
    //.enjoy-fixedを表示
    $('.stone-fixed').addClass('stone-fixed-active');
    //.enjoy-fixed-container-wrapを非表示
    $('.stone-fixed-container-wrap').fadeOut(0);
    var popupId = $(this).data('id'); // data-idの値を取得
    $('#' + popupId).fadeIn(); // idを使って要素をフェードイン
    //$('.body').addClass('body-drawer'); // 追加
  });
});
//.enjoy-fixed-btn-closeが押されたら、.enjoy-fixedからactiveを削除
$(document).ready(function () {
  $('.stone-fixed-btn-close').on('click', function () {
    $('.stone-fixed').removeClass('stone-fixed-active');
    $('.stone-fixed-container-wrap').fadeOut(0);
  });
});

//enjoy .popup-btnが押されたら、data-idからidを取得して、.popupにactiveを追加
$(document).ready(function () {
  $('.goods-btn').on('click', function () {
    //.enjoy-fixedを表示
    $('.goods-fixed').addClass('goods-fixed-active');
    //.enjoy-fixed-container-wrapを非表示
    $('.goods-fixed-container-wrap').fadeOut(0);
    var popupId = $(this).data('id'); // data-idの値を取得
    $('#' + popupId).fadeIn(); // idを使って要素をフェードイン
    //$('.body').addClass('body-drawer'); // 追加
  });
});
//.enjoy-fixed-btn-closeが押されたら、.enjoy-fixedからactiveを削除
$(document).ready(function () {
  $('.goods-fixed-btn-close').on('click', function () {
    $('.goods-fixed').removeClass('goods-fixed-active');
    $('.goods-fixed-container-wrap').fadeOut(0);
  });
});

//読み込み時$('input[name="location[]"]')がからなら.location_reset_buttonに.activeをつける
$(document).ready(function () {
  if ($('input[name="location[]"]:checked').length === 0) {
    $('.location_reset_button').addClass('active');
  } else {
    $('.location_reset_button').removeClass('active');
  }
});

$('input[type="checkbox"]').on('change', function () {
  const value = $(this).val();
  const checked = $(this).prop('checked');

  // 同じvalueのcheckboxを連動させる
  $('input[type="checkbox"]')
    .filter(function () {
      return $(this).val() === value;
    })
    .prop('checked', checked);
});

//.reset-btnが押されたら.recruit-formのcheckboxをリセット
$('.reset-btn').on('click', function () {
  $('.recruit-form input[type="checkbox"]').prop('checked', false);
});

$('.filter_button_trigger input').on('click', function () {
  //.location_reset buttonのtoggleclass active
  $('.location_reset_button').removeClass('active');
});
//location_reset_buttonが押されたら
$('.location_reset_button').on('click', function () {
  //formの送信はしない

  $('.location_reset_button').toggleClass('active');

  //location[]の中身を全てcheck外す
  $('input[name="location[]"]').prop('checked', false);

  // .filter_button_triggerのinputをすべて非選択にする
  $('.filter_button_trigger input').prop('checked', false);
  // .filter_button_triggerのinputのvalueをallにする
});
