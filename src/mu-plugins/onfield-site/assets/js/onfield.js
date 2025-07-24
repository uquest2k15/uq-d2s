// assets/js/onfield.js
/**
 * OnField Frontend JavaScript
 * Author: AIGrowthClub.kr
 */

(function($) {
    'use strict';
    
    // Document ready
    $(document).ready(function() {
        // Initialize OnField frontend
        initOnField();
    });
    
    function initOnField() {
        // Add your frontend JavaScript here
        console.log('OnField plugin loaded');
    }
    
    // AJAX example
    function onFieldAjaxCall() {
        $.ajax({
            url: onfield_ajax.ajax_url,
            type: 'POST',
            data: {
                action: 'onfield_action',
                nonce: onfield_ajax.nonce
            },
            success: function(response) {
                console.log(response);
            },
            error: function(error) {
                console.error('AJAX error:', error);
            }
        });
    }
    
})(jQuery);