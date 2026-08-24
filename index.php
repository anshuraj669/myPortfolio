<?php
// Portfolio data — edit here to update content sitewide
$profile = [
    'name'        => 'Anshu Raj',
    'first'       => 'Anshu',
    'last'        => 'Raj',
    'tagline'     => 'Software Engineer building backend systems, REST APIs, and data-driven applications with Laravel, Python and MySQL.',
    'roles'       => ['Backend Developer', 'Software Engineer', 'API Developer', 'Problem Solver'],
    'location'    => 'Patna, Bihar, India',
    'email'       => 'anshuraj.is.dev@gmail.com',
    'phone'       => '+91 8292253230',
    'github'      => 'https://github.com/anshuraj669',
    'linkedin'    => 'https://www.linkedin.com/in/anshu~raj/',
    'resume'      => 'Resume.pdf',
    'company'     => 'Incoweb Technologies',
    'company_role'=> 'Backend Developer',
    // Free contact-form key from https://web3forms.com — enter your email there, paste the emailed key here.
    'web3forms_key' => 'YOUR_WEB3FORMS_ACCESS_KEY',
];

$stats = [
    ['num' => 1000, 'label' => 'Datasets Processed',      'suffix' => '+'],
    ['num' => 250,  'label' => 'Anomalies Reported',      'suffix' => '+'],
    ['num' => 10,   'label' => 'REST APIs Built',         'suffix' => '+'],
    ['num' => 20,   'label' => 'Repositories Shipped',    'suffix' => '+'],
];

$skills = [
    'Languages' => [
        ['name' => 'Python',     'level' => 92, 'icon' => '🐍'],
        ['name' => 'PHP',        'level' => 88, 'icon' => '🐘'],
        ['name' => 'SQL',        'level' => 90, 'icon' => '🗄️'],
        ['name' => 'JavaScript', 'level' => 84, 'icon' => '🟨'],
        ['name' => 'HTML/CSS',   'level' => 88, 'icon' => '🎨'],
    ],
    'Backend & APIs' => [
        ['name' => 'Laravel',          'level' => 88, 'icon' => '🎯'],
        ['name' => 'FastAPI',          'level' => 86, 'icon' => '⚡'],
        ['name' => 'REST APIs',        'level' => 90, 'icon' => '🔗'],
        ['name' => 'Auth & RBAC',      'level' => 85, 'icon' => '🔐'],
        ['name' => 'API Integration',  'level' => 87, 'icon' => '🔌'],
    ],
    'Databases' => [
        ['name' => 'MySQL',              'level' => 90, 'icon' => '🌊'],
        ['name' => 'PostgreSQL',         'level' => 82, 'icon' => '🐬'],
        ['name' => 'Database Design',    'level' => 88, 'icon' => '📐'],
        ['name' => 'Query Optimisation', 'level' => 85, 'icon' => '🚀'],
        ['name' => 'Redis / Caching',    'level' => 80, 'icon' => '🧊'],
    ],
    'DevOps & Tools' => [
        ['name' => 'Docker',     'level' => 83, 'icon' => '🐳'],
        ['name' => 'Linux',      'level' => 88, 'icon' => '🐧'],
        ['name' => 'Nginx',      'level' => 80, 'icon' => '🌐'],
        ['name' => 'Kubernetes', 'level' => 70, 'icon' => '☸️'],
        ['name' => 'Git/GitHub', 'level' => 90, 'icon' => '🌿'],
        ['name' => 'Postman',    'level' => 92, 'icon' => '📮'],
    ],
];

$experience = [
    [
        'company' => 'Incoweb Technologies',
        'role'    => 'Backend Developer',
        'period'  => 'Mar 2026 — Present',
        'status'  => 'current',
        'points'  => [
            'Developing backend services and RESTful APIs using Laravel, PHP, MySQL and Redis for business automation and customer-facing applications.',
            'Integrating WhatsApp Business APIs and third-party services to automate customer communication, lead management, notifications and business workflows.',
            'Designing database schemas and optimising MySQL queries and Eloquent relationships to improve application performance and data reliability.',
            'Implementing authentication, authorization, validation, role-based access control and reusable Laravel services for secure, maintainable applications.',
            'Translating business requirements into technical solutions — troubleshooting API, database and integration issues from development through deployment.',
        ],
    ],
    [
        'company' => 'Wipro Limited',
        'role'    => 'Associate',
        'period'  => 'Dec 2024 — Mar 2026',
        'status'  => 'past',
        'points'  => [
            'Analysed mapping and data-processing systems, identifying and reporting 250+ system anomalies and data discrepancies.',
            'Collaborated with engineering teams to investigate issues and validate fixes, contributing to a 15% improvement in map data accuracy and reliability.',
            'Processed and validated 1,000+ complex datasets for a self-driving vehicle project, ensuring data quality before AI model ingestion.',
            'Used Deepen.AI and internal tools to analyse object-recognition outputs, contributing to a 10% improvement in AI model performance metrics.',
        ],
    ],
];

