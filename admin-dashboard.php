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

<!--Body section-->
<div style="">
    <div class="uk-card uk-card-default uk-card-body uk-width-1-2@m">
        <h3 class="uk-card-title">Default</h3>
        <p>Lorem ipsum <a href="#">dolor</a> sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
    </div>
</div>
<!--End Body section-->

<?php include 'footer.php'?>
<?php include 'controller/setUserDetails.php';?>
</body>
</html>
