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
    }
}

function validatePhoneNumber(data) {
    let ex = /^[a-zA-Z0-9.!#$%&’*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
}

function validateEmail(data) {

}

function validateName(data) {

}

let constraints = {
    name: {
        presence: true
    },
    email: {

    }

};