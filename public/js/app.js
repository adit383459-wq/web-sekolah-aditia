document.addEventListener('DOMContentLoaded', () => {
    const menuButton = document.querySelector('.menu-btn');
    const nav = document.querySelector('.nav-links');

    if (menuButton && nav) {
        menuButton.addEventListener('click', () => {
            nav.classList.toggle('open');
            menuButton.setAttribute('aria-expanded', nav.classList.contains('open') ? 'true' : 'false');
        });

        nav.querySelectorAll('a').forEach((link) => {
            link.addEventListener('click', () => nav.classList.remove('open'));
        });
    }

    document.querySelectorAll('.flash').forEach((flash) => {
        window.setTimeout(() => {
            flash.style.opacity = '0';
            flash.style.transform = 'translateY(-8px)';
            flash.style.transition = 'opacity .25s ease, transform .25s ease';
            window.setTimeout(() => flash.remove(), 300);
        }, 4500);
    });
});
