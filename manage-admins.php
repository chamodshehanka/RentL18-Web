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
    <title>Manage Admins| Admin</title>

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
            <input class="uk-input" name="" type="text" placeholder="Name">
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
                <th class="uk-table-expand">Name</th>
                <th class="uk-width-small">Truncate</th>
                <th class="uk-table-shrink uk-text-nowrap">Shrink + Nowrap</th>
            </tr>
            </thead>

            <tbody>
            <tr>
                <td>
                    <label>
                        <input class="uk-checkbox" type="checkbox">
                    </label>
                </td>
                <td><img class="uk-preserve-width uk-border-circle" src="images/avatar.jpg" width="40" alt=""></td>
                <td class="uk-table-link">
                    <a class="uk-link-reset" href="">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</a>
                </td>
                <td class="uk-text-truncate">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</td>
                <td class="uk-text-nowrap">Lorem ipsum dolor</td>
            </tr>
            </tbody>
        </table>
    </div>
    <!--End Table-->
</div>


<!--End Body-->

<?php include 'footer.php'?>
<?php include 'controller/setUserDetails.php';?>
</body>
</html>