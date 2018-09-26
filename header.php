<?php
/**
 * Created by PhpStorm.
 * User: chamodshehanka
 * Date: 9/2/2018
 * Time: 7:02 PM
 */
?>

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
                                <a href="" class="uk-icon-menu" uk-icon="menu" uk-toggle="target: #offcanvas-flip"></a>

                                <img class="uk-border-circle" width="40" height="40" src="images/avatar.jpg">

                                <div uk-drop = "mode:click">
                                    <div class="uk-card uk-card-body uk-card-default">
                                        <h4 id="navUserName"></h4>

                                        <a href="controller/logOut.php">
                                            <span uk-icon="icon: sign-out" uk-tooltip="title: Sign Out" style="color: #e74c3c"></span>
                                        </a>
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