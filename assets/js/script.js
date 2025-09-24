//.mwform-checkbox-fieldの.mwform-checkbox-field-textに<a href="/privacy" target="_blank" class="contact_inner_form-link">個人情報保護方針</a>に同意する'を追加
$(document).ready(function () {
  // .mwform-checkbox-field の中の .mwform-checkbox-field-text を探す
  $('.mwform-checkbox-field .mwform-checkbox-field-text').html(
    '<a href="/privacy" target="_blank" class="contact_inner_form-link">個人情報保護方針</a>に同意する'
  );
});

$('.header-btn').on('click', function () {
  $('.header-btn').toggleClass('header-btn-active');
  $('.header-drawer').toggleClass('header-drawer-active');
  $('.body').toggleClass('body-drawer');
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
      // スクロール位置を取得し、50px上に余白を設定
      var position = target.offset().top - 50; // 50px上に設定
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
  //任意のタブにURLからリンクするための設定
  function GethashID(hashIDName) {
    if (hashIDName) {
      //タブ設定
      $('.tab li')
        .find('a')
        .each(function () {
          //タブ内のaタグ全てを取得
          //var idName = $(this).attr('href'); //タブ内のaタグのリンク名（例）#lunchの値を取得
          var idName = $(this).data('id');

          if (idName == hashIDName) {
            //リンク元の指定されたURLのハッシュタグ（例）http://example.com/#lunch←この#の値とタブ内のリンク名（例）#lunchが同じかをチェック
            var parentElm = $(this).parent(); //タブ内のaタグの親要素（li）を取得
            $('.tab li').removeClass('active'); //タブ内のliについているactiveクラスを取り除き
            $(parentElm).addClass('active'); //リンク元の指定されたURLのハッシュタグとタブ内のリンク名が同じであれば、liにactiveクラスを追加
            //表示させるエリア設定
            $('.area').removeClass('is-active'); //もともとついているis-activeクラスを取り除き
            $(hashIDName).addClass('is-active'); //表示させたいエリアのタブリンク名をクリックしたら、表示エリアにis-activeクラスを追加
          }
        });
    }
  }

  //タブをクリックしたら
  $('.tab a').on('click', function () {
    //var idName = $(this).attr('href'); //タブ内のリンク名を取得
    var idName = $(this).data('id');
    GethashID(idName); //設定したタブの読み込みと
    return false; //aタグを無効にする
  });
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
