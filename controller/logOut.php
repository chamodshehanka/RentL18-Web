<?php
/**
 * Created by PhpStorm.
 * User: chamodshehanka
 * Date: 9/26/2018
 * Time: 12:30 PM
 */
session_start(); //to ensure you are using same session
session_destroy(); //destroy the session
header("location:../index.php"); //to redirect back to "index.php" after logging out
exit();
