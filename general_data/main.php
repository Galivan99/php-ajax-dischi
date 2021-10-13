<?php 

    include __DIR__ . "./data_base.php";

    header('Content-Type: application/json');

    echo json_encode($db);

?>