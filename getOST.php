<?php
require_once 'Seeder.php';
header('content-type:application/json');

$osts = (new Seeder())->getOsts();
$saveGET = preg_replace('/[^-a-zA-Z0-9_]/', '', $_GET['id']);
if (isset($_GET['id'])) {
    foreach ($osts as $ost) {
        if ($ost->getId() == $saveGET) {
            echo json_encode($ost);
            return;
        }
    }
} else {
    echo json_encode($osts);
}
