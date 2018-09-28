<?php
/**
 * Created by PhpStorm.
 * User: chamodshehanka
 * Date: 9/28/2018
 * Time: 1:35 AM
 */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Manage Admins | Admin</title>

    <?php include 'header-tags.php'?>
</head>
<body>
<?php include 'header.php'?>
<?php include 'side-menu.php'?>

<!--Body-->
<div class="container">
    <div class="row">
        <br>
        <div class="col-md-3">
            <input class="uk-input" name="" type="text" placeholder="Username">
        </div>

        <div class="col-md-3">
            <input class="uk-input" name="" type="text" placeholder="Name">
        </div>

        <div class="col-md-3">
            <input class="uk-input" name="" type="text" placeholder="Telephone">
        </div>

        <div class="col-md-3">
            <div class="js-upload" uk-form-custom>
                <input type="file" multiple>
                <button class="uk-button uk-button-primary" type="button" tabindex="-1">Select</button>
            </div>
        </div>

        <br>

        <div style="margin: 0 auto; max-width: 100%;">
            <div class="col-sm-1">
                <button class="uk-button uk-button-primary" type="button"> Add </button>
            </div>
            <div class="col-sm-1" style="width: 1px"></div>

            <div class="col-sm-1">
                <button class="uk-button uk-button-primary" type="button">Search</button>
            </div>
            <div class="col-sm-1" style="width: 1px"></div>

            <div class="col-sm-1">
                <button class="uk-button uk-button-primary" type="button">Update</button>
            </div>
            <div class="col-sm-1" style="width: 1px"></div>

            <div class="col-sm-1">
                <button class="uk-button uk-button-danger" type="button">Delete</button>
            </div>
        </div>
    </div>

    <div style="width: 100%; height: 30px"></div>

    <!--Table-->
    <div class="uk-overflow-auto">
        <table class="uk-table uk-table-hover uk-table-middle uk-table-divider">
            <thead>
            <tr>
                <th class="uk-table-shrink"></th>
                <th class="uk-table-shrink">Image</th>
                <th class="uk-table-shrink">User Name</th>
                <th class="uk-table-shrink">Name</th>
                <th class="uk-width-small">Telephone</th>
            </tr>
            </thead>

            <tbody>
            <tr>
                <td>
                    <label>
                        <input class="uk-checkbox" type="checkbox">
                    </label>
                </td>
                <td>
                    <img class="uk-preserve-width uk-border-circle" src="images/avatar.jpg" width="40" alt="">
                </td>
                <td>
                    A001
                </td>
                <td>
                    Chamod Shehanka
                </td>
                <td class="uk-text-truncate">
                    0775633985
                </td>
            </tr>
            </tbody>
        </table>
    </div>
    <!--End Table-->
</div>

<br>
<!--End Body-->

<?php include 'footer.php'?>
<?php include 'controller/setUserDetails.php';?>
</body>
</html>