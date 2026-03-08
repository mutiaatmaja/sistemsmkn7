import '../../js/bootstrap';

const mobileMenuToggle = document.getElementById('mobile-menu-toggle');
const mobileMenu = document.getElementById('mobile-menu');
const mobileMenuIcon = document.getElementById('mobile-menu-icon');
const mobileMenuLinks = document.querySelectorAll('.mobile-menu-link');

function setMobileMenuState(isOpen) {
    if (!mobileMenu || !mobileMenuIcon || !mobileMenuToggle) {
        return;
    }

    mobileMenu.classList.toggle('max-h-0', !isOpen);
    mobileMenu.classList.toggle('opacity-0', !isOpen);
    mobileMenu.classList.toggle('invisible', !isOpen);
    mobileMenu.classList.toggle('-translate-y-1', !isOpen);
    mobileMenu.classList.toggle('pb-0', !isOpen);

    mobileMenu.classList.toggle('max-h-96', isOpen);
    mobileMenu.classList.toggle('opacity-100', isOpen);
    mobileMenu.classList.toggle('visible', isOpen);
    mobileMenu.classList.toggle('translate-y-0', isOpen);
    mobileMenu.classList.toggle('pb-4', isOpen);

    mobileMenuIcon.textContent = isOpen ? 'close' : 'menu';
    mobileMenuToggle.setAttribute('aria-expanded', String(isOpen));
}

mobileMenuToggle?.addEventListener('click', () => {
    const isOpen = mobileMenuToggle.getAttribute('aria-expanded') !== 'true';
    setMobileMenuState(isOpen);
});

mobileMenuLinks.forEach((link) => {
    link.addEventListener('click', () => setMobileMenuState(false));
});

document.addEventListener('keydown', (event) => {
    if (event.key === 'Escape') {
        setMobileMenuState(false);
    }
});

window.addEventListener('resize', () => {
    if (window.innerWidth >= 768) {
        setMobileMenuState(false);
    }
});
