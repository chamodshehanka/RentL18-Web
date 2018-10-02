<?php
/**
 * Created by PhpStorm.
 * User: chamodshehanka
 * Date: 10/2/2018
 * Time: 10:59 PM
 */

header('Content-Type: application/json');

$input = filter_input_array(INPUT_POST);

include 'connect.php';

if (mysqli_connect_errno()){
    echo json_encode(array('mysqli' => 'Failed to connect to MySQL: ' . mysqli_connect_error()));
    exit;
}

