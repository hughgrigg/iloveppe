window.onload = function() {

    if (jQuery('.sharrre-buttons').is(':visible')) {

        jQuery('.twitter-sharrre').sharrre({
            share: {twitter: true},
            url: jQuery(this).data('url'),
            enableHover: false,
            enableTracking: true,
            template: '<a class="box" href="#"><span class="share"><span class="icon-twitter"></span> <span class="text">Tweet</span></span></span><span class="count">{total}</span></a>',
            buttons: {twitter: {via: 'iloveppeorg'}},
            click: function(api, options) {
                api.simulateClick();
                api.openPopup('twitter');
            }
        });

        jQuery('.linkedin-sharrre').sharrre({
            share: {linkedin: true},
            url: jQuery(this).data('url'),
            enableHover: false,
            enableTracking: true,
            template: '<a class="box" href="#"><span class="share"><span class="icon-linkedin"></span> <span class="text">Share</span></span></span><span class="count">{total}</span></a>',
            click: function(api, options) {
                api.simulateClick();
                api.openPopup('linkedin');
            }
        });

        jQuery('.facebook-sharrre').sharrre({
            share: {facebook: true},
            url: jQuery(this).data('url'),
            enableHover: false,
            enableTracking: true,
            template: '<a class="box" href="#"><span class="share"><span class="icon-facebook"></span> <span class="text">Like</span></span><span class="count">{total}</span></a>',
            click: function(api, options) {
                api.simulateClick();
                api.openPopup('facebook');
            }
        });

        jQuery('.google-sharrre').sharrre({
            share: {
                googlePlus: true
            },
            urlCurl: '/wp-content/themes/iloveppe/vendor/sharrre.php',
            template: '<a class="box" href="#"><span class="share"><span class="icon-googleplus"></span> <span class="text">+1</span></span><span class="count" href="#">{total}</span></a>',
            enableHover: false,
            enableTracking: true,
            click: function(api, options) {
                api.simulateClick();
                api.openPopup('googlePlus');
            }
        });

    }

    jQuery(document).foundation();
    console.log('Executed document.foundation');

};