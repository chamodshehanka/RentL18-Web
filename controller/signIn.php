<?php
/**
 * Created by PhpStorm.
 * User: chamodshehanka
 * Date: 8/3/2018
 * Time: 8:17 PM
 */

function loginPHP(){
    $userName = $_POST["email"];
    $password = $_POST['password'];

    echo $userName;

    $connection = mysqli_connect(
        "localhost",
        "id6917641_rent18",
        "IWT2018",
        "id6917641_rent18"
    );

    $connectionLocal = mysqli_connect(
        "localhost",
        "root",
        "wampwamp",
        "rentlioweb"
    );

    if ($connection){
        $resultSet = mysqli_query($connection, "SELECT * FROM users");

        if ($resultSet){
            $resultArray = mysqli_fetch_all($resultSet);
            foreach ($resultArray as $rowData){
                if ($userName == $rowData[0] and $password == $rowData[1]){
                    header('Location: '.'../admin-dashboard.html');
                }else{
                    dir("Error");
                }
            }
        }
    }else{
        echo 'Connection failed!!!';
    }
}