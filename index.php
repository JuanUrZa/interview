<?php

require_once './controllers/user.php';
require_once './repository/mysql.php';

$mysql = new MysqlDB();
$userController = new UserController($mysql);
$userController->showUsers();

?>