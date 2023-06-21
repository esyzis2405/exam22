<?php
    $login = filter_var(trim($_POST['login']),
    FILTER_SANITIZE_STRING);
    $pass = filter_var(trim($_POST['pass']),
    FILTER_SANITIZE_STRING);

    if(mb_strlen($login) < 2 || mb_strlen($login) > 90) {
        echo "Недопустимое длина логина";
        exit();
    }
    if(mb_strlen($pass) < 1 || mb_strlen($pass) > 19) {
        echo "Недопустимое длина пароля";
        exit();
    }


    $mysql = new mysqli('localhost', 'root', 'root', 'register-bg');
    $mysql->query("INSERT INTO `users` (`login`, `pass`) 
    VALUES('$login', '$pass')");
    
    $mysql->close();

    header('Location: /');
?>