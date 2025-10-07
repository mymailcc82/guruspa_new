<div class="top-fixed-sp">
    <div class="top-fixed-sp-btn"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/icon-sp-btn.png" alt=""></div>
    <div class="top-fixed-sp-wrap">
        <a class="top-fixed-1" href="<?php echo home_url(); ?>/today/"><i></i>本日の<br>イベント</a>
        <?php if (is_page("guide")): ?>
            <a class="top-fixed-2" href="#sec05"><i></i>今すぐ<br>行く！</a>
        <?php else: ?>
            <a class="top-fixed-2" href="<?php echo home_url(); ?>/guide/#sec05"><i></i>今すぐ<br>行く！</a>
        <?php endif; ?>
        <a class="top-fixed-3" href="<?php echo home_url(); ?>/guide/"><i></i>料金・<br>ご利用案内</a>
    </div>
</div>
<footer class="footer">
    <img class="footer-bg-top footer-bg-top-pc hidden-mobile" src="<?php echo get_template_directory_uri(); ?>/assets/img/footer/footer-bg-item.png" alt="">
    <img class="footer-bg-top footer-bg-top-sp hidden-sm" src="<?php echo get_template_directory_uri(); ?>/assets/img/footer/footer-bg-item-sp_v3.png" alt="">

    <div class="footer-fixed footer-fixed-pc">
        <a href="#">
            <span class="footer-fixed-main"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/footer/footer-fixed.png" alt=""></span>
            <span class="footer-fixed-child footer-fixed-child-1"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/footer/footer-fixed-1.png" alt=""></span>
            <span class="footer-fixed-child footer-fixed-child-2"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/footer/footer-fixed-2.png" alt=""></span>
            <span class="footer-fixed-child footer-fixed-child-3"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/footer/footer-fixed-3.png" alt=""></span>
            <span class="footer-fixed-child footer-fixed-child-4"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/footer/footer-fixed-4.png" alt=""></span>
            <span class="footer-fixed-child footer-fixed-child-5"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/footer/footer-fixed-5.png" alt=""></span>
            <span class="footer-fixed-child footer-fixed-child-6"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/footer/footer-fixed-6.png" alt=""></span>
            <span class="footer-fixed-txt">
                <img class="footer-fixed-txt-1" src="<?php echo get_template_directory_uri(); ?>/assets/img/footer/footer-fixed-7.png" alt="">
                <img class="footer-fixed-txt-2" src="<?php echo get_template_directory_uri(); ?>/assets/img/footer/footer-fixed-7-sp.png" alt="">
            </span>
        </a>
    </div>

    <div class="content-width">
        <div class="footer-wrap">
            <div class="footer-wrap-menu">
                <dl class="footer-accordion">
                    <dt class="hidden-mobile"><a href="<?php echo home_url(); ?>/guide/">ご利用案内</a></dt>
                    <dt class="footer-accordion-switch hidden-sm"><a href="javascript:void(0);">ご利用案内</a></dt>
                    <?php if (is_page("guide")): ?>
                        <dd>
                            <a href="#sec02">ー料金案内</a>
                            <a href="#sec03">ー営業時間</a>
                            <a href="#sec04">ーご利用案内</a>
                            <a href="#sec05">ーアクセス</a>
                        </dd>
                    <?php else: ?>
                        <dd>
                            <a href="<?php echo home_url(); ?>/guide/#sec02">ー料金案内</a>
                            <a href="<?php echo home_url(); ?>/guide/#sec03">ー営業時間</a>
                            <a href="<?php echo home_url(); ?>/guide/#sec04">ーご利用案内</a>
                            <a href="<?php echo home_url(); ?>/guide/#sec05">ーアクセス</a>
                        </dd>
                    <?php endif; ?>
                </dl>
                <dl class="footer-accordion">
                    <dt class="hidden-mobile"><a href="<?php echo home_url(); ?>/enjoy/">館内の楽しみ方</a></dt>
                    <dt class="footer-accordion-switch hidden-sm"><a href="javascript:void(0);">館内の楽しみ方</a></dt>
                    <dd>
                        <a href="<?php echo home_url(); ?>/enjoy/">ー館内マップ</a>
                        <a href="<?php echo home_url(); ?>/enjoy/spa/">ーお風呂</a>
                        <a href="<?php echo home_url(); ?>/enjoy/sauna/">ーサウナ&水風呂</a>
                        <a href="<?php echo home_url(); ?>/enjoy/sweating/">ー発汗エリア</a>
                        <a href="<?php echo home_url(); ?>/enjoy/food/">ーご飲食</a>
                        <a href="<?php echo home_url(); ?>/enjoy/relaxation/">ーリラクゼーション</a>
                        <a href="<?php echo home_url(); ?>/enjoy/goods/">ーアメニティ・グッズ</a>

                    </dd>
                </dl>
                <dl class="footer-accordion">
                    <dt class="hidden-mobile"><a href="<?php echo home_url(); ?>/first-time/">初めてのお客様へ</a></dt>
                    <dt class="footer-accordion-switch hidden-sm"><a href="javascript:void(0);">初めてのお客様へ</a></dt>

                    <?php if (is_page("first-time")): ?>
                        <dd>
                            <a href="#sec02">ーグルスパの魅力</a>
                            <a href="#sec03">ー入館の流れ</a>
                            <a href="#sec04">ー施設案内</a>
                        </dd>
                    <?php else: ?>
                        <dd>
                            <a href="<?php echo home_url(); ?>/first-time/#sec02">ーグルスパの魅力</a>
                            <a href="<?php echo home_url(); ?>/first-time/#sec03">ー入館の流れ</a>
                            <a href="<?php echo home_url(); ?>/first-time/#sec04">ー施設案内</a>
                        </dd>
                    <?php endif; ?>
                </dl>
                <dl class="footer-accordion">
                    <dt class="hidden-mobile"><a href="<?php echo home_url(); ?>/event/">イベント情報</a></dt>
                    <dt class="footer-accordion-switch hidden-sm"><a href="javascript:void(0);">イベント情報</a></dt>
                    <dd>
                        <a href="<?php echo home_url(); ?>/today/">ー本日のイベント</a>
                        <a href="<?php echo home_url(); ?>/schedule/">ーイベントスケジュール</a>
                    </dd>
                </dl>
                <dl class="footer-accordion">
                    <dt class="hidden-mobile"><a href="<?php echo home_url(); ?>/contact">お問い合わせ</a></dt>
                    <dt class="footer-accordion-switch hidden-sm"><a href="javascript:void(0);">お問い合わせ</a></dt>

                    <dd>
                        <a href="<?php echo home_url(); ?>/contact/">ー個人のお客様</a>
                        <a href="<?php echo home_url(); ?>/contact-corporate/">ー取材依頼・法人の方</a>
                    </dd>
                </dl>
                <dl class="accordion-none">
                    <dt><a href="<?php echo home_url(); ?>/archive/">お知らせ</a></dt>
                    <dt><a href="<?php echo home_url(); ?>/faq/">FAQ</a></dt>
                    <dt><a href="<?php echo home_url(); ?>/rules/">注意事項</a></dt>
                    <dt><a href="<?php echo home_url(); ?>/recruit_top/">採用情報</a></dt>
                </dl>
            </div>

            <ul class="footer-banner">
                <li><a href="https://sauna-ikitai.com/saunas/94099" target="_blank" rel="noopener noreferrer"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/footer/banner-1.jpg" alt=""></a></li>
                <li><a href="https://sauna-eagle.jp/" target="_blank" rel="noopener noreferrer"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/footer/banner-2.jpg" alt=""></a></li>
                <li><a href="https://royal-gr.jp/" target="_blank" rel="noopener noreferrer"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/footer/banner-3.jpg" alt=""></a></li>
                <li><a href="https://royal-gr.jp/recruit/" target="_blank" rel="noopener noreferrer"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/footer/banner-4.jpg" alt=""></a></li>
            </ul>
            <div class="footer-info">
                <div class="footer-logo"><a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/footer/footer-logo.png" alt=""></a></div>
                <div class="footer-access">
                    <p>
                        〒515-0813<br>
                        三重県松阪市大塚町220-1<br>
                        (イオンタウン松阪船江別棟)
                    </p>
                </div>
                <div class="footer-info-wrap">
                    <ul>
                        <li><a href="<?php echo home_url(); ?>/sitemap/">サイトマップ</a></li>
                        <li><a href="<?php echo home_url(); ?>/privacy/">プライバシーポリシー</a></li>
                        <li><a href="<?php echo home_url(); ?>/terms/">利用規約</a></li>
                        <li><a href="<?php echo home_url(); ?>/cookie/">Cookieについて</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-copy">
        <p class="copy">©GURUSPA All rights reserved.</p>
    </div>
    <div class="top-fixed">
        <a class="top-fixed-1" href="<?php echo home_url(); ?>/today/"><span>本日のイベント</span><i></i></a>
        <?php if (is_page("guide")): ?>
            <a class="top-fixed-2" href="#sec05"><span>今すぐ行く！</span><i></i></a>
        <?php else: ?>
            <a class="top-fixed-2" href="<?php echo home_url(); ?>/guide/#sec05"><span>今すぐ行く！</span><i></i></a>
        <?php endif; ?>

        <a class="top-fixed-3" href="<?php echo home_url(); ?>/guide/"><span>料金・<br>ご利用案内</span><i></i></a>

    </div>

    <p class="scroll-txt scroll-txt-change">
        <span class="sub-title-01">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/com/sub-title-01.png" alt="">
        </span>
        <span class="sub-title-02">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/com/sub-title-02.png" alt="">
        </span>
    </p>
