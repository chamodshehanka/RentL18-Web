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
$address = $_POST['address'];
$phoneNumber = $_POST['phoneNumber'];
$email = $_POST['email'];

$userType = $_POST['userType'];
$password = $_POST['password'];

$database = $userType;
$name = $firstName .' '. $lastName;

if ($connection){
    $sql = "INSERT INTO $database VALUES ('P001','$name','$address','$phoneNumber','$email')";
    $result = mysqli_query($connection, $sql);
    if ($result){
        echo 'New record Added!';
    }else{
        echo "Error: " . $sql . "<br>" . mysqli_error($connection);
    }
}else{
    $message = mysqli_connect_error();
    mysqli_close($connection);
}