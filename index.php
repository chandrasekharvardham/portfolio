<!DOCTYPE html>

<html class="dark" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Chandra Sekhar Vardham | Premium Digital Experiences</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500&amp;family=Sora:wght@600;700;800&amp;family=JetBrains+Mono:wght@500&amp;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet" />
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    "colors": {
                        "surface-bright": "#3a3939",
                        "on-tertiary": "#00344d",
                        "on-secondary-container": "#d6a9ff",
                        "surface-container-high": "#2a2a2a",
                        "surface-container": "#201f1f",
                        "secondary": "#ddb7ff",
                        "primary": "#c0c1ff",
                        "secondary-container": "#6f00be",
                        "on-primary": "#1000a9",
                        "surface-dim": "#131313",
                        "surface-variant": "#353534",
                        "primary-fixed": "#e1e0ff",
                        "surface-container-low": "#1c1b1b",
                        "on-surface": "#e5e2e1",
                        "tertiary": "#89ceff",
                        "on-primary-container": "#0d0096",
                        "on-secondary": "#490080",
                        "on-error": "#690005",
                        "outline": "#908fa0",
                        "error-container": "#93000a",
                        "surface-container-lowest": "#0e0e0e",
                        "tertiary-fixed-dim": "#89ceff",
                        "on-background": "#e5e2e1",
                        "tertiary-container": "#009ada",
                        "secondary-fixed": "#f0dbff",
                        "on-error-container": "#ffdad6",
                        "tertiary-fixed": "#c9e6ff",
                        "on-tertiary-fixed-variant": "#004c6e",
                        "primary-container": "#8083ff",
                        "on-secondary-fixed": "#2c0051",
                        "on-tertiary-fixed": "#001e2f",
                        "surface-container-highest": "#353534",
                        "on-primary-fixed-variant": "#2f2ebe",
                        "secondary-fixed-dim": "#ddb7ff",
                        "on-surface-variant": "#c7c4d7",
                        "outline-variant": "#464554",
                        "on-secondary-fixed-variant": "#6900b3",
                        "surface-tint": "#c0c1ff",
                        "inverse-primary": "#494bd6",
                        "inverse-on-surface": "#313030",
                        "background": "#131313",
                        "surface": "#131313",
                        "inverse-surface": "#e5e2e1",
                        "error": "#ffb4ab",
                        "primary-fixed-dim": "#c0c1ff",
                        "on-primary-fixed": "#07006c",
                        "on-tertiary-container": "#002d43"
                    },
                    "borderRadius": {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "full": "9999px"
                    },
                    "spacing": {
                        "unit": "8px",
                        "section-gap": "160px",
                        "gutter": "32px",
                        "margin-mobile": "24px",
                        "container-max": "1440px",
                        "margin-desktop": "80px"
                    },
                    "fontFamily": {
                        "body-lg": ["Inter"],
                        "body-md": ["Inter"],
                        "headline-lg": ["Sora"],
                        "label-caps": ["JetBrains Mono"],
                        "display-xl": ["Sora"],
                        "display-xl-mobile": ["Sora"],
                        "headline-lg-mobile": ["Sora"]
                    },
                    "fontSize": {
                        "body-lg": ["18px", {
                            "lineHeight": "1.6",
                            "letterSpacing": "0em",
                            "fontWeight": "400"
                        }],
                        "body-md": ["16px", {
                            "lineHeight": "1.6",
                            "letterSpacing": "0em",
                            "fontWeight": "400"
                        }],
                        "headline-lg": ["48px", {
                            "lineHeight": "1.2",
                            "letterSpacing": "-0.02em",
                            "fontWeight": "600"
                        }],
                        "label-caps": ["12px", {
                            "lineHeight": "1.0",
                            "letterSpacing": "0.1em",
                            "fontWeight": "500"
                        }],
                        "display-xl": ["80px", {
                            "lineHeight": "1.1",
                            "letterSpacing": "-0.04em",
                            "fontWeight": "700"
                        }],
                        "display-xl-mobile": ["48px", {
                            "lineHeight": "1.1",
                            "letterSpacing": "-0.02em",
                            "fontWeight": "700"
                        }],
                        "headline-lg-mobile": ["32px", {
                            "lineHeight": "1.2",
                            "letterSpacing": "-0.02em",
                            "fontWeight": "600"
                        }]
                    }
                },
            },
        }
    </script>
    <style>
        body {
            background-color: #0e0e0e;
            color: #e5e2e1;
            overflow-x: hidden;
            scrollbar-width: none;
        }

        body::-webkit-scrollbar {
            display: none;
        }

        .glass {
            background: rgba(255, 255, 255, 0.03);
            backdrop-filter: blur(24px);
            border: 1px solid rgba(255, 255, 255, 0.1);
        }

        .glass-hover:hover {
            background: rgba(255, 255, 255, 0.06);
            border-color: rgba(192, 193, 255, 0.4);
        }

        .text-gradient {
            background: linear-gradient(to right, #c0c1ff, #ddb7ff);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        /* Scroll Reveal Utility */
        .reveal {
            opacity: 0;
            transform: translateY(40px);
            transition: opacity 1s cubic-bezier(0.2, 0.8, 0.2, 1), transform 1s cubic-bezier(0.2, 0.8, 0.2, 1);
        }

        .reveal.active {
            opacity: 1;
            transform: translateY(0);
        }

        .particle {
            position: absolute;
            background: #c0c1ff;
            border-radius: 50%;
            pointer-events: none;
            opacity: 0.2;
        }

        .portrait-glow {
            box-shadow: 0 0 80px 10px rgba(192, 193, 255, 0.15);
        }

        .project-card {
            transition: transform 0.6s cubic-bezier(0.2, 0.8, 0.2, 1);
        }

        .project-card:hover {
            transform: scale(1.02);
        }

        /* Custom Cursor */
        #custom-cursor {
            width: 20px;
            height: 20px;
            background: #c0c1ff;
            border-radius: 50%;
            position: fixed;
            top: 0;
            left: 0;
            pointer-events: none;
            z-index: 9999;
            transition: width 0.3s, height 0.3s, background 0.3s, opacity 0.3s;
            mix-blend-mode: difference;
            opacity: 0;
        }

        /* Interactive Glow Effect */
        .hero-glow {
            position: absolute;
            width: 600px;
            height: 600px;
            background: radial-gradient(circle, rgba(192, 193, 255, 0.08) 0%, transparent 70%);
            border-radius: 50%;
            pointer-events: none;
            z-index: 1;
            transform: translate(-50%, -50%);
            transition: opacity 0.5s;
        }

        /* Lenis/Smooth Scroll Prep */
        html.lenis {
            height: auto;
        }

        .lenis.lenis-smooth {
            scroll-behavior: auto;
        }

        .lenis.lenis-smooth [data-lenis-prevent] {
            overscroll-behavior: contain;
        }

        .lenis.lenis-stopped {
            overflow: hidden;
        }

        @media (prefers-reduced-motion: reduce) {

            .reveal,
            .project-card,
            #custom-cursor {
                transition: none !important;
                transform: none !important;
                opacity: 1 !important;
            }

            #custom-cursor {
                display: none;
            }
        }
    </style>
