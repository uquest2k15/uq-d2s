/**
 * D2S v1 Template Scripts - Page: tax-consulting
 * 
 * @package GeneratePress Child
 * @subpackage D2S_v1
 * @version 1.0.0
 */

jQuery(document).ready(function($) {
    'use strict';

    // Initialize all animations and interactions
    initAnimations();
    initNumberCounter();
    initSuccessCarousel();
    initProcessAnimation();
    
    /**
     * Initialize GSAP animations
     */
    function initAnimations() {
        // Register GSAP ScrollTrigger plugin
        gsap.registerPlugin(ScrollTrigger);
        
        // Hero section animation
        gsap.timeline()
            .from('.d2s-tax-consulting__hero-title', {
                duration: 1,
                y: 50,
                opacity: 0,
                ease: 'power3.out'
            })
            .from('.d2s-tax-consulting__hero-subtitle', {
                duration: 0.8,
                y: 30,
                opacity: 0,
                ease: 'power3.out'
            }, '-=0.4')
            .from('.d2s-tax-consulting__hero-button', {
                duration: 0.6,
                y: 20,
                opacity: 0,
                ease: 'power3.out'
            }, '-=0.4');
        
        // Intro section animation
        gsap.from('.d2s-tax-consulting__intro', {
            scrollTrigger: {
                trigger: '.d2s-tax-consulting__intro',
                start: 'top 80%',
                once: true
            },
            duration: 1,
            y: 50,
            opacity: 0,
            ease: 'power3.out'
        });
        
        // Stats section animation
        gsap.from('.d2s-tax-consulting__stat-item', {
            scrollTrigger: {
                trigger: '.d2s-tax-consulting__stats-grid',
                start: 'top 80%',
                once: true
            },
            duration: 0.8,
            y: 30,
            opacity: 0,
            stagger: 0.1,
            ease: 'power3.out'
        });
        
        // Core areas animation - 3 columns appear sequentially
        gsap.from('.d2s-tax-consulting__core-item', {
            scrollTrigger: {
                trigger: '.d2s-tax-consulting__core-grid',
                start: 'top 80%',
                once: true
            },
            duration: 0.8,
            y: 50,
            opacity: 0,
            stagger: 0.2,
            ease: 'power3.out'
        });
        
        // Services animation - 2 columns appear row by row
        gsap.from('.d2s-tax-consulting__service-card', {
            scrollTrigger: {
                trigger: '.d2s-tax-consulting__services-grid',
                start: 'top 80%',
                once: true
            },
            duration: 0.8,
            y: 50,
            opacity: 0,
            stagger: 0.3,
            ease: 'power3.out'
        });
        
        // Industry cards animation
        gsap.from('.d2s-tax-consulting__industry-card', {
            scrollTrigger: {
                trigger: '.d2s-tax-consulting__industry-grid',
                start: 'top 80%',
                once: true
            },
            duration: 0.8,
            y: 50,
            opacity: 0,
            stagger: 0.2,
            ease: 'power3.out'
        });
        
        // Pricing cards animation
        gsap.from('.d2s-tax-consulting__pricing-card', {
            scrollTrigger: {
                trigger: '.d2s-tax-consulting__pricing-grid',
                start: 'top 80%',
                once: true
            },
            duration: 0.8,
            y: 50,
            opacity: 0,
            stagger: 0.3,
            ease: 'power3.out'
        });
        
        // FAQ items animation
        gsap.from('.d2s-tax-consulting__faq-item', {
            scrollTrigger: {
                trigger: '.d2s-tax-consulting__faq-grid',
                start: 'top 80%',
                once: true
            },
            duration: 0.8,
            y: 30,
            opacity: 0,
            stagger: 0.15,
            ease: 'power3.out'
        });
        
        // Simulation table animation
        gsap.from('.d2s-tax-consulting__simulation-table', {
            scrollTrigger: {
                trigger: '.d2s-tax-consulting__simulation-table-wrapper',
                start: 'top 80%',
                once: true
            },
            duration: 1,
            y: 30,
            opacity: 0,
            ease: 'power3.out'
        });
        
        // Differentiators animation
        gsap.from('.d2s-tax-consulting__differentiator-card', {
            scrollTrigger: {
                trigger: '.d2s-tax-consulting__differentiators-grid',
                start: 'top 80%',
                once: true
            },
            duration: 0.8,
            y: 50,
            opacity: 0,
            stagger: 0.2,
            ease: 'power3.out'
        });
        
        // CTA section animation
        gsap.timeline({
            scrollTrigger: {
                trigger: '.d2s-tax-consulting__cta',
                start: 'top 80%',
                once: true
            }
        })
        .from('.d2s-tax-consulting__cta-background', {
            duration: 1.2,
            scale: 1.1,
            opacity: 0,
            ease: 'power3.out'
        })
        .from('.d2s-tax-consulting__cta-title', {
            duration: 0.8,
            y: 50,
            opacity: 0,
            ease: 'power3.out'
        }, '-=0.6')
        .from('.d2s-tax-consulting__cta-subtitle', {
            duration: 0.6,
            y: 30,
            opacity: 0,
            ease: 'power3.out'
        }, '-=0.4')
        .from('.d2s-tax-consulting__cta-button', {
            duration: 0.6,
            y: 20,
            opacity: 0,
            ease: 'power3.out'
        }, '-=0.3');
    }
    
    /**
     * Initialize number counter animation
     */
    function initNumberCounter() {
        $('.d2s-tax-consulting__stat-number').each(function() {
            var $this = $(this);
            var target = parseInt($this.attr('data-target'));
            
            var waypoint = new Waypoint({
                element: this,
                handler: function() {
                    if (!$this.hasClass('counted')) {
                        $this.addClass('counted');
                        
                        $({ counter: 0 }).animate({ counter: target }, {
                            duration: 2000,
                            easing: 'swing',
                            step: function() {
                                $this.text(Math.ceil(this.counter));
                            },
                            complete: function() {
                                $this.text(target);
                            }
                        });
                    }
                    waypoint.destroy();
                },
                offset: '80%'
            });
        });
    }
    
    /**
     * Initialize Success Stories Carousel
     */
    function initSuccessCarousel() {
        if ($('.d2s-tax-consulting__success-carousel').length > 0) {
            var successSwiper = new Swiper('.d2s-tax-consulting__success-carousel', {
                slidesPerView: 1,
                spaceBetween: 30,
                loop: true,
                speed: 300,
                autoplay: {
                    delay: 2000,
                    disableOnInteraction: false,
                },
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                },
                on: {
                    init: function() {
                        // Trigger autoplay when carousel comes into view
                        var carouselElement = document.querySelector('.d2s-tax-consulting__success-carousel');
                        var observer = new IntersectionObserver(function(entries) {
                            entries.forEach(function(entry) {
                                if (entry.isIntersecting) {
                                    successSwiper.autoplay.start();
                                } else {
                                    successSwiper.autoplay.stop();
                                }
                            });
                        }, { threshold: 0.5 });
                        
                        observer.observe(carouselElement);
                    }
                }
            });
        }
    }
    
    /**
     * Initialize Process Section Sequential Animation
     */
    function initProcessAnimation() {
        // Sequential appear animation for process steps
        var processItems = document.querySelectorAll('.d2s-tax-consulting__process-item');
        
        if (processItems.length > 0) {
            var observer = new IntersectionObserver(function(entries) {
                entries.forEach(function(entry) {
                    if (entry.isIntersecting) {
                        var delay = 0;
                        processItems.forEach(function(item, index) {
                            setTimeout(function() {
                                item.classList.add('is-visible');
                            }, delay);
                            delay += 300; // 300ms delay between each step
                        });
                        observer.disconnect();
                    }
                });
            }, { threshold: 0.3 });
            
            var processSection = document.querySelector('.d2s-tax-consulting__process-grid');
            if (processSection) {
                observer.observe(processSection);
            }
        }
    }
    
    /**
     * Smooth scroll for anchor links
     */
    $('a[href^="#"]').on('click', function(e) {
        e.preventDefault();
        var target = $(this.getAttribute('href'));
        if (target.length) {
            $('html, body').animate({
                scrollTop: target.offset().top - 100
            }, 800);
        }
    });
    
    /**
     * Parallax effect for CTA background
     */
    $(window).on('scroll', function() {
        var scrolled = $(window).scrollTop();
        var $ctaBg = $('.d2s-tax-consulting__cta-background');
        
        if ($ctaBg.length && $ctaBg.is(':visible')) {
            var speed = 0.5;
            var yPos = -(scrolled * speed);
            $ctaBg.css('transform', 'translateY(' + yPos + 'px)');
        }
    });
});