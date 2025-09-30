<?php get_header(); ?>


<style>
    .icon {
        width: 160px;
        height: 160px;
        display: block;
    }

    /* clipRect を下端基準で縦スケールする */
    .clip-rect {
        transform-box: fill-box;
        /* SVG要素の transform を fill-box 基準にする */
        transform-origin: 50% 100%;
    }

    /* ループさせたい場合は alternate/ infinite を使う（コメント外して使って下さい） */
    /* animation: reveal 2s ease-in-out infinite alternate; */


    /* 見やすい背景 */
</style>
<div class="page-loading">
    <div class="page-loading-wrap-container">
        <div class="page-loading-wrap">
            <svg class="icon" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                <defs>
                    <!-- clipPath: 内側の rect を scaleY で伸ばして赤を表示させる -->
                    <clipPath id="clip">
                        <!-- clip に使う rect。CSSで scaleY(0->1) させる -->
                        <rect class="clip-rect" x="0" y="0" width="100%" height="100%"></rect>
                    </clipPath>
                </defs>

                <!-- 1) 下地の白（初期表示） -->
                <g>
                    <path fill="#fff" class="st10" d="M506.4,287.1c-3.6-10.2-13.5-22-20.7-29c-17.2-16.7-35.7-25-44.8-29.9c-6.8-4-15.3-1.6-19.2,5.5
		c-3.8,7.1-1.3,15.7,5.2,20.1c42.8,29.2,49.9,64.3,18.9,100.9c-9.3,10.9-21.6,19.6-39.8,29.8c-29.7,16.7-91.1,31.3-150,31.2
		c-58.9,0.1-120.3-14.6-150-31.2c-18.2-10.2-30.5-18.8-39.8-29.8c-31-36.6-23.9-71.6,18.9-100.9c6.5-4.4,9-13.1,5.2-20.1
		c-3.8-7.1-12.4-9.5-19.2-5.5C62,233,43.5,241.4,26.4,258c-7.3,7-17.2,18.8-20.8,29C2,297.3,0,308.4,0,320c0,12,2.2,23.8,6.4,34.7
		c7.2,19.2,19.8,35.8,35.6,50c23.8,21.3,55.2,37.7,91.7,49.2c36.5,11.5,78.1,17.8,122.4,17.8s85.9-6.4,122.4-17.8
		c36.5-11.5,67.9-27.9,91.7-49.2c15.8-14.2,28.4-30.8,35.6-50c4.1-11,6.4-22.7,6.4-34.7C512,308.4,510,297.3,506.4,287.1z" />
                    <path fill="#fff" class="st10" d="M239.5,314.1c7,15.6,16,25.8,22.8,31.3c6.9,5.5,12.4,7.3,16.7,4.9c4.3-2.4,5.2-8.5,3.6-17
		c-1.6-8.6-5.2-18.9-7.6-31.2c-2.5-12.2-4.2-27.9-4.2-45.3c0.1-8.5,0.7-17.1,2.4-25.6c1.7-8.5,4.6-17,8.5-27.5
		c4-10.4,8.2-22.8,10.3-35c2.2-12.3,2.5-24.2,2-35.1c-1.3-21.4-5.6-40.5-12.6-56.1c-7-15.6-16-25.8-22.8-31.3
		c-6.9-5.5-12.4-7.3-16.7-4.9c-4.3,2.4-5.2,8.5-3.6,17c1.6,8.6,5.2,18.9,7.6,31.2c2.5,12.2,4.2,27.9,4.2,45.3
		c-0.1,8.5-0.7,17.1-2.4,25.6c-1.7,8.5-4.6,17-8.6,27.5c-4,10.5-8.2,22.8-10.3,35.1c-2.2,12.3-2.6,24.2-2,35.1
		C228.2,279.3,232.5,298.4,239.5,314.1z" />
                    <path fill="#fff" class="st10" d="M329.1,278.5c2.1,8.7,4.9,16.7,8.4,23.7c7.1,14.1,15.9,22.8,22.5,27.3c6.7,4.5,12,5.5,16.1,2.9s5-8.3,3.5-16.1
		c-1.5-7.8-4.9-16.8-7.1-27.3c-2.3-10.4-3.8-24-3.6-39.1c0.2-7.4,0.9-14.6,2.6-21.7c1.7-7.2,4.6-14.3,8.6-23.6
		c4-9.1,8.5-20.2,10.8-31.5c2.4-11.3,3-22.4,2.5-32.4c-0.5-10-1.9-19-3.9-27.7c-2.1-8.6-4.9-16.7-8.5-23.7
		C374,75.1,365.2,66.4,358.6,62c-6.7-4.5-12-5.5-16.1-2.9s-5,8.3-3.5,16.1c1.5,7.8,4.9,16.8,7.1,27.3c2.3,10.4,3.8,24,3.6,39.1
		c-0.2,7.4-0.9,14.6-2.7,21.7c-1.7,7.2-4.6,14.3-8.6,23.6c-4,9.1-8.5,20.2-10.8,31.6c-2.4,11.3-3,22.4-2.5,32.4
		C325.7,260.8,327,269.8,329.1,278.5z" />
                    <path fill="#fff" class="st0" d="M129.6,278.5c2.1,8.7,4.9,16.7,8.5,23.7c7.1,14.1,15.9,22.8,22.5,27.3c6.7,4.5,12,5.5,16.1,2.9
		c4.2-2.6,5-8.3,3.5-16.st10-1.5-7.8-4.9-16.8-7.1-27.3c-2.3-10.4-3.8-24-3.6-39.1c0.2-7.4,0.9-14.6,2.7-21.7
		c1.7-7.2,4.5-14.3,8.6-23.6c4-9.1,8.5-20.2,10.8-31.5c2.5-11.3,3-22.4,2.5-32.4c-0.5-10-1.9-19-3.9-27.7c-2.1-8.6-5-16.7-8.5-23.7
		c-7.1-14.1-15.9-22.8-22.5-27.3c-6.7-4.5-12-5.5-16.2-2.9c-4.1,2.6-5,8.3-3.4,16.1c1.5,7.8,4.9,16.8,7.1,27.3
		c2.3,10.4,3.8,24,3.6,39.1c-0.2,7.4-0.9,14.6-2.7,21.7c-1.7,7.2-4.6,14.3-8.6,23.6c-4,9.1-8.5,20.2-10.8,31.6
		c-2.4,11.3-3,22.4-2.5,32.4C126.2,260.8,127.6,269.8,129.6,278.5z" />
                </g>

                <!-- 2) 上に重ねる赤。clip-path で高さを制御して「下から上へ」現れる -->
                <g clip-path="url(#clip)">
                    <path fill="#e53935" class="st10" d="M506.4,287.1c-3.6-10.2-13.5-22-20.7-29c-17.2-16.7-35.7-25-44.8-29.9c-6.8-4-15.3-1.6-19.2,5.5
		c-3.8,7.1-1.3,15.7,5.2,20.1c42.8,29.2,49.9,64.3,18.9,100.9c-9.3,10.9-21.6,19.6-39.8,29.8c-29.7,16.7-91.1,31.3-150,31.2
		c-58.9,0.1-120.3-14.6-150-31.2c-18.2-10.2-30.5-18.8-39.8-29.8c-31-36.6-23.9-71.6,18.9-100.9c6.5-4.4,9-13.1,5.2-20.1
		c-3.8-7.1-12.4-9.5-19.2-5.5C62,233,43.5,241.4,26.4,258c-7.3,7-17.2,18.8-20.8,29C2,297.3,0,308.4,0,320c0,12,2.2,23.8,6.4,34.7
		c7.2,19.2,19.8,35.8,35.6,50c23.8,21.3,55.2,37.7,91.7,49.2c36.5,11.5,78.1,17.8,122.4,17.8s85.9-6.4,122.4-17.8
		c36.5-11.5,67.9-27.9,91.7-49.2c15.8-14.2,28.4-30.8,35.6-50c4.1-11,6.4-22.7,6.4-34.7C512,308.4,510,297.3,506.4,287.1z" />
                    <path fill="#e53935" class="st10" d="M239.5,314.1c7,15.6,16,25.8,22.8,31.3c6.9,5.5,12.4,7.3,16.7,4.9c4.3-2.4,5.2-8.5,3.6-17
		c-1.6-8.6-5.2-18.9-7.6-31.2c-2.5-12.2-4.2-27.9-4.2-45.3c0.1-8.5,0.7-17.1,2.4-25.6c1.7-8.5,4.6-17,8.5-27.5
		c4-10.4,8.2-22.8,10.3-35c2.2-12.3,2.5-24.2,2-35.1c-1.3-21.4-5.6-40.5-12.6-56.1c-7-15.6-16-25.8-22.8-31.3
		c-6.9-5.5-12.4-7.3-16.7-4.9c-4.3,2.4-5.2,8.5-3.6,17c1.6,8.6,5.2,18.9,7.6,31.2c2.5,12.2,4.2,27.9,4.2,45.3
		c-0.1,8.5-0.7,17.1-2.4,25.6c-1.7,8.5-4.6,17-8.6,27.5c-4,10.5-8.2,22.8-10.3,35.1c-2.2,12.3-2.6,24.2-2,35.1
		C228.2,279.3,232.5,298.4,239.5,314.1z" />
                    <path fill="#e53935" class="st10" d="M329.1,278.5c2.1,8.7,4.9,16.7,8.4,23.7c7.1,14.1,15.9,22.8,22.5,27.3c6.7,4.5,12,5.5,16.1,2.9s5-8.3,3.5-16.1
		c-1.5-7.8-4.9-16.8-7.1-27.3c-2.3-10.4-3.8-24-3.6-39.1c0.2-7.4,0.9-14.6,2.6-21.7c1.7-7.2,4.6-14.3,8.6-23.6
		c4-9.1,8.5-20.2,10.8-31.5c2.4-11.3,3-22.4,2.5-32.4c-0.5-10-1.9-19-3.9-27.7c-2.1-8.6-4.9-16.7-8.5-23.7
		C374,75.1,365.2,66.4,358.6,62c-6.7-4.5-12-5.5-16.1-2.9s-5,8.3-3.5,16.1c1.5,7.8,4.9,16.8,7.1,27.3c2.3,10.4,3.8,24,3.6,39.1
		c-0.2,7.4-0.9,14.6-2.7,21.7c-1.7,7.2-4.6,14.3-8.6,23.6c-4,9.1-8.5,20.2-10.8,31.6c-2.4,11.3-3,22.4-2.5,32.4
		C325.7,260.8,327,269.8,329.1,278.5z" />
                    <path fill="#e53935" class="st10" d="M129.6,278.5c2.1,8.7,4.9,16.7,8.5,23.7c7.1,14.1,15.9,22.8,22.5,27.3c6.7,4.5,12,5.5,16.1,2.9
		c4.2-2.6,5-8.3,3.5-16.1c-1.5-7.8-4.9-16.8-7.1-27.3c-2.3-10.4-3.8-24-3.6-39.1c0.2-7.4,0.9-14.6,2.7-21.7
		c1.7-7.2,4.5-14.3,8.6-23.6c4-9.1,8.5-20.2,10.8-31.5c2.5-11.3,3-22.4,2.5-32.4c-0.5-10-1.9-19-3.9-27.7c-2.1-8.6-5-16.7-8.5-23.7
		c-7.1-14.1-15.9-22.8-22.5-27.3c-6.7-4.5-12-5.5-16.2-2.9c-4.1,2.6-5,8.3-3.4,16.1c1.5,7.8,4.9,16.8,7.1,27.3
		c2.3,10.4,3.8,24,3.6,39.1c-0.2,7.4-0.9,14.6-2.7,21.7c-1.7,7.2-4.6,14.3-8.6,23.6c-4,9.1-8.5,20.2-10.8,31.6
		c-2.4,11.3-3,22.4-2.5,32.4C126.2,260.8,127.6,269.8,129.6,278.5z" />
                </g>
            </svg>

            <p><span id="count">0</span>%</p>

        </div>
    </div>