</head>

<body class="font-body-md">
    <!-- Custom Cursor -->
    <div id="custom-cursor"></div>
    <!-- Top Navigation -->
    <header class="fixed top-0 left-0 right-0 z-50 flex items-center justify-between px-8 py-3 max-w-5xl mx-auto rounded-full mt-2 bg-white/5 backdrop-blur-2xl border border-white/10 shadow-2xl reveal-entrance" style="opacity: 0;">
        <div class="font-display-xl text-body-lg font-bold tracking-tighter text-on-surface cursor-interactive">
            <img src="assets/img/csv.png" width="20%" alt="logo">
        </div>
        <nav class="hidden md:flex items-center gap-8">
            <a class="font-label-caps text-label-caps uppercase tracking-widest text-primary font-bold border-b border-primary pb-1 cursor-interactive" href="#work">Work</a>
            <a class="font-label-caps text-label-caps uppercase tracking-widest text-on-surface-variant hover:text-on-surface transition-colors cursor-interactive" href="#services">Services</a>
            <a class="font-label-caps text-label-caps uppercase tracking-widest text-on-surface-variant hover:text-on-surface transition-colors cursor-interactive" href="#process">Process</a>
            <a class="font-label-caps text-label-caps uppercase tracking-widest text-on-surface-variant hover:text-on-surface transition-colors cursor-interactive" href="#story">Story</a>
        </nav>
        <button class="font-label-caps text-label-caps uppercase tracking-widest px-6 py-2 rounded-full bg-white/5 border border-white/10 hover:bg-white/10 transition-all duration-300 scale-100 active:scale-95 cursor-interactive">
            Connect
        </button>
    </header>
    <main>
        <!-- Hero Section -->
        <section class="relative min-h-screen flex items-center pt-24 overflow-hidden px-margin-mobile md:px-margin-desktop">
            <div class="hero-glow" id="hero-glow"></div>
            <div class="absolute inset-0 z-0" id="hero-particles"></div>
            <div class="relative z-10 grid grid-cols-1 lg:grid-cols-2 gap-gutter items-center max-w-container-max mx-auto w-full">
                <div class="hero-content">
                    <h1 class="font-display-xl-mobile md:font-display-xl text-display-xl-mobile md:text-display-xl mb-6 reveal-entrance" style="opacity: 0;">
                        I Design &amp; Develop <span class="text-gradient">Premium</span> Digital Experiences
                    </h1>
                    <p class="font-body-lg text-body-lg text-on-surface-variant max-w-xl mb-10 reveal-entrance" style="opacity: 0;">
                        Crafting bespoke, high-performance websites for visionary brands. Where technical precision meets cinematic storytelling.
                    </p>
                    <div class="flex flex-wrap gap-4 reveal-entrance" style="opacity: 0;">
                        <button class="magnetic-btn px-8 py-4 rounded-full bg-gradient-to-r from-[#6f00be] to-[#8083ff] text-white font-bold text-body-md transition-transform cursor-interactive">
                            View Work
                        </button>
                        <button class="magnetic-btn px-8 py-4 rounded-full border border-white/20 glass-hover text-on-surface font-bold text-body-md transition-transform cursor-interactive">
                            Hire Me
                        </button>
                    </div>
                </div>
                <div class="relative flex justify-center lg:justify-end reveal-entrance" style="opacity: 0;">
                    <div class="relative w-72 h-96 md:w-96 md:h-[500px] rounded-[2rem] overflow-hidden portrait-glow border border-white/10">
                        <img class="w-full h-full object-cover grayscale hover:grayscale-0 transition-all duration-700" data-alt="Professional portrait" src="assets/img/pic.png" />
                    </div>
                    <div class="absolute -bottom-10 -right-10 w-40 h-40 bg-primary/20 blur-3xl rounded-full"></div>
                </div>
            </div>
        </section>
        <!-- About Section -->
        <section class="py-section-gap px-margin-mobile md:px-margin-desktop" id="story">
            <div class="max-w-container-max mx-auto grid grid-cols-1 lg:grid-cols-12 gap-gutter">
                <div class="lg:col-span-5 reveal">
                    <span class="font-label-caps text-label-caps text-primary tracking-[0.3em] uppercase mb-4 block">The Narrative</span>
                    <h2 class="font-headline-lg-mobile md:font-headline-lg text-headline-lg-mobile md:text-headline-lg mb-8">Minimalist in Form, <br />Complex in Function.</h2>
                    <div class="space-y-6 text-on-surface-variant font-body-lg">
                        <p>I am Chandra Sekhar Vardham, a digital architect specializing in the intersection of aesthetics and engineering. My approach is rooted in the philosophy that luxury is found in the details others overlook.</p>
                        <p>With over 6 years of experience, I've partnered with global founders to translate complex visions into seamless, high-converting digital products.</p>
                    </div>
                </div>
                <div class="lg:col-span-6 lg:col-start-7 flex flex-col justify-between space-y-12 reveal">
                    <div class="grid grid-cols-2 gap-gutter">
                        <div>
                            <div class="text-[64px] font-display-xl text-primary leading-none mb-2">06+</div>
                            <div class="font-label-caps text-label-caps uppercase text-on-surface-variant tracking-widest">Years of Craft</div>
                        </div>
                        <div>
                            <div class="text-[64px] font-display-xl text-secondary leading-none mb-2">120+</div>
                            <div class="font-label-caps text-label-caps uppercase text-on-surface-variant tracking-widest">Global Projects</div>
                        </div>
                    </div>
                    <div class="glass p-8 rounded-xl border-white/5 space-y-6">
                        <div class="flex items-start gap-6 border-l-2 border-primary/30 pl-6 pb-6">
                            <div>
                                <h4 class="font-body-lg font-bold text-on-surface">Senior Developer</h4>
                                <p class="text-on-surface-variant">LuxeDigital Agency • 2021—Present</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-6 border-l-2 border-white/10 pl-6">
                            <div>
                                <h4 class="font-body-lg font-bold text-on-surface">Creative Designer</h4>
                                <p class="text-on-surface-variant">Freelance Collective • 2018—2021</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Services Grid -->
        <section class="py-section-gap px-margin-mobile md:px-margin-desktop bg-surface-container-lowest/50" id="services">
            <div class="max-w-container-max mx-auto">
                <div class="mb-20 reveal">
                    <span class="font-label-caps text-label-caps text-primary tracking-[0.3em] uppercase mb-4 block">Expertise</span>
                    <h2 class="font-headline-lg-mobile md:font-headline-lg text-headline-lg-mobile md:text-headline-lg">Digital Solutions for <br />Modern Founders</h2>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <div class="glass glass-hover p-10 rounded-2xl transition-all duration-500 reveal cursor-interactive">
                        <span class="material-symbols-outlined text-primary text-4xl mb-6">web</span>
                        <h3 class="font-headline-lg-mobile text-xl font-bold mb-4">Custom Website Design</h3>
                        <p class="text-on-surface-variant font-body-md">Unique visual identities tailored to your brand's essence, focusing on high-end typography and layouts.</p>
                    </div>
                    <div class="glass glass-hover p-10 rounded-2xl transition-all duration-500 reveal cursor-interactive">
                        <span class="material-symbols-outlined text-primary text-4xl mb-6">code</span>
                        <h3 class="font-headline-lg-mobile text-xl font-bold mb-4">Frontend Development</h3>
                        <p class="text-on-surface-variant font-body-md">Ultra-performant, SEO-optimized code using React, Next.js, and modern CSS architectures.</p>
                    </div>
                    <div class="glass glass-hover p-10 rounded-2xl transition-all duration-500 reveal cursor-interactive">
                        <span class="material-symbols-outlined text-primary text-4xl mb-6">shopping_bag</span>
                        <h3 class="font-headline-lg-mobile text-xl font-bold mb-4">Shopify Development</h3>
                        <p class="text-on-surface-variant font-body-md">High-conversion e-commerce experiences that blend seamless UX with robust backend logic.</p>
                    </div>
                    <div class="glass glass-hover p-10 rounded-2xl transition-all duration-500 reveal cursor-interactive">
                        <span class="material-symbols-outlined text-primary text-4xl mb-6">layers</span>
                        <h3 class="font-headline-lg-mobile text-xl font-bold mb-4">WordPress Solutions</h3>
                        <p class="text-on-surface-variant font-body-md">Headless WordPress or custom theme development for scalable content management.</p>
                    </div>
                    <div class="glass glass-hover p-10 rounded-2xl transition-all duration-500 reveal cursor-interactive">
                        <span class="material-symbols-outlined text-primary text-4xl mb-6">bolt</span>
                        <h3 class="font-headline-lg-mobile text-xl font-bold mb-4">Landing Page Design</h3>
                        <p class="text-on-surface-variant font-body-md">Single-purpose pages optimized for maximum ROI and campaign conversion.</p>
                    </div>
                    <div class="glass glass-hover p-10 rounded-2xl transition-all duration-500 reveal cursor-interactive">
                        <span class="material-symbols-outlined text-primary text-4xl mb-6">auto_fix_high</span>
                        <h3 class="font-headline-lg-mobile text-xl font-bold mb-4">Website Redesign</h3>
                        <p class="text-on-surface-variant font-body-md">Modernizing legacy sites with contemporary aesthetics and modern tech stacks.</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Projects Section -->
        <section class="py-section-gap px-margin-mobile md:px-margin-desktop" id="work">
            <div class="max-w-container-max mx-auto">
                <div class="flex flex-col md:flex-row justify-between items-end mb-20 gap-8 reveal">
                    <div>
                        <span class="font-label-caps text-label-caps text-secondary tracking-[0.3em] uppercase mb-4 block">Case Studies</span>
                        <h2 class="font-headline-lg-mobile md:font-headline-lg text-headline-lg-mobile md:text-headline-lg">Featured Works</h2>
                    </div>

                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
                    <div class="group project-card cursor-interactive reveal">
                        <div class="relative aspect-[4/3] overflow-hidden rounded-3xl border border-white/5 bg-surface-container-low mb-6">
                            <img class="project-img w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" src="assets/img/lexascendas.jpg" alt="Lexascendas Project">
                            <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center backdrop-blur-sm">
                                <a
                                    href="https://lexascendas.com/"
                                    target="_blank"
                                    rel="noopener noreferrer">
                                    <button class="px-8 py-3 rounded-full bg-white text-black font-bold hover:scale-105 transition">
                                        View Live
                                    </button>
                                </a>
                            </div>
                        </div>
                        <div class="flex justify-between items-start">
                            <div>
                                <span class="font-label-caps text-label-caps text-on-surface-variant uppercase mb-2 block">Premium Law firm Website</span>
                                <h3 class="font-headline-lg-mobile text-2xl font-bold">Lexascendas</h3>
                            </div>
                            <span class="material-symbols-outlined text-primary opacity-0 group-hover:opacity-100 transition-opacity">arrow_outward</span>
                        </div>
                    </div>
                    <div class="group project-card cursor-interactive mt-0 md:mt-24 reveal">
                        <div class="relative aspect-[4/3] overflow-hidden rounded-3xl border border-white/5 bg-surface-container-low mb-6">
                            <img class="project-img w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" src="assets/img/nexus-analytics.jpg" alt="Nexus Analytics Project">
                            <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center backdrop-blur-sm">
                                <a
                                    href="#"
                                    target="_blank"
                                    rel="noopener noreferrer">
                                    <button class="px-8 py-3 rounded-full bg-white text-black font-bold hover:scale-105 transition">
                                        View Live
                                    </button>
                                </a>
                            </div>
                        </div>
                        <div class="flex justify-between items-start">
                            <div>
                                <span class="font-label-caps text-label-caps text-on-surface-variant uppercase mb-2 block">Lorem ipsum</span>
                                <h3 class="font-headline-lg-mobile text-2xl font-bold">Lorem ipsum</h3>
                            </div>
                            <span class="material-symbols-outlined text-primary opacity-0 group-hover:opacity-100 transition-opacity">arrow_outward</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Skills Section -->
        <section class="py-section-gap px-margin-mobile md:px-margin-desktop overflow-hidden">
            <div class="max-w-container-max mx-auto text-center mb-20 reveal">
                <span class="font-label-caps text-label-caps text-primary tracking-[0.3em] uppercase mb-4 block">Tech Stack</span>
                <h2 class="font-headline-lg-mobile md:font-headline-lg text-headline-lg-mobile md:text-headline-lg">Forging with High-End Tools</h2>
            </div>
            <div class="flex flex-wrap justify-center gap-6 max-w-4xl mx-auto">
                <div class="skill-pill glass px-8 py-4 rounded-full font-label-caps text-label-caps hover:text-primary transition-all cursor-interactive reveal">UI/UX DESIGN</div>
                <div class="skill-pill glass px-8 py-4 rounded-full font-label-caps text-label-caps hover:text-primary transition-all cursor-interactive reveal">NEXT.JS</div>
                <div class="skill-pill glass px-8 py-4 rounded-full font-label-caps text-label-caps hover:text-primary transition-all cursor-interactive reveal">REACT</div>
                <div class="skill-pill glass px-8 py-4 rounded-full font-label-caps text-label-caps hover:text-primary transition-all cursor-interactive reveal">TAILWIND CSS</div>
                <div class="skill-pill glass px-8 py-4 rounded-full font-label-caps text-label-caps hover:text-primary transition-all cursor-interactive reveal">FRAMER MOTION</div>
                <div class="skill-pill glass px-8 py-4 rounded-full font-label-caps text-label-caps hover:text-primary transition-all cursor-interactive reveal">GSAP</div>
                <div class="skill-pill glass px-8 py-4 rounded-full font-label-caps text-label-caps hover:text-primary transition-all cursor-interactive reveal">SHOPIFY LIQUID</div>
                <div class="skill-pill glass px-8 py-4 rounded-full font-label-caps text-label-caps hover:text-primary transition-all cursor-interactive reveal">TYPESCRIPT</div>
                <div class="skill-pill glass px-8 py-4 rounded-full font-label-caps text-label-caps hover:text-primary transition-all cursor-interactive reveal">WORDPRESS</div>
            </div>
        </section>
        <!-- Process Section -->
        <section class="py-section-gap px-margin-mobile md:px-margin-desktop bg-surface-container-low/30" id="process">
            <div class="max-w-container-max mx-auto">
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-gutter">
                    <div class="lg:col-span-4 reveal">
                        <span class="font-label-caps text-label-caps text-primary tracking-[0.3em] uppercase mb-4 block">Workflow</span>
                        <h2 class="font-headline-lg-mobile md:font-headline-lg text-headline-lg-mobile md:text-headline-lg mb-8">From Zero to <br />Iconic</h2>
                        <p class="text-on-surface-variant font-body-lg">A structured methodology designed to ensure every pixel serves a purpose and every interaction delights the user.</p>
                    </div>
                    <div class="lg:col-span-7 lg:col-start-6 space-y-12">
                        <div class="flex gap-10 reveal">
                            <div class="font-display-xl text-primary/20 text-4xl leading-none mt-2">01</div>
                            <div>
                                <h4 class="font-body-lg font-bold text-on-surface mb-2">Discovery &amp; Strategy</h4>
                                <p class="text-on-surface-variant font-body-md">Deep diving into your brand goals, target audience, and market positioning to build a rock-solid blueprint.</p>
                            </div>
                        </div>
                        <div class="flex gap-10 reveal">
                            <div class="font-display-xl text-primary/20 text-4xl leading-none mt-2">02</div>
                            <div>
                                <h4 class="font-body-lg font-bold text-on-surface mb-2">Design Concept</h4>
                                <p class="text-on-surface-variant font-body-md">Visual explorations focusing on high-fidelity prototypes that define the aesthetic narrative.</p>
                            </div>
                        </div>
                        <div class="flex gap-10 reveal">
                            <div class="font-display-xl text-primary/20 text-4xl leading-none mt-2">03</div>
                            <div>
                                <h4 class="font-body-lg font-bold text-on-surface mb-2">Technical Development</h4>
                                <p class="text-on-surface-variant font-body-md">Translating designs into clean, scalable code with integrated animations and micro-interactions.</p>
                            </div>
                        </div>
                        <div class="flex gap-10 reveal">
                            <div class="font-display-xl text-primary/20 text-4xl leading-none mt-2">04</div>
                            <div>
                                <h4 class="font-body-lg font-bold text-on-surface mb-2">Launch &amp; Scale</h4>
                                <p class="text-on-surface-variant font-body-md">Seamless deployment followed by optimization for performance and conversion tracking.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Testimonials -->
        <!-- <section class="py-section-gap px-margin-mobile md:px-margin-desktop overflow-hidden">
