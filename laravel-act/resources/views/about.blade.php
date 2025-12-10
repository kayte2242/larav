<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>About • Brew & Bean</title>
    <meta name="description" content="Learn about Brew & Bean — our mission, sourcing, roasting philosophy, and the people behind your favorite cup." />
    <style>
        :root{--bg:#0f0e0e;--text:#e9e4df;--muted:#bfb6ae;--accent:#c37a44;--accent-2:#7a4a2a;--card:#141313;--shadow:0 10px 30px rgba(0,0,0,.35)}
        *{box-sizing:border-box}
        html,body{height:100%}
        body{margin:0;font-family:ui-sans-serif,system-ui,-apple-system,Segoe UI,Roboto,Noto Sans,Ubuntu,Cantarell,Helvetica,Arial;line-height:1.6;color:var(--text);background: radial-gradient(1200px 600px at 80% -10%, rgba(195,122,68,.08), transparent 60%), var(--bg)}
        a{color:inherit;text-decoration:none}
        img{max-width:100%;display:block}
        .container{max-width:1100px;margin:0 auto;padding:0 20px}
        header{position:sticky;top:0;z-index:50;background:rgba(15,14,14,.75);backdrop-filter: blur(10px);border-bottom:1px solid #211f1f}
        .nav{display:flex;align-items:center;justify-content:space-between;padding:16px 0}
        .brand{display:flex;align-items:center;gap:.6rem;font-weight:800;letter-spacing:.5px}
        .brand-logo{width:34px;height:34px;border-radius:9px;display:grid;place-items:center;background:conic-gradient(from 210deg,#79492a,#c37a44,#79492a);box-shadow:0 6px 18px rgba(195,122,68,.25)}
        .menu{display:flex;gap:1rem}
        .btn{display:inline-flex;align-items:center;gap:.5rem;padding:.9rem 1.1rem;border-radius:10px;border:1px solid #2a2828;background:linear-gradient(180deg,#1b1a1a,#121111);color:var(--text);box-shadow:var(--shadow);font-weight:600;transition:.2s transform,.2s opacity}
        .btn:hover{transform:translateY(-2px);opacity:.95}
        .btn-primary{background:linear-gradient(180deg,var(--accent),var(--accent-2));border-color:#5a3a25}
        .section{padding:52px 0}
        .muted{color:var(--muted)}
        .card{background:var(--card);border:1px solid #211f1f;border-radius:16px;padding:18px;box-shadow:var(--shadow)}
        .grid{display:grid;gap:20px}
        .grid-2{grid-template-columns:1.1fr .9fr}
        .grid-3{grid-template-columns:repeat(3,1fr)}
        @media (max-width: 920px){.grid-2{grid-template-columns:1fr}.grid-3{grid-template-columns:1fr}}
        .kicker{letter-spacing:.12em;text-transform:uppercase;font-weight:700;color:#e8cfbb;font-size:.8rem}
        .badge{font-size:.75rem;background:#1b1816;color:#e9cbb1;border:1px solid #3a2a21;padding:.3rem .5rem;border-radius:6px}
        .avatar{width:64px;height:64px;border-radius:50%;object-fit:cover;border:2px solid #2a2828}
        footer{padding:32px 0;border-top:1px solid #211f1f;color:#a99f96}
    </style>
</head>
<body>
    <header>
        <div class="container nav">
            <a class="brand" href="/">
                <span class="brand-logo" aria-hidden="true">☕</span>
                <span>Brew & Bean</span>
            </a>
            <nav class="menu" aria-label="Primary">
                <a href="/">Home</a>
                <a href="/about">About</a>
                <a href="/contact">Contact</a>
                <a class="btn btn-primary" href="/">Shop Coffees</a>
            </nav>
        </div>
    </header>

    <main>
        <!-- Hero / Mission -->
        <section class="section">
            <div class="container grid grid-2">
                <div>
                    <p class="kicker">Our mission</p>
                    <h1 style="margin:.2rem 0 .4rem">Coffee that’s better for people and the planet</h1>
                    <p class="muted" style="max-width:60ch">We started Brew & Bean to share coffees that are traceable, sweet, and sustainably sourced. From farm to cup, we obsess over the details so your daily ritual tastes extraordinary.</p>
                    <div style="display:flex;gap:12px;margin-top:12px;flex-wrap:wrap">
                        <span class="badge">Direct Trade</span>
                        <span class="badge">Small Batch</span>
                        <span class="badge">Roasted to Order</span>
                        <span class="badge">Carbon Smart</span>
                    </div>
                </div>
                <img src="https://images.unsplash.com/photo-1509043759401-136742328bb3?q=80&w=1200&auto=format&fit=crop" alt="Roaster checking coffee beans during roast" style="border-radius:12px;aspect-ratio:4/3;object-fit:cover">
            </div>
        </section>

        <!-- Story timeline -->
        <section class="section" style="padding-top:0">
            <div class="container card">
                <h2 style="margin:.2rem 0 .6rem">Our story</h2>
                <div class="grid grid-3">
                    <article>
                        <h3>2018 — Origins</h3>
                        <p class="muted">We began as a pop‑up pour‑over bar, sharing single‑origin coffees at local markets.</p>
                    </article>
                    <article>
                        <h3>2020 — Roasting</h3>
                        <p class="muted">Upgraded to a 5kg roaster and launched our first espresso blend for home baristas.</p>
                    </article>
                    <article>
                        <h3>2023 — Community</h3>
                        <p class="muted">Opened a neighborhood roastery-café and launched brew classes every weekend.</p>
                    </article>
                </div>
            </div>
        </section>

        <!-- Sustainability and Quality -->
        <section class="section">
            <div class="container grid grid-2">
                <div class="card">
                    <h2>Sustainability</h2>
                    <p class="muted">We pay premiums above fair trade, invest in farm projects, and minimize our footprint with recyclable packaging and carbon‑offset shipping.</p>
                    <ul class="muted">
                        <li>Compostable bags and recyclable valves</li>
                        <li>Electric delivery for local orders</li>
                        <li>Farm partnership fund (1% of revenue)</li>
                    </ul>
                </div>
                <div class="card">
                    <h2>Quality</h2>
                    <p class="muted">Every lot is sample roasted and cupped by Q‑graded tasters. We profile for sweetness, clarity, and balance across brew methods.</p>
                    <ul class="muted">
                        <li>Roasted twice weekly</li>
                        <li>Traceable, single‑origin lots</li>
                        <li>Dial‑in guides for all coffees</li>
                    </ul>
                </div>
            </div>
        </section>

        <!-- Team -->
        <section class="section">
            <div class="container">
                <h2 style="margin:.2rem 0 .6rem">Meet the team</h2>
                <div class="grid grid-3">
                    <article class="card" style="display:flex;gap:12px;align-items:center">
                        <img class="avatar" src="https://images.unsplash.com/photo-1527980965255-d3b416303d12?q=80&w=400&auto=format&fit=crop" alt="Portrait of founder and head roaster">
                        <div>
                            <strong>Jordan Lee</strong>
                            <p class="muted" style="margin:4px 0 0">Founder & Head Roaster</p>
                        </div>
                    </article>
                    <article class="card" style="display:flex;gap:12px;align-items:center">
                        <img class="avatar" src="https://images.unsplash.com/photo-1544005313-94ddf0286df2?q=80&w=400&auto=format&fit=crop" alt="Portrait of green buyer">
                        <div>
                            <strong>Samira Patel</strong>
                            <p class="muted" style="margin:4px 0 0">Green Coffee Buyer</p>
                        </div>
                    </article>
                    <article class="card" style="display:flex;gap:12px;align-items:center">
                        <img class="avatar" src="https://images.unsplash.com/photo-1547425260-76bcadfb4f2c?q=80&w=400&auto=format&fit=crop" alt="Portrait of education lead">
                        <div>
                            <strong>Carlos Mendes</strong>
                            <p class="muted" style="margin:4px 0 0">Education Lead</p>
                        </div>
                    </article>
                </div>
            </div>
        </section>

        <!-- CTA -->
        <section class="section" style="padding-top:0">
            <div class="container card" style="display:grid;gap:16px;align-items:center;grid-template-columns: 1.1fr .9fr">
                <div>
                    <h2>Taste the difference</h2>
                    <p class="muted">Try our best‑selling single origins and blends — roasted to order and delivered fresh.</p>
                    <a class="btn btn-primary" href="/">Shop Coffees</a>
                </div>
                <img src="https://images.unsplash.com/photo-1514489428350-c9a0b54ab3e3?q=80&w=1200&auto=format&fit=crop" alt="Freshly brewed pour-over coffee" style="border-radius:12px;aspect-ratio:4/3;object-fit:cover">
            </div>
        </section>
    </main>

    <footer class="container" style="margin-top:16px;color:#7e7770;padding:24px 0;border-top:1px solid #211f1f">© <span id="y"></span> Brew & Bean. All rights reserved.</footer>

    <script>document.getElementById('y').textContent = new Date().getFullYear();</script>
</body>
</html>