$projects = [
    [
        'title' => 'Sentinel',
        'sub'   => 'Website Security Audit Platform',
        'desc'  => 'Full-stack security auditing platform built with Laravel, Livewire, MySQL, FastAPI and Python. Role-based dashboards and scan history on the Laravel side talk to a stateless Python scanning engine over REST — covering HTTPS/TLS, security headers, DNS, exposed files, cookie security, malware, CORS and information leakage. Ships with a cross-platform CLI for offline source-code, dependency, secret and Git-history audits with report sync.',
        'tags'  => ['Laravel', 'Livewire', 'FastAPI', 'Python', 'MySQL', 'Security'],
        'link'  => 'https://github.com/anshuraj669/sentinel',
        'icon'  => '🛡️',
    ],
    [
        'title' => 'Laravel CRM System',
        'sub'   => 'Customer Relationship Management',
        'desc'  => 'CRM built with Laravel, Livewire, MySQL and Blade — customer management, lead tracking and role-based access control, backed by RESTful APIs on a Laravel MVC architecture with Eloquent-optimised queries and secure auth, authorization and validation.',
        'tags'  => ['Laravel', 'Livewire', 'MySQL', 'Blade', 'REST API'],
        'link'  => 'https://github.com/anshuraj669/laravel-crm',
        'icon'  => '📇',
    ],
    [
        'title' => 'Visual Alertness Monitoring',
        'sub'   => 'Driver Drowsiness Detection',
        'desc'  => 'Real-time driver-safety monitor on a Flask backend using Dlib and Mediapipe, hitting 95% accuracy in detection logic and structured to handle concurrent requests as a scalable web-based solution.',
        'tags'  => ['Flask', 'Dlib', 'Mediapipe', 'Python'],
        'link'  => 'https://github.com/anshuraj669/final_year',
        'icon'  => '👁️',
    ],
    [
        'title' => 'Klonr',
        'sub'   => 'AI Voice Cloning Studio',
        'desc'  => 'Voice cloning + TTS platform powered by Spark-TTS-0.5B. FastAPI + React 19, JWT/Google OAuth, real-time audio streaming, and Swagger-documented REST API.',
        'tags'  => ['FastAPI', 'React', 'Spark-TTS', 'OAuth'],
        'link'  => 'https://github.com/anshuraj669/klonr',
        'icon'  => '🎧',
    ],
    [
        'title' => 'Sakshi',
        'sub'   => 'Linux Voice Assistant',
        'desc'  => 'Wake-word "Hey Sakshi" assistant with speaker verification, NLU, CustomTkinter GUI, and full voice control of dev/system commands.',
        'tags'  => ['Python', 'NLU', 'Speech', 'Linux'],
        'link'  => 'https://github.com/anshuraj669/sakshi',
        'icon'  => '🎤',
    ],
    [
        'title' => 'Dish Deals',
        'sub'   => 'Restaurant Deals Platform',
        'desc'  => 'Backend service aggregating food deals with clean APIs and structured data flow.',
        'tags'  => ['Python', 'REST API'],
        'link'  => 'https://github.com/anshuraj669/dish-deals',
        'icon'  => '🍽️',
    ],
];

$education = [
    ['year' => '2020 — 2024', 'title' => 'B.E. in Information Technology', 'place' => 'PRMITR Badnera', 'score' => '8.50 CGPA'],
    ['year' => '2019',        'title' => 'Higher Secondary (12th)',         'place' => 'CBSE',            'score' => '70.6%'],
    ['year' => '2017',        'title' => 'Secondary (10th)',                'place' => 'CBSE',            'score' => '9.8 CGPA'],
];

