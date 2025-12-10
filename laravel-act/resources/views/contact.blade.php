<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Contact • Brew & Bean</title>
    <meta name="description" content="Get in touch with Brew & Bean. Questions about orders, beans, wholesale, or brewing? We'd love to hear from you." />

    <style>
        :root{
            --bg:#0f0e0e; --bg-soft:#171616; --text:#e9e4df; --muted:#bfb6ae; --accent:#c37a44; --accent-2:#7a4a2a; --card:#141313; --shadow:0 10px 30px rgba(0,0,0,.35);
        }
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
        .btn-ghost{background:transparent;border-color:#2a2828}
        .section{padding:52px 0}
        .muted{color:var(--muted)}
        .card{background:var(--card);border:1px solid #211f1f;border-radius:16px;padding:18px;box-shadow:var(--shadow)}
        .grid{display:grid;gap:20px}
        .grid-2{grid-template-columns:1.2fr .8fr}
        @media (max-width: 880px){.grid-2{grid-template-columns:1fr}}
        .kicker{letter-spacing:.12em;text-transform:uppercase;font-weight:700;color:#e8cfbb;font-size:.8rem}
        label{display:block;margin:.3rem 0 .4rem;color:#d9d1c8;font-weight:600}
        input,select,textarea{width:100%;padding:.85rem 1rem;border-radius:10px;border:1px solid #2b2929;background:#141313;color:var(--text)}
        textarea{min-height:140px;resize:vertical}
        .info-grid{display:grid;grid-template-columns:repeat(2,1fr);gap:14px}
        @media (max-width:640px){.info-grid{grid-template-columns:1fr}}
        .kv{padding:.7rem .9rem;border-radius:10px;border:1px solid #262424;background:#161515;color:#e9e4df}
        .kv small{color:#a69d94}
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
                <a href="#hours">Hours</a>
                <a href="#location">Location</a>
                <a class="btn btn-primary" href="#form">Send a Message</a>
            </nav>
        </div>
    </header>

    <main>
        <section class="section">
            <div class="container">
                <p class="kicker">Say hello</p>
                <h1 style="margin:.2rem 0 0">Contact Brew & Bean</h1>
                <p class="muted" style="max-width:60ch">Questions about orders, beans, subscriptions, wholesale, or brewing? Send us a note — we usually respond within one business day.</p>
            </div>
        </section>

        <section id="form" class="section">
            <div class="container grid grid-2">
                <!-- Contact form -->
                <article class="card" aria-labelledby="contact-heading">
                    <h2 id="contact-heading" style="margin:.2rem 0 1rem">Send us a message</h2>
                    <form onsubmit="contactSubmit(event)">
                        <div class="grid" style="grid-template-columns:1fr 1fr;gap:12px">
                            <div>
                                <label for="name">Full name</label>
                                <input id="name" name="name" type="text" required placeholder="Jane Doe" autocomplete="name">
                            </div>
                            <div>
                                <label for="email">Email</label>
                                <input id="email" name="email" type="email" required placeholder="you@example.com" autocomplete="email">
                            </div>
                        </div>
                        <div class="grid" style="grid-template-columns:1fr 1fr;gap:12px;margin-top:10px">
                            <div>
                                <label for="topic">Topic</label>
                                <select id="topic" name="topic" required>
                                    <option value="">Select a topic…</option>
                                    <option>Order support</option>
                                    <option>Subscription</option>
                                    <option>Wholesale</option>
                                    <option>Brewing advice</option>
                                    <option>Other</option>
                                </select>
                            </div>
                            <div>
                                <label for="phone">Phone (optional)</label>
                                <input id="phone" name="phone" type="tel" placeholder="(555) 000-0000" autocomplete="tel">
                            </div>
                        </div>
                        <div style="margin-top:10px">
                            <label for="message">Message</label>
                            <textarea id="message" name="message" required placeholder="How can we help?"></textarea>
                        </div>
                        <div style="display:flex;align-items:center;gap:10px;margin-top:14px">
                            <button type="submit" class="btn btn-primary">Send message</button>
                            <button type="reset" class="btn btn-ghost">Reset</button>
                        </div>
                        <p class="muted" style="margin-top:10px;font-size:.9rem">This is a demo form. In production, post to a route and handle in a controller.</p>
                    </form>
                </article>

                <!-- Info / map -->
                <aside class="card" id="location">
                    <h2 style="margin:.2rem 0 1rem">Visit our roastery</h2>
                    <div class="info-grid">
                        <div class="kv">
                            <strong>Address</strong><br/>
                            <small>123 Roast St<br/>Aroma City, AC 00000</small>
                        </div>
                        <div class="kv">
                            <strong>Phone</strong><br/>
                            <small>(555) 123-4567</small>
                        </div>
                        <div class="kv">
                            <strong>Email</strong><br/>
                            <small>hello@brewandbean.example</small>
                        </div>
                        <div class="kv" id="hours">
                            <strong>Hours</strong><br/>
                            <small>Mon–Fri 7:00–18:00<br/>Sat–Sun 8:00–16:00</small>
                        </div>
                    </div>

                    <div style="margin-top:12px">
                        <img src="https://images.unsplash.com/photo-1504754524776-8f4f37790ca0?q=80&w=1400&auto=format&fit=crop" alt="Cozy coffee shop interior" style="border-radius:12px;aspect-ratio:16/9;object-fit:cover">
                    </div>
                </aside>
            </div>
        </section>

        <section class="section">
            <div class="container card">
                <h2 style="margin:.2rem 0 .6rem">FAQ</h2>
                <details>
                    <summary>How long does shipping take?</summary>
                    <p class="muted">We roast twice weekly and ship within 24 hours. Typical delivery time: 2–4 business days.</p>
                </details>
                <details>
                    <summary>Do you grind to order?</summary>
                    <p class="muted">Yes — choose your grind size at checkout for espresso, pour-over, AeroPress, or French press.</p>
                </details>
                <details>
                    <summary>Do you offer wholesale pricing?</summary>
                    <p class="muted">We partner with cafes and offices. Drop us a note with expected volume and we’ll tailor a plan.</p>
                </details>
            </div>
        </section>
    </main>

    <footer class="container" style="margin-top:16px;color:#7e7770;padding:24px 0;border-top:1px solid #211f1f">© <span id="y"></span> Brew & Bean. All rights reserved.</footer>

    <script>
        function contactSubmit(e){
            e.preventDefault();
            const data = Object.fromEntries(new FormData(e.target).entries());
            alert('Thanks, ' + (data.name||'there') + '! We\'ll reply to ' + (data.email||'your email') + ' shortly.');
            e.target.reset();
        }
        document.getElementById('y').textContent = new Date().getFullYear();
    </script>
</body>
</html>