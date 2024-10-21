$('body').on('click','[data-method="delete"]',function (e) {
    e.preventDefault();
    var uri = $(this).data('url');
    var count = $(this).data("count");
    var id = $(this).data("id");
    var code = $("#order-"+id).find('[data-find="code"]').text();

    if (count > 0) {
        toastr.warning("İçerisinde kayıt olduğundan dolayı silinemez.");
    } else {
        Swal.fire({
            html: "<b>" + code + "</b><br>Silmek istediğize emin misiniz?",
            icon: "warning",
            showCancelButton: !0,
            buttonsStyling: !1,
            confirmButtonText: "Evet, sil!",
            cancelButtonText: "Hayır, vazgeç",
            customClass: {
                confirmButton: "btn fw-bold btn-danger",
                cancelButton: "btn fw-bold btn-active-light-primary"
            }
        }).then((result) => {
            if (result.value) {
                $.ajax({
                    type: "POST",
                    url: uri,
                    data: {
                        _token: token,
                        _method: "DELETE"
                    },
                    success: function (data) {
                        if (data.status == "success") {
                            toastr.success(data.message);
                            $("#order-"+id).remove();
                        } else if (data.status == "error") {
                            toastr.error(data.message);
                        }
                    }
                });
            }
        })
    }
});
