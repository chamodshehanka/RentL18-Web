<?php
/**
 * Created by PhpStorm.
 * User: chamodshehanka
 * Date: 10/2/2018
 * Time: 10:59 PM
 */

/*header('Content-Type: application/json');

$input = filter_input_array(INPUT_POST);*/

include 'connect.php';

$result = mysqli_query($connection, "SELECT * FROM admin");

$json_adminArray = array();

while ($row = mysqli_fetch_assoc($result)){
    $json_adminArray[] = $row;

    /*echo '<pre>';
    print_r($json_adminArray);
    echo '</pre>';*/
}

echo json_encode($json_adminArray);




































/*if (mysqli_connect_errno()){
    echo json_encode(array('mysqli' => 'Failed to connect to MySQL: ' . mysqli_connect_error()));
    exit;
}

$page = isset($_GET['p']) ? $_GET['p'] : '';
if ($page == 'view'){
    $result = $connection->query("SELECT * FROM admin");
    while ($row = $result->fetch_assoc()){
        */?><!--
        <tr>
            <td><?php /*echo $row['username'] */?></td>
            <td><?php /*echo $row['password'] */?></td>
        </tr>
        --><?php
/*    }
}

if ($input['action'] == 'edit') {
    $connection->query(
        "UPDATE admin SET username='" . $input['username'] . "', email='" . $input['password'] .  "' WHERE id='" . $input['username'] . "'");
} else if ($input['action'] == 'delete') {
    $connection->query("UPDATE admin SET deleted=1 WHERE id='" . $input['username'] . "'");
} else if ($input['action'] == 'restore') {
    $connection->query("UPDATE admin SET deleted=0 WHERE id='" . $input['username'] . "'");
}*/



/*mysqli_close($connection);

echo json_encode($input);*/