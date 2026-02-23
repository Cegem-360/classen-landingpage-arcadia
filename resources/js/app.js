import "./../css/app.css";
import "./bootstrap";
import.meta.glob("../images/**/*.{png,jpg,jpeg,gif,svg,webp}", { eager: true });

function initHeaderScroll() {
    const header = document.getElementById("header");
    if (!header) return;

    window.addEventListener(
        "scroll",
        () => header.classList.toggle("scrolled", window.scrollY > 60),
        { passive: true },
    );
}

function initMobileNav() {
    const toggle = document.getElementById("mobileToggle");
    const nav = document.getElementById("mainNav");
    if (!toggle || !nav) return;

    toggle.addEventListener("click", () => {
        nav.classList.toggle("open");
        toggle.classList.toggle("active");
    });

    document.querySelectorAll(".main-nav a").forEach((link) => {
        link.addEventListener("click", () => {
            nav.classList.remove("open");
            toggle.classList.remove("active");
        });
    });
}

function initScrollAnimations() {
    const elements = document.querySelectorAll(".animate");
    if (!elements.length) return;

    const observer = new IntersectionObserver(
        (entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    entry.target.classList.add("visible");
                    observer.unobserve(entry.target);
                }
            });
        },
        { threshold: 0.08, rootMargin: "0px 0px -60px 0px" },
    );

    elements.forEach((el) => observer.observe(el));
}

function initSmoothScroll() {
    document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
        anchor.addEventListener("click", (e) => {
            e.preventDefault();
            const target = document.querySelector(anchor.getAttribute("href"));
            if (!target) return;

            const top =
                target.getBoundingClientRect().top + window.pageYOffset - 80;
            window.scrollTo({ top, behavior: "smooth" });
        });
    });
}

initHeaderScroll();
initMobileNav();
initScrollAnimations();
initSmoothScroll();
