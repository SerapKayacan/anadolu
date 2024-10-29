"use strict";
var KTAppListPage = function() {
    var t, e, n = () => {
    };
    return {
        init: function() {
            (t = document.querySelector("#dataTable")) && ((e = $(t).DataTable({
                info: !1,
                order: [],
                pageLength: 10,
                columnDefs: [{
                    orderable: !1,
                    targets: 0
                }, {
                    orderable: !1,
                    targets: 3
                }]
            })).on("draw", (function() {
                n()
            })), document.querySelector('[data-find="search"]')
                .addEventListener("keyup", (function(t) {
                    e.search(t.target.value).draw()
                })), n())
        }
    }
}();
KTUtil.onDOMContentLoaded((function() {
    KTAppListPage.init()
}));
