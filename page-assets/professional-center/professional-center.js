/**
 * Professional Center - D2S v1 Custom JavaScript
 * Version: 1.0.0
 */

jQuery(document).ready(function($) {
    
    // Smooth scroll for anchor links
    $('a[href^="#"]').on('click', function(e) {
        var target = $(this.getAttribute('href'));
        if (target.length) {
            e.preventDefault();
            $('html, body').animate({
                scrollTop: target.offset().top - 100
            }, 800);
        }
    });
    
    // Number counter animation for statistics
    function animateNumbers() {
        $('.stat-number').each(function() {
            var $this = $(this);
            var countTo = $this.text();
            
            // Extract number from text (handles formats like "40%+", "500+", "5,000만원")
            var numericValue = countTo.replace(/[^0-9]/g, '');
            var suffix = countTo.replace(/[0-9]/g, '');
            
            $this.data('count', numericValue);
            $this.data('suffix', suffix);
            $this.text('0' + suffix);
        });
    }
    
    // Initialize number animation
    animateNumbers();
    
    // Trigger number animation on scroll using Waypoints
    if (typeof Waypoint !== 'undefined') {
        $('.performance-stats').waypoint(function() {
            $('.stat-number').each(function() {
                var $this = $(this);
                var countTo = parseInt($this.data('count'));
                var suffix = $this.data('suffix');
                
                $({ countNum: 0 }).animate({
                    countNum: countTo
                }, {
                    duration: 2000,
                    easing: 'swing',
                    step: function() {
                        $this.text(Math.floor(this.countNum).toLocaleString() + suffix);
                    },
                    complete: function() {
                        $this.text(countTo.toLocaleString() + suffix);
                    }
                });
            });
        }, {
            offset: '80%',
            triggerOnce: true
        });
    }
    
    // FAQ accordion functionality (optional)
    $('.faq-question').on('click', function() {
        var $faqItem = $(this).parent('.faq-item');
        var $answer = $faqItem.find('.faq-answer');
        
        // Toggle current item
        $faqItem.toggleClass('active');
        $answer.slideToggle(300);
        
        // Close other items (optional - remove if you want multiple items open)
        $('.faq-item').not($faqItem).removeClass('active');
        $('.faq-item').not($faqItem).find('.faq-answer').slideUp(300);
    });
    
    // Add hover effects to cards
    $('.d2s-card').hover(
        function() {
            $(this).css('transform', 'translateY(-5px)');
            $(this).css('box-shadow', '0px 12px 24px rgba(0, 0, 0, 0.2)');
        },
        function() {
            $(this).css('transform', 'translateY(0)');
            $(this).css('box-shadow', '0px 8px 16px rgba(0, 0, 0, 0.14)');
        }
    );
    
    // Fade in animation for sections
    if (typeof ScrollTrigger !== 'undefined' && typeof gsap !== 'undefined') {
        gsap.registerPlugin(ScrollTrigger);
        
        // Fade in sections on scroll
        gsap.utils.toArray('.d2s-section').forEach(section => {
            gsap.from(section, {
                opacity: 0,
                y: 30,
                duration: 1,
                scrollTrigger: {
                    trigger: section,
                    start: 'top 80%',
                    once: true
                }
            });
        });
        
        // Stagger animation for cards
        gsap.utils.toArray('.d2s-grid').forEach(grid => {
            const cards = grid.querySelectorAll('.d2s-card');
            gsap.from(cards, {
                opacity: 0,
                y: 20,
                duration: 0.8,
                stagger: 0.2,
                scrollTrigger: {
                    trigger: grid,
                    start: 'top 80%',
                    once: true
                }
            });
        });
    }
    
    // Mobile menu adjustments if needed
    if ($(window).width() < 768) {
        // Add mobile-specific functionality here
    }
    
});