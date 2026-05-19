document.addEventListener('DOMContentLoaded', function() {
    // Mobile Menu Toggle
    const mobileMenuBtn = document.getElementById('mobile-menu-btn');
    const mobileMenu = document.getElementById('mobile-menu');
    const mobileLinks = document.querySelectorAll('.mobile-link');

    if (mobileMenuBtn && mobileMenu) {
        mobileMenuBtn.addEventListener('click', function() {
            mobileMenu.classList.toggle('hidden');
        });

        // Close menu when a link is clicked
        mobileLinks.forEach(link => {
            link.addEventListener('click', () => {
                mobileMenu.classList.add('hidden');
            });
        });
    }

    // Header scroll effect
    const masthead = document.getElementById('masthead');
    if (masthead) {
        window.addEventListener('scroll', function() {
            if (window.scrollY > 20) {
                masthead.classList.remove('bg-transparent', 'py-6');
                masthead.classList.add('bg-white/95', 'backdrop-blur-sm', 'shadow-sm', 'py-4');
            } else {
                masthead.classList.add('bg-transparent', 'py-6');
                masthead.classList.remove('bg-white/95', 'backdrop-blur-sm', 'shadow-sm', 'py-4');
            }
        });
    }

    // Floating WhatsApp toggle
    const floatingWhatsApp = document.getElementById('floating-whatsapp');
    if (floatingWhatsApp) {
        window.addEventListener('scroll', function() {
            if (window.scrollY > 300) {
                floatingWhatsApp.classList.remove('opacity-0', 'translate-y-10', 'pointer-events-none');
                floatingWhatsApp.classList.add('opacity-100', 'translate-y-0');
            } else {
                floatingWhatsApp.classList.add('opacity-0', 'translate-y-10', 'pointer-events-none');
                floatingWhatsApp.classList.remove('opacity-100', 'translate-y-0');
            }
        });
    }
});
