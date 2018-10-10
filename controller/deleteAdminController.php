<?php
/**
 * Created by PhpStorm.
 * User: chamodshehanka
 * Date: 10/7/2018
 * Time: 9:07 AM
 */
include 'connect.php';
if ($connection){
    $results = mysqli_query($connection, "DELETE * FROM admin");
   //Need to Implemnt
    }
}else{
    echo "Error in Database Connection";
}