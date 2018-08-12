/**
 * Created by PhpStorm.
 * User: chamodshehanka
 * Date: 7/18/2018
 * Time: 4:27 PM
 */

let TEL = 'tel';
let EMAIL = 'email';
let NAME = 'name';

function validate(type, data) {
    switch (type){
        case TEL: validatePhoneNumber(data);
            break;
        case EMAIL: validateEmail(data);
            break;
        case NAME: validateName(data);
            break;
        default: console.log("Invalid data type !!!");
    }
}

function validatePhoneNumber(data) {
    return /^[+]?(1-|1\s|1|\d{3}-|\d{3}\s|)?((\(\d{3}\))|\d{3})(-|\s)?(\d{3})(-|\s)?(\d{4})$/.test(data);
}

function validateEmail(data) {
    return /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(data);
}

function validateName(data) {
    return /^[A-Za-z-,]{3,20}?=.*\d/.test(data);
}

function loginActionSF () {
    var userId = document.getElementById('txtEmail');
    var password = document.getElementById('txtPassword');

    if ( userId.value.length === 0) {
        document.getElementById('loginWarning').innerHTML = "* Please fill all fields *";
        userId.focus();
        return false;
    } else if ( password.value.length === 0) {
        document.getElementById('passwordWarning').innerText = " * Password is also required *";
        password.focus();
        return false;
    }
}

function signupActionSF() {
    var firstName = document.getElementById('firstname');
    var lastName = document.getElementById('lastname');
    var emailAddress = document.getElementById('emamiladdress');
    var phoneNumber = document.getElementById('phonenumber');
    var signUpPassword = document.getElementById('signuppassword');
    var signUpConfirmPassword = document.getElementById('signupcofirmpassword');

    if ( firstName.value.length === 0 ) {
        document.getElementById('signupFormWarning').innerHTML = " * Please fill all fields * ";
        firstName.focus();
        return false;
    }

    if ( inputAlphabetFirst ( firstName, "Use alphabet only to enter your name" )) {
        if ( inputAlphabetLast ( lastName, "User alphabet only to enter your name ")) {
            if ( emailValidation ( emailAddress, "Please enter a valid email address" )) {
                if ( lengthDefine ( signUpPassword, "Make sure your password contians at least 8 characters " )) {
                    return true;
                }
            }
        }
    }

    return false;

    function inputAlphabetFirst ( inputText, alertMsg ) {
        var firstNameAlphaExpression = /^[a-zA-Z]+$/;

        if ( inputText.value.match(firstNameAlphaExpression)) {
            return true;
        } else {
            document.getElementById('firstNameWarning').innerHTML = alertMsg;
            inputText.focus();
            return false;
        }
    }

    function inputAlphabetLast( inputText, alertMsg ) {
        var lastNameAlphabetExpression = /^[a-zA-Z]+$/;

        if ( inputText.value.match(lastNameAlphabetExpression)) {
            return true;
        } else {
            document.getElementById('lastNameWarning').innerText = alertMsg;
            inputText.focus();
            return false;
        }
    }

    function emailValidation ( inputText, alertMsg ) {
        var emailExp = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/;

        if ( inputText.value.match(emailExp)) {
            return true;
        } else {
            document.getElementById('emailValidation').innerHTML = alertMsg;
            return false;
        }
    }

    function lengthDefine (inputText, alertMsg) {
        var passExpression = inputText.value;

        if ( passExpression.length = 8) {
            return true;
        } else {
            document.getElementById('signupPasswordWarning').innerHTML = alertMsg;
            inputText.focus();
            return false;
        }
    }
}