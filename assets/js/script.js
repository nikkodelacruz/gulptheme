(function($) {
    'use strict';
    
    $('[data-toggle="tooltip"]').tooltip();

    $('[data-toggle="popover"]').popover();
    
    // Pagebuilder Image Module
    // Circle Crop Image
    // Caption on hover with link 
    var photoCirCaption = $('.fl-photo.fl-photo-crop-circle').length;
    if( photoCirCaption > 0 ) {
        $('.fl-photo.fl-photo-crop-circle').each(function() {
            var caption = $('.fl-photo-caption.fl-photo-caption-hover', $(this));
            if( caption.length > 0 ) {
                $('.fl-photo-content > a', $(this)).append(caption);
            }
        });
    }
})(jQuery);