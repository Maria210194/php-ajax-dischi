<?php
include('discs.php');

header('Content-Type: application/json');
echo json_encode($discs);
?>