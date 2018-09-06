<?php
/**
 * Created by PhpStorm.
 * User: chamodshehanka
 * Date: 9/5/2018
 * Time: 1:11 AM
 */

$cookie_name ='user';
if(!isset($_COOKIE[$cookie_name])) {
    echo "Cookie named '" . $cookie_name . "' is not set!";
} else {
    echo "Cookie '" . $cookie_name . "' is set!<br>";
    echo "Value is: " . $_COOKIE[$cookie_name];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard | Admin</title>

    <?php include 'header-tags.php'?>
</head>
<body>

<?php include 'header.php'?>

<?php include 'side-menu.php'?>

<!--Body section-->

<!--End Body section-->

<?php include 'footer.php'?>
</body>
</html>
