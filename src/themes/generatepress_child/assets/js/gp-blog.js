if (window.hasOwnProperty('jQuery') && 'function' === typeof window.jQuery) {

	(function ($) {

		$(document).ready(function () {
			
			// Initialize OnField specific features
			var OnFieldBlog = {
				
				init: function() {
					this.bindEvents();
					this.initCategoryFilters();
				},
				
				// Bind general events
				bindEvents: function() {
					// Smooth scroll for anchor links
					$('a[href*="#"]:not([href="#"])').on('click', function(e) {
						if (location.pathname.replace(/^\//, '') === this.pathname.replace(/^\//, '') && location.hostname === this.hostname) {
							var target = $(this.hash);
							target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
							if (target.length) {
								e.preventDefault();
								$('html, body').animate({
									scrollTop: target.offset().top - 100
								}, 800);
							}
						}
					});
				},
				
				// Initialize category filter interactions
				initCategoryFilters: function() {
					var $filters = $('.onfield-category-filters');
					if (!$filters.length) return;
					
					// Add active state based on current page
					var currentPath = window.location.pathname;
					$filters.find('.onfield-filter-button').each(function() {
						var $this = $(this);
						if ($this.attr('href') === currentPath) {
							$this.addClass('active');
						}
					});
					
					// Optional: Add hover effect enhancement
					$filters.find('.onfield-filter-button').on('mouseenter', function() {
						$(this).css('transform', 'translateY(-2px)');
					}).on('mouseleave', function() {
						$(this).css('transform', 'translateY(0)');
					});
				},
				
				// Helper function to handle responsive images
				handleResponsiveImages: function() {
					// Ensure hero images maintain aspect ratio
					$('.onfield-hero-image').each(function() {
						var $this = $(this);
						var bgImage = $this.css('background-image');
						if (bgImage && bgImage !== 'none') {
							$this.addClass('has-image');
						}
					});
				}
			};
			
			// Initialize OnField Blog features
			OnFieldBlog.init();
			
			// Integration with UQ Blog Core
			// The UQBlogCore is automatically initialized by uq-blog-core-cld.js
			// We can add custom callbacks if needed
			if (window.UQBlogCore) {
				// Example: Add custom behavior after infinite scroll loads new posts
				$(document).on('uq:posts-loaded', function(e, data) {
					// Re-initialize any OnField specific features for new posts
					console.log('New posts loaded:', data);
				});
			}
			
			// Handle category archive sidebar interactions
			if ($('#right-sidebar').length) {
				// Enhance sidebar widget interactions
				$('#right-sidebar .wp-block-categories-list a').on('click', function() {
					$(this).parent().addClass('loading');
				});
				
				// Add smooth transitions for sidebar widgets
				$('#right-sidebar .wp-block-group').each(function(index) {
					$(this).css({
						'opacity': '0',
						'transform': 'translateY(20px)'
					}).delay(index * 100).animate({
						'opacity': '1'
					}, 500).css('transform', 'translateY(0)');
				});
			}
			
			// Mobile menu enhancement for blog navigation
			$(window).on('resize', function() {
				if ($(window).width() < 768) {
					// Add mobile-specific enhancements
					$('.onfield-category-filters').addClass('mobile-view');
				} else {
					$('.onfield-category-filters').removeClass('mobile-view');
				}
			}).trigger('resize');
			
		});

	})(window.jQuery);
	
}