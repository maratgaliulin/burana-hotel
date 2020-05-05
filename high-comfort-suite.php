<!DOCTYPE html>
<html lang="ru" dir="ltr">
  <head>
    <?php
$website_title='Гранд Отель Бурана - Номера Полулюкс';
include 'blocks/links.php'; ?>
  </head>
<?php include 'blocks/mad.php' ?>
  <body class="page">
<?php include 'blocks/header.php' ?>


<div class="content w-100" id="classic-suite-logo">
  <img class="w-100 pt-5 mt-4 d-block" height="600px" src="#" alt="">
  <div class="container-fluid ml-5 pb-5">
    <h1 class="display-2 text-left text-light">Номер класса "Полулюкс"</h1>
    <p class="text-left ml-3 text-light bg-transparent">Стоимость: $100 в сутки</p>
  </div>
</div>

<div class="my-5 ml-5">
  <div class="w-90 mx-auto">
  <div class="row mx-auto">
  <div class="d-block col-xs-10 col-xl-4 border-0" id="card-1">
    <div class="text-left px-1" id="suite-text">
      <h1 class="mb-3 display-4 text-muted" id="classic-suite-1">По-настоящему роскошный номер</h1>
      <p class="title text-muted" id="p-guesthouse-card">Этот номер встретит Вас теплотой, уютом и обширным пространством. Вид из балкона на озеро поистине чудесен, а восходы и закаты - великолепны. В номере имеются все удобства, и даже больше - всё, что нужно для отличного отдыха! </p>
    </div>
<div class="w-100 pt-5 pr-3 text-center" id="bottom-img">
  <img class="d-block img-fluid" src="img/2.jpg" alt="">
</div>
  </div>

<div class="text-center col-xs-12 col-xl-8">
  <img class="d-block img-fluid w-90" src="img/high-comfort-suite/high-comfort_1.jpg" alt="">
</div>
</div>
<div class="bg-muted">
</div>
  </div>
  </div>



<div class="w-100 bg-light-grey">
  <div class="w-85 py-5 mx-auto">
    <div class="row">
      <div class="col-xs-12 col-xl-8">
        <div class="card bg-transparent border-0 gh-card d-inline-block">
          <div class="carousel slide" data-ride="carousel" id="gh-carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img class="card-image guest-house-card d-block img-fluid" id="img1" src="/img/high-comfort-suite/high-comfort_1.jpg" alt="">
              </div>
              <div class="carousel-item">
                <img class="card-image guest-house-card d-block img-fluid" id="img2" src="/img/high-comfort-suite/high-comfort_2.jpg" alt="">
              </div>
              <div class="carousel-item">
                <img class="card-image guest-house-card d-block img-fluid" id="img3" src="/img/high-comfort-suite/high-comfort_3.jpg" alt="">
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
</ol>
            </div>

          </div>
        </div>
      </div>
      <div class="col-xs-12 col-xl-4 gh-paragraph align-self-center">
        <h1 class="display-4 text-dark text-left mt-2 mb-3">Характеристики комнаты</h1>
        <h3 class="text-secondary">Площадь номеров: 52 м<sup>2</sup></h3>
        <p class="bg-transparent">В номере: две широкие одноместные кровати с ортопедическими матрасами, вся необходимая мебель, выполненная в роскошном классическом стиле, удобный письменный стол, а также индивидуальная панель управления климатом, персональный сейф и мини-бар. С балкона открывается прекрасный вид на озеро, расположенное вблизи Отеля. Бесплатный Wi-Fi? Безусловно! А более подробный перечень наших услуг Вы найдете чуть ниже.</p>
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
        $('#bottom-link2').hide();
    })
    </script>

  </body>


</html>
