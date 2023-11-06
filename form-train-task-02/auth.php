<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=`device-width`, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Вход</title>
</head>
<body>
    <div class="div-reg">
    <h1>Авторизация</h1>
    <form action="auth.php" method="post">
        <div class="form-div">
        <div class="form-block">
        <label for="email">Ваша почта</label>
        <input type="email" name="email" id="email">
        </div>
        <div class="form-block">
        <label for="pass">Ваш пароль</label>
        <input type="password" name="pass" id="pass">
        </div>
        <button type="submit">Отправить</button>
        </div>
    </form>
    <div class="check-reg">
    <p>Еще не зарегистрированы? <a href="reg.php">Регистрация</a></p>
    </div>
    </div>
</body>
</html>

<?php
    if (isset($_POST["email"])) {
        if (empty($_POST["email"])) {
            echo "<h2>Ваша почта не была введена</h2>";
        } else {
            echo "<h2>Ваша почта - " . $_POST["email"] . "</h2>";
        }
    }   

?>


<!-- <?php
if (isset($_GET["login"])) {
    echo "<h2>Добро пожаловать, " . $_GET["login"] . "! </h2>"; // передается через url  http://02-kleyfiex:8080/form/reg.php?login=me
}

if (isset($_POST["login"])) {
    echo "<h2>Добро пожаловать, " . $_POST["login"] . "! </h2>"; // передается в теле http (хранится в сессии)
}
?> -->
