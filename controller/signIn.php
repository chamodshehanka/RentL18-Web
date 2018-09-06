<?php
/**
 * Created by PhpStorm.
 * User: chamodshehanka
 * Date: 8/3/2018
 * Time: 8:17 PM
 */


$userName = $_POST["email"];
$password = $_POST['password'];

$connection = mysqli_connect(
    "localhost",
    "id6917641_rent18",
    "IWT2018",
    "id6917641_rent18"
);

/*$connectionLocal = mysqli_connect(
    "localhost",
    "root",
    "wampwamp",
    "rentlioweb"
);*/

/*if ($connectionLocal){
    $resultSet = mysqli_query($connectionLocal, "SELECT * FROM users");

    if ($resultSet){
        $resultArray = mysqli_fetch_all($resultSet);
        foreach ($resultArray as $rowData){
            if ($userName == $rowData[0] and $password == $rowData[1]){
                    header('Location: '.'../admin-dashboard.php');
            }else{
                echo 'Failed to login';
            }
        }
    }
}else */if ($connection){
    $resultSet = mysqli_connect($connection,'SELECT * FROM users');

    if ($resultSet){
        $resultArray = mysqli_fetch_all($resultSet);
        foreach ($resultArray as $rowData){
            if ($userName == $rowData[0] and $password == $rowData[1]){
                header('Location: '.'../admin-dashboard.php');
            }else{
                echo 'Failed to login';
            }
        }
    }
}else{
    echo 'Connection failed!!!';
}

function createUserCookie($name){
    $cookie_Name = 'user';
    $cookie_Value = $name;

    setcookie($cookie_Name, $cookie_Value, time() + (86400 * 30)); //86400 * 30 -> 1 day
}

if(count($_COOKIE) > 0) {
    ?>
    <script>
        console.log("Cookies are enabled");
    </script>
    <?php
} else {
    ?>
    <script>
        console.log("Cookies are disabled!");
    </script>
    <?php
}