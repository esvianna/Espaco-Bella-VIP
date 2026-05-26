document.addEventListener('DOMContentLoaded', function() {
    // 1. Sticky Header & Glassmorphism on Scroll
    const header = document.getElementById('masthead');
    if (header) {
        window.addEventListener('scroll', function() {
            if (window.scrollY > 50) {
                header.classList.add('glass-header');
                // Substituição segura de classes de padding para transição suave
                if (header.classList.contains('py-6')) {
                    header.classList.replace('py-6', 'py-3');
                } else if (!header.classList.contains('py-3')) {
                    header.classList.add('py-3');
                }
            } else {
                header.classList.remove('glass-header');
                if (header.classList.contains('py-3')) {
                    header.classList.replace('py-3', 'py-6');
                } else if (!header.classList.contains('py-6')) {
                    header.classList.add('py-6');
                }
            }
        });
    }

    // 2. Mobile Menu Toggle (Full Screen Overlay)
    const mobileBtn = document.getElementById('mobile-menu-btn');
    const mobileClose = document.getElementById('mobile-menu-close');
    const mobileMenu = document.getElementById('mobile-menu');
    const mobileLinks = document.querySelectorAll('.mobile-link');
    
    let menuOpen = false;
    
    function toggleMenu(e) {
        if (e) {
            e.preventDefault();
        }
        menuOpen = !menuOpen;
        if (mobileMenu) {
            if (menuOpen) {
                mobileMenu.style.opacity = '1';
                mobileMenu.style.pointerEvents = 'auto';
                document.body.style.overflow = 'hidden'; // Evita rolagem da página por baixo
            } else {
                mobileMenu.style.opacity = '0';
                mobileMenu.style.pointerEvents = 'none';
                document.body.style.overflow = '';
            }
        }
    }

    if (mobileBtn) {
        mobileBtn.addEventListener('click', toggleMenu);
    }
    if (mobileClose) {
        mobileClose.addEventListener('click', toggleMenu);
    }
    
    mobileLinks.forEach(link => {
        link.addEventListener('click', toggleMenu);
    });

    // 3. Floating WhatsApp Scroll Visibility & Tooltip Animation
    const floatingWhatsApp = document.getElementById('floating-whatsapp');
    if (floatingWhatsApp) {
        window.addEventListener('scroll', function() {
            if (window.scrollY > 300) {
                floatingWhatsApp.classList.remove('opacity-0', 'translate-y-10', 'pointer-events-none');
                floatingWhatsApp.classList.add('opacity-100', 'translate-y-0', 'pointer-events-auto');
            } else {
                floatingWhatsApp.classList.add('opacity-0', 'translate-y-10', 'pointer-events-none');
                floatingWhatsApp.classList.remove('opacity-100', 'translate-y-0', 'pointer-events-auto');
            }
        });
    }

    // Tooltip timer
    setTimeout(function() {
        const tooltip = document.getElementById('whatsapp-tooltip');
        if (tooltip) {
            tooltip.classList.remove('opacity-0');
            tooltip.classList.add('opacity-100');
            
            // Oculta novamente após 4 segundos se o usuário não interagir
            setTimeout(function() {
                tooltip.classList.remove('opacity-100');
                tooltip.classList.add('opacity-0');
            }, 4000);
        }
    }, 3000);
});
