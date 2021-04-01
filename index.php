<?php
    require_once 'vendor/PDO.php';
?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>

    <div class="container mt-4">
        <h1>Форма регистрации</h1>

        <form action="vendor/check.php" method="POST">
            <input type="text" class="form-control" name="login" id="login" placeholder="Введите логин">
            <br>
            <input type="text" class="form-control" name="name" id="name" placeholder="Введите имя">
            <br>
            <input type="password" class="form-control" name="pass" id="pass" placeholder="Введите пароль">
            <br>
            <button type="submit" class="btn btn-success">Зарегестрировать</button>
        </form>
    </div>




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf"
        crossorigin="anonymous"></script>
</body>
</html>