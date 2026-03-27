<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact</title>
    <link rel="stylesheet" href="css/style.css">
    <style>
        :root {
            --sky: #edf5f3;
            --mint: #dceae5;
            --panel: rgba(255, 255, 255, 0.8);
            --ink: #1a2430;
            --muted: #60707d;
            --accent: #2e7c75;
            --line: rgba(26, 36, 48, 0.12);
            --shadow: 0 28px 80px rgba(34, 60, 56, 0.15);
        }

        * { box-sizing: border-box; }
        body {
            margin: 0;
            font-family: Georgia, "Times New Roman", serif;
            color: var(--ink);
            background:
                radial-gradient(circle at top right, rgba(255, 255, 255, 0.8), transparent 28%),
                linear-gradient(135deg, var(--sky), var(--mint));
        }
        .page {
            width: min(1120px, calc(100% - 32px));
            margin: 0 auto;
            padding: 30px 0 50px;
        }
        .nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 16px;
            padding: 18px 22px;
            border: 1px solid var(--line);
            border-radius: 24px;
            background: rgba(255, 255, 255, 0.66);
            backdrop-filter: blur(14px);
        }
        .brand {
            margin: 0;
            font-size: 0.95rem;
            letter-spacing: 0.18em;
            text-transform: uppercase;
        }
        .links {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
        }
        .links a {
            text-decoration: none;
            color: var(--ink);
            padding: 10px 16px;
            border-radius: 999px;
            transition: 0.25s ease;
        }
        .links a:hover,
        .links a.active {
            background: var(--accent);
            color: #fff;
        }
        .contact-layout {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 24px;
            margin-top: 28px;
        }
        .intro,
        .panel {
            border-radius: 32px;
            border: 1px solid var(--line);
            background: var(--panel);
            box-shadow: var(--shadow);
        }
        .intro { padding: 42px; }
        .eyebrow {
            display: inline-block;
            padding: 8px 14px;
            border-radius: 999px;
            background: rgba(46, 124, 117, 0.12);
            color: var(--accent);
            font-size: 0.84rem;
            letter-spacing: 0.08em;
            text-transform: uppercase;
        }
        h1 {
            margin: 18px 0 14px;
            font-size: clamp(2.8rem, 6vw, 4.8rem);
            line-height: 0.96;
        }
        .intro p {
            margin: 0;
            color: var(--muted);
            font-size: 1.05rem;
            line-height: 1.8;
        }
        .contact-list {
            display: grid;
            gap: 14px;
            margin-top: 28px;
        }
        .contact-item {
            padding: 18px 20px;
            border-radius: 22px;
            background: rgba(255, 255, 255, 0.6);
            border: 1px solid var(--line);
        }
        .contact-item strong {
            display: block;
            margin-bottom: 6px;
            font-size: 1rem;
        }
        .contact-item span { color: var(--muted); }
        .panel {
            padding: 28px;
            display: grid;
            gap: 18px;
            align-content: start;
        }
        .card {
            padding: 22px;
            border-radius: 24px;
            background: rgba(255, 255, 255, 0.65);
            border: 1px solid var(--line);
        }
        .card h2 {
            margin: 0 0 10px;
            font-size: 1.25rem;
        }
        .card p {
            margin: 0;
            color: var(--muted);
            line-height: 1.75;
        }
        .accent-card {
            background: linear-gradient(135deg, #2e7c75, #1f5f59);
            color: #f5fbf9;
        }
        .accent-card p { color: rgba(245, 251, 249, 0.82); }
        @media (max-width: 920px) {
            .contact-layout { grid-template-columns: 1fr; }
        }
        @media (max-width: 640px) {
            .page { width: min(100% - 20px, 1120px); }
            .nav { flex-direction: column; align-items: flex-start; }
            .intro,
            .panel { padding: 26px 22px; }
        }
    </style>
</head>
<body>
    <div class="page">
        <header class="nav">
            <p class="brand">Personal Site</p>
            <nav class="links">
                <a href="/">Home</a>
                <a href="/about">About</a>
                <a href="/blog">Blog</a>
                <a href="/contact" class="active">Contact</a>
            </nav>
        </header>

        <main class="contact-layout">
            <section class="intro">
                <span class="eyebrow">Contact Page</span>
                <h1>Let the page invite conversation, not just show a title.</h1>
                <p>
                    The contact page now looks like a proper communication hub, with clearer sections and enough visual
                    structure to feel useful even before real contact details are added.
                </p>

                <div class="contact-list">
                    <div class="contact-item">
                        <strong>Email</strong>
                        <span>yourname@example.com</span>
                    </div>
                    <div class="contact-item">
                        <strong>Instagram</strong>
                        <span>@yourprofile</span>
                    </div>
                    <div class="contact-item">
                        <strong>Location</strong>
                        <span>Indonesia</span>
                    </div>
                </div>
            </section>

            <section class="panel">
                <article class="card accent-card">
                    <h2>About Me</h2>
                    <p>This keeps your original page idea, but presents it in a more polished card instead of a single line on the page.</p>
                </article>

                <article class="card">
                    <h2>Best for collaboration</h2>
                    <p>Use this area later for project inquiries, freelance work, portfolio links, or a small contact form when you're ready.</p>
                </article>

                <article class="card">
                    <h2>Response style</h2>
                    <p>A friendly, calm interface makes visitors feel more welcome to reach out and connect.</p>
                </article>
            </section>
        </main>
    </div>
</body>
</html>
