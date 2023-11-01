<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=`device-width`, initial-scale=1.0">
    <title>Регистрация</title>
</head>
<body>
    <form action="reg.php">
        <div>
        <label for="login">Ваш логин</label>
        <input type="text" name="login" id="login">
        </div>
        <div>
        <label for="name">Ваше имя</label>
        <input type="text" name="name" id="name">
        </div>
        <div>
        <label for="email">Ваша почта</label>
        <input type="email" name="email" id="email">
        </div>
        <div>
        <label for="phone">Ваш телефон</label>
        <input type="phone" name="phone" id="phone">
        </div>
        <div>
        <label for="pass">Ваш пароль</label>
        <input type="password" name="pass" id="pass">
        </div>
        <div>
        <label for="pass_again">Ваш пароль еще раз</label>
        <input type="password" name="pass_again" id="pass_again">
        </div>
        <button type="submit">Отправить</button>
    </form>
</body>
</html>

<?php
    if (isset($_GET["login"])) {
        echo "<h2>Ваш логин - " . $_GET["login"] . "</h2>";
    }
    if (isset($_GET["name"])) {
        echo "<h2>Ваше имя - " . $_GET["name"] . "</h2>";
    }
    if (isset($_GET["email"])) {
        echo "<h2>Ваша почта - " . $_GET["email"] . "</h2>";
    }
    if (isset($_GET["phone"])) {
        echo "<h2>Ваш телефон - " . $_GET["phone"] . "</h2>";
    }


?>