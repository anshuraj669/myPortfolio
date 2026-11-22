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
