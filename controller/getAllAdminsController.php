<?php
/**
 * Created by PhpStorm.
 * User: chamodshehanka
 * Date: 10/2/2018
 * Time: 10:59 PM
 */


include 'connect.php';

if ($connection){
    $results = mysqli_query($connection, "SELECT * FROM admin");

    if (mysqli_num_rows($results) > 0){
        $array = mysqli_fetch_all($results,MYSQLI_ASSOC);
        echo json_encode($array);
    }
}else{
    echo "Something went wrong with database connection";
}




































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