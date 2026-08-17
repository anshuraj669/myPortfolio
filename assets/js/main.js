/* ============================================
   ANSHU RAJ — PORTFOLIO INTERACTIONS
   ============================================ */

(() => {
    'use strict';

    /* ---------------- Loader ---------------- */
    window.addEventListener('load', () => {
        const loader = document.getElementById('loader');
        if (!loader) return;
        setTimeout(() => loader.classList.add('done'), 1900);
        setTimeout(() => loader.remove(), 2800);
    });

    /* ---------------- Custom Cursor ---------------- */
    const cursor = document.getElementById('cursor');
    const cursorDot = document.getElementById('cursorDot');
    let cx = 0, cy = 0, dx = 0, dy = 0;

    if (cursor && cursorDot && window.matchMedia('(pointer: fine)').matches) {
        // Dot snaps to mouse (no lag at all)
        window.addEventListener('mousemove', (e) => {
            cx = e.clientX;
            cy = e.clientY;
            cursorDot.style.transform = `translate3d(${cx}px, ${cy}px, 0) translate(-50%, -50%)`;
            // Outer ring also snaps — feels instant
            cursor.style.transform = `translate3d(${cx}px, ${cy}px, 0) translate(-50%, -50%)`;
            dx = cx; dy = cy;
        }, { passive: true });

        const hoverables = 'a, button, .tilt, .magnetic, input, textarea, .nav-link, .chip, .project-card, .stat-card, .skill-cat, .cert-item, .ach-item, .contact-item, .social-icon, .edu-card';
        document.querySelectorAll(hoverables).forEach(el => {
            el.addEventListener('mouseenter', () => cursor.classList.add('hover'));
            el.addEventListener('mouseleave', () => cursor.classList.remove('hover'));
        });

        // Hide cursor when leaving window
        document.addEventListener('mouseleave', () => {
            cursor.style.opacity = '0';
            cursorDot.style.opacity = '0';
        });
        document.addEventListener('mouseenter', () => {
            cursor.style.opacity = '1';
            cursorDot.style.opacity = '1';
        });
    }

    /* ---------------- Floating resume pill hide-on-hero ---------------- */
    const floatResume = document.querySelector('.float-resume');
    if (floatResume) {
        const onFloatScroll = () => {
            if (window.scrollY > 80) floatResume.classList.add('shrink');
            else floatResume.classList.remove('shrink');
        };
        window.addEventListener('scroll', onFloatScroll, { passive: true });
        onFloatScroll();
    }

    /* ---------------- Typewriter ---------------- */
    const tw = document.getElementById('typewriter');
    if (tw) {
        const words = ['Backend Developer', 'API Architect', 'Database Designer', 'Problem Solver', 'System Builder'];
        let wi = 0, ci = 0, deleting = false;
        const tick = () => {
            const word = words[wi];
            tw.textContent = word.substring(0, ci);
            if (!deleting) {
                if (ci < word.length) { ci++; setTimeout(tick, 75); }
                else { deleting = true; setTimeout(tick, 1600); }
            } else {
                if (ci > 0) { ci--; setTimeout(tick, 40); }
                else { deleting = false; wi = (wi + 1) % words.length; setTimeout(tick, 300); }
            }
        };
        setTimeout(tick, 2000);
    }

    /* ---------------- Scroll Reveal (IntersectionObserver) ---------------- */
    const reveals = document.querySelectorAll('.reveal');
    const io = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
                io.unobserve(entry.target);
            }
        });
    }, { threshold: 0.12, rootMargin: '0px 0px -60px 0px' });
    reveals.forEach(r => io.observe(r));

    /* ---------------- Stagger children inside .skill-list & projects ---------------- */
    document.querySelectorAll('.skills-grid .skill-cat, .projects-grid .project-card, .edu-grid .edu-card, .about-stats .stat-card, .timeline-item, .cert-item, .ach-item').forEach((el, i) => {
        el.style.transitionDelay = (i % 6 * 0.08) + 's';
    });

    /* ---------------- Skill bar fills ---------------- */
    const barIO = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const bar = entry.target;
                const level = bar.getAttribute('data-level');
                requestAnimationFrame(() => bar.style.width = level + '%');
                barIO.unobserve(bar);
            }
        });
    }, { threshold: 0.4 });
    document.querySelectorAll('.skill-bar-fill').forEach(b => barIO.observe(b));

    /* ---------------- Animated counters ---------------- */
    const counterIO = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const el = entry.target;
                const target = parseInt(el.getAttribute('data-count'), 10);
                const suffix = el.getAttribute('data-suffix') || '';
                const duration = 1800;
                const start = performance.now();
                const animate = (now) => {
                    const t = Math.min((now - start) / duration, 1);
                    const eased = 1 - Math.pow(1 - t, 3);
                    el.textContent = Math.round(target * eased) + suffix;
                    if (t < 1) requestAnimationFrame(animate);
                };
                requestAnimationFrame(animate);
                counterIO.unobserve(el);
            }
        });
    }, { threshold: 0.5 });
    document.querySelectorAll('[data-count]').forEach(c => counterIO.observe(c));

    /* ---------------- 3D Tilt cards (with smoothing) ---------------- */
    const tiltElements = document.querySelectorAll('.tilt');
    tiltElements.forEach(el => {
        let raf = null;
        let targetRx = 0, targetRy = 0, curRx = 0, curRy = 0;
        let active = false;
        el.style.transformStyle = 'preserve-3d';

        const loop = () => {
            curRx += (targetRx - curRx) * 0.10;
            curRy += (targetRy - curRy) * 0.10;
            el.style.transform = `perspective(1000px) rotateX(${curRx}deg) rotateY(${curRy}deg) translateZ(0)`;
            if (active || Math.abs(targetRx - curRx) > 0.05 || Math.abs(targetRy - curRy) > 0.05) {
                raf = requestAnimationFrame(loop);
            } else {
                el.style.transform = '';
                raf = null;
            }
        };

        el.addEventListener('mousemove', (e) => {
            const rect = el.getBoundingClientRect();
            const px = (e.clientX - rect.left) / rect.width;
            const py = (e.clientY - rect.top) / rect.height;
            targetRx = (py - 0.5) * -6;
            targetRy = (px - 0.5) * 8;
            active = true;
            if (!raf) raf = requestAnimationFrame(loop);
        });
        el.addEventListener('mouseleave', () => {
            targetRx = 0; targetRy = 0; active = false;
            if (!raf) raf = requestAnimationFrame(loop);
        });
    });

    /* ---------------- Magnetic buttons (rAF-throttled) ---------------- */
    document.querySelectorAll('.magnetic').forEach(el => {
        const strength = 0.22;
        let raf = null, tx = 0, ty = 0;
        el.style.transition = 'transform .4s cubic-bezier(.22, 1, .36, 1)';
        el.addEventListener('mousemove', (e) => {
            const rect = el.getBoundingClientRect();
            tx = (e.clientX - rect.left - rect.width / 2) * strength;
            ty = (e.clientY - rect.top - rect.height / 2) * strength;
            if (!raf) {
                raf = requestAnimationFrame(() => {
                    el.style.transform = `translate3d(${tx}px, ${ty}px, 0)`;
                    raf = null;
                });
            }
        });
        el.addEventListener('mouseleave', () => {
            el.style.transform = '';
        });
    });

    /* ---------------- Form field placeholder hack (for floating labels) ---------------- */
    document.querySelectorAll('.form-field input, .form-field textarea').forEach(input => {
        input.setAttribute('placeholder', ' ');
    });

    /* ---------------- Form submit handler (UX feedback) ---------------- */
    const form = document.getElementById('contactForm');
    if (form) {
        form.addEventListener('submit', async (e) => {
            e.preventDefault();
            const btn = form.querySelector('button[type="submit"]');
            const btnSpan = btn ? btn.querySelector('span') : null;
            const originalText = btnSpan ? btnSpan.textContent : '';
            if (btn) {
                if (btnSpan) btnSpan.textContent = 'Sending...';
                btn.disabled = true;
                btn.style.opacity = '.7';
            }
            try {
                const res = await fetch(form.action, {
                    method: 'POST',
                    body: new FormData(form),
                    headers: { Accept: 'application/json' },
                });
                const data = await res.json().catch(() => ({}));
                if (res.ok && data.success) {
                    if (btnSpan) btnSpan.textContent = '✓ Sent! I\'ll reply soon';
                    form.reset();
                } else {
                    if (btnSpan) btnSpan.textContent = data.message || 'Something went wrong — try again';
                    btn.disabled = false;
                    btn.style.opacity = '1';
                    return;
                }
            } catch (err) {
                if (btnSpan) btnSpan.textContent = 'Network error — try again';
                btn.disabled = false;
                btn.style.opacity = '1';
                return;
            }
            setTimeout(() => {
                if (btnSpan) btnSpan.textContent = originalText;
                btn.disabled = false;
                btn.style.opacity = '1';
            }, 4000);
        });
    }

    /* ---------------- Parallax for bg orbs on mouse move (rAF-throttled) ---------------- */
    const orbs = document.querySelectorAll('.bg-orb');
    let mx = 0, my = 0, parallaxQueued = false;
    document.addEventListener('mousemove', (e) => {
        mx = (e.clientX / window.innerWidth - 0.5) * 36;
        my = (e.clientY / window.innerHeight - 0.5) * 36;
        if (!parallaxQueued) {
            parallaxQueued = true;
            requestAnimationFrame(() => {
                orbs.forEach((orb, i) => {
                    const factor = (i + 1) * 0.55;
                    orb.style.transform = `translate3d(${mx * factor}px, ${my * factor}px, 0)`;
                });
                parallaxQueued = false;
            });
        }
    }, { passive: true });

    /* ---------------- Confetti burst on hero CTA click ---------------- */
    const confettiBurst = (x, y) => {
        const colors = ['#7dffc7', '#ff5d8f', '#c084ff', '#ffd93d'];
        for (let i = 0; i < 18; i++) {
            const c = document.createElement('div');
            const ang = (Math.PI * 2 * i) / 18;
            const dist = 60 + Math.random() * 80;
            c.style.cssText = `position:fixed;left:${x}px;top:${y}px;width:8px;height:8px;border-radius:50%;background:${colors[i%4]};pointer-events:none;z-index:9998;box-shadow:0 0 12px currentColor;color:${colors[i%4]};transition:transform .9s cubic-bezier(.22,1,.36,1),opacity .9s ease-out;`;
            document.body.appendChild(c);
            requestAnimationFrame(() => {
                c.style.transform = `translate(${Math.cos(ang)*dist}px, ${Math.sin(ang)*dist + 60}px) scale(.3)`;
                c.style.opacity = '0';
            });
            setTimeout(() => c.remove(), 1000);
        }
    };
    document.querySelectorAll('.btn-primary, .nav-cta').forEach(btn => {
        btn.addEventListener('click', (e) => {
            const r = btn.getBoundingClientRect();
            confettiBurst(r.left + r.width/2, r.top + r.height/2);
        });
    });

    /* ---------------- Smooth scroll for anchor links ---------------- */
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', (e) => {
            const href = anchor.getAttribute('href');
            if (href === '#' || href.length < 2) return;
            const target = document.querySelector(href);
            if (!target) return;
            e.preventDefault();
            const offset = 90;
            window.scrollTo({
                top: target.offsetTop - offset,
                behavior: 'smooth'
            });
        });
    });

    /* ---------------- AI chat: simulated typing → reveal ---------------- */
    const aiTyping = document.getElementById('aiTyping');
    const socialsReveal = document.getElementById('socialsReveal');
    if (aiTyping && socialsReveal) {
        // hide socials initially, show after typing
        socialsReveal.style.display = 'none';
        setTimeout(() => {
            aiTyping.style.transition = 'opacity .4s, transform .4s';
            aiTyping.style.opacity = '0';
            aiTyping.style.transform = 'translateY(-6px)';
            setTimeout(() => {
                aiTyping.style.display = 'none';
                socialsReveal.style.display = 'flex';
                socialsReveal.style.animation = 'msgPop .55s cubic-bezier(.68,-0.55,.27,1.55) both';
            }, 350);
        }, 3200);
    }

    /* ---------------- Sticky composer show on scroll past hero ---------------- */
    const sticky = document.getElementById('stickyComposer');
    if (sticky) {
        const hero = document.querySelector('.hero');
        const onStickyScroll = () => {
            const heroBottom = hero ? hero.getBoundingClientRect().bottom : 0;
            if (heroBottom < 80) sticky.classList.add('show');
            else sticky.classList.remove('show');
        };
        window.addEventListener('scroll', onStickyScroll, { passive: true });
        onStickyScroll();

        // chip click → smooth scroll to section
        sticky.querySelectorAll('.sc-chip').forEach(btn => {
            btn.addEventListener('click', () => {
                const t = document.querySelector(btn.dataset.target);
                if (t) window.scrollTo({ top: t.offsetTop - 90, behavior: 'smooth' });
            });
        });

        // Enter on sticky input: route based on keywords
        const stickyInput = document.getElementById('stickyInput');
        window.handleStickyAsk = () => {
            if (!stickyInput) return;
            const q = stickyInput.value.toLowerCase();
            let target = '#contact';
            if (/project|work|repo|github|build|ship/.test(q))    target = '#projects';
            else if (/skill|stack|tech|tool|know/.test(q))         target = '#skills';
            else if (/exper|job|work|company|incoweb|wipro/.test(q)) target = '#experience';
            else if (/edu|college|degree|school/.test(q))          target = '#education';
            else if (/cert|achiev|award|win/.test(q))              target = '#extras';
            else if (/about|who|bio/.test(q))                       target = '#about';
            const t = document.querySelector(target);
            if (t) {
                stickyInput.value = '';
                stickyInput.blur();
                window.scrollTo({ top: t.offsetTop - 90, behavior: 'smooth' });
            }
        };
    }

    /* ---------------- Console signature ---------------- */
    console.log('%c Anshu Raj\'s personal AI agent — online ', 'background: linear-gradient(135deg, #7dffc7, #ff5d8f); color: #1a0a2a; padding: 8px 14px; border-radius: 100px; font-weight: 700; font-size: 14px;');
    console.log('%c👋 Hey! Like what you see? Reach out at raazanshu123@gmail.com', 'color: #7dffc7; font-size: 13px;');

})();