$certificates = [
    ['name' => 'PHP and MySQL',               'date' => 'Oct 2023', 'link' => 'https://drive.google.com/file/d/1fAY9L-_ERx-MMrGmvuCNoLrp3ICa8Jum/view?usp=sharing'],
    ['name' => 'Introduction to Cybersecurity','date' => 'May 2023', 'link' => 'https://drive.google.com/file/d/1hknmXqeo78yTqTwvk3dfsorBKK5WDonq/view?usp=sharing'],
    ['name' => 'CyberOps Associate',          'date' => 'Jul 2023', 'link' => 'https://drive.google.com/file/d/1xZ1XhIuEM_aFnPWHMSG2JysEODeWVX5H/view?usp=drive_link'],
    ['name' => 'Introduction to Packet Tracer','date' => 'May 2023', 'link' => 'https://drive.google.com/file/d/1I6axBtldjczdyRufgvMVVqIpsbxLr8kL/view?usp=drive_link'],
];

$achievements = [
    [
        'title' => 'AGBA National Talent Hunt Scholarship',
        'desc'  => 'Supported by the Ministry of Electronics and Information Technology, Government of India.',
        'icon'  => '🏆',
        'link'  => 'https://drive.google.com/file/d/1EhHKA8ibupBKzNSrw13IEpf8WqkYZSMA/view?usp=drivesdk',
    ],
    [
        'title' => '15% Map Data Accuracy Boost',
        'desc'  => 'Drove measurable improvement in map data reliability while at Wipro.',
        'icon'  => '📈',
    ],
    [
        'title' => '250+ System Anomalies Reported',
        'desc'  => 'Surfaced and validated data discrepancies across mapping and data-processing systems.',
        'icon'  => '🔍',
    ],
];

// Section chat-prompts — each section opens with a user → AI message exchange
$sectionMeta = [
    'about'      => ['n' => '01', 'ask' => 'Who is Anshu Raj?',                'reply' => 'Glad you asked. Here\'s the short version 👇'],
    'skills'     => ['n' => '02', 'ask' => 'What can he build?',               'reply' => 'Pulling up his full toolkit — languages, backend & APIs, databases, and DevOps ⚡'],
    'experience' => ['n' => '03', 'ask' => 'Where has he worked?',             'reply' => 'Here\'s his career trail so far 🛤️'],
    'projects'   => ['n' => '04', 'ask' => 'Show me his shipped work.',        'reply' => 'Sharing 6 live projects from his GitHub 📎'],
    'education'  => ['n' => '05', 'ask' => 'What\'s his academic background?', 'reply' => 'Walking through his learning timeline 🎓'],
    'extras'     => ['n' => '06', 'ask' => 'Any certs or wins?',               'reply' => 'A few worth highlighting 🏆'],
    'contact'    => ['n' => '07', 'ask' => 'How do I reach him?',              'reply' => 'Drop a message below — I\'ll forward it to Anshu right away 📬'],
];

/** Render a chat-style section header (user prompt → AI reply). */
function chat_head(array $meta): string {
    $n     = htmlspecialchars($meta['n']);
    $ask   = htmlspecialchars($meta['ask']);
    $reply = $meta['reply']; // contains emoji & escaped strings already
    return <<<HTML
<div class="chat-head reveal">
    <div class="chat-msg user">
        <span class="msg-meta"><span class="msg-tag">you</span> · #{$n}</span>
        <span class="msg-bubble">{$ask}</span>
    </div>
    <div class="chat-msg ai">
        <span class="msg-meta"><span class="msg-tag ai-tag">Anshu Raj's personal AI agent</span> · typing complete</span>
        <span class="msg-bubble">{$reply}</span>
    </div>
</div>
HTML;
}

// Contact form feedback (set after POST in contact.php redirect)
$flash = $_GET['sent'] ?? null;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?= htmlspecialchars($profile['name']) ?> — <?= htmlspecialchars($profile['company_role']) ?></title>
    <meta name="description" content="<?= htmlspecialchars($profile['tagline']) ?>" />
    <link rel="icon" type="image/png" href="assets/images/Logo.png" />
    <link rel="apple-touch-icon" href="assets/images/Logo.png" />
    <link rel="shortcut icon" href="assets/images/Logo.png" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bagel+Fat+One&family=Bungee+Shade&family=Fredoka:wght@300;400;500;600;700&family=Caveat:wght@400;600;700&family=JetBrains+Mono:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<!-- Custom cursor -->
<div class="cursor" id="cursor"></div>
<div class="cursor-dot" id="cursorDot"></div>

