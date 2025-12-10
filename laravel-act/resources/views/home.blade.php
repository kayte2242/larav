<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Brew & Bean — Specialty Coffee</title>
    <meta name="description" content="Discover specialty coffees, fresh pastries, and brewing gear. Order online or visit Brew & Bean — your daily dose of joy in every cup." />

    <!-- Minimal, self-contained CSS (no external deps) -->
    <style>
        :root{
            --bg:#0f0e0e;           /* deep espresso */
            --bg-soft:#171616;      /* soft dark */
            --text:#e9e4df;         /* crema */
            --muted:#bfb6ae;        /* milk foam */
            --accent:#c37a44;       /* caramel */
            --accent-2:#7a4a2a;     /* roasted */
            --card:#141313;
            --success:#3fb77e;
            --danger:#e0574f;
            --shadow: 0 10px 30px rgba(0,0,0,.35);
        }
        *{box-sizing:border-box}
        html,body{height:100%}
        body{
            margin:0; font-family: ui-sans-serif, system-ui, -apple-system, Segoe UI, Roboto, Noto Sans, Ubuntu, Cantarell, Helvetica, Arial, "Apple Color Emoji","Segoe UI Emoji";
            color:var(--text); background: radial-gradient(1200px 600px at 80% -10%, rgba(195,122,68,.08), transparent 60%), var(--bg);
            line-height:1.6;
        }
        a{color:inherit;text-decoration:none}
        img{max-width:100%;display:block}
        .container{max-width:1200px;margin:0 auto;padding:0 20px}
        .btn{display:inline-flex;align-items:center;gap:.5rem;padding:.9rem 1.1rem;border-radius:10px;border:1px solid #2a2828;background:linear-gradient(180deg, #1b1a1a, #121111);color:var(--text);box-shadow:var(--shadow);font-weight:600;transition:.2s transform,.2s opacity}
        .btn:hover{transform:translateY(-2px);opacity:.95}
        .btn-primary{background:linear-gradient(180deg, var(--accent), var(--accent-2));border-color:#5a3a25}
        .btn-ghost{background:transparent;border-color:#2a2828}
        .tag{display:inline-block;padding:.25rem .6rem;border:1px solid #2c2a2a;border-radius:999px;font-size:.8rem;color:var(--muted);}
        header{
            position:sticky;top:0;z-index:50;background:rgba(15,14,14,.75);backdrop-filter: blur(10px);border-bottom:1px solid #211f1f
        }
        .nav{display:flex;align-items:center;justify-content:space-between;padding:16px 0}
        .nav a{color:var(--muted)}
        .brand{display:flex;align-items:center;gap:.6rem;font-weight:800;letter-spacing:.5px}
        .brand-logo{width:34px;height:34px;border-radius:9px;display:grid;place-items:center;background:conic-gradient(from 210deg, #79492a, #c37a44, #79492a);box-shadow:0 6px 18px rgba(195,122,68,.25)}
        .menu{display:flex;gap:1rem}
        .hero{display:grid;grid-template-columns:1.15fr .85fr;gap:40px;padding:64px 0 32px;align-items:center}
        .hero h1{font-size:clamp(2.2rem, 3.2vw, 3.6rem);line-height:1.1;margin:.5rem 0 1rem}
        .hero p{color:var(--muted);max-width:56ch}
        .hero-card{background:linear-gradient(180deg, #141313, #0f0e0e);border:1px solid #222;border-radius:16px;padding:16px;box-shadow:var(--shadow)}
        .grid{display:grid;gap:20px}
        .grid-3{grid-template-columns:repeat(3,1fr)}
        .grid-2{grid-template-columns:repeat(2,1fr)}
        .card{background:var(--card);border:1px solid #211f1f;border-radius:16px;padding:18px;box-shadow:var(--shadow)}
        .card h3{margin:.25rem 0 .4rem}
        .price{font-weight:800;color:#eed9c4}
        .stars{color:#f6c56b}
        .section{padding:56px 0}
        .section h2{font-size:clamp(1.6rem, 2.2vw, 2.2rem);margin:0 0 .8rem}
        .muted{color:var(--muted)}
        .divider{height:1px;background:#242221;margin:28px 0}
        .badge{font-size:.75rem;background:#1b1816;color:#e9cbb1;border:1px solid #3a2a21;padding:.3rem .5rem;border-radius:6px}
        .foot{padding:32px 0;border-top:1px solid #211f1f;color:#a99f96}
        .cta{display:flex;gap:14px;flex-wrap:wrap}
        .responsive-hide{display:block}
        .responsive-only{display:none}
        @media (max-width: 880px){
            .hero{grid-template-columns:1fr;gap:20px}
            .responsive-hide{display:none}
            .responsive-only{display:inline-flex}
        }
        /* Tiny helpers */
        .kicker{letter-spacing:.12em;text-transform:uppercase;font-weight:700;color:#e8cfbb;font-size:.8rem}
        .pill{display:inline-flex;align-items:center;gap:.5rem;padding:.3rem .6rem;border-radius:999px;background:#1a1716;border:1px solid #2b2724;color:#e8cfbb;font-size:.8rem}
        .pill .dot{width:8px;height:8px;border-radius:50%;background:var(--accent)}
        .sr-only{position:absolute;width:1px;height:1px;padding:0;margin:-1px;overflow:hidden;clip:rect(0,0,0,0);white-space:nowrap;border:0}
    </style>
</head>
<body>
    <header>
        <div class="container nav">
            <a class="brand" href="#">
                <span class="brand-logo" aria-hidden="true">☕</span>
                <span>Brew & Bean</span>
            </a>
            <nav class="menu" aria-label="Primary">
                <a href="#menu">Menu</a>
                <a href="#story">Our Story</a>
                <a href="#process">Roasting</a>
                <a href="#contact">Contact</a>
                <a href="#shop" class="btn btn-primary responsive-hide">Order Now</a>
                <a href="#shop" class="btn btn-primary responsive-only" aria-label="Order Now">Buy</a>
            </nav>
        </div>
    </header>

    <main>
        <!-- HERO -->
        <section class="container hero">
            <div>
                <span class="kicker">Fresh · Small Batch · Delivered</span>
                <h1>Elevate your daily ritual with specialty coffee</h1>
                <p>Hand-roasted Arabica beans sourced from sustainable farms. Brew better at home with our curated beans, brewing gear, and barista tips.</p>
                <div class="cta" style="margin-top:18px">
                    <a class="btn btn-primary" href="#shop">Shop Coffees</a>
                    <a class="btn btn-ghost" href="#learn">Learn to Brew</a>
                    <span class="pill"><span class="dot"></span> Free delivery over $30</span>
                </div>
                <div class="divider"></div>
                <div class="grid grid-3">
                    <div>
                        <div class="tag">Roast</div>
                        <h3 style="margin:.3rem 0">Light · Medium · Dark</h3>
                        <p class="muted">Balanced profiles developed by Q-graded roasters for clarity and sweetness.</p>
                    </div>
                    <div>
                        <div class="tag">Grind</div>
                        <h3 style="margin:.3rem 0">Whole bean or ground</h3>
                        <p class="muted">Choose your grind size for espresso, pour-over, AeroPress, or French press.</p>
                    </div>
                    <div>
                        <div class="tag">Delivery</div>
                        <h3 style="margin:.3rem 0">Roasted to order</h3>
                        <p class="muted">We roast twice weekly and ship within 24 hours for peak freshness.</p>
                    </div>
                </div>
            </div>
            <aside class="hero-card">
                <img src="https://images.unsplash.com/photo-1503481766315-7a586b20f66d?q=80&w=1200&auto=format&fit=crop" alt="Pouring latte art into a cappuccino" style="border-radius:12px; aspect-ratio: 4/3; object-fit: cover;">
                <div class="grid grid-2" style="margin-top:12px">
                    <div class="card">
                        <div class="tag">Best Seller</div>
                        <h3>Ethiopia Yirgacheffe</h3>
                        <p class="muted">Floral, citrus, honey</p>
                        <div style="display:flex;align-items:center;justify-content:space-between;margin-top:10px">
                            <span class="price">$18</span>
                            <span class="stars" aria-label="Rated 4.8 out of 5">★★★★★</span>
                        </div>
                    </div>
                    <div class="card">
                        <div class="tag">New</div>
                        <h3>Colombia Huila</h3>
                        <p class="muted">Red fruit, caramel, cocoa</p>
                        <div style="display:flex;align-items:center;justify-content:space-between;margin-top:10px">
                            <span class="price">$17</span>
                            <span class="stars" aria-label="Rated 4.7 out of 5">★★★★★</span>
                        </div>
                    </div>
                </div>
            </aside>
        </section>

        <!-- FEATURED COFFEES -->
        <section id="menu" class="section" aria-labelledby="featured-heading">
            <div class="container">
                <h2 id="featured-heading">Featured coffees</h2>
                <p class="muted">Freshly roasted, ethically sourced, and profiled for sweetness.</p>
                <div class="grid grid-3" style="margin-top:16px">
                    <!-- Card 1 -->
                    <article class="card">
                        <img src="https://images.unsplash.com/photo-1478161590712-13d0d36984a1?q=80&w=1200&auto=format&fit=crop" alt="Bag of single-origin Ethiopia coffee" style="border-radius:10px;aspect-ratio:4/3;object-fit:cover">
                        <h3>Ethiopia Aricha</h3>
                        <p class="muted">Jasmine, bergamot, peach</p>
                        <div style="display:flex;align-items:center;justify-content:space-between;margin-top:8px">
                            <span class="price">$19</span>
                            <a class="btn" href="#shop">Add to Cart</a>
                        </div>
                    </article>
                    <!-- Card 2 -->
                    <article class="card">
                        <img src="https://images.unsplash.com/photo-1517701604599-3b1b0d514adb?q=80&w=1200&auto=format&fit=crop" alt="Bag of Colombia coffee on a wooden table" style="border-radius:10px;aspect-ratio:4/3;object-fit:cover">
                        <h3>Colombia Tolima</h3>
                        <p class="muted">Chocolate, plum, panela</p>
                        <div style="display:flex;align-items:center;justify-content:space-between;margin-top:8px">
                            <span class="price">$17</span>
                            <a class="btn" href="#shop">Add to Cart</a>
                        </div>
                    </article>
                    <!-- Card 3 -->
                    <article class="card">
                        <img src="https://images.unsplash.com/photo-1501339847302-ac426a4a7cbb?q=80&w=1200&auto=format&fit=crop" alt="Espresso blend bag with beans" style="border-radius:10px;aspect-ratio:4/3;object-fit:cover">
                        <h3>House Espresso Blend</h3>
                        <p class="muted">Nutty, caramel, cocoa</p>
                        <div style="display:flex;align-items:center;justify-content:space-between;margin-top:8px">
                            <span class="price">$16</span>
                            <a class="btn" href="#shop">Add to Cart</a>
                        </div>
                    </article>
                </div>
            </div>
        </section>

        <!-- PROCESS -->
        <section id="process" class="section" aria-labelledby="process-heading" style="background:linear-gradient(180deg,#121111,#0f0e0e)">
            <div class="container">
                <h2 id="process-heading">From farm to cup</h2>
                <p class="muted">We obsess over every step so your cup tastes extraordinary.</p>
                <div class="grid grid-3" style="margin-top:16px">
                    <div class="card">
                        <div class="badge">1</div>
                        <h3>Sourcing</h3>
                        <p class="muted">Direct-trade relationships with smallholder farms for transparency and quality.</p>
                    </div>
                    <div class="card">
                        <div class="badge">2</div>
                        <h3>Roasting</h3>
                        <p class="muted">Profiled in small batches to highlight sweetness and varietal character.</p>
                    </div>
                    <div class="card">
                        <div class="badge">3</div>
                        <h3>Freshness</h3>
                        <p class="muted">Packed with one-way valves and shipped within 24 hours of roasting.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- TESTIMONIALS -->
        <section class="section" aria-labelledby="testimonials-heading">
            <div class="container">
                <h2 id="testimonials-heading">What customers say</h2>
                <div class="grid grid-3" style="margin-top:16px">
                    <figure class="card">
                        <blockquote>These beans completely upgraded my home espresso. Sweet, syrupy shots every time.</blockquote>
                        <figcaption class="muted">— Alex R.</figcaption>
                    </figure>
                    <figure class="card">
                        <blockquote>Fast shipping and the aroma when you open the bag is unreal. New morning ritual unlocked.</blockquote>
                        <figcaption class="muted">— Priya S.</figcaption>
                    </figure>
                    <figure class="card">
                        <blockquote>I love the brew guides. My V60 pours finally taste like the cafe.</blockquote>
                        <figcaption class="muted">— Daniel K.</figcaption>
                    </figure>
                </div>
            </div>
        </section>

        <!-- NEWSLETTER / CTA -->
        <section id="learn" class="section" aria-labelledby="newsletter-heading">
            <div class="container card" style="display:grid;gap:16px;align-items:center;grid-template-columns: 1.2fr .8fr">
                <div>
                    <h2 id="newsletter-heading">Brew better at home</h2>
                    <p class="muted">Get our barista-approved brew guides and 10% off your first order.</p>
                    <form onsubmit="event.preventDefault(); this.reset(); alert('Thanks! Check your inbox for a welcome email.');" class="cta" aria-label="Subscribe for guides and discount">
                        <label class="sr-only" for="email">Email</label>
                        <input id="email" name="email" type="email" required placeholder="you@example.com" style="flex:1;min-width:220px;padding:.9rem 1rem;border-radius:10px;border:1px solid #2b2929;background:#141313;color:var(--text)">
                        <button class="btn btn-primary" type="submit">Subscribe</button>
                    </form>
                </div>
                <img src="https://images.unsplash.com/photo-1459755486867-b55449bb39ff?q=80&w=1200&auto=format&fit=crop" alt="Barista pouring water for pour-over coffee" style="border-radius:12px;aspect-ratio:4/3;object-fit:cover">
            </div>
        </section>
    </main>

    <footer class="foot" id="contact">
        <div class="container" style="display:grid;gap:20px;grid-template-columns: 1.2fr .8fr">
            <div>
                <div class="brand" style="margin-bottom:8px">
                    <span class="brand-logo" aria-hidden="true">☕</span>
                    <span>Brew & Bean</span>
                </div>
                <p class="muted">Small-batch roastery based in your neighborhood. Open daily 7am–6pm.</p>
                <p class="muted">123 Roast St, Aroma City • (555) 123-4567</p>
            </div>
            <div style="justify-self:end;align-self:center">
                <a class="btn" href="#shop">View All Coffees</a>
            </div>
        </div>
        <div class="container" style="margin-top:16px;color:#7e7770">© <span id="y"></span> Brew & Bean. All rights reserved.</div>
    </footer>

    <script>
        document.getElementById('y').textContent = new Date().getFullYear();
    </script>
</body>
</html>