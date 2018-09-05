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

<!--Header-->
<div uk-sticky="media: 960" class="uk-navbar-container tm-navbar-container uk-sticky uk-sticky-fixed" style="position: fixed; top: 0; width: 1349px;background-color: #1e87f0">
    <div class="uk-container uk-container-expand">
        <nav class="uk-navbar"><div class="uk-navbar-left">
                <a id="nav-logo-name" href="#" class="uk-navbar-item uk-logo" style="color: azure;">
                    <img src="images/icon.png" class="uk-margin-small-right" width="50" height="50">
                    Rent 18
                </a>
            </div>
            <div class="uk-navbar-right">
                <ul class="uk-navbar-nav uk-visible@m">
                    <li>
                        <div class="uk-width-auto">
                            <div class="uk-inline">
                                <img class="uk-border-circle" width="40" height="40" src="images/avatar.jpg">
                                <div uk-drop>
                                    <div class="uk-card uk-card-body uk-card-default">
                                        <h4>John Doe</h4>
                                        Account details<br>
                                        <button class="uk-button uk-button-danger">Sign Out</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</div>
<!--End Header-->

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
