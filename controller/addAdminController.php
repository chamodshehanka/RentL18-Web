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

if (mysql_query("INSERT INTO admin VALUES ('$userName','$name')")){
    echo 'Successfully Added';
}else{
    echo 'Failed to add';
}