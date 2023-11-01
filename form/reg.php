<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<form action="reg.php" method="POST">
    <label for="login">Логин</label>
    <input type="text" name="login" id="login">
    <label for="pass">Пароль </label>
    <input type="password" name="pass" id="pass">
    <button type="submit">Отправить</button>
</form>
</body>
</html>

<?php
if (isset($_GET["login"])) {
    echo "<h2>Привет, " . $_GET["login"] . "! </h2>"; // передается через url  http://02-kleyfiex:8080/form/reg.php?login=me
}

if (isset($_POST["login"])) {
    echo "<h2>Привет, " . $_POST["login"] . "! </h2>"; // передаеттся в теле http 
}
?>
