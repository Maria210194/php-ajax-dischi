<?php
include(__DIR__ . '/discs.php');

header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
echo (json_encode($discs));
?>