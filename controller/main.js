document.addEventListener('DOMContentLoaded', () => {
    const carousel = document.querySelector('.movie-carousel');
    if (!carousel) return;

    const track = carousel.querySelector('.rightCenter');
    const viewport = carousel.querySelector('.movie-viewport');
    const movies = [...track.querySelectorAll('.movie-poster')];
    const previous = carousel.querySelector('.movie-nav-prev');
    const next = carousel.querySelector('.movie-nav-next');
    const dots = [...document.querySelectorAll('.movie-dot')];
    if (!movies.length) return;

    let current = 0;
    const step = () => movies[0].getBoundingClientRect().width + parseFloat(getComputedStyle(track).gap || 0);
    const visibleCount = () => Math.max(1, Math.floor((viewport.clientWidth + parseFloat(getComputedStyle(track).gap || 0)) / step()));
    const maxStart = () => Math.max(0, movies.length - visibleCount());
    const update = () => {
        current = Math.min(current, maxStart());
        track.style.transform = `translateX(${-current * step()}px)`;
        previous.disabled = current === 0;
        next.disabled = current >= maxStart();
        dots.forEach((dot, index) => {
            const active = index === current;
            dot.classList.toggle('is-active', active);
            dot.setAttribute('aria-current', active ? 'true' : 'false');
            dot.hidden = index > maxStart();
        });
    };

    const showMovie = (target) => {
        const bounded = Math.max(0, Math.min(target, maxStart()));
        if (bounded === current) return;
        current = bounded;
        update();
    };

    previous.addEventListener('click', () => showMovie(current - 1));
    next.addEventListener('click', () => showMovie(current + 1));
    dots.forEach((dot, index) => dot.addEventListener('click', () => showMovie(index)));
    window.addEventListener('resize', () => requestAnimationFrame(update));
    update();

    document.getElementById("copyRightAnnee").innerHTML = "© " + new Date().getFullYear() + " RIBOTE--MORAL Noa";
    document.getElementById("toTOPButton-footer").addEventListener("click", () => { window.scrollTo({ top: 0, behavior: 'smooth' }) });
});
