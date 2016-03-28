<?php
//Функция подключения к БД
function connectDb (){
  $dbHost = 'localhost';
  $dbUser = 'root';
  $dbPass = '';
  $dbName = 'loftfang';

  $connect = mysqli_connect ($dbHost, $dbUser, $dbPass, $dbName) or die ("Not connect");

  return $connect;

}


function getData (array  $POST) {

  global $fangspotted;

  $firstName = $_POST['firstName'];
  $secondName= $_POST['secondName'];
  $email = $_POST['email'];
  $whenithappend = $_POST['whenithappend'];
  $howlong = $_POST['howlong'];
  $howmany = $_POST['howmany'];
  $alienDescription = $_POST['alienDescription'];
  $whattheydid = $_POST['whattheydid'];
  $fangspotted = $_POST['fangspotted'];
  $other = $_POST['other'];

  //Если параметр равен 1, запустить функцию
  if ($fangspotted == 1) {
    FangSpotted(1);
  }else {
    FangSpotted(0);
  }
  //Выводим сообщение
  echo "Спасибо за заполнение формы - " . $firstName . " " . $secondName . ".</br>". " Вы были похищены " . $whenithappend .
" и отсутствовали в течении " . $howlong . ".</br>" . "Опишите их: " . $alienDescription . " и их было количество - " . $howmany . ".</br>" ." Они делали с вами: " . $whattheydid . ".</br>". "Видели ли вы мою собачку: " . $fangspotted . "</br>" . "Дополнительная инфорамция: " . $other . "<br>" . "Ваш электронный адрес: " . $email . "</br>" ;

//Отправка почты
$to = "sigma-com@mail.ru";
$subject = "Сообщение о похищении";
$from = $email;
$msg =  "Спасибо за заполнение формы - " . $firstName . " " . $secondName . ".\n". "Вы были похищены " . $whenithappend .
" и отсутствовали в течении " . $howlong . ".\n" . "Опишите их: " . $alienDescription . " и их было количество - " . $howmany . ".\n" ."Они делали с вами: " . $whattheydid . ".\n". "Видели ли вы мою собачку: " . $fangspotted . "\n" . "Ваш электронный адрес: " . $email . "\n" . "Дополнительная информация: " . $other;

mail($to,$subject,$msg, 'From: ' . $email);



  //echo $firstName . " " . $secondName . " " . $email . " " . $whenithappend . " " . $howlong . " " . $howmany . " " . $alienDescription . " " . $whattheydid . " " . $fangspotted . " " . $other . "<br>";
}

function FangSpotted ($val){
  global $fangspotted;

  if($val === 1) {
    $fangspotted = "Видел";
  }else {
    $fangspotted = "Не видел";
  }
}
