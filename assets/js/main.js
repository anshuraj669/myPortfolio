/* Anshu Raj — portfolio: mobile nav + contact form. */
(() => {
    'use strict';

    // Mobile nav toggle
    const toggle = document.getElementById('navToggle');
    const links = document.getElementById('navLinks');
    if (toggle && links) {
        toggle.addEventListener('click', () => {
            const open = links.classList.toggle('open');
            toggle.setAttribute('aria-expanded', String(open));
        });
        links.querySelectorAll('a').forEach(a => a.addEventListener('click', () => {
            links.classList.remove('open');
            toggle.setAttribute('aria-expanded', 'false');
        }));
    }

    // Scroll reveal: fade sections in as they enter the viewport, staggering siblings
    const reveals = document.querySelectorAll('.reveal');
    if ('IntersectionObserver' in window) {
        const io = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (!entry.isIntersecting) return;
                entry.target.classList.add('visible');
                io.unobserve(entry.target);
            });
        }, { threshold: 0.12, rootMargin: '0px 0px -40px 0px' });
        document.querySelectorAll('.reveal-line').forEach(el => io.observe(el));
        reveals.forEach(el => {
            const siblings = [...el.parentElement.children].filter(c => c.classList.contains('reveal'));
            el.style.transitionDelay = (Math.min(siblings.indexOf(el), 4) * 0.08) + 's';
            io.observe(el);
        });
    } else {
        document.querySelectorAll('.reveal, .reveal-line').forEach(el => el.classList.add('visible'));
    }

    // Tags: index each one so CSS can stagger their pop-in
    document.querySelectorAll('.tags').forEach(list => {
        [...list.children].forEach((li, i) => li.style.setProperty('--i', i));
    });

    // Project cards: soft spotlight follows the cursor
    document.querySelectorAll('.project').forEach(card => {
        card.addEventListener('mousemove', (e) => {
            const r = card.getBoundingClientRect();
            card.style.setProperty('--mx', (e.clientX - r.left) + 'px');
            card.style.setProperty('--my', (e.clientY - r.top) + 'px');
        });
    });

    // Scroll progress bar under the nav
    const progress = document.getElementById('progress');
    if (progress) {
        let queued = false;
        const update = () => {
            const max = document.documentElement.scrollHeight - window.innerHeight;
            progress.style.transform = 'scaleX(' + (max > 0 ? window.scrollY / max : 0) + ')';
            queued = false;
        };
        window.addEventListener('scroll', () => {
            if (!queued) { queued = true; requestAnimationFrame(update); }
        }, { passive: true });
        update();
    }

    // Nav: shadow after scrolling, and highlight the section in view
    const nav = document.querySelector('.nav');
    const onScroll = () => nav && nav.classList.toggle('scrolled', window.scrollY > 8);
    window.addEventListener('scroll', onScroll, { passive: true });
    onScroll();

    const navAnchors = document.querySelectorAll('.nav-links a[href^="#"]');
    const sectionIO = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (!entry.isIntersecting) return;
            navAnchors.forEach(a => a.classList.toggle('active', a.getAttribute('href') === '#' + entry.target.id));
        });
    }, { rootMargin: '-45% 0px -50% 0px' });
    navAnchors.forEach(a => {
        const target = document.querySelector(a.getAttribute('href'));
        if (target) sectionIO.observe(target);
    });

    // Contact form (Web3Forms) — submit without leaving the page
    const form = document.getElementById('contactForm');
    const status = document.getElementById('formStatus');
    if (form) {
        form.addEventListener('submit', async (e) => {
            e.preventDefault();
            const btn = form.querySelector('button[type="submit"]');
            btn.disabled = true;
            status.textContent = 'Sending…';
            try {
                const res = await fetch(form.action, {
                    method: 'POST',
                    body: new FormData(form),
                    headers: { Accept: 'application/json' },
                });
                const data = await res.json().catch(() => ({}));
                if (res.ok && data.success) {
                    status.textContent = 'Thanks — your message was sent. I’ll reply soon.';
                    form.reset();
                } else {
                    status.textContent = data.message || 'Something went wrong. Please email me directly.';
                }
            } catch {
                status.textContent = 'Network error. Please email me directly.';
            }
            btn.disabled = false;
        });
    }
})();
