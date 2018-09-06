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



<!--JS Controllers-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!-- UIKit JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-rc.10/js/uikit.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-rc.10/js/uikit-icons.min.js"></script>
<!--End UIKit JS-->

<!--Bootstrap JS-->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!--End Bootstrap JS-->

<script async src="js/validationController.js"></script>
<!--End JS Controllers-->
</body>
</html>
