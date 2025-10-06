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