<?php


if ($_FILES['filename']) {
    $path =  $_FILES['filename']['name'];
    $uploadFolder = './uploads/' . $path;
    move_uploaded_file($_FILES['filename']['tmp_name'], $uploadFolder) || die('upload failed');
}else{
    echo "file not found";
}