<!-- Loading screen — AI agent booting -->
<div class="loader" id="loader">
    <div class="loader-boot">
        <div class="boot-line"><span class="boot-prefix">$</span> connecting to <span class="boot-host">Anshu Raj's personal AI agent</span> ...</div>
        <div class="boot-line"><span class="boot-prefix">$</span> handshake <span class="boot-ok">OK</span></div>
        <div class="boot-line"><span class="boot-prefix">$</span> loading personality matrix <span class="boot-ok">OK</span></div>
        <div class="boot-line"><span class="boot-prefix">$</span> ready <span class="boot-blink">_</span></div>
    </div>
    <div class="loader-name">
        <span>A</span><span>N</span><span>S</span><span>H</span><span>U</span>
        <span class="space">&nbsp;</span>
        <span>R</span><span>A</span><span>J</span>
    </div>
    <div class="loader-bar"><div class="loader-bar-fill"></div></div>
</div>

<!-- Background grid + orbs -->
<div class="bg-grid"></div>
<div class="bg-orb orb-1"></div>
<div class="bg-orb orb-2"></div>
<div class="bg-orb orb-3"></div>

<!-- Floating resume pill (replaces navbar) -->
<a href="<?= htmlspecialchars($profile['resume']) ?>" target="_blank" class="float-resume magnetic" aria-label="Open résumé">
    <span class="cta-dot"></span>
    <span>Resume</span>
    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M13 6l6 6-6 6"/></svg>
</a>

