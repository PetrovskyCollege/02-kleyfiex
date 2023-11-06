<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=`device-width`, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Регистрация</title>
</head>
<body>
    <div class="div-reg">
    <h1>Регистрация</h1>
    <form action="reg.php" method="post">
        <div class="form-div">
        <div class="form-block">
        <label for="login">Ваш никнейм</label>
        <input type="text" name="login" id="login">
        </div>
        <div class="form-block">
        <label for="name">Ваше имя</label>
        <input type="text" name="name" id="name">
        </div>
        <div class="form-block">
        <label for="email">Ваша почта</label>
        <input type="email" name="email" id="email">
        </div>
        <div class="form-block">
        <label for="phone">Ваш телефон</label>
        <input type="phone" name="phone" id="phone">
        </div>
        <div class="form-block">
        <label for="pass">Ваш пароль</label>
        <input type="password" name="pass" id="pass">
        </div>
        <div class="form-block">
        <label for="pass_again">Ваш пароль еще раз</label>
        <input type="password" name="pass_again" id="pass_again">
        </div>
        <button type="submit" name="submit">Отправить</button>
        </div>
    </form>
    <div class="check-reg">
    <p>Уже зарегистрированы? <a href="auth.php">Войти</a></p>
    </div>
    
    </div>
</body>
</html>

<?php
    if (isset($_POST["login"])) {
        if (empty($_POST["login"])) {
            echo "<h2>Никнейм не был введен</h2>";
        } else {
            echo "<h2>Ваш никнем - " . $_POST["login"] . "</h2>";
        }
    }   
    if (isset($_POST["name"])) {
        if (empty($_POST["name"])) {
            echo "<h2>Имя не было введено</h2>";
        } else {
            echo "<h2>Ваше имя - " . $_POST["name"] . "</h2>";
        }
    }   
    if (isset($_POST["email"])) {
        if (empty($_POST["email"])) {
            echo "<h2>Ваша почта не была введена</h2>";
        } else {
            echo "<h2>Ваша почта - " . $_POST["email"] . "</h2>";
        }
    }   

    // сравнение паролей
    if (isset($_POST["submit"])) {
        $password = $_POST["pass"];
        $passwordAgain = $_POST["pass_again"];
        
        if (empty($password) || empty($passwordAgain)) {
            echo "<h2>Поля пароля не могут быть пустыми</h2>";
        } else if ($password != $passwordAgain) {
            echo "<h2>Пароли не совпадают</h2>";
        } else {
            echo "<h2>Пароли совпадают: " . $password . "</h2>";
        }
    }


?>