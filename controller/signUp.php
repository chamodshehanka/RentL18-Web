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
$userType = $_POST['userType'];
$password = $_POST['password'];

$database = $userType;
$name = $firstName .' '. $lastName;

if ($connection){
    $result = mysqli_query($connection, "INSERT INTO $database VALUES ('P001','$name','$email','$phoneNumber')");
}else{
    $message = mysqli_connect_error();
    mysqli_close($connection);
    echo "<script>window.location.replace('message.php?title=Message&subtitle=Error&message={$message}'); </script>";
}