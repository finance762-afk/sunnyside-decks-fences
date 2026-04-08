/* ============================================
   ANIMATIONS.JS — Scroll reveals + counters
   ============================================ */

(function() {
  'use strict';

  // ---------- SCROLL REVEAL ----------
  const animateEls = document.querySelectorAll('[data-animate]');

  if (animateEls.length && 'IntersectionObserver' in window) {
    const observer = new IntersectionObserver((entries) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          entry.target.classList.add('in-view');
          observer.unobserve(entry.target);
        }
      });
    }, {
      threshold: 0.15,
      rootMargin: '0px 0px -50px 0px'
    });

    animateEls.forEach((el) => observer.observe(el));
  } else {
    // Fallback: show everything immediately
    animateEls.forEach((el) => el.classList.add('in-view'));
  }

  // ---------- STAT COUNTERS ----------
  const counters = document.querySelectorAll('[data-counter]');

  if (counters.length && 'IntersectionObserver' in window) {
    const counterObserver = new IntersectionObserver((entries) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          animateCounter(entry.target);
          counterObserver.unobserve(entry.target);
        }
      });
    }, { threshold: 0.5 });

    counters.forEach((el) => counterObserver.observe(el));
  }

  function animateCounter(el) {
    const target = parseFloat(el.getAttribute('data-counter'));
    const duration = parseInt(el.getAttribute('data-duration'), 10) || 2000;
    const suffix = el.getAttribute('data-suffix') || '';
    const start = performance.now();

    function step(now) {
      const elapsed = now - start;
      const progress = Math.min(elapsed / duration, 1);
      const eased = 1 - Math.pow(1 - progress, 3);
      const value = Math.floor(eased * target);
      el.textContent = value.toLocaleString() + suffix;
      if (progress < 1) {
        requestAnimationFrame(step);
      } else {
        el.textContent = target.toLocaleString() + suffix;
      }
    }

    requestAnimationFrame(step);
  }
})();
