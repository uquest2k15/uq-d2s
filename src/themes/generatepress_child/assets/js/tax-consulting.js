jQuery(document).ready(function($) {
    'use strict';

    // Initialize Swiper for Success Stories Carousel
    var successSwiper = null;
    if ($('.success-carousel').length > 0) {
        successSwiper = new Swiper('.success-carousel', {
            slidesPerView: 1,
            spaceBetween: 30,
            loop: true,
            speed: 300, // Default transition speed
            autoplay: {
                delay: 2000, // 2 second delay between slides
                disableOnInteraction: false,
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
        });
    }

    // Animated Number Counter for Stats
    function animateNumbers() {
        $('.stat-number').each(function() {
            var $this = $(this);
            var target = parseInt($this.attr('data-target'));
            
            if (!$this.hasClass('animated')) {
                $this.addClass('animated');
                
                $({ counter: 0 }).animate({ counter: target }, {
                    duration: 2000,
                    easing: 'swing',
                    step: function() {
                        $this.text(Math.ceil(this.counter).toLocaleString());
                    },
                    complete: function() {
                        $this.text(target.toLocaleString());
                    }
                });
            }
        });
    }

    // GSAP Animations
    gsap.registerPlugin(ScrollTrigger);

    // Hero Section Animation
    gsap.from('.tax-consulting-hero .hero-title', {
        y: 50,
        opacity: 0,
        duration: 1,
        ease: 'power3.out'
    });

    gsap.from('.tax-consulting-hero .hero-subtitle', {
        y: 30,
        opacity: 0,
        duration: 1,
        delay: 0.2,
        ease: 'power3.out'
    });

    gsap.from('.tax-consulting-hero .hero-cta-button', {
        y: 30,
        opacity: 0,
        duration: 1,
        delay: 0.4,
        ease: 'power3.out'
    });

    // Intro Section Animation
    gsap.from('.tax-consulting-intro', {
        scrollTrigger: {
            trigger: '.tax-consulting-intro',
            start: 'top 80%',
            once: true
        },
        y: 50,
        opacity: 0,
        duration: 1,
        ease: 'power3.out'
    });

    // Stats Section Animation
    ScrollTrigger.create({
        trigger: '.tax-consulting-stats',
        start: 'top 80%',
        once: true,
        onEnter: function() {
            animateNumbers();
        }
    });

    // Core Areas Cards Animation (3 columns - appear sequentially)
    gsap.utils.toArray('.tax-consulting-core-areas .core-area-card').forEach((card, index) => {
        gsap.from(card, {
            scrollTrigger: {
                trigger: card,
                start: 'top 85%',
                once: true
            },
            y: 50,
            opacity: 0,
            duration: 0.8,
            delay: index * 0.2,
            ease: 'power3.out'
        });
    });

    // Services Cards Animation (2 columns - appear by row)
    gsap.utils.toArray('.tax-consulting-services .service-card').forEach((card, index) => {
        gsap.from(card, {
            scrollTrigger: {
                trigger: card,
                start: 'top 85%',
                once: true
            },
            y: 50,
            opacity: 0,
            duration: 0.8,
            delay: Math.floor(index / 2) * 0.3,
            ease: 'power3.out'
        });
    });

    // Process Steps Sequential Animation
    var processItems = $('.tax-consulting-process .process-item');
    
    ScrollTrigger.create({
        trigger: '.tax-consulting-process',
        start: 'top 70%',
        once: true,
        onEnter: function() {
            processItems.each(function(index) {
                var item = $(this);
                setTimeout(function() {
                    item.addClass('visible');
                }, index * 300);
            });
        }
    });

    // Industry Cards Animation (3 columns - appear sequentially)
    gsap.utils.toArray('.tax-consulting-industry .industry-card').forEach((card, index) => {
        gsap.from(card, {
            scrollTrigger: {
                trigger: card,
                start: 'top 85%',
                once: true
            },
            y: 50,
            opacity: 0,
            duration: 0.8,
            delay: index * 0.2,
            ease: 'power3.out'
        });
    });

    // Pricing Cards Animation (2 columns - appear by row)
    gsap.utils.toArray('.tax-consulting-pricing .pricing-card').forEach((card, index) => {
        gsap.from(card, {
            scrollTrigger: {
                trigger: card,
                start: 'top 85%',
                once: true
            },
            y: 50,
            opacity: 0,
            duration: 0.8,
            delay: Math.floor(index / 2) * 0.3,
            ease: 'power3.out'
        });
    });

    // Success Carousel Animation - Auto advance on scroll
    if (successSwiper) {
        ScrollTrigger.create({
            trigger: '.tax-consulting-success',
            start: 'top center',
            end: 'bottom center',
            once: true,
            onEnter: function() {
                if (successSwiper && successSwiper.slideNext) {
                    successSwiper.slideNext();
                }
            },
            onLeaveBack: function() {
                if (successSwiper && successSwiper.slidePrev) {
                    successSwiper.slidePrev();
                }
            }
        });
    }

    // FAQ Items Animation (2 columns - appear by row)
    gsap.utils.toArray('.tax-consulting-faq .faq-item').forEach((item, index) => {
        gsap.from(item, {
            scrollTrigger: {
                trigger: item,
                start: 'top 85%',
                once: true
            },
            y: 30,
            opacity: 0,
            duration: 0.8,
            delay: Math.floor(index / 2) * 0.3,
            ease: 'power3.out'
        });
    });

    // Simulation Table Animation
    gsap.from('.tax-consulting-simulation .simulation-table', {
        scrollTrigger: {
            trigger: '.tax-consulting-simulation',
            start: 'top 80%',
            once: true
        },
        opacity: 0,
        duration: 1,
        ease: 'power3.out'
    });

    // Differentiators Cards Animation (3 columns - appear sequentially)
    gsap.utils.toArray('.tax-consulting-differentiators .differentiator-card').forEach((card, index) => {
        gsap.from(card, {
            scrollTrigger: {
                trigger: card,
                start: 'top 85%',
                once: true
            },
            y: 50,
            opacity: 0,
            duration: 0.8,
            delay: index * 0.2,
            ease: 'power3.out'
        });
    });

    // CTA Section Animation
    gsap.from('.tax-consulting-cta .cta-background', {
        scrollTrigger: {
            trigger: '.tax-consulting-cta',
            start: 'top 80%',
            once: true
        },
        opacity: 0,
        duration: 1.5,
        ease: 'power3.out'
    });

    gsap.from('.tax-consulting-cta .cta-title', {
        scrollTrigger: {
            trigger: '.tax-consulting-cta',
            start: 'top 70%',
            once: true
        },
        y: 50,
        opacity: 0,
        duration: 1,
        delay: 0.3,
        ease: 'power3.out'
    });

    gsap.from('.tax-consulting-cta .cta-subtitle', {
        scrollTrigger: {
            trigger: '.tax-consulting-cta',
            start: 'top 70%',
            once: true
        },
        y: 30,
        opacity: 0,
        duration: 1,
        delay: 0.5,
        ease: 'power3.out'
    });

    gsap.from('.tax-consulting-cta .cta-button', {
        scrollTrigger: {
            trigger: '.tax-consulting-cta',
            start: 'top 70%',
            once: true
        },
        y: 30,
        opacity: 0,
        duration: 1,
        delay: 0.7,
        ease: 'power3.out'
    });
});