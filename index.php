<?php
require_once 'db.php'; // подключаем файл db.php

$result = mysqli_query($link, 'select * from images where 1 order by likes desc');
while ($row = mysqli_fetch_assoc($result)) {
    echo '<a href="showimages.php?image_id =' . $row['id'] . '">';
    echo '<img width ="150" height ="100" src="' . $row['image_path'] . '">';
    echo '</a>';
}
?>
