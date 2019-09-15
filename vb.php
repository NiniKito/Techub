<?php

$data = $_POST;


if (empty($data)) {
    die('Please provider proper data');
}


//File Upload Part
$file = $_FILES['file'];
///print_r($file);
$info = pathinfo($_FILES['file']['name']);
$ext = $info['extension']; // get the extension of the file
$filename = $info['filename'] . '_'.uniqid(); //get the file name

//UPLOAD FILE
move_uploaded_file($file['tmp_name'], './'.$filename. '.'.$ext);


echo "hi";

