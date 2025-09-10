/**
 * Request Consulting - D2S v1 Custom JavaScript
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
    
    // Float up animation on scroll
    function initFloatUpAnimation() {
        if (typeof ScrollTrigger !== 'undefined' && typeof gsap !== 'undefined') {
            gsap.registerPlugin(ScrollTrigger);
            
            // Animate sections with float-up class
            gsap.utils.toArray('.animate-float-up').forEach(element => {
                gsap.from(element, {
                    y: 30,
                    opacity: 0,
                    duration: 0.8,
                    ease: "power2.out",
                    scrollTrigger: {
                        trigger: element,
                        start: 'top 85%',
                        once: true
                    }
                });
            });
        } else {
            // Fallback animation without GSAP
            $('.animate-float-up').each(function() {
                var $this = $(this);
                var offset = $this.offset().top;
                var windowHeight = $(window).height();
                
                function checkScroll() {
                    var scrollTop = $(window).scrollTop();
                    if (scrollTop + windowHeight > offset + 100) {
                        $this.addClass('animated');
                        $(window).off('scroll', checkScroll);
                    }
                }
                
                $(window).on('scroll', checkScroll);
                checkScroll();
            });
        }
    }
    
    // Initialize animations
    initFloatUpAnimation();
    
    // Phone number click tracking
    $('.phone-number').on('click', function() {
        // Track phone click event if analytics is available
        if (typeof gtag !== 'undefined') {
            gtag('event', 'click', {
                'event_category': 'Contact',
                'event_label': 'Phone Number Click'
            });
        }
    });
    
    // Form validation and handling (for static form)
    if ($('.consultation-form').length) {
        $('.consultation-form').on('submit', function(e) {
            e.preventDefault();
            
            var $form = $(this);
            var isValid = true;
            
            // Basic validation
            $form.find('[required]').each(function() {
                var $field = $(this);
                if (!$field.val() || ($field.is(':checkbox') && !$field.is(':checked'))) {
                    isValid = false;
                    $field.addClass('error');
                    
                    // Add error message if not exists
                    if (!$field.next('.error-message').length) {
                        $field.after('<span class="error-message">이 필드는 필수입니다.</span>');
                    }
                } else {
                    $field.removeClass('error');
                    $field.next('.error-message').remove();
                }
            });
            
            // Email validation
            var $emailField = $form.find('input[type="email"]');
            if ($emailField.length && $emailField.val()) {
                var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                if (!emailRegex.test($emailField.val())) {
                    isValid = false;
                    $emailField.addClass('error');
                    if (!$emailField.next('.error-message').length) {
                        $emailField.after('<span class="error-message">올바른 이메일 주소를 입력해주세요.</span>');
                    }
                }
            }
            
            // Phone validation
            var $phoneField = $form.find('input[type="tel"]');
            if ($phoneField.length && $phoneField.val()) {
                var phoneRegex = /^[0-9-+\s()]+$/;
                if (!phoneRegex.test($phoneField.val())) {
                    isValid = false;
                    $phoneField.addClass('error');
                    if (!$phoneField.next('.error-message').length) {
                        $phoneField.after('<span class="error-message">올바른 전화번호를 입력해주세요.</span>');
                    }
                }
            }
            
            if (isValid) {
                // Show loading state
                var $submitBtn = $form.find('button[type="submit"]');
                var originalText = $submitBtn.text();
                $submitBtn.prop('disabled', true).text('전송 중...');
                
                // In a real implementation, you would send the form data via AJAX
                // For now, we'll just show a success message
                setTimeout(function() {
                    $form.slideUp(300, function() {
                        $form.after('<div class="form-success-message"><h3>상담 신청이 완료되었습니다!</h3><p>24시간 내에 전문가가 직접 연락드리겠습니다.</p></div>');
                    });
                }, 1000);
            } else {
                // Scroll to first error
                var $firstError = $form.find('.error').first();
                if ($firstError.length) {
                    $('html, body').animate({
                        scrollTop: $firstError.offset().top - 150
                    }, 500);
                }
            }
        });
        
        // Remove error on input
        $('.consultation-form').on('input change', 'input, select, textarea', function() {
            $(this).removeClass('error').next('.error-message').remove();
        });
    }
    
    // Checkbox group behavior - Anytime checkbox
    $('input[name="preferred_time[]"][value="anytime"]').on('change', function() {
        if ($(this).is(':checked')) {
            $('input[name="preferred_time[]"]').not(this).prop('checked', false);
        }
    });
    
    $('input[name="preferred_time[]"]').not('[value="anytime"]').on('change', function() {
        if ($(this).is(':checked')) {
            $('input[name="preferred_time[]"][value="anytime"]').prop('checked', false);
        }
    });
    
    // Add hover effect to form fields
    $('.form-group input, .form-group select, .form-group textarea').on('focus', function() {
        $(this).parent('.form-group').addClass('focused');
    }).on('blur', function() {
        $(this).parent('.form-group').removeClass('focused');
    });
    
    // Mobile adjustments
    if ($(window).width() < 768) {
        // Adjust animations for mobile
        $('.animate-float-up').css('animation-duration', '0.6s');
    }
    
});

// Add CSS for error states dynamically
jQuery(document).ready(function($) {
    if (!$('#request-consulting-dynamic-styles').length) {
        $('head').append(`
            <style id="request-consulting-dynamic-styles">
                .error {
                    border-color: #ff0000 !important;
                }
                .error-message {
                    display: block;
                    color: #ff0000;
                    font-size: 14px;
                    margin-top: 5px;
                }
                .form-success-message {
                    text-align: center;
                    padding: 60px 20px;
                    background-color: #f0f8ff;
                    border-radius: 8px;
                    margin: 40px auto;
                    max-width: 600px;
                }
                .form-success-message h3 {
                    color: var(--accent);
                    font-size: 28px;
                    margin-bottom: 20px;
                }
                .form-success-message p {
                    font-size: 18px;
                    color: var(--contrast);
                }
                .form-group.focused {
                    transform: translateY(-2px);
                    transition: transform 0.3s ease;
                }
                .animated {
                    opacity: 1 !important;
                    transform: translateY(0) !important;
                    transition: all 0.8s ease-out;
                }
            </style>
        `);
    }
});