</div>
<main class="top">
    <div class="top-bg">
        <div class="top-visual">
            <div class="top-visual-wrap">
                <span class="bg-item-01"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/com/bg-item-01_v2.png" alt=""></span>
                <span class="bg-item-02"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/com/bg-item-02_v2.png" alt=""></span>
                <span class="icon-01 icon-01_ani"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/icon-01.png" alt=""></span>
                <div class="top-visual-mv">
                    <div class="top-visual-mv-container">
                        <div class="wave">
                            <svg viewBox="0 0 2726.2 318.1" width="100%" id="waveWrap" xmlns="http://www.w3.org/2000/svg">
                                <defs>
                                    <path id="wavePath" d="M0,314.2l0-91.1c0,0,409.3-199.3,749.3-196.8s302.1,196.2,610.7,207c308.6,10.8,284.4-185,623.7-163.8
      s733.7,248.7,733.7,248.7" />
                                    <!-- 反射用のフェード -->
                                    <linearGradient id="fade" x1="0" x2="0" y1="0" y2="1">
                                        <stop offset="0%" stop-color="#000" stop-opacity="0.35" />
                                        <stop offset="60%" stop-color="#000" stop-opacity="0.12" />
                                        <stop offset="100%" stop-color="#000" stop-opacity="0" />
                                    </linearGradient>
                                    <mask id="fadeMask">
                                        <rect x="0" y="0" width="100%" height="100%" fill="url(#fade)" />
                                    </mask>
                                </defs>

                                <!-- 波グループ（動かす本体）-->
                                <g id="waveGroup" transform="translate(0,10)">
                                    <use href="#wavePath" fill="#FEFBF5" class="wave-fill" />
                                </g>

                                <!-- 反射（下に複製して反転）-->
                                <g id="waveReflect" transform="translate(0,320)" mask="url(#fadeMask)">
                                    <!-- scaleY=-1 で上下反転。translateは見た目合わせで調整 -->
                                    <use href="#wavePath" transform="scale(1,-1)" fill="#FEFBF5" opacity="0.6" />
                                </g>
                            </svg>
                            <style>
                                /* 横にゆっくりループ（シームレスに見せるためにはパス幅を揃えて複数重ねるのが良い） */
                                @keyframes slideX {
                                    0% {
                                        transform: translateX(25%);
                                    }

                                    50% {
                                        transform: translateX(10%);
                                    }

                                    100% {
                                        transform: translateX(25%);
                                    }
                                }

                                /* 小さな上下ゆらぎ */
                                @keyframes bob {
                                    0% {
                                        transform: translateY(0);
                                    }

                                    50% {
                                        transform: translateY(26px);
                                    }

                                    100% {
                                        transform: translateY(0);
                                    }
                                }

                                /* 適用 */
                                #waveGroup {
                                    animation: slideX 18s linear infinite;
                                    transform-origin: center;
                                }

                                #waveGroup .wave-fill {
                                    filter: drop-shadow(0 2px 2px rgba(0, 0, 0, 0.02));
                                }

                                #waveReflect {
                                    animation: slideX 18s linear infinite, bob 18s ease-in-out infinite;
                                    transform-origin: center;
                                }
                            </style>
                        </div>
                        <div class="wave_nami">
                        </div>
                        <div class="wave_nami_v2">
                        </div>
                        <div class="wave_nami_v3">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/visual-wave_v3.png" alt="">
                        </div>
                        <img class="top-visual-mv-img" src="<?php echo get_template_directory_uri(); ?>/assets/img/top/visual-main.jpg" alt="">
                    </div>

                    <div class="top-visual-title">
                        <h1>
                            <div class="top_logo">
                                <div class="top_logo_img">
                                    <!-- Generator: Adobe Illustrator 27.0.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
                                    <svg version="1.1" id="レイヤー_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
                                        y="0px" viewBox="0 0 340.6 73.5" style="enable-background:new 0 0 340.6 73.5;" xml:space="preserve">
                                        <rect class="st0" width="340.6" height="73.5" />
                                        <path id="path_1000" class="st1" d="M175,64.9c-12.1,0-20.9-4.8-21.6-19.1V14h10.9v31.2c0,2.2,0.6,4.4,1.8,6.3
	c2.1,3,5,4.1,8.5,4.1c3.6,0,6.9-0.6,9.2-4.1c1.1-1.9,1.6-4,1.5-6.2l0.1-31.3h11.2v30.2C197,58.5,187,64.9,175,64.9" />
                                        <path id="path_1001" class="st2" d="M66.4,68c0,1.7-1.4,3.1-3.1,3.1c-1.7,0-3.1-1.4-3.1-3.1c0-1.7,1.4-3.1,3.1-3.1
	C65,64.8,66.4,66.2,66.4,68" />
                                        <path id="path_1002" class="st2" d="M77.3,70.4c0,1.7-1.3,3.1-3.1,3.1c0,0,0,0,0,0c-1.8,0-3.2-1.4-3.2-3.2c0-1.7,1.4-3.1,3.1-3.1
	c1.7,0,3.1,1.3,3.2,3C77.3,70.2,77.3,70.3,77.3,70.4" />
                                        <path id="path_1003" class="st2" d="M87.8,68.1c0,1.7-1.4,3.1-3.1,3.1c-1.7,0-3.2-1.3-3.2-3.1c0-1.7,1.3-3.2,3.1-3.2
	C86.3,64.9,87.7,66.3,87.8,68.1C87.8,68,87.8,68.1,87.8,68.1" />
                                        <path id="path_1004" class="st1" d="M134.9,63.9l-12.6-18.5h-5.1v18.5h-11.1V13.9h17.7c13.9,0,20,5.8,20.6,15.1
	c0.5,7-5.2,13-10.8,14.6l14.3,20.2L134.9,63.9z M133.8,29.1c0-3.9-4.5-6.1-9.1-6h-7.4v13h7.2C129.1,36.3,133.8,33.2,133.8,29.1" />
                                        <path id="path_1005" class="st1" d="M238.9,25.2c-4.5-1.9-9.4-2.9-14.3-3c-3.1,0-8.7,0.3-8.7,5.4c0,10.6,25.9,0.3,25.9,22.1
	c0,12.1-12.6,15.3-21.7,15.3c-5.3,0-10.5-1.2-15.3-3.4l-0.1-9.3c4.1,2.1,11.1,3,15.2,3.1c5.7,0.1,10.8-2.6,10.8-5.7
	c0-10.6-25.7-2-25.7-21.1c0-11.1,7.7-15.8,21-15.8c4.4,0,9.2,1.8,12.9,3.1L238.9,25.2z" />
                                        <path id="path_1007" class="st3" d="M286.3,14.1l-4.9-2l2-12.1l5.8,2.5L286.3,14.1z" />
                                        <path id="path_1008" class="st3" d="M291.1,18.2l-4-3.5l5.8-10.8l4.7,4.3L291.1,18.2z" />
                                        <path id="path_1011" class="st1" d="M21.7,36.2v9.2h11.4v10.1c-1.2,0-4.3,0.1-6.7,0.1c-10.5,0-15-7.6-15-16.8
	c0-10.1,8.7-16.4,15.4-16.5c5.7-0.1,12.2,0.8,15.5,2.3v-9.7c-2.9-1.3-8.2-1.9-15.7-1.9C10.7,12.9,0,26.1,0,38.7
	C0,54.4,8.7,65,26.8,65c5.8,0.1,11.6-0.9,17.1-2.7L44,45.3v-9.2H21.7z" />
                                        <path id="path_1012" class="st4" d="M63.5,35.8c0,12.2-1.2,20.1,11,20.1c12.3,0,11-9,11-14.8c-2.4,0.4-6.8,1.6-9.2-1
	C74,37.8,70,33.2,63.5,35.8" />
                                        <path id="path_1013" class="st3" d="M280.6,31.9c-0.8,4.7-3.2,7.2-5.6,8.5c-2.3,1.3-5.9,1.8-7.9,0.8c-3.9-1.9-6.4-5.8-6.3-10.2
	c0-2.4,0.9-4.7,2.5-6.5c2.7-3.2,6.7-4.9,10.8-4.6c1.5,0.7,2.9,1.8,4,3C280.1,25.5,281,28.7,280.6,31.9" />
                                        <path id="path_1014" class="st5" d="M306.6,51.2h17.5l-8.6-23.3L306.6,51.2z" />
                                        <g>
                                            <path class="st1" d="M273.3,11.7L273.3,11.7c-4.5-0.1-9,1.3-12.6,3.9v-3.2H249v51.5h11.7V47c3.7,2.7,8.1,4.1,12.6,4
		c9.5,0,20.4-7.4,20.4-20C293.7,20.3,284.7,11.7,273.3,11.7z M273,42.7L273,42.7c-2,0-4-0.4-5.7-1.3c0.1,0,0.2,0.1,0.3,0.1
		c-0.2-0.1-0.3-0.1-0.5-0.2c-3.9-1.9-6.4-5.8-6.3-10.2c0-2.4,0.9-4.7,2.5-6.5c2.7-3.2,6.7-4.9,10.8-4.6c0.1,0.1,0.2,0.1,0.3,0.2
		c-0.1-0.1-0.2-0.1-0.3-0.2c6.1,0.3,11.3,5.5,11.3,11.3C285.3,37.7,279.7,42.7,273,42.7z" />
                                            <path class="st1" d="M273.1,41.2c0.2,0,0.3-0.1,0.5-0.2C273.4,41.1,273.2,41.2,273.1,41.2z" />
                                            <path class="st1" d="M268.4,41.6c-0.1,0-0.2,0-0.3-0.1C268.1,41.6,268.3,41.6,268.4,41.6z" />
                                            <path class="st1" d="M274.1,40.9c0.1,0,0.1,0,0.2-0.1C274.2,40.8,274.1,40.8,274.1,40.9z" />
                                            <path class="st1" d="M269.3,41.7c-0.1,0-0.2,0-0.3,0C269.1,41.7,269.2,41.7,269.3,41.7z" />
                                            <path class="st1" d="M271,41.7c0.1,0,0.3,0,0.4-0.1C271.2,41.6,271.1,41.6,271,41.7z" />
                                            <path class="st1" d="M269.9,41.7c0.1,0,0.2,0,0.3,0C270.2,41.7,270.1,41.7,269.9,41.7z" />
                                            <path class="st1" d="M272,41.5c0.2,0,0.3-0.1,0.5-0.1C272.3,41.4,272.2,41.5,272,41.5z" />
                                        </g>
                                        <g>
                                            <path class="st1" d="M85.3,14l0,27.1h0c0,5.7,1.3,14.6-10.6,14.6C62.9,55.6,64,47.8,64,35.8V14H52.9v31.9
		C53.6,60.1,62.4,65,74.5,65c13.5,0,22-6.4,21.6-20.7l0,0V14H85.3z" />
                                        </g>
                                        <polygon class="st1" points="320.1,13.6 310.3,13.6 290.1,64.2 301.6,64.2 303.8,58.6 312.3,58.6 312.3,51.2 306.6,51.2 315.5,27.9 
	324.1,51.2 317.3,51.2 317.3,58.5 326.9,58.5 329,64.2 340.6,64.2 " />
                                    </svg>
                                </div>
                            </div>
                        </h1>
                        <h2>心と身体がととのう、<span>ウェルビーイング</span>の楽園。</h2>
                        <?php
                        $args = array(
                            'post_type' => 'post', // カスタム投稿タイプ名
                            'posts_per_page' => 1, // 表示する記事数
                            'orderby' => 'date', // 日付でソート
                            'order' => 'DESC', // 降順
                            'category_name' => 'important', // 特定のカテゴリーを指定する場合
                        );

                        $important_title = get_field('important_title', 111); // 固定ページIDを指定
                        ?>
                        <?php
                        $the_query = new WP_Query($args);
                        if ($the_query->have_posts()) : ?>
                            <div class="top-news">
                                <ul>
                                    <li><?php echo $important_title; ?></li>
                                    <li>


                                        <?php
                                        while ($the_query->have_posts()) : $the_query->the_post();
                                        ?>
                                            <a href="<?php the_permalink(); ?>">
                                                <h3><time><?php the_time('Y.m.d'); ?> 更新</time>
                                                    <?php the_title(); ?></h3>
                                                <i></i>
                                            </a>
                                        <?php
                                        endwhile;
                                        wp_reset_postdata();
                                        ?>
                                    </li>
                                </ul>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
        <section class="sec01">
            <div class="sec01-wrap">
                <div class="content-width-small">
                    <div class="com-title center com-title-hidden">
                        <p>イベント情報</p>
                        <h2>
                            <span class="title">E</span><span class="title">V</span><span class="title">E</span><span class="title">N</span><span class="title">T</span>
                            <span class="title title-item-sprout">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/icon-sprout-blown.png" alt="">
                            </span>
                            <span class="title title-item-sun">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/com/item-01.png" alt="">
                            </span>
                        </h2>
                        <a href="<?php echo home_url(); ?>/event/">一覧を見る<i></i></a>
                    </div>
                </div>
                <div class="sec01-col">
                    <ul class="sec01-col-select tab">
                        <li class="active"><a href="javascript:void(0)" data-id="#area01">すべて</a></li>
                        <li><a href="javascript:void(0)" data-id="#area02">期間限定<br class="hidden-sm">イベント</a></li>
                        <li><a href="javascript:void(0)" data-id="#area03">定例<br class="hidden-sm">イベント</a></li>
                    </ul>
                    <div id="area01" class="area is-active">
                        <div class="swiper swiper-event sec01-col-main">
                            <div class="swiper-wrapper">
                                <?php
                                $args = array(
                                    'post_type' => 'event', // カスタム投稿タイプ名
                                    'posts_per_page' => 3, // 表示する記事数
                                    'orderby' => 'date', // 日付でソート
                                    'order' => 'DESC', // 降順
                                );
                                ?>
                                <?php
                                $the_query = new WP_Query($args);
                                if ($the_query->have_posts()) :
                                    while ($the_query->have_posts()) : $the_query->the_post();
                                        $event_category = get_the_terms(get_the_ID(), 'event_category');
                                        $event_start_date = get_field('event_start_date'); // 開始日
                                        $is_hot = get_field('hot'); // HOT! フラグ
                                ?>

                                        <div class="swiper-slide">
                                            <a href="<?php the_permalink(); ?>">
                                                <?php if ($is_hot) : ?>
                                                    <span class="hot"><?php echo $is_hot; ?></span>
                                                <?php endif; ?>
                                                <span class="fire"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/icon-01-small.png" alt=""></span>
                                                <div class="img img-info">
                                                    <?php if (has_post_thumbnail()) : ?>
                                                        <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title(); ?>">
                                                    <?php else : ?>
                                                        <?php if ($event_category && !is_wp_error($event_category)) : ?>
                                                            <?php
                                                            // カテゴリーに応じたデフォルト画像を設定
                                                            $category_slug = $event_category[0]->slug;
                                                            $default_image_url = get_template_directory_uri() . '/assets/img/archive/archive-default.jpg'; // デフォルト画像

                                                            if ($category_slug === 'information') {
                                                                $default_image_url = get_template_directory_uri() . '/assets/img/archive/archive-red.jpg';
                                                            } elseif ($category_slug === 'event') {
                                                                $default_image_url = get_template_directory_uri() . '/assets/img/archive/archive-green.jpg';
                                                            } elseif ($category_slug === 'food') {
                                                                $default_image_url = get_template_directory_uri() . '/assets/img/archive/archive-yellow.jpg';
                                                            }
                                                            ?>
                                                            <img src="<?php echo esc_url($default_image_url); ?>" alt="<?php the_title(); ?>">
                                                        <?php else : ?>
                                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/archive/archive-default.jpg" alt="<?php the_title(); ?>">
                                                        <?php endif; ?>
                                                    <?php endif; ?>
                                                </div>
                                                <div class="text">
                                                    <div class="text-info">
                                                        <?php
                                                        if ($category_slug === 'information') {
                                                            $cats_class = 'category-red';
                                                        } elseif ($category_slug === 'event') {
                                                            $cats_class = 'category-green';
                                                        } elseif ($category_slug === 'food') {
                                                            $cats_class = 'category-yellow';
                                                        }
                                                        ?>
                                                        <div class="text-info-cat">
                                                            <span class="category <?php echo esc_attr($cats_class); ?>"><?php echo esc_html($event_category[0]->name); ?></span>
                                                        </div>
                                                        <div class="text-info-term">
                                                            <span class="term"><?php echo $event_start_date; ?></span>
                                                        </div>

                                                    </div>

                                                    <h3><?php the_title(); ?></h3>
                                                </div>
                                            </a>
                                        </div>
                                <?php
                                    endwhile;
                                    wp_reset_postdata();
                                else :
                                    echo '<p class="text-base">イベントが見つかりませんでした。</p>';
                                endif;
                                ?>
                            </div>
                        </div>
                    </div>

                    <div id="area02" class="area">
                        <div class="swiper swiper-event_2 sec01-col-main">
                            <div class="swiper-wrapper">
                                <?php
                                $args = array(
                                    'post_type' => 'event', // カスタム投稿タイプ名
                                    'posts_per_page' => 3, // 表示する記事数
                                    'orderby' => 'date', // 日付でソート
                                    'order' => 'DESC', // 降順
                                    //event_tagがlumitedのものを取得
                                    'tax_query' => array(
                                        array(
                                            'taxonomy' => 'event_tag',
                                            'field'    => 'slug',
                                            'terms'    => 'limit',
                                        ),
                                    ),
                                );
                                ?>
                                <?php
                                $the_query = new WP_Query($args);
                                if ($the_query->have_posts()) :
                                    while ($the_query->have_posts()) : $the_query->the_post();
                                        $event_category = get_the_terms(get_the_ID(), 'event_category');
                                        $event_start_date = get_field('event_start_date'); // 開始日


                                        $is_hot = get_field('hot'); // HOT! フラグ
                                ?>

                                        <div class="swiper-slide">
                                            <a href="<?php the_permalink(); ?>">
                                                <?php if ($is_hot) : ?>
                                                    <span class="hot"><?php echo $is_hot; ?></span>
                                                <?php endif; ?>
                                                <span class="fire"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/icon-01-small.png" alt=""></span>
                                                <div class="img img-info">
                                                    <?php if (has_post_thumbnail()) : ?>
                                                        <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title(); ?>">
                                                    <?php else : ?>
                                                        <?php if ($event_category && !is_wp_error($event_category)) : ?>
                                                            <?php
                                                            // カテゴリーに応じたデフォルト画像を設定
                                                            $category_slug = $event_category[0]->slug;
                                                            $default_image_url = get_template_directory_uri() . '/assets/img/archive/archive-default.jpg'; // デフォルト画像

                                                            if ($category_slug === 'information') {
                                                                $default_image_url = get_template_directory_uri() . '/assets/img/archive/archive-red.jpg';
                                                            } elseif ($category_slug === 'event') {
                                                                $default_image_url = get_template_directory_uri() . '/assets/img/archive/archive-green.jpg';
                                                            } elseif ($category_slug === 'food') {
                                                                $default_image_url = get_template_directory_uri() . '/assets/img/archive/archive-yellow.jpg';
                                                            }
                                                            ?>
                                                            <img src="<?php echo esc_url($default_image_url); ?>" alt="<?php the_title(); ?>">
                                                        <?php else : ?>
                                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/archive/archive-default.jpg" alt="<?php the_title(); ?>">
                                                        <?php endif; ?>
                                                    <?php endif; ?>
                                                </div>
                                                <div class="text">
                                                    <div class="text-info">
                                                        <?php
                                                        if ($category_slug === 'information') {
                                                            $cats_class = 'category-red';
                                                        } elseif ($category_slug === 'event') {
                                                            $cats_class = 'category-green';
                                                        } elseif ($category_slug === 'food') {
                                                            $cats_class = 'category-yellow';
                                                        }
                                                        ?>
                                                        <div class="text-info-cat">
                                                            <span class="category <?php echo esc_attr($cats_class); ?>"><?php echo esc_html($event_category[0]->name); ?></span>
                                                        </div>
                                                        <div class="text-info-term">
                                                            <span class="term"><?php echo $event_start_date; ?></span>
                                                        </div>

                                                    </div>

                                                    <h3><?php the_title(); ?></h3>
                                                </div>
                                            </a>
                                        </div>
                                <?php
                                    endwhile;
                                    wp_reset_postdata();
                                else :
                                    echo '<p class="text-base">イベントが見つかりませんでした。</p>';
                                endif;
                                ?>
                            </div>
                        </div>
                    </div>

                    <div id="area03" class="area">
                        <div class="swiper swiper-event_3 sec01-col-main">
                            <div class="swiper-wrapper">
                                <?php
                                $args = array(
                                    'post_type' => 'event', // カスタム投稿タイプ名
                                    'posts_per_page' => 3, // 表示する記事数
                                    'orderby' => 'date', // 日付でソート
                                    'order' => 'DESC', // 降順
                                    //event_tagがlumitedのものを取得
                                    'tax_query' => array(
                                        array(
                                            'taxonomy' => 'event_tag',
                                            'field'    => 'slug',
                                            'terms'    => 'per_event',
                                        ),
                                    ),
                                );
                                ?>
                                <?php
                                $the_query = new WP_Query($args);
                                if ($the_query->have_posts()) :
                                    while ($the_query->have_posts()) : $the_query->the_post();
                                        $event_category = get_the_terms(get_the_ID(), 'event_category');
                                        $event_start_date = get_field('event_start_date'); // 開始日


                                        $is_hot = get_field('hot'); // HOT! フラグ
                                ?>

                                        <div class="swiper-slide">
                                            <a href="<?php the_permalink(); ?>">
                                                <?php if ($is_hot) : ?>
                                                    <span class="hot"><?php echo $is_hot; ?></span>
                                                <?php endif; ?>
                                                <span class="fire"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/icon-01-small.png" alt=""></span>
                                                <div class="img img-info">
                                                    <?php if (has_post_thumbnail()) : ?>
                                                        <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title(); ?>">
                                                    <?php else : ?>
                                                        <?php if ($event_category && !is_wp_error($event_category)) : ?>
                                                            <?php
                                                            // カテゴリーに応じたデフォルト画像を設定
                                                            $category_slug = $event_category[0]->slug;
                                                            $default_image_url = get_template_directory_uri() . '/assets/img/archive/archive-default.jpg'; // デフォルト画像

                                                            if ($category_slug === 'information') {
                                                                $default_image_url = get_template_directory_uri() . '/assets/img/archive/archive-red.jpg';
                                                            } elseif ($category_slug === 'event') {
                                                                $default_image_url = get_template_directory_uri() . '/assets/img/archive/archive-green.jpg';
                                                            } elseif ($category_slug === 'food') {
                                                                $default_image_url = get_template_directory_uri() . '/assets/img/archive/archive-yellow.jpg';
                                                            }
                                                            ?>
                                                            <img src="<?php echo esc_url($default_image_url); ?>" alt="<?php the_title(); ?>">
                                                        <?php else : ?>
                                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/archive/archive-default.jpg" alt="<?php the_title(); ?>">
                                                        <?php endif; ?>
                                                    <?php endif; ?>
                                                </div>
                                                <div class="text">
                                                    <div class="text-info">
                                                        <?php
                                                        if ($category_slug === 'information') {
                                                            $cats_class = 'category-red';
                                                        } elseif ($category_slug === 'event') {
                                                            $cats_class = 'category-green';
                                                        } elseif ($category_slug === 'food') {
                                                            $cats_class = 'category-yellow';
                                                        }
                                                        ?>
                                                        <div class="text-info-cat">
                                                            <span class="category <?php echo esc_attr($cats_class); ?>"><?php echo esc_html($event_category[0]->name); ?></span>
                                                        </div>
                                                        <div class="text-info-term">
                                                            <span class="term"><?php echo $event_start_date; ?></span>
                                                        </div>

                                                    </div>

                                                    <h3><?php the_title(); ?></h3>
                                                </div>
                                            </a>
                                        </div>
                                <?php
                                    endwhile;
                                    wp_reset_postdata();
                                else :
                                    echo '<p class="text-base">イベントが見つかりませんでした。</p>';
                                endif;
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="com-btn-sp"><a href="<?php echo home_url(); ?>/event/">一覧を見る<i class="black"></i></a></div>
                <div class="sec-01-col-under">
                    <a href="<?php echo home_url(); ?>/schedule/">
                        <div class="sec-01-col-under-img"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/top-img-01.jpg" alt=""></div>
                        <div class="sec-01-col-under-title">
                            <?php
                            /*
                                <h3>E<span>VENT</span><i class="icon-fire"></i><br>S<span>CHEDUL<span class="item-text">E</span></span><i class="icon-btn"></i></h3>
                                */
                            ?>
                            <h3><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/title-event-schedule_v2.png" alt="EVENT SCHEDULE"><i class="icon-btn"></i></h3>
                            <p>イベントはこちらをチェック！</p>
                        </div>
                        <div class="sec-01-col-under-move-item">
                            <span><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/icon-speaker.png" alt=""></span>
                            <span><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/icon-box.png" alt=""></span>
                            <span><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/icon-decoration-02.png" alt=""></span>
                            <span><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/icon-decoration-01.png" alt=""></span>
                        </div>
                    </a>
                </div>

            </div>
        </section>

        <section class="sec02">
            <div class="sec02-bg-top">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/com/sec02-bg-top_v2.png" alt="">
                <span class="bg-item-06"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/com/bg-item-06.png" alt=""></span>
                <span class="bg-item-05"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/com/bg-item-05.png" alt=""></span>
            </div>
            <div class="sec02-bg">
                <div class="sec02-wrap">
                    <div class="com-title com-title-left com-title-white com-title-hidden">
                        <p class="color-white">イベント情報</p>
                        <h2 class="color-white">
                            <span class="title">N</span><span class="title">E</span><span class="title">W</span><span class="title">S</span>
                            <span class="title title-item-sprout">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/icon-sprout-white.png" alt="">
                            </span>
                            <span class="title title-item-sun">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/com/item-01.png" alt="">
                            </span>
                        </h2>
                        <a href="<?php echo home_url(); ?>/archive/">一覧を見る<i></i></a>
                    </div>
                    <div class="com-btn-sp"><a href="<?php echo home_url(); ?>/category/news/">お知らせ一覧を見る<i class="green"></i></a></div>
                    <div class="content-width">
                        <div class="sec02-list">
                            <div class="sec02-list-wrap sec02-list-wrap-left">
                                <h3>NEWS<a href="<?php echo home_url(); ?>/category/news/">一覧を見る<i></i></a></h3>
                                <?php
                                $args = array(
                                    'post_type' => 'post', // 投稿タイプ
                                    'posts_per_page' => 3, // 表示件数
                                    'orderby' => 'date', // 日付でソート
                                    'order' => 'DESC', // 降順
                                    'category_name' => 'news', // 特定のカテゴリーを指定する場合
                                );
                                ?>
                                <ul>
                                    <?php
                                    $the_query = new WP_Query($args);
                                    if ($the_query->have_posts()) :
                                        while ($the_query->have_posts()) : $the_query->the_post();
                                    ?>
                                            <li><a href="<?php the_permalink(); ?>">
                                                    <div class="sec02-list-img">
                                                        <?php if (has_post_thumbnail()) : ?>
                                                            <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title(); ?>">
                                                        <?php else : ?>
                                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/com/dummy-small.jpg" alt="<?php the_title(); ?>">
                                                        <?php endif; ?>
                                                    </div>
                                                    <div class="sec02-list-txt">
                                                        <span class="category">お知らせ</span>
                                                        <time><?php the_time('Y.m.d'); ?></time>
                                                        <h4><?php the_title(); ?></h4>
                                                    </div>
                                                </a></li>
                                    <?php
                                        endwhile;
                                        wp_reset_postdata();
                                    else :
                                        echo '<p class="text-base color-white">ニュースが見つかりませんでした。</p>';
                                    endif;
                                    ?>
                                </ul>
                                <div class="com-btn-sp"><a href="<?php echo home_url(); ?>/category/news/">NEWS一覧を見る<i class="black"></i></a></div>
                            </div>
                            <div class="sec02-list-wrap sec02-list-wrap-right">
                                <h3>MEDIA<a href="<?php echo home_url(); ?>/category/media/">一覧を見る<i></i></a></h3>
                                <?php
                                $args = array(
                                    'post_type' => 'post', // 投稿タイプ
                                    'posts_per_page' => 3, // 表示件数
                                    'orderby' => 'date', // 日付でソート
                                    'order' => 'DESC', // 降順
                                    'category_name' => 'media', // 特定のカテゴリーを指定する場合
                                );
                                ?>
                                <ul>
                                    <?php
                                    $the_query = new WP_Query($args);
                                    if ($the_query->have_posts()) :
                                        while ($the_query->have_posts()) : $the_query->the_post();
                                    ?>
                                            <li><a href="<?php the_permalink(); ?>">
                                                    <div class="sec02-list-img">
                                                        <?php if (has_post_thumbnail()) : ?>
                                                            <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title(); ?>">
                                                        <?php else : ?>
                                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/com/dummy-small.jpg" alt="<?php the_title(); ?>">
                                                        <?php endif; ?>
                                                    </div>
                                                    <div class="sec02-list-txt">
                                                        <span class="category">お知らせ</span>
                                                        <time><?php the_time('Y.m.d'); ?></time>
                                                        <h4><?php the_title(); ?></h4>
                                                    </div>
                                                </a></li>
                                    <?php
                                        endwhile;
                                        wp_reset_postdata();
                                    else :
                                        echo '<p class="color-white text-base">ニュースが見つかりませんでした。</p>';
                                    endif;
                                    ?>
                                </ul>
                                <div class="com-btn-sp"><a href="<?php echo home_url(); ?>/category/media/">MEDIA一覧を見る<i class="black"></i></a></div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="sec02-bg-under">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/com/sec02-bg-under_v2.png" alt="">
                <span class="bg-item-04"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/com/bg-item-04.png" alt=""></span>
            </div>
        </section>

        <section class="sec03">
            <div class="sec03-col">


                <div class="sec03-col-txt">
                    <div class="com-title com-title-big com-title-concept">
                        <p class="">コンセプト</p>
                        <h2 class="">
                            <p class="com-title-p-hidden">
                                <span class="title">C</span><span class="title">O</span><span class="title">N</span><span class="title">C</span><span class="title">E</span><span class="title">P</span><span class="title">T</span>
                            </p>
                            <span class="title title-item-sprout">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/icon-sprout-blown.png" alt="">
                            </span>
                            <span class="title title-item-sun-big">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/com/item-01-big.png" alt="">
                            </span>
                        </h2>
                    </div>

                    <h3><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/title-well-being.svg" alt="Well-beiing">な時間を、<br>すべての人に。</h3>

                    <p>
                        松坂温泉グルスパは<br>
                        「ウェルビーイング＝心身ともに満たされた状態」をテーマにしたスパリゾートです。<br><br>

                        この地の恵みを活かした天然温泉・岩盤浴・食・休息。<br><br>

                        すべての体験が、あなたの心と体を解き放つ<br>
                        “ととのい”につながります。
                    </p>
                </div>
                <div class="sec03-col-item">

                    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"></script>


                    <svg version="1.1" id="レイヤー_1"
                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 369.5 369.5">
                        <style type="text/css">
                            .st100 {
                                fill: none;
                            }

                            .st200 {
                                fill: none;
                                display: none;
                            }
                        </style>

                        <g id="path_108236">
                            <path class="st100" d="M184.8,0c102,0,184.8,82.7,184.8,184.8s-82.7,184.8-184.8,184.8S0,286.8,0,184.8S82.7,0,184.8,0z" />
                            <path class="st200" d="M184.8,14C90.6,14,14,90.6,14,184.8s76.6,170.8,170.8,170.8s170.8-76.6,170.8-170.8S278.9,14,184.8,14
      M184.8,0c102,0,184.8,82.7,184.8,184.8s-82.7,184.8-184.8,184.8S0,286.8,0,184.8S82.7,0,184.8,0z" />
                        </g>
                    </svg>

                    <script>
                        gsap.registerPlugin(ScrollTrigger);

                        window.addEventListener('DOMContentLoaded', () => {
                            const path = document.querySelector('path.st100');
                            if (!path) return;

                            // パス長を取得
                            const length = path.getTotalLength();

                            // stroke 属性など設定
                            path.setAttribute('stroke', '#3C3636');
                            path.setAttribute('stroke-width', 8);
                            path.setAttribute('stroke-linecap', 'round');
                            path.setAttribute('fill', 'none');

                            // 初期状態（パスを非表示）
                            path.style.strokeDasharray = length;
                            path.style.strokeDashoffset = length;

                            // ScrollTrigger で発火させる
                            ScrollTrigger.create({
                                trigger: '.sec03-col-item',
                                start: 'top 80%',
                                toggleActions: 'play none none none',
                                once: true,
                                onEnter: () => {
                                    gsap.to(path, {
                                        strokeDashoffset: 0,
                                        duration: 2.6,
                                        ease: "power1.inOut"
                                    });
                                }
                            });
                        });
                    </script>


                    <div class="sec03-col-item-child sec03-col-item-child-1"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/sec03-col-item-child-1.png" alt=""></div>
                    <div class="sec03-col-item-child sec03-col-item-child-2"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/sec03-col-item-child-2.png" alt=""></div>
                    <div class="sec03-col-item-child sec03-col-item-child-3"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/sec03-col-item-child-3.png" alt=""></div>
                    <div class="sec03-col-item-child sec03-col-item-child-4"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/sec03-col-item-child-4.png" alt=""></div>
                </div>
            </div>

            <div class="content-width">
                <div class="sec03-col-under">
                    <div class="sec03-col-under-wrap">
                        <div class="sec03-col-under-title">
                            <h3>
                                <?php
                                /*
                                A<span>BOUT</span><i class="icon-fire"></i><br>G<span>URUSP<span class="item-text">A</span></span>
                                */
                                ?>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/title-about-guruspa_v2.png" alt="ABOUT GURUSPA">
                            </h3>
                            <p>グルスパについて</p>
                        </div>

                        <div class="sec03-col-under-btn">
                            <div class="com-btn sec03-col-under-btn-1"><a href="<?php echo home_url(); ?>/first-time/">初めてのお客様へ<span class="icon-btn--1"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/icon-btn--1.png" alt=""></span><i></i></a></div>
                            <div class="com-btn"><a href="<?php echo home_url(); ?>/guide/">ご利用案内<span class="icon-btn--2"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/icon-btn--2.png" alt=""></span></span><i></i></a></div>
                        </div>
                    </div>

                    <div class="loop-slider">
                        <div class="loop-track" id="sliderTrack">
                            <?php for ($i = 0; $i < 2; $i++) : // 2セット 
                            ?>
                                <div class="loop-item"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/top-slider-01.jpg" alt=""></div>
                                <div class="loop-item loop-item-2"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/top-slider-02.png" alt=""></div>
                                <div class="loop-item"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/top-slider-03.jpg" alt=""></div>
                                <div class="loop-item loop-item-2"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/top-slider-04.png" alt=""></div>
                                <div class="loop-item"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/top-slider-05.jpg" alt=""></div>
                            <?php endfor; ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="sec04">
            <div class="sec04-bg-top">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/com/sec04-bg-top_v2.png" alt="">
            </div>
            <div class="sec04-bg">
                <div class="shizuku-group group-a">
                    <span class="shizuku shizuku-1"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/item-shizuku-1-1.png" alt=""></span>
                    <span class="shizuku shizuku-2"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/item-shizuku-1-2.png" alt=""></span>
                    <span class="shizuku shizuku-3"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/item-shizuku-1-3.png" alt=""></span>
                </div>
                <div class="shizuku-group group-b">
                    <span class="shizuku shizuku-4"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/item-shizuku-2-1.png" alt=""></span>
                    <span class="shizuku shizuku-5"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/item-shizuku-2-2.png" alt=""></span>
                </div>

                <?php /*
                <span class="shizuku-1"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/item-shizuku-1-1.png" alt=""></span>
                <span class="shizuku-2"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/item-shizuku-1-2.png" alt=""></span>
                <span class="shizuku-3"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/item-shizuku-1-3.png" alt=""></span>
                <span class="shizuku-4"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/item-shizuku-2-1.png" alt=""></span>
                <span class="shizuku-5"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/item-shizuku-2-2.png" alt=""></span>
                */ ?>
                <span class="ring-1"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/sec04-item-ring.png" alt=""></span>
                <span class="ring-2"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/sec04-item-ring.png" alt=""></span>
                <div class="content-width-small">
                    <div class="sec04-wrap">
                        <div class="com-title center com-title-white com-title-hidden">
                            <p>サービス内容</p>
                            <h2 class="">
                                <span class="title">S</span><span class="title">E</span><span class="title">R</span><span class="title">V</span><span class="title">I</span><span class="title">C</span><span class="title">E</span>
                                <span class="title title-item-sprout">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/icon-sprout-white.png" alt="">
                                </span>
                                <span class="title title-item-sun">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/com/item-01.png" alt="">
                                </span>
                            </h2>
                        </div>
                        <div class="sec04-wrap-txt">
                            <p>
                                当館では温泉・サウナ・岩盤浴・お食事・リラクゼーションなど、多彩なサービスをご用意。<br>心と身体を解きほぐし、特別なくつろぎの時間をお届けします。
                            </p>
                            <a href="<?php echo home_url(); ?>/enjoy/">館内の楽しみ方<i></i></a>
                        </div>
                        <div class="sec04-wrap">
                            <div class="sec04-wrap-col sec04-wrap-right">
                                <div class="sec04-wrap-col-img">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/top-img-03.jpg" alt="">
                                </div>
                                <div class="sec04-wrap-col-txt">
                                    <h3>お風呂</h3>
                                    <p>
                                        地下1,300ｍから汲み上げた天然温泉を使用。<br>
                                        泉質はメタけい酸を豊富に含み、肌の新陳代謝を促し、セラミドを整える“美肌の湯”として知られています。大きな露天風呂をはじめ、様々な種類のお風呂をご用意しておりますので、四季の風を感じながら至福のひとときをお過ごしください。
                                    </p>
                                    <a href="<?php echo home_url(); ?>/enjoy/spa/">くわしく見る<i></i></a>
                                </div>
                            </div>
                            <div class="sec04-wrap-col sec04-wrap-left">
                                <div class="sec04-wrap-col-img">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/top-img-04.jpg" alt="">
                                </div>
                                <div class="sec04-wrap-col-txt">
                                    <h3>サウナ＆水風呂</h3>
                                    <p>
                                        当館では、発汗・癒し・爽快感を存分に味わえるサウナの後には、7℃の極冷水風呂・16℃の水風呂・29℃のぬる湯と、好みに合わせて選べる3種類の水風呂もご用意。一気にクールダウンしたい方も、ゆっくり“ととのい”たい方も、自分だけのスタイルで楽しめます。<br>
                                        ここでしか体験できないサウナ時間で、ぜひ“最高のととのい”を見つけてください。
                                    </p>
                                    <a href="<?php echo home_url(); ?>/enjoy/sauna/">くわしく見る<i></i></a>
                                </div>
                            </div>
                            <div class="sec04-wrap-col sec04-wrap-right">
                                <div class="sec04-wrap-col-img">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/top-img-05.jpg" alt="">
                                </div>
                                <div class="sec04-wrap-col-txt">
                                    <h3>発汗エリア<br class="hidden-sm">(有料岩盤浴エリア)</h3>
                                    <p>
                                        岩盤浴・アトラクションサウナ・マンガ・リクライニング・中温ホール・テラスなどが揃った特別エリア。<br>
                                        時間を忘れてゆったり過ごしたい方にぴったりの癒し空間です。<br>
                                        館内とはひと味違う、深いリラックスをお楽しみください。
                                    </p>
                                    <a href="<?php echo home_url(); ?>/enjoy/sweating/">くわしく見る<i></i></a>
                                </div>
                            </div>
                            <div class="sec04-wrap-col sec04-wrap-left">
                                <div class="sec04-wrap-col-img">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/top-img-06.jpg" alt="">
                                </div>
                                <div class="sec04-wrap-col-txt">
                                    <h3>ご飲食</h3>
                                    <p>
                                        館内の飲食エリアでは、和食や洋食、クラフトビール、スイーツまで幅広いお客様にご満足いただけるメニューをご用意。<br>
                                        「キッチントキワ」では三重県産食材を使った料理やサ飯を、くつろぎ空間で。「スイートラボ」では珍しいスイーツやSNS映えするデザートを楽しめます。
                                    </p>
                                    <a href="<?php echo home_url(); ?>/enjoy/food/">くわしく見る<i></i></a>
                                </div>
                            </div>
                            <div class="sec04-wrap-col sec04-wrap-right">
                                <div class="sec04-wrap-col-img">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/top-img-07.jpg" alt="">
                                </div>
                                <div class="sec04-wrap-col-txt">
                                    <h3>リラクゼーション</h3>
                                    <p>
                                        ボディケア・あかすり・フットマッサージなど、豊富な施術をご用意。<br>
                                        日々の疲れを芯から癒したい方におすすめです。<br>
                                        予約制でスムーズにご案内でき、定期的にリラクイベントも開催中。贅沢なひとときをお過ごしください。
                                    </p>
                                    <a href="<?php echo home_url(); ?>/enjoy/relaxation/">くわしく見る<i></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="sec04-bg-under">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/com/sec04-bg-under_v2.png" alt="">
                <span class="bg-item-07"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/com/bg-item-07.png" alt=""></span>
            </div>
        </section>

        <section class="sec05">
            <div class="sec05-wrap">
                <div class="content-width">
                    <div class="com-title center com-title-hidden">
                        <p>料金表</p>
                        <h2 class="">
                            <span class="title">M</span><span class="title">E</span><span class="title">N</span><span class="title">U</span>
                            <span class="title title-item-sprout">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/icon-sprout-blown.png" alt="">
                            </span>
                            <span class="title title-item-sun">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/com/item-01.png" alt="">
                            </span>
                        </h2>
                    </div>
                    <div class="sec05-wrap-table">
                        <h3>通常入泉</h3>
                        <table class="price-table">
                            <thead>
                                <tr>
                                    <th class="col-left"></th>
                                    <th class="col-center">平日</th>
                                    <th class="col-right">土日祝日</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        一般<br><span class="note">※中学生以上</span>
                                    </td>
                                    <td><strong>980</strong><small>円</small></td>
                                    <td><strong>1,180</strong><small>円</small></td>
                                </tr>
                                <tr>
                                    <td>
                                        会員
                                    </td>
                                    <td><strong>930</strong><small>円</small></td>
                                    <td><strong>1,130</strong><small>円</small></td>
                                </tr>
                                <tr>
                                    <td>
                                        子供<br><span class="note">※小学生以下</span>
                                    </td>
                                    <td><strong>400</strong><small>円</small></td>
                                    <td><strong>500</strong><small>円</small></td>
                                </tr>
                                <tr>
                                    <td>
                                        幼児<br><span class="note">※3歳以下</span>
                                    </td>
                                    <td colspan="2"><strong>無料</strong></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="sec05-wrap-txt">
                        <p>
                            ※小学生以下は保護者同伴必須<br>
                            ※18歳未満の方は保護者同伴なしの場合、22時まで利用可<br>
                            ※入退場・入浴・トイレを自力で行えない方は同性付添人が必要<br>
                            ※身長120cm以上のお子様は混浴禁止（条例に従う）
                        </p>
                    </div>
                    <div class="sec05-wrap-under-item">
                        <h3>発汗エリア(有料岩盤浴)</h3>
                        <table class="price-table">
                            <thead>
                                <tr>
                                    <th class="col-left"></th>
                                    <th class="col-center">平日</th>
                                    <th class="col-right">土日祝日</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        一般<br><span class="note">※中学生以上</span>
                                    </td>
                                    <td><strong>860</strong><small>円</small></td>
                                    <td><strong>960</strong><small>円</small></td>
                                </tr>
                                <tr>
                                    <td>
                                        会員
                                    </td>
                                    <td><strong>810</strong><small>円</small></td>
                                    <td><strong>910</strong><small>円</small></td>
                                </tr>
                                <tr>
                                    <td>
                                        子供<br><span class="note">※小学生以下</span>
                                    </td>
                                    <td><strong>300</strong><small>円</small></td>
                                    <td><strong>400</strong><small>円</small></td>
                                </tr>
                                <tr>
                                    <td>
                                        幼児<br><span class="note">※3歳以下</span>
                                    </td>
                                    <td colspan="2"><strong>無料</strong></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="sec05-wrap-txt">
                        <p>
                            ※ 発汗エリアセットには専用ウェア・タオルが含まれます。<br>
                            ※ 小学生未満のお子様はご利用できません。
                        </p>
                    </div>
                    <div class="sec05-wrap-under-link">
                        <a href="<?php echo home_url(); ?>/guide/">ご利用案内<i></i></a>
                    </div>
                </div>
            </div>
        </section>

        <section class="sec06">
            <div class="sec06-bg-top">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/com/sec06-bg-top.png" alt="">
            </div>
            <div class="sec06-bg">
                <div class="content-width">
                    <div class="com-title center com-title-hidden">
                        <p>アクセス</p>
                        <h2 class="">
                            <span class="title">A</span><span class="title">C</span><span class="title">C</span><span class="title">E</span><span class="title">S</span><span class="title">S</span>
                            <span class="title title-item-sprout">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/icon-sprout-blown.png" alt="">
                            </span>
                            <span class="title title-item-sun">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/com/item-01-white.png" alt="">
                            </span>
                        </h2>
                    </div>

                    <ul class="sec06-map">
                        <li></li>
                        <li></li>
                    </ul>
                    <div class="sec06-wrap-under-link">
                        <a href="<?php echo home_url(); ?>/guide/#sec05">くわしく見る<i></i></a>
                    </div>
                </div>
            </div>
            <div class="sec06-bg-under">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/com/sec06-bg-under.png" alt="">
            </div>
        </section>



        <section class="sec07-com sec07">
            <div class="content-width">
                <div class="sec07-wrap">
                    <div class="sec07-wrap-title">
                        <div class="com-title com-title-faq center com-title-hidden">
                            <p>よくある質問</p>
                            <h2 class="">
                                <span class="title">F</span><span class="title">A</span><span class="title">Q</span>
                                <span class="title title-item-sprout">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/icon-sprout-blown.png" alt="">
                                </span>
                                <span class="title title-item-sun">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/com/item-01.png" alt="">
                                </span>
                            </h2>
                            <a href="">一覧を見る<i></i></a>
                        </div>
                    </div>
                    <div class="sec07-wrap-faq accordion">
                        <dl>
                            <dt><i></i>岩盤浴ウェアやタオルは自分で持っていく必要がありますか？</dt>
                            <dd></dd>
                        </dl>
                        <dl>
                            <dt><i></i>天然温泉は源泉かけ流しですか？</dt>
                            <dd></dd>
                        </dl>
                        <dl>
                            <dt><i></i>混雑する時間帯はいつですか？</dt>
                            <dd></dd>
                        </dl>
                        <dl>
                            <dt><i></i>発汗エリアは誰でも利用できますか？</dt>
                            <dd></dd>
                        </dl>
                        <dl>
                            <dt><i></i>駐車場はありますか？</dt>
                            <dd></dd>
                        </dl>

                        <div class="com-btn-mobile hidden-sm">
                            <a href="<?php echo home_url(); ?>/faq/">一覧を見る<i></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <aside class="aside">
            <div class="aside-bg-top"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/aside/aside-bg-top.png" alt=""></div>
            <div class="aside-bg">
                <div class="content-width">
                    <div class="aside-btn-1">
                        <a href="">
                            <div class="aside-btn-1-img">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/com/aside-img.jpg" alt=""><i></i>
                            </div>
                            <div class="aside-btn-1-txt">
                                <div class="aside-title">
                                    <h2>
                                        <span class="title">R</span><span class="title">E</span><span class="title">C</span><span class="title">R</span><span class="title">U</span><span class="title">I</span><span class="title">T</span>
                                        <span class="title-item-sprout">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/icon-sprout-white.png" alt="">
                                        </span>
                                        <span class="title-item-sun">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/com/item-01.png" alt="">
                                        </span>
                                    </h2>
                                </div>
                                <p>
                                    お客様にもスタッフにも！<br>
                                    元気と癒しを届ける仲間を募集中<i></i>
                                </p>
                            </div>
                        </a>
                    </div>
                    <div class="aside-btn-flex">
                        <div class="aside-btn-2">
                            <a href="">
                                <h3><i></i>CONTACT</h3>
                                <p>お客様お問い合わせ</p>
                            </a>
                        </div>
                        <div class="aside-btn-3">
                            <a href="">
                                <h3><i></i>CONTACT</h3>
                                <p>企業様お問い合わせ</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="footer-fixed footer-fixed-sp">
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
        </aside>
    </div>