<!-- ============ HERO — CHAT WINDOW ============ -->
<section id="home" class="hero hero-chat-section">
    <div class="chat-window">
        <div class="chat-window-head">
            <div class="chat-avatar has-photo">
                <img src="assets/images/profile.jpg" alt="<?= htmlspecialchars($profile['name']) ?>" class="avatar-img"
                     onerror="this.onerror=null;this.src='assets/images/Logo.png';this.classList.add('logo-fallback');" />
                <span class="avatar-status"></span>
            </div>
            <div class="chat-id">
                <div class="chat-name">Anshu Raj's personal AI agent <span class="verified" title="Verified portfolio agent">✓</span></div>
                <div class="chat-sub"><span class="dot-blink"></span> online · responds instantly · powered by Anshu Raj</div>
            </div>
            <div class="chat-tabs">
                <span class="chat-action" title="Encrypted">🔒</span>
                <span class="chat-action" title="Mute">🔔</span>
                <span class="chat-action" title="Menu">⋯</span>
            </div>
        </div>

        <div class="chat-body" id="chatBody">
            <div class="chat-day">— today —</div>

            <div class="chat-msg ai">
                <span class="msg-meta"><span class="msg-tag ai-tag">Anshu Raj's personal AI agent</span> · just now</span>
                <span class="msg-bubble">Hey there 👋 I'm <strong>Anshu's AI</strong>. I can answer anything about him — his stack, projects, experience, or how to hire him.</span>
            </div>

            <div class="chat-msg ai">
                <span class="msg-meta"><span class="msg-tag ai-tag">Anshu Raj's personal AI agent</span> · just now</span>
                <span class="msg-bubble big-bubble">
                    <span class="hero-name-block">
                        <span class="hero-name-fill" data-text="<?= htmlspecialchars($profile['first']) ?>"><?= htmlspecialchars($profile['first']) ?></span>
                        <span class="hero-name-fill alt" data-text="<?= htmlspecialchars($profile['last']) ?>"><?= htmlspecialchars($profile['last']) ?></span>
                    </span>
                    <span class="hero-role">
                        <span class="bracket">&lt;</span>
                        <span id="typewriter"></span><span class="caret">|</span>
                        <span class="bracket">/&gt;</span>
                    </span>
                    <span class="hero-tag-inline"><?= htmlspecialchars($profile['tagline']) ?></span>
                </span>
            </div>

            <div class="chat-msg ai">
                <span class="msg-meta"><span class="msg-tag ai-tag">Anshu Raj's personal AI agent</span> · just now</span>
                <span class="msg-bubble">📍 <strong><?= htmlspecialchars($profile['location']) ?></strong> &nbsp;·&nbsp; 💼 <strong><?= htmlspecialchars($profile['company_role']) ?></strong> @ <?= htmlspecialchars($profile['company']) ?></span>
            </div>

            <div class="chat-msg ai chips-msg">
                <span class="msg-meta"><span class="msg-tag ai-tag">Anshu Raj's personal AI agent</span> · suggestions</span>
                <span class="msg-bubble chips-bubble">
                    <span class="chip-label">Try asking:</span>
                    <a href="#projects"   class="chat-chip">💼 Show projects</a>
                    <a href="#skills"     class="chat-chip">⚡ List his skills</a>
                    <a href="#experience" class="chat-chip">📍 Where has he worked?</a>
                    <a href="#contact"    class="chat-chip primary">📞 Hire him</a>
                </span>
            </div>

            <div class="chat-msg user" id="userPrompt">
                <span class="msg-meta">you · just now <span class="ticks">✓✓</span></span>
                <span class="msg-bubble">Tell me everything 👀</span>
            </div>

            <div class="chat-msg ai typing-msg" id="aiTyping">
                <span class="msg-meta"><span class="msg-tag ai-tag">Anshu Raj's personal AI agent</span> · typing</span>
                <span class="msg-bubble typing">
                    <span class="t-dot"></span><span class="t-dot"></span><span class="t-dot"></span>
                </span>
            </div>

            <div class="chat-msg ai socials-msg" id="socialsReveal">
                <span class="msg-meta"><span class="msg-tag ai-tag">Anshu Raj's personal AI agent</span> · attachments</span>
                <span class="msg-bubble socials-bubble">
                    <a href="<?= htmlspecialchars($profile['github']) ?>" target="_blank" class="social-pill">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M12 .3a12 12 0 0 0-3.8 23.4c.6.1.8-.3.8-.6v-2c-3.3.7-4-1.6-4-1.6-.6-1.4-1.4-1.8-1.4-1.8-1-.7.1-.7.1-.7 1.2.1 1.8 1.2 1.8 1.2 1 1.8 2.8 1.3 3.5 1 .1-.8.4-1.3.7-1.6-2.7-.3-5.5-1.3-5.5-6 0-1.2.5-2.3 1.3-3.1-.2-.4-.6-1.6 0-3.2 0 0 1-.3 3.4 1.2a11.5 11.5 0 0 1 6 0c2.3-1.5 3.3-1.2 3.3-1.2.7 1.6.2 2.8.1 3.2.8.8 1.3 1.9 1.3 3.1 0 4.6-2.8 5.6-5.5 5.9.5.4.9 1.1.9 2.3v3.3c0 .3.1.7.8.6A12 12 0 0 0 12 .3"/></svg>
                        GitHub
                    </a>
                    <a href="<?= htmlspecialchars($profile['linkedin']) ?>" target="_blank" class="social-pill">💼 LinkedIn</a>
                    <a href="mailto:<?= htmlspecialchars($profile['email']) ?>" class="social-pill">✉️ Email</a>
                    <a href="tel:<?= htmlspecialchars($profile['phone']) ?>" class="social-pill">📞 Call</a>
                </span>
            </div>
        </div>

        <form class="chat-composer hero-composer" onsubmit="event.preventDefault(); document.querySelector('#projects').scrollIntoView({behavior:'smooth'});">
            <button type="button" class="composer-icon" aria-label="Attach">＋</button>
            <input type="text" placeholder="Ask Anshu Raj's personal AI agent anything..." aria-label="Message" id="heroComposerInput" />
            <button type="submit" class="composer-send" aria-label="Send">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M22 2 11 13M22 2l-7 20-4-9-9-4 20-7Z"/></svg>
            </button>
        </form>
    </div>

    <a href="#about" class="hero-scroll" aria-label="scroll down">
        <span>SCROLL</span>
        <div class="scroll-line"></div>
    </a>
</section>

<!-- ============ ABOUT ============ -->
<section id="about" class="section">
    <div class="container">
        <?= chat_head($sectionMeta['about']) ?>
        <div class="about-grid">
            <div class="about-text">
                <p class="reveal">I'm a <strong>Software Engineer</strong> building backend systems, REST APIs and data-driven applications with <strong>Python, Laravel, FastAPI and MySQL</strong> — currently at <a href="#" class="link-neon"><?= htmlspecialchars($profile['company']) ?></a>.</p>
                <p class="reveal">At <strong>Wipro</strong> I analysed large datasets, identified system issues, and worked with engineering teams to improve data quality and reliability. Since then I've built projects that connect Laravel applications to Python services — including real-time analysis and security-focused systems.</p>
                <p class="reveal">I enjoy understanding how systems work, solving practical technical problems, and turning requirements into reliable solutions. I'm especially drawn to roles where I work closely with teams and customers and take solutions from <strong>development through to deployment</strong>.</p>
                <div class="about-tags reveal">
                    <span class="chip">Laravel</span>
                    <span class="chip">Python</span>
                    <span class="chip">FastAPI</span>
                    <span class="chip">MySQL</span>
                    <span class="chip">REST APIs</span>
                    <span class="chip">Docker</span>
                </div>
            </div>
            <div class="about-stats">
                <?php foreach ($stats as $s): ?>
                <div class="stat-card reveal">
                    <div class="stat-num" data-count="<?= (int)$s['num'] ?>" data-suffix="<?= htmlspecialchars($s['suffix']) ?>">0</div>
                    <div class="stat-label"><?= htmlspecialchars($s['label']) ?></div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>