<div class="max-w-container-max mx-auto text-center mb-20 reveal">
<span class="font-label-caps text-label-caps text-secondary tracking-[0.3em] uppercase mb-4 block">Praise</span>
<h2 class="font-headline-lg-mobile md:font-headline-lg text-headline-lg-mobile md:text-headline-lg">Client Voices</h2>
</div>
<div class="flex flex-col md:flex-row gap-8 items-center justify-center max-w-6xl mx-auto">
<div class="glass p-10 rounded-3xl max-w-md reveal">
<div class="flex gap-1 mb-6">
<span class="material-symbols-outlined text-secondary" style="font-variation-settings: 'FILL' 1;">star</span>
<span class="material-symbols-outlined text-secondary" style="font-variation-settings: 'FILL' 1;">star</span>
<span class="material-symbols-outlined text-secondary" style="font-variation-settings: 'FILL' 1;">star</span>
<span class="material-symbols-outlined text-secondary" style="font-variation-settings: 'FILL' 1;">star</span>
<span class="material-symbols-outlined text-secondary" style="font-variation-settings: 'FILL' 1;">star</span>
</div>
<p class="font-body-lg italic text-on-surface mb-8">"Chandra transformed our vision into a digital masterpiece. The attention to detail and performance optimization is unmatched in the industry."</p>
<div class="flex items-center gap-4">
<div class="w-12 h-12 rounded-full bg-surface-container-high border border-white/10"></div>
<div>
<div class="font-bold">Julian Vose</div>
<div class="text-sm text-on-surface-variant">CEO, Aura Watches</div>
</div>
</div>
</div>
<div class="glass p-10 rounded-3xl max-w-md scale-110 border-primary/20 z-10 reveal">
<div class="flex gap-1 mb-6">
<span class="material-symbols-outlined text-primary" style="font-variation-settings: 'FILL' 1;">star</span>
<span class="material-symbols-outlined text-primary" style="font-variation-settings: 'FILL' 1;">star</span>
<span class="material-symbols-outlined text-primary" style="font-variation-settings: 'FILL' 1;">star</span>
<span class="material-symbols-outlined text-primary" style="font-variation-settings: 'FILL' 1;">star</span>
<span class="material-symbols-outlined text-primary" style="font-variation-settings: 'FILL' 1;">star</span>
</div>
<p class="font-body-lg italic text-on-surface mb-8">"His ability to blend artistic flair with technical rigor is rare. Our conversion rates increased by 40% after the redesign."</p>
<div class="flex items-center gap-4">
<div class="w-12 h-12 rounded-full bg-surface-container-high border border-white/10"></div>
<div>
<div class="font-bold">Elena Rossi</div>
<div class="text-sm text-on-surface-variant">Design Lead, Studio Nova</div>
</div>
</div>
</div>
</div>
</section> -->
        <!-- Contact Section -->
        <section class="py-section-gap px-margin-mobile md:px-margin-desktop bg-gradient-to-t from-primary/5 to-transparent" id="contact">
            <div class="max-w-4xl mx-auto text-center reveal">
                <span class="font-label-caps text-label-caps text-primary tracking-[0.3em] uppercase mb-8 block">Ready to Begin?</span>
                <h2 class="font-display-xl-mobile md:font-display-xl text-display-xl-mobile md:text-display-xl mb-12">Let's Create Something <span class="text-gradient">Legendary</span>.</h2>
                <a class="group relative inline-block mb-16 cursor-interactive" href="mailto:vardham09@gmail.com">
                    <span class="font-headline-lg-mobile md:font-headline-lg text-headline-lg-mobile md:text-headline-lg underline underline-offset-8 decoration-white/10 hover:decoration-primary transition-all duration-500">vardham09@gmail.com</span>
                </a>
                <div class="flex flex-col md:flex-row items-center justify-center gap-12 mt-8">
                    <div class="flex items-center gap-8">
                        <a class="group flex flex-col items-center gap-2 cursor-interactive" href="#"><span class="font-label-caps text-label-caps text-on-surface-variant group-hover:text-primary transition-colors">LinkedIn</span></a>
                        <a class="group flex flex-col items-center gap-2 cursor-interactive" href="#"><span class="font-label-caps text-label-caps text-on-surface-variant group-hover:text-primary transition-colors">GitHub</span></a>
                        <a class="group flex flex-col items-center gap-2 cursor-interactive" href="#"><span class="font-label-caps text-label-caps text-on-surface-variant group-hover:text-primary transition-colors">Dribbble</span></a>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer class="w-full py-20 px-margin-desktop flex flex-col md:flex-row justify-between items-center gap-unit border-t border-white/5 bg-surface-container-lowest">
        <div class="font-display-xl text-headline-lg-mobile text-on-surface font-bold tracking-tighter">C.S.V.</div>
        <div class="font-body-md text-body-md text-on-surface-variant text-center md:text-left">© 2024 Chandra Sekhar Vardham. All rights reserved.</div>
        <div class="flex items-center gap-8">
            <a class="text-secondary font-body-md hover:text-primary transition-colors duration-300 opacity-80 hover:opacity-100 cursor-interactive" href="#">Privacy Policy</a>
            <a class="text-secondary font-body-md hover:text-primary transition-colors duration-300 opacity-80 hover:opacity-100 cursor-interactive" href="#">Terms of Service</a>
        </div>
    </footer>
    <script src="https://unpkg.com/lenis@1.0.45/dist/lenis.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
    <script>
        // 1. Smooth Scroll (Lenis)
        const lenis = new Lenis({
            duration: 1.2,
            easing: (t) => Math.min(1, 1.001 - Math.pow(2, -10 * t)),
            orientation: 'vertical',
            smoothWheel: true,
        });

        function raf(time) {
            lenis.raf(time);
            requestAnimationFrame(raf);
        }
        requestAnimationFrame(raf);

        // 2. Custom Cursor
        const cursor = document.getElementById('custom-cursor');
        let cursorX = 0,
            cursorY = 0;
        let targetX = 0,
            targetY = 0;

        document.addEventListener('mousemove', (e) => {
            targetX = e.clientX;
            targetY = e.clientY;
            if (cursor.style.opacity === '0') cursor.style.opacity = '1';
        });

        const animateCursor = () => {
            cursorX += (targetX - cursorX) * 0.15;
            cursorY += (targetY - cursorY) * 0.15;
            cursor.style.transform = `translate(${cursorX - 10}px, ${cursorY - 10}px)`;
            requestAnimationFrame(animateCursor);
        };
        animateCursor();

        const interactives = document.querySelectorAll('.cursor-interactive, button, a, .project-card, .skill-pill');
        interactives.forEach(el => {
            el.addEventListener('mouseenter', () => {
                cursor.style.width = '60px';
                cursor.style.height = '60px';
                cursor.style.background = 'rgba(192, 193, 255, 0.3)';
                cursor.style.transform += ' translate(-20px, -20px)';
            });
            el.addEventListener('mouseleave', () => {
                cursor.style.width = '20px';
                cursor.style.height = '20px';
                cursor.style.background = '#c0c1ff';
            });
        });

        // 3. Entrance Animations (GSAP)
        window.addEventListener('load', () => {
            const tl = gsap.timeline();
            tl.to('.reveal-entrance', {
                opacity: 1,
                y: 0,
                duration: 1.2,
                stagger: 0.2,
                ease: "power4.out",
                delay: 0.3
            });
        });

        // 4. Scroll Reveal (Intersection Observer)
        const observerOptions = {
            threshold: 0.15
        };
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('active');
                }
            });
        }, observerOptions);

        document.querySelectorAll('.reveal').forEach(el => observer.observe(el));

        // 5. Hero Glow Interaction
        const heroGlow = document.getElementById('hero-glow');
        document.addEventListener('mousemove', (e) => {
            const x = e.clientX;
            const y = e.clientY;
            heroGlow.style.left = `${x}px`;
            heroGlow.style.top = `${y}px`;
        });

        // 6. Magnetic Pull & Hover Interactions
        const magneticBtns = document.querySelectorAll('.magnetic-btn');
        magneticBtns.forEach(btn => {
            btn.addEventListener('mousemove', (e) => {
                const rect = btn.getBoundingClientRect();
                const x = e.clientX - rect.left - rect.width / 2;
                const y = e.clientY - rect.top - rect.height / 2;
                gsap.to(btn, {
                    x: x * 0.3,
                    y: y * 0.3,
                    scale: 1.05,
                    duration: 0.3,
                    ease: "power2.out"
                });
            });
            btn.addEventListener('mouseleave', () => {
                gsap.to(btn, {
                    x: 0,
                    y: 0,
                    scale: 1,
                    duration: 0.5,
                    ease: "elastic.out(1, 0.3)"
                });
            });
        });

        // Particles Logic
        const particleContainer = document.getElementById('hero-particles');
        const particleCount = 30;
        for (let i = 0; i < particleCount; i++) {
            const particle = document.createElement('div');
            particle.className = 'particle';
            const size = Math.random() * 3 + 1;
            particle.style.width = `${size}px`;
            particle.style.height = `${size}px`;
            particle.style.left = `${Math.random() * 100}%`;
            particle.style.top = `${Math.random() * 100}%`;
            particleContainer.appendChild(particle);
            gsap.to(particle, {
                x: "random(-40, 40)",
                y: "random(-40, 40)",
                duration: "random(3, 6)",
                repeat: -1,
                yoyo: true,
                ease: "sine.inOut"
            });
        }
    </script>
</body>

</html>