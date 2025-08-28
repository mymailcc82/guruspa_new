<footer class="footer">
    <div class="content-width">
        <div class="footer-wrap">
            <div class="footer-wrap-left">
                <div class="footer-wrap-left-logo">
                    <a href="<?php echo home_url(); ?>" class="footer-logo">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/com/logo.png" alt="会社名">
                    </a>
                </div>
                <div class="footer-wrap-left-txt">
                    <h2>会社名</h2>
                </div>
            </div>
            <div class="footer-wrap-right">
                <div class="footer-wrap-right-nav">
                    <div class="footer-wrap-right-nav-col">
                        <h3 class="hidden-middle"><a href="<?php echo home_url(); ?>/">私たちについて</a></h3>
                        <h3 class="acdn-switch hidden-md"><a href="javascript:void(0);">私たちについて</a></h3>
                        <div class="ul">
                            <ul>
                                <li class="hidden-md"><a href="<?php echo home_url(); ?>/service/">私たちについて トップ</a></li>
                                <li><a href="<?php echo home_url(); ?>/service/#sec02">私たちについて</a></li>
                                <li><a href="<?php echo home_url(); ?>/service/#sec03">選ばれる理由</a></li>
                                <li><a href="<?php echo home_url(); ?>/service/#sec04">代表メッセージ</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="footer-wrap-right-nav-col">
                        <h3><a href="<?php echo home_url(); ?>/store/">店舗一覧</a></h3>
                        <h3><a href="<?php echo home_url(); ?>/store/">店舗一覧</a></h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-copy">
        <div class="footer-copy-link">
            <ul>
                <li><a href="<?php echo home_url(); ?>/privacy/">個人情報保護方針</a></li>
                <li><a href="<?php echo home_url(); ?>/sitemap/">サイトマップ</a></li>
            </ul>
        </div>
        <p class="copy">Copyright © 2024 <br class="hidden-sm">Copyright © 2024 All Rights Reserved.</p>
    </div>
    <div class="footer-fixed">
        <a href="#">
            ページの<br class="hidden-middle">先頭へ戻る<br><i></i>
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