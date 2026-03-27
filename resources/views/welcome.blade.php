<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome</title>
    <style>
        :root {
            --bg-1: #f7efe6;
            --bg-2: #dce6de;
            --panel: rgba(255, 251, 245, 0.82);
            --ink: #1a2330;
            --muted: #5d6975;
            --accent: #b56239;
            --accent-deep: #7c3d23;
            --line: rgba(26, 35, 48, 0.11);
            --shadow: 0 28px 90px rgba(68, 50, 30, 0.16);
        }

        * { box-sizing: border-box; }
        body {
            margin: 0;
            min-height: 100vh;
            font-family: Georgia, "Times New Roman", serif;
            color: var(--ink);
            background:
                radial-gradient(circle at top left, rgba(255,255,255,0.82), transparent 30%),
                linear-gradient(135deg, var(--bg-1), var(--bg-2));
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
            border-radius: 24px;
            border: 1px solid var(--line);
            background: rgba(255, 251, 245, 0.7);
            backdrop-filter: blur(14px);
        }
        .nav h1 {
            margin: 0;
            font-size: 0.95rem;
            letter-spacing: 0.18em;
            text-transform: uppercase;
        }
        .nav-links {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
        }
        .nav-links a {
            color: var(--ink);
            text-decoration: none;
            padding: 10px 16px;
            border-radius: 999px;
            transition: 0.25s ease;
        }
        .nav-links a:hover {
            background: var(--accent);
            color: white;
        }
        .hero {
            display: grid;
            grid-template-columns: 1.08fr 0.92fr;
            gap: 24px;
            margin-top: 28px;
        }
        .copy,
        .visual {
            border-radius: 32px;
            border: 1px solid var(--line);
            background: var(--panel);
            box-shadow: var(--shadow);
            overflow: hidden;
        }
        .copy { padding: 44px; }
        .eyebrow {
            display: inline-block;
            padding: 8px 14px;
            border-radius: 999px;
            background: rgba(181, 98, 57, 0.13);
            color: var(--accent-deep);
            font-size: 0.84rem;
            letter-spacing: 0.08em;
            text-transform: uppercase;
        }
        .copy h2 {
            margin: 18px 0 14px;
            font-size: clamp(2.7rem, 6vw, 5rem);
            line-height: 0.95;
        }
        .copy p {
            margin: 0;
            max-width: 41rem;
            color: var(--muted);
            font-size: 1.08rem;
            line-height: 1.8;
        }
        .actions {
            display: flex;
            flex-wrap: wrap;
            gap: 14px;
            margin-top: 28px;
        }
        .actions a {
            text-decoration: none;
            padding: 14px 20px;
            border-radius: 999px;
            font-weight: 700;
        }
        .primary {
            background: var(--accent);
            color: #fff;
        }
        .secondary {
            color: var(--ink);
            border: 1px solid var(--line);
            background: #fff9f2;
        }
        .mini-grid {
            display: grid;
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: 14px;
            margin-top: 30px;
        }
        .mini-card {
            padding: 18px;
            border-radius: 22px;
            background: rgba(255,255,255,0.56);
            border: 1px solid var(--line);
        }
        .mini-card strong {
            display: block;
            margin-bottom: 8px;
            font-size: 1.1rem;
        }
        .mini-card span {
            color: var(--muted);
            font-size: 0.94rem;
            line-height: 1.6;
        }
        .visual {
            min-height: 560px;
            display: flex;
            align-items: flex-end;
            padding: 28px;
            background:
                linear-gradient(180deg, rgba(23, 28, 34, 0.05), rgba(23, 28, 34, 0.62)),
                url('{{ asset('img/test.png') }}') center/cover no-repeat;
        }
        .visual-panel {
            padding: 24px;
            border-radius: 24px;
            background: rgba(22, 27, 33, 0.68);
            color: #fff7f0;
        }
        .visual-panel p {
            margin: 0;
            color: rgba(255, 247, 240, 0.82);
            line-height: 1.7;
        }
        .footer {
            margin-top: 22px;
            color: var(--muted);
            font-size: 0.92rem;
            text-align: right;
        }
        @media (max-width: 920px) {
            .hero,
            .mini-grid { grid-template-columns: 1fr; }
            .visual { min-height: 400px; }
        }
        @media (max-width: 640px) {
            .page { width: min(100% - 20px, 1140px); }
            .nav { flex-direction: column; align-items: flex-start; }
            .copy { padding: 28px 22px; }
            .footer { text-align: left; }
        }
    </style>
</head>
<body>
    <div class="page">
        <header class="nav">
            <h1>Welcome</h1>
            <nav class="nav-links">
                <a href="/">Home</a>
                <a href="/about">About</a>
                <a href="/blog">Blog</a>
                <a href="/contact">Contact</a>
            </nav>
        </header>

        <main class="hero">
            <section class="copy">
                <span class="eyebrow">Laravel Starter</span>
                <h2>From default welcome screen to a more personal landing page.</h2>
                <p>
                    This version keeps the page lightweight, but turns it into something that actually matches the rest
                    of your site instead of the standard Laravel starter template.
                </p>

                <div class="actions">
                    <a href="/" class="primary">Open Home</a>
                    <a href="/about" class="secondary">Meet the Owner</a>
                </div>

                <div class="mini-grid">
                    <div class="mini-card">
                        <strong>Cleaner identity</strong>
                        <span>A welcome page that feels connected to the rest of your project.</span>
                    </div>
                    <div class="mini-card">
                        <strong>Still simple</strong>
                        <span>No heavy framework needed, just structured HTML and scoped CSS.</span>
                    </div>
                    <div class="mini-card">
                        <strong>Ready to grow</strong>
                        <span>You can expand this later into a portfolio or landing screen.</span>
                    </div>
                </div>
            </section>

            <aside class="visual">
                <div class="visual-panel">
                    <h2>Built with Laravel</h2>
                    <p>Laravel v{{ Illuminate\Foundation\Application::VERSION }} and PHP v{{ PHP_VERSION }} are still shown here, just in a calmer presentation.</p>
                </div>
            </aside>
        </main>

        <p class="footer">{{ str_replace('_', '-', app()->getLocale()) }} locale active</p>
    </div>
</body>
</html>
