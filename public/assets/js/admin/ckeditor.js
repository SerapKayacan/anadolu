
var KTCkeditor = function () {
    var demos = function () {
        document.querySelectorAll('.ckeditors').forEach(element => {

            var options = {
                toolbar: [
                    { name: 'clipboard', groups: [ 'clipboard', 'undo' ], items: [ 'Cut', 'Copy', 'Paste', 'PasteText', 'PasteFromWord'] },
                    { name: 'links', items: [ 'Link', 'Unlink'] },
                    { name: 'insert', items: [ 'Image', 'Table', 'HorizontalRule'] },
                    { name: 'document', items: [ 'Source'] },
                    '/',
                    { name: 'styles', items: [ 'Format', 'Font', 'FontSize' ] },
                    { name: 'basicstyles', groups: [ 'basicstyles', 'cleanup' ], items: [ 'Bold', 'Italic', 'Underline' ] },
                    { name: 'paragraph', groups: [ 'list', 'indent', 'blocks', 'align' ], items: [ 'NumberedList', 'BulletedList', '-', 'Outdent', 'Indent', '-', 'Blockquote', '-', 'JustifyLeft', 'JustifyCenter', 'JustifyRight', 'JustifyBlock'] },
                    { name: 'colors', items: [ 'TextColor', 'BGColor' ] }
                ],
                filebrowserUploadUrl: "/admin/ckeditor/upload",
                filebrowserUploadMethod: 'form',
                height: 250
            };

            CKEDITOR.replace(element.id, options);
        });
    };

    return {
        // Public functions
        init: function () {
            demos();
        }
    };
}();

// Initialization
jQuery(document).ready(function () {
    KTCkeditor.init();
});
