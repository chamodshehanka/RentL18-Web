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
    return /^$/.test(data);
}

function validateName(data) {
    return /[a-z]/.test(data);
}