<!-- ============ SKILLS ============ -->
<section id="skills" class="section">
    <div class="container">
        <?= chat_head($sectionMeta['skills']) ?>
        <div class="skills-grid">
            <?php foreach ($skills as $category => $items): ?>
            <div class="skill-cat reveal tilt">
                <h3 class="skill-cat-title"><?= htmlspecialchars($category) ?></h3>
                <div class="skill-list">
                    <?php foreach ($items as $skill): ?>
                    <div class="skill-row">
                        <div class="skill-info">
                            <span class="skill-icon"><?= $skill['icon'] ?></span>
                            <span class="skill-name"><?= htmlspecialchars($skill['name']) ?></span>
                            <span class="skill-pct"><?= (int)$skill['level'] ?>%</span>
                        </div>
                        <div class="skill-bar"><div class="skill-bar-fill" data-level="<?= (int)$skill['level'] ?>"></div></div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ============ EXPERIENCE ============ -->
<section id="experience" class="section">
    <div class="container">
        <?= chat_head($sectionMeta['experience']) ?>
        <div class="timeline">
            <?php foreach ($experience as $exp): ?>
            <div class="timeline-item reveal <?= $exp['status'] === 'current' ? 'current' : '' ?>">
                <div class="timeline-marker">
                    <div class="marker-dot"></div>
                    <div class="marker-pulse"></div>
                </div>
                <div class="timeline-card tilt">
                    <div class="timeline-head">
                        <div>
                            <h3 class="timeline-role"><?= htmlspecialchars($exp['role']) ?></h3>
                            <p class="timeline-company"><?= htmlspecialchars($exp['company']) ?></p>
                        </div>
                        <span class="timeline-period <?= $exp['status'] === 'current' ? 'now' : '' ?>"><?= htmlspecialchars($exp['period']) ?></span>
                    </div>
                    <ul class="timeline-points">
                        <?php foreach ($exp['points'] as $p): ?>
                            <li><?= htmlspecialchars($p) ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ============ PROJECTS ============ -->
<section id="projects" class="section">
    <div class="container">
        <?= chat_head($sectionMeta['projects']) ?>
        <div class="projects-grid">
            <?php foreach ($projects as $i => $p): ?>
            <a href="<?= htmlspecialchars($p['link']) ?>" target="_blank" class="project-card tilt reveal" style="--i: <?= $i ?>">
                <div class="project-glow"></div>
                <div class="project-icon"><?= $p['icon'] ?></div>
                <div class="project-body">
                    <h3 class="project-title"><?= htmlspecialchars($p['title']) ?></h3>
                    <p class="project-sub"><?= htmlspecialchars($p['sub']) ?></p>
                    <p class="project-desc"><?= htmlspecialchars($p['desc']) ?></p>
                    <div class="project-tags">
                        <?php foreach ($p['tags'] as $t): ?>
                            <span class="project-tag"><?= htmlspecialchars($t) ?></span>
                        <?php endforeach; ?>
                    </div>
                </div>
                <div class="project-arrow">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M7 17 17 7M7 7h10v10"/></svg>
                </div>
            </a>
            <?php endforeach; ?>
        </div>
        <div class="projects-cta reveal">
            <a href="<?= htmlspecialchars($profile['github']) ?>" target="_blank" class="btn btn-ghost magnetic">
                <span>See all on GitHub</span>
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M13 6l6 6-6 6"/></svg>
            </a>
        </div>
    </div>
</section>

<!-- ============ EDUCATION ============ -->
<section id="education" class="section">
    <div class="container">
        <?= chat_head($sectionMeta['education']) ?>
        <div class="edu-grid">
            <?php foreach ($education as $e): ?>
            <div class="edu-card reveal tilt">
                <div class="edu-year"><?= htmlspecialchars($e['year']) ?></div>
                <h3 class="edu-title"><?= htmlspecialchars($e['title']) ?></h3>
                <p class="edu-place"><?= htmlspecialchars($e['place']) ?></p>
                <div class="edu-score"><?= htmlspecialchars($e['score']) ?></div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ============ CERTIFICATES + ACHIEVEMENTS ============ -->
