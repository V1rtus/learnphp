<?php
//Включаем вывод ошибок
ini_set('display_errors',1);
error_reporting(E_ALL);

//Подключаем функции
require_once ("function.php");

//Если нажата кнопка, передаем параметры
if($_POST){
getData($_POST);
}else {
  echo "Данные не переданны";
}

echo "<pre>";
print_r($_POST);
echo "</pre>";
