/* ============================================
   EFFECTS.JS — Interactions & UI behaviors
   ============================================ */

(function() {
  'use strict';

  // ---------- NAVBAR SCROLL CLASS ----------
  const navbar = document.querySelector('.navbar');
  if (navbar) {
    const onScroll = () => {
      if (window.scrollY > 80) {
        navbar.classList.add('scrolled');
      } else {
        navbar.classList.remove('scrolled');
      }
    };
    window.addEventListener('scroll', onScroll, { passive: true });
    onScroll();
  }

  // ---------- MOBILE MENU TOGGLE ----------
  const hamburger = document.querySelector('.hamburger');
  const mobileMenu = document.querySelector('.mobile-menu');
  const overlay = document.querySelector('.menu-overlay');
  const body = document.body;

  function openMenu() {
    if (!mobileMenu) return;
    mobileMenu.classList.add('open');
    if (overlay) overlay.classList.add('open');
    body.classList.add('menu-open');
    if (hamburger) hamburger.setAttribute('aria-expanded', 'true');
  }

  function closeMenu() {
    if (!mobileMenu) return;
    mobileMenu.classList.remove('open');
    if (overlay) overlay.classList.remove('open');
    body.classList.remove('menu-open');
    if (hamburger) hamburger.setAttribute('aria-expanded', 'false');
  }

  if (hamburger && mobileMenu) {
    hamburger.addEventListener('click', () => {
      const isOpen = mobileMenu.classList.contains('open');
      if (isOpen) closeMenu(); else openMenu();
    });
    mobileMenu.querySelectorAll('a').forEach((link) => {
      link.addEventListener('click', closeMenu);
    });
    if (overlay) overlay.addEventListener('click', closeMenu);
    document.addEventListener('keydown', (e) => {
      if (e.key === 'Escape' && mobileMenu.classList.contains('open')) {
        closeMenu();
      }
    });
  }

  // ---------- BACK TO TOP ----------
  const backToTop = document.querySelector('.back-to-top');
  if (backToTop) {
    const toggleBackToTop = () => {
      if (window.scrollY > 300) {
        backToTop.classList.add('visible');
      } else {
        backToTop.classList.remove('visible');
      }
    };
    window.addEventListener('scroll', toggleBackToTop, { passive: true });
    backToTop.addEventListener('click', () => {
      window.scrollTo({ top: 0, behavior: 'smooth' });
    });
    toggleBackToTop();
  }

  // ---------- TICKER PAUSE ON HOVER (CSS handles, JS supports touch) ----------
  document.querySelectorAll('.ticker-strip').forEach((ticker) => {
    const track = ticker.querySelector('.ticker-track');
    if (!track) return;
    ticker.addEventListener('touchstart', () => {
      track.style.animationPlayState = 'paused';
    }, { passive: true });
    ticker.addEventListener('touchend', () => {
      track.style.animationPlayState = 'running';
    }, { passive: true });
  });

  // ---------- RIPPLE EFFECT (opt-in via .ripple-btn) ----------
  document.querySelectorAll('.ripple-btn').forEach((btn) => {
    btn.addEventListener('click', function(e) {
      const rect = this.getBoundingClientRect();
      const ripple = document.createElement('span');
      ripple.className = 'ripple';
      const size = Math.max(rect.width, rect.height);
      ripple.style.width = ripple.style.height = size + 'px';
      ripple.style.left = (e.clientX - rect.left - size / 2) + 'px';
      ripple.style.top = (e.clientY - rect.top - size / 2) + 'px';
      this.appendChild(ripple);
      setTimeout(() => ripple.remove(), 600);
    });
  });

  // ---------- GA4 EVENT TRACKING ----------
  // Phone click tracking
  document.querySelectorAll('a[href^="tel:"]').forEach((el) => {
    el.addEventListener('click', () => {
      if (typeof gtag !== 'undefined') {
        gtag('event', 'phone_call', {
          event_category: 'contact',
          event_label: el.href
        });
      }
    });
  });

  // Form submission tracking
  document.querySelectorAll('form').forEach((form) => {
    form.addEventListener('submit', () => {
      if (typeof gtag !== 'undefined') {
        gtag('event', 'form_submit', {
          event_category: 'contact',
          event_label: window.location.pathname
        });
      }
    });
  });
})();
