<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog</title>
    <link rel="stylesheet" href="css/style.css">
    <style>
        :root {
            --bg: #f2efe8;
            --paper: #fffdf8;
            --ink: #18212c;
            --muted: #61707d;
            --accent: #346d66;
            --accent-soft: rgba(52, 109, 102, 0.12);
            --line: rgba(24, 33, 44, 0.11);
            --shadow: 0 28px 70px rgba(41, 56, 53, 0.14);
        }

        * { box-sizing: border-box; }
        body {
            margin: 0;
            font-family: Georgia, "Times New Roman", serif;
            color: var(--ink);
            background:
                linear-gradient(180deg, rgba(255,255,255,0.75), transparent 20%),
                linear-gradient(135deg, #edf1ea, var(--bg));
        }
        .page {
            width: min(1100px, calc(100% - 32px));
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
            background: rgba(255, 253, 248, 0.72);
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
            color: white;
        }
        .hero {
            margin-top: 28px;
            padding: 40px;
            border-radius: 32px;
            border: 1px solid var(--line);
            background: var(--paper);
            box-shadow: var(--shadow);
        }
        .hero span {
            display: inline-block;
            padding: 8px 14px;
            border-radius: 999px;
            background: var(--accent-soft);
            color: var(--accent);
            font-size: 0.84rem;
            letter-spacing: 0.08em;
            text-transform: uppercase;
        }
        h1 {
            margin: 18px 0 10px;
            font-size: clamp(2.6rem, 6vw, 4.7rem);
            line-height: 0.96;
        }
        .intro {
            margin: 0;
            max-width: 42rem;
            color: var(--muted);
            font-size: 1.05rem;
            line-height: 1.8;
        }
        .content {
            display: grid;
            grid-template-columns: 0.9fr 1.1fr;
            gap: 24px;
            margin-top: 24px;
        }
        .profile,
        .posts {
            border-radius: 30px;
            border: 1px solid var(--line);
            background: rgba(255, 253, 248, 0.78);
            box-shadow: var(--shadow);
        }
        .profile { padding: 28px; }
        .portrait {
            height: 280px;
            border-radius: 24px;
            background:
                linear-gradient(180deg, rgba(22, 27, 32, 0.05), rgba(22, 27, 32, 0.46)),
                url('{{ asset('img/test.png') }}') center/cover no-repeat;
        }
        .profile h2 {
            margin: 18px 0 10px;
            font-size: 1.8rem;
        }
        .profile p {
            margin: 0;
            color: var(--muted);
            line-height: 1.8;
        }
        .quote {
            margin-top: 18px;
            padding: 18px;
            border-left: 4px solid var(--accent);
            border-radius: 0 18px 18px 0;
            background: var(--accent-soft);
            font-style: italic;
        }
        .posts { padding: 28px; }
        .section-title {
            margin: 0 0 18px;
            font-size: 1.25rem;
        }
        .post {
            padding: 22px 0;
            border-top: 1px solid var(--line);
        }
        .post:first-of-type {
            padding-top: 0;
            border-top: 0;
        }
        .meta {
            display: inline-block;
            margin-bottom: 8px;
            color: var(--accent);
            font-size: 0.84rem;
            letter-spacing: 0.08em;
            text-transform: uppercase;
        }
        .post h3 {
            margin: 0 0 10px;
            font-size: 1.35rem;
        }
        .post p {
            margin: 0;
            color: var(--muted);
            line-height: 1.75;
        }
        @media (max-width: 920px) {
            .content { grid-template-columns: 1fr; }
        }
        @media (max-width: 640px) {
            .page { width: min(100% - 20px, 1100px); }
            .nav { flex-direction: column; align-items: flex-start; }
            .hero,
            .profile,
            .posts { padding: 26px 22px; }
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
                <a href="/blog" class="active">Blog</a>
                <a href="/contact">Contact</a>
            </nav>
        </header>

        <main>
            <section class="hero">
                <span>Journal</span>
                <h1>Thoughts, stories, and a profile with more personality.</h1>
                <p class="intro">
                    Instead of a single heading, the blog page now feels like an editorial profile with featured writing
                    cards and a more readable structure.
                </p>
            </section>

            <section class="content">
                <aside class="profile">
                    <div class="portrait"></div>
                    <h2>R Herick Fauzi Komara Kusumah</h2>
                    <p>Seorang pria dengan mimpi yang besar, now introduced through a cleaner, more memorable blog page.</p>
                    <p class="quote">"Big dreams grow faster when the interface looks like it believes in them too."</p>
                </aside>

                <section class="posts">
                    <h2 class="section-title">Featured Notes</h2>

                    <article class="post">
                        <span class="meta">Story 01</span>
                        <h3>Starting small without thinking small</h3>
                        <p>Every personal website begins with a few simple pages. Strong structure and visual care can make even a basic project feel serious and alive.</p>
                    </article>

                    <article class="post">
                        <span class="meta">Story 02</span>
                        <h3>Design as a message</h3>
                        <p>The colors, spacing, and rhythm of a page say something before a visitor reads the first sentence. This redesign makes that first message stronger.</p>
                    </article>

                    <article class="post">
                        <span class="meta">Story 03</span>
                        <h3>Room for future writing</h3>
                        <p>This layout is ready for real blog posts later, so the page can grow naturally instead of needing another redesign from scratch.</p>
                    </article>
                </section>
            </section>
        </main>
    </div>
</body>
</html>
