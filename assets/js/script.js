// ===== DOM Elements =====
const navbar = document.getElementById('navbar');
const hamburger = document.getElementById('hamburger');
const navLinks = document.getElementById('navLinks');
const mobileOverlay = document.getElementById('mobileOverlay');
const allNavLinks = document.querySelectorAll('.nav-link');

// ===== Navbar Scroll Effect =====
let lastScroll = 0;
window.addEventListener('scroll', () => {
    const currentScroll = window.pageYOffset;
    if (currentScroll > 60) {
        navbar.classList.add('scrolled');
    } else {
        navbar.classList.remove('scrolled');
    }
    lastScroll = currentScroll;
});

// ===== Mobile Menu Toggle =====
function toggleMenu() {
    hamburger.classList.toggle('active');
    navLinks.classList.toggle('active');
    mobileOverlay.classList.toggle('active');
    document.body.style.overflow = navLinks.classList.contains('active') ? 'hidden' : '';
}

hamburger.addEventListener('click', toggleMenu);
mobileOverlay.addEventListener('click', toggleMenu);

allNavLinks.forEach(link => {
    link.addEventListener('click', (e) => {
        const dropdownParent = link.closest('.has-dropdown');
        if (dropdownParent && window.innerWidth <= 868) {
            e.preventDefault();
            dropdownParent.classList.toggle('open');
            return;
        }

        if (navLinks.classList.contains('active')) {
            toggleMenu();
        }
    });
});

// ===== Custom Cursor =====
const cursorDot  = document.getElementById('cursor-dot');
const cursorRing = document.getElementById('cursor-ring');
if (cursorDot && cursorRing) {
    let ringX = 0, ringY = 0;
    let dotX  = 0, dotY  = 0;
    let mouseX = 0, mouseY = 0;
    window.addEventListener('mousemove', (e) => {
        mouseX = e.clientX;
        mouseY = e.clientY;
    });
    function animCursor() {
        dotX += (mouseX - dotX) * 0.25;
        dotY += (mouseY - dotY) * 0.25;
        cursorDot.style.left = dotX + 'px';
        cursorDot.style.top  = dotY + 'px';
        ringX += (mouseX - ringX) * 0.1;
        ringY += (mouseY - ringY) * 0.1;
        cursorRing.style.left = ringX + 'px';
        cursorRing.style.top  = ringY + 'px';
        requestAnimationFrame(animCursor);
    }
    animCursor();
    document.addEventListener('mouseleave', () => {
        cursorDot.style.opacity = '0';
        cursorRing.style.opacity = '0';
    });
    document.addEventListener('mouseenter', () => {
        cursorDot.style.opacity = '1';
        cursorRing.style.opacity = '0.55';
    });
    const hoverTargets = 'a, button, .service-card, .price-card, .gallery-item, .contact-card, .feature, .nav-link, .logo, .floating-whatsapp';
    document.querySelectorAll(hoverTargets).forEach(el => {
        el.addEventListener('mouseenter', () => {
            document.body.classList.add('cursor-hover');
        });
        el.addEventListener('mouseleave', () => {
            document.body.classList.remove('cursor-hover');
        });
    });
}

// ===== Floating Button Logic =====
const floatingBtn = document.getElementById('floating-whatsapp');
if (floatingBtn) {
    const floatIcon = floatingBtn.querySelector('i');
    const floatTooltip = floatingBtn.querySelector('.floating-tooltip');
    const states = [
        { icon: 'fab fa-whatsapp', color: '#25D366', link: 'https://wa.me/994554092001', label: 'WhatsApp ile yazin' },
        { icon: 'fab fa-instagram', color: 'linear-gradient(45deg, #f09433 0%, #e6683c 25%, #dc2743 50%, #cc2366 75%, #bc1888 100%)', link: 'https://www.instagram.com/cicek_xali', label: 'Instagramda izleyin' }
    ];
    let currentState = 0;
    setInterval(() => {
        currentState = (currentState + 1) % states.length;
        const state = states[currentState];
        floatingBtn.style.opacity = '0';
        setTimeout(() => {
            floatIcon.className = state.icon;
            floatingBtn.style.background = state.color;
            floatingBtn.href = state.link;
            if (floatTooltip) floatTooltip.textContent = state.label;
            floatingBtn.style.opacity = '1';
        }, 800);
    }, 15000);
}
