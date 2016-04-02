<?php
//Включаем вывод ошибок
ini_set('display_errors',1);
error_reporting(E_ALL);

//Подключаем функции
require_once ("function.php");

//Если нажата кнопка, передаем параметры
if(isset($_POST)){
  ?>
  <form class="form-fang" action="report.php" method="post">

<div class="form-group">
  <label for="firstName">Имя:</label>
  <input type="text" name="firstName" id="firstName"><br>
</div>

<div class="form-group">
  <label for="secondName">Фамилия:</label>
  <input type="text" name="secondName" id="secondName"><br>
</div>
<div class="form-group">
  <label for="email">Ваш электронный адрес:</label>
  <input type="text" name="email" id="email"><br>
  </div>
<div class="form-group">
  <label for="whenithappend">Когда это произошло?</label>
  <input type="text" name="whenithappend" id="whenithappend"><br>
</div>
<div class="form-group">
  <label for="howlong">Как долго вы отсутствовали?</label>
  <input type="text" name="howlong" id="howlong"><br>
</div>
<div class="form-group">
  <label for="howmany">Сколько их было?</label>
  <input type="text" name="howmany" id="howmany"><br>
</div>
<div class="form-group">
  <label for="alienDescription">Опишите их:</label>
  <input type="text" name="alienDescription" id="alienDescription" size="32"><br>
</div>
<div class="form-group">
  <label for="whattheydid">Что они делали с вами?</label>
  <input type="text" name="whattheydid" id="whattheydid" size="32"><br>
</div>
<div class="form-group">
  <label for="fangspotted">Видели ли мою собачку?</label>
Да <input type="radio" name="fangspotted" id="fangspotted" value="1"> Нет <input type="radio" name="fangspotted" id="fangspotted" value="0">
</br>
</div>


<img src="img/fang.png" alt="Фэнг" width="200" height="175" /><br>

<label for="other">Дополнительная информация:</label>
<textarea name="other" id="other"></textarea><br>

<input type="submit" name="send" id="submit" value="Сообщить о похощении">



</form>
<?php
}
else {
  getData($_POST);
  connectDb();
}
?>
