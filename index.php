<?php
// Portfolio data — edit here to update content sitewide, then run ./build.sh
$profile = [
    'name'         => 'Anshu Raj',
    'title'        => 'Full Stack Developer',
    'tagline'      => 'I build full-stack web applications, REST APIs and developer tools with Laravel, Python (FastAPI), React and SQL — from schema design through to deployment.',
    'location'     => 'Patna, Bihar, India',
    'email'        => 'anshuraj.is.dev@gmail.com',
    'phone'        => '+91 8292253230',
    'github'       => 'https://github.com/anshuraj669',
    'github_user'  => 'anshuraj669',
    'linkedin'     => 'https://www.linkedin.com/in/anshu~raj/',
    'resume'       => 'Resume.pdf',
    'company'      => 'Incoweb Technologies',
    // Free contact-form key from https://web3forms.com — enter your email there, paste the emailed key here.
    // While it is left as the placeholder, the contact form is hidden and only direct contact links are shown.
    'web3forms_key' => 'YOUR_WEB3FORMS_ACCESS_KEY',
];
$formEnabled = $profile['web3forms_key'] !== '' && $profile['web3forms_key'] !== 'YOUR_WEB3FORMS_ACCESS_KEY';

$experience = [
    [
        'company' => 'Incoweb Technologies',
        'role'    => 'Full Stack Developer',
        'period'  => 'Mar 2026 — Present',
        'points'  => [
            'Build backend services and REST APIs with Laravel, PHP, MySQL and Redis for business automation applications.',
            'Integrated WhatsApp Business APIs and third-party services for automated messaging, lead management, notifications and workflows.',
            'Design database schemas and optimise MySQL queries and Eloquent relationships for performance and data reliability.',
            'Implement authentication, authorisation, validation and role-based access control with reusable Laravel services and middleware.',
            'Debug and resolve API, database and integration issues from development through deployment.',
        ],
    ],
    [
        'company' => 'Wipro Limited',
        'role'    => 'Associate',
        'period'  => 'Dec 2024 — Mar 2026',
        'points'  => [
            'Processed and validated 1,000+ complex datasets for an autonomous-vehicle project before AI model ingestion.',
            'Analysed mapping and data-processing systems, identifying and reporting 250+ system anomalies and data discrepancies.',
            'Used Deepen.AI and internal tools to analyse object-recognition outputs and surface data-quality issues.',
            'Worked with engineering teams to investigate issues, validate fixes and improve data reliability.',
        ],
    ],
];

