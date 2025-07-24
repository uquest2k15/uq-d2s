/**
 * About Us Page JavaScript
 * 
 * @package GeneratePress Child
 */

(function($) {
    'use strict';

    // Wait for DOM ready
    $(document).ready(function() {
        initNumberAnimation();
        initBasicInteractions();
        initAccessibilityFeatures();
    });

    /**
     * Initialize number counter animation for the statistics section
     */
    function initNumberAnimation() {
        // Number counter animation function
        function animateValue(element, start, end, duration) {
            var range = end - start;
            var current = start;
            var increment = end > start ? 1 : -1;
            var stepTime = Math.abs(Math.floor(duration / range));
            var timer = setInterval(function() {
                current += increment;
                element.textContent = current;
                if (current == end) {
                    clearInterval(timer);
                }
            }, stepTime);
        }

        // Intersection Observer for triggering animation when in viewport
        var observerOptions = {
            threshold: 0.5,
            rootMargin: '0px'
        };

        var observer = new IntersectionObserver(function(entries) {
            entries.forEach(function(entry) {
                if (entry.isIntersecting && !entry.target.classList.contains('animated')) {
                    entry.target.classList.add('animated');
                    var numberElement = entry.target.querySelector('.number');
                    var endValue = parseInt(entry.target.getAttribute('data-count'));
                    animateValue(numberElement, 0, endValue, 2000);
                }
            });
        }, observerOptions);

        // Observe all number items
        document.querySelectorAll('.number-item').forEach(function(item) {
            observer.observe(item);
        });
    }

    /**
     * Initialize basic interactions without animations
     */
    function initBasicInteractions() {
        // Simple hover effects for CTA button
        const ctaButton = document.querySelector('.cta-button');
        if (ctaButton) {
            ctaButton.addEventListener('mouseenter', function() {
                this.style.opacity = '0.9';
            });

            ctaButton.addEventListener('mouseleave', function() {
                this.style.opacity = '1';
            });
        }

        // Table row simple hover effects
        const tableRows = document.querySelectorAll('.clients-table tbody tr');
        tableRows.forEach(row => {
            row.addEventListener('mouseenter', function() {
                this.style.backgroundColor = 'var(--base-2)';
            });

            row.addEventListener('mouseleave', function() {
                this.style.backgroundColor = '';
            });
        });

        // Simple focus handling for accessibility
        const focusableElements = document.querySelectorAll('button, a, input, select, textarea, [tabindex]:not([tabindex="-1"])');
        focusableElements.forEach(element => {
            element.addEventListener('focus', function() {
                this.style.outline = '2px solid var(--accent)';
                this.style.outlineOffset = '2px';
            });

            element.addEventListener('blur', function() {
                this.style.outline = '';
                this.style.outlineOffset = '';
            });
        });
    }

    /**
     * Initialize accessibility features
     */
    function initAccessibilityFeatures() {
        // Add skip to content link
        const skipLink = document.createElement('a');
        skipLink.href = '#main';
        skipLink.textContent = 'Skip to main content';
        skipLink.className = 'skip-link';
        skipLink.style.cssText = `
            position: absolute;
            top: -40px;
            left: 6px;
            background: var(--accent);
            color: var(--base-3);
            padding: 8px;
            text-decoration: none;
            border-radius: 4px;
            z-index: 1000;
        `;
        
        skipLink.addEventListener('focus', function() {
            this.style.top = '6px';
        });
        
        skipLink.addEventListener('blur', function() {
            this.style.top = '-40px';
        });
        
        document.body.insertBefore(skipLink, document.body.firstChild);

        // Improve keyboard navigation for custom elements
        const customButtons = document.querySelectorAll('.cta-button, .business-item, .strength-item, .promise-item');
        customButtons.forEach(button => {
            // Add role if not present
            if (!button.getAttribute('role')) {
                button.setAttribute('role', 'button');
            }
            
            // Add tabindex if not present
            if (!button.getAttribute('tabindex') && button.tagName !== 'A') {
                button.setAttribute('tabindex', '0');
            }
            
            // Handle keyboard activation
            button.addEventListener('keydown', function(e) {
                if (e.key === 'Enter' || e.key === ' ') {
                    e.preventDefault();
                    this.click();
                }
            });
        });

        // Ensure proper heading structure
        const headings = document.querySelectorAll('h1, h2, h3, h4, h5, h6');
        headings.forEach(heading => {
            if (!heading.getAttribute('id')) {
                const id = heading.textContent.toLowerCase()
                    .replace(/[^\w\s-]/g, '')
                    .replace(/\s+/g, '-')
                    .trim();
                heading.setAttribute('id', id);
            }
        });
    }

    /**
     * Initialize smooth scrolling for anchor links (without animations)
     */
    function initSmoothScrolling() {
        const anchorLinks = document.querySelectorAll('a[href^="#"]');
        anchorLinks.forEach(link => {
            link.addEventListener('click', function(e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });
    }

    // Initialize smooth scrolling
    initSmoothScrolling();

    // Loading handler
    window.addEventListener('load', function() {
        document.body.classList.add('loaded');
        
        // Remove any loading spinners or overlays
        const loader = document.querySelector('.loader, .loading-overlay');
        if (loader) {
            loader.style.display = 'none';
        }
    });

})(jQuery);