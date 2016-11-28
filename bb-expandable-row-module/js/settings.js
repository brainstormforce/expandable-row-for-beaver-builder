(function($){

    FLBuilder._registerModuleHelper('bb-expandable-row-module', {

       init: function() {
            var form = $('.fl-builder-settings'),
                node = '.fl-node-' + form.data('node'),
                expandable = $('.fl-builder-settings-tabs a:nth-child(4)'),
                not_expandable = $('.fl-builder-settings-tabs a:not( a:nth-child(4) ) '),
            
                after_click = $('.fl-builder-settings-tabs a:nth-child(3)'),
                not_after_click = $('.fl-builder-settings-tabs a:not( a:nth-child(3) ) ');
                fields = $('.fl-builder-settings-fields'),
                content = fields.find('select[name=bber_content_type]');

            expandable.click(function() {
                $( node + ' .bb-expandable-toggle-row' ).css( 'display', 'block' );
            });

            not_expandable.click(function() {
                $( node + ' .bb-expandable-toggle-row').css('display', 'none');
            });

            $( '.fl-builder-content' ).on( 'fl-builder.layout-rendered', this._expandablePreview );
        },

        _expandablePreview: function() {
            var form = $('.fl-builder-settings'),
                node = '.fl-node-' + form.data('node');

            if( ($( '.fl-builder-settings-tabs .fl-active').attr('href')) == '#fl-builder-settings-tab-expandable_row' ) {
                $( node + ' .bb-expandable-toggle-row' ).css( 'display', 'block' );
            }
        }

    });

})(jQuery);