$projects = [
    [
        'title' => 'Tracebase',
        'sub'   => 'Self-hosted AI for code, logs and backups',
        'desc'  => 'A private, self-hosted assistant that runs on a NAS or any Docker host. It indexes every repository for semantic code search and Q&A with file:line citations, and can copy a feature from an old project into a new one — adapting names, imports and dependencies and showing the diff first. Its Log Detective groups production errors, maps stack traces to the failing line, finds the commit that introduced it with git blame and suggests a fix. Secrets and personal data are redacted before storage; team mode adds per-repo access tokens and an audit log. Exposed to Claude Code and other agents over MCP.',
        'tags'  => ['Python', 'FastAPI', 'tree-sitter', 'Ollama', 'MCP', 'React', 'Docker'],
        'link'  => 'https://github.com/anshuraj669/tracebase',
    ],
    [
        'title' => 'Sentinel',
        'sub'   => 'Website security audit platform',
        'desc'  => 'A Laravel + Livewire application backed by a stateless Python scanning engine over REST. Automated checks cover TLS, security headers, exposed files, cookies, CORS, malware and information leakage, with isolated checks and careful handling of sensitive evidence. A companion CLI adds source-code analysis, dependency scanning, secret detection and Git-history audits that sync back to the dashboard.',
        'tags'  => ['Laravel', 'Livewire', 'FastAPI', 'Python', 'MySQL'],
        'link'  => 'https://github.com/anshuraj669/sentinel',
    ],
    [
        'title' => 'Notification Engine',
        'sub'   => 'Event-driven, multi-channel notifications',
        'desc'  => 'Routes financial events (order.executed, margin.call, …) by priority across SMS, email, push, WhatsApp and in-app, in the user’s language. A compliance chain enforces Indian telecom rules (DLT, DND, quiet hours, consent, frequency caps). Provider failover, circuit breakers, retries and a dead-letter queue sit behind every send, and every outcome is written to a delivery ledger that feeds an operator dashboard and Prometheus alerts.',
        'tags'  => ['FastAPI', 'Kafka', 'PostgreSQL', 'Redis', 'Prometheus', 'Docker'],
        'link'  => 'https://github.com/anshuraj669/NotificationEngine',
    ],
    [
        'title' => 'Klonr',
        'sub'   => 'Voice cloning and text-to-speech platform',
        'desc'  => 'Clone a voice from a short audio sample and generate speech with the Spark-TTS model, with real-time streaming playback and batch synthesis from CSV. FastAPI backend with SQLAlchemy, JWT and Google OAuth 2.0, and a documented REST API; React 19 dashboard with usage stats. Dockerised with GPU support.',
        'tags'  => ['FastAPI', 'PyTorch', 'React', 'OAuth 2.0', 'Docker'],
        'link'  => 'https://github.com/anshuraj669/klonr',
    ],
];

$skills = [
    'Languages'      => ['Python', 'PHP', 'SQL', 'JavaScript', 'HTML / CSS'],
    'Frontend'       => ['React', 'Livewire', 'Tailwind CSS', 'JavaScript'],
    'Backend'        => ['Laravel', 'FastAPI', 'REST API design', 'Auth & RBAC', 'Kafka', 'Third-party integrations'],
    'Data'           => ['MySQL', 'PostgreSQL', 'Redis', 'Schema design', 'Query optimisation'],
    'DevOps & Tools' => ['Docker', 'Linux', 'Nginx', 'AWS', 'Git', 'Postman'],
];

$education = [
    ['year' => '2020 — 2024', 'title' => 'B.E. in Information Technology', 'place' => 'PRMITR, Badnera', 'score' => '8.50 CGPA'],
];

$certificates = [
    ['name' => 'PHP and MySQL',                 'date' => 'Oct 2023', 'link' => 'https://drive.google.com/file/d/1fAY9L-_ERx-MMrGmvuCNoLrp3ICa8Jum/view?usp=sharing'],
    ['name' => 'CyberOps Associate (Cisco)',    'date' => 'Jul 2023', 'link' => 'https://drive.google.com/file/d/1xZ1XhIuEM_aFnPWHMSG2JysEODeWVX5H/view?usp=drive_link'],
    ['name' => 'Introduction to Cybersecurity', 'date' => 'May 2023', 'link' => 'https://drive.google.com/file/d/1hknmXqeo78yTqTwvk3dfsorBKK5WDonq/view?usp=sharing'],
];

$achievements = [
    [
        'title' => 'AGBA National Talent Hunt Scholarship',
        'desc'  => 'Supported by the Ministry of Electronics and Information Technology, Government of India.',
        'link'  => 'https://drive.google.com/file/d/1EhHKA8ibupBKzNSrw13IEpf8WqkYZSMA/view?usp=drivesdk',
    ],
];

function e(string $s): string { return htmlspecialchars($s, ENT_QUOTES, 'UTF-8'); }

// Cache-busting stamp so browsers and GitHub Pages pick up new CSS/JS after each build
// Public URL of the deployed site (GitHub Pages); used for link previews. Keep the trailing slash.
$siteUrl = 'https://anshuraj669.github.io/myPortfolio/';
$v = fn(string $f) => $f . '?v=' . filemtime(__DIR__ . '/' . $f);

