/**
 * OnField Front Page JavaScript
 * 
 * @package GeneratePress Child
 */

if (window.hasOwnProperty('jQuery') && 'function' === typeof window.jQuery) {

    (function ($) {

        $(document).ready(function () {
            
            // OnField Front Page functionality
            var OnFieldFront = {
                
                init: function() {
                    this.initServiceTabs();
                    this.initSmoothScroll();
                    this.initAnimations();
                    this.initParallax();
                },
                
                /**
                 * Initialize Service Guide Tabs
                 */
                initServiceTabs: function() {
                    var $tabButtons = $('.tab-button');
                    var $tabContents = $('.tab-content');
                    
                    $tabButtons.on('click', function() {
                        var $this = $(this);
                        var targetTab = $this.data('tab');
                        
                        // Update active states
                        $tabButtons.removeClass('active');
                        $this.addClass('active');
                        
                        // Show corresponding content
                        $tabContents.removeClass('active');
                        $('#' + targetTab).addClass('active');
                        
                        // Smooth transition
                        $('#' + targetTab).hide().fadeIn(300);
                    });
                },
                
                /**
                 * Initialize smooth scrolling for anchor links
                 */
                initSmoothScroll: function() {
                    $('a[href*="#"]:not([href="#"])').on('click', function(e) {
                        if (location.pathname.replace(/^\//, '') === this.pathname.replace(/^\//, '') && 
                            location.hostname === this.hostname) {
                            
                            var target = $(this.hash);
                            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                            
                            if (target.length) {
                                e.preventDefault();
                                
                                $('html, body').animate({
                                    scrollTop: target.offset().top - 100
                                }, 800, 'swing');
                            }
                        }
                    });
                },
                
                /**
                 * Initialize scroll-triggered animations
                 */
                initAnimations: function() {
                    var $animatedElements = $('.service-card, .stat-item, .service-item, .tab-content');
                    
                    // Check if element is in viewport
                    var isInViewport = function(el) {
                        var elementTop = $(el).offset().top;
                        var elementBottom = elementTop + $(el).outerHeight();
                        var viewportTop = $(window).scrollTop();
                        var viewportBottom = viewportTop + $(window).height();
                        
                        return elementBottom > viewportTop && elementTop < viewportBottom;
                    };
                    
                    // Add animation class when in viewport
                    var checkAnimation = function() {
                        $animatedElements.each(function() {
                            var $this = $(this);
                            
                            if (isInViewport(this) && !$this.hasClass('animated')) {
                                $this.addClass('animated fadeInUp');
                            }
                        });
                    };
                    
                    // Initial check
                    checkAnimation();
                    
                    // Check on scroll
                    $(window).on('scroll', function() {
                        checkAnimation();
                    });
                },
                
                /**
                 * Initialize parallax effect for hero section
                 */
                initParallax: function() {
                    var $heroSection = $('.onfield-hero-section');
                    var $heroImage = $('.onfield-hero-image img');
                    
                    if (!$heroSection.length || !$heroImage.length) return;
                    
                    $(window).on('scroll', function() {
                        var scrollTop = $(window).scrollTop();
                        var heroHeight = $heroSection.outerHeight();
                        
                        // Only apply parallax when hero is visible
                        if (scrollTop < heroHeight) {
                            var parallaxValue = scrollTop * 0.5;
                            $heroImage.css('transform', 'translateY(' + parallaxValue + 'px)');
                        }
                    });
                },
                
                /**
                 * Number counter animation for statistics
                 */
                animateNumbers: function() {
                    $('.stat-number').each(function() {
                        var $this = $(this);
                        var countTo = $this.text();
                        
                        // Extract number from text (remove non-numeric characters except decimal point)
                        var numericValue = parseFloat(countTo.replace(/[^0-9.]/g, ''));
                        var suffix = countTo.replace(/[0-9.]/g, '');
                        
                        if (!isNaN(numericValue)) {
                            $this.prop('Counter', 0).animate({
                                Counter: numericValue
                            }, {
                                duration: 2000,
                                easing: 'swing',
                                step: function(now) {
                                    if (countTo.includes('.')) {
                                        $this.text(now.toFixed(1) + suffix);
                                    } else {
                                        $this.text(Math.ceil(now) + suffix);
                                    }
                                }
                            });
                        }
                    });
                },
                
                /**
                 * Lazy load images for better performance
                 */
                initLazyLoad: function() {
                    if ('IntersectionObserver' in window) {
                        var imageObserver = new IntersectionObserver(function(entries, observer) {
                            entries.forEach(function(entry) {
                                if (entry.isIntersecting) {
                                    var image = entry.target;
                                    var src = image.dataset.src;
                                    
                                    if (src) {
                                        image.src = src;
                                        image.removeAttribute('data-src');
                                        observer.unobserve(image);
                                    }
                                }
                            });
                        });
                        
                        // Observe all images with data-src
                        $('img[data-src]').each(function() {
                            imageObserver.observe(this);
                        });
                    }
                }
            };
            
            // Initialize OnField Front Page
            OnFieldFront.init();
            
            // Animate numbers when stats section is in view
            var statsAnimated = false;
            $(window).on('scroll', function() {
                if (!statsAnimated) {
                    var $statsSection = $('.onfield-stats-section');
                    if ($statsSection.length) {
                        var sectionTop = $statsSection.offset().top;
                        var sectionBottom = sectionTop + $statsSection.outerHeight();
                        var viewportTop = $(window).scrollTop();
                        var viewportBottom = viewportTop + $(window).height();
                        
                        if (sectionBottom > viewportTop && sectionTop < viewportBottom) {
                            OnFieldFront.animateNumbers();
                            statsAnimated = true;
                        }
                    }
                }
            });
            
            // Add CSS animations
            var animationCSS = `
                <style>
                @keyframes fadeInUp {
                    from {
                        opacity: 0;
                        transform: translateY(30px);
                    }
                    to {
                        opacity: 1;
                        transform: translateY(0);
                    }
                }
                
                .animated {
                    animation-duration: 0.8s;
                    animation-fill-mode: both;
                }
                
                .fadeInUp {
                    animation-name: fadeInUp;
                }
                
                .service-card,
                .stat-item,
                .service-item {
                    opacity: 0;
                }
                
                .service-card.animated,
                .stat-item.animated,
                .service-item.animated {
                    opacity: 1;
                }
                </style>
            `;
            
            $('head').append(animationCSS);
            
            // Mobile menu fix for overlapping cards
            var adjustOverlappingCards = function() {
                var windowWidth = $(window).width();
                var $serviceCards = $('.onfield-service-cards');
                
                if (windowWidth < 768) {
                    $serviceCards.css('margin-top', '-60px');
                } else if (windowWidth < 1024) {
                    $serviceCards.css('margin-top', '-80px');
                } else {
                    $serviceCards.css('margin-top', '-120px');
                }
            };
            
            // Initial adjustment
            adjustOverlappingCards();
            
            // Adjust on resize
            $(window).on('resize', function() {
                adjustOverlappingCards();
            });
            
        });

    })(window.jQuery);
    
}