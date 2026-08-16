import Alpine from 'alpinejs';

window.Alpine = Alpine;

// Custom Alpine store or helpers for interactive features
Alpine.data('navHandler', () => ({
    mobileOpen: false,
    scrolled: false,
    init() {
        this.checkScroll();
        window.addEventListener('scroll', () => this.checkScroll());
    },
    checkScroll() {
        this.scrolled = window.scrollY > 20;
    },
    toggleMobile() {
        this.mobileOpen = !this.mobileOpen;
        if (this.mobileOpen) {
            document.body.style.overflow = 'hidden';
        } else {
            document.body.style.overflow = '';
        }
    }
}));

Alpine.data('filterGallery', (initialCategory = 'all') => ({
    activeCategory: initialCategory,
    setCategory(cat) {
        this.activeCategory = cat;
    },
    isVisible(cat) {
        return this.activeCategory === 'all' || this.activeCategory === cat;
    }
}));

Alpine.data('statCounter', (target, suffix = '') => ({
    current: 0,
    target: target,
    suffix: suffix,
    hasAnimated: false,
    init() {
        let observer = new IntersectionObserver((entries) => {
            if (entries[0].isIntersecting && !this.hasAnimated) {
                this.hasAnimated = true;
                this.animateCount();
            }
        }, { threshold: 0.2 });
        observer.observe(this.$el);
    },
    animateCount() {
        let start = 0;
        let end = parseInt(this.target) || 0;
        let duration = 1500;
        let stepTime = 20;
        let steps = duration / stepTime;
        let increment = end / steps;
        
        let timer = setInterval(() => {
            start += increment;
            if (start >= end) {
                this.current = end;
                clearInterval(timer);
            } else {
                this.current = Math.floor(start);
            }
        }, stepTime);
    }
}));

Alpine.start();
