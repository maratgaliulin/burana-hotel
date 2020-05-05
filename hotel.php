<!DOCTYPE html>
<html lang="ru" dir="ltr">
  <head>
    <?php
$website_title='Гранд Отель Бурана - О нашем отеле';
include 'blocks/links.php'; ?>
  </head>
<?php include 'blocks/mad.php' ?>
  <body class="page">
<?php include 'blocks/header.php' ?>


<div class="content">
  <div class="mt-5" id="hotel-page-logo">
    <img class="w-100 pt-5 mt-4 d-block" height="600px" src="#" alt="">
    <div class="container-fluid ml-3 pb-5">
      <h1 class="display-3 text-left text-light">Исследуйте наш роскошный отель</h1>
      <p class="text-left text-light bg-transparent">Наш великолепный отель расположен в живописном месте, на берегу небольшого озера.</p>
    </div>
  </div>

  <div class="mt-5">
    <div class="px-5">
    <div class="row">
    <div class="card col-xs-10 col-md-12 col-xl-4 border-0 p-1 align-self-center" id="card-1">
      <div class="card-body">
        <h1 class="card-title mb-1 text-left display-4" id="card-title-1">Элегантные комнаты</h1>
        <p class="card-text text-justify text-muted" id="p-card">Наш отель неукоснительно следует правилам превосходного обслуживания и роскоши, в то же время давая своим посетителям возможность почувствовать домашние уют и тепло. Неважно, какой класс номера Вы выберете, мы гарантируем Вам незабываемый отдых!</p>
        <div class="inline mt-3">
          <button class="text-uppercase" id="btn-suite-table">Посмотреть стоимость</button>
  <button class="text-uppercase my-4" id="btn-suite-table1">Посмотреть стоимость</button>
        </div>
      </div>
    </div>

    <div class="card col-xs-12 col-xl-4 border-0 p-1">
  <a class="pill-a" id="pill-1" href="classic-suite.php">
    <img class="card-img rounded-0" src="img/2.jpg" alt="">
        <div class="card-img-overlay">
          <ul class="list-unstyled">
            <li class ="pill pill1">40м<sup>2</sup></li>
          </ul>
          <div class="pills pills-1-2">
            <span class="pill pill1 pull-left-pill">Стандартный номер</span>
            <span class="pill pill1 pull-left-pill">$75 за ночь</span>
          </div>
        </div>
  </a>
    </div>

    <div class="card col-xs-12 col-xl-4 border-0 p-1">
  <a class="pill-a" id="pill-2" href="high-comfort-suite.php">
    <img class="card-img rounded-0" src="img/3.jpg" alt="">
        <div class="card-img-overlay">
          <ul class="list-unstyled">
            <li class ="pill pill2">60м<sup>2</sup></li>
            <li class ="pill pill2 d-hotel-none">Вид на озеро</li>
          </ul>
          <div class="pills pills-1-2">
            <span class="pill pill2 pull-left-pill">Номер "Полулюкс"</span>
            <span class="pill pill2 pull-right-pill">$100 за ночь</span>
          </div>
        </div>
  </a>
    </div>


    <div class="card col-xs-12 col-xl-4 border-0 p-1">
  <a class="pill-a" id="pill-3" href="lux.php">
    <img class="card-img rounded-0" src="img/11.jpg" alt="">
        <div class="card-img-overlay">
          <ul class="list-unstyled">
            <li class ="pill pill3">65м<sup>2</sup></li>
            <li class ="pill pill3 d-hotel-none">Вид на озеро</li>
            <li class ="pill pill3 d-hotel-none">Ванная с джакузи</li>
          </ul>
          <div class="pills">
            <span class="pill pill3 pull-left-pill">Номер "Люкс"</span>
            <span class="pill pill3 pull-right-pill">$150 за ночь</span>
          </div>
        </div>
  </a>
    </div>

    <div class="card col-xs-12 col-xl-4 border-0 p-1">
  <a class="pill-a" id="pill-5" href="presidential-lux.php#">
    <img class="card-img rounded-0" src="img/13.jpg" alt="">
        <div class="card-img-overlay">
          <ul class="list-unstyled">
            <li class ="pill pill5">85м<sup>2</sup></li>
            <li class ="pill pill5 d-hotel-none">Вид на озеро</li>
            <li class ="pill pill5 d-hotel-none">Ванная с джакузи</li>
            <li class ="pill pill5 d-hotel-none">Частная терраса</li>
            <li class ="pill pill5 d-hotel-none">Тренажерный зал</li>
          </ul>
          <div class="pills">
            <span class="pill pill5 pull-left-pill">Номер "Президентский люкс"</span>
            <span class="pill pill5 pull-right-pill">$350 за ночь</span>
          </div>
        </div>
  </a>
    </div>


  <div class="card col-xs-12 col-xl-4 border-0 p-1">
  <a class="pill-a" id="pill-4" href="guest-houses.php">
  <img class="card-img rounded-0" src="img/gh1.jpg" alt="">
      <div class="card-img-overlay">
        <ul class="list-unstyled">
          <li class ="pill pill4">75м<sup>2</sup></li>
          <li class ="pill pill4 d-hotel-none">Отдельный бассейн</li>
          <li class ="pill pill4 d-hotel-none">Отдельная сауна</li>
          <li class ="pill pill4 d-hotel-none">Две спальни</li>
          <li class ="pill pill4 d-hotel-none">Мангал</li>
          <li class ="pill pill4 d-hotel-none">Караоке</li>
        </ul>
        <div class="pills">
          <span class="pill pill4 pull-left-pill">Гостевые дома</span>
          <span class="pill pill4 pull-right-pill">$250 за ночь</span>
        </div>
      </div>
  </a>
  </div>
    </div>
    </div>
  </div>
</div>


<?php include 'blocks/hotel-prices.php' ?>


<?php include 'blocks/inclusions.php' ?>


<?php include 'blocks/footer.php' ?>

<?php include 'blocks/scripts.php' ?>


  </body>


</html>
