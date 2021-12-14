<?php

require_once 'DB_OST.php';
header('content-type:application/json');


if (isset($_GET['id'])) {
    $ost = DB_OST::getOST($_GET['id']);
    echo json_encode(!$ost ? [] : $ost);
} else {
//    echo json_encode($osts);
}
