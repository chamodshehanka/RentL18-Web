<?php
/**
 * Created by PhpStorm.
 * User: chamodshehanka
 * Date: 9/3/2018
 * Time: 10:47 PM
 */
require_once "controller/Connection.php";

$db = Connection::getInstance();
$conn = $db->getConnection();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Rent 18 | Student Transport Service</title>

    <!--SEO-->
    <meta http-equiv="Content-type" content="text/html;charset=UTF-8"/>
    <meta name="description" content="Rent LIO description."/>
    <meta name="keywords" content="rent lio,school transport service,rent lio web,chamod shehanka,rent 18,rent18,sliit"/>
    <meta name="generator" content="2018.1.0.386"/>
    <meta property="og:title" content="RentLIO Web"/>
    <meta property="og:type" content="website"/>
    <meta property="og:url" content="rentlio.tk"/>
    <meta property="og:image" content="http://rent18.tk/images/icon.png"/>
    <meta property="og:image:type" content="image/jpeg"/>
    <meta property="og:image:width" content="300"/>
    <meta property="og:image:height" content="300"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <!--End SEO-->

    <!--Site Verification-->
    <meta name="google-site-verification" content="-6pThEjIUfFf0ZfA_IWSLmsVX7tL-HquC03Apt-d8S0" />
    <!--Site Verification-->

    <!--Critical CSS-->
    <style>
        #search-container{
            background-color: #0597F2;
            opacity: 0.8;
            width: 60%;
            height: 30%;
            border-radius: 5px 5px 5px 5px;
        }
    </style>
    <!--End Critical CSS-->

    <!--Custom CSS-->
    <link href="css/index.css" rel="stylesheet">
    <!--End Custom CSS-->

</head>

<body>

<!--Header-->
<div id="header" uk-sticky="media: 960" class="uk-navbar-container tm-navbar-container uk-sticky uk-sticky-fixed header-hide" style="position: fixed; top: 0; width: 1349px;background-color: #1e87f0">
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
                        <button id="btn-sign-in" class="uk-button uk-button-secondary uk-margin-small-right btn-blue"
                                type="button" uk-toggle="target: #modal-close-outside">Sign In</button>
                    </li>
                    <li>
                        <button class="uk-button uk-button-secondary uk-margin-small-right" type="button"
                                uk-toggle="target: #modal-sign-up">Sign Up</button>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</div>
<!--End Header-->

<!--Hero search section-->
<section class="hero-background" style="height: 90vh;padding-top: 2px">
    <div style="padding-top: 160px">

        <h1 id="banner-text" align="center">FIND YOUR <span class="orange-text">NEW</span> SCHOOL TRANSPORT</h1>
        <div style="height: 15px"></div>
        <div id="search-container" style="height: 80px;margin: auto;">
            <br>
            <div class="row">
                <div class="col-sm-3">
                    <div style="width: 60px;height: 1px;float: left"></div>
                    <label>
                        <select class="uk-select">
                            <option>Vehicle</option>
                            <option>Van</option>
                            <option>Mini Bus</option>
                            <option>Bus</option>
                        </select>
                    </label>
                </div>

                <div class="col-sm-3">
                    <input class="uk-input" type="text" placeholder="From" required>
                </div>

                <div class="col-sm-3">
                    <input class="uk-input" type="text" placeholder="To" required>
                </div>

                <div class="col-sm-3">
                    <button id="btn-search-vehicle" class="uk-button uk-button-secondary">Search</button>
                </div>
            </div>

        </div>
    </div>
</section>
<!--End hero search section-->

<!--SignIn Modal-->
<div id="modal-close-outside" uk-modal>
    <div class="uk-modal-dialog uk-modal-body">
        <button class="uk-modal-close-outside" type="button" uk-close></button>
        <h2 class="uk-modal-title">Sign In</h2>

        <form>
            <div class="uk-margin">
                <input id="txtEmail" class="uk-input" name="email" type="email" placeholder="Email or User Name">
            </div>

            <div class="uk-margin">
                <input id="txtPassword" class="uk-input" name="password" type="password" placeholder="Password">
            </div>

            <div style="float: right">
                <button id="btnSignIn" class="uk-button uk-button-primary" onclick="login()">Sign In</button>
            </div>
        </form>
        <br><br>
        <div class="uk-alert-primary" uk-alert>
            <a class="uk-alert-close" uk-close></a>
            <p>Don't have an account yet? <a uk-toggle="target: #modal-sign-up"><u>Sign Up</u></a></p>
        </div>
    </div>
