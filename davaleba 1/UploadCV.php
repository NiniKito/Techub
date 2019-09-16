<?php

$data = $_POST;
//File Upload Part
$file = $_FILES['file'];
$info = pathinfo($_FILES['file']['name']);
$ext = $info['extension']; // get the extension of the file
$filename = $info['filename'] . '_'.uniqid(); //get the file name

//UPLOAD FILE
move_uploaded_file($file['tmp_name'], './1919_'.$filename. '.'.$ext);
//create/open FILe

$handle = fopen("1919_file.txt", 'w') or die('Cannot open file:  '.$my_file);
// $data=implode("", $data);
//writeToFile
fwrite($handle, "name: ".$data["name"]."\nsurname: ".$data["surname"] ."\naddress: ".$data["adrress"]."\nemail: ".$data["email"]);


//REDIRCT TO ANOTHER PAGE
header("Location: http://localhost:81/techub/1919_file.txt");

