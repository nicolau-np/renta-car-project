 (function () {
        const carousel = document.querySelector('.header__carousel');
        if (!carousel) return;

        const track  = carousel.querySelector('.header__carousel__track');
        const slides = Array.from(carousel.querySelectorAll('.header__slide'));
        const dotsBox = carousel.querySelector('.header__carousel__dots');
        const prevBtn = carousel.querySelector('.header__carousel__arrow--prev');
        const nextBtn = carousel.querySelector('.header__carousel__arrow--next');

        let current = 0;
        let autoplayTimer = null;
        const AUTOPLAY_MS = 6000;

        // Gera as bolinhas dinamicamente consoante o número de slides
        slides.forEach((_, i) => {
            const dot = document.createElement('button');
            dot.type = 'button';
            dot.setAttribute('aria-label', 'Ir para o slide ' + (i + 1));
            if (i === 0) dot.classList.add('is-active');
            dot.addEventListener('click', () => goTo(i));
            dotsBox.appendChild(dot);
        });
        const dots = Array.from(dotsBox.children);

        function render() {
            track.style.transform = `translateX(-${current * 100}%)`;
            slides.forEach((s, i) => s.classList.toggle('is-active', i === current));
            dots.forEach((d, i) => d.classList.toggle('is-active', i === current));
        }

        function goTo(index) {
            current = (index + slides.length) % slides.length;
            render();
            restartAutoplay();
        }

        function next() { goTo(current + 1); }
        function prev() { goTo(current - 1); }

        function restartAutoplay() {
            clearInterval(autoplayTimer);
            autoplayTimer = setInterval(next, AUTOPLAY_MS);
        }

        nextBtn.addEventListener('click', next);
        prevBtn.addEventListener('click', prev);

        // Pausa o autoplay quando o rato está sobre o carousel
        carousel.addEventListener('mouseenter', () => clearInterval(autoplayTimer));
        carousel.addEventListener('mouseleave', restartAutoplay);

        // Suporte a swipe em ecrãs táteis
        let touchStartX = 0;
        carousel.addEventListener('touchstart', e => {
            touchStartX = e.touches[0].clientX;
        }, { passive: true });
        carousel.addEventListener('touchend', e => {
            const diff = e.changedTouches[0].clientX - touchStartX;
            if (Math.abs(diff) > 40) diff < 0 ? next() : prev();
        }, { passive: true });

        render();
        restartAutoplay();
    })();
