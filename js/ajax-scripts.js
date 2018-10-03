/**
 * AJAX SCRIPTS
 * */


//Save Admin
$("#btnAddAdmin").click(function(){
    let http = new XMLHttpRequest();
    http.onreadystatechange = function(){
        if (http.readyState === 4 && http.status === 200){
            alert(http.responseText);
        }
    };

    http.open('POST','controller/addAdminController',true);
    http.setRequestHeader("Content-Type","application/x-www-form-urlencoded");

    //var queryString = "customerid=" + $("#txtCustomerID").val() + "&customername=" + $("#txtCustomerName").val();
    let queryString = $("#form-add-admin").serialize();

    http.send(queryString);
});






// let btnAddAdmin = $('#btnAddAdmin');
/*
btnAddAdmin.click(function () {
    let data = $('#form-add-admin:input').serializeArray();
    $.post($('#form-add-admin').attr("action"), data, function (info) {
        if (info === 'Added'){
            console.log(info);
            UIkit.notification({message: 'Admin has been successfully added!'});
        }else {
            UIkit.notification({message: 'Failed to add admin!'});
        }
    });
});

btnAddAdmin.submit(function () {
    return false;
});*/

/*btnAddAdmin.click(function () {
    let name = $('name');

    $.ajax({
        type : 'POST',
        // data : ();
    })
});*/
