/**
 * Created by PhpStorm.
 * User: chamodshehanka
 * Date: 7/18/2018
 * Time: 4:27 PM
 */

//Sign In AJAX Scripts
$(document).ready(function () {
    let btnSignIn = $('#btnSignIn');
    btnSignIn.click(function () {
        let email = $('#txtEmail').val();
        let password = $('#txtPassword').val();

        if (!(email === "" || password === "")){
            $.ajax({
                url : 'controller/signIn.php',
                data: {
                    login : 1,
                    emailPHP : email,
                    passwordPHP : password
                },
                success : function (response) {
                    console.log(response);
                    UIkit.notification({message: response + ''});
                },
                dataType: 'text'
            });
        }else{
            UIkit.notification({message: 'Your inputs are empty!'});
        }
    });
});

//Sign Up
$(document).ready(function () {
    let btnSignUp = $('#btnSignUp');
    
    btnSignUp.click(function (event) {
        event.preventDefault();
        $.ajax({
            url :'controller/signUp.php',
            method : 'post',
            data: $('#form-sign-up').serialize(),
            dataType: 'text',
            success: function (response) {
                console.log(response);
            }
        })
    });
});


