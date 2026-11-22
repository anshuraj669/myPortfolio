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

    // Theme switcher
    const root = document.documentElement;
    const themeBtn = document.getElementById('themeBtn');
    const themeMenu = document.getElementById('themeMenu');
    const themeLabel = document.getElementById('themeLabel');
    if (themeBtn && themeMenu) {
        const options = themeMenu.querySelectorAll('[data-theme-value]');
        const sync = () => {
            const current = root.getAttribute('data-theme');
            options.forEach(o => {
                const on = o.dataset.themeValue === current;
                o.setAttribute('aria-checked', String(on));
                if (on && themeLabel) themeLabel.textContent = o.textContent.trim();
            });
        };
        const setMenu = (open) => {
            themeMenu.classList.toggle('open', open);
            themeBtn.setAttribute('aria-expanded', String(open));
        };
        themeBtn.addEventListener('click', (e) => {
            e.stopPropagation();
            setMenu(!themeMenu.classList.contains('open'));
        });
        options.forEach(o => o.addEventListener('click', () => {
            root.setAttribute('data-theme', o.dataset.themeValue);
            try { localStorage.setItem('theme', o.dataset.themeValue); } catch (err) {}
            sync();
            setMenu(false);
        }));
        document.addEventListener('click', (e) => {
            if (!themeMenu.contains(e.target)) setMenu(false);
        });
        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape') setMenu(false);
        });
        sync();
    }

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
