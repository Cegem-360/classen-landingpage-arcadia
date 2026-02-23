<!DOCTYPE html>
<html lang="hu">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Classen Beltéri Ajtók – Prémium Minőség, Hivatalos Forrásból | Arcadia 98</title>
        <meta name="description"
            content="Fedezze fel Magyarország egyik legszélesebb Classen beltéri ajtó kínálatát. Hivatalos forgalmazó, gyártói garancia, azonnali raktárkészlet.">
        <meta name="keywords"
            content="Classen, beltéri ajtó, ajtó, prémium ajtó, CPL ajtó, lakkozott ajtó, tolóajtó, Arcadia 98">
        <meta property="og:title" content="Classen Beltéri Ajtók – Prémium Minőség, Hivatalos Forrásból">
        <meta property="og:description"
            content="Fedezze fel Magyarország egyik legszélesebb Classen beltéri ajtó kínálatát az Arcadia 98 Kft. garanciájával.">
        <meta property="og:type" content="website">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link
            href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&family=Playfair+Display:wght@400;500;600;700&display=swap"
            rel="stylesheet">
        <link rel="icon" href="{{ Vite::asset('resources/images/classen-logo.svg') }}" type="image/svg+xml">
        @vite(['resources/js/app.js'])
    </head>

    <body>

        <!-- ===== HEADER ===== -->
        <header
            class="site-header fixed top-0 left-0 right-0 z-1000 bg-[rgba(26,26,26,0.92)] backdrop-blur-[20px] border-b border-white/6 transition-all duration-350 ease-in-out"
            id="header">
            <div class="max-w-7xl mx-auto px-8 flex items-center justify-between h-19">
                <div class="flex items-center gap-4">
                    <img loading="lazy" src="{{ Vite::asset('resources/images/classen-logo.svg') }}" alt="Classen"
                        class="h-8.5 logo-invert">
                    <span
                        class="text-[0.6rem] font-bold tracking-[1.5px] uppercase text-classen-yellow border border-classen-yellow/40 px-2.5 py-1 rounded-[3px] whitespace-nowrap">Hivatalos
                        Forgalmazó</span>
                </div>
                <nav class="main-nav flex items-center gap-9" id="mainNav">
                    <a href="#kollekcio" class="text-white/70 text-[0.85rem] font-medium">Kollekciók</a>
                    <a href="#kinalat" class="text-white/70 text-[0.85rem] font-medium">Kínálat</a>
                    <a href="#miert" class="text-white/70 text-[0.85rem] font-medium">Miért a Classen?</a>
                    <a href="#galeria" class="text-white/70 text-[0.85rem] font-medium">Inspiráció</a>
                    <a href="#kapcsolat" class="text-white/70 text-[0.85rem] font-medium">Kapcsolat</a>
                </nav>
                <div class="header-cta">
                    <a href="https://arcadia98.hu" target="_blank" class="btn btn-yellow text-[0.8rem] py-2.5! px-5.5!">
                        Árak és Vásárlás
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path d="M5 12h14" />
                            <path d="M12 5l7 7-7 7" />
                        </svg>
                    </a>
                </div>
                <button class="mobile-toggle hidden bg-transparent border-none cursor-pointer p-2" id="mobileToggle"
                    aria-label="Menü megnyitása">
                    <span></span><span></span><span></span>
                </button>
            </div>
        </header>

        <!-- ===== HERO ===== -->
        <section class="relative min-h-screen flex items-center bg-classen-dark overflow-hidden">
            <div class="absolute inset-0">
                <img loading="lazy"
                    src="https://admin.classen.cegem360.hu/wp-content/uploads/2024/01/Linea-Premium-aranzacja.jpg"
                    alt="Classen beltéri ajtó elegáns enteriőr" loading="eager"
                    class="w-full h-full object-cover opacity-30 saturate-[0.8]">
            </div>
            <div class="hero-overlay absolute inset-0"></div>
            <div class="max-w-7xl mx-auto px-8 relative z-2 pt-19">
                <div class="hero-grid grid grid-cols-[1.1fr_0.9fr] gap-20 items-center min-h-[calc(100vh-76px)]">
                    <div class="hero-text py-15">
                        <div class="section-label text-[0.75rem]! mb-6!">Arcadia 98 — Hivatalos Partner</div>
                        <h1 class="font-heading text-white font-semibold leading-[1.08] mb-7 tracking-[-0.02em]"
                            style="font-size:clamp(2.8rem,5vw,4rem)">Classen Beltéri Ajtók<br><span
                                class="text-classen-yellow">Prémium Minőség,</span><br>Hivatalos Forrásból.</h1>
                        <p class="text-[1.1rem] text-white/65 leading-[1.8] mb-10 max-w-130">Fedezze fel Magyarország
                            egyik legszélesebb Classen kínálatát. Az összes kollekció,
                            raktárkészlet és egyedi modellek egy helyen, az Arcadia 98 Kft. garanciájával.</p>
                        <div class="hero-badges flex gap-4 mb-11 flex-wrap">
                            <div
                                class="flex items-center gap-3 py-3 px-5 bg-white/6 border border-white/8 rounded-lg backdrop-blur-sm">
                                <div
                                    class="w-9.5 h-9.5 bg-classen-yellow rounded-full flex items-center justify-center text-base text-classen-dark">
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"
                                        width="18" height="18">
                                        <path d="M20 6L9 17l-5-5" />
                                    </svg>
                                </div>
                                <span class="text-[0.8rem] text-white/90 font-medium">Hivatalos partner</span>
                            </div>
                            <div
                                class="flex items-center gap-3 py-3 px-5 bg-white/6 border border-white/8 rounded-lg backdrop-blur-sm">
                                <div
                                    class="w-9.5 h-9.5 bg-classen-yellow rounded-full flex items-center justify-center text-base text-classen-dark">
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        width="18" height="18">
                                        <path
                                            d="M21 16V8a2 2 0 00-1-1.73l-7-4a2 2 0 00-2 0l-7 4A2 2 0 003 8v8a2 2 0 001 1.73l7 4a2 2 0 002 0l7-4A2 2 0 0021 16z" />
                                        <polyline points="3.27 6.96 12 12.01 20.73 6.96" />
                                        <line x1="12" y1="22.08" x2="12" y2="12" />
                                    </svg>
                                </div>
                                <span class="text-[0.8rem] text-white/90 font-medium">Raktárról elérhető</span>
                            </div>
                            <div
                                class="flex items-center gap-3 py-3 px-5 bg-white/6 border border-white/8 rounded-lg backdrop-blur-sm">
                                <div
                                    class="w-9.5 h-9.5 bg-classen-yellow rounded-full flex items-center justify-center text-base text-classen-dark">
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        width="18" height="18">
                                        <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z" />
                                    </svg>
                                </div>
                                <span class="text-[0.8rem] text-white/90 font-medium">Gyártói garancia</span>
                            </div>
                        </div>
                        <div class="hero-buttons flex gap-4 flex-wrap">
                            <a href="https://arcadia98.hu" target="_blank" class="btn btn-yellow btn-lg">
                                Teljes kínálat és árak
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M5 12h14" />
                                    <path d="M12 5l7 7-7 7" />
                                </svg>
                            </a>
                            <a href="#kapcsolat" class="btn btn-outline btn-lg">Kapcsolatfelvétel</a>
                        </div>
                        <div class="official-badge-dark mt-9">
                            <img loading="lazy" src="{{ Vite::asset('resources/images/CLASSEN-Group.png') }}"
                                alt="Classen">
                            <div class="official-badge-divider"></div>
                            <div class="official-badge-text">Hivatalos magyarországi forgalmazó<br><strong>Arcadia 98
                                    Kft.</strong></div>
                        </div>
                    </div>
                    <div class="hero-image relative flex justify-center items-center">
                        <img loading="lazy"
                            src="https://admin.classen.cegem360.hu/wp-content/uploads/2024/01/Linea-Premium.jpg"
                            alt="Classen Linea Premium ajtó"
                            class="max-h-[72vh] rounded-[20px] shadow-[0_48px_96px_rgba(0,0,0,0.5)]">
                        <div
                            class="absolute bottom-10 -left-5 bg-white py-5 px-7 rounded-xl shadow-xl flex items-center gap-3.5">
                            <div
                                class="w-11 h-11 bg-classen-yellow rounded-[10px] flex items-center justify-center text-[1.2rem]">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    width="22" height="22">
                                    <path d="M12 2L2 7l10 5 10-5-10-5z" />
                                    <path d="M2 17l10 5 10-5" />
                                    <path d="M2 12l10 5 10-5" />
                                </svg>
                            </div>
                            <div>
                                <div class="font-heading text-[1.6rem] font-bold leading-none">30+</div>
                                <div class="text-[0.75rem] text-classen-muted">kollekció elérhető</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ===== YELLOW BAR ===== -->
        <div class="bg-classen-yellow py-4">
            <div class="yellow-bar-inner max-w-7xl mx-auto px-8 flex justify-center items-center gap-12 flex-wrap">
                <div class="flex items-center gap-2.5 text-[0.85rem] font-semibold text-classen-dark">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"
                        class="w-5 h-5 shrink-0">
                        <path d="M9 12l2 2 4-4" />
                        <circle cx="12" cy="12" r="10" />
                    </svg>
                    Garantált eredetiség
                </div>
                <div class="flex items-center gap-2.5 text-[0.85rem] font-semibold text-classen-dark">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        class="w-5 h-5 shrink-0">
                        <rect x="2" y="3" width="20" height="14" rx="2" />
                        <path d="M8 21h8M12 17v4" />
                    </svg>
                    Teljes portfólió elérhető
                </div>
                <div class="flex items-center gap-2.5 text-[0.85rem] font-semibold text-classen-dark">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        class="w-5 h-5 shrink-0">
                        <path d="M12 2L2 7l10 5 10-5-10-5z" />
                        <path d="M2 17l10 5 10-5" />
                        <path d="M2 12l10 5 10-5" />
                    </svg>
                    20+ év tapasztalat
                </div>
                <div class="flex items-center gap-2.5 text-[0.85rem] font-semibold text-classen-dark">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        class="w-5 h-5 shrink-0">
                        <circle cx="12" cy="12" r="10" />
                        <polyline points="12 6 12 12 16 14" />
                    </svg>
                    Gyors szállítás
                </div>
            </div>
        </div>

        <!-- ===== TRUST SECTION ===== -->
        <section class="py-30" id="rolunk">
            <div class="max-w-7xl mx-auto px-8">
                <div class="trust-grid grid grid-cols-2 gap-25 items-center">
                    <div class="trust-visual relative animate">
                        <img src="https://admin.classen.cegem360.hu/wp-content/uploads/2024/01/Classen_drzwi_Clif.jpg"
                            alt="Classen bemutatóterem" loading="lazy"
                            class="rounded-[20px] shadow-lg aspect-4/3 object-cover w-full">
                        <div
                            class="absolute -bottom-7.5 -right-5 bg-white py-7 px-8.5 rounded-xl shadow-xl border-l-4 border-classen-yellow">
                            <div class="font-heading text-[2.8rem] font-bold text-classen-dark leading-none">20+</div>
                            <div class="text-[0.82rem] text-classen-muted mt-1.5">év szakmai tapasztalat<br>nyílászárók
                                terén</div>
                        </div>
                    </div>
                    <div class="animate">
                        <div class="official-badge mb-7">
                            <img loading="lazy" src="{{ Vite::asset('resources/images/CLASSEN-Group.png') }}"
                                alt="Classen">
                            <div class="official-badge-divider"></div>
                            <div class="official-badge-text">Hivatalos forgalmazó<br><strong>Arcadia 98 Kft.</strong>
                            </div>
                        </div>
                        <div class="section-label">Bizalom & Minőség</div>
                        <h2 class="section-title">Hivatalos Classen Partner Magyarországon</h2>
                        <p class="section-subtitle">Az Arcadia 98 Kft. a Classen beltéri ajtók kiemelt, hivatalos
                            magyarországi forgalmazója. Nálunk nemcsak egy ajtót vesz, hanem teljes körű szolgáltatást
                            és gyártói garanciát kap.</p>
                        <div class="flex flex-col gap-8 mt-10">
                            <div class="flex gap-4.5">
                                <div
                                    class="w-13 h-13 bg-classen-light rounded-xl flex items-center justify-center shrink-0">
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        class="w-6 h-6 text-classen-dark">
                                        <path d="M12 15l-2 5L9 9l11 4-5 2zm0 0l5 5" />
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="text-base font-semibold mb-1.5">Garantált eredetiség</h4>
                                    <p class="text-[0.88rem] text-classen-muted leading-[1.65]">Közvetlen gyártói
                                        kapcsolat és hivatalos disztribúciós megállapodás. Minden
                                        termék eredeti Classen minőség.</p>
                                </div>
                            </div>
                            <div class="flex gap-4.5">
                                <div
                                    class="w-13 h-13 bg-classen-light rounded-xl flex items-center justify-center shrink-0">
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        class="w-6 h-6 text-classen-dark">
                                        <path d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2" />
                                        <rect x="9" y="3" width="6" height="4" rx="1" />
                                        <path d="M9 14l2 2 4-4" />
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="text-base font-semibold mb-1.5">Teljes portfólió</h4>
                                    <p class="text-[0.88rem] text-classen-muted leading-[1.65]">Hozzáférünk a Classen
                                        teljes, aktuális katalógusához – lakkozott, CPL, keretes és
                                        tolóajtók egyaránt.</p>
                                </div>
                            </div>
                            <div class="flex gap-4.5">
                                <div
                                    class="w-13 h-13 bg-classen-light rounded-xl flex items-center justify-center shrink-0">
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        class="w-6 h-6 text-classen-dark">
                                        <path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2" />
                                        <circle cx="9" cy="7" r="4" />
                                        <path d="M23 21v-2a4 4 0 00-3-3.87" />
                                        <path d="M16 3.13a4 4 0 010 7.75" />
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="text-base font-semibold mb-1.5">Szakmai háttér</h4>
                                    <p class="text-[0.88rem] text-classen-muted leading-[1.65]">Több mint 20 év
                                        tapasztalat nyílászárók terén. Szakértő tanácsadás az
                                        ajtóválasztástól a beépítésig.</p>
                                </div>
                            </div>
                        </div>
                        <div
                            class="mt-10 py-4.5 px-6 bg-classen-yellow-soft border-l-[3px] border-classen-yellow rounded-r-lg text-[0.88rem] text-classen-dark leading-[1.6]">
                            <strong>Fontos:</strong> A Classen márka népszerűségének növekedésével egyre több forrásból
                            érhetők el a termékek. Válassza a biztonságot és a szakértelmet!
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ===== NEW COLLECTIONS ===== -->
        <section class="py-30 bg-classen-light" id="kollekcio">
            <div class="max-w-7xl mx-auto px-8">
                <div class="text-center mb-16 animate">
                    <div class="section-label before:hidden">2026/2027 Újdonságok</div>
                    <h2 class="section-title">Az idei év legújabb kollekciói</h2>
                    <p class="section-subtitle mx-auto">A Classen folyamatosan bővíti kínálatát a legújabb trendeknek
                        megfelelően. Fedezze fel az új kollekciókat!</p>
                </div>
                <div class="collections-grid grid grid-cols-4 gap-7">
                    <a href="https://arcadia98.hu/kollekciok/Evelin" target="_blank"
                        class="group relative rounded-[20px] overflow-hidden bg-white shadow-sm transition-all duration-350 ease-in-out hover:-translate-y-2.5 hover:shadow-xl block animate">
                        <div class="relative h-85 overflow-hidden">
                            <img loading="lazy"
                                src="https://admin.classen.cegem360.hu/wp-content/uploads/2025/10/classen-evelin.jpg"
                                alt="Evelin kollekció" loading="lazy"
                                class="w-full h-full object-cover transition-transform duration-700 ease-in-out group-hover:scale-[1.08]">
                            <span
                                class="absolute top-4 left-4 bg-classen-yellow text-classen-dark text-[0.65rem] font-bold tracking-[1.2px] uppercase py-1.5 px-3.5 rounded">Új
                                2026</span>
                        </div>
                        <div class="py-6 px-7">
                            <h3 class="font-heading text-[1.3rem] font-semibold mb-1.5">Evelin</h3>
                            <p class="text-[0.82rem] text-classen-muted">Lakkozott · Modern minimalista design</p>
                            <span
                                class="inline-flex items-center gap-2 mt-3.5 text-[0.82rem] font-semibold text-classen-dark transition-colors group-hover:text-classen-green">Felfedezés
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"
                                    class="w-4 h-4 transition-transform duration-300 group-hover:translate-x-1">
                                    <path d="M5 12h14M12 5l7 7-7 7" />
                                </svg></span>
                        </div>
                    </a>
                    <a href="https://arcadia98.hu/kollekciok/Mamba" target="_blank"
                        class="group relative rounded-[20px] overflow-hidden bg-white shadow-sm transition-all duration-350 ease-in-out hover:-translate-y-2.5 hover:shadow-xl block animate animate-delay-1">
                        <div class="relative h-85 overflow-hidden">
                            <img loading="lazy"
                                src="https://admin.classen.cegem360.hu/wp-content/uploads/2025/10/classen-mamba.jpg"
                                alt="Mamba kollekció"
                                class="w-full h-full object-cover transition-transform duration-700 ease-in-out group-hover:scale-[1.08]">
                            <span
                                class="absolute top-4 left-4 bg-classen-yellow text-classen-dark text-[0.65rem] font-bold tracking-[1.2px] uppercase py-1.5 px-3.5 rounded">Új
                                2026</span>
                        </div>
                        <div class="py-6 px-7">
                            <h3 class="font-heading text-[1.3rem] font-semibold mb-1.5">Mamba</h3>
                            <p class="text-[0.82rem] text-classen-muted">Keretes · Loft stílus</p>
                            <span
                                class="inline-flex items-center gap-2 mt-3.5 text-[0.82rem] font-semibold text-classen-dark transition-colors group-hover:text-classen-green">Felfedezés
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"
                                    class="w-4 h-4 transition-transform duration-300 group-hover:translate-x-1">
                                    <path d="M5 12h14M12 5l7 7-7 7" />
                                </svg></span>
                        </div>
                    </a>
                    <a href="https://arcadia98.hu/kollekciok/Malika" target="_blank"
                        class="group relative rounded-[20px] overflow-hidden bg-white shadow-sm transition-all duration-350 ease-in-out hover:-translate-y-2.5 hover:shadow-xl block animate animate-delay-2">
                        <div class="relative h-85 overflow-hidden">
                            <img src="https://admin.classen.cegem360.hu/wp-content/uploads/2025/10/classen-mailka.jpg"
                                alt="Malika kollekció" loading="lazy"
                                class="w-full h-full object-cover transition-transform duration-700 ease-in-out group-hover:scale-[1.08]">
                            <span
                                class="absolute top-4 left-4 bg-classen-yellow text-classen-dark text-[0.65rem] font-bold tracking-[1.2px] uppercase py-1.5 px-3.5 rounded">Új
                                2026</span>
                        </div>
                        <div class="py-6 px-7">
                            <h3 class="font-heading text-[1.3rem] font-semibold mb-1.5">Malika</h3>
                            <p class="text-[0.82rem] text-classen-muted">Modul · Természetes elegancia</p>
                            <span
                                class="inline-flex items-center gap-2 mt-3.5 text-[0.82rem] font-semibold text-classen-dark transition-colors group-hover:text-classen-green">Felfedezés
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"
                                    class="w-4 h-4 transition-transform duration-300 group-hover:translate-x-1">
                                    <path d="M5 12h14M12 5l7 7-7 7" />
                                </svg></span>
                        </div>
                    </a>
                    <a href="https://arcadia98.hu/kollekciok/Tumula" target="_blank"
                        class="group relative rounded-[20px] overflow-hidden bg-white shadow-sm transition-all duration-350 ease-in-out hover:-translate-y-2.5 hover:shadow-xl block animate animate-delay-3">
                        <div class="relative h-85 overflow-hidden">
                            <img src="https://admin.classen.cegem360.hu/wp-content/uploads/2025/10/classen_tumula.jpg"
                                alt="Tumula kollekció" loading="lazy"
                                class="w-full h-full object-cover transition-transform duration-700 ease-in-out group-hover:scale-[1.08]">
                            <span
                                class="absolute top-4 left-4 bg-classen-yellow text-classen-dark text-[0.65rem] font-bold tracking-[1.2px] uppercase py-1.5 px-3.5 rounded">Új
                                2026</span>
                        </div>
                        <div class="py-6 px-7">
                            <h3 class="font-heading text-[1.3rem] font-semibold mb-1.5">Tumula</h3>
                            <p class="text-[0.82rem] text-classen-muted">Modul · Egyedi formatervezés</p>
                            <span
                                class="inline-flex items-center gap-2 mt-3.5 text-[0.82rem] font-semibold text-classen-dark transition-colors group-hover:text-classen-green">Felfedezés
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"
                                    class="w-4 h-4 transition-transform duration-300 group-hover:translate-x-1">
                                    <path d="M5 12h14M12 5l7 7-7 7" />
                                </svg></span>
                        </div>
                    </a>
                </div>
            </div>
        </section>

        <!-- ===== PRODUCTS OVERVIEW ===== -->
        <section class="py-30" id="kinalat">
            <div class="max-w-7xl mx-auto px-8">
                <div class="products-split grid grid-cols-2 gap-8 mb-18">
                    <div class="product-block stock relative overflow-hidden p-13 rounded-[20px] text-white animate">
                        <div class="text-[0.68rem] font-bold tracking-[2.5px] uppercase text-classen-yellow mb-4.5">
                            Azonnal vihető</div>
                        <h3 class="font-heading text-[1.9rem] font-semibold mb-4">Raktári Program</h3>
                        <p class="text-[0.95rem] opacity-75 leading-[1.75] mb-8">Sürgős a felújítás? Kiemelt
                            raktárkészlettel rendelkezünk a legnépszerűbb CPL és dekorfóliás
                            modellekből, amelyek akár azonnal elérhetők. Magyar Szabványos méretben, 10-es, 12-es és
                            14-es átfogó tokkal.</p>
                        <a href="https://arcadia98.hu/kollekciok/Rakt%C3%A1ri%20ajt%C3%B3k" target="_blank"
                            class="btn btn-yellow">
                            Raktári ajtók megtekintése
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                                <path d="M5 12h14M12 5l7 7-7 7" />
                            </svg>
                        </a>
                    </div>
                    <div
                        class="product-block all relative overflow-hidden p-13 rounded-[20px] text-white animate animate-delay-1">
                        <div class="text-[0.68rem] font-bold tracking-[2.5px] uppercase text-classen-yellow mb-4.5">
                            Teljes választék</div>
                        <h3 class="font-heading text-[1.9rem] font-semibold mb-4">Összes Kollekció</h3>
                        <p class="text-[0.95rem] opacity-75 leading-[1.75] mb-8">A modern minimáltól a klasszikus
                            eleganciáig. Lakkozott, keretes, CPL felületű és tolóajtó
                            rendszerek – több mint 30 kollekció, több száz modellváltozat.</p>
                        <a href="https://arcadia98.hu/kollekciok" target="_blank" class="btn btn-yellow">
                            Kollekciók böngészése
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                                <path d="M5 12h14M12 5l7 7-7 7" />
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="product-types grid grid-cols-4 gap-6">
                    <div
                        class="group text-center bg-white rounded-[20px] overflow-hidden shadow-sm transition-all duration-350 ease-in-out hover:-translate-y-1.5 hover:shadow-lg animate">
                        <div class="w-full h-50 overflow-hidden">
                            <img src="https://admin.classen.cegem360.hu/wp-content/uploads/2024/01/Classen_drzwi_Venis_S.jpg"
                                alt="Lakkozott ajtók" loading="lazy"
                                class="w-full h-full object-cover transition-transform duration-600 group-hover:scale-[1.06]">
                        </div>
                        <div class="p-5">
                            <h4 class="text-[0.95rem] font-semibold mb-1">Lakkozott ajtók</h4>
                            <p class="text-[0.8rem] text-classen-muted">Elegáns, időtálló felület</p>
                        </div>
                    </div>
                    <div
                        class="group text-center bg-white rounded-[20px] overflow-hidden shadow-sm transition-all duration-350 ease-in-out hover:-translate-y-1.5 hover:shadow-lg animate animate-delay-1">
                        <div class="w-full h-50 overflow-hidden">
                            <img src="https://admin.classen.cegem360.hu/wp-content/uploads/2024/01/Greco-aranzacja.jpg"
                                alt="Keretes ajtók" loading="lazy"
                                class="w-full h-full object-cover transition-transform duration-600 group-hover:scale-[1.06]">
                        </div>
                        <div class="p-5">
                            <h4 class="text-[0.95rem] font-semibold mb-1">Keretes ajtók</h4>
                            <p class="text-[0.8rem] text-classen-muted">Klasszikus szerkezet</p>
                        </div>
                    </div>
                    <div
                        class="group text-center bg-white rounded-[20px] overflow-hidden shadow-sm transition-all duration-350 ease-in-out hover:-translate-y-1.5 hover:shadow-lg animate animate-delay-2">
                        <div class="w-full h-50 overflow-hidden">
                            <img src="https://admin.classen.cegem360.hu/wp-content/uploads/2024/01/Classen-drzwi-Tosca-dab-antracyt.jpg"
                                alt="CPL felületű ajtók" loading="lazy"
                                class="w-full h-full object-cover transition-transform duration-600 group-hover:scale-[1.06]">
                        </div>
                        <div class="p-5">
                            <h4 class="text-[0.95rem] font-semibold mb-1">CPL felületű</h4>
                            <p class="text-[0.8rem] text-classen-muted">Extrém strapabíró</p>
                        </div>
                    </div>
                    <div
                        class="group text-center bg-white rounded-[20px] overflow-hidden shadow-sm transition-all duration-350 ease-in-out hover:-translate-y-1.5 hover:shadow-lg animate animate-delay-3">
                        <div class="w-full h-50 overflow-hidden">
                            <img src="https://admin.classen.cegem360.hu/wp-content/uploads/2024/01/Havana.jpg"
                                alt="Tolóajtók" loading="lazy"
                                class="w-full h-full object-cover transition-transform duration-600 group-hover:scale-[1.06]">
                        </div>
                        <div class="p-5">
                            <h4 class="text-[0.95rem] font-semibold mb-1">Tolóajtók</h4>
                            <p class="text-[0.8rem] text-classen-muted">Helytakarékos megoldás</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ===== COLOR PALETTE ===== -->
        <section class="py-30 bg-classen-light" id="szinek">
            <div class="max-w-7xl mx-auto px-8">
                <div class="text-center mb-16 animate">
                    <div class="section-label before:hidden">Színválaszték 2026/2027</div>
                    <h2 class="section-title">Minden szín, egy forrásból</h2>
                    <p class="section-subtitle mx-auto">Négy felülettípus – Primo, 3D Look, Iridium és CPL – összesen
                        több mint
                        30 szín, hogy tökéletesen illeszkedjen enteriőrjébe.</p>
                </div>
                <div class="flex flex-col gap-13 animate">
                    <!-- PRIMO -->
                    <div>
                        <h3
                            class="text-[0.9rem] font-bold tracking-[2px] uppercase mb-6 pb-3 border-b-2 border-classen-yellow inline-block">
                            Primo — Alap dekor felület</h3>
                        <div class="flex flex-wrap gap-4.5">
                            <div class="color-swatch w-27.5 text-center">
                                <div class="color-swatch-box relative w-27.5 h-18 rounded-lg shadow-sm overflow-hidden transition-all duration-350 hover:scale-[1.08] hover:shadow-md cursor-default stock"
                                    style="background:#f5f5f0"></div>
                                <span class="text-[0.7rem] font-medium text-classen-muted leading-[1.35]">Fehér</span>
                            </div>
                            <div class="color-swatch w-27.5 text-center">
                                <div class="color-swatch-box relative w-27.5 h-18 rounded-lg shadow-sm overflow-hidden transition-all duration-350 hover:scale-[1.08] hover:shadow-md cursor-default"
                                    style="background:#d4c49a"></div>
                                <span class="text-[0.7rem] font-medium text-classen-muted leading-[1.35]">Akác</span>
                            </div>
                            <div class="color-swatch w-27.5 text-center">
                                <div class="color-swatch-box relative w-27.5 h-18 rounded-lg shadow-sm overflow-hidden transition-all duration-350 hover:scale-[1.08] hover:shadow-md cursor-default stock"
                                    style="background:#c8a86e"></div>
                                <span class="text-[0.7rem] font-medium text-classen-muted leading-[1.35]">Natur
                                    tölgy</span>
                            </div>
                            <div class="color-swatch w-27.5 text-center">
                                <div class="color-swatch-box relative w-27.5 h-18 rounded-lg shadow-sm overflow-hidden transition-all duration-350 hover:scale-[1.08] hover:shadow-md cursor-default stock"
                                    style="background:#b89c6a"></div>
                                <span class="text-[0.7rem] font-medium text-classen-muted leading-[1.35]">Lengyel
                                    tölgy</span>
                            </div>
                            <div class="color-swatch w-27.5 text-center">
                                <div class="color-swatch-box relative w-27.5 h-18 rounded-lg shadow-sm overflow-hidden transition-all duration-350 hover:scale-[1.08] hover:shadow-md cursor-default stock"
                                    style="background:#5c3a1e"></div>
                                <span class="text-[0.7rem] font-medium text-classen-muted leading-[1.35]">Dió</span>
                            </div>
                            <div class="color-swatch w-27.5 text-center">
                                <div class="color-swatch-box relative w-27.5 h-18 rounded-lg shadow-sm overflow-hidden transition-all duration-350 hover:scale-[1.08] hover:shadow-md cursor-default stock"
                                    style="background:#8a7a6a"></div>
                                <span class="text-[0.7rem] font-medium text-classen-muted leading-[1.35]">Szürke
                                    tölgy</span>
                            </div>
                            <div class="color-swatch w-27.5 text-center">
                                <div class="color-swatch-box relative w-27.5 h-18 rounded-lg shadow-sm overflow-hidden transition-all duration-350 hover:scale-[1.08] hover:shadow-md cursor-default"
                                    style="background:#4a3828"></div>
                                <span class="text-[0.7rem] font-medium text-classen-muted leading-[1.35]">Antik
                                    dió</span>
                            </div>
                            <div class="color-swatch w-27.5 text-center">
                                <div class="color-swatch-box relative w-27.5 h-18 rounded-lg shadow-sm overflow-hidden transition-all duration-350 hover:scale-[1.08] hover:shadow-md cursor-default"
                                    style="background:#3a3a38"></div>
                                <span
                                    class="text-[0.7rem] font-medium text-classen-muted leading-[1.35]">Antracit</span>
                            </div>
                        </div>
                    </div>
                    <!-- 3D LOOK -->
                    <div>
                        <h3
                            class="text-[0.9rem] font-bold tracking-[2px] uppercase mb-6 pb-3 border-b-2 border-classen-yellow inline-block">
                            3D Look — Prémium dekor felület</h3>
                        <div class="flex flex-wrap gap-4.5">
                            <div class="color-swatch w-27.5 text-center">
                                <div class="color-swatch-box relative w-27.5 h-18 rounded-lg shadow-sm overflow-hidden transition-all duration-350 hover:scale-[1.08] hover:shadow-md cursor-default stock"
                                    style="background:#b99a6e"></div>
                                <span class="text-[0.7rem] font-medium text-classen-muted leading-[1.35]">Riviéra
                                    tölgy</span>
                            </div>
                            <div class="color-swatch w-27.5 text-center">
                                <div class="color-swatch-box relative w-27.5 h-18 rounded-lg shadow-sm overflow-hidden transition-all duration-350 hover:scale-[1.08] hover:shadow-md cursor-default"
                                    style="background:#e8dcc8"></div>
                                <span class="text-[0.7rem] font-medium text-classen-muted leading-[1.35]">Fehér
                                    kőris</span>
                            </div>
                            <div class="color-swatch w-27.5 text-center">
                                <div class="color-swatch-box relative w-27.5 h-18 rounded-lg shadow-sm overflow-hidden transition-all duration-350 hover:scale-[1.08] hover:shadow-md cursor-default stock"
                                    style="background:#c4a67a"></div>
                                <span class="text-[0.7rem] font-medium text-classen-muted leading-[1.35]">Sonoma
                                    tölgy</span>
                            </div>
                            <div class="color-swatch w-27.5 text-center">
                                <div class="color-swatch-box relative w-27.5 h-18 rounded-lg shadow-sm overflow-hidden transition-all duration-350 hover:scale-[1.08] hover:shadow-md cursor-default"
                                    style="background:#8a6e4a"></div>
                                <span class="text-[0.7rem] font-medium text-classen-muted leading-[1.35]">Kolumbia
                                    dió</span>
                            </div>
                            <div class="color-swatch w-27.5 text-center">
                                <div class="color-swatch-box relative w-27.5 h-18 rounded-lg shadow-sm overflow-hidden transition-all duration-350 hover:scale-[1.08] hover:shadow-md cursor-default"
                                    style="background:#a08050"></div>
                                <span class="text-[0.7rem] font-medium text-classen-muted leading-[1.35]">Olajos
                                    tölgy</span>
                            </div>
                            <div class="color-swatch w-27.5 text-center">
                                <div class="color-swatch-box relative w-27.5 h-18 rounded-lg shadow-sm overflow-hidden transition-all duration-350 hover:scale-[1.08] hover:shadow-md cursor-default stock"
                                    style="background:#8e8378"></div>
                                <span class="text-[0.7rem] font-medium text-classen-muted leading-[1.35]">Szürke
                                    tölgy</span>
                            </div>
                            <div class="color-swatch w-27.5 text-center">
                                <div class="color-swatch-box relative w-27.5 h-18 rounded-lg shadow-sm overflow-hidden transition-all duration-350 hover:scale-[1.08] hover:shadow-md cursor-default stock"
                                    style="background:#9a7c5a"></div>
                                <span class="text-[0.7rem] font-medium text-classen-muted leading-[1.35]">Catania
                                    tölgy</span>
                            </div>
                            <div class="color-swatch w-27.5 text-center">
                                <div class="color-swatch-box relative w-27.5 h-18 rounded-lg shadow-sm overflow-hidden transition-all duration-350 hover:scale-[1.08] hover:shadow-md cursor-default stock"
                                    style="background:#4a4440"></div>
                                <span class="text-[0.7rem] font-medium text-classen-muted leading-[1.35]">Antracit
                                    tölgy</span>
                            </div>
                            <div class="color-swatch w-27.5 text-center">
                                <div class="color-swatch-box relative w-27.5 h-18 rounded-lg shadow-sm overflow-hidden transition-all duration-350 hover:scale-[1.08] hover:shadow-md cursor-default"
                                    style="background:#c09040"></div>
                                <span class="text-[0.7rem] font-medium text-classen-muted leading-[1.35]">Méz
                                    tölgy</span>
                            </div>
                            <div class="color-swatch w-27.5 text-center">
                                <div class="color-swatch-box relative w-27.5 h-18 rounded-lg shadow-sm overflow-hidden transition-all duration-350 hover:scale-[1.08] hover:shadow-md cursor-default"
                                    style="background:#7a6048"></div>
                                <span class="text-[0.7rem] font-medium text-classen-muted leading-[1.35]">Cleveland
                                    tölgy</span>
                            </div>
                            <div class="color-swatch w-27.5 text-center">
                                <div class="color-swatch-box relative w-27.5 h-18 rounded-lg shadow-sm overflow-hidden transition-all duration-350 hover:scale-[1.08] hover:shadow-md cursor-default new"
                                    style="background:#9e7e58"></div>
                                <span class="text-[0.7rem] font-medium text-classen-muted leading-[1.35]">Tocantis
                                    tölgy</span>
                            </div>
                        </div>
                    </div>
                    <!-- IRIDIUM -->
                    <div>
                        <h3
                            class="text-[0.9rem] font-bold tracking-[2px] uppercase mb-6 pb-3 border-b-2 border-classen-yellow inline-block">
                            Iridium — Prémium laminált</h3>
                        <div class="flex flex-wrap gap-4.5">
                            <div class="color-swatch w-27.5 text-center">
                                <div class="color-swatch-box relative w-27.5 h-18 rounded-lg shadow-sm overflow-hidden transition-all duration-350 hover:scale-[1.08] hover:shadow-md cursor-default stock"
                                    style="background:#eeebe5"></div>
                                <span class="text-[0.7rem] font-medium text-classen-muted leading-[1.35]">Fehér
                                    matt</span>
                            </div>
                            <div class="color-swatch w-27.5 text-center">
                                <div class="color-swatch-box relative w-27.5 h-18 rounded-lg shadow-sm overflow-hidden transition-all duration-350 hover:scale-[1.08] hover:shadow-md cursor-default"
                                    style="background:#f0ece0"></div>
                                <span class="text-[0.7rem] font-medium text-classen-muted leading-[1.35]">Hófehér
                                    kőris</span>
                            </div>
                            <div class="color-swatch w-27.5 text-center">
                                <div class="color-swatch-box relative w-27.5 h-18 rounded-lg shadow-sm overflow-hidden transition-all duration-350 hover:scale-[1.08] hover:shadow-md cursor-default"
                                    style="background:#a09080"></div>
                                <span class="text-[0.7rem] font-medium text-classen-muted leading-[1.35]">Barna
                                    kőris</span>
                            </div>
                            <div class="color-swatch w-27.5 text-center">
                                <div class="color-swatch-box relative w-27.5 h-18 rounded-lg shadow-sm overflow-hidden transition-all duration-350 hover:scale-[1.08] hover:shadow-md cursor-default stock"
                                    style="background:#5a5550"></div>
                                <span class="text-[0.7rem] font-medium text-classen-muted leading-[1.35]">Grafit
                                    kőris</span>
                            </div>
                            <div class="color-swatch w-27.5 text-center">
                                <div class="color-swatch-box relative w-27.5 h-18 rounded-lg shadow-sm overflow-hidden transition-all duration-350 hover:scale-[1.08] hover:shadow-md cursor-default"
                                    style="background:#6e4830"></div>
                                <span class="text-[0.7rem] font-medium text-classen-muted leading-[1.35]">Marone
                                    tölgy</span>
                            </div>
                            <div class="color-swatch w-27.5 text-center">
                                <div class="color-swatch-box relative w-27.5 h-18 rounded-lg shadow-sm overflow-hidden transition-all duration-350 hover:scale-[1.08] hover:shadow-md cursor-default stock"
                                    style="background:#3a2a1a"></div>
                                <span class="text-[0.7rem] font-medium text-classen-muted leading-[1.35]">Wenge</span>
                            </div>
                            <div class="color-swatch w-27.5 text-center">
                                <div class="color-swatch-box relative w-27.5 h-18 rounded-lg shadow-sm overflow-hidden transition-all duration-350 hover:scale-[1.08] hover:shadow-md cursor-default"
                                    style="background:#1a1a1a"></div>
                                <span class="text-[0.7rem] font-medium text-classen-muted leading-[1.35]">UNI
                                    Black</span>
                            </div>
                        </div>
                    </div>
                    <!-- CPL -->
                    <div>
                        <h3
                            class="text-[0.9rem] font-bold tracking-[2px] uppercase mb-6 pb-3 border-b-2 border-classen-yellow inline-block">
                            CPL — Kopásálló laminált</h3>
                        <div class="flex flex-wrap gap-4.5">
                            <div class="color-swatch w-27.5 text-center">
                                <div class="color-swatch-box relative w-27.5 h-18 rounded-lg shadow-sm overflow-hidden transition-all duration-350 hover:scale-[1.08] hover:shadow-md cursor-default"
                                    style="background:#b09878"></div>
                                <span class="text-[0.7rem] font-medium text-classen-muted leading-[1.35]">Hamilton
                                    tölgy</span>
                            </div>
                            <div class="color-swatch w-27.5 text-center">
                                <div class="color-swatch-box relative w-27.5 h-18 rounded-lg shadow-sm overflow-hidden transition-all duration-350 hover:scale-[1.08] hover:shadow-md cursor-default"
                                    style="background:#c8b898"></div>
                                <span class="text-[0.7rem] font-medium text-classen-muted leading-[1.35]">Világos
                                    akác</span>
                            </div>
                            <div class="color-swatch w-27.5 text-center">
                                <div class="color-swatch-box relative w-27.5 h-18 rounded-lg shadow-sm overflow-hidden transition-all duration-350 hover:scale-[1.08] hover:shadow-md cursor-default stock"
                                    style="background:#a09080"></div>
                                <span class="text-[0.7rem] font-medium text-classen-muted leading-[1.35]">Norvég
                                    kőris</span>
                            </div>
                            <div class="color-swatch w-27.5 text-center">
                                <div class="color-swatch-box relative w-27.5 h-18 rounded-lg shadow-sm overflow-hidden transition-all duration-350 hover:scale-[1.08] hover:shadow-md cursor-default stock"
                                    style="background:#f2f0ec"></div>
                                <span class="text-[0.7rem] font-medium text-classen-muted leading-[1.35]">Fehér RAL
                                    9003</span>
                            </div>
                            <div class="color-swatch w-27.5 text-center">
                                <div class="color-swatch-box relative w-27.5 h-18 rounded-lg shadow-sm overflow-hidden transition-all duration-350 hover:scale-[1.08] hover:shadow-md cursor-default new"
                                    style="background:#eeece6;background-image:repeating-linear-gradient(0deg,transparent,transparent 3px,rgba(0,0,0,.03) 3px,rgba(0,0,0,.03) 4px)">
                                </div>
                                <span class="text-[0.7rem] font-medium text-classen-muted leading-[1.35]">Fehér
                                    struktúrált</span>
                            </div>
                            <div class="color-swatch w-27.5 text-center">
                                <div class="color-swatch-box relative w-27.5 h-18 rounded-lg shadow-sm overflow-hidden transition-all duration-350 hover:scale-[1.08] hover:shadow-md cursor-default"
                                    style="background:#8a7050"></div>
                                <span class="text-[0.7rem] font-medium text-classen-muted leading-[1.35]">Antik
                                    tölgy</span>
                            </div>
                            <div class="color-swatch w-27.5 text-center">
                                <div class="color-swatch-box relative w-27.5 h-18 rounded-lg shadow-sm overflow-hidden transition-all duration-350 hover:scale-[1.08] hover:shadow-md cursor-default"
                                    style="background:#5a3820"></div>
                                <span class="text-[0.7rem] font-medium text-classen-muted leading-[1.35]">Olasz
                                    dió</span>
                            </div>
                            <div class="color-swatch w-27.5 text-center">
                                <div class="color-swatch-box relative w-27.5 h-18 rounded-lg shadow-sm overflow-hidden transition-all duration-350 hover:scale-[1.08] hover:shadow-md cursor-default"
                                    style="background:#555048"></div>
                                <span class="text-[0.7rem] font-medium text-classen-muted leading-[1.35]">Grafit
                                    tölgy</span>
                            </div>
                            <div class="color-swatch w-27.5 text-center">
                                <div class="color-swatch-box relative w-27.5 h-18 rounded-lg shadow-sm overflow-hidden transition-all duration-350 hover:scale-[1.08] hover:shadow-md cursor-default"
                                    style="background:#c8baa8"></div>
                                <span class="text-[0.7rem] font-medium text-classen-muted leading-[1.35]">Kasmír</span>
                            </div>
                            <div class="color-swatch w-27.5 text-center">
                                <div class="color-swatch-box relative w-27.5 h-18 rounded-lg shadow-sm overflow-hidden transition-all duration-350 hover:scale-[1.08] hover:shadow-md cursor-default"
                                    style="background:#4a4a48"></div>
                                <span class="text-[0.7rem] font-medium text-classen-muted leading-[1.35]">Grafit RAL
                                    7024</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ===== CTA SECTION ===== -->
        <section class="cta-section py-30 bg-classen-dark relative overflow-hidden">
            <div class="max-w-7xl mx-auto px-8 text-center relative z-2 animate">
                <div class="section-label before:hidden">Teljes kínálat & Árak</div>
                <h2 class="section-title text-white">Keresi a konkrét árakat és méreteket?</h2>
                <p class="text-white/55 max-w-145 mx-auto text-[1.05rem] leading-[1.75]">Ezen az oldalon a márka
                    bemutatását látja. A webshopunkban minden részletet
                    megtalál:</p>
                <div class="cta-features grid grid-cols-4 gap-5 my-13">
                    <div
                        class="p-7 px-6 bg-white/4 border border-white/6 rounded-xl text-left transition-all duration-350 ease-in-out hover:bg-white/[0.07] hover:border-classen-yellow/20 hover:-translate-y-1">
                        <span class="text-[1.4rem] mb-3.5 block">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                width="28" height="28">
                                <line x1="12" y1="1" x2="12" y2="23" />
                                <path d="M17 5H9.5a3.5 3.5 0 000 7h5a3.5 3.5 0 010 7H6" />
                            </svg>
                        </span>
                        <h4 class="text-white font-semibold text-[0.92rem] mb-2">Aktuális árak</h4>
                        <p class="text-white/50 text-[0.82rem] leading-[1.6]">Mindig friss forintos árak,
                            kedvezményekkel</p>
                    </div>
                    <div
                        class="p-7 px-6 bg-white/4 border border-white/6 rounded-xl text-left transition-all duration-350 ease-in-out hover:bg-white/[0.07] hover:border-classen-yellow/20 hover:-translate-y-1">
                        <span class="text-[1.4rem] mb-3.5 block">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                width="28" height="28">
                                <path d="M2 3h6a4 4 0 014 4v14a3 3 0 00-3-3H2z" />
                                <path d="M22 3h-6a4 4 0 00-4 4v14a3 3 0 013-3h7z" />
                            </svg>
                        </span>
                        <h4 class="text-white font-semibold text-[0.92rem] mb-2">Letölthető katalógusok</h4>
                        <p class="text-white/50 text-[0.82rem] leading-[1.6]">Teljes termékkatalógusok PDF formátumban
                        </p>
                    </div>
                    <div
                        class="p-7 px-6 bg-white/4 border border-white/6 rounded-xl text-left transition-all duration-350 ease-in-out hover:bg-white/[0.07] hover:border-classen-yellow/20 hover:-translate-y-1">
                        <span class="text-[1.4rem] mb-3.5 block">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                width="28" height="28">
                                <path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z" />
                                <polyline points="14 2 14 8 20 8" />
                                <line x1="16" y1="13" x2="8" y2="13" />
                                <line x1="16" y1="17" x2="8" y2="17" />
                                <polyline points="10 9 9 9 8 9" />
                            </svg>
                        </span>
                        <h4 class="text-white font-semibold text-[0.92rem] mb-2">Azonnali árajánlat</h4>
                        <p class="text-white/50 text-[0.82rem] leading-[1.6]">Online árajánlatkérés egyedi igényeire
                        </p>
                    </div>
                    <div
                        class="p-7 px-6 bg-white/4 border border-white/6 rounded-xl text-left transition-all duration-350 ease-in-out hover:bg-white/[0.07] hover:border-classen-yellow/20 hover:-translate-y-1">
                        <span class="text-[1.4rem] mb-3.5 block">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                width="28" height="28">
                                <path
                                    d="M21 16V8a2 2 0 00-1-1.73l-7-4a2 2 0 00-2 0l-7 4A2 2 0 003 8v8a2 2 0 001 1.73l7 4a2 2 0 002 0l7-4A2 2 0 0021 16z" />
                                <polyline points="3.27 6.96 12 12.01 20.73 6.96" />
                                <line x1="12" y1="22.08" x2="12" y2="12" />
                            </svg>
                        </span>
                        <h4 class="text-white font-semibold text-[0.92rem] mb-2">Raktárkészlet</h4>
                        <p class="text-white/50 text-[0.82rem] leading-[1.6]">Valós idejű készlet információ</p>
                    </div>
                </div>
                <div class="flex gap-4 justify-center">
                    <a href="https://arcadia98.hu" target="_blank" class="btn btn-yellow btn-lg">
                        Tovább a teljes Classen kínálathoz
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                            <path d="M5 12h14M12 5l7 7-7 7" />
                        </svg>
                    </a>
                </div>
                <div class="mt-7 flex justify-center">
                    <div class="official-badge-dark">
                        <img loading="lazy" src="{{ Vite::asset('resources/images/CLASSEN-Group.png') }}"
                            alt="Classen">
                        <div class="official-badge-divider"></div>
                        <div class="official-badge-text">Hivatalos webshop<br><strong>Arcadia98.hu</strong></div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ===== WHY CLASSEN ===== -->
        <section class="py-30" id="miert">
            <div class="max-w-7xl mx-auto px-8">
                <div class="text-center mb-16 animate">
                    <div class="section-label before:hidden">Miért a Classen?</div>
                    <h2 class="section-title">A prémium beltéri ajtók szinonimája</h2>
                    <p class="section-subtitle mx-auto">A Classen több mint 30 éve az európai beltéri ajtópiac
                        meghatározó
                        szereplője.</p>
                </div>
                <div class="why-grid grid grid-cols-3 gap-10">
                    <div
                        class="text-center p-12 px-9 rounded-[20px] bg-classen-light transition-all duration-350 ease-in-out hover:shadow-lg hover:-translate-y-1.5 animate">
                        <div
                            class="w-19 h-19 mx-auto mb-7 bg-white rounded-[20px] flex items-center justify-center shadow-sm">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
                                width="32" height="32" class="text-classen-dark">
                                <path
                                    d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z" />
                            </svg>
                        </div>
                        <h3 class="font-heading text-[1.35rem] font-semibold mb-3.5">Design</h3>
                        <p class="text-[0.9rem] text-classen-muted leading-[1.75]">Nemzetközi trendeknek megfelelő,
                            díjnyertes formatervezés. Minden stílushoz – a modern
                            minimáltól a klasszikus eleganciáig.</p>
                    </div>
                    <div
                        class="text-center p-12 px-9 rounded-[20px] bg-classen-light transition-all duration-350 ease-in-out hover:shadow-lg hover:-translate-y-1.5 animate animate-delay-1">
                        <div
                            class="w-19 h-19 mx-auto mb-7 bg-white rounded-[20px] flex items-center justify-center shadow-sm">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
                                width="32" height="32" class="text-classen-dark">
                                <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z" />
                            </svg>
                        </div>
                        <h3 class="font-heading text-[1.35rem] font-semibold mb-3.5">Tartósság</h3>
                        <p class="text-[0.9rem] text-classen-muted leading-[1.75]">Hard Edge R profil és karcálló
                            felületek (Primo, Iridium, CPL). Akár a legnagyobb
                            igénybevételnek is ellenáll.</p>
                    </div>
                    <div
                        class="text-center p-12 px-9 rounded-[20px] bg-classen-light transition-all duration-350 ease-in-out hover:shadow-lg hover:-translate-y-1.5 animate animate-delay-2">
                        <div
                            class="w-19 h-19 mx-auto mb-7 bg-white rounded-[20px] flex items-center justify-center shadow-sm">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
                                width="32" height="32" class="text-classen-dark">
                                <polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2" />
                            </svg>
                        </div>
                        <h3 class="font-heading text-[1.35rem] font-semibold mb-3.5">Innováció</h3>
                        <p class="text-[0.9rem] text-classen-muted leading-[1.75]">Szabadalmaztatott megoldások és
                            környezetbarát gyártás. A legmodernebb technológiával
                            készülnek.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- ===== GALLERY ===== -->
        <section class="py-30 bg-classen-light" id="galeria">
            <div class="max-w-7xl mx-auto px-8">
                <div class="text-center mb-14 animate">
                    <div class="section-label before:hidden">Inspiráció</div>
                    <h2 class="section-title">Hogyan illeszkednek enteriőrjébe</h2>
                </div>
                <div class="gallery-grid grid grid-cols-4 gap-5">
                    <div
                        class="gallery-item group relative rounded-[20px] overflow-hidden h-90 cursor-pointer animate">
                        <img src="https://admin.classen.cegem360.hu/wp-content/uploads/2024/01/Linea-Premium-aranzacja.jpg"
                            alt="Modern nappali Classen ajtóval" loading="lazy"
                            class="w-full h-full object-cover transition-transform duration-700 ease-in-out group-hover:scale-110">
                        <div
                            class="absolute inset-0 bg-linear-to-t from-black/75 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-400 flex items-end p-7">
                            <div>
                                <h4 class="text-white text-[1.05rem] font-semibold">Modern nappali</h4>
                                <p class="text-white/65 text-[0.8rem] mt-1">Linea Premium – fehér lakkozott</p>
                            </div>
                        </div>
                    </div>
                    <div
                        class="gallery-item group relative rounded-[20px] overflow-hidden h-90 cursor-pointer animate animate-delay-1">
                        <img src="https://admin.classen.cegem360.hu/wp-content/uploads/2024/01/Classen-drzwi-Tosca-dab-antracyt.jpg"
                            alt="Elegáns előtér" loading="lazy"
                            class="w-full h-full object-cover transition-transform duration-700 ease-in-out group-hover:scale-110">
                        <div
                            class="absolute inset-0 bg-linear-to-t from-black/75 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-400 flex items-end p-7">
                            <div>
                                <h4 class="text-white text-[1.05rem] font-semibold">Elegáns előtér</h4>
                                <p class="text-white/65 text-[0.8rem] mt-1">Tosca – tölgy dekor</p>
                            </div>
                        </div>
                    </div>
                    <div
                        class="gallery-item group relative rounded-[20px] overflow-hidden h-90 cursor-pointer animate animate-delay-2">
                        <img src="https://admin.classen.cegem360.hu/wp-content/uploads/2024/01/Classen-Linea-Premium-Loft.jpg"
                            alt="Loft stílusú ajtó" loading="lazy"
                            class="w-full h-full object-cover transition-transform duration-700 ease-in-out group-hover:scale-110">
                        <div
                            class="absolute inset-0 bg-linear-to-t from-black/75 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-400 flex items-end p-7">
                            <div>
                                <h4 class="text-white text-[1.05rem] font-semibold">Loft stílus</h4>
                                <p class="text-white/65 text-[0.8rem] mt-1">Linea Premium Loft – fekete üvegbetét</p>
                            </div>
                        </div>
                    </div>
                    <div
                        class="gallery-item group relative rounded-[20px] overflow-hidden h-90 cursor-pointer animate animate-delay-3">
                        <img src="https://admin.classen.cegem360.hu/wp-content/uploads/2024/01/Salvano_aranz.jpg"
                            alt="Klasszikus elegancia" loading="lazy"
                            class="w-full h-full object-cover transition-transform duration-700 ease-in-out group-hover:scale-110">
                        <div
                            class="absolute inset-0 bg-linear-to-t from-black/75 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-400 flex items-end p-7">
                            <div>
                                <h4 class="text-white text-[1.05rem] font-semibold">Klasszikus elegancia</h4>
                                <p class="text-white/65 text-[0.8rem] mt-1">Salvano – időtlen megjelenés</p>
                            </div>
                        </div>
                    </div>
                </div>
                <p class="text-center mt-7 text-[0.85rem] text-classen-muted italic">A képeken látható modellek
                    rendelhetők az Arcadia 98-nál.</p>
            </div>
        </section>

        <!-- ===== B2B ===== -->
        <section class="b2b py-30 bg-linear-to-br from-classen-dark to-[#111] relative overflow-hidden">
            <div class="max-w-7xl mx-auto px-8">
                <div class="b2b-grid grid grid-cols-2 gap-20 items-center relative z-2">
                    <div class="animate">
                        <img loading="lazy" src="{{ Vite::asset('resources/images/CLASSEN-Group.png') }}"
                            alt="Classen" class="h-7.5 mb-5 logo-invert opacity-70">
                        <div class="section-label">B2B Partnerprogram</div>
                        <h2 class="section-title text-white">Legyen partnerünk!</h2>
                        <p class="text-white/60 text-[1.05rem] leading-[1.75] mb-10">Asztalosoknak, kivitelezőknek és
                            viszonteladóknak exkluzív partneri feltételeket kínálunk.
                            Építsen biztos alapokra több mint 20 év szakmai tapasztalatával!</p>
                    </div>
                    <div class="b2b-features grid grid-cols-2 gap-5 animate animate-delay-1">
                        <div
                            class="p-6 bg-white/4 border border-white/6 rounded-xl transition-all duration-350 ease-in-out hover:bg-white/[0.07] hover:border-classen-yellow/15">
                            <div class="mb-3">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    class="w-6 h-6 text-classen-yellow">
                                    <line x1="12" y1="1" x2="12" y2="23" />
                                    <path d="M17 5H9.5a3.5 3.5 0 000 7h5a3.5 3.5 0 010 7H6" />
                                </svg>
                            </div>
                            <h4 class="text-white text-[0.9rem] font-semibold mb-1.5">Partneri kedvezmények</h4>
                            <p class="text-white/45 text-[0.8rem] leading-[1.6]">Kiemelt árak rendszeres vásárlóknak
                            </p>
                        </div>
                        <div
                            class="p-6 bg-white/4 border border-white/6 rounded-xl transition-all duration-350 ease-in-out hover:bg-white/[0.07] hover:border-classen-yellow/15">
                            <div class="mb-3">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    class="w-6 h-6 text-classen-yellow">
                                    <path
                                        d="M21 16V8a2 2 0 00-1-1.73l-7-4a2 2 0 00-2 0l-7 4A2 2 0 003 8v8a2 2 0 001 1.73l7 4a2 2 0 002 0l7-4A2 2 0 0021 16z" />
                                </svg>
                            </div>
                            <h4 class="text-white text-[0.9rem] font-semibold mb-1.5">Folyamatos raktárkészlet</h4>
                            <p class="text-white/45 text-[0.8rem] leading-[1.6]">Azonnali elérhetőség a népszerű
                                modellekből</p>
                        </div>
                        <div
                            class="p-6 bg-white/4 border border-white/6 rounded-xl transition-all duration-350 ease-in-out hover:bg-white/[0.07] hover:border-classen-yellow/15">
                            <div class="mb-3">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    class="w-6 h-6 text-classen-yellow">
                                    <path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2" />
                                    <circle cx="12" cy="7" r="4" />
                                </svg>
                            </div>
                            <h4 class="text-white text-[0.9rem] font-semibold mb-1.5">Dedikált kapcsolattartó</h4>
                            <p class="text-white/45 text-[0.8rem] leading-[1.6]">Személyes ügyintézés, gyors válaszidő
                            </p>
                        </div>
                        <div
                            class="p-6 bg-white/4 border border-white/6 rounded-xl transition-all duration-350 ease-in-out hover:bg-white/[0.07] hover:border-classen-yellow/15">
                            <div class="mb-3">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    class="w-6 h-6 text-classen-yellow">
                                    <path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z" />
                                    <polyline points="9 22 9 12 15 12 15 22" />
                                </svg>
                            </div>
                            <h4 class="text-white text-[0.9rem] font-semibold mb-1.5">20+ év tapasztalat</h4>
                            <p class="text-white/45 text-[0.8rem] leading-[1.6]">Megbízható háttér és szakértelem</p>
                        </div>
                    </div>
                </div>
                <div class="text-center mt-14 relative z-2">
                    <a href="#kapcsolat" class="btn btn-yellow btn-lg">
                        Partneri ajánlatkérés
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                            <path d="M5 12h14M12 5l7 7-7 7" />
                        </svg>
                    </a>
                </div>
            </div>
        </section>

        <!-- ===== CONTACT ===== -->
        <section class="py-30" id="kapcsolat">
            <div class="max-w-7xl mx-auto px-8">
                <div class="text-center mb-16 animate">
                    <div class="section-label before:hidden">Kapcsolat</div>
                    <h2 class="section-title">Lépjen kapcsolatba velünk!</h2>
                    <p class="section-subtitle mx-auto">Szakértő kollégáink segítenek a megfelelő ajtó kiválasztásában.
                    </p>
                </div>
                <div class="contact-grid grid grid-cols-4 gap-6">
                    <div
                        class="text-center py-10 px-7 bg-classen-light rounded-[20px] transition-all duration-350 ease-in-out hover:-translate-y-1.5 hover:shadow-lg animate">
                        <div
                            class="w-15 h-15 mx-auto mb-5 bg-classen-yellow rounded-[20px] flex items-center justify-center">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                class="w-6 h-6 text-classen-dark">
                                <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z" />
                                <circle cx="12" cy="10" r="3" />
                            </svg>
                        </div>
                        <h4 class="text-base font-semibold mb-2.5">Bemutatóterem</h4>
                        <p class="text-[0.88rem] text-classen-muted leading-[1.65]">1194 Budapest,<br>Citroën utca 4.
                        </p>
                    </div>
                    <div
                        class="text-center py-10 px-7 bg-classen-light rounded-[20px] transition-all duration-350 ease-in-out hover:-translate-y-1.5 hover:shadow-lg animate animate-delay-1">
                        <div
                            class="w-15 h-15 mx-auto mb-5 bg-classen-yellow rounded-[20px] flex items-center justify-center">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                class="w-6 h-6 text-classen-dark">
                                <path
                                    d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07 19.5 19.5 0 01-6-6 19.79 19.79 0 01-3.07-8.67A2 2 0 014.11 2h3a2 2 0 012 1.72 12.84 12.84 0 00.7 2.81 2 2 0 01-.45 2.11L8.09 9.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45 12.84 12.84 0 002.81.7A2 2 0 0122 16.92z" />
                            </svg>
                        </div>
                        <h4 class="text-base font-semibold mb-2.5">Telefon</h4>
                        <p class="text-[0.88rem] text-classen-muted leading-[1.65]"><a href="tel:+3614303344"
                                class="text-classen-dark font-semibold hover:text-classen-green">+36 1 430 3344</a></p>
                        <small class="block mt-1 text-[0.78rem] text-classen-muted">H-P: 7:00-16:00, Szo:
                            9:00-13:00</small>
                    </div>
                    <div
                        class="text-center py-10 px-7 bg-classen-light rounded-[20px] transition-all duration-350 ease-in-out hover:-translate-y-1.5 hover:shadow-lg animate animate-delay-2">
                        <div
                            class="w-15 h-15 mx-auto mb-5 bg-classen-yellow rounded-[20px] flex items-center justify-center">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                class="w-6 h-6 text-classen-dark">
                                <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z" />
                                <polyline points="22,6 12,13 2,6" />
                            </svg>
                        </div>
                        <h4 class="text-base font-semibold mb-2.5">Email</h4>
                        <p class="text-[0.88rem] text-classen-muted leading-[1.65]"><a href="mailto:info@arcadia98.hu"
                                class="text-classen-dark font-semibold hover:text-classen-green">info@arcadia98.hu</a>
                        </p>
                        <small class="block mt-1 text-[0.78rem] text-classen-muted">24 órán belül válaszolunk</small>
                    </div>
                    <div
                        class="text-center py-10 px-7 bg-classen-light rounded-[20px] transition-all duration-350 ease-in-out hover:-translate-y-1.5 hover:shadow-lg animate animate-delay-3">
                        <div
                            class="w-15 h-15 mx-auto mb-5 bg-classen-yellow rounded-[20px] flex items-center justify-center">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                class="w-6 h-6 text-classen-dark">
                                <circle cx="12" cy="12" r="10" />
                                <line x1="2" y1="12" x2="22" y2="12" />
                                <path
                                    d="M12 2a15.3 15.3 0 014 10 15.3 15.3 0 01-4 10 15.3 15.3 0 01-4-10 15.3 15.3 0 014-10z" />
                            </svg>
                        </div>
                        <h4 class="text-base font-semibold mb-2.5">Webshop</h4>
                        <p class="text-[0.88rem] text-classen-muted leading-[1.65]"><a href="https://arcadia98.hu"
                                target="_blank"
                                class="text-classen-dark font-semibold hover:text-classen-green">arcadia98.hu</a></p>
                        <small class="block mt-1 text-[0.78rem] text-classen-muted">Teljes kínálat online</small>
                    </div>
                </div>
            </div>
        </section>

        <!-- ===== FOOTER CTA ===== -->
        <div class="py-18 bg-classen-yellow">
            <div class="footer-cta-inner max-w-7xl mx-auto px-8 text-center">
                <div class="mb-5">
                    <img loading="lazy" src="{{ Vite::asset('resources/images/CLASSEN-Group.png') }}" alt="Classen"
                        class="h-9 mx-auto">
                </div>
                <h2 class="font-heading font-semibold text-classen-dark mb-3.5"
                    style="font-size:clamp(1.5rem,3vw,2.4rem)">Ne halassza tovább – találja meg álmai ajtaját!</h2>
                <p class="text-classen-dark opacity-65 mb-8 text-base">A teljes Classen kínálat egy helyen, az Arcadia
                    98 Kft. – a hivatalos forgalmazó – garanciájával.</p>
                <div class="footer-cta-buttons flex gap-4 justify-center flex-wrap">
                    <a href="https://arcadia98.hu" target="_blank" class="btn btn-dark btn-lg">
                        Tovább az Arcadia98.hu-ra
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                            <path d="M5 12h14M12 5l7 7-7 7" />
                        </svg>
                    </a>
                    <a href="#kapcsolat"
                        class="btn btn-lg bg-classen-dark text-classen-yellow border-2 border-classen-dark">Kapcsolatfelvétel</a>
                </div>
            </div>
        </div>

        <!-- ===== FOOTER ===== -->
        <footer class="bg-classen-dark pt-11 pb-7 text-white/50">
            <div class="footer-inner max-w-7xl mx-auto px-8 flex items-center justify-between">
                <p class="text-[0.8rem]">&copy; {{ date('Y') }} Arcadia 98 Kft. – A Classen hivatalos magyarországi
                    forgalmazója</p>
                <div>
                    <img src="{{ Vite::asset('resources/images/CLASSEN-Group.png') }}" alt="Classen"
                        class="h-8 opacity-60 logo-invert">
                </div>
            </div>
        </footer>

    </body>

</html>
