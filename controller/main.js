document.addEventListener('DOMContentLoaded', () => {
    const projectGrid = document.querySelector('.contentGrid');
    const showProjectsButton = document.querySelector('.projects-show-more');
    const githubLink = document.getElementById("GoToGit");
    if (projectGrid && showProjectsButton) {
        const hiddenProjects = [...projectGrid.querySelectorAll('.is-hidden-project')];
        let nextProject = 0;
        let hasStarted = false;
        const batchSize = 2;
        const prefetchDistance = 300;

        const revealNextBatch = () => {
            const end = Math.min(nextProject + batchSize, hiddenProjects.length);
            while (nextProject < end) {
                const project = hiddenProjects[nextProject++];
                project.classList.remove('is-hidden-project');
                project.classList.add('project-reveal');
            }
            const allProjectsShown = nextProject >= hiddenProjects.length;
            showProjectsButton.hidden = allProjectsShown;
            if (githubLink) githubLink.classList.toggle('is-hidden-project', !allProjectsShown);
        };

        const revealProjectsNearViewport = () => {
            if (!hasStarted || nextProject >= hiddenProjects.length) return;
            const nextBatchFirst = hiddenProjects[nextProject];
            if (nextBatchFirst.getBoundingClientRect().top <= window.innerHeight + prefetchDistance) {
                revealNextBatch();
            }
        };

        let scrollFrame = 0;
        const scheduleProjectCheck = () => {
            if (scrollFrame) return;
            scrollFrame = requestAnimationFrame(() => {
                scrollFrame = 0;
                revealProjectsNearViewport();
            });
        };

        showProjectsButton.addEventListener('click', () => {
            hasStarted = true;
            showProjectsButton.setAttribute('aria-expanded', 'true');
            revealNextBatch();
            window.addEventListener('scroll', scheduleProjectCheck, { passive: true });
            window.addEventListener('resize', scheduleProjectCheck);
            scheduleProjectCheck();
            showProjectsButton.classList.add('is-hidden-project');
        });
    }

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

    let touchStartX = null;
    let touchStartY = null;
    viewport.addEventListener('touchstart', (event) => {
        if (window.matchMedia('(max-width: 600px)').matches && event.touches.length === 1) {
            touchStartX = event.touches[0].clientX;
            touchStartY = event.touches[0].clientY;
        }
    }, { passive: true });
    viewport.addEventListener('touchend', (event) => {
        if (touchStartX === null || !window.matchMedia('(max-width: 600px)').matches) return;
        const deltaX = event.changedTouches[0].clientX - touchStartX;
        const deltaY = event.changedTouches[0].clientY - touchStartY;
        if (Math.abs(deltaX) > 40 && Math.abs(deltaX) > Math.abs(deltaY)) {
            showMovie(current + (deltaX < 0 ? 1 : -1));
        }
        touchStartX = null;
        touchStartY = null;
    }, { passive: true });
    viewport.addEventListener('touchcancel', () => {
        touchStartX = null;
        touchStartY = null;
    }, { passive: true });

    window.addEventListener('resize', () => requestAnimationFrame(update));
    update();

    document.getElementById("copyRightAnnee").innerHTML = "© " + new Date().getFullYear() + " RIBOTE--MORAL Noa";
    document.getElementById("toTOPButton-footer").addEventListener("click", () => { window.scrollTo({ top: 0, behavior: 'smooth' }) });

    const pathFilters = document.querySelectorAll('[data-path-filter]');
    const applyPathFilter = (button) => {
        const filter = button.dataset.pathFilter;

        document.querySelectorAll('.paths-item').forEach((item) => {
            const category = item.dataset.pathCategory;
            const visible =
                filter === 'all' ||
                category === filter ||
                (filter === 'jobs' && category !== 'exam');
            item.hidden = !visible;
        });

        pathFilters.forEach((option) => {
            const active = option === button;
            option.classList.toggle('is-active', active);
            option.setAttribute('aria-pressed', String(active));
        });
    };

    pathFilters.forEach((button) => {
        button.addEventListener('click', () => {
            applyPathFilter(button);
        });
    });

    const defaultPathFilter = document.querySelector('[data-path-filter="domain"]');
    if (defaultPathFilter) applyPathFilter(defaultPathFilter);
});
