<?php
$data = json_decode(file_get_contents('php://input'), true);

$filePath = 'saved_data.json';
$currentData = json_decode(file_get_contents($filePath), true);
$currentData[] = $data;
file_put_contents($filePath, json_encode($currentData));

echo json_encode(['success' => true]);
?>
