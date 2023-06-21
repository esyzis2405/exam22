<?php
    $name = filter_var(trim($_POST['name']),
    FILTER_SANITIZE_STRING);
    $email = filter_var(trim($_POST['email']),
    FILTER_SANITIZE_STRING);
    $message = filter_var(trim($_POST['message']),
    FILTER_SANITIZE_STRING);


    $mysql = new mysqli('localhost', 'root', 'root', 'message-bg');
    $mysql->query("INSERT INTO `clients` (`name`, `email`, `message`) 
    VALUES('$name', '$email', $message)");
    
    $mysql->close();

    header('Location: /');
?>