<section id="extras" class="section">
    <div class="container">
        <?= chat_head($sectionMeta['extras']) ?>
        <div class="extras-grid">
            <div class="extras-block reveal">
                <div class="extras-label"><span class="msg-tag ai-tag">Anshu Raj's personal AI agent</span> · certifications.json</div>
                <div class="cert-list">
                    <?php foreach ($certificates as $c): ?>
                    <?php $tag = isset($c['link']) ? 'a' : 'div'; ?>
                    <<?= $tag ?> class="cert-item"<?= isset($c['link']) ? ' href="' . htmlspecialchars($c['link']) . '" target="_blank" rel="noopener"' : '' ?>>
                        <div class="cert-badge">✓</div>
                        <div>
                            <div class="cert-name"><?= htmlspecialchars($c['name']) ?></div>
                            <div class="cert-date"><?= htmlspecialchars($c['date']) ?></div>
                        </div>
                    </<?= $tag ?>>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="extras-block reveal">
                <div class="extras-label"><span class="msg-tag ai-tag">Anshu Raj's personal AI agent</span> · achievements.json</div>
                <div class="ach-list">
                    <?php foreach ($achievements as $a): ?>
                    <?php $tag = isset($a['link']) ? 'a' : 'div'; ?>
                    <<?= $tag ?> class="ach-item tilt"<?= isset($a['link']) ? ' href="' . htmlspecialchars($a['link']) . '" target="_blank" rel="noopener"' : '' ?>>
                        <div class="ach-icon"><?= $a['icon'] ?></div>
                        <div>
                            <div class="ach-title"><?= htmlspecialchars($a['title']) ?></div>
                            <div class="ach-desc"><?= htmlspecialchars($a['desc']) ?></div>
                        </div>
                    </<?= $tag ?>>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ============ CONTACT ============ -->
<section id="contact" class="section contact-section">
    <div class="container">
        <?= chat_head($sectionMeta['contact']) ?>

        <?php if ($flash === '1'): ?>
            <div class="flash success reveal">✓ Message sent. I'll get back to you soon.</div>
        <?php elseif ($flash === '0'): ?>
            <div class="flash error reveal">✕ Something went wrong. Please try again or email me directly.</div>
        <?php endif; ?>

        <div class="contact-grid">
            <div class="contact-info reveal">
                <a href="mailto:<?= htmlspecialchars($profile['email']) ?>" class="contact-item">
                    <div class="ci-icon">✉️</div>
                    <div>
                        <div class="ci-label">Email</div>
                        <div class="ci-value"><?= htmlspecialchars($profile['email']) ?></div>
                    </div>
                </a>
                <a href="tel:<?= htmlspecialchars($profile['phone']) ?>" class="contact-item">
                    <div class="ci-icon">📞</div>
                    <div>
                        <div class="ci-label">Phone</div>
                        <div class="ci-value"><?= htmlspecialchars($profile['phone']) ?></div>
                    </div>
                </a>
                <div class="contact-item">
                    <div class="ci-icon">📍</div>
                    <div>
                        <div class="ci-label">Location</div>
                        <div class="ci-value"><?= htmlspecialchars($profile['location']) ?></div>
                    </div>
                </div>
                <a href="<?= htmlspecialchars($profile['github']) ?>" target="_blank" class="contact-item">
                    <div class="ci-icon">⌨️</div>
                    <div>
                        <div class="ci-label">GitHub</div>
                        <div class="ci-value">@anshuraj669</div>
                    </div>
                </a>
            </div>
            <form action="https://api.web3forms.com/submit" method="POST" class="contact-form chat-form reveal" id="contactForm">
                <!-- Web3Forms: get a free access key at https://web3forms.com (enter your email, key is emailed to you) and paste it below -->
                <input type="hidden" name="access_key" value="<?= htmlspecialchars($profile['web3forms_key']) ?>" />
                <input type="hidden" name="from_name" value="<?= htmlspecialchars($profile['name']) ?> Portfolio" />
                <!-- Honeypot spam filter (leave empty) -->
                <input type="checkbox" name="botcheck" style="display:none" tabindex="-1" autocomplete="off" />
                <div class="chat-form-head">
                    <div class="chat-avatar small has-photo">
                        <img src="assets/images/profile.jpg" alt="<?= htmlspecialchars($profile['name']) ?>" class="avatar-img"
                             onerror="this.onerror=null;this.src='assets/images/Logo.png';this.classList.add('logo-fallback');" />
                        <span class="avatar-status"></span>
                    </div>
                    <div>
                        <div class="chat-name">Anshu Raj's personal AI agent <span class="verified">✓</span></div>
                        <div class="chat-sub"><span class="dot-blink"></span> ready to forward your message</div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-field">
                        <input type="text" name="name" id="f_name" required autocomplete="name" />
                        <label for="f_name">Your Name</label>
                        <div class="field-line"></div>
                    </div>
                    <div class="form-field">
                        <input type="email" name="email" id="f_email" required autocomplete="email" />
                        <label for="f_email">Email</label>
                        <div class="field-line"></div>
                    </div>
                </div>
                <div class="form-field">
                    <input type="text" name="subject" id="f_subject" required />
                    <label for="f_subject">What's this about?</label>
                    <div class="field-line"></div>
                </div>
                <div class="form-field">
                    <textarea name="message" id="f_message" rows="5" required></textarea>
                    <label for="f_message">Type your message to Anshu Raj's personal AI agent...</label>
                    <div class="field-line"></div>
                </div>
                <button type="submit" class="btn btn-primary magnetic full">
                    <span>Send to Anshu Raj's personal AI agent</span>
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M22 2 11 13M22 2l-7 20-4-9-9-4 20-7Z"/></svg>
                </button>
                <div class="chat-form-hint">🔒 End-to-end forwarded · usually replies within a day</div>
            </form>
        </div>
    </div>