</footer>

<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.tmpl.min.js?ver=1.0.1"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/all.min.js?ver=1.0.5"></script>
<script src="https://yubinbango.github.io/yubinbango/yubinbango.js" charset="UTF-8"></script>
<script>
    //ページリンクのスムーズスクロール
    (function() {
        if (!location.hash) return;
        var id = location.hash.slice(1);
        var el = document.getElementById(id);
        if (!el) return;
        // id を一時的に外しておく（ブラウザが自動でスクロールできないようにする）
        el.setAttribute('data-temp-id', id);
        el.removeAttribute('id');

        // 履歴復元スクロールの自動動作を抑制（対応ブラウザ）
        if ('scrollRestoration' in history) {
            history.scrollRestoration = 'manual';
        }
    })();
</script>

<!-- === 2) DOM が準備できてから id を戻してアニメーション === -->
<script>
    $(function() {
        // --- waitForStablePosition は元のまま（軽微に変更） ---
        function waitForStablePosition($el, options) {
            options = $.extend({
                checkInterval: 100,
                stableCount: 3,
                maxWait: 2500
            }, options || {});

            return new Promise(function(resolve) {
                if (!$el || !$el.length) {
                    resolve();
                    return;
                }

                var lastTop = null;
                var stable = 0;
                var elapsed = 0;
                var intervalId = null;

                // 監視対象画像（ターゲット位置付近の画像だけ監視して軽くする）
                var imgs = $('img').filter(function() {
                    var $i = $(this);
                    try {
                        return !this.complete && $i.offset().top <= ($el.offset().top + $(window).height());
                    } catch (e) {
                        return false;
                    }
                });

                function checkOnce() {
                    var top;
                    try {
                        top = Math.round($el.offset().top);
                    } catch (e) {
                        top = null;
                    }
                    if (top === lastTop && top !== null) {
                        stable++;
                    } else {
                        stable = 0;
                    }
                    lastTop = top;

                    if (stable >= options.stableCount) {
                        cleanup();
                        resolve();
                    }
                }

                function cleanup() {
                    if (intervalId) clearInterval(intervalId);
                    imgs.off('load.waitScroll error.waitScroll');
                }

                imgs.on('load.waitScroll error.waitScroll', function() {
                    checkOnce();
                });

                intervalId = setInterval(function() {
                    elapsed += options.checkInterval;
                    checkOnce();
                    if (elapsed >= options.maxWait) {
                        cleanup();
                        resolve(); // タイムアウトでも先に進む（フォールバック）
                    }
                }, options.checkInterval);

                // 最初の即時チェック
                checkOnce();
            });
        }

        // --- 新規: ターゲット付近の画像が全部読み込まれるのを待つ ---
        function waitForNearImages($el, options) {
            options = $.extend({
                maxWait: 5000, // 最大待ち時間（ms）
                checkAreaExtra: 0 // ターゲット下にさらに何px見るか（必要に応じて）
            }, options || {});

            return new Promise(function(resolve) {
                if (!$el || !$el.length) {
                    resolve();
                    return;
                }

                var areaBottom;
                try {
                    areaBottom = $el.offset().top + $(window).height() + options.checkAreaExtra;
                } catch (e) {
                    resolve();
                    return;
                }

                // 監視対象の画像（ページ内だが target の表示領域までの画像）
                var $imgs = $('img').filter(function() {
                    try {
                        var top = $(this).offset().top;
                        return top <= areaBottom && !this.complete;
                    } catch (e) {
                        return false;
                    }
                });

                // ブラウザの lazy 属性がある場合は一時的に eager にしてみる（読み込みを促す）
                $imgs.each(function() {
                    try {
                        if (typeof this.loading !== 'undefined') this.loading = 'eager';
                        // data-src などの lazy-loading 実装があるならトリガーしてみる（よくある属性）
                        var $i = $(this);
                        if (!$i.attr('src') && $i.attr('data-src')) {
                            $i.attr('src', $i.attr('data-src'));
                        }
                    } catch (e) {}
                });

                if (!$imgs.length) {
                    resolve();
                    return;
                }

                var remaining = $imgs.length;
                var resolved = false;

                function tryResolve() {
                    if (resolved) return;
                    if (remaining <= 0) {
                        resolved = true;
                        resolve();
                    }
                }

                // タイムアウト防止
                var to = setTimeout(function() {
                    resolved = true;
                    resolve();
                }, options.maxWait);

                $imgs.on('load.waitImages error.waitImages', function() {
                    remaining--;
                    tryResolve();
                    if (remaining <= 0) clearTimeout(to);
                });
            });
        }

        // --- オーバーレイの作成・表示関数 ---
        function showOverlay() {
            /*
            if ($('#page-load-overlay').length) return;
            var $ov = $('<div id="page-load-overlay"></div>');
            $('body').append($ov);
            // すぐに表示（CSS で初期 opacity:1 にしています）
            // prevent scroll while overlay shown
            $('html,body').css('overflow', 'hidden');
            */
        }

        function hideOverlayAndRemove() {
            var $ov = $('#page-load-overlay');
            if (!$ov.length) return;
            $ov.addClass('hidden'); // CSS transition でフェードアウト
            // 少し待ってから DOM から削除してスクロールを戻す
            setTimeout(function() {
                $ov.remove();
                $('html,body').css('overflow', '');
            }, 500);
        }

        // --- main: data-temp-id 復元 + ハッシュ遷移(全読み込み待ち) ---
        var $temp = $('[data-temp-id]');
        var hash = location.hash;
        if ($temp.length) {
            var origId = $temp.attr('data-temp-id');
            $temp.attr('id', origId).removeAttr('data-temp-id');

            if (hash) {
                var $target = $(hash);
                if ($target.length) {
                    showOverlay();

                    // 画像待ちと位置安定の両方を待つ（同時並行）
                    Promise.all([
                        waitForNearImages($target, {
                            maxWait: 5000
                        }),
                        waitForStablePosition($target, {
                            maxWait: 2500
                        })
                    ]).then(function() {
                        // 再計算してスクロール
                        var headerHeight = $('header').outerHeight() || 0;
                        var position = Math.max(0, $target.offset().top - headerHeight - 60);
                        $('html, body').animate({
                            scrollTop: position
                        }, 600, 'swing', function() {
                            try {
                                history.replaceState(null, null, location.pathname + location.search + location.hash);
                            } catch (e) {}
                            // フェードアウト
                            hideOverlayAndRemove();
                        });
                    }).catch(function() {
                        // 何かあってもフォールバックで進める（安全側）
                        hideOverlayAndRemove();
                    });
                }
            }
        } else {
            if (hash) {
                var $t = $(hash);
                if ($t.length) {
                    showOverlay();
                    Promise.all([
                        waitForNearImages($t, {
                            maxWait: 5000
                        }),
                        waitForStablePosition($t, {
                            maxWait: 2500
                        })
                    ]).then(function() {
                        var headerHeight = $('header').outerHeight() || 0;
                        var pos = Math.max(0, $t.offset().top - headerHeight - 60);
                        $('html, body').stop().animate({
                            scrollTop: pos
                        }, 600, 'swing', function() {
                            hideOverlayAndRemove();
                        });
                    }).catch(function() {
                        hideOverlayAndRemove();
                    });
                }
            }
        }
    });
