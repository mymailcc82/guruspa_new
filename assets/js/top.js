// Group A
(function () {
  const groupA = document.querySelector('.group-a');
  const shizukuA = groupA.querySelectorAll('.shizuku');
  let aFired = false;

  window.addEventListener('scroll', () => {
    if (aFired) return;

    const rect = groupA.getBoundingClientRect();
    if (rect.top < 0 && rect.bottom < window.innerHeight) {
      aFired = true;

      shizukuA.forEach((el, i) => {
        el.classList.remove('animate');
        void el.offsetWidth; // トリガー再初期化
        setTimeout(() => {
          el.classList.add('animate');
        }, i * 300); // タイミングずらし
      });

      // 再発火可能にしたいなら一定時間後にリセット
      setTimeout(() => {
        aFired = false;
      }, 2000);
    }
  });
})();

// Group B

(function () {
  const groupB = document.querySelector('.group-b');
  const shizukuB = groupB.querySelectorAll('.shizuku');
  let bFired = false;

  window.addEventListener('scroll', () => {
    if (bFired) return;

    const rect = groupB.getBoundingClientRect();
    if (rect.top < 0 && rect.bottom < window.innerHeight) {
      bFired = true;

      shizukuB.forEach((el, i) => {
        el.classList.remove('animate');
        void el.offsetWidth;
        setTimeout(() => {
          el.classList.add('animate');
        }, i * 300);
      });

      setTimeout(() => {
        bFired = false;
      }, 2000);
    }
  });
})();

function observeRingAnimation(ringSelector) {
  const ring = document.querySelector(ringSelector);
  if (!ring) return;

  const observer = new IntersectionObserver(
    (entries) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          ring.classList.add('ring-animate');
          observer.unobserve(entry.target); // 一度だけ発火
        }
      });
    },
    {
      threshold: 0, // 画面に50%以上見えたら
    }
  );

  observer.observe(ring);
}

observeRingAnimation('.ring-1');
observeRingAnimation('.ring-2');

document.addEventListener('DOMContentLoaded', () => {
  const countEl = document.getElementById('count');
  const flameColor = document.querySelector('.flame-color');
  const checkEl = document.getElementById('check');
  if (!countEl || !flameColor) return;

  const resources = [];
  document.querySelectorAll('img').forEach((n) => resources.push(n));
  document
    .querySelectorAll('link[rel="stylesheet"]')
    .forEach((n) => resources.push(n));
  document.querySelectorAll('iframe').forEach((n) => resources.push(n));

  let total = Math.max(1, resources.length) + 1;
  let loaded = 0;
  const proxy = {
    v: 0,
  };
  let tween = null;
  let finished = false;

  function finishSequence() {
    if (finished) return;
    finished = true;

    setTimeout(() => {
      logoAnimation();
    }, 1000);

    gsap.to('.bg-item-01', {
      opacity: 1,
      duration: 1,
      delay: 1,
    });
    gsap.to('.bg-item-02', {
      opacity: 1,
      duration: 1,
      delay: 1,
    });
    gsap.to('.wave', {
      y: 0,
      duration: 1,
    });
    gsap.to('.wave_nami', {
      opacity: 1,
      duration: 0.5,
      delay: 1.5,
    });
    gsap.to('.wave_nami_v2', {
      opacity: 1,
      duration: 0.9,
      delay: 2,
    });
    gsap.to('.wave_nami_v3', {
      opacity: 1,
      duration: 0.9,
      delay: 2.5,
      x: -0,
    });
    gsap.to('.icon-01', {
      opacity: 1,
      duration: 1,
      delay: 4,
    });

    gsap.to('.page-loading', {
      opacity: 0,
      duration: 0.3,
      ease: 'power2.out',
      onComplete: () => {
        gsap.set('.page-loading', {
          display: 'none',
        });
        const event = new CustomEvent('pageLoadingComplete', {
          detail: {
            message: 'Page loading is complete.',
          },
        });
        window.dispatchEvent(event);
      },
    });

    gsap.to('.page-loading-wrap-container', {
      opacity: 0,
      duration: 0,
      onComplete: () => {
        if (checkEl) checkEl.style.display = 'none';
      },
    });
  }

  function animateTo(newPercent) {
    if (tween) tween.kill();
    const delta = Math.abs(newPercent - proxy.v);
    const dur = Math.max(0.6, Math.min(1.6, (delta / 100) * 1.2));

    tween = gsap.to(proxy, {
      v: newPercent,
      duration: dur,
      ease: 'power2.out',
      onUpdate: () => {
        const val = proxy.v;
        countEl.textContent = Math.round(val);
        flameColor.style.clipPath = `inset(${100 - val}% 0 0 0)`;
      },
      onComplete: () => {
        if (Math.round(proxy.v) === 100) finishSequence();
      },
    });
  }

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

  resources.forEach((node) => {
    const t = node.tagName?.toLowerCase();
    if (t === 'img') {
      if (node.complete && node.naturalWidth !== 0) markOne();
      else {
        node.addEventListener('load', markOne, {
          once: true,
        });
        node.addEventListener('error', markOne, {
          once: true,
        });
      }
    } else if (t === 'link') {
      if (node.sheet) markOne();
      else {
        node.addEventListener('load', markOne, {
          once: true,
        });
        node.addEventListener('error', markOne, {
          once: true,
        });
      }
    } else if (t === 'iframe') {
      node.addEventListener('load', markOne, {
        once: true,
      });
      node.addEventListener('error', markOne, {
        once: true,
      });
    }
  });

  if (document.fonts?.ready) {
    total += 1;
    document.fonts.ready.then(markOne).catch(markOne);
  }

  window.addEventListener('load', () => {
    const rem = total - loaded;
    for (let i = 0; i < rem; i++) setTimeout(markOne, i * 30);
  });

  if (document.readyState === 'complete') {
    setTimeout(() => {
      while (loaded < total) markOne();
      updateTarget();
    }, 40);
  } else {
    animateTo(0);
  }
});

