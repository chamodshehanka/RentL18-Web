/**
 * AJAX SCRIPTS
 * */

//Load All Admins
$('#btnLoad').click(function () {
    // let userName = $(this).val();
    let http = new XMLHttpRequest();

    http.open('GET','controller/getAllAdminsController.php',true);

    http.onreadystatechange = function(){
        if (http.readyState === 4 && http.status === 200){
            let result = http.responseText;
            // console.log(result.slice(0,result.length - 92));
            let admins = JSON.parse(result.slice(0,result.length - 92));
            for (let index in admins){
                let admin = admins[index];
                let html =
                    "<tr>" +
                        "<td><input class='uk-checkbox' type='checkbox'></td>" +
                        "<td><img class='uk-preserve-width uk-border-circle' src='images/user.jpg' width='40'></td>" +
                        "<td>"+admin.username+"</td>" +
                        "<td>"+admin.password+"</td>" +
                        "<td><button class='uk-button uk-button-secondary'>MANAGE</button></td>"+
                    "</tr>";

                $("#tblAdmins tbody").append(html);
            }
        }
    };



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
/*$().change(function(){

    let username = $(this).val();

    let http = new XMLHttpRequest();

    http.onreadystatechange = function(){

        if (http.readyState === 4 && http.status === 200){

            $("#output").text("Name : " + http.responseText);

        }

    };

    http.open('GET','controller/searchAdminController?username=' + username,true);

    http.send();

});*/

// $("#cmbCustomerId").change();

//update Admin
/*
$().click(function () {
    let http = new XMLHttpRequest();
    http.onreadystatechange = function () {
        if (http.readyState === 4 && http.status === 200){
            alert(http.responseText);
        //    Have to edit
        }
    }
});*/
