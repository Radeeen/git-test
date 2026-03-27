<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman About</title>
    <link rel="stylesheet" href="css/style.css">
    <style>
        :root {
            --bg-start: #f6efe6;
            --bg-end: #dce8e2;
            --surface: rgba(255, 252, 247, 0.82);
            --surface-strong: #fffaf3;
            --text-main: #1f2937;
            --text-soft: #5b6472;
            --accent: #c66b3d;
            --accent-deep: #8b4a2a;
            --line: rgba(31, 41, 55, 0.12);
            --shadow: 0 24px 70px rgba(87, 62, 32, 0.16);
        }

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            min-height: 100vh;
            font-family: Georgia, "Times New Roman", serif;
            color: var(--text-main);
            background:
                radial-gradient(circle at top left, rgba(255, 255, 255, 0.7), transparent 34%),
                linear-gradient(135deg, var(--bg-start), var(--bg-end));
        }

        .page-shell {
            width: min(1120px, calc(100% - 32px));
            margin: 0 auto;
            padding: 32px 0 48px;
        }

        .topbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 16px;
            padding: 18px 22px;
            margin-bottom: 28px;
            border: 1px solid var(--line);
            border-radius: 24px;
            background: rgba(255, 250, 243, 0.7);
            backdrop-filter: blur(14px);
            box-shadow: 0 10px 30px rgba(64, 44, 24, 0.08);
        }

        .brand {
            margin: 0;
            font-size: 1rem;
            letter-spacing: 0.18em;
            text-transform: uppercase;
        }

        .nav-links {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
        }

        .nav-links a {
            color: var(--text-main);
            text-decoration: none;
            padding: 10px 16px;
            border-radius: 999px;
            border: 1px solid transparent;
            transition: 0.25s ease;
        }

        .nav-links a:hover,
        .nav-links a.active {
            color: white;
            background: var(--accent);
            border-color: var(--accent);
        }

        .about-layout {
            display: grid;
            grid-template-columns: 1.2fr 0.8fr;
            gap: 24px;
            align-items: stretch;
        }

        .about-copy,
        .about-visual {
            position: relative;
            overflow: hidden;
            border: 1px solid rgba(31, 41, 55, 0.08);
            border-radius: 32px;
            background: var(--surface);
            box-shadow: var(--shadow);
            backdrop-filter: blur(12px);
        }

        .about-copy {
            padding: 42px;
        }

        .eyebrow {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            margin-bottom: 18px;
            padding: 8px 14px;
            border-radius: 999px;
            background: rgba(198, 107, 61, 0.12);
            color: var(--accent-deep);
            font-size: 0.88rem;
            letter-spacing: 0.08em;
            text-transform: uppercase;
        }

        .eyebrow::before {
            content: "";
            width: 8px;
            height: 8px;
            border-radius: 999px;
            background: var(--accent);
        }

        h1 {
            margin: 0 0 16px;
            font-size: clamp(2.6rem, 6vw, 4.8rem);
            line-height: 0.95;
        }

        .lead {
            margin: 0 0 28px;
            max-width: 42rem;
            color: var(--text-soft);
            font-size: 1.08rem;
            line-height: 1.8;
        }

        .owner-card {
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 16px;
            margin-bottom: 26px;
        }

        .info-box {
            padding: 20px;
            border: 1px solid var(--line);
            border-radius: 22px;
            background: var(--surface-strong);
        }

        .info-label {
            display: block;
            margin-bottom: 8px;
            color: var(--text-soft);
            font-size: 0.82rem;
            letter-spacing: 0.1em;
            text-transform: uppercase;
        }

        .info-value {
            margin: 0;
            font-size: 1.3rem;
            font-weight: 700;
        }

        .highlight {
            display: flex;
            flex-wrap: wrap;
            gap: 12px;
        }

        .highlight span {
            padding: 10px 14px;
            border-radius: 999px;
            background: rgba(31, 41, 55, 0.06);
            color: var(--text-main);
            font-size: 0.92rem;
        }

        .about-visual {
            display: flex;
            flex-direction: column;
            justify-content: flex-end;
            min-height: 540px;
            padding: 28px;
            background:
                linear-gradient(180deg, rgba(22, 26, 34, 0.08), rgba(22, 26, 34, 0.5)),
                url('{{ asset('img/test.png') }}') center/cover no-repeat;
        }

        .visual-panel {
            padding: 24px;
            border-radius: 24px;
            background: rgba(24, 28, 34, 0.6);
            color: #f6efe6;
            backdrop-filter: blur(10px);
        }

        .visual-panel p {
            margin: 0;
            line-height: 1.7;
            color: rgba(246, 239, 230, 0.88);
        }

        .visual-title {
            margin: 0 0 10px;
            font-size: 1.4rem;
        }

        @media (max-width: 900px) {
            .about-layout {
                grid-template-columns: 1fr;
            }

            .about-visual {
                min-height: 400px;
            }
        }

        @media (max-width: 640px) {
            .page-shell {
                width: min(100% - 20px, 1120px);
                padding-top: 20px;
            }

            .topbar,
            .about-copy,
            .about-visual {
                border-radius: 24px;
            }

            .topbar {
                align-items: flex-start;
                flex-direction: column;
            }

            .about-copy {
                padding: 28px 22px;
            }

            .owner-card {
                grid-template-columns: 1fr;
            }

            h1 {
                line-height: 1.02;
            }
        }
    </style>
</head>
<body>
    <div class="page-shell">
        <header class="topbar">
            <p class="brand">Personal Space</p>
            <nav class="nav-links">
                <a href="/">Home</a>
                <a href="/about" class="active">About</a>
                <a href="/blog">Blog</a>
                <a href="/contact">Contact</a>
            </nav>
        </header>

        <main class="about-layout">
            <section class="about-copy">
                <span class="eyebrow">About Page</span>
                <h1>Building a simple profile page with a warmer, cleaner look.</h1>
                <p class="lead">
                    This About section introduces the owner in a more polished interface, with a calm editorial style,
                    stronger spacing, and a layout that still works well on mobile screens.
                </p>

                <div class="owner-card">
                    <article class="info-box">
                        <span class="info-label">Owner</span>
                        <p class="info-value">{{ $nama }}</p>
                    </article>
                    <article class="info-box">
                        <span class="info-label">Page Status</span>
                        <p class="info-value">Ready to explore</p>
                    </article>
                </div>

                <div class="highlight">
                    <span>Responsive layout</span>
                    <span>Custom visual section</span>
                    <span>Cleaner navigation</span>
                </div>
            </section>

            <aside class="about-visual">
                <div class="visual-panel">
                    <h2 class="visual-title">A more presentable first impression</h2>
                    <p>
                        Your existing image is now used as a full visual panel, so the page feels more like a real
                        profile interface instead of a plain text document.
                    </p>
                </div>
            </aside>
        </main>
    </div>
</body>
</html>