</div>
<!--End SignIn modal-->

<!--Sign Up Modal-->
<div id="modal-sign-up" uk-modal>
    <div class="uk-modal-dialog uk-modal-body">
        <button class="uk-modal-close-outside" type="button" uk-close></button>
        <h2 class="uk-modal-title">Sign Up</h2>

        <div uk-grid>
            <div class="uk-grid">
                <div class="uk-width-1-2">
                    <input class="uk-input" type="text" placeholder="First Name" required>
                </div>

                <div class="uk-width-1-2">
                    <input class="uk-input" type="text" placeholder="Last Name" required>
                </div>

                <div style="height: 7px"></div>
                <div class="uk-width-1-1">
                    <input class="uk-input" type="email" placeholder="Email Address" required>
                </div>

                <div style="height: 7px"></div>
                <div class="uk-width-1-1">
                    <input class="uk-input" type="text" placeholder="Phone Number" required>
                </div>

                <div style="height: 10px"></div>

                <!--Adding bootstrap grid system-->
                <div class="row"></div>

                <div class="uk-width-1-5">
                    <label><input class="uk-radio" type="radio" name="radioButton" checked> Parent</label>
                </div>

                <div class="uk-width-1-5">
                    <label><input class="uk-radio" type="radio" name="radioButton"> Student</label>
                </div>

                <div class="uk-width-1-5">
                    <label><input class="uk-radio" type="radio" name="radioButton"> Vehicle Owner</label>
                </div>

                <div class="uk-width-1-5">
                    <label><input class="uk-radio" type="radio" name="radioButton">Business Owner</label>
                </div>

                <div style="height: 7px"></div>
                <div class="uk-width-1-1">
                    <input class="uk-input" type="password" placeholder="Password" required>
                </div>

                <div style="height: 7px"></div>
                <div class="uk-width-1-1">
                    <input class="uk-input" type="password" placeholder="Confirm Password" required>
                </div>

                <div style="height: 7px"></div>
                <div class="uk-width-1-1">
                    <label>
                        <input class="uk-checkbox" type="checkbox" required>
                        I agree to the terms and conditions.
                    </label>
                </div>
            </div>
        </div>

        <div style="height: 7px"></div>
        <div style="float: right">
            <button id="btnSignUp" class="uk-button uk-button-primary">Sign Up</button>
        </div>
        <div style="height: 22px"></div>
        <div class="uk-alert-primary" uk-alert>
            <a class="uk-alert-close" uk-close></a>
            <p>Do you have an account? <a uk-toggle="target: #modal-close-outside"><u>Sign In</u></a></p>
        </div>
    </div>
</div>
<!--End Sign Up Modal-->

<!--Featured Section-->
<div class="container">
    <div class="row">
        <h5 class="custom-heading">Featured <span class="orange-text">Transport</span> Services</h5>
        <br>
        <div class="col-sm-4">
            <div>
                <div class="uk-card uk-card-hover">
                    <div class="uk-card-media-top">
                        <p align="center"><img src="images/bus-1.jpeg" alt=""></p>
                    </div>
                    <div class="uk-card-body">
                        <h3 class="uk-card-title">Kollupitiya - Kaduwela</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                        <div class="card-button">
                            <button class="uk-button uk-button-primary">BOOK A SEAT</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-4">
            <div>
                <div class="uk-card uk-card-hover">
                    <div class="uk-card-media-top">
                        <p align="center"><img src="images/bus-2.jpeg" alt=""></p>
                    </div>
                    <div class="uk-card-body">
                        <h3 class="uk-card-title">Kollupitiya - Kaduwela</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                        <div class="card-button">
                            <button class="uk-button uk-button-primary">BOOK A SEAT</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-4">
            <div>
                <div class="uk-card uk-card-hover">
                    <div class="uk-card-media-top">
                        <p align="center"><img src="images/bus-3.jpeg" alt=""></p>
                    </div>
                    <div class="uk-card-body">
                        <h3 class="uk-card-title">Kollupitiya - Kaduwela</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                        <div class="card-button">
                            <button class="uk-button uk-button-primary">BOOK A SEAT</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--End Featured Section-->
<?php include 'footer.php' ?>
</body>
</html>