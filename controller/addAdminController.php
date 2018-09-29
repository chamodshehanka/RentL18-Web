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

$profilePicture = addslashes(file_get_contents($_FILES['profilePicture']));

if ($connection){
    $result = mysqli_query($connection, "INSERT INTO admin VALUES ('$userName','$name')");
    if ($result){
        echo 'Added';
    }else{
        echo 'Failed';
    }
}