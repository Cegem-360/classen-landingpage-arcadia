<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classen Beltéri Ajtók – Prémium Minőség, Hivatalos Forrásból | Arcadia 98</title>
    <meta name="description" content="Fedezze fel Magyarország egyik legszélesebb Classen beltéri ajtó kínálatát. Hivatalos forgalmazó, gyártói garancia, azonnali raktárkészlet.">
    <meta name="keywords" content="Classen, beltéri ajtó, ajtó, prémium ajtó, CPL ajtó, lakkozott ajtó, tolóajtó, Arcadia 98">
    <meta property="og:title" content="Classen Beltéri Ajtók – Prémium Minőség, Hivatalos Forrásból">
    <meta property="og:description" content="Fedezze fel Magyarország egyik legszélesebb Classen beltéri ajtó kínálatát az Arcadia 98 Kft. garanciájával.">
    <meta property="og:type" content="website">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&family=Playfair+Display:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="icon" href="{{ asset('images/classen-logo.svg') }}" type="image/svg+xml">
    <style>
        /* ============================== */
        /* RESET & BASE                    */
        /* ============================== */
        *,*::before,*::after{box-sizing:border-box;margin:0;padding:0}
        :root{
            --classen-dark:#1a1a1a;
            --classen-charcoal:#2d2d2d;
            --classen-yellow:#ffd100;
            --classen-yellow-hover:#e6bc00;
            --classen-yellow-soft:rgba(255,209,0,.08);
            --classen-gold:#c5a44e;
            --classen-light:#f9f8f5;
            --classen-warm:#f2efe8;
            --classen-text:#1a1a1a;
            --classen-muted:#6b6b6b;
            --classen-border:rgba(0,0,0,.06);
            --classen-green:#5a9e1a;
            --classen-green-dark:#4a8515;
            --font-heading:'Playfair Display',Georgia,serif;
            --font-body:'Inter',system-ui,-apple-system,sans-serif;
            --section-padding:120px 0;
            --container:1280px;
            --radius:12px;
            --radius-sm:8px;
            --radius-lg:20px;
            --shadow-sm:0 1px 3px rgba(0,0,0,.04),0 1px 2px rgba(0,0,0,.06);
            --shadow-md:0 4px 16px rgba(0,0,0,.06),0 2px 4px rgba(0,0,0,.04);
            --shadow-lg:0 12px 40px rgba(0,0,0,.08),0 4px 12px rgba(0,0,0,.04);
            --shadow-xl:0 24px 64px rgba(0,0,0,.12);
            --transition:all .35s cubic-bezier(.4,0,.2,1);
        }
        html{scroll-behavior:smooth;font-size:16px;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}
        body{font-family:var(--font-body);color:var(--classen-text);background:#fff;line-height:1.65;overflow-x:hidden}
        img{max-width:100%;height:auto;display:block}
        a{text-decoration:none;color:inherit;transition:var(--transition)}
        ul{list-style:none}

        /* ============================== */
        /* UTILITY                         */
        /* ============================== */
        .container{max-width:var(--container);margin:0 auto;padding:0 32px}
        .section-label{
            font-family:var(--font-body);
            font-size:.7rem;
            font-weight:700;
            letter-spacing:3.5px;
            text-transform:uppercase;
            color:var(--classen-yellow);
            margin-bottom:16px;
            display:inline-flex;
            align-items:center;
            gap:10px;
        }
        .section-label::before{
            content:'';
            width:32px;
            height:2px;
            background:var(--classen-yellow);
            display:inline-block;
        }
        .section-title{
            font-family:var(--font-heading);
            font-size:clamp(2rem,4vw,3.2rem);
            font-weight:600;
            line-height:1.15;
            margin-bottom:20px;
            letter-spacing:-.01em;
        }
        .section-subtitle{
            font-size:1.05rem;
            color:var(--classen-muted);
            max-width:620px;
            line-height:1.75;
        }
        .btn{
            display:inline-flex;
            align-items:center;
            gap:10px;
            padding:15px 34px;
            border-radius:6px;
            font-family:var(--font-body);
            font-weight:600;
            font-size:.9rem;
            letter-spacing:.3px;
            transition:var(--transition);
            cursor:pointer;
            border:none;
            position:relative;
            overflow:hidden;
        }
        .btn-yellow{background:var(--classen-yellow);color:var(--classen-dark)}
        .btn-yellow:hover{background:var(--classen-yellow-hover);transform:translateY(-2px);box-shadow:0 12px 32px rgba(255,209,0,.35)}
        .btn-dark{background:var(--classen-dark);color:#fff}
        .btn-dark:hover{background:#333;transform:translateY(-2px);box-shadow:0 12px 32px rgba(0,0,0,.25)}
        .btn-outline{background:transparent;color:#fff;border:1.5px solid rgba(255,255,255,.3)}
        .btn-outline:hover{border-color:#fff;background:rgba(255,255,255,.08)}
        .btn-green{background:var(--classen-green);color:#fff}
        .btn-green:hover{background:var(--classen-green-dark);transform:translateY(-2px)}
        .btn-lg{padding:18px 44px;font-size:1rem}
        .btn svg{width:18px;height:18px;transition:transform .3s}
        .btn:hover svg{transform:translateX(3px)}

        /* ============================== */
        /* HEADER                          */
        /* ============================== */
        .site-header{
            position:fixed;top:0;left:0;right:0;z-index:1000;
            background:rgba(26,26,26,.92);
            backdrop-filter:blur(20px);
            -webkit-backdrop-filter:blur(20px);
            border-bottom:1px solid rgba(255,255,255,.06);
            transition:var(--transition);
        }
        .site-header.scrolled{background:rgba(26,26,26,.97);box-shadow:0 4px 30px rgba(0,0,0,.3)}
        .header-inner{display:flex;align-items:center;justify-content:space-between;height:76px}
        .logo-area{display:flex;align-items:center;gap:16px}
        .logo-area img{height:34px;filter:brightness(0) invert(1)}
        .logo-badge{
            font-size:.6rem;font-weight:700;letter-spacing:1.5px;text-transform:uppercase;
            color:var(--classen-yellow);border:1px solid rgba(255,209,0,.4);
            padding:4px 10px;border-radius:3px;white-space:nowrap;
        }
        .main-nav{display:flex;align-items:center;gap:36px}
        .main-nav a{
            color:rgba(255,255,255,.7);font-size:.85rem;font-weight:500;
            transition:var(--transition);position:relative;
        }
        .main-nav a::after{
            content:'';position:absolute;bottom:-4px;left:0;width:0;height:1.5px;
            background:var(--classen-yellow);transition:width .3s;
        }
        .main-nav a:hover{color:#fff}
        .main-nav a:hover::after{width:100%}
        .header-cta .btn{font-size:.8rem;padding:10px 22px}
        .mobile-toggle{display:none;background:none;border:none;cursor:pointer;padding:8px}
        .mobile-toggle span{display:block;width:22px;height:1.5px;background:#fff;margin:5px 0;transition:var(--transition)}

        /* Mobile Nav */
        .main-nav.open{
            display:flex;flex-direction:column;position:fixed;top:76px;left:0;right:0;
            background:rgba(26,26,26,.98);backdrop-filter:blur(20px);
            padding:32px;gap:24px;border-bottom:1px solid rgba(255,255,255,.06);
        }

        /* ============================== */
        /* HERO                            */
        /* ============================== */
        .hero{position:relative;min-height:100vh;display:flex;align-items:center;background:var(--classen-dark);overflow:hidden}
        .hero-bg{position:absolute;inset:0}
        .hero-bg img{width:100%;height:100%;object-fit:cover;opacity:.3;filter:saturate(.8)}
        .hero-overlay{
            position:absolute;inset:0;
            background:linear-gradient(135deg,rgba(26,26,26,.95) 0%,rgba(26,26,26,.7) 40%,rgba(26,26,26,.4) 100%);
        }
        .hero-content{position:relative;z-index:2;padding-top:76px}
        .hero-grid{display:grid;grid-template-columns:1.1fr .9fr;gap:80px;align-items:center;min-height:calc(100vh - 76px)}
        .hero-text{padding:60px 0}
        .hero-text .section-label{color:var(--classen-yellow);font-size:.75rem;margin-bottom:24px}
        .hero-text .section-label::before{background:var(--classen-yellow)}
        .hero-text h1{
            font-family:var(--font-heading);
            font-size:clamp(2.8rem,5vw,4rem);
            color:#fff;font-weight:600;line-height:1.08;
            margin-bottom:28px;letter-spacing:-.02em;
        }
        .hero-text h1 span{color:var(--classen-yellow);display:inline}
        .hero-text p{font-size:1.1rem;color:rgba(255,255,255,.65);line-height:1.8;margin-bottom:40px;max-width:520px}
        .hero-badges{display:flex;gap:16px;margin-bottom:44px;flex-wrap:wrap}
        .hero-badge{
            display:flex;align-items:center;gap:12px;
            padding:12px 20px;
            background:rgba(255,255,255,.06);
            border:1px solid rgba(255,255,255,.08);
            border-radius:var(--radius-sm);
            backdrop-filter:blur(8px);
        }
        .hero-badge-icon{
            width:38px;height:38px;
            background:var(--classen-yellow);border-radius:50%;
            display:flex;align-items:center;justify-content:center;
            font-size:1rem;color:var(--classen-dark);
        }
        .hero-badge-text{font-size:.8rem;color:rgba(255,255,255,.9);font-weight:500}
        .hero-buttons{display:flex;gap:16px;flex-wrap:wrap}
        .hero-image{position:relative;display:flex;justify-content:center;align-items:center}
        .hero-image img{
            max-height:72vh;border-radius:var(--radius-lg);
            box-shadow:0 48px 96px rgba(0,0,0,.5);
        }
        .hero-image-badge{
            position:absolute;bottom:40px;left:-20px;
            background:#fff;padding:20px 28px;border-radius:var(--radius);
            box-shadow:var(--shadow-xl);
            display:flex;align-items:center;gap:14px;
        }
        .hero-image-badge-icon{
            width:44px;height:44px;background:var(--classen-yellow);
            border-radius:10px;display:flex;align-items:center;
            justify-content:center;font-size:1.2rem;
        }
        .hero-image-badge-text .number{font-family:var(--font-heading);font-size:1.6rem;font-weight:700;line-height:1}
        .hero-image-badge-text .label{font-size:.75rem;color:var(--classen-muted)}

        /* ============================== */
        /* YELLOW BAR                      */
        /* ============================== */
        .yellow-bar{background:var(--classen-yellow);padding:16px 0}
        .yellow-bar-inner{display:flex;justify-content:center;align-items:center;gap:48px;flex-wrap:wrap}
        .yellow-bar-item{display:flex;align-items:center;gap:10px;font-size:.85rem;font-weight:600;color:var(--classen-dark)}
        .yellow-bar-item svg{width:20px;height:20px;flex-shrink:0}

        /* ============================== */
        /* TRUST / PARTNER                 */
        /* ============================== */
        .trust{padding:var(--section-padding);background:#fff}
        .trust-grid{display:grid;grid-template-columns:1fr 1fr;gap:100px;align-items:center}
        .trust-visual{position:relative}
        .trust-visual img{border-radius:var(--radius-lg);box-shadow:var(--shadow-lg);aspect-ratio:4/3;object-fit:cover;width:100%}
        .trust-card{
            position:absolute;bottom:-30px;right:-20px;
            background:#fff;padding:28px 34px;border-radius:var(--radius);
            box-shadow:var(--shadow-xl);border-left:4px solid var(--classen-yellow);
        }
        .trust-card-number{font-family:var(--font-heading);font-size:2.8rem;font-weight:700;color:var(--classen-dark);line-height:1}
        .trust-card-text{font-size:.82rem;color:var(--classen-muted);margin-top:6px}
        .trust-features{display:flex;flex-direction:column;gap:32px;margin-top:40px}
        .trust-feature{display:flex;gap:18px}
        .trust-feature-icon{
            width:52px;height:52px;background:var(--classen-light);
            border-radius:var(--radius);display:flex;align-items:center;
            justify-content:center;flex-shrink:0;
        }
        .trust-feature-icon svg{width:24px;height:24px;color:var(--classen-dark)}
        .trust-feature h4{font-size:1rem;font-weight:600;margin-bottom:6px}
        .trust-feature p{font-size:.88rem;color:var(--classen-muted);line-height:1.65}
        .trust-notice{
            margin-top:40px;padding:18px 24px;
            background:var(--classen-yellow-soft);
            border-left:3px solid var(--classen-yellow);
            border-radius:0 var(--radius-sm) var(--radius-sm) 0;
            font-size:.88rem;color:var(--classen-dark);line-height:1.6;
        }

        /* ============================== */
        /* NEW COLLECTIONS                 */
        /* ============================== */
        .collections{padding:var(--section-padding);background:var(--classen-light)}
        .collections-header{text-align:center;margin-bottom:64px}
        .collections-header .section-label::before{display:none}
        .collections-header .section-subtitle{margin:0 auto}
        .collections-grid{display:grid;grid-template-columns:repeat(4,1fr);gap:28px}
        .collection-card{
            position:relative;border-radius:var(--radius-lg);overflow:hidden;
            background:#fff;box-shadow:var(--shadow-sm);
            transition:var(--transition);display:block;
        }
        .collection-card:hover{transform:translateY(-10px);box-shadow:var(--shadow-xl)}
        .collection-card-img{position:relative;height:340px;overflow:hidden}
        .collection-card-img img{width:100%;height:100%;object-fit:cover;transition:transform .7s cubic-bezier(.4,0,.2,1)}
        .collection-card:hover .collection-card-img img{transform:scale(1.08)}
        .collection-card-badge{
            position:absolute;top:16px;left:16px;
            background:var(--classen-yellow);color:var(--classen-dark);
            font-size:.65rem;font-weight:700;letter-spacing:1.2px;text-transform:uppercase;
            padding:6px 14px;border-radius:4px;
        }
        .collection-card-body{padding:24px 28px}
        .collection-card-body h3{font-family:var(--font-heading);font-size:1.3rem;font-weight:600;margin-bottom:6px}
        .collection-card-body p{font-size:.82rem;color:var(--classen-muted)}
        .collection-card-link{
            display:inline-flex;align-items:center;gap:8px;margin-top:14px;
            font-size:.82rem;font-weight:600;color:var(--classen-dark);transition:var(--transition);
        }
        .collection-card-link svg{width:16px;height:16px;transition:transform .3s}
        .collection-card:hover .collection-card-link{color:var(--classen-green)}
        .collection-card:hover .collection-card-link svg{transform:translateX(4px)}

        /* ============================== */
        /* PRODUCT OVERVIEW                */
        /* ============================== */
        .products{padding:var(--section-padding);background:#fff}
        .products-split{display:grid;grid-template-columns:1fr 1fr;gap:32px;margin-bottom:72px}
        .product-block{
            padding:52px;border-radius:var(--radius-lg);
            position:relative;overflow:hidden;
        }
        .product-block.stock{background:linear-gradient(135deg,#1a3a08 0%,#2d5a15 100%);color:#fff}
        .product-block.all{background:linear-gradient(135deg,#1a1a1a 0%,#2d2d2d 100%);color:#fff}
        .product-block::after{
            content:'';position:absolute;top:-60%;right:-30%;
            width:300px;height:300px;background:rgba(255,255,255,.03);
            border-radius:50%;filter:blur(60px);
        }
        .product-block-label{
            font-size:.68rem;font-weight:700;letter-spacing:2.5px;
            text-transform:uppercase;color:var(--classen-yellow);margin-bottom:18px;
        }
        .product-block h3{font-family:var(--font-heading);font-size:1.9rem;font-weight:600;margin-bottom:16px}
        .product-block p{font-size:.95rem;opacity:.75;line-height:1.75;margin-bottom:32px}
        .product-types{display:grid;grid-template-columns:repeat(4,1fr);gap:24px}
        .product-type{
            text-align:center;padding:0;background:#fff;
            border-radius:var(--radius-lg);overflow:hidden;
            box-shadow:var(--shadow-sm);transition:var(--transition);
        }
        .product-type:hover{transform:translateY(-6px);box-shadow:var(--shadow-lg)}
        .product-type-img{width:100%;height:200px;overflow:hidden}
        .product-type-img img{width:100%;height:100%;object-fit:cover;transition:transform .6s}
        .product-type:hover .product-type-img img{transform:scale(1.06)}
        .product-type-content{padding:20px}
        .product-type h4{font-size:.95rem;font-weight:600;margin-bottom:4px}
        .product-type p{font-size:.8rem;color:var(--classen-muted)}

        /* ============================== */
        /* COLOR SECTION                   */
        /* ============================== */
        .colors{padding:var(--section-padding);background:var(--classen-light)}
        .colors-header{text-align:center;margin-bottom:64px}
        .colors-header .section-label::before{display:none}
        .colors-header .section-subtitle{margin:0 auto}
        .color-groups{display:flex;flex-direction:column;gap:52px}
        .color-group h3{
            font-size:.9rem;font-weight:700;letter-spacing:2px;
            text-transform:uppercase;margin-bottom:24px;padding-bottom:12px;
            border-bottom:2px solid var(--classen-yellow);display:inline-block;
        }
        .color-swatches{display:flex;flex-wrap:wrap;gap:18px}
        .color-swatch{width:110px;text-align:center}
        .color-swatch-box{
            width:110px;height:72px;border-radius:var(--radius-sm);margin-bottom:10px;
            position:relative;box-shadow:var(--shadow-sm);overflow:hidden;
            transition:var(--transition);cursor:default;
        }
        .color-swatch-box:hover{transform:scale(1.08);box-shadow:var(--shadow-md)}
        .color-swatch-box.new::after{
            content:'ÚJ';position:absolute;top:5px;right:5px;
            background:var(--classen-yellow);color:var(--classen-dark);
            font-size:.5rem;font-weight:800;padding:2px 7px;border-radius:3px;letter-spacing:.5px;
        }
        .color-swatch-box.stock::after{
            content:'RAKTÁR';position:absolute;top:5px;right:5px;
            background:var(--classen-green);color:#fff;
            font-size:.5rem;font-weight:800;padding:2px 7px;border-radius:3px;letter-spacing:.5px;
        }
        .color-swatch-name{font-size:.7rem;font-weight:500;color:var(--classen-muted);line-height:1.35}

        /* ============================== */
        /* CTA SECTION                     */
        /* ============================== */
        .cta-section{
            padding:120px 0;background:var(--classen-dark);
            position:relative;overflow:hidden;
        }
        .cta-section::before{
            content:'';position:absolute;top:-40%;right:-15%;
            width:700px;height:700px;background:var(--classen-yellow);
            opacity:.04;border-radius:50%;filter:blur(120px);
        }
        .cta-section::after{
            content:'';position:absolute;bottom:-30%;left:-10%;
            width:500px;height:500px;background:var(--classen-yellow);
            opacity:.03;border-radius:50%;filter:blur(100px);
        }
        .cta-inner{text-align:center;position:relative;z-index:2}
        .cta-inner .section-label::before{display:none}
        .cta-inner .section-title{color:#fff}
        .cta-description{color:rgba(255,255,255,.55);max-width:580px;margin:0 auto;font-size:1.05rem;line-height:1.75}
        .cta-features{display:grid;grid-template-columns:repeat(4,1fr);gap:20px;margin:52px 0 40px}
        .cta-feature{
            padding:28px 24px;
            background:rgba(255,255,255,.04);
            border:1px solid rgba(255,255,255,.06);
            border-radius:var(--radius);text-align:left;
            transition:var(--transition);
        }
        .cta-feature:hover{background:rgba(255,255,255,.07);border-color:rgba(255,209,0,.2);transform:translateY(-4px)}
        .cta-feature-icon{font-size:1.4rem;margin-bottom:14px;display:block}
        .cta-feature h4{color:#fff;font-weight:600;font-size:.92rem;margin-bottom:8px}
        .cta-feature p{color:rgba(255,255,255,.5);font-size:.82rem;line-height:1.6}
        .cta-buttons{display:flex;gap:16px;justify-content:center}
        .cta-subtext{color:rgba(255,255,255,.4);font-size:.82rem;margin-top:16px}

        /* ============================== */
        /* WHY CLASSEN                     */
        /* ============================== */
        .why{padding:var(--section-padding);background:#fff}
        .why-header{text-align:center;margin-bottom:64px}
        .why-header .section-label::before{display:none}
        .why-header .section-subtitle{margin:0 auto}
        .why-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:40px}
        .why-card{
            text-align:center;padding:48px 36px;
            border-radius:var(--radius-lg);
            background:var(--classen-light);
            transition:var(--transition);
        }
        .why-card:hover{box-shadow:var(--shadow-lg);transform:translateY(-6px)}
        .why-card-icon{
            width:76px;height:76px;margin:0 auto 28px;
            background:#fff;border-radius:var(--radius-lg);
            display:flex;align-items:center;justify-content:center;
            box-shadow:var(--shadow-sm);
        }
        .why-card-icon svg{width:32px;height:32px;color:var(--classen-dark)}
        .why-card h3{font-family:var(--font-heading);font-size:1.35rem;font-weight:600;margin-bottom:14px}
        .why-card p{font-size:.9rem;color:var(--classen-muted);line-height:1.75}

        /* ============================== */
        /* GALLERY                         */
        /* ============================== */
        .gallery{padding:var(--section-padding);background:var(--classen-light)}
        .gallery-header{text-align:center;margin-bottom:56px}
        .gallery-header .section-label::before{display:none}
        .gallery-grid{display:grid;grid-template-columns:repeat(4,1fr);gap:20px}
        .gallery-item{
            position:relative;border-radius:var(--radius-lg);
            overflow:hidden;height:360px;cursor:pointer;
        }
        .gallery-item img{width:100%;height:100%;object-fit:cover;transition:transform .7s cubic-bezier(.4,0,.2,1)}
        .gallery-item:hover img{transform:scale(1.1)}
        .gallery-item-overlay{
            position:absolute;inset:0;
            background:linear-gradient(to top,rgba(0,0,0,.75) 0%,transparent 50%);
            opacity:0;transition:opacity .4s;
            display:flex;align-items:flex-end;padding:28px;
        }
        .gallery-item:hover .gallery-item-overlay{opacity:1}
        .gallery-item-text h4{color:#fff;font-size:1.05rem;font-weight:600}
        .gallery-item-text p{color:rgba(255,255,255,.65);font-size:.8rem;margin-top:4px}
        .gallery-note{text-align:center;margin-top:28px;font-size:.85rem;color:var(--classen-muted);font-style:italic}

        /* ============================== */
        /* B2B                             */
        /* ============================== */
        .b2b{
            padding:var(--section-padding);
            background:linear-gradient(135deg,var(--classen-dark) 0%,#111 100%);
            position:relative;overflow:hidden;
        }
        .b2b::after{
            content:'';position:absolute;bottom:-120px;left:-120px;
            width:500px;height:500px;background:var(--classen-yellow);
            opacity:.03;border-radius:50%;filter:blur(100px);
        }
        .b2b-grid{display:grid;grid-template-columns:1fr 1fr;gap:80px;align-items:center;position:relative;z-index:2}
        .b2b-text .section-label{color:var(--classen-yellow)}
        .b2b-text .section-title{color:#fff}
        .b2b-text>p{color:rgba(255,255,255,.6);font-size:1.05rem;line-height:1.75;margin-bottom:40px}
        .b2b-features{display:grid;grid-template-columns:1fr 1fr;gap:20px}
        .b2b-feature{
            padding:24px;background:rgba(255,255,255,.04);
            border:1px solid rgba(255,255,255,.06);
            border-radius:var(--radius);transition:var(--transition);
        }
        .b2b-feature:hover{background:rgba(255,255,255,.07);border-color:rgba(255,209,0,.15)}
        .b2b-feature-icon{margin-bottom:12px}
        .b2b-feature-icon svg{width:24px;height:24px;color:var(--classen-yellow)}
        .b2b-feature h4{color:#fff;font-size:.9rem;font-weight:600;margin-bottom:6px}
        .b2b-feature p{color:rgba(255,255,255,.45);font-size:.8rem;line-height:1.6}
        .b2b-cta{text-align:center;margin-top:56px;position:relative;z-index:2}

        /* ============================== */
        /* CONTACT                         */
        /* ============================== */
        .contact{padding:var(--section-padding);background:#fff}
        .contact-header{text-align:center;margin-bottom:64px}
        .contact-header .section-label::before{display:none}
        .contact-header .section-subtitle{margin:0 auto}
        .contact-grid{display:grid;grid-template-columns:repeat(4,1fr);gap:24px}
        .contact-card{
            text-align:center;padding:40px 28px;
            background:var(--classen-light);border-radius:var(--radius-lg);
            transition:var(--transition);
        }
        .contact-card:hover{transform:translateY(-6px);box-shadow:var(--shadow-lg)}
        .contact-card-icon{
            width:60px;height:60px;margin:0 auto 20px;
            background:var(--classen-yellow);border-radius:var(--radius-lg);
            display:flex;align-items:center;justify-content:center;
        }
        .contact-card-icon svg{width:24px;height:24px;color:var(--classen-dark)}
        .contact-card h4{font-size:1rem;font-weight:600;margin-bottom:10px}
        .contact-card p{font-size:.88rem;color:var(--classen-muted);line-height:1.65}
        .contact-card a{color:var(--classen-dark);font-weight:600;transition:var(--transition)}
        .contact-card a:hover{color:var(--classen-green)}
        .contact-card small{display:block;margin-top:4px;font-size:.78rem;color:var(--classen-muted)}

        /* ============================== */
        /* FOOTER CTA                      */
        /* ============================== */
        .footer-cta{padding:72px 0;background:var(--classen-yellow)}
        .footer-cta-inner{text-align:center}
        .footer-cta-inner h2{
            font-family:var(--font-heading);
            font-size:clamp(1.5rem,3vw,2.4rem);
            font-weight:600;color:var(--classen-dark);margin-bottom:14px;
        }
        .footer-cta-inner p{color:var(--classen-dark);opacity:.65;margin-bottom:32px;font-size:1rem}
        .footer-cta-buttons{display:flex;gap:16px;justify-content:center;flex-wrap:wrap}

        /* ============================== */
        /* FOOTER                          */
        /* ============================== */
        .site-footer{background:var(--classen-dark);padding:44px 0 28px;color:rgba(255,255,255,.5)}
        .footer-inner{display:flex;align-items:center;justify-content:space-between}
        .footer-inner p{font-size:.8rem}
        .footer-logo img{height:28px;opacity:.5;filter:brightness(0) invert(1)}

        /* Official Distributor Badges */
        .official-badge{
            display:inline-flex;align-items:center;gap:16px;
            padding:16px 28px;background:#fff;border-radius:var(--radius);
            box-shadow:var(--shadow-md);border:1px solid var(--classen-border);
        }
        .official-badge img{height:32px}
        .official-badge-divider{width:1px;height:32px;background:var(--classen-border)}
        .official-badge-text{font-size:.72rem;font-weight:600;letter-spacing:1px;text-transform:uppercase;color:var(--classen-muted);line-height:1.4}
        .official-badge-text strong{display:block;color:var(--classen-dark);font-size:.82rem;letter-spacing:0;text-transform:none}

        .official-badge-dark{
            display:inline-flex;align-items:center;gap:16px;
            padding:16px 28px;background:rgba(255,255,255,.06);
            border:1px solid rgba(255,255,255,.1);
            border-radius:var(--radius);
        }
        .official-badge-dark img{height:32px;filter:brightness(0) invert(1)}
        .official-badge-dark .official-badge-divider{background:rgba(255,255,255,.15)}
        .official-badge-dark .official-badge-text{color:rgba(255,255,255,.5)}
        .official-badge-dark .official-badge-text strong{color:#fff}

        .classen-partner-strip{
            display:flex;align-items:center;justify-content:center;gap:20px;
            padding:20px 0;background:var(--classen-warm);border-top:1px solid var(--classen-border);
            border-bottom:1px solid var(--classen-border);
        }
        .classen-partner-strip img{height:28px;opacity:.7}
        .classen-partner-strip span{font-size:.78rem;font-weight:600;color:var(--classen-muted);letter-spacing:.5px}

        /* ============================== */
        /* ANIMATIONS                      */
        /* ============================== */
        @keyframes fadeUp{from{opacity:0;transform:translateY(40px)}to{opacity:1;transform:translateY(0)}}
        .animate{opacity:0;transform:translateY(40px);transition:all .9s cubic-bezier(.22,1,.36,1)}
        .animate.visible{opacity:1;transform:translateY(0)}
        .animate-delay-1{transition-delay:.1s}
        .animate-delay-2{transition-delay:.2s}
        .animate-delay-3{transition-delay:.3s}

        /* ============================== */
        /* RESPONSIVE                      */
        /* ============================== */
        @media(max-width:1024px){
            :root{--section-padding:80px 0}
            .container{padding:0 24px}
            .hero-grid{grid-template-columns:1fr;text-align:center}
            .hero-text p{margin:0 auto 40px}
            .hero-badges{justify-content:center}
            .hero-buttons{justify-content:center}
            .hero-image{display:none}
            .trust-grid{grid-template-columns:1fr;gap:60px}
            .trust-visual{order:2}
            .collections-grid{grid-template-columns:repeat(2,1fr)}
            .products-split{grid-template-columns:1fr}
            .product-types{grid-template-columns:repeat(2,1fr)}
            .cta-features{grid-template-columns:repeat(2,1fr)}
            .why-grid{grid-template-columns:1fr}
            .gallery-grid{grid-template-columns:repeat(2,1fr)}
            .b2b-grid{grid-template-columns:1fr}
            .contact-grid{grid-template-columns:repeat(2,1fr)}
        }
        @media(max-width:768px){
            :root{--section-padding:64px 0}
            .main-nav{display:none}
            .header-cta{display:none}
            .mobile-toggle{display:block}
            .hero-badges{flex-direction:column;align-items:center}
            .hero-buttons{flex-direction:column;align-items:center}
            .hero-text h1{font-size:2.2rem}
            .collections-grid{grid-template-columns:1fr}
            .product-types{grid-template-columns:1fr 1fr}
            .cta-features{grid-template-columns:1fr}
            .gallery-grid{grid-template-columns:1fr 1fr}
            .gallery-item{height:260px}
            .contact-grid{grid-template-columns:1fr}
            .yellow-bar-inner{flex-direction:column;gap:14px}
            .footer-cta-buttons{flex-direction:column;align-items:center}
            .b2b-features{grid-template-columns:1fr}
            .footer-inner{flex-direction:column;gap:16px;text-align:center}
            .color-swatch{width:88px}
            .color-swatch-box{width:88px;height:58px}
            .product-block{padding:36px}
        }
        @media(max-width:480px){
            .product-types{grid-template-columns:1fr}
            .gallery-grid{grid-template-columns:1fr}
            .gallery-item{height:300px}
        }
    </style>
</head>
<body>

<!-- ===== HEADER ===== -->
<header class="site-header" id="header">
    <div class="container header-inner">
        <div class="logo-area">
            <img src="{{ asset('images/classen-logo.svg') }}" alt="Classen">
            <span class="logo-badge">Hivatalos Forgalmazó</span>
        </div>
        <nav class="main-nav" id="mainNav">
            <a href="#kollekcio">Kollekciók</a>
            <a href="#kinalat">Kínálat</a>
            <a href="#miert">Miért a Classen?</a>
            <a href="#galeria">Inspiráció</a>
            <a href="#kapcsolat">Kapcsolat</a>
        </nav>
        <div class="header-cta">
            <a href="https://arcadia98.hu" target="_blank" class="btn btn-yellow">
                Árak és Vásárlás
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/><path d="M12 5l7 7-7 7"/></svg>
            </a>
        </div>
        <button class="mobile-toggle" id="mobileToggle" aria-label="Menü megnyitása">
            <span></span><span></span><span></span>
        </button>
    </div>
</header>

<!-- ===== HERO ===== -->
<section class="hero">
    <div class="hero-bg">
        <img src="https://admin.classen.cegem360.hu/wp-content/uploads/2024/01/Linea-Premium-aranzacja.jpg" alt="Classen beltéri ajtó elegáns enteriőr" loading="eager">
    </div>
    <div class="hero-overlay"></div>
    <div class="container hero-content">
        <div class="hero-grid">
            <div class="hero-text">
                <div class="section-label">Arcadia 98 — Hivatalos Partner</div>
                <h1>Classen Beltéri Ajtók<br><span>Prémium Minőség,</span><br>Hivatalos Forrásból.</h1>
                <p>Fedezze fel Magyarország egyik legszélesebb Classen kínálatát. Az összes kollekció, raktárkészlet és egyedi modellek egy helyen, az Arcadia 98 Kft. garanciájával.</p>
                <div class="hero-badges">
                    <div class="hero-badge">
                        <div class="hero-badge-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" width="18" height="18"><path d="M20 6L9 17l-5-5"/></svg>
                        </div>
                        <span class="hero-badge-text">Hivatalos partner</span>
                    </div>
                    <div class="hero-badge">
                        <div class="hero-badge-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" width="18" height="18"><path d="M21 16V8a2 2 0 00-1-1.73l-7-4a2 2 0 00-2 0l-7 4A2 2 0 003 8v8a2 2 0 001 1.73l7 4a2 2 0 002 0l7-4A2 2 0 0021 16z"/><polyline points="3.27 6.96 12 12.01 20.73 6.96"/><line x1="12" y1="22.08" x2="12" y2="12"/></svg>
                        </div>
                        <span class="hero-badge-text">Raktárról elérhető</span>
                    </div>
                    <div class="hero-badge">
                        <div class="hero-badge-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" width="18" height="18"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
                        </div>
                        <span class="hero-badge-text">Gyártói garancia</span>
                    </div>
                </div>
                <div class="hero-buttons">
                    <a href="https://arcadia98.hu" target="_blank" class="btn btn-yellow btn-lg">
                        Teljes kínálat és árak
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/><path d="M12 5l7 7-7 7"/></svg>
                    </a>
                    <a href="#kapcsolat" class="btn btn-outline btn-lg">Kapcsolatfelvétel</a>
                </div>
                <div class="official-badge-dark" style="margin-top:36px">
                    <img src="{{ asset('images/CLASSEN-Group.png') }}" alt="Classen">
                    <div class="official-badge-divider"></div>
                    <div class="official-badge-text">Hivatalos magyarországi forgalmazó<br><strong>Arcadia 98 Kft.</strong></div>
                </div>
            </div>
            <div class="hero-image">
                <img src="https://admin.classen.cegem360.hu/wp-content/uploads/2024/01/Linea-Premium.jpg" alt="Classen Linea Premium ajtó">
                <div class="hero-image-badge">
                    <div class="hero-image-badge-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" width="22" height="22"><path d="M12 2L2 7l10 5 10-5-10-5z"/><path d="M2 17l10 5 10-5"/><path d="M2 12l10 5 10-5"/></svg>
                    </div>
                    <div class="hero-image-badge-text">
                        <div class="number">30+</div>
                        <div class="label">kollekció elérhető</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ===== YELLOW BAR ===== -->
<div class="yellow-bar">
    <div class="container yellow-bar-inner">
        <div class="yellow-bar-item">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M9 12l2 2 4-4"/><circle cx="12" cy="12" r="10"/></svg>
            Garantált eredetiség
        </div>
        <div class="yellow-bar-item">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="3" width="20" height="14" rx="2"/><path d="M8 21h8M12 17v4"/></svg>
            Teljes portfólió elérhető
        </div>
        <div class="yellow-bar-item">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2L2 7l10 5 10-5-10-5z"/><path d="M2 17l10 5 10-5"/><path d="M2 12l10 5 10-5"/></svg>
            20+ év tapasztalat
        </div>
        <div class="yellow-bar-item">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
            Gyors szállítás
        </div>
    </div>
</div>

<!-- ===== TRUST SECTION ===== -->
<section class="trust" id="rolunk">
    <div class="container">
        <div class="trust-grid">
            <div class="trust-visual animate">
                <img src="https://admin.classen.cegem360.hu/wp-content/uploads/2024/01/Classen_drzwi_Clif.jpg" alt="Classen bemutatóterem" loading="lazy">
                <div class="trust-card">
                    <div class="trust-card-number">20+</div>
                    <div class="trust-card-text">év szakmai tapasztalat<br>nyílászárók terén</div>
                </div>
            </div>
            <div class="animate">
                <div class="official-badge" style="margin-bottom:28px">
                    <img src="{{ asset('images/CLASSEN-Group.png') }}" alt="Classen">
                    <div class="official-badge-divider"></div>
                    <div class="official-badge-text">Hivatalos forgalmazó<br><strong>Arcadia 98 Kft.</strong></div>
                </div>
                <div class="section-label">Bizalom & Minőség</div>
                <h2 class="section-title">Hivatalos Classen Partner Magyarországon</h2>
                <p class="section-subtitle">Az Arcadia 98 Kft. a Classen beltéri ajtók kiemelt, hivatalos magyarországi forgalmazója. Nálunk nemcsak egy ajtót vesz, hanem teljes körű szolgáltatást és gyártói garanciát kap.</p>
                <div class="trust-features">
                    <div class="trust-feature">
                        <div class="trust-feature-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 15l-2 5L9 9l11 4-5 2zm0 0l5 5"/></svg>
                        </div>
                        <div>
                            <h4>Garantált eredetiség</h4>
                            <p>Közvetlen gyártói kapcsolat és hivatalos disztribúciós megállapodás. Minden termék eredeti Classen minőség.</p>
                        </div>
                    </div>
                    <div class="trust-feature">
                        <div class="trust-feature-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2"/><rect x="9" y="3" width="6" height="4" rx="1"/><path d="M9 14l2 2 4-4"/></svg>
                        </div>
                        <div>
                            <h4>Teljes portfólió</h4>
                            <p>Hozzáférünk a Classen teljes, aktuális katalógusához – lakkozott, CPL, keretes és tolóajtók egyaránt.</p>
                        </div>
                    </div>
                    <div class="trust-feature">
                        <div class="trust-feature-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87"/><path d="M16 3.13a4 4 0 010 7.75"/></svg>
                        </div>
                        <div>
                            <h4>Szakmai háttér</h4>
                            <p>Több mint 20 év tapasztalat nyílászárók terén. Szakértő tanácsadás az ajtóválasztástól a beépítésig.</p>
                        </div>
                    </div>
                </div>
                <div class="trust-notice">
                    <strong>Fontos:</strong> A Classen márka népszerűségének növekedésével egyre több forrásból érhetők el a termékek. Válassza a biztonságot és a szakértelmet!
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ===== NEW COLLECTIONS ===== -->
<section class="collections" id="kollekcio">
    <div class="container">
        <div class="collections-header animate">
            <div class="section-label">2026/2027 Újdonságok</div>
            <h2 class="section-title">Az idei év legújabb kollekciói</h2>
            <p class="section-subtitle">A Classen folyamatosan bővíti kínálatát a legújabb trendeknek megfelelően. Fedezze fel az új kollekciókat!</p>
        </div>
        <div class="collections-grid">
            <a href="https://arcadia98.hu/kollekciok/Evelin" target="_blank" class="collection-card animate">
                <div class="collection-card-img">
                    <img src="https://admin.classen.cegem360.hu/wp-content/uploads/2025/10/classen-evelin.jpg" alt="Evelin kollekció" loading="lazy">
                    <span class="collection-card-badge">Új 2026</span>
                </div>
                <div class="collection-card-body">
                    <h3>Evelin</h3>
                    <p>Lakkozott · Modern minimalista design</p>
                    <span class="collection-card-link">Felfedezés <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg></span>
                </div>
            </a>
            <a href="https://arcadia98.hu/kollekciok/Mamba" target="_blank" class="collection-card animate animate-delay-1">
                <div class="collection-card-img">
                    <img src="https://admin.classen.cegem360.hu/wp-content/uploads/2025/10/classen-mamba.jpg" alt="Mamba kollekció" loading="lazy">
                    <span class="collection-card-badge">Új 2026</span>
                </div>
                <div class="collection-card-body">
                    <h3>Mamba</h3>
                    <p>Keretes · Loft stílus</p>
                    <span class="collection-card-link">Felfedezés <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg></span>
                </div>
            </a>
            <a href="https://arcadia98.hu/kollekciok/Malika" target="_blank" class="collection-card animate animate-delay-2">
                <div class="collection-card-img">
                    <img src="https://admin.classen.cegem360.hu/wp-content/uploads/2025/10/classen-mailka.jpg" alt="Malika kollekció" loading="lazy">
                    <span class="collection-card-badge">Új 2026</span>
                </div>
                <div class="collection-card-body">
                    <h3>Malika</h3>
                    <p>Modul · Természetes elegancia</p>
                    <span class="collection-card-link">Felfedezés <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg></span>
                </div>
            </a>
            <a href="https://arcadia98.hu/kollekciok/Tumula" target="_blank" class="collection-card animate animate-delay-3">
                <div class="collection-card-img">
                    <img src="https://admin.classen.cegem360.hu/wp-content/uploads/2025/10/classen_tumula.jpg" alt="Tumula kollekció" loading="lazy">
                    <span class="collection-card-badge">Új 2026</span>
                </div>
                <div class="collection-card-body">
                    <h3>Tumula</h3>
                    <p>Modul · Egyedi formatervezés</p>
                    <span class="collection-card-link">Felfedezés <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg></span>
                </div>
            </a>
        </div>
    </div>
</section>

<!-- ===== PRODUCTS OVERVIEW ===== -->
<section class="products" id="kinalat">
    <div class="container">
        <div class="products-split">
            <div class="product-block stock animate">
                <div class="product-block-label">Azonnal vihető</div>
                <h3>Raktári Program</h3>
                <p>Sürgős a felújítás? Kiemelt raktárkészlettel rendelkezünk a legnépszerűbb CPL és dekorfóliás modellekből, amelyek akár azonnal elérhetők. Magyar Szabványos méretben, 10-es, 12-es és 14-es átfogó tokkal.</p>
                <a href="https://arcadia98.hu/kollekciok/Rakt%C3%A1ri%20ajt%C3%B3k" target="_blank" class="btn btn-yellow">
                    Raktári ajtók megtekintése
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                </a>
            </div>
            <div class="product-block all animate animate-delay-1">
                <div class="product-block-label">Teljes választék</div>
                <h3>Összes Kollekció</h3>
                <p>A modern minimáltól a klasszikus eleganciáig. Lakkozott, keretes, CPL felületű és tolóajtó rendszerek – több mint 30 kollekció, több száz modellváltozat.</p>
                <a href="https://arcadia98.hu/kollekciok" target="_blank" class="btn btn-yellow">
                    Kollekciók böngészése
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                </a>
            </div>
        </div>
        <div class="product-types">
            <div class="product-type animate">
                <div class="product-type-img">
                    <img src="https://admin.classen.cegem360.hu/wp-content/uploads/2024/01/Classen_drzwi_Venis_S.jpg" alt="Lakkozott ajtók" loading="lazy">
                </div>
                <div class="product-type-content">
                    <h4>Lakkozott ajtók</h4>
                    <p>Elegáns, időtálló felület</p>
                </div>
            </div>
            <div class="product-type animate animate-delay-1">
                <div class="product-type-img">
                    <img src="https://admin.classen.cegem360.hu/wp-content/uploads/2024/01/Greco-aranzacja.jpg" alt="Keretes ajtók" loading="lazy">
                </div>
                <div class="product-type-content">
                    <h4>Keretes ajtók</h4>
                    <p>Klasszikus szerkezet</p>
                </div>
            </div>
            <div class="product-type animate animate-delay-2">
                <div class="product-type-img">
                    <img src="https://admin.classen.cegem360.hu/wp-content/uploads/2024/01/Classen-drzwi-Tosca-dab-antracyt.jpg" alt="CPL felületű ajtók" loading="lazy">
                </div>
                <div class="product-type-content">
                    <h4>CPL felületű</h4>
                    <p>Extrém strapabíró</p>
                </div>
            </div>
            <div class="product-type animate animate-delay-3">
                <div class="product-type-img">
                    <img src="https://admin.classen.cegem360.hu/wp-content/uploads/2024/01/Havana.jpg" alt="Tolóajtók" loading="lazy">
                </div>
                <div class="product-type-content">
                    <h4>Tolóajtók</h4>
                    <p>Helytakarékos megoldás</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ===== COLOR PALETTE ===== -->
<section class="colors" id="szinek">
    <div class="container">
        <div class="colors-header animate">
            <div class="section-label">Színválaszték 2026/2027</div>
            <h2 class="section-title">Minden szín, egy forrásból</h2>
            <p class="section-subtitle">Négy felülettípus – Primo, 3D Look, Iridium és CPL – összesen több mint 30 szín, hogy tökéletesen illeszkedjen enteriőrjébe.</p>
        </div>
        <div class="color-groups animate">
            <!-- PRIMO -->
            <div class="color-group">
                <h3>Primo — Alap dekor felület</h3>
                <div class="color-swatches">
                    <div class="color-swatch"><div class="color-swatch-box stock" style="background:#f5f5f0"></div><span class="color-swatch-name">Fehér</span></div>
                    <div class="color-swatch"><div class="color-swatch-box" style="background:#d4c49a"></div><span class="color-swatch-name">Akác</span></div>
                    <div class="color-swatch"><div class="color-swatch-box stock" style="background:#c8a86e"></div><span class="color-swatch-name">Natur tölgy</span></div>
                    <div class="color-swatch"><div class="color-swatch-box stock" style="background:#b89c6a"></div><span class="color-swatch-name">Lengyel tölgy</span></div>
                    <div class="color-swatch"><div class="color-swatch-box stock" style="background:#5c3a1e"></div><span class="color-swatch-name">Dió</span></div>
                </div>
            </div>
            <!-- 3D LOOK -->
            <div class="color-group">
                <h3>3D Look — Prémium dekor felület</h3>
                <div class="color-swatches">
                    <div class="color-swatch"><div class="color-swatch-box stock" style="background:#b99a6e"></div><span class="color-swatch-name">Riviéra tölgy</span></div>
                    <div class="color-swatch"><div class="color-swatch-box" style="background:#e8dcc8"></div><span class="color-swatch-name">Fehér kőris</span></div>
                    <div class="color-swatch"><div class="color-swatch-box stock" style="background:#c4a67a"></div><span class="color-swatch-name">Sonoma tölgy</span></div>
                    <div class="color-swatch"><div class="color-swatch-box" style="background:#8a6e4a"></div><span class="color-swatch-name">Kolumbia dió</span></div>
                    <div class="color-swatch"><div class="color-swatch-box" style="background:#a08050"></div><span class="color-swatch-name">Olajos tölgy</span></div>
                    <div class="color-swatch"><div class="color-swatch-box stock" style="background:#8e8378"></div><span class="color-swatch-name">Szürke tölgy</span></div>
                    <div class="color-swatch"><div class="color-swatch-box stock" style="background:#9a7c5a"></div><span class="color-swatch-name">Catania tölgy</span></div>
                    <div class="color-swatch"><div class="color-swatch-box stock" style="background:#4a4440"></div><span class="color-swatch-name">Antracit tölgy</span></div>
                    <div class="color-swatch"><div class="color-swatch-box" style="background:#c09040"></div><span class="color-swatch-name">Méz tölgy</span></div>
                    <div class="color-swatch"><div class="color-swatch-box" style="background:#7a6048"></div><span class="color-swatch-name">Cleveland tölgy</span></div>
                    <div class="color-swatch"><div class="color-swatch-box new" style="background:#9e7e58"></div><span class="color-swatch-name">Tocantis tölgy</span></div>
                </div>
            </div>
            <!-- IRIDIUM -->
            <div class="color-group">
                <h3>Iridium — Prémium laminált</h3>
                <div class="color-swatches">
                    <div class="color-swatch"><div class="color-swatch-box stock" style="background:#eeebe5"></div><span class="color-swatch-name">Fehér matt</span></div>
                    <div class="color-swatch"><div class="color-swatch-box" style="background:#f0ece0"></div><span class="color-swatch-name">Hófehér kőris</span></div>
                    <div class="color-swatch"><div class="color-swatch-box" style="background:#a09080"></div><span class="color-swatch-name">Barna kőris</span></div>
                    <div class="color-swatch"><div class="color-swatch-box stock" style="background:#5a5550"></div><span class="color-swatch-name">Grafit kőris</span></div>
                    <div class="color-swatch"><div class="color-swatch-box" style="background:#6e4830"></div><span class="color-swatch-name">Marone tölgy</span></div>
                    <div class="color-swatch"><div class="color-swatch-box stock" style="background:#3a2a1a"></div><span class="color-swatch-name">Wenge</span></div>
                    <div class="color-swatch"><div class="color-swatch-box" style="background:#1a1a1a"></div><span class="color-swatch-name">UNI Black</span></div>
                </div>
            </div>
            <!-- CPL -->
            <div class="color-group">
                <h3>CPL — Kopásálló laminált</h3>
                <div class="color-swatches">
                    <div class="color-swatch"><div class="color-swatch-box" style="background:#b09878"></div><span class="color-swatch-name">Hamilton tölgy</span></div>
                    <div class="color-swatch"><div class="color-swatch-box" style="background:#c8b898"></div><span class="color-swatch-name">Világos akác</span></div>
                    <div class="color-swatch"><div class="color-swatch-box stock" style="background:#a09080"></div><span class="color-swatch-name">Norvég kőris</span></div>
                    <div class="color-swatch"><div class="color-swatch-box stock" style="background:#f2f0ec"></div><span class="color-swatch-name">Fehér RAL 9003</span></div>
                    <div class="color-swatch"><div class="color-swatch-box new" style="background:#eeece6;background-image:repeating-linear-gradient(0deg,transparent,transparent 3px,rgba(0,0,0,.03) 3px,rgba(0,0,0,.03) 4px)"></div><span class="color-swatch-name">Fehér struktúrált</span></div>
                    <div class="color-swatch"><div class="color-swatch-box" style="background:#8a7050"></div><span class="color-swatch-name">Antik tölgy</span></div>
                    <div class="color-swatch"><div class="color-swatch-box" style="background:#5a3820"></div><span class="color-swatch-name">Olasz dió</span></div>
                    <div class="color-swatch"><div class="color-swatch-box" style="background:#555048"></div><span class="color-swatch-name">Grafit tölgy</span></div>
                    <div class="color-swatch"><div class="color-swatch-box" style="background:#c8baa8"></div><span class="color-swatch-name">Kasmír</span></div>
                    <div class="color-swatch"><div class="color-swatch-box" style="background:#4a4a48"></div><span class="color-swatch-name">Grafit RAL 7024</span></div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ===== CTA SECTION ===== -->
<section class="cta-section">
    <div class="container cta-inner animate">
        <div class="section-label">Teljes kínálat & Árak</div>
        <h2 class="section-title">Keresi a konkrét árakat és méreteket?</h2>
        <p class="cta-description">Ezen az oldalon a márka bemutatását látja. A webshopunkban minden részletet megtalál:</p>
        <div class="cta-features">
            <div class="cta-feature">
                <span class="cta-feature-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" width="28" height="28"><line x1="12" y1="1" x2="12" y2="23"/><path d="M17 5H9.5a3.5 3.5 0 000 7h5a3.5 3.5 0 010 7H6"/></svg>
                </span>
                <h4>Aktuális árak</h4>
                <p>Mindig friss forintos árak, kedvezményekkel</p>
            </div>
            <div class="cta-feature">
                <span class="cta-feature-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" width="28" height="28"><path d="M2 3h6a4 4 0 014 4v14a3 3 0 00-3-3H2z"/><path d="M22 3h-6a4 4 0 00-4 4v14a3 3 0 013-3h7z"/></svg>
                </span>
                <h4>Letölthető katalógusok</h4>
                <p>Teljes termékkatalógusok PDF formátumban</p>
            </div>
            <div class="cta-feature">
                <span class="cta-feature-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" width="28" height="28"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/><polyline points="10 9 9 9 8 9"/></svg>
                </span>
                <h4>Azonnali árajánlat</h4>
                <p>Online árajánlatkérés egyedi igényeire</p>
            </div>
            <div class="cta-feature">
                <span class="cta-feature-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" width="28" height="28"><path d="M21 16V8a2 2 0 00-1-1.73l-7-4a2 2 0 00-2 0l-7 4A2 2 0 003 8v8a2 2 0 001 1.73l7 4a2 2 0 002 0l7-4A2 2 0 0021 16z"/><polyline points="3.27 6.96 12 12.01 20.73 6.96"/><line x1="12" y1="22.08" x2="12" y2="12"/></svg>
                </span>
                <h4>Raktárkészlet</h4>
                <p>Valós idejű készlet információ</p>
            </div>
        </div>
        <div class="cta-buttons">
            <a href="https://arcadia98.hu" target="_blank" class="btn btn-yellow btn-lg">
                Tovább a teljes Classen kínálathoz
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
            </a>
        </div>
        <div style="margin-top:28px;display:flex;justify-content:center">
            <div class="official-badge-dark">
                <img src="{{ asset('images/CLASSEN-Group.png') }}" alt="Classen">
                <div class="official-badge-divider"></div>
                <div class="official-badge-text">Hivatalos webshop<br><strong>Arcadia98.hu</strong></div>
            </div>
        </div>
    </div>
</section>

<!-- ===== WHY CLASSEN ===== -->
<section class="why" id="miert">
    <div class="container">
        <div class="why-header animate">
            <div class="section-label">Miért a Classen?</div>
            <h2 class="section-title">A prémium beltéri ajtók szinonimája</h2>
            <p class="section-subtitle">A Classen több mint 30 éve az európai beltéri ajtópiac meghatározó szereplője.</p>
        </div>
        <div class="why-grid">
            <div class="why-card animate">
                <div class="why-card-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" width="32" height="32"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                </div>
                <h3>Design</h3>
                <p>Nemzetközi trendeknek megfelelő, díjnyertes formatervezés. Minden stílushoz – a modern minimáltól a klasszikus eleganciáig.</p>
            </div>
            <div class="why-card animate animate-delay-1">
                <div class="why-card-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" width="32" height="32"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
                </div>
                <h3>Tartósság</h3>
                <p>Hard Edge R profil és karcálló felületek (Primo, Iridium, CPL). Akár a legnagyobb igénybevételnek is ellenáll.</p>
            </div>
            <div class="why-card animate animate-delay-2">
                <div class="why-card-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" width="32" height="32"><polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"/></svg>
                </div>
                <h3>Innováció</h3>
                <p>Szabadalmaztatott megoldások és környezetbarát gyártás. A legmodernebb technológiával készülnek.</p>
            </div>
        </div>
    </div>
</section>

<!-- ===== GALLERY ===== -->
<section class="gallery" id="galeria">
    <div class="container">
        <div class="gallery-header animate">
            <div class="section-label">Inspiráció</div>
            <h2 class="section-title">Hogyan illeszkednek enteriőrjébe</h2>
        </div>
        <div class="gallery-grid">
            <div class="gallery-item animate">
                <img src="https://admin.classen.cegem360.hu/wp-content/uploads/2024/01/Linea-Premium-aranzacja.jpg" alt="Modern nappali Classen ajtóval" loading="lazy">
                <div class="gallery-item-overlay">
                    <div class="gallery-item-text">
                        <h4>Modern nappali</h4>
                        <p>Linea Premium – fehér lakkozott</p>
                    </div>
                </div>
            </div>
            <div class="gallery-item animate animate-delay-1">
                <img src="https://admin.classen.cegem360.hu/wp-content/uploads/2024/01/Classen-drzwi-Tosca-dab-antracyt.jpg" alt="Elegáns előtér" loading="lazy">
                <div class="gallery-item-overlay">
                    <div class="gallery-item-text">
                        <h4>Elegáns előtér</h4>
                        <p>Tosca – tölgy dekor</p>
                    </div>
                </div>
            </div>
            <div class="gallery-item animate animate-delay-2">
                <img src="https://admin.classen.cegem360.hu/wp-content/uploads/2024/01/Classen-Linea-Premium-Loft.jpg" alt="Loft stílusú ajtó" loading="lazy">
                <div class="gallery-item-overlay">
                    <div class="gallery-item-text">
                        <h4>Loft stílus</h4>
                        <p>Linea Premium Loft – fekete üvegbetét</p>
                    </div>
                </div>
            </div>
            <div class="gallery-item animate animate-delay-3">
                <img src="https://admin.classen.cegem360.hu/wp-content/uploads/2024/01/Salvano_aranz.jpg" alt="Klasszikus elegancia" loading="lazy">
                <div class="gallery-item-overlay">
                    <div class="gallery-item-text">
                        <h4>Klasszikus elegancia</h4>
                        <p>Salvano – időtlen megjelenés</p>
                    </div>
                </div>
            </div>
        </div>
        <p class="gallery-note">A képeken látható modellek rendelhetők az Arcadia 98-nál.</p>
    </div>
</section>

<!-- ===== B2B ===== -->
<section class="b2b">
    <div class="container">
        <div class="b2b-grid">
            <div class="b2b-text animate">
                <img src="{{ asset('images/CLASSEN-Group.png') }}" alt="Classen" style="height:30px;margin-bottom:20px;filter:brightness(0) invert(1);opacity:.7">
                <div class="section-label">B2B Partnerprogram</div>
                <h2 class="section-title">Legyen partnerünk!</h2>
                <p>Asztalosoknak, kivitelezőknek és viszonteladóknak exkluzív partneri feltételeket kínálunk. Építsen biztos alapokra több mint 20 év szakmai tapasztalatával!</p>
            </div>
            <div class="b2b-features animate animate-delay-1">
                <div class="b2b-feature">
                    <div class="b2b-feature-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="12" y1="1" x2="12" y2="23"/><path d="M17 5H9.5a3.5 3.5 0 000 7h5a3.5 3.5 0 010 7H6"/></svg>
                    </div>
                    <h4>Partneri kedvezmények</h4>
                    <p>Kiemelt árak rendszeres vásárlóknak</p>
                </div>
                <div class="b2b-feature">
                    <div class="b2b-feature-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 16V8a2 2 0 00-1-1.73l-7-4a2 2 0 00-2 0l-7 4A2 2 0 003 8v8a2 2 0 001 1.73l7 4a2 2 0 002 0l7-4A2 2 0 0021 16z"/></svg>
                    </div>
                    <h4>Folyamatos raktárkészlet</h4>
                    <p>Azonnali elérhetőség a népszerű modellekből</p>
                </div>
                <div class="b2b-feature">
                    <div class="b2b-feature-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
                    </div>
                    <h4>Dedikált kapcsolattartó</h4>
                    <p>Személyes ügyintézés, gyors válaszidő</p>
                </div>
                <div class="b2b-feature">
                    <div class="b2b-feature-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>
                    </div>
                    <h4>20+ év tapasztalat</h4>
                    <p>Megbízható háttér és szakértelem</p>
                </div>
            </div>
        </div>
        <div class="b2b-cta">
            <a href="#kapcsolat" class="btn btn-yellow btn-lg">
                Partneri ajánlatkérés
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
            </a>
        </div>
    </div>
</section>

<!-- ===== CONTACT ===== -->
<section class="contact" id="kapcsolat">
    <div class="container">
        <div class="contact-header animate">
            <div class="section-label">Kapcsolat</div>
            <h2 class="section-title">Lépjen kapcsolatba velünk!</h2>
            <p class="section-subtitle">Szakértő kollégáink segítenek a megfelelő ajtó kiválasztásában.</p>
        </div>
        <div class="contact-grid">
            <div class="contact-card animate">
                <div class="contact-card-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg>
                </div>
                <h4>Bemutatóterem</h4>
                <p>1194 Budapest,<br>Citroën utca 4.</p>
            </div>
            <div class="contact-card animate animate-delay-1">
                <div class="contact-card-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07 19.5 19.5 0 01-6-6 19.79 19.79 0 01-3.07-8.67A2 2 0 014.11 2h3a2 2 0 012 1.72 12.84 12.84 0 00.7 2.81 2 2 0 01-.45 2.11L8.09 9.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45 12.84 12.84 0 002.81.7A2 2 0 0122 16.92z"/></svg>
                </div>
                <h4>Telefon</h4>
                <p><a href="tel:+3614303344">+36 1 430 3344</a></p>
                <small>H-P: 7:00-16:00, Szo: 9:00-13:00</small>
            </div>
            <div class="contact-card animate animate-delay-2">
                <div class="contact-card-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
                </div>
                <h4>Email</h4>
                <p><a href="mailto:info@arcadia98.hu">info@arcadia98.hu</a></p>
                <small>24 órán belül válaszolunk</small>
            </div>
            <div class="contact-card animate animate-delay-3">
                <div class="contact-card-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><line x1="2" y1="12" x2="22" y2="12"/><path d="M12 2a15.3 15.3 0 014 10 15.3 15.3 0 01-4 10 15.3 15.3 0 01-4-10 15.3 15.3 0 014-10z"/></svg>
                </div>
                <h4>Webshop</h4>
                <p><a href="https://arcadia98.hu" target="_blank">arcadia98.hu</a></p>
                <small>Teljes kínálat online</small>
            </div>
        </div>
    </div>
</section>

<!-- ===== FOOTER CTA ===== -->
<div class="footer-cta">
    <div class="container footer-cta-inner">
        <div style="margin-bottom:20px"><img src="{{ asset('images/CLASSEN-Group.png') }}" alt="Classen" style="height:36px;margin:0 auto"></div>
        <h2>Ne halassza tovább – találja meg álmai ajtaját!</h2>
        <p>A teljes Classen kínálat egy helyen, az Arcadia 98 Kft. – a hivatalos forgalmazó – garanciájával.</p>
        <div class="footer-cta-buttons">
            <a href="https://arcadia98.hu" target="_blank" class="btn btn-dark btn-lg">
                Tovább az Arcadia98.hu-ra
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
            </a>
            <a href="#kapcsolat" class="btn btn-lg" style="background:var(--classen-dark);color:var(--classen-yellow);border:2px solid var(--classen-dark)">Kapcsolatfelvétel</a>
        </div>
    </div>
</div>

<!-- ===== FOOTER ===== -->
<footer class="site-footer">
    <div class="container footer-inner">
        <p>&copy; {{ date('Y') }} Arcadia 98 Kft. – A Classen hivatalos magyarországi forgalmazója</p>
        <div class="footer-logo">
            <img src="{{ asset('images/CLASSEN-Group.png') }}" alt="Classen" style="height:32px;opacity:.6;filter:brightness(0) invert(1)">
        </div>
    </div>
</footer>

<!-- ===== SCRIPTS ===== -->
<script>
    // Header scroll effect
    const header = document.getElementById('header');
    let lastScroll = 0;
    window.addEventListener('scroll', () => {
        header.classList.toggle('scrolled', window.scrollY > 60);
        lastScroll = window.scrollY;
    }, { passive: true });

    // Mobile toggle
    document.getElementById('mobileToggle').addEventListener('click', function() {
        document.getElementById('mainNav').classList.toggle('open');
        this.classList.toggle('active');
    });

    // Close mobile nav on link click
    document.querySelectorAll('.main-nav a').forEach(link => {
        link.addEventListener('click', () => {
            document.getElementById('mainNav').classList.remove('open');
            document.getElementById('mobileToggle').classList.remove('active');
        });
    });

    // Scroll animations with IntersectionObserver
    const observerOptions = {
        threshold: 0.08,
        rootMargin: '0px 0px -60px 0px'
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
                observer.unobserve(entry.target);
            }
        });
    }, observerOptions);

    document.querySelectorAll('.animate').forEach(el => observer.observe(el));

    // Smooth scroll for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                const offset = 80;
                const top = target.getBoundingClientRect().top + window.pageYOffset - offset;
                window.scrollTo({ top, behavior: 'smooth' });
            }
        });
    });
</script>

</body>
</html>