$arrow = '<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M7 17 17 7M8 7h9v9"/></svg>';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <script>document.documentElement.classList.add('js');</script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?= e($profile['name']) ?> — <?= e($profile['title']) ?></title>
    <meta name="theme-color" content="#f6f9fb" />
    <meta name="description" content="<?= e($profile['tagline']) ?>" />
    <link rel="canonical" href="<?= e($siteUrl) ?>" />
    <link rel="icon" href="assets/icons/favicon.ico" sizes="48x48" />
    <link rel="icon" type="image/png" sizes="32x32" href="assets/icons/favicon-32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="assets/icons/favicon-16.png" />
    <link rel="apple-touch-icon" sizes="180x180" href="assets/icons/apple-touch-icon.png" />
    <link rel="manifest" href="site.webmanifest" />

    <!-- Link previews (WhatsApp, LinkedIn, Slack, X, Discord, ...) -->
    <meta property="og:type" content="website" />
    <meta property="og:site_name" content="<?= e($profile['name']) ?>" />
    <meta property="og:title" content="<?= e($profile['name']) ?> — <?= e($profile['title']) ?>" />
    <meta property="og:description" content="<?= e($profile['tagline']) ?>" />
    <meta property="og:url" content="<?= e($siteUrl) ?>" />
    <meta property="og:image" content="<?= e($siteUrl) ?>assets/icons/og-image.png" />
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="630" />
    <meta property="og:image:alt" content="<?= e($profile['name']) ?> — <?= e($profile['title']) ?>" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="<?= e($profile['name']) ?> — <?= e($profile['title']) ?>" />
    <meta name="twitter:description" content="<?= e($profile['tagline']) ?>" />
    <meta name="twitter:image" content="<?= e($siteUrl) ?>assets/icons/og-image.png" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=JetBrains+Mono:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= $v('assets/css/style.css') ?>">
</head>
<body>

<header class="nav">
    <div class="container nav-inner">
        <a href="#top" class="nav-brand"><?= e($profile['name']) ?></a>
        <button class="nav-toggle" id="navToggle" aria-label="Toggle menu" aria-expanded="false">
            <span></span><span></span>
        </button>
        <nav class="nav-links" id="navLinks">
            <a href="#experience">Experience</a>
            <a href="#projects">Projects</a>
            <a href="#skills">Skills</a>
            <a href="#education">Education</a>
            <a href="#contact">Contact</a>
            <a href="<?= e($profile['resume']) ?>" target="_blank" rel="noopener" class="btn btn-small">Résumé</a>
        </nav>
    </div>
    <div class="progress" id="progress" aria-hidden="true"></div>
</header>

<main id="top">

<!-- ============ HERO ============ -->
<section class="hero">
    <div class="hero-bg" aria-hidden="true">
        <span class="blob blob-1"></span>
        <span class="blob blob-2"></span>
        <span class="hero-grid"></span>
    </div>
    <div class="container hero-inner">
        <div class="hero-text">
            <p class="badge"><span class="pulse"></span>Open to full-stack engineering roles</p>
            <p class="eyebrow"><?= e($profile['title']) ?> · <?= e($profile['company']) ?></p>
            <h1><?php $parts = explode(' ', $profile['name'], 2); ?><?= e($parts[0]) ?> <span class="grad-text"><?= e($parts[1] ?? '') ?></span></h1>
            <p class="lead"><?= e($profile['tagline']) ?></p>
            <div class="hero-actions">
                <a href="#projects" class="btn">View projects</a>
                <a href="<?= e($profile['resume']) ?>" target="_blank" rel="noopener" class="btn btn-outline">Download résumé</a>
            </div>
            <ul class="hero-links">
                <li><a href="<?= e($profile['github']) ?>" target="_blank" rel="noopener">GitHub</a></li>
                <li><a href="<?= e($profile['linkedin']) ?>" target="_blank" rel="noopener">LinkedIn</a></li>
                <li><a href="mailto:<?= e($profile['email']) ?>"><?= e($profile['email']) ?></a></li>
                <li><?= e($profile['location']) ?></li>
            </ul>
        </div>
        <div class="photo-wrap">
            <span class="photo-ring" aria-hidden="true"></span>
            <picture>
                <source srcset="<?= $v('assets/images/cartoon-avatar-still.jpg') ?>" media="(prefers-reduced-motion: reduce)" />
                <img src="<?= $v('assets/images/cartoon-avatar.gif') ?>" class="hero-photo" width="560" height="554"
                     alt="Animated illustration of <?= e($profile['name']) ?> working at a laptop" />
            </picture>
        </div>
    </div>
