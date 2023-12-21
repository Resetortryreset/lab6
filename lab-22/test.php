<?php
echo '123';
// Зчитуємо дані з файлу saved_data.json
$data = file_get_contents('./lab-21/saved_data.json');

// Декодуємо JSON-рядок у масив або об'єкт PHP
$objects = json_decode($data);

// Починаємо вивід HTML
echo '<!DOCTYPE html>';
echo '<html lang="en">';
echo '<head>';
echo '<meta charset="utf-8">';
echo '<title>Друга веб-сторінка</title>';
echo '</head>';
echo '<body>';

// Перебираємо об'єкти та виводимо їх дані
foreach ($objects as $object) {
    echo '<div class="object">';
    echo '<h3>' . $object->title . '</h3>';
    echo '<p>' . $object->description . '</p>';
    // Додайте інші властивості за потребою
    echo '</div>';
}

// Завершуємо HTML
echo '</body>';
echo '</html>';

?>