</main>

<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.0/gsap.min.js"></script>
<style>
    /* 基本設定 */
    .top_logo_img svg {
        overflow: visible;
    }

    /* 下端基準で縦スケールする .st4（重要） */
    .top_logo_img svg .st4 {
        transform-box: fill-box;
        -webkit-transform-box: fill-box;
        transform-origin: 50% 0%;
        -webkit-transform-origin: 50% 0%;
        will-change: transform, opacity;
    }

    /* path の横スライド用に transform-box を念のため設定 */
    .top_logo_img svg path,
    .top_logo_img svg .st5 {
        transform-box: fill-box;
        -webkit-transform-box: fill-box;
        will-change: transform, opacity;
    }



    /* reduced motion 対応のためのCSS（任意） */
    @media (prefers-reduced-motion: reduce) {
        .top_logo_img svg * {
            transition: none !important;
            animation: none !important;
        }
    }
</style>





<script>
    // Group A
    (function() {
        const groupA = document.querySelector(".group-a");
        const shizukuA = groupA.querySelectorAll(".shizuku");
        let aFired = false;

        window.addEventListener("scroll", () => {
            if (aFired) return;

            const rect = groupA.getBoundingClientRect();
            if (rect.top < 0 && rect.bottom < window.innerHeight) {
                aFired = true;

                shizukuA.forEach((el, i) => {
                    el.classList.remove("animate");
                    void el.offsetWidth; // トリガー再初期化
                    setTimeout(() => {
                        el.classList.add("animate");
                    }, i * 300); // タイミングずらし
                });

                // 再発火可能にしたいなら一定時間後にリセット
                setTimeout(() => {
                    aFired = false;
                }, 2000);
            }
        });
    })();
