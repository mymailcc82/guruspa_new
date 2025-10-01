<footer class="footer">
    <img class="footer-bg-top footer-bg-top-pc" src="<?php echo get_template_directory_uri(); ?>/assets/img/footer/footer-bg-item.png" alt="">
    <img class="footer-bg-top footer-bg-top-sp" src="<?php echo get_template_directory_uri(); ?>/assets/img/footer/footer-bg-item-sp.png" alt="">
    <div class="top-fixed-sp">
        <div class="top-fixed-sp-btn"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/icon-sp-btn.png" alt=""></div>
        <div class="top-fixed-sp-wrap is-show">
            <a class="top-fixed-1" href="<?php echo home_url(); ?>/today/"><i></i>本日の<br>イベント</a>
            <a class="top-fixed-2" href="<?php echo home_url(); ?>"><i></i>今すぐ<br>行く！</a>

            <a class="top-fixed-3" href="<?php echo home_url(); ?>/price/"><i></i>料金・<br>ご利用案内</a>
        </div>
    </div>
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
                <dl class="accordion">
                    <dt class="hidden-mobile"><a href="<?php echo home_url(); ?>/guide/">ご利用案内</a></dt>
                    <dt class="hidden-sm"><a href="javascript:void(0);">ご利用案内</a></dt>
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
                <dl class="accordion">
                    <dt class="hidden-mobile"><a href="<?php echo home_url(); ?>/enjoy/">館内の楽しみ方</a></dt>
                    <dt class="hidden-sm"><a href="javascript:void(0);">館内の楽しみ方</a></dt>
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
                <dl class="accordion">
                    <dt class="hidden-mobile"><a href="<?php echo home_url(); ?>/first-time/">初めてのお客様へ</a></dt>
                    <dt class="hidden-sm"><a href="javascript:void(0);">初めてのお客様へ</a></dt>

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
                <dl class="accordion">
                    <dt class="hidden-mobile"><a href="<?php echo home_url(); ?>/event/">イベント情報</a></dt>
                    <dt class="hidden-sm"><a href="javascript:void(0);">イベント情報</a></dt>
                    <dd>
                        <a href="<?php echo home_url(); ?>/today/">ー当日のイベント</a>
                        <a href="<?php echo home_url(); ?>/schedule/">ーイベントスケジュール</a>
                    </dd>
                </dl>
                <dl class="accordion">
                    <dt>
                        <a href="javascript:void(0);">お問い合わせ</a>
                    </dt>
                    <dd>
                        <a href="<?php echo home_url(); ?>">ー個人のお客様</a>
                        <a href="<?php echo home_url(); ?>">ー取材依頼・法人の方</a>
                    </dd>
                </dl>
                <dl class="accordion-none">
                    <dt><a href="<?php echo home_url(); ?>/archive/">お知らせ</a></dt>
                    <dt><a href="<?php echo home_url(); ?>/faq/">FAQ</a></dt>
                    <dt><a href="<?php echo home_url(); ?>/rules/">注意事項</a></dt>
                    <dt><a href="<?php echo home_url(); ?>/recruit/">採用情報</a></dt>
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
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/all.min.js?ver=1.0.4"></script>
<script src="https://yubinbango.github.io/yubinbango/yubinbango.js" charset="UTF-8"></script>

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

<script>
    //600以上の時はloopしない
    var loop_flg = true;
    var centeredSlides_flg = true;
    if (window.innerWidth > 600) {
        loop_flg = false;
        centeredSlides_flg = false;
    }

    const swiper = new Swiper('.swiper-event', {
        slidesPerView: 'auto', // 幅固定 or auto
        spaceBetween: 24, // スライド間の余白
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

    const swiper_2 = new Swiper('.swiper-event_2', {
        slidesPerView: 'auto', // 幅固定 or auto
        spaceBetween: 24, // スライド間の余白
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
        spaceBetween: 24, // スライド間の余白
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
    document.addEventListener("DOMContentLoaded", function() {
        const btn = document.querySelector(".top-fixed-sp-btn");
        const wrap = document.querySelector(".top-fixed-sp-wrap");

        btn.addEventListener("click", function() {
            wrap.classList.toggle("is-show");
        });
    });
</script>

<script>
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

                if (sec01Top <= window.innerHeight && sec01Top > 0) {
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
                }
            }
        );
    });

    //footerにlineアイコンが差し掛かったらfedeuot


    //波の背景が出現するアニメーション
    document.addEventListener('DOMContentLoaded', () => {
        // reduced motion 配慮
        if (window.matchMedia && window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
            gsap.set('.page-deco-bg', {
                y: 0,
                opacity: 1
            });
            return;
        }

        gsap.registerPlugin(ScrollTrigger);

        // 初期状態を明示
        gsap.set('.page-deco-bg', {
            y: 100,
            opacity: 1
        });

        gsap.to('.page-deco-bg', {
            y: 0,
            opacity: 1,
            duration: 0.8,
            ease: 'power3.out',
            immediateRender: false,
            scrollTrigger: {
                trigger: '.page-deco-bg',
                start: 'top 90%', // 要素の top がビューポートの 90% の位置に来たら発火
                // end: 'top 60%',  // 必要なら指定
                toggleActions: 'play none none none',
                //once: true, // 一度だけ再生
                scrub: true // スクロールに同期
            }
        });
    });

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


    //.footer-fixed-mainをopacity:1にする
    gsap.to('.footer-fixed', {
        opacity: 1,
        duration: 0.8,
        delay: .6,
        ease: 'power2.out'
    });
</script>

<?php if (is_page("guide")): ?>
    <?php get_template_part('inc/guide-js'); ?>
<?php endif; ?>
<?php if (!is_404()): ?>
    <?php wp_footer(); ?>
<?php endif; ?>



</body>

</html>