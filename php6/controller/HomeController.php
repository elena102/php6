<?php
$pageHeader = 'Добро пожаловать'; // Объявим какую-нибудь переменную, которую будем использовать в view/home.php
$username = isset($_REQUEST['username']) && !empty($_REQUEST['username']) ? $_REQUEST['username'] : null;

if ($username !== null) {
   setcookie('username', $username);
}
if (isset($_COOKIE['username'])) {
    var_dump($_COOKIE);
    die;
 }
 

require_once 'view/home.php'; // Подключаем файл с внешним видом