</script>

<script>
    (function() {
        var hadr = document.querySelector(".contact-wrap-right form")
        if (hadr) {
            cancelFlag = true;
            //イベントをキャンセルするリスナ
            var onKeyupCanceller = function(e) {
                if (cancelFlag) {
                    e.stopImmediatePropagation();
                }
                return false;
            };

            // 郵便番号の入力欄
            var postalcode = hadr.querySelectorAll(".p-postal-code"),
                postalField = postalcode[postalcode.length - 1];

            //通常の挙動をキャンセルできるようにイベントを追加
            postalField.addEventListener("keyup", onKeyupCanceller, false);

            //ボタンクリック時
            var btn = hadr.querySelector(".zip-wrap-btn-a");
            btn.addEventListener("click", function(e) {
                //キャンセルを解除
                cancelFlag = false;

                //aタグ無効
                e.preventDefault();

                //発火
                let event;
                if (typeof Event === "function") {
                    event = new Event("keyup");
                } else {
                    event = document.createEvent("Event");
                    event.initEvent("keyup", true, true);
                }
                postalField.dispatchEvent(event);

                //キャンセルを戻す
                cancelFlag = true;
            });
        }

    })();
</script>
<script>
    //エントリーで誕生日自動付与
    const input = document.getElementById('dateInput');
    //typeをtextから数字に変更
    input.type = 'tel';
