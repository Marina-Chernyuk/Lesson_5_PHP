<?php
require_once 'db.php'; // подключаем файл db.php

$id = $_GET['image_id'] ?? null;
if ($id && is_numeric($id)) {
    mysqli_query($link, 'update images set likes = likes+1 where id' . $id);
    // если включать $link, то PhpStorm определяет как ошибку (неопределённая переменная)
    $result = mysqli_query($link, 'select * from images where id=' . $id);
    $image = mysqli_fetch_assoc($result);
    if ($image) {
        echo '<img src="' . $image['image_path'] . '">';
    }
    else {
        die ("can't find image with id =" . $id);
    }
}
?>
