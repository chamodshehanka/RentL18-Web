<?php
/**
 * Created by PhpStorm.
 * User: chamodshehanka
 * Date: 9/20/2018
 * Time: 11:19 PM
 */

include "header.php"
?>
<div id="message">
    <?php
    if (!empty($_GET["subtitle"]) && $_GET["subtitle"] === "Success") {
        ?>
        <div class="alert alert-success" role="alert">
            <i class="fa fa-3x fa-check" aria-hidden="true"></i> <?= $_GET["message"] ?>
        </div>
        <?php
    }
    ?>

    <?php
    if (!empty($_GET["subtitle"]) && $_GET["subtitle"] === "Error") {
        ?>
        <div class="alert alert-danger" role="alert">
            <i class="fa fa-3x fa-exclamation" aria-hidden="true"></i> <?= $_GET["message"] ?>
        </div>
        <?php
    }
    ?>

    <?php
    if (!empty($_GET["subtitle"]) && $_GET["subtitle"] === "Warning") {
        ?>
        <div class="alert alert-warning" role="alert">
            <i class="fa fa-3x fa-exclamation" aria-hidden="true"></i> <?= $_GET["message"] ?>
        </div>
        <?php
    }
    ?>
</div>
<?php
include "footer.php"
?>
