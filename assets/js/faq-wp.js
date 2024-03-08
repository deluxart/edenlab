(function() {
    // Register buttons
    tinymce.create('tinymce.plugins.MyButtons', {
        init: function( editor, url ) {
            // Add button that inserts shortcode into the current position of the editor
            editor.addButton( 'custom_button_faq', {
                title: 'Вставить FAQ',
                icon: false,
                text: 'FAQ',
                onclick: function() {
                    // Open a TinyMCE modal
                    editor.windowManager.open({
                        title: 'Вставить вопрос/ответ',
                        body: [{
                            type: 'textbox',
                            name: 'title',
                            label: 'Введите вопрос',
                            minWidth: 350
                        },{
                            type: 'textbox',
                            name: 'content',
                            label: 'Ответ',
                            minWidth: 350,
                            multiline: true,
                            minHeight: 150
                        }],
                        onsubmit: function( e ) {
                            editor.insertContent( '[faq title="' + e.data.title + '"]' + e.data.content + '[/faq]' );
                        }
                    });
                }
            });
        },
        createControl: function( n, cm ) {
            return null;
        }
    });
    // Add buttons
    tinymce.PluginManager.add( 'custom_button_faq_script', tinymce.plugins.MyButtons );
})();
