<?php
require_once 'Seeder.php';
header('content-type:application/json');

$osts = (new Seeder())->getOsts();
if (isset($_GET['id'])) {
    foreach ($osts as $ost) {
        if ($ost->getId() == $_GET['id']) {
            echo json_encode($ost);
            return;
        }
    }
} else {
    echo json_encode($osts);
}
