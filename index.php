<?php
ini_set('display_errors',1);
error_reporting(E_ALL);
?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Изучение PHP на высоком левеле</title>
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
               <a href="#" class="navbar-brand">Изучаем PHP</a>
           </div> <!--Navbar-collapse-->


           <!-- Collect the nav links, forms, and other content for toggling -->
           <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
               <ul class="nav navbar-nav">
                   <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
                   <li><a href="#">Link</a></li>
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
<h1>Объектно-ориентированный подход</h1>
<p>
    Начнем с твоих реалий. Ты живешь в России, ты не владеешь гигантской "государственной" корпорацией, которую в случае чего будет спасать наше дорогое правительство за счёт средств из бюджета. Власти не станут помогать тебе в твоём деле, если не будут видеть реальную перспективу твоих задумок уже на старте. Они не поделятся с тобой ресурсами, чтобы ты стал богаче, особенно когд Источник статьи: мужской журнал BroDude.ru а за окном кризис, а на борьбу с ним и так денег не хватает. Скорее, парни с верхов придумают для тебя новые "приятные" налоги, которые будут отнимать твои деньги и время. Об их помощи "молодым предпринимателям" можно забыть раз и навсегда. Не нужно рассчитывать на помощь "Большого брата". Привыкай к тому, что любой предприниматель, особенно начинающий, один против всего мира.
</p>
   
<p>
    <?php
   require_once ("class.employments.php");
    /*
    $obj = new minmax();

    echo $obj->min(43,18,5) ; //5
    echo "<br>";
    echo $obj->max(43,18,5); //61*/



   /* echo "<pre>";
    print_r($obj);
    echo "</pre>";*/

    $obj = new employments("V", "Andreevich", "Dotsenko", 28);
   

    echo "Сотрудник — $obj недавно принят на работу";


    echo "<pre>";
    print_r($obj);
    echo "</pre>";

    ?>
</p>

</div><!-- books -->


</div>

<script src="bower_components/bootstrap/js/dropdown.js"></script>
</body>
</html>
