<?php

include __DIR__ .'/db.php';

if($_FILES['file']['name']!==''){
$file = $_FILES['file']; 
$name = $file['name'];
$pathFile = __DIR__ .'/img/'.$name;

if(!move_uploaded_file($file['tmp_name'], $pathFile)){
     echo 'Файл не смог загрузиться';
}

$data = $db->prepare("INSERT INTO `photos` (`path`) VALUES (?)");
$data->exectute([$name]);



}
    header("Location: \page.php");
?>