</section>

<!-- ============ ABOUT ============ -->
<section id="about" class="section">
    <div class="container narrow">
        <h2 class="section-title reveal">About</h2>
        <p class="reveal">I'm a full-stack developer at <strong><?= e($profile['company']) ?></strong>, where I build Laravel services, REST APIs and integrations for business automation. Before that I spent over a year at <strong>Wipro</strong> validating large datasets and tracking down data-quality issues for an autonomous-vehicle program.</p>
        <p class="reveal">Outside work I build systems end to end — event-driven pipelines, security tooling, and self-hosted developer tools — usually in Python and FastAPI alongside Laravel. I care about clear data models, predictable failure handling and software that's easy to operate.</p>
    </div>
</section>

<!-- ============ EXPERIENCE ============ -->
<section id="experience" class="section">
    <div class="container narrow">
        <h2 class="section-title reveal">Experience</h2>
        <div class="exp-list timeline reveal-line">
            <?php foreach ($experience as $exp): ?>
            <article class="reveal exp">
                <div class="exp-head">
                    <div>
                        <h3><?= e($exp['role']) ?></h3>
                        <p class="exp-company"><?= e($exp['company']) ?></p>
                    </div>
                    <span class="exp-period"><?= e($exp['period']) ?></span>
                </div>
                <ul>
                    <?php foreach ($exp['points'] as $p): ?>
                    <li><?= e($p) ?></li>
                    <?php endforeach; ?>
                </ul>
            </article>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ============ PROJECTS ============ -->
<section id="projects" class="section">
    <div class="container">
        <h2 class="section-title reveal">Projects</h2>
        <div class="projects">
            <?php foreach ($projects as $p): ?>
            <article class="reveal project">
                <div class="project-head">
                    <h3><a href="<?= e($p['link']) ?>" target="_blank" rel="noopener"><?= e($p['title']) ?> <?= $arrow ?></a></h3>
                    <p class="project-sub"><?= e($p['sub']) ?></p>
                </div>
                <p class="project-desc"><?= e($p['desc']) ?></p>
                <ul class="tags">
                    <?php foreach ($p['tags'] as $t): ?>
                    <li><?= e($t) ?></li>
                    <?php endforeach; ?>
                </ul>
            </article>
            <?php endforeach; ?>
        </div>
        <p class="more reveal"><a href="<?= e($profile['github']) ?>" target="_blank" rel="noopener">More on GitHub <?= $arrow ?></a></p>
    </div>
</section>

<!-- ============ SKILLS ============ -->
<section id="skills" class="section">
    <div class="container narrow">
        <h2 class="section-title reveal">Skills</h2>
        <dl class="skills">
            <?php foreach ($skills as $category => $items): ?>
            <div class="reveal skill-row">
                <dt><?= e($category) ?></dt>
                <dd>
                    <ul class="tags">
                        <?php foreach ($items as $s): ?>
                        <li><?= e($s) ?></li>
                        <?php endforeach; ?>
                    </ul>
                </dd>
            </div>
            <?php endforeach; ?>
        </dl>
    </div>
</section>

