/**
 * AJAX SCRIPTS
 * */

$('#btnAddAdmin').click(function () {
    let data = $('#form-add-admin:input').serializeArray();
    $.post($('#form-add-admin').attr("action"), data, function (info) {
        
    });
});