<?php
$login = filter_var(trim($_POST['login']),
FILTER_SANITIZE_STRING);
$pass = filter_var(trim($_POST['pass']),
FILTER_SANITIZE_STRING);



$mysql = new mysqli('localhost', 'root', 'root', 'register-bd');

$result = $mysql->query("SELECT * FROM `users` WHERE `login` = '$login' AND `pass` = '$pass'");


$mysql->close();

header('Location: /sait/page.html');

?>