<?php
/**
 * Created by PhpStorm.
 * User: chamodshehanka
 * Date: 9/5/2018
 * Time: 1:14 AM
 */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Adding a Vehicle</title>
    <link href="images/icon.png" rel="shortcut icon">

    <!--Bootstrap CSS-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!--End Bootstrap CSS-->

    <!-- UIKit CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-rc.10/css/uikit.min.css" />
    <!--End UIKit CSS-->

</head>
<body>

<?php include 'header.php' ?>

<!--Form Content-->
<div class="container">
    <ul uk-accordion="multiple: true">
        <li class="uk-open">
            <a class="uk-accordion-title" href="#">Vehicle Information</a>
            <div class="uk-accordion-content">
                <div class="row">
                    <div class="col-md-3">
                        <input class="uk-input" name="" type="text" placeholder="Vehicle Number">
                    </div>
                    <div class="col-md-2">
                        <input class="uk-input" name="" type="text" placeholder="No of seats">
                    </div>
                    <div class="col-md-2">
                        <input class="uk-input" name="" type="text" placeholder="Available seats">
                    </div>
                    <div class="col-md-3">
                        <input class="uk-input" name="" type="text" placeholder="Charge per km">
                    </div>

                    <div class="col-md-3">
                        <label>
                            <select class="uk-select">
                                <option>Vehicle</option>
                                <option>Van</option>
                                <option>Mini Bus</option>
                                <option>Bus</option>
                            </select>
                        </label>
                    </div>
                    <div class="col-md-3">
                        <label><input class="uk-radio" type="radio" name="radioButton" checked> A/C</label>
                        <label><input class="uk-radio" type="radio" name="radioButton" checked> Non A/C</label>
                    </div>
                </div>
            </div>
        </li>
        <li>
            <a class="uk-accordion-title" href="#">Route Information</a>
            <div class="uk-accordion-content">
                <div class="row">
                    <div class="col-md-3">
                        <input class="uk-input" name="" type="text" placeholder="From">
                    </div>
                    <div class="col-md-3">
                        <input class="uk-input" name="" type="text" placeholder="To">
                    </div>

                    <br>

                    <!--Have to add-->

                </div>
            </div>
        </li>
        <li>
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
