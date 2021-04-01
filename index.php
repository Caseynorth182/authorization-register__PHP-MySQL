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
    <div class="row">
        <?php
        //Проверяем есть ли КУКИ у пользователя(Авторизирован ли он)
        // если нет, то выводим ему формы для регистрации или авторизации
        if ($_COOKIE['user'] == '') :
            ?>
            <div class="col">
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

            <div class="col">
                <h1>Форма авторизации</h1>

                <form action="vendor/auth.php" method="POST">
                    <input type="text" class="form-control" name="login" id="name" placeholder="Введите логин">
                    <br>
                    <input type="password" class="form-control" name="pass" id="pass" placeholder="Введите пароль">
                    <br>
                    <button type="submit" class="btn btn-primary">Войти</button>
                </form>
            </div>
        <?php else: ?>
            <div class="col-md-6 offset-2">

                <figure class="text-center">
                    <blockquote class="blockquote">
                        <p>Привет <?= $_COOKIE['user'] ?></p>
                    </blockquote>
                    <figcaption class="blockquote-footer">
                       <p> чтобы выйти нажмите тут</p>
                        <a href="vendor/exit.php" type="submit" class="btn btn-danger">Выйти</a>

                    </figcaption>
                </figure>
                <div class="mt-4 col-md-6 offset-2">
                    <img src="https://cdn.pixabay.com/photo/2018/08/31/08/35/toys-3644073_960_720.png" alt="" width="500" >
                </div>
            </div>
        <?php endif; ?>
    </div>


</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf"
        crossorigin="anonymous"></script>
</body>
</html>