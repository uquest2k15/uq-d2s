/**
 * Tax Bookkeeping - D2S v1 Custom JavaScript
 * Version: 1.0.0
 */

jQuery(document).ready(function($) {
    'use strict';

    // Initialize GSAP and ScrollTrigger
    gsap.registerPlugin(ScrollTrigger);

    // Hero Section Animation
    gsap.timeline()
        .from('.d2s-hero-title', {
            y: 30,
            opacity: 0,
            duration: 0.8,
            ease: 'power3.out'
        })
        .from('.d2s-hero-subtitle', {
            y: 20,
            opacity: 0,
            duration: 0.6,
            ease: 'power3.out'
        }, '-=0.4')
        .from('.d2s-hero .button', {
            y: 20,
            opacity: 0,
            duration: 0.6,
            ease: 'power3.out'
        }, '-=0.3');

    // Section Float-in Animations
    const animateSections = [
        '.d2s-section:nth-child(2) .d2s-heading',
        '.d2s-section:nth-child(2) .d2s-lead',
        '.d2s-feature-box',
        '.stat-box',
        '.pricing-card',
        '.benefit-box',
        '.faq-item'
    ];

    animateSections.forEach(selector => {
        gsap.utils.toArray(selector).forEach(element => {
            gsap.from(element, {
                y: 40,
                opacity: 0,
                duration: 0.8,
                ease: 'power3.out',
                scrollTrigger: {
                    trigger: element,
                    start: 'top 80%',
                    once: true
                }
            });
        });
    });

    // Stats Counter Animation
    const counterAnimation = () => {
        $('.stat-number').each(function() {
            const $this = $(this);
            const countTo = $this.attr('data-count');
            const isPercentage = countTo.includes('%');
            const isTime = countTo.includes('시간');
            const isCurrency = countTo.includes('만원');
            
            let finalNumber = parseInt(countTo);
            let suffix = '';
            
            if (isPercentage) suffix = '%';
            else if (isTime) suffix = '시간';
            else if (isCurrency) {
                suffix = '만원';
                finalNumber = 15;
            }

            const counter = { value: 0 };
            
            gsap.to(counter, {
                value: finalNumber,
                duration: 2,
                ease: 'power2.out',
                scrollTrigger: {
                    trigger: $this[0],
                    start: 'top 80%',
                    once: true
                },
                onUpdate: function() {
                    if (isCurrency) {
                        $this.text('월' + Math.round(counter.value) + suffix);
                    } else {
                        $this.text(Math.round(counter.value) + suffix);
                    }
                }
            });
        });
    };

    counterAnimation();

    // Process Timeline Sequential Animation
    const processSteps = gsap.utils.toArray('.process-step');
    
    processSteps.forEach((step, index) => {
        gsap.from(step, {
            opacity: 0,
            y: 30,
            duration: 0.6,
            delay: index * 0.2,
            ease: 'power3.out',
            scrollTrigger: {
                trigger: '.process-timeline',
                start: 'top 70%',
                once: true
            }
        });
        
        // Animate the progress line
        if (index > 0) {
            gsap.to('.process-timeline:before', {
                background: `linear-gradient(90deg, #4EC0E1 0%, #4EC0E1 ${(index + 1) * 25}%, #E0E0E0 ${(index + 1) * 25}%, #E0E0E0 100%)`,
                duration: 0.6,
                delay: index * 0.2,
                ease: 'none',
                scrollTrigger: {
                    trigger: '.process-timeline',
                    start: 'top 70%',
                    once: true
                }
            });
        }
    });

    // Initialize Swiper Carousel for Success Stories
    if (typeof Swiper !== 'undefined' && $('.success-carousel').length) {
        const successSwiper = new Swiper('.success-carousel', {
            slidesPerView: 1,
            spaceBetween: 30,
            loop: true,
            autoplay: {
                delay: 2000, // 2 seconds as per requirements
                disableOnInteraction: false,
                pauseOnMouseEnter: true
            },
            speed: 300, // Transition speed
            pagination: {
                el: '.swiper-pagination',
                clickable: true
            },
            on: {
                init: function() {
                    // Start/stop autoplay based on scroll position
                    ScrollTrigger.create({
                        trigger: '.success-carousel',
                        start: 'top bottom',
                        end: 'bottom top',
                        onEnter: () => this.autoplay.start(),
                        onLeave: () => this.autoplay.stop(),
                        onEnterBack: () => this.autoplay.start(),
                        onLeaveBack: () => this.autoplay.stop()
                    });
                }
            }
        });
    }

    // CTA Section Animation
    gsap.from('.cta-section .d2s-cta-box', {
        scale: 0.9,
        opacity: 0,
        duration: 1,
        ease: 'power3.out',
        scrollTrigger: {
            trigger: '.cta-section',
            start: 'top 70%',
            once: true
        }
    });

    // Smooth scroll for anchor links
    $('a[href^="#"]').on('click', function(e) {
        e.preventDefault();
        const target = $(this.getAttribute('href'));
        if (target.length) {
            $('html, body').animate({
                scrollTop: target.offset().top - 100
            }, 800, 'swing');
        }
    });

    // Add hover effects to feature boxes
    $('.d2s-feature-box, .pricing-card, .benefit-box').on('mouseenter', function() {
        gsap.to(this, {
            y: -5,
            boxShadow: '0 10px 30px rgba(0,0,0,0.15)',
            duration: 0.3,
            ease: 'power2.out'
        });
    }).on('mouseleave', function() {
        gsap.to(this, {
            y: 0,
            boxShadow: '0 4px 20px rgba(0,0,0,0.08)',
            duration: 0.3,
            ease: 'power2.out'
        });
    });

    // FAQ Answer Reveal Animation
    $('.faq-item').each(function() {
        const $answer = $(this).find('.faq-answer');
        gsap.from($answer, {
            height: 0,
            opacity: 0,
            duration: 0.5,
            ease: 'power2.out',
            scrollTrigger: {
                trigger: this,
                start: 'top 80%',
                once: true
            }
        });
    });

    // Mobile Menu Adjustments
    if ($(window).width() <= 768) {
        // Reduce animation distances on mobile
        gsap.utils.toArray('[class*="animate"]').forEach(element => {
            const trigger = ScrollTrigger.getById(element.id);
            if (trigger) {
                trigger.vars.start = 'top 90%';
            }
        });
    }

    // Performance optimization: Refresh ScrollTrigger on window resize
    let resizeTimer;
    $(window).on('resize', function() {
        clearTimeout(resizeTimer);
        resizeTimer = setTimeout(function() {
            ScrollTrigger.refresh();
        }, 250);
    });

});