<?php

require_once 'DB_OST.php';
header('content-type:application/json');


if (isset($_GET['id'])) {
    echo json_encode(DB_OST::getOST($_GET['id']));
} else {
    echo json_encode(DB_OST::getOSTs());
}
