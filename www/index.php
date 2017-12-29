<?php
//Определяем с каким контроллером будем работать
$controllerName = isset($_GET['controller']) ? ucfirst($_GET['controller']) : 'Index';
echo 'Подключенный php файл (контроллер) = '.$controllerName.'<br>';
//Определяем с какой функцией будем работать
$actionName = isset($_GET['action']) ? $_GET['action'] : 'index';
echo 'Функция формирующая страницу (Экшен) = '.$actionName.'<br>';
//Подключаем контроллер
include_once '../controllers/'.$controllerName.'Controller.php';
testAction();
?>