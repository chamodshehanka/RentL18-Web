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

//Search Admin
$().click(function () {
    let http = new XMLHttpRequest();

});