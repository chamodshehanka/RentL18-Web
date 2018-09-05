<?php
/**
 * Created by PhpStorm.
 * User: chamodshehanka
 * Date: 9/6/2018
 * Time: 12:49 AM
 */

include 'connect.php';

$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$email = $_POST['email'];
$phoneNumber = $_POST['phoneNumber'];
$gender = $_POST['gender'];
$password = $_POST['password'];

if ($connection){
    echo '';
}else{
    echo 'Connection failed';
}