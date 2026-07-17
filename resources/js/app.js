document.documentElement.classList.add('js-reveal-ready');

const revealTargets = document.querySelectorAll('[data-reveal]');

if (revealTargets.length > 0) {
	const observer = new IntersectionObserver(
		(entries, observerInstance) => {
			entries.forEach((entry) => {
				if (!entry.isIntersecting) {
					return;
				}

				const element = entry.target;
				const delay = Number(element.dataset.revealDelay || 0);

				if (delay > 0) {
					element.style.transitionDelay = `${delay}ms`;
				}

				element.classList.add('is-visible');
				observerInstance.unobserve(element);
			});
		},
		{
			threshold: 0.15,
			rootMargin: '0px 0px -8% 0px',
		},
	);

	revealTargets.forEach((element) => observer.observe(element));
}
