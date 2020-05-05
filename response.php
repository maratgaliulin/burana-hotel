<!DOCTYPE html>
<html lang="ru" dir="ltr">
  <head>
    <?php
$website_title='Гранд Отель Бурана - Отзывы наших клиентов';
include 'blocks/links.php'; ?>
  </head>
<?php include 'blocks/mad.php' ?>


  <body class="page">
<?php include 'blocks/header.php' ?>


<div class="content pt-5">
  <div class="d-flex align-items-end justify-content-start py-4 my-5 w-100" id="response-page-logo">
    <div class="response-header-text pl-5">
        <h1 class="text-light display-2">Оставьте отзыв на нашем сайте</h1>
        <p class="font-italic text-light bg-transparent pl-5">Ваше мнение очень важно для нас</p>
      </div>
  </div>
  <div class="layout">
    <div class="text" id="quote">

<div class="modal" id="response-form">
  <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title">Ваш отзыв</h4>
            <button class="close" data-dismiss="modal">&times</button>
        </div>
          <div class="modal-body">
            <form>
              <div class="form-group">
                <label for="username">Ваше имя</label>
                <input type="text" class="form-control" placeholder="Введите Ваше имя" id="name">
              </div>
            <div class="form-group">
            <label for="message">Ваш отзыв</label>
<textarea type="text" class="form-control" rows="8" cols="57" placeholder="Ваш отзыв" id="response"></textarea>
            </div>

<div class="alert alert-danger mt-2" id="responseErrorBlock"></div>

<div class="modal-footer">
  <button type="button" class="btn btn-primary rounded-0" id="response-button">Опубликовать отзыв</button>
</div>
            </form>
          </div>
      </div>
  </div>
</div>

<div class="d-flex justify-content-center my-4">
  <button class="btn btn-info mb-4 px-5 py-2" id="response-button" data-toggle="modal" data-target="#response-form">Оставить отзыв</button>
</div>

<div class="container">
<?php
require_once 'blocks/response_output.php';
 ?>
</div>
</div>
</div>

<?php include 'blocks/footer.php' ?>

<?php include 'blocks/scripts.php' ?>
<script src="js/response.js"></script>

  </body>


</html>
