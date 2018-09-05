<?php
/**
 * Created by PhpStorm.
 * User: chamodshehanka
 * Date: 9/5/2018
 * Time: 1:17 AM
 */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Company | Rent 18</title>

    <?php include 'header-tags.php' ?>
</head>
<body>

<?php include 'header.php' ?>

<!--Form Content-->
<div class="container">
    <br>
    <center><h2 class="uk-article-title"><a class="uk-link-reset" href="">Company Registration</a></h2></center>

    <ul uk-accordion="multiple: true">
        <li class="uk-open">
            <a class="uk-accordion-title" href="#">Company Details</a>
            <div class="uk-accordion-content">
                <div class="row">
                    <div class="col-md-3">
                        <input class="uk-input" name="" type="text" placeholder="Company Name">
                    </div>
                    <div class="col-md-2">
                        <input class="uk-input" name="" type="text" placeholder="Address line 1">
                    </div>
                    <div class="col-md-2">
                        <input class="uk-input" name="" type="text" placeholder="Address line 2">
                    </div>
                    <div class="col-md-3">
                        <input class="uk-input" name="" type="text" placeholder="Office Contact">
                    </div>

                    <div style="width: 100%;height: 50px"></div>

                    <div class="col-md-3">
                        <input class="uk-input" name="" type="text" placeholder="No of vehicles own">
                    </div>

                </div>
            </div>
        </li>

        <li class="uk-open">
            <a class="uk-accordion-title" href="#">Bank Details</a>
            <div class="uk-accordion-content">
                <div class="row">
                    <div class="col-md-3">
                        <input class="uk-input" name="" type="text" placeholder="Card Number">
                    </div>
                    <div class="col-md-1">
                        <input class="uk-input" name="" type="text" placeholder="CSV">
                    </div>
                    <div class="col-md-3">
                        <input class="uk-input" name="" type="date" placeholder="Exp Date">
                    </div>
                </div>
            </div>
        </li>
    </ul>
</div>
<!--End Form Content-->


<?php include 'footer.php' ?>
</body>
</html>
