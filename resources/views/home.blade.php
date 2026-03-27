<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman Home</title>
    <link rel="stylesheet" href="css/style.css">
    <style>
        :root {
            --cream: #f8f1e7;
            --sand: #eedbc7;
            --ink: #1d2a38;
            --muted: #5a6774;
            --accent: #d87043;
            --accent-dark: #8b4326;
            --panel: rgba(255, 249, 242, 0.82);
            --line: rgba(29, 42, 56, 0.1);
            --shadow: 0 24px 70px rgba(70, 49, 24, 0.15);
        }

        * { box-sizing: border-box; }
        body {
            margin: 0;
            min-height: 100vh;
            font-family: Georgia, "Times New Roman", serif;
            color: var(--ink);
            background:
                radial-gradient(circle at top, rgba(255, 255, 255, 0.8), transparent 30%),
                linear-gradient(135deg, var(--cream), #dce5db 70%);
        }
        .page {
            width: min(1140px, calc(100% - 32px));
            margin: 0 auto;
            padding: 30px 0 48px;
        }
        .nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 16px;
            padding: 18px 22px;
            border: 1px solid var(--line);
            border-radius: 24px;
            background: rgba(255, 249, 242, 0.72);
            backdrop-filter: blur(14px);
            box-shadow: 0 12px 30px rgba(71, 52, 31, 0.08);
        }
        .brand {
            margin: 0;
            font-size: 0.95rem;
            letter-spacing: 0.16em;
            text-transform: uppercase;
        }
        .links {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
        }
        .links a {
            padding: 10px 16px;
            border-radius: 999px;
            color: var(--ink);
            text-decoration: none;
            transition: 0.25s ease;
        }
        .links a:hover,
        .links a.active {
            background: var(--accent);
            color: #fff;
        }
        .hero {
            display: grid;
            grid-template-columns: 1.1fr 0.9fr;
            gap: 24px;
            margin-top: 28px;
        }
        .hero-copy,
        .hero-card {
            border-radius: 32px;
            border: 1px solid var(--line);
            background: var(--panel);
            box-shadow: var(--shadow);
            overflow: hidden;
        }
        .hero-copy { padding: 44px; }
        .eyebrow {
            display: inline-block;
            padding: 8px 14px;
            border-radius: 999px;
            background: rgba(216, 112, 67, 0.14);
            color: var(--accent-dark);
            font-size: 0.84rem;
            letter-spacing: 0.08em;
            text-transform: uppercase;
        }
        h1 {
            margin: 18px 0 18px;
            font-size: clamp(2.8rem, 6vw, 5rem);
            line-height: 0.94;
        }
        .lead {
            margin: 0;
            max-width: 40rem;
            color: var(--muted);
            font-size: 1.08rem;
            line-height: 1.8;
        }
        .cta-row {
            display: flex;
            flex-wrap: wrap;
            gap: 14px;
            margin-top: 28px;
        }
        .cta-row a {
            text-decoration: none;
            padding: 14px 20px;
            border-radius: 999px;
            font-weight: 700;
        }
        .primary-btn {
            background: var(--accent);
            color: #fff;
        }
        .secondary-btn {
            color: var(--ink);
            border: 1px solid var(--line);
            background: #fff8f1;
        }
        .stats {
            display: grid;
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: 14px;
            margin-top: 30px;
        }
        .stat {
            padding: 18px;
            border-radius: 22px;
            background: rgba(255, 255, 255, 0.55);
            border: 1px solid var(--line);
        }
        .stat strong {
            display: block;
            margin-bottom: 8px;
            font-size: 1.4rem;
        }
        .stat span {
            color: var(--muted);
            font-size: 0.94rem;
        }
        .hero-card {
            min-height: 560px;
            display: flex;
            flex-direction: column;
            justify-content: flex-end;
            padding: 28px;
            background:
                linear-gradient(180deg, rgba(19, 24, 29, 0.08), rgba(19, 24, 29, 0.62)),
                url('{{ asset('img/test.png') }}') center/cover no-repeat;
        }
        .card-panel {
            padding: 24px;
            border-radius: 24px;
            background: rgba(20, 24, 31, 0.68);
            color: #fff8f1;
        }
        .card-panel p {
            margin: 0;
            color: rgba(255, 248, 241, 0.82);
            line-height: 1.7;
        }
        .feature-grid {
            display: grid;
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: 18px;
            margin-top: 24px;
        }
        .feature {
            padding: 24px;
            border-radius: 28px;
            background: rgba(255, 253, 249, 0.72);
            border: 1px solid var(--line);
        }
        .feature h2 {
            margin: 0 0 10px;
            font-size: 1.2rem;
        }
        .feature p {
            margin: 0;
            color: var(--muted);
            line-height: 1.7;
        }
        @media (max-width: 920px) {
            .hero,
            .feature-grid { grid-template-columns: 1fr; }
            .hero-card { min-height: 400px; }
        }
        @media (max-width: 640px) {
            .page { width: min(100% - 20px, 1140px); }
            .nav { flex-direction: column; align-items: flex-start; }
            .hero-copy { padding: 28px 22px; }
            .stats { grid-template-columns: 1fr; }
        }
    </style>
</head>
<body>
    <div class="page">
        <header class="nav">
            <p class="brand">Personal Site</p>
            <nav class="links">
                <a href="/" class="active">Home</a>
                <a href="/about">About</a>
                <a href="/blog">Blog</a>
                <a href="/contact">Contact</a>
            </nav>
        </header>

        <main>
            <section class="hero">
                <div class="hero-copy">
                    <span class="eyebrow">Home Page</span>
                    <h1>Simple pages can still feel expressive and modern.</h1>
                    <p class="lead">
                        This homepage introduces the site with stronger visual rhythm, softer colors, and a layout that
                        feels more intentional than a plain heading on a blank background.
                    </p>

                    <div class="cta-row">
                        <a href="/about" class="primary-btn">Explore About</a>
                        <a href="/blog" class="secondary-btn">Read Blog</a>
                    </div>

                    <div class="stats">
                        <div class="stat">
                            <strong>4</strong>
                            <span>Main pages connected with clear navigation</span>
                        </div>
                        <div class="stat">
                            <strong>1</strong>
                            <span>Consistent visual direction across the site</span>
                        </div>
                        <div class="stat">
                            <strong>100%</strong>
                            <span>Responsive layout for mobile and desktop</span>
                        </div>
                    </div>
                </div>

                <aside class="hero-card">
                    <div class="card-panel">
                        <h2>First impression matters</h2>
                        <p>
                            The homepage now works as a proper entry point, guiding visitors toward your profile, blog,
                            and contact page with a cleaner structure.
                        </p>
                    </div>
                </aside>
            </section>

            <section class="feature-grid">
                <article class="feature">
                    <h2>Clear layout</h2>
                    <p>Balanced spacing and grouped content make the page easier to scan at a glance.</p>
                </article>
                <article class="feature">
                    <h2>Warm aesthetic</h2>
                    <p>The color palette leans editorial and personal instead of default browser styling.</p>
                </article>
                <article class="feature">
                    <h2>Easy navigation</h2>
                    <p>Visitors can jump between pages quickly without the interface feeling disconnected.</p>
                </article>
            </section>
        </main>
    </div>

    <script src="js/script.js"></script>
</body>
</html>
