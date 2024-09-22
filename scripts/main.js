if (document.querySelector('.blog')) {
    const section = document.querySelector('.section');

    function animateSection() {
        const container = section.querySelector('.container');
        const heading = section.querySelector('.featurette-heading');
        const leadParagraphs = section.querySelectorAll('.lead');

        container.style.opacity = 0;
        heading.style.transform = 'translateY(-50px)';
        leadParagraphs.forEach(p => {
            p.style.transform = 'translateY(-50px)';
        });

        const observer = new IntersectionObserver(entries => {
            entries.forEach(entry => {
            if (entry.isIntersecting) {
                container.style.animation = 'fade-in 1s forwards';
                heading.style.animation = 'slide-in 1s forwards';
                leadParagraphs.forEach((p, index) => {
                p.style.animation = `slide-in 1s forwards ${index * 0.2 + 1}s`;
                });

                observer.unobserve(section);
            }
            });
        });

        observer.observe(section);
    }

    animateSection();
}