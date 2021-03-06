<!DOCTYPE html>
<html lang="ru" dir="ltr">
  <head>
  <?php
$website_title='Гранд Отель Бурана - Номера класса Люкс';
include 'blocks/links.php'; ?>
  </head>
<?php include 'blocks/mad.php' ?>
  <body class="page">
<?php include 'blocks/header.php' ?>


<div class="content w-100" id="classic-suite-logo">
  <img class="w-100 pt-5 mt-4 d-block" height="600px" src="#" alt="">
  <div class="container-fluid ml-5 pb-5">
    <h1 class="display-2 text-left text-light">Номер класса "Люкс"</h1>
    <p class="text-left ml-3 text-light bg-transparent">Стоимость: $150 в сутки</p>
  </div>
</div>

<div class="my-5 ml-5">
  <div class="w-90 mx-auto">
  <div class="row mx-auto">
  <div class="d-block col-xs-10 col-xl-4 border-0" id="card-1">
    <div class="text-left px-1" id="suite-text">
      <h1 class="mb-3 display-3 text-muted" id="classic-suite-1">Эксклюзивный стиль</h1>
      <p class="title text-muted" id="p-guesthouse-card">Хотите по-настоящему расслабиться в атмосфере роскоши? Добро пожаловать в наш "Люкс"! Простор, уют и элегантная отделка комнат в белом и бежевых тонах отвлекают от житейских забот, а ванная с джакузи помогут снять мышечное напряжение. В номерах "Люкс" учтена каждая мелочь для Вашего максимального комфорта. Не верите? Убедитесь сами!</p>
    </div>
<div class="w-100 pt-5 pr-3 text-center" id="bottom-img">
  <img class="d-block img-fluid" src="img/lux/lux-3-1.jpg" alt="">
</div>
  </div>

<div class="text-center col-xs-12 col-xl-8">
  <img class="d-block img-fluid w-90" src="img/lux/lux-1-2.jpg" alt="">
</div>
</div>
<div class="bg-muted">
</div>
  </div>
  </div>



<div class="w-100 bg-light-grey">
  <div class="w-85 py-5 mx-auto">
    <div class="row">
      <div class="col-xs-12 col-xl-8 py-5">
        <div class="card bg-transparent border-0 gh-card d-inline-block">
          <div class="carousel slide" data-ride="carousel" id="gh-carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img class="card-image guest-house-card d-block img-fluid" id="img1" src="/img/lux/lux-1.jpg" alt="">
              </div>
              <div class="carousel-item">
                <img class="card-image guest-house-card d-block img-fluid" id="img2" src="/img/lux/lux-2.jpg" alt="">
              </div>
              <div class="carousel-item">
                <img class="card-image guest-house-card d-block img-fluid" id="img3" src="/img/lux/lux-3.jpg" alt="">
              </div>
              <div class="carousel-item">
                <img class="card-image guest-house-card d-block img-fluid" id="img4" src="/img/lux/lux-4.jpg" alt="">
              </div>
              <a href="#gh-carousel" class="carousel-control-prev" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
              </a>
              <a href="#gh-carousel" class="carousel-control-next" data-slide="next">
                <span class="carousel-control-next-icon"></span>
              </a>
        <ol class="carousel-indicators mb-3" id="gh-carousel-indicator">
          <li class=" active" data-target="#gh-carousel" data-slide-to="0"></li>
          <li class="" data-target="#gh-carousel" data-slide-to="1"></li>
          <li class="" data-target="#gh-carousel" data-slide-to="2"></li>
          <li class="" data-target="#gh-carousel" data-slide-to="3"></li>
        </ol>
        </div>
        </div>
        </div>
      </div>
      <div class="col-xs-12 col-xl-4 gh-paragraph align-self-center">
        <h1 class="display-4 text-dark text-left mt-2 mb-3">Характеристики комнаты</h1>
        <h3 class="text-secondary">Площадь номеров: 79 м<sup>2</sup></h3>
        <p class="bg-transparent">В номере: две комнаты, широкая двухместная кровать с ортопедическим матрасом, эксклюзивный комплект мебели, выполненной в роскошном стиле, удобный письменный стол, ванная с джакузи, два широкоэкранных телевизора, а также индивидуальная панель управления климатом, персональный сейф и мини-бар. С балкона открывается прекрасный вид на озеро, расположенное вблизи Отеля. Бесплатный Wi-Fi? Безусловно! А более подробный перечень наших услуг Вы найдете чуть ниже.</p>
      </div>
    </div>
  </div>
</div>




<?php include 'blocks/inclusions.php' ?>



<div id="classic-suite-bottom-links">




<?php include 'blocks/bottom-links.php' ?>



</div>



<?php include 'blocks/footer.php' ?>

<?php include 'blocks/scripts.php' ?>

<script type="text/javascript">
    $(document).ready(function(){
        $('#bottom-link3').hide();
    })
    </script>

  </body>


</html>
