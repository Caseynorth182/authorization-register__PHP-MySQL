<?php

define('DRIVER','mysql');
define('HOST','localhost');
define('DB_NAME','test');
define('LOGIN','root');
define('PASS','root');

try {
    $pdo = new PDO(DRIVER.':host='.HOST.'; dbname='.DB_NAME.'',LOGIN, PASS);
} catch (PDOException $e){
    echo 'no '. $e->getMessage();
}