<?php
/**
 * Created by PhpStorm.
 * User: chamodshehanka
 * Date: 8/3/2018
 * Time: 8:17 PM
 */

/*IWT2018*/
$userName = $_POST["email"];
$password = $_POST['password'];

$connection = mysqli_connect("localhost","root","wampwamp","rentlioweb");

if ($connection){
    echo 'Connection success';
}else{
    echo 'Connection failed!!!';
}