</script>


<script>
    $(document).ready(function() {
        var val = $('.mw-wp-form_file input[name="upload"]').val();
        if (val) {
            //valの最初のupload-を削除
            //val = val.replace(/upload-/, '');
            $(".js-upload-filename-1").text(val);
            //$(".preview").css("display", "block");

        } else {
            $(".js-upload-filename-1").text('選択されていません');
        }
    });

    $(document).on('change', '.upload-1', function() {
        var file = $(this).prop('files')[0];
        /*
        if (file && file.type.startsWith('image/')) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('.preview').attr('src', e.target.result);
            };
            reader.readAsDataURL(file); // ← base64で読み込み
        }
        */

        if (file) {
            $(this).closest('.upload-box').find('.js-upload-filename-1').text(file.name);
            //$(".preview").css("display", "block");
        } else {
            $(this).closest('.upload-box').find('.js-upload-filename-1').text('選択されていません');
        }
    });
</script>



<?php /*
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const targets = document.querySelectorAll('.com-title .title');

        function isInViewport(element) {
            const rect = element.getBoundingClientRect();
            return (
                rect.top >= 0 &&
                rect.bottom <= (window.innerHeight || document.documentElement.clientHeight)
            );
        }

        function checkInView() {
            targets.forEach((el) => {
                // すでにin-viewクラスがあるならスキップ（1回だけにするため）
                if (el.classList.contains('in-view')) return;

                if (isInViewport(el)) {
                    el.classList.add('in-view');
                }
            });
        }

        window.addEventListener('scroll', checkInView);
        window.addEventListener('resize', checkInView);
        checkInView(); // 初回実行
    });
</script>
*/ ?>

