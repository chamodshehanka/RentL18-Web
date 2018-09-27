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

<div style="width: 100%; height: 30px;"></div>
<!--Body section-->
<div class="container">
    <div class="row">
        <div class="col-sm-4">
            <div class="uk-card uk-card-body">
                <h3 class="uk-card-title">Today Reservations</h3>
                <div class="progress">
                    <div class="progress-bar progress-bar-striped active" role="progressbar"
                         aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:40%">
                        40%
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-4">
            <div class="uk-card uk-card-body">
                <h3 class="uk-card-title">Visitors Today</h3>
                <div class="progress">
                    <div class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar"
                         aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width:80%">
                        80%
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-4">
            <div class="uk-card uk-card-body">
                <h3 class="uk-card-title">Canceled Trips</h3>
                <div class="progress">
                    <div class="progress-bar progress-bar-danger progress-bar-striped active" role="progressbar"
                         aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width:20%">
                        20%
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<br>

<div class="container">
    <div class="row">

        <!--Admins-->
        <div class="col-sm-3">
            <div class="uk-animation-toggle">
                <div class="uk-card uk-card-secondary uk-card-body uk-animation-fade uk-width-1-2@m"
                     style="width: 200px;height: 200px;" onclick="location.href='manage-admins.php';">
                    <h3 class="uk-card-title" align="center">Admins</h3>
                    <p align="center">
                        <img src="https://png.icons8.com/color/96/3498db/conference.png">
                    </p>
                </div>
            </div>
        </div>

        <!--Parents-->
        <div class="col-sm-3">
            <div class="uk-animation-toggle">
                <div class="uk-card uk-card-primary uk-card-body uk-animation-fade uk-width-1-2@m"
                     style="width: 200px;height: 200px;" onclick="location.href='manage-parents.php';">
                    <h3 class="uk-card-title" align="center">Parents</h3>
                    <p align="center">
                        <img src="https://png.icons8.com/office/80/3498db/mother.png">
                    </p>
                </div>
            </div>
        </div>

        <!--Drivers-->
        <div class="col-sm-3">
            <div class="uk-animation-toggle">
                <div class="uk-card uk-card-secondary uk-card-body uk-animation-fade uk-width-1-2@m"
                     style="width: 200px;height: 200px;">
                    <h3 class="uk-card-title" align="center">Drivers</h3>
                    <p align="center">
                        <img src="https://png.icons8.com/color/80/3498db/driver.png">
                    </p>
                </div>
            </div>
        </div>

        <!--Vehicles-->
        <div class="col-sm-3">
            <div class="uk-animation-toggle">
                <div class="uk-card uk-card-primary uk-card-body uk-animation-fade uk-width-1-2@m"
                     style="width: 200px;height: 200px;" onclick="location.href='';">
                    <h3 class="uk-card-title" align="center">Vehicles</h3>
                    <p align="center">
                        <img src="https://png.icons8.com/color/80/3498db/bus.png">
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<div style="width: 100%; height: 30px"></div>
<!--End Body section-->

<?php include 'footer.php'?>
<?php include 'controller/setUserDetails.php';?>
</body>
</html>