function logoAnimation() {
  // ------------- セレクタ（英語ID / 日本語ID の両方に対応） -------------
  const st2Sel = '.top_logo_img svg .st2';
  const st4Sel = '.top_logo_img svg .st4';

  // path の id は SVG で "path_1013" のように日本語名になっている可能性があるため、
  // 英語版の #path_1013 と日本語版の [id="path_1013"] の両方を試すセレクタを使う
  const path1013Sel =
    '#path_1013, [id="path_1013"], #path_1013, [id="path_1013"]';
  const path1007Sel =
    '#path_1007, [id="path_1007"], #path_1007, [id="path_1007"]';
  const path1008Sel =
    '#path_1008, [id="path_1008"], #path_1008, [id="path_1008"]';
  const st5Sel = '.top_logo_img svg .st5';
  // ------------- reduced motion チェック -------------
  const prefersReduced = window.matchMedia(
    '(prefers-reduced-motion: reduce)'
  ).matches;
  if (prefersReduced) {
    gsap.set([st2Sel, st4Sel, path1013Sel, path1007Sel, path1008Sel, st5Sel], {
      opacity: 1,
      x: 0,
      y: 0,
      scaleY: 1,
    });
    return;
  }
  // ------------- 初期状態を確実にセット -------------
  gsap.set(st2Sel, {
    y: 8,
    opacity: 0,
  }); // st2 は少し下からフェードイン
  gsap.set(st4Sel, {
    scaleY: 0,
    opacity: 0,
  }); // st4 は縦スケールで登場（下端固定）
  gsap.set(path1013Sel, {
    opacity: 0,
  }); // st4 は縦スケールで登場（下端固定）

  gsap.set([path1007Sel, path1008Sel], {
    x: 0,
    opacity: 0,
  }); // path は見えないように
  // path1013 は左から出すので少し左に移動しておく
  gsap.set(path1013Sel, {
    x: -10,
    opacity: 0,
  });
  gsap.set(st5Sel, {
    opacity: 0,
  }); // st5 はその場でフェードイン
  // ------------- タイムライン -------------
  const tl = gsap.timeline({
    defaults: {
      duration: 0.4,
      ease: 'power2.out',
    },
  });
  // 1) .st2 を時差でフェードイン（下から）
  tl.to(
    st2Sel,
    {
      y: 0,
      opacity: 1,
      stagger: 0.12,
    },
    '+=0.01'
  );
  // 2) .st4 をその場から下端固定で上に伸ばす（縦方向scale）
  tl.to(
    st4Sel,
    {
      scaleY: 1,
      opacity: 1,
      duration: 0.8,
      ease: 'power2.out',
      stagger: 0.06,
    },
    'revealPaths'
  );
  tl.addLabel('revealPaths', '+=0.06');
  // 3) #path_1013 を左から右にスライドイン（少し速め）
  tl.to(
    path1013Sel,
    {
      x: 0,
      opacity: 1,
      duration: 0.6,
      ease: 'power2.out',
    },
    '+=0.06'
  );

  // 4) #path_1007 と #path_1008 をフェードイン（同時に、少しだけstagger）
  tl.to(
    [path1007Sel, path1008Sel],
    {
      opacity: 1,
      y: 0,
      duration: 0.5,
      stagger: 0.08,
      ease: 'power2.out',
    },
    'revealPaths'
  );

  // 5) 最後に .st5 をその場でフェードイン
  tl.to(
    st5Sel,
    {
      opacity: 1,
      duration: 1,
      ease: 'power2.out',
    },
    '+=0.08'
  );
}
/*
window.addEventListener('load', function () {
  const track = document.querySelector('.loop-track');

  const items = Array.from(track.children);

  const singleSetWidth = items
    .slice(0, items.length / 2)
    .reduce((acc, item) => acc + item.offsetWidth + 20, 0);

  track.style.setProperty('--scroll-width', `${singleSetWidth}px`);
});

*/

gsap.registerPlugin(ScrollTrigger);

// child-1
gsap.to('.sec03-col-item-child-1-wrap', {
  y: 0,
  duration: 0.7,
  delay: 0.2,
  opacity: 1,
  ease: 'power2.out',
  scrollTrigger: {
    trigger: '.sec03-col-item',
    start: 'top 80%',
    toggleActions: 'play none none none',
  },
});

// child-2
gsap.to('.sec03-col-item-child-2-wrap', {
  y: 0,
  duration: 0.7,
  delay: 0.7,
  opacity: 1,
  ease: 'power2.out',
  scrollTrigger: {
    trigger: '.sec03-col-item',
    start: 'top 80%',
    toggleActions: 'play none none none',
  },
});

// child-3
gsap.to('.sec03-col-item-child-3-wrap', {
  y: 0,
  duration: 0.7,
  opacity: 1,
  delay: 1.2,
  ease: 'power2.out',
  scrollTrigger: {
    trigger: '.sec03-col-item',
    start: 'top 80%',
    toggleActions: 'play none none none',
  },
});

// child-4
gsap.to('.sec03-col-item-child-4-wrap', {
  y: 0,
  duration: 0.7,
  delay: 1.7,
  //透明度100%
  opacity: 1,
  ease: 'power2.out',
  scrollTrigger: {
    trigger: '.sec03-col-item',
    start: 'top 80%',
    toggleActions: 'play none none none',
  },
});