<!-- ============ EDUCATION & CERTIFICATIONS ============ -->
<section id="education" class="section">
    <div class="container narrow">
        <h2 class="section-title reveal">Education &amp; certifications</h2>
        <div class="two-col reveal">
            <div>
                <h3 class="sub-title">Education</h3>
                <?php foreach ($education as $ed): ?>
                <div class="line-item">
                    <div>
                        <div class="li-title"><?= e($ed['title']) ?></div>
                        <div class="li-meta"><?= e($ed['place']) ?> · <?= e($ed['score']) ?></div>
                    </div>
                    <span class="li-date"><?= e($ed['year']) ?></span>
                </div>
                <?php endforeach; ?>

                <h3 class="sub-title">Recognition</h3>
                <?php foreach ($achievements as $a): ?>
                <div class="line-item">
                    <div>
                        <div class="li-title">
                            <?php if (isset($a['link'])): ?><a href="<?= e($a['link']) ?>" target="_blank" rel="noopener"><?= e($a['title']) ?></a><?php else: ?><?= e($a['title']) ?><?php endif; ?>
                        </div>
                        <div class="li-meta"><?= e($a['desc']) ?></div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
            <div>
                <h3 class="sub-title">Certifications</h3>
                <?php foreach ($certificates as $c): ?>
                <div class="line-item">
                    <div class="li-title"><a href="<?= e($c['link']) ?>" target="_blank" rel="noopener"><?= e($c['name']) ?></a></div>
                    <span class="li-date"><?= e($c['date']) ?></span>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>

<!-- ============ CONTACT ============ -->
<section id="contact" class="section">
    <div class="container narrow">
        <h2 class="section-title reveal">Contact</h2>
        <p class="reveal">I'm open to full-stack and backend engineering roles. The quickest way to reach me is email.</p>
        <div class="contact-grid<?= $formEnabled ? '' : ' single' ?>">
            <ul class="reveal contact-list">
                <li><span>Email</span><a href="mailto:<?= e($profile['email']) ?>"><?= e($profile['email']) ?></a></li>
                <li><span>Phone</span><a href="tel:<?= e(str_replace(' ', '', $profile['phone'])) ?>"><?= e($profile['phone']) ?></a></li>
                <li><span>GitHub</span><a href="<?= e($profile['github']) ?>" target="_blank" rel="noopener">@<?= e($profile['github_user']) ?></a></li>
                <li><span>LinkedIn</span><a href="<?= e($profile['linkedin']) ?>" target="_blank" rel="noopener">anshu~raj</a></li>
                <li><span>Location</span><?= e($profile['location']) ?></li>
            </ul>
            <?php if ($formEnabled): ?>
            <form action="https://api.web3forms.com/submit" method="POST" class="reveal contact-form" id="contactForm">
                <input type="hidden" name="access_key" value="<?= e($profile['web3forms_key']) ?>" />
                <input type="hidden" name="from_name" value="<?= e($profile['name']) ?> Portfolio" />
                <input type="checkbox" name="botcheck" class="hidden" tabindex="-1" autocomplete="off" />
                <label>Name <input type="text" name="name" required autocomplete="name" /></label>
                <label>Email <input type="email" name="email" required autocomplete="email" /></label>
                <label>Message <textarea name="message" rows="5" required></textarea></label>
                <button type="submit" class="btn">Send message</button>
                <p class="form-status" id="formStatus" role="status"></p>
            </form>
            <?php endif; ?>
        </div>
    </div>
</section>

</main>

<footer class="footer">
    <div class="container footer-inner">
        <span>© <?= date('Y') ?> <?= e($profile['name']) ?></span>
        <span>
            <a href="<?= e($profile['github']) ?>" target="_blank" rel="noopener">GitHub</a> ·
            <a href="<?= e($profile['linkedin']) ?>" target="_blank" rel="noopener">LinkedIn</a> ·
            <a href="mailto:<?= e($profile['email']) ?>">Email</a>
        </span>
    </div>
</footer>

<script src="<?= $v('assets/js/main.js') ?>"></script>
</body>
</html>
