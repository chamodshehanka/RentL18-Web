<?php
/**
 * Created by PhpStorm.
 * User: chamodshehanka
 * Date: 9/5/2018
 * Time: 1:11 AM
 */
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
<div style="width: 1px;height: 50px"></div>
<!--Body section-->
<div class="container">
    <div class="uk-card uk-card-primary uk-card-body uk-width-1-2@m"
         style="width: 200px;height: 200px;">
        <h3 class="uk-card-title" align="center">Users</h3>
        <img src="https://png.icons8.com/color/96/3498db/conference.png">
    </div>
</div>
<!--End Body section-->

<?php include 'footer.php'?>
<?php include 'controller/setUserDetails.php';?>
</body>
</html>
