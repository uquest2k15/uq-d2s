/**
 * Tax Services Page JavaScript
 */

(function($) {
    'use strict';
    
    $(document).ready(function() {
        
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
                var current = 0;
                var increment = target / 50; // Adjust speed
                var decimals = 0;
                
                // Check if it's the average savings amount (needs formatting)
                if (target === 2500) {
                    decimals = 0;
                    increment = 50; // Larger increments for thousands
                }
                
                var timer = setInterval(function() {
                    current += increment;
                    
                    if (current >= target) {
                        current = target;
                        clearInterval(timer);
                    }
                    
                    // Format number with commas for thousands
                    if (target === 2500) {
                        $this.text(current.toFixed(decimals).replace(/\B(?=(\d{3})+(?!\d))/g, ","));
                    } else {
                        $this.text(Math.floor(current));
                    }
                }, 30);
            });
        }
        
        // Intersection Observer for Stats Animation
        if ($('.stats-grid').length > 0) {
            var statsObserver = new IntersectionObserver(function(entries, observer) {
                entries.forEach(function(entry) {
                    if (entry.isIntersecting) {
                        animateNumbers();
                        observer.unobserve(entry.target);
                    }
                });
            }, {
                threshold: 0.5
            });
            
            statsObserver.observe(document.querySelector('.stats-grid'));
        }
        
        // Smooth scroll for anchor links
        $('a[href^="#"]').on('click', function(e) {
            e.preventDefault();
            var target = $(this.getAttribute('href'));
            if (target.length) {
                $('html, body').animate({
                    scrollTop: target.offset().top - 100
                }, 800);
            }
        });
        
        // Add hover effects to service cards
        $('.service-card').hover(
            function() {
                $(this).addClass('is-hovered');
            },
            function() {
                $(this).removeClass('is-hovered');
            }
        );
        
        // Add hover effects to differentiator cards
        $('.differentiator-card').hover(
            function() {
                $(this).css('transform', 'translateY(-5px)');
            },
            function() {
                $(this).css('transform', 'translateY(0)');
            }
        );
        
        // Animation on scroll
        function animateOnScroll() {
            // Elements to animate
            var animateElements = [
                '.hero-content',
                '.intro-text',
                '.service-card',
                '.guide-card',
                '.process-step',
                '.differentiator-card',
                '.cta-image',
                '.cta-text'
            ];
            
            // Add animate-ready class to section titles
            $('.section-title, .section-subtitle').each(function() {
                if (!$(this).hasClass('animate-ready')) {
                    $(this).addClass('animate-ready');
                }
            });
            
            // Also check section titles separately
            $('.section-title.animate-ready, .section-subtitle.animate-ready').each(function() {
                var element = $(this);
                if (element.hasClass('animated')) return;
                
                var elementTop = element.offset().top;
                var viewportBottom = $(window).scrollTop() + $(window).height();
                
                if (elementTop < viewportBottom - 100) {
                    element.addClass('animated');
                }
            });
            
            animateElements.forEach(function(selector) {
                $(selector).each(function() {
                    var element = $(this);
                    if (element.hasClass('animated')) return;
                    
                    var elementTop = element.offset().top;
                    var elementBottom = elementTop + element.outerHeight();
                    var viewportTop = $(window).scrollTop();
                    var viewportBottom = viewportTop + $(window).height();
                    
                    // Trigger animation when element is 80% visible
                    if (elementTop < viewportBottom - 100) {
                        element.addClass('animated');
                    }
                });
            });
        }
        
        // Trigger hero animation immediately on page load
        setTimeout(function() {
            $('.hero-content').addClass('animated');
        }, 100);
        
        // Initial check for other elements after a brief delay
        setTimeout(function() {
            animateOnScroll();
        }, 200);
        
        // Check on scroll with throttling
        var scrollTimer;
        $(window).on('scroll', function() {
            if (scrollTimer) {
                clearTimeout(scrollTimer);
            }
            scrollTimer = setTimeout(function() {
                animateOnScroll();
            }, 50);
        });
        
        // Special handling for success carousel
        var successCarouselAnimated = false;
        $(window).on('scroll', function() {
            if (!successCarouselAnimated && $('.success-carousel').length > 0) {
                var carousel = $('.success-carousel');
                var carouselTop = carousel.offset().top;
                var viewportBottom = $(window).scrollTop() + $(window).height();
                
                if (carouselTop < viewportBottom - 100) {
                    // Auto slide when visible
                    if (successSwiper) {
                        successSwiper.slideNext();
                        successCarouselAnimated = true;
                    }
                }
            }
        });
        
    });
    
})(jQuery);