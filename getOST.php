<?php
require_once 'Seeder.php';
header('content-type:application/json');

if (isset($_GET['id'])) {
    $osts = (new Seeder())->getOsts();

    foreach ($osts as $ost) {
        if ($ost->getId() == $_GET['id']) {
            echo json_encode($ost);
            return;
        }
    }
}
