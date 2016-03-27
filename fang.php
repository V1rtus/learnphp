<?php
ini_set('display_errors',1);
error_reporting(E_ALL);
?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Поиск Фэнга</title>
    <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,700,900,300&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700&subset=latin,cyrillic' rel='stylesheet' type='text/css'>

    <script src="bower_components/jquery/dist/jquery.min.js"></script>
</head>
<body>
<div class="container">
    <div class="row">
<header>

    <nav class="navbar navbar-inverse">
       <div class="container-fluid">
           <div class="navbar-header">
               <button type="button" class="navbar-toggle collapsed" data-toogle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                   <span class="cr-only">Toogle navigation</span>
                   <span class="icon-bar"></span>
                   <span class="icon-bar"></span>
                   <span class="icon-bar"></span>
               </button>
               <a href="index.php" class="navbar-brand">PHP Sandbox</a>
           </div> <!--Navbar-collapse-->


           <!-- Collect the nav links, forms, and other content for toggling -->
           <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
               <ul class="nav navbar-nav">
                   <li><a href="index.php">Главная</a></li>
                   <li class="active"><a href="fang.php"> <span class="sr-only">(current)</span>Поиск фенга</a></li>
                   <li class="dropdown">
                       <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                       <ul class="dropdown-menu">
                           <li><a href="#">Action</a></li>
                           <li><a href="#">Another action</a></li>
                           <li><a href="#">Something else here</a></li>
                           <li role="separator" class="divider"></li>
                           <li><a href="#">Separated link</a></li>
                           <li role="separator" class="divider"></li>
                           <li><a href="#">One more separated link</a></li>
                       </ul>
                   </li>
               </ul>



               <ul class="nav navbar-nav navbar-right">
                   <li><a href="#">Link</a></li>
                   <li class="dropdown">
                       <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                       <ul class="dropdown-menu">
                           <li><a href="#">Action</a></li>
                           <li><a href="#">Another action</a></li>
                           <li><a href="#">Something else here</a></li>
                           <li role="separator" class="divider"></li>
                           <li><a href="#">Separated link</a></li>
                       </ul>
                   </li>
               </ul>


           </div><!-- /.navbar-collapse -->
       </div><!-- /.container-fluid -->
    </nav>
</header>

    </div> <!-- row-->

<div class="inBox">
<h1>Вас похищали пришельцы?</h1>
<p>Заполните данную форму, если вас похищали пришельцы.</p>
<form class="form-fang" action="report.php" method="post">


  <label for="firstName">Имя:</label>
  <input type="text" name="firstName" id="firstName"></br>

  <label for="secondName">Фамилия:</label>
  <input type="text" name="secondName" id="secondName"></br>

  <label for="email">Ваш электронный адрес:</label>
  <input type="text" name="email" id="email"></br>

  <label for="whenithappend">Когда это произошло?</label>
  <input type="text" name="whenithappend" id="whenithappend"></br>

  <label for="howlong">Как долго вы отсутствовали?</label>
  <input type="text" name="howlong" id="howlong"></br>

  <label for="howmany">Сколько их было?</label>
  <input type="text" name="howmany" id="howmany"></br>

  <label for="alienDescription">Опишите их:</label>
  <input type="text" name="alienDescription" id="alienDescription" size="32"></br>

  <label for="whattheydid">Что они делали с вами?</label>
  <input type="text" name="whattheydid" id="whattheydid" size="32"></br>

  <label for="fangspotted">Видели ли мою собачку?</label>
Да <input type="radio" name="fangspotted" id="fangspotted" value="1"> Нет <input type="radio" name="fangspotted" id="fangspotted" value="0">
</br>

<img src="img/fang.png" alt="Фэнг" width="200" height="175" /></br>

<label for="other">Дополнительная информация:</label>
<textarea name="other" id="other"></textarea></br>

<input type="submit" name="send" id="submit" value="Сообщить о похощении">



</form>


</div><!-- books -->


</div>

<script src="bower_components/bootstrap/js/dropdown.js"></script>
</body>
</html>