</section>

<!-- ============ STICKY CHAT COMPOSER ============ -->
<div class="sticky-composer" id="stickyComposer" aria-label="Quick chat with Anshu Raj's personal AI agent">
    <div class="sc-inner">
        <div class="sc-avatar has-photo">
            <img src="assets/images/profile.jpg" alt="<?= htmlspecialchars($profile['name']) ?>"
                 onerror="this.onerror=null;this.src='assets/images/Logo.png';this.classList.add('logo-fallback');" />
            <span class="avatar-status"></span>
        </div>
        <form class="sc-form" onsubmit="event.preventDefault(); window.handleStickyAsk();">
            <input type="text" id="stickyInput" placeholder="Ask Anshu Raj's personal AI agent — projects, skills, hire..." aria-label="Quick chat" />
            <div class="sc-quick">
                <button type="button" class="sc-chip" data-target="#projects">💼</button>
                <button type="button" class="sc-chip" data-target="#skills">⚡</button>
                <button type="button" class="sc-chip" data-target="#contact">📞</button>
            </div>
            <button type="submit" class="sc-send" aria-label="Send">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M22 2 11 13M22 2l-7 20-4-9-9-4 20-7Z"/></svg>
            </button>
        </form>
    </div>
</div>

<!-- ============ FOOTER ============ -->
<footer class="footer">
    <div class="container footer-inner">
        <div class="footer-brand">
            <img src="assets/images/Logo.png" alt="Anshu Raj" class="logo-img big" />
            <p>Building systems, one query at a time.</p>
        </div>
        <div class="footer-cols">
            <div>
                <h4>Navigate</h4>
                <a href="#home">Home</a>
                <a href="#projects">Projects</a>
                <a href="#contact">Contact</a>
            </div>
            <div>
                <h4>Connect</h4>
                <a href="<?= htmlspecialchars($profile['github']) ?>" target="_blank">GitHub</a>
                <a href="mailto:<?= htmlspecialchars($profile['email']) ?>">Email</a>
                <a href="<?= htmlspecialchars($profile['resume']) ?>" target="_blank">Resume</a>
            </div>
            <div>
                <h4>Elsewhere</h4>
                <a href="<?= htmlspecialchars($profile['linkedin']) ?>">LinkedIn</a>
                <a href="tel:<?= htmlspecialchars($profile['phone']) ?>">Phone</a>
            </div>
        </div>
    </div>
    <div class="footer-bottom container">
        <span>© <?= date('Y') ?> <?= htmlspecialchars($profile['name']) ?>. Crafted with <span class="heart">♥</span> and a lot of coffee.</span>
        <span class="footer-status"><span class="dot-blink"></span> Online</span>
    </div>
</footer>

<script src="assets/js/main.js"></script>
</body>
</html>