</script>

<script>
    // Group B

    (function() {
        const groupB = document.querySelector(".group-b");
        const shizukuB = groupB.querySelectorAll(".shizuku");
        let bFired = false;

        window.addEventListener("scroll", () => {
            if (bFired) return;

            const rect = groupB.getBoundingClientRect();
            if (rect.top < 0 && rect.bottom < window.innerHeight) {
                bFired = true;

                shizukuB.forEach((el, i) => {
                    el.classList.remove("animate");
                    void el.offsetWidth;
                    setTimeout(() => {
                        el.classList.add("animate");
                    }, i * 300);
                });

                setTimeout(() => {
                    bFired = false;
                }, 2000);
            }
        });
    })();
</script>

<script>
    function observeRingAnimation(ringSelector) {
        const ring = document.querySelector(ringSelector);
        if (!ring) return;

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    ring.classList.add('ring-animate');
                    observer.unobserve(entry.target); // 一度だけ発火
                }
            });
        }, {
            threshold: 0.5 // 画面に50%以上見えたら
        });

        observer.observe(ring);
    }

    observeRingAnimation('.ring-1');
    observeRingAnimation('.ring-2');
</script>

<script>
    window.addEventListener('load', function() {
        const track = document.querySelector('.loop-track');
        const items = Array.from(track.children);
        const singleSetWidth = items.slice(0, items.length / 2).reduce((acc, item) => acc + item.offsetWidth + 20, 0);
        track.style.setProperty('--scroll-width', `${singleSetWidth}px`);
    });
