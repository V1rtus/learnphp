<?php

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
  echo "Спасибо за заполнение формы - " . $firstName . " " . $secondName . ".</br>";
  echo "Вы были похищены " . $whenithappend;
  echo " и отсутствовали в течении " . $howlong . ".</br>";
  echo "Опишите их: " . $alienDescription . "</br>";
  echo "Видели ли вы мою собачку: " . $fangspotted . "</br>";
  echo "Ваш электронный адрес: " . $email . "</br>";
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
