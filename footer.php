<footer class="footer">
    <div class="content-width">
        <div class="footer-wrap">
            <div class="footer-wrap-menu">
                <dl>
                    <dt><a href="<?php echo home_url(); ?>">ご利用案内</a></dt>
                    <dd><a href="<?php echo home_url(); ?>">ー料金案内</a></dd>
                    <dd><a href="<?php echo home_url(); ?>">ー営業時間</a></dd>
                    <dd><a href="<?php echo home_url(); ?>">ー利用案内</a></dd>
                    <dd><a href="<?php echo home_url(); ?>">ーアクセス</a></dd>
                </dl>
                <dl>
                    <dt><a href="<?php echo home_url(); ?>">館内の楽しみ方</a></dt>
                    <dd><a href="<?php echo home_url(); ?>">ー館内マップ</a></dd>
                    <dd><a href="<?php echo home_url(); ?>">ーお風呂</a></dd>
                    <dd><a href="<?php echo home_url(); ?>">ーサウナ</a></dd>
                    <dd><a href="<?php echo home_url(); ?>">ー発汗エリア</a></dd>
                    <dd><a href="<?php echo home_url(); ?>">ーご飲食</a></dd>
                    <dd><a href="<?php echo home_url(); ?>">ーリラクゼーション</a></dd>
                </dl>
                <dl>
                    <dt><a href="<?php echo home_url(); ?>">初めてのお客様へ</a></dt>
                    <dd><a href="<?php echo home_url(); ?>">ーグルスパの魅力</a></dd>
                    <dd><a href="<?php echo home_url(); ?>">ー入館の流れ</a></dd>
                    <dd><a href="<?php echo home_url(); ?>">ー施設案内</a></dd>
                </dl>
                <dl>
                    <dt><a href="<?php echo home_url(); ?>">イベント情報</a></dt>
                    <dd><a href="<?php echo home_url(); ?>">ー当日のイベント</a></dd>
                    <dd><a href="<?php echo home_url(); ?>">ーイベントスケジュール</a></dd>
                </dl>
                <dl>
                    <dt><a href="<?php echo home_url(); ?>">お問い合わせ</a></dt>
                    <dd><a href="<?php echo home_url(); ?>">ー個人のお客様</a></dd>
                    <dd><a href="<?php echo home_url(); ?>">ー取材依頼・法人の方</a></dd>
                </dl>
                <dl>
                    <dt><a href="<?php echo home_url(); ?>">お知らせ</a></dt>
                    <dt><a href="<?php echo home_url(); ?>">FAQ</a></dt>
                    <dt><a href="<?php echo home_url(); ?>">注意事項</a></dt>
                    <dt><a href="<?php echo home_url(); ?>">採用情報</a></dt>
                    <dt><a href="<?php echo home_url(); ?>">アメニティ</a></dt>
                    <dt><a href="<?php echo home_url(); ?>">グッズ</a></dt>
                </dl>
            </div>

            <ul class="footer-banner">
                <li><a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/footer/banner-1.jpg" alt=""></a></li>
                <li><a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/footer/banner-2.jpg" alt=""></a></li>
                <li><a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/footer/banner-3.jpg" alt=""></a></li>
                <li><a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/footer/banner-4.jpg" alt=""></a></li>
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
                    <dl class="footer-info-wrap-time">
                        <dt>営業時間</dt>
                        <dd>
                            【月〜木】10:00〜24:00<br>
                            【土】7:00〜翌1:00
                        </dd>
                        <dd>
                            【金】10:00〜翌1:00<br>
                            【日】7:00〜24:00
                        </dd>
                    </dl>
                    <dl class="footer-info-wrap-day">
                        <dt>休館日</dt>
                        <dd>年中無休</dd>
                    </dl>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-copy">
        <div class="footer-copy-link">
            <ul>
                <li><a href="<?php echo home_url(); ?>/privacy/">個人情報保護方針</a></li>
                <li><a href="<?php echo home_url(); ?>/sitemap/">サイトマップ</a></li>
                <li><a href="<?php echo home_url(); ?>/privacy/">利用規約</a></li>
                <li><a href="<?php echo home_url(); ?>/sitemap/">Cookieについて</a></li>
            </ul>
        </div>
        <p class="copy">©GURUSPA All rights reserved.</p>
    </div>
    <div class="footer-fixed">
        <a href="#">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/icon-page-back.png" alt="">
        </a>
    </div>
</footer>

<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.tmpl.min.js?ver=1.0.1"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/all.min.js?ver=1.0.4"></script>
<script src="https://yubinbango.github.io/yubinbango/yubinbango.js" charset="UTF-8"></script>




<script>
    var lazyLoadInstance = new LazyLoad({
        elements_selector: ".lazyload",
        callback_loaded: function(element) {
            element.classList.add("lazyloaded");
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


<?php if (is_page("entry")):  ?>
    <script>
        //エントリーで誕生日自動付与
        const input = document.getElementById('dateInput');
        //typeをtextから数字に変更
        input.type = 'tel';

        input.addEventListener('input', (e) => {
            let value = e.target.value;

            // Remove all non-numeric characters except `/`
            value = value.replace(/[^0-9/]/g, '');

            // Add `/` after the 4th and 7th characters if not already present
            if (value.length > 4 && value[4] !== '/') {
                value = value.slice(0, 4) + '/' + value.slice(4);
            }
            if (value.length > 7 && value[7] !== '/') {
                value = value.slice(0, 7) + '/' + value.slice(7);
            }

            // Limit the format to "YYYY/MM/DD"
            if (value.length > 10) {
                value = value.slice(0, 10);
            }

            e.target.value = value;
        });
    </script>
<?php endif; ?>
<script>
    //aboutの沿革
    gsap.fromTo('.sec03-wrap-right-history-border', {
        y: "-100%",
    }, {
        y: "0%",
        scrollTrigger: {
            trigger: '.sec03-wrap-right-history',
            start: 'top bottom-=150',
            end: 'bottom center',
            scrub: true,
            markers: false,
        },

    });
</script>
<script>
    $('.upload-1').on('change', function() {
        var file = $(this).prop('files')[0];
        $('.js-upload-filename-1').text(file.name);
    });
</script>
<script>
    // Safariを判定する関数
    function isSafari() {
        return /^((?!chrome|android).)*safari/i.test(navigator.userAgent);
    }

    // モバイルの時は解除 & Safariの場合はLenisを無視
    if (window.innerWidth > 600 && !isSafari()) {
        const lenis = new Lenis({
            duration: 0.8, // スクロールの速度
            easing: (t) => Math.min(1, 1.001 - Math.pow(2, -10 * t)), // イージング関数
            smooth: true, // スムーズスクロールを有効化
        });

        function raf(time) {
            lenis.raf(time);
            requestAnimationFrame(raf);
        }

        requestAnimationFrame(raf);
    }
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
                }
            }
        );
    });

    //footerにlineアイコンが差し掛かったらfedeuot

    gsap.fromTo(".footer-fixed", {
        opacity: 1,
    }, {
        opacity: 0,
        duration: 0.5,
        onStart: () => {
            document.querySelector(".footer-fixed-line").style.pointerEvents = "none";
        },
        onReverseComplete: () => {
            document.querySelector(".footer-fixed-line").style.pointerEvents = "auto";
        },
        scrollTrigger: {
            trigger: "footer",
            start: "top bottom",
            end: "bottom top",
            toggleActions: "play none none reverse",
            markers: false // デバッグ用（本番時は削除）
        }
    });
</script>
<?php if (!is_404()): ?>
    <?php wp_footer(); ?>
<?php endif; ?>

</body>

</html>