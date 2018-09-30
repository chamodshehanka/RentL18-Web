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
        let formData = $('#form-sign-in').serializeArray();
        console.log(formData);
        event.preventDefault();
    });
});