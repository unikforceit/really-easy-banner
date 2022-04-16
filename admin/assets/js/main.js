(function($) {
    "use strict";
    var REB_ADMIN = {
        init: function() {
            this.Basic.init();
        },
        Basic: {
            init: function() {
                this.BackgroundImage();
            },
            BackgroundImage: function() {
                $('[data-background]').each(function() {
                    $(this).css('background-image', 'url(' + $(this).attr('data-background') + ')');
                });
            },
        }
    };
    jQuery(document).ready(function() {
        REB_ADMIN.init();
    });
})(jQuery);