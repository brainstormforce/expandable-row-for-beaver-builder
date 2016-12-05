(function($){

      $( '.fl-builder-content' ).on( 'fl-builder.layout-rendered', function(){
            var row_head = $('.fl-row .bb-er-row');
            console.log(row_head);
            //console.log(row_head.length);
            if ( row_head.length ) {
                 row_head.each(function() {
                        if( ! $(this).hasClass('bber-aligned') ) {
                             var append_element = $(this).closest('.fl-row');
                             //console.log(append_element);
                             append_element.prepend($(this));
                             $(this).addClass('bber-aligned');
                        }
                  });
            }                
      });
})(jQuery);