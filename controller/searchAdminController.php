<?php
/**
 * Created by PhpStorm.
 * User: chamodshehanka
 * Date: 10/5/2018
 * Time: 11:39 AM
 */

$username = $_GET['username'];

require 'connect.php';

if ($connection){
    $results = mysqli_query($connection, "SELECT * FROM admin WHERE username ='{$username}'");

    if (mysqli_num_rows($results)> 0){
        $rowData = mysqli_fetch_row($results);
        echo $rowData[1];
    }else{
        echo "Invalid User Name";
    }

    mysqli_free_result($results);

    mysqli_close($connection);
}else{
    echo 'connection failed';
}