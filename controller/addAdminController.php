<?php
/**
 * Created by PhpStorm.
 * User: chamodshehanka
 * Date: 9/29/2018
 * Time: 12:30 AM
 */
include 'connect.php';

$userName = $_POST['email'];
$name = $_POST['name'];
$password = $_POST['password'];

//$profilePicture = addslashes(file_get_contents($_FILES['profilePicture']));

if ($connection){
    $result = mysqli_query($connection, "INSERT INTO admin VALUES ('$userName','$password')");
    if (mysqli_affected_rows($connection) > 0){
        echo "Customer has been saved successfully";
    }else{
        echo "Failed to save the customer";
    }
}else{
    echo 'connection failed';
}