<?php
/**
 * Created by PhpStorm.
 * User: chamodshehanka
 * Date: 10/8/2018
 * Time: 1:27 AM
 */

include 'connect.php';

$page = isset($_GET['p'])? $_GET['p'] : '';
if($page == 'view'){

}else{
    header('Content-Type : application/json');
    $input = filter_input_array(INPUT_POST);

    if ($input['action'] == 'edit'){
        $connection -> query("UPDATE admin SET username='".$input['username']."',email='".$input['password']."'WHERE username='".$input['username']."'");
    }else if ($input['action'] == 'delete'){
        $connection -> query("DELETE FROM admin WHERE username='".$input['username']."'");
    }

    mysqli_close($connection);

    echo json_encode($input);
}