</script>

<script>
    /*
    let percent = 0;
    const flameColor = document.querySelector('.flame-color');
    const loaderPercent = document.querySelector('.loader-percent');

    const loadingInterval = setInterval(() => {
        percent++;
        loaderPercent.textContent = percent + '%';
        flameColor.style.clipPath = `inset(${100 - percent}% 0 0 0)`;

        if (percent >= 100) {
            clearInterval(loadingInterval);
            // ローディング完了処理へ
        }
    }, 30);
    */
</script>




<script>
    function logoAnimation() {
        // ------------- セレクタ（英語ID / 日本語ID の両方に対応） -------------
        const st2Sel = '.top_logo_img svg .st2';
        const st4Sel = '.top_logo_img svg .st4';

        // path の id は SVG で "path_1013" のように日本語名になっている可能性があるため、
        // 英語版の #path_1013 と日本語版の [id="path_1013"] の両方を試すセレクタを使う
        const path1013Sel = '#path_1013, [id="path_1013"], #path_1013, [id="path_1013"]';
        const path1007Sel = '#path_1007, [id="path_1007"], #path_1007, [id="path_1007"]';
        const path1008Sel = '#path_1008, [id="path_1008"], #path_1008, [id="path_1008"]';

        const st5Sel = '.top_logo_img svg .st5';

        // ------------- reduced motion チェック -------------
        const prefersReduced = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
        if (prefersReduced) {
            gsap.set([st2Sel, st4Sel, path1013Sel, path1007Sel, path1008Sel, st5Sel], {
                opacity: 1,
                x: 0,
                y: 0,
                scaleY: 1
            });
            return;
        }

        // ------------- 初期状態を確実にセット -------------
        gsap.set(st2Sel, {
            y: 8,
            opacity: 0
        }); // st2 は少し下からフェードイン
        gsap.set(st4Sel, {
            scaleY: 0,
            opacity: 0
        }); // st4 は縦スケールで登場（下端固定）
        gsap.set(path1013Sel, {
            opacity: 0
        }); // st4 は縦スケールで登場（下端固定）
        gsap.set([path1007Sel, path1008Sel], {
            x: 0,
            opacity: 0
        }); // path は見えないように
        // path1013 は左から出すので少し左に移動しておく
        gsap.set(path1013Sel, {
            x: -10,
            opacity: 0
        });

        gsap.set(st5Sel, {
            opacity: 0
        }); // st5 はその場でフェードイン

        // ------------- タイムライン -------------
        const tl = gsap.timeline({
            defaults: {
                duration: 0.4,
                ease: 'power2.out'
            }
        });

        // 1) .st2 を時差でフェードイン（下から）
        tl.to(st2Sel, {
            y: 0,
            opacity: 1,
            stagger: 0.12
        }, '+=0.01');

        // 2) .st4 をその場から下端固定で上に伸ばす（縦方向scale）
        tl.to(st4Sel, {
            scaleY: 1,
            opacity: 1,
            duration: 0.8,
            ease: 'power2.out',
            stagger: 0.06
        }, 'revealPaths');
        tl.addLabel('revealPaths', '+=0.06');

        // 3) #path_1013 を左から右にスライドイン（少し速め）
        tl.to(path1013Sel, {
            x: 0,
            opacity: 1,
            duration: .6,
            ease: 'power2.out'
        }, '+=0.06');

        // 4) #path_1007 と #path_1008 をフェードイン（同時に、少しだけstagger）
        tl.to([path1007Sel, path1008Sel], {
            opacity: 1,
            y: 0,
            duration: 0.5,
            stagger: 0.08,
            ease: 'power2.out'
        }, 'revealPaths');

        // 5) 最後に .st5 をその場でフェードイン
        tl.to(st5Sel, {
            opacity: 1,
            duration: 1,
            ease: 'power2.out'
        }, '+=0.08');
    }

    document.addEventListener('DOMContentLoaded', () => {
        const countEl = document.getElementById('count');
        const progressEl = document.getElementById('progress');
        const checkEl = document.getElementById('check');
        if (!countEl) return;

        // --- 監視対象を集める（必要に応じて拡張） ---
        const resources = [];
        document.querySelectorAll('img').forEach(n => resources.push(n));
        document.querySelectorAll('link[rel="stylesheet"]').forEach(n => resources.push(n));
        document.querySelectorAll('iframe').forEach(n => resources.push(n));

        let total = Math.max(1, resources.length) + 1; // +1 : window.load の保険
        let loaded = 0;

        // GSAP quickSetter
        const setScaleY = gsap.quickSetter('.clip-rect', 'scaleY');
        gsap.set('.clip-rect', {
            scaleY: 0
        });

        // proxy.v を animate するためのオブジェクト
        const proxy = {
            v: 0
        };
        let tween = null;

        // 完了判定フラグ（finish_fnc を一度だけ呼ぶ）
        let finished = false;

        // ユーザーが上書きできる finish_fnc（デフォルトの挙動）
        // 例: window.finish_fnc = () => { location.href = '/home'; };
        window.finish_fnc = window.finish_fnc || function() {
            // デフォルトの完了処理（何もしない or console）
            console.log('読み込み完了（デフォルト finish_fnc が呼ばれました）');
        };

        // 完了時のシーケンス（アニメ演出 → finish_fnc 実行）
        function finishSequence() {
            if (finished) return;
            finished = true;

            //logoAnimationを500ms遅延で実行
            setTimeout(() => {
                logoAnimation();
            }, 1000);

            //左上のimgを表示 .bg-item-01をopacity:1にする
            gsap.to('.bg-item-01', {
                opacity: 1,
                duration: 1,
                delay: 1,
                ease: 'power2.out'
            });
            //右上のimgを表示 .bg-item-02をopacity:1にする
            gsap.to('.bg-item-02', {
                opacity: 1,
                duration: 1,
                delay: 1,
                ease: 'power2.out'
            });

            //.waveをy:0に戻す
            gsap.to('.wave', {
                y: 0,
                duration: 1,
                ease: 'power2.out'
            });
            //.icon-01をopacity:1にする
            gsap.to('.icon-01', {
                opacity: 1,
                duration: .5,
                delay: 3.8,
                ease: 'power2.out'
            });
            //page-loadingをgsapでy:100%にスライドアップ
            gsap.to('.page-loading', {
                opacity: 0,
                duration: 0.3,
                ease: 'power2.out',
                onComplete: () => {
                    gsap.set('.page-loading', {
                        display: 'none'
                    });

                    // 完了イベントを発火
                    const event = new CustomEvent('pageLoadingComplete', {
                        detail: {
                            message: 'Page loading is complete.'
                        }
                    });
                    window.dispatchEvent(event);
                }
            });

            //.page-loading-wrap-containerをdisplay:noneにする
            gsap.to('.page-loading-wrap-container', {
                opacity: 0,
                duration: 0,
                onComplete: () => {
                    if (checkEl) checkEl.style.display = 'none';
                }
            });

            //.footer-fixed-mainをopacity:1にする
            gsap.to('.footer-fixed', {
                opacity: 1,
                duration: 0.8,
                delay: .6,
                ease: 'power2.out'
            });
        }

        // 目的の値へ滑らかにアニメーションする関数
        function animateTo(newPercent) {
            if (tween) tween.kill();

            const delta = Math.abs(newPercent - proxy.v);
            // duration の決め方は自由（ここでは差分に応じて）
            const dur = Math.max(0.6, Math.min(1.6, (delta / 100) * 1.2));

            tween = gsap.to(proxy, {
                v: newPercent,
                duration: dur,
                ease: 'power2.out',
                onUpdate: () => {
                    const val = proxy.v;
                    countEl.textContent = Math.round(val);
                    if (progressEl) progressEl.style.width = Math.round(val) + '%';
                    setScaleY(Math.max(0, Math.min(1, val / 100)));
                },
                onComplete: () => {
                    // 完了判定（丸めて100）
                    if (Math.round(proxy.v) === 100) {
                        // call finishSequence once
                        finishSequence();
                    }
                }
            });
        }

        // target 更新
        function updateTarget() {
            let target = Math.round((loaded / total) * 100);
            if (target < 3 && loaded > 0) target = 3;
            if (loaded >= total) target = 100;
            animateTo(target);
        }

        function markOne() {
            loaded = Math.min(total, loaded + 1);
            updateTarget();
        }

        // 各リソースの読み込み監視
        resources.forEach(node => {
            const t = node.tagName && node.tagName.toLowerCase();
            if (t === 'img') {
                if (node.complete && node.naturalWidth !== 0) markOne();
                else {
                    node.addEventListener('load', markOne, {
                        once: true
                    });
                    node.addEventListener('error', markOne, {
                        once: true
                    });
                }
            } else if (t === 'link') {
                if (node.sheet) markOne();
                else {
                    node.addEventListener('load', markOne, {
                        once: true
                    });
                    node.addEventListener('error', markOne, {
                        once: true
                    });
                }
            } else if (t === 'iframe') {
                node.addEventListener('load', markOne, {
                    once: true
                });
                node.addEventListener('error', markOne, {
                    once: true
                });
            } else {
                node.addEventListener('load', markOne, {
                    once: true
                });
                node.addEventListener('error', markOne, {
                    once: true
                });
            }
        });

        // フォント含めるなら total++ して待つ
        if (document.fonts && document.fonts.ready) {
            total += 1;
            document.fonts.ready.then(markOne).catch(markOne);
        }

        // window.load 到達時の保険
        window.addEventListener('load', () => {
            const rem = total - loaded;
            for (let i = 0; i < rem; i++) setTimeout(markOne, i * 30);
        });

        // ドキュメントがすでに complete の場合は即完了扱いへ
        if (document.readyState === 'complete') {
            setTimeout(() => {
                while (loaded < total) markOne();
                updateTarget();
            }, 40);
        } else {
            // 初期を0にセット
            animateTo(0);
        }

        // 例: 外部から finish_fnc を差し替える方法（任意）
        // window.finish_fnc = (result) => {
        //   // 例: 完了後1秒でトップへ遷移
        //   return new Promise(resolve => {
        //     setTimeout(() => { location.href = '/'; resolve(); }, 1000);
        //   });
        // };

        // 例: 外部で完了イベントを拾う方法
        // window.addEventListener('pageLoadingComplete', e => console.log('完了イベント', e.detail));
    });
</script>
<?php get_footer(); ?>