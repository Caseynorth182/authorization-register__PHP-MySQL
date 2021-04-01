<?php
//подключение PDO
require_once 'PDO.php';

//фильтрация формы от вредоносного кода
$login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
$name = filter_var(trim($_POST['name']), FILTER_SANITIZE_STRING);
$pass = filter_var(trim($_POST['pass']), FILTER_SANITIZE_STRING);

//проверка на длину логина имени и пароля
if (mb_strlen($login) < 5 || mb_strlen($login) > 90) {
    echo 'Недопустимая длинна логина';
    die();
} else if (mb_strlen($name) < 3 || mb_strlen($name) > 50) {
    echo 'Недопустимая длинна имени';
    die();
} else if (mb_strlen($pass) < 5 || mb_strlen($pass) > 20) {
    echo 'Недопустимая длинна пароля (от 5 до 20 символов)';
    die();
}

//INSERT данных в БД
$sql = "INSERT INTO users (login, name, password) VALUE (:login, :name, :password)";
$stmt = $pdo->prepare($sql);
$res = $stmt->execute([
    'login' => $login,
    'name' => $name,
    'password' => $pass,
]);

echo "<pre>";
var_dump($stmt);