<script>
    document.addEventListener("DOMContentLoaded", () => {
        const titleBlocks = document.querySelectorAll(".com-title");

        titleBlocks.forEach((block) => {
            // sprout は除外したいので、.title から .title-item-sprout を外す
            const titles = block.querySelectorAll(".title:not(.title-item-sprout)");
            const sprout = block.querySelector(".title-item-sprout");

            const io = new IntersectionObserver(
                (entries, obs) => {
                    entries.forEach((entry) => {
                        if (entry.isIntersecting) {
                            // 文字を順番に in-view
                            titles.forEach((t, i) => {
                                setTimeout(() => t.classList.add("in-view"), i * 120);
                            });

                            // sprout は最後に追加 delay をつけて in-view
                            if (sprout) {
                                const delay = titles.length * 120 + 400; // 文字が終わったあと +0.4s
                                setTimeout(() => {
                                    sprout.classList.add("in-view");
                                }, delay);
                            }

                            obs.unobserve(entry.target);
                        }
                    });
                }, {
                    threshold: 0.3
                }
            );

            io.observe(block);
        });
    });
</script>


<script>
    //600以上の時はloopしない
    var loop_flg = false;
    var centeredSlides_flg = true;
    if (window.innerWidth > 600) {
        loop_flg = false;
        centeredSlides_flg = false;
    }

    const swiper = new Swiper('.swiper-event', {
        slidesPerView: 'auto', // 幅固定 or auto
        spaceBetween: 30, // スライド間の余白
        centeredSlides: centeredSlides_flg, // 常に中央スライドをセンターに
        loop: loop_flg, // 無限ループ

        autoplay: {
            delay: 3000, // 3秒ごとに切り替え
            disableOnInteraction: false, // 操作後も自動再生を継続
        },

        navigation: {
            nextEl: '.swiper-button-next', // 「次へ」ボタン要素のクラス
            prevEl: '.swiper-button-prev', // 「前へ」ボタン要素のクラス
        },
        lazy: {
            loadPrevNext: true,
            loadOnTransitionStart: true,
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        breakpoints: {
            320: {
                //spaceBetween: 12,
                //slidesPerView: 1.1
            },
            768: {
                //spaceBetween: 16,
                //slidesPerView: 2.2
                spaceBetween: 15, // スライド間の余白
            },
        }
    });

    const swiper_2 = new Swiper('.swiper-event_2', {
        slidesPerView: 'auto', // 幅固定 or auto
        spaceBetween: 15, // スライド間の余白
        centeredSlides: centeredSlides_flg, // 常に中央スライドをセンターに
        loop: loop_flg, // 無限ループ
        autoplay: {
            delay: 3000, // 3秒ごとに切り替え
            disableOnInteraction: false, // 操作後も自動再生を継続
        },
        navigation: {
            nextEl: '.swiper-button-next', // 「次へ」ボタン要素のクラス
            prevEl: '.swiper-button-prev', // 「前へ」ボタン要素のクラス
        },
        lazy: {
            loadPrevNext: true,
            loadOnTransitionStart: true,
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        breakpoints: {
            320: {
                //spaceBetween: 12,
                //slidesPerView: 1.1
            },
            768: {
                //spaceBetween: 16,
                //slidesPerView: 2.2
            },
        }
    });

    const swiper_3 = new Swiper('.swiper-event_3', {
        slidesPerView: 'auto', // 幅固定 or auto
        spaceBetween: 15, // スライド間の余白
        centeredSlides: centeredSlides_flg, // 常に中央スライドをセンターに
        loop: loop_flg, // 無限ループ
        autoplay: {
            delay: 3000, // 3秒ごとに切り替え
            disableOnInteraction: false, // 操作後も自動再生を継続
        },
        navigation: {
            nextEl: '.swiper-button-next', // 「次へ」ボタン要素のクラス
            prevEl: '.swiper-button-prev', // 「前へ」ボタン要素のクラス
        },
        lazy: {
            loadPrevNext: true,
            loadOnTransitionStart: true,
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        breakpoints: {
            320: {
                //spaceBetween: 12,
                //slidesPerView: 1.1
            },
            768: {
                //spaceBetween: 16,
                //slidesPerView: 2.2
            },
        }
    });
</script>


<script>
    /*
    gsap.registerPlugin(ScrollTrigger);

    // sec03-col-item-child-1
    gsap.to('.sec03-col-item-child-1', {
        scrollTrigger: {
            trigger: '.sec03-col-item',
            start: 'top 80%',
            toggleActions: 'play none none none',
        },
        opacity: 1,
        duration: 0.8,
        delay: 0.2,
        ease: "power2.out"
    });

    // sec03-col-item-child-2
    gsap.to('.sec03-col-item-child-2', {
        scrollTrigger: {
            trigger: '.sec03-col-item',
            start: 'top 80%',
            toggleActions: 'play none none none',
        },
        opacity: 1,
        duration: 0.8,
        delay: 0.8,
        ease: "power2.out"
    });

    // sec03-col-item-child-3
    gsap.to('.sec03-col-item-child-3', {
        scrollTrigger: {
            trigger: '.sec03-col-item',
            start: 'top 80%',
            toggleActions: 'play none none none',
        },
        opacity: 1,
        duration: 0.8,
        delay: 1.2,
        ease: "power2.out"
    });

    // sec03-col-item-child-4
    gsap.to('.sec03-col-item-child-4', {
        scrollTrigger: {
            trigger: '.sec03-col-item',
            start: 'top 80%',
            toggleActions: 'play none none none',
        },
        opacity: 1,
        duration: 0.8,
        delay: 2.2,
        ease: "power2.out"
    });
    */
</script>
<script>
    gsap.registerPlugin(ScrollTrigger);

    // child-1
    gsap.to(".sec03-col-item-child-1-wrap", {
        y: "0%",
        duration: 0.8,
        delay: 0.2,
        ease: "power2.out",
        scrollTrigger: {
            trigger: ".sec03-col-item",
            start: "top 80%",
            toggleActions: "play none none none"
        }
    });

    // child-2
    gsap.to(".sec03-col-item-child-2-wrap", {
        y: "0%",
        duration: 0.8,
        delay: 0.8,
        ease: "power2.out",
        scrollTrigger: {
            trigger: ".sec03-col-item",
            start: "top 80%",
            toggleActions: "play none none none"
        }
    });

    // child-3
    gsap.to(".sec03-col-item-child-3-wrap", {
        y: "0%",
        duration: 0.8,
        delay: 1.2,
        ease: "power2.out",
        scrollTrigger: {
            trigger: ".sec03-col-item",
            start: "top 80%",
            toggleActions: "play none none none"
        }
    });

    // child-4
    gsap.to(".sec03-col-item-child-4-wrap", {
        y: "0%",
        duration: 0.8,
        delay: 2.2,
        ease: "power2.out",
        scrollTrigger: {
            trigger: ".sec03-col-item",
            start: "top 80%",
            toggleActions: "play none none none"
        }
    });
</script>



<script>
    var lazyLoadInstance = new LazyLoad({
        elements_selector: ".lazyload",
        callback_loaded: function(element) {
            element.classList.add("lazyloaded");
        }
    });
</script>


<?php if (is_home() || is_front_page()): ?>
    <script>
        $(document).ready(function() {
            $(window).on('scroll', function() {
                if ($(window).scrollTop() > 200) {
                    $('.header').addClass('header-page');
                    $('.body').addClass('body-header-active');
                } else {
                    $('.header').removeClass('header-page');
                    $('.body').removeClass('body-header-active');
                }
            });
        });
    </script>
<?php endif; ?>



<script>
    document.addEventListener("DOMContentLoaded", function() {
        const dtLinks = document.querySelectorAll("dl.accordion dt > a");

        dtLinks.forEach(link => {
            link.addEventListener("click", function(e) {
                e.preventDefault();
                const dl = link.closest("dl");

                // クラスの切り替え（toggle）
                link.classList.toggle("open");
                dl.classList.toggle("active"); // 親dlにもつけると便利
            });
        });
    });
</script>




<?php if (is_front_page()) : ?>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const scrollTxt = document.querySelector('.scroll-txt-change');
            const sec01 = document.querySelector('.sec01'); // sec01を基準にする

            if (!scrollTxt || !sec01) return;

            scrollTxt.classList.add('show-title-01'); // 初期表示：タイトル01

            window.addEventListener('scroll', function() {
                const sec01Top = sec01.getBoundingClientRect().top;

                if (sec01Top <= window.innerHeight && sec01Top > 100) {
                    // sec01 が画面の下端に触れた瞬間ではなく
                    // 画面の上から入り始めた瞬間で切り替え
                    scrollTxt.classList.remove('show-title-01');
                } else if (sec01Top <= 0) {
                    // 完全に画面に入った状態
                    scrollTxt.classList.remove('show-title-01');
                } else {
                    // まだ画面に入っていない
                    scrollTxt.classList.add('show-title-01');
                }
            });
        });
    </script>
<?php endif; ?>



</script>
<script>
    gsap.utils.toArray(".fadeup").forEach((el) => {
        gsap.fromTo(el, {
                opacity: 0,
                y: 50
            }, // 初期状態
            {
                opacity: 1,
                y: 0,
                duration: 1.2,
                ease: "power2.out",
                scrollTrigger: {
                    trigger: el,
                    start: "top 80%", // ビューポートの80%で発火
                    toggleActions: "play none none reverse"
                }
            }
        );
    });

    gsap.utils.toArray(".fadeup-timelug").forEach((section) => {
        gsap.fromTo(
            section.querySelectorAll(".fadeup-item"), {
                opacity: 0,
                y: 50
            }, // 初期状態
            {
                opacity: 1,
                y: 0,
                duration: 1.2,
                ease: "power2.out",
                stagger: 0.2, // 0.2秒間隔で順番にフェードアップ
                scrollTrigger: {
                    trigger: section,
                    start: "top 80%", // ビューポートの80%で発火
                    toggleActions: "play none none reverse"
                },
                //thisに.fadeup-timelug-activeを付与
                onEnter: () => section.classList.add('fadeup-timelug-active'),
            }

        );
    });


    //footerにlineアイコンが差し掛かったらfedeuot


    //波の背景が出現するアニメーション


    //初めてのお客様への波の背景が出現するアニメーション
    //.sec02-aboutに差し掛かったら.sec02-about-activeのクラスを付与
    document.addEventListener('DOMContentLoaded', () => {
        const target = document.querySelector('.sec02-about');
        const decoBg = document.querySelector('.sec02-about-bg');

        if (!target || !decoBg) return;

        // reduced motion 配慮
        if (window.matchMedia && window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
            decoBg.classList.add('sec02-about-active');
            return;
        }

        gsap.registerPlugin(ScrollTrigger);

        ScrollTrigger.create({
            trigger: target,
            start: 'top 80%',
            end: 'bottom 20%',
            onEnter: () => target.classList.add('sec02-about-active'),
            // onLeaveBack: () => decoBg.classList.remove('sec02-about-active'), // 戻ったときにクラスを外す場合
            // once: true // 一度だけ発火させたい場合
        });
    });
</script>
<script>
    document.addEventListener('DOMContentLoaded', () => {
        // 必要なら先に gsap と ScrollTrigger を読み込んでおくこと
        // <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.0/gsap.min.js">
        // <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.0/ScrollTrigger.min.js">

        gsap.registerPlugin(ScrollTrigger);

        const elems = gsap.utils.toArray('.page-deco-bg');

        // reduced motion 配慮
        const prefersReduced = window.matchMedia && window.matchMedia('(prefers-reduced-motion: reduce)').matches;
        if (prefersReduced) {
            gsap.set(elems, {
                y: 0,
                opacity: 1
            });
            return;
        }

        const getYSize = () => (window.innerWidth <= 600 ? 30 : 100);

        // 初期状態を一括でセット
        gsap.set(elems, {
            y: getYSize(),
            opacity: 1
        });

        elems.forEach((el) => {
            // 各要素ごとに独立した ScrollTrigger を作る
            gsap.fromTo(el, {
                y: getYSize(),
            }, {
                y: 0,
                duration: 0.8,
                ease: 'power3.out',
                immediateRender: false,
                scrollTrigger: {
                    trigger: el, // 要素自身をトリガーにする
                    start: 'top 100%', // 要素 top がビューポートの 90% に来たら開始
                    end: 'top 50%', // 任意：終了位置
                    toggleActions: 'play none none none',
                    // scrub: true, // スクロールと完全同期させたい場合は有効にする（duration は無視される）
                    scrub: 0.4, // 軽いスクラブで自然に同期させる（数値にすると滑らか）
                    // once: true, // 一度だけ動かしたい場合はコメント解除
                }
            });
        });

        // ウィンドウ幅が変わったら y を再セットして ScrollTrigger をリフレッシュ
        let resizeTimer;
        window.addEventListener('resize', () => {
            clearTimeout(resizeTimer);
            resizeTimer = setTimeout(() => {
                const y = getYSize();
                elems.forEach(el => gsap.set(el, {
                    y
                }));
                ScrollTrigger.refresh();
            }, 120);
        });
    });
</script>

<?php if (is_page("guide")): ?>
    <?php get_template_part('inc/guide-js'); ?>
<?php endif; ?>
<?php if (!is_404()): ?>
    <?php wp_footer(); ?>
<?php endif; ?>



<script>

</script>

<script>
    document.addEventListener("DOMContentLoaded", () => {
        const btn = document.querySelector(".top-fixed-sp-btn");
        const target = document.querySelector(".top-fixed-sp");

        console.log(btn, target); // null じゃなければOK

        if (btn && target) {
            btn.addEventListener("click", () => {
                console.log("clicked!"); // クリック時にコンソール確認
                target.classList.toggle("unker");
            });
        }
    });

    //.sec02-icon-03が差し掛かったらgsapでyを100pxにする
    gsap.registerPlugin(ScrollTrigger);
    gsap.to('.sec02-icon-03', {
        scrollTrigger: {
            trigger: '.sec02-icon-03',
            start: 'top 80%',
            scrub: true,
        },
        y: 100,
        opacity: 1,
        delay: 0,
        ease: "power2.out"
    });
    gsap.to('.sec02-icon-04', {
        scrollTrigger: {
            trigger: '.sec02-icon-02',
            start: 'top 80%',
            scrub: true,
        },
        y: 100,
        opacity: 1,
        delay: 0,
        ease: "power2.out"
    });
</script>


</body>

</html>