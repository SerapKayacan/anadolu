$('.uploadImage').on('click', function(){
    let fileInput = $(this).parent().find("input[type='file']")[0];
    fileInput.click();
    $(fileInput).on('change', function () {
        const file = this.files[0];
        const fileURL = URL.createObjectURL(file);
        $(this).parent().find('.thumb').attr("src", fileURL);
    });
});

$('.removeImage').on('click', function () {
    $(this).parent().find("input[type='file']").val(null);
    $(this).parent().find("input[name^='uploaded']").val(null);
    $(this).parent().find('.thumb').attr("src", '');
});
