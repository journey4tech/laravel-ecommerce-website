(function ($) {
    "use strict";

    jQuery(document).ready(function ($) {

        $(document).on("click", ".profile-edit-close", function () {
            $('#profile-edit').collapse('hide');
        });

        $('.dropify').dropify();

    });

    jQuery(window).load(function () {
    });
})(jQuery);
