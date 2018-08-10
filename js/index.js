/**
 * Created by PhpStorm.
 * User: chamodshehanka
 * Date: 7/18/2018
 * Time: 4:27 PM
 */

let email = $('#txtEmail').val();
let password = $('#txtPassword').val();

function loginAction(email, password) {
    if (email === 'admin@rent18.com' && password === 1234){
        window.location.replace("../add-vehicle.html");
    } else {

    }
}

