/**
 * AJAX SCRIPTS
 * */

//Load All Admins
$('#btnLoad').click(function () {
    // let userName = $(this).val();
    let http = new XMLHttpRequest();

    http.onreadystatechange = function(){
        if (http.readyState === 4 && http.status === 200){
            let admins = JSON.parse(http.responseText);
            // console.log(admins);
        }
    };

    http.open('GET','controller/getAllAdminsController.php',true);

    http.send();
});

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
$().change(function(){

    let username = $(this).val();

    let http = new XMLHttpRequest();

    http.onreadystatechange = function(){

        if (http.readyState === 4 && http.status === 200){

            $("#output").text("Name : " + http.responseText);

        }

    };

    http.open('GET','controller/searchAdminController?username=' + username,true);

    http.send();

});

$("#cmbCustomerId").change();

//update Admin
$().click(function () {
    let http = new XMLHttpRequest();
    http.onreadystatechange = function () {
        if (http.readyState === 4 && http.status === 200){
            alert(http.responseText);
        //    Have to edit
        }
    }
});