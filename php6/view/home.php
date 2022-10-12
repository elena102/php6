<!DOCTYPE html>
<head>
   <meta charset="UTF-8">
   <title>Главная</title>
</head>
<body>
   <h1><?=$pageHeader?></h1>
   <?php if ($username !== null) : ?>
   <p>Рады вас приветствовать, <?=$username?></p>
   <a href="?action=logout">Выйти</a>
   <?php else : ?>
   <form method="post">
       <input type="text" name="username" placeholder="Введите ваше имя" />
       <input type="submit" value="Отправить" />
       <input type="button" name="write" value="Войти" onclick="location.href='/view/signin.php'">
   </form>
   <?php endif ?>
<?php
session_start();
 
if(!$_SESSION['user']){
	header("Location: signin.php");
	exit;
}
?>
</body>



