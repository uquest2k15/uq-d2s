/**
 * Tax Appeal Page JavaScript
 * D2S v1 Page-specific JS
 */

jQuery(document).ready(function($) {
    
    // Initialize animations
    initScrollAnimations();
    initCounterAnimations();
    initProcessAnimations();
    initTestimonialCarousel();
    
    /**
     * Scroll-triggered animations
     */
    function initScrollAnimations() {
        const animatedElements = $('[data-animation]');
        
        function checkVisibility() {
            const windowHeight = $(window).height();
            const scrollTop = $(window).scrollTop();
            
            animatedElements.each(function() {
                const element = $(this);
                const elementTop = element.offset().top;
                const elementHeight = element.outerHeight();
                const delay = element.data('delay') || 0;
                
                // Check if element is in viewport
                if (elementTop < scrollTop + windowHeight - 100 && 
                    elementTop + elementHeight > scrollTop) {
                    
                    setTimeout(function() {
                        element.addClass('animated');
                    }, delay);
                }
            });
        }
        
        // Check on load and scroll
        checkVisibility();
        $(window).on('scroll resize', checkVisibility);
    }
    
    /**
     * Number counter animations
     */
    function initCounterAnimations() {
        const counters = $('[data-counter="true"]');
        let hasAnimated = false;
        
        function animateCounters() {
            if (hasAnimated) return;
            
            const windowHeight = $(window).height();
            const scrollTop = $(window).scrollTop();
            const firstCounter = counters.first();
            
            if (firstCounter.length) {
                const elementTop = firstCounter.offset().top;
                
                if (elementTop < scrollTop + windowHeight - 100) {
                    hasAnimated = true;
                    
                    counters.each(function() {
                        const counter = $(this);
                        const numberElement = counter.find('.tax-appeal-stat__number');
                        const target = parseInt(numberElement.data('target'));
                        
                        // Animate from 0 to target
                        $({ count: 0 }).animate({ count: target }, {
                            duration: 2000,
                            easing: 'swing',
                            step: function() {
                                numberElement.text(Math.floor(this.count));
                            },
                            complete: function() {
                                numberElement.text(target);
                            }
                        });
                    });
                }
            }
        }
        
        // Check on load and scroll
        animateCounters();
        $(window).on('scroll', animateCounters);
    }
    
    /**
     * Process section sequential animations
     */
    function initProcessAnimations() {
        const processItems = $('.tax-appeal-process__item');
        let hasAnimated = false;
        
        function animateProcess() {
            if (hasAnimated) return;
            
            const windowHeight = $(window).height();
            const scrollTop = $(window).scrollTop();
            const firstItem = processItems.first();
            
            if (firstItem.length) {
                const elementTop = firstItem.offset().top;
                
                if (elementTop < scrollTop + windowHeight - 100) {
                    hasAnimated = true;
                    
                    // Animate items sequentially
                    processItems.each(function(index) {
                        const item = $(this);
                        const delay = index * 300; // 300ms delay between items
                        
                        setTimeout(function() {
                            item.addClass('visible');
                        }, delay);
                    });
                }
            }
        }
        
        // Check on load and scroll
        animateProcess();
        $(window).on('scroll', animateProcess);
    }
    
    /**
     * Testimonial carousel
     */
    function initTestimonialCarousel() {
        const swiperContainer = $('.tax-appeal-carousel');
        
        if (swiperContainer.length && typeof Swiper !== 'undefined') {
            new Swiper('.tax-appeal-carousel', {
                slidesPerView: 1,
                spaceBetween: 30,
                loop: true,
                autoplay: {
                    delay: 2000, // 2 seconds as per requirements
                    disableOnInteraction: false,
                    pauseOnMouseEnter: true
                },
                speed: 300, // 300ms transition
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true
                },
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
                on: {
                    init: function() {
                        // Start autoplay when carousel comes into view
                        const carousel = this;
                        let isInView = false;
                        
                        function checkCarouselVisibility() {
                            const windowHeight = $(window).height();
                            const scrollTop = $(window).scrollTop();
                            const carouselTop = swiperContainer.offset().top;
                            const carouselHeight = swiperContainer.outerHeight();
                            
                            // Check if carousel is in viewport
                            if (carouselTop < scrollTop + windowHeight && 
                                carouselTop + carouselHeight > scrollTop) {
                                if (!isInView) {
                                    isInView = true;
                                    carousel.autoplay.start();
                                }
                            } else {
                                if (isInView) {
                                    isInView = false;
                                    carousel.autoplay.stop();
                                }
                            }
                        }
                        
                        checkCarouselVisibility();
                        $(window).on('scroll resize', checkCarouselVisibility);
                    }
                }
            });
        }
    }
    
    /**
     * Smooth scroll for anchor links
     */
    $('a[href^="#"]').on('click', function(e) {
        const target = $(this.getAttribute('href'));
        
        if (target.length) {
            e.preventDefault();
            
            $('html, body').animate({
                scrollTop: target.offset().top - 100
            }, 800);
        }
    });
    
    /**
     * Add hover effects to cards
     */
    $('.d2s-card, .d2s-feature-box').on('mouseenter', function() {
        $(this).addClass('hover');
    }).on('mouseleave', function() {
        $(this).removeClass('hover');
    });
    
});