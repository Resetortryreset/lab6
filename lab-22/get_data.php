<?php


$data = file_get_contents('../lab-21/saved_data.json');


$objects = json_decode($data);

header('Content-Type: application/json');
echo json_encode($objects);

?>