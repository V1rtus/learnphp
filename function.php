<?php
//Функция подключения к БД
function connectDb () {
  
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
  $whenithappend = $_POST['whenithappend'];
  $howlong = $_POST['howlong'];
  $howmany = $_POST['howmany'];
  $alienDescription = $_POST['alienDescription'];
  $whattheydid = $_POST['whattheydid'];
  $fangspotted = $_POST['fangspotted'];
  $other = $_POST['other'];
  $email = $_POST['email'];

  //Если параметр равен 1, запустить функцию
  if ($fangspotted == 1) {
    FangSpotted(1);
  }else {
    FangSpotted(0);
  }
  //Выводим сообщение
  echo "Спасибо за заполнение формы - " . $firstName . " " . $secondName . ".</br>". " Вы были похищены " . $whenithappend .
" и отсутствовали в течении " . $howlong . ".</br>" . "Опишите их: " . $alienDescription . " и их было количество - " . $howmany . ".</br>" ." Они делали с вами: " . $whattheydid . ".</br>". "Видели ли вы мою собачку: " . $fangspotted . "</br>" . "Дополнительная инфорамция: " . $other . "<br>" . "Ваш электронный адрес: " . $email . "</br>" ;

SetData($firstName,$secondName,$whenithappend,$howlong,$howmany,$alienDescription,$whattheydid,$fangspotted,$other,$email);

}

function FangSpotted ($val){
  global $fangspotted;

  if($val === 1) {
    $fangspotted = "Видел";
  }else {
    $fangspotted = "Не видел";
  }
}

function SetData ($firstName,$secondName,$whenithappend,$howlong,$howmany,$alienDescription,$whattheydid,$fangspotted,$other,$email) {

  $db_connect = connectDb();

  $sql = "INSERT INTO alien (first_name,second_name,when_it_happened,how_long,how_many,alien_description,what_they_did,fang_spotted,other,email) VALUES ('$firstName','$secondName','$whenithappend','$howlong','$howmany','$alienDescription','$whattheydid','$fangspotted','$other','$email')";

  $result = mysqli_query($db_connect, $sql) or die ('Ошибка выполнения запроса');

  mysqli_close($db_connect);
}

function sendMail () {
  //Отправка почты
  $to = "sigma-com@mail.ru";
  $subject = "Сообщение о похищении";
  $from = $email;
  $msg =  "Спасибо за заполнение формы - " . $firstName . " " . $secondName . ".\n". "Вы были похищены " . $whenithappend .
  " и отсутствовали в течении " . $howlong . ".\n" . "Опишите их: " . $alienDescription . " и их было количество - " . $howmany . ".\n" ."Они делали с вами: " . $whattheydid . ".\n". "Видели ли вы мою собачку: " . $fangspotted . "\n" . "Ваш электронный адрес: " . $email . "\n" . "Дополнительная информация: " . $other;

  mail($to,$subject,$msg, 'From: ' . $email);
}
