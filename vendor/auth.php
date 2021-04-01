<?php
//подключаем PDO
require_once 'PDO.php';

$login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
$pass = filter_var(trim($_POST['pass']), FILTER_SANITIZE_STRING);

//КЕШИРОВАНИЕ ПАРОЛЯ + СОЛЬ
$pass = md5($pass . "asfqwezxc345");

//Выборка данных из БД где логин и паоль совпадают с $_POST['login'] и $_POST['pass']
$sql = $pdo->query("SELECT * FROM `users` WHERE `login` = '$login' AND `password` = '$pass'");
$user = $sql->fetch(PDO::FETCH_ASSOC);

//проверка , если полученый массив полученый из БД пустой, то не пускаем
if(count($user) == 0){
    die('Такой пользователь не найден');
}


//проверка прошла, авторизируем пользователя и добовляем КУКИ
// 1 - имя куки;
// 2 - определенное значение для нее
// 3 - период жизни куки
// 4 - где будет действовать
setcookie('user', $user['name'], time() + 3600 * 24, '/');




header('location: /');
?>
