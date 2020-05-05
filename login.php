<!DOCTYPE html>
<html lang="ru" dir="ltr">
  <head>
  <?php
$website_title='Гранд Отель Бурана - Вход для администратора';
include 'blocks/links.php'; ?>
  </head>


  <body class="page" id="login-page">

        <?php
        if($_COOKIE['log'] == ''):
         ?>
<div class="mid">

  <div class="pt-3">
      <div class="form row mt-5">
        <div class="modal-content col-6 mx-auto">
              <div class="modal-header">
                  <h4 class="modal-title">Введите логин и пароль для авторизации</h4>
              </div>
                <div class="modal-body" id="login-form">
                  <form action="">
                      <div id="login-disappear">
                        <div class="form-group">
                          <label for="login">Ваш логин</label>
                          <input class="form-control" placeholder="Ваш логин" id="login">
                        </div>
                        <div class="form-group">
                          <label for="pass">Ваш пароль</label>
                          <input type="password" class="form-control" placeholder="Ваш пароль" id="pass">
                        </div>
                      </div>

                    <div class="alert alert-danger mt-2" id="loginErrorBlock"></div>

<div class="w-85 mx-auto my-4" id="login-alert">
  <div class="alert alert-success alert-dismissible fade show" role="alert">
    <h3>Доступ разрешен!</h3>
    <p class="bg-transparent">Хорошей работы!</p>
  </div>
</div>

      <div class="modal-footer">
            <div id="login-returnToMain">
          <a href="/" class="btn btn-primary">Вернуться на главную</a>
        </div>
        <button type="button" id="login-button" class="btn btn-success px-5">Войти</button>
      </div>
                  </form>
                </div>
        </div>
      </div>
  </div>
</div>

        <?php
        else:
         ?>

<div class="mid">

  <div class="pt-3" id="admin_page">

      <div class="container mt-5 bg-white border rounded p-4 pb-5" id="accordion">
<div class="pb-5">
  <div class="card mb-3">
    <div class="card-header">
      <h5>
        <a href="#edit-reservation" data-parent="#accordion" data-toggle="collapse">
          Управление бронями номеров
        </a>
      </h5>
    </div>

  <div id="edit-reservation" class="collapse show">
    <div class="card-body">
  <?php require_once 'blocks/edit-reservations.php' ?>

<div class="alert alert-danger mt-2" id="reservationDeleteErrorBlock"></div>
<div class="alert alert-success mt-2" id="reservationDeleteSuccessBlock"></div>

<div class="col-4 input-group my-4">
<input type="text" class="form-control" placeholder="ID отзыва" name="reserv_id" id="reserv_id">
<div class="input-group-append">
  <button class="btn btn-danger" data-toggle="modal" data-target="#reservation-modal">Удалить бронь</button>
</div>
</div>

    </div>
  </div>
  </div>


  <div class="card mb-3">
    <div class="card-header">
      <h5>
        <a href="#edit-responses" data-parent="#accordion" data-toggle="collapse">
          Управление отзывами
        </a>
      </h5>
    </div>

  <div id="edit-responses" class="collapse show">
    <div class="card-body">
  <?php require_once 'blocks/edit-response.php' ?>

<div class="alert alert-danger mt-2" id="responseDeleteErrorBlock"></div>
<div class="alert alert-success mt-2" id="responseDeleteSuccessBlock"></div>

<div class="col-4 input-group my-4">
<input type="text" class="form-control" placeholder="ID отзыва" name="id" id="id">
<div class="input-group-append">
  <button class="btn btn-danger" data-toggle="modal" data-target="#response-modal">Удалить отзыв</button>
</div>
</div>
    </div>
  </div>
  </div>


</div>

<div class="d-block pb-3">
    <button class="btn btn-outline-danger float-right" id="auth-exit">Выйти</button>
</div>
        </div>
      </div>


  </div>
</div>

<!--Modals------------------------------------------------------------>

<div class="modal" id="response-modal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Подтверждение удаления отзыва</h5>
      </div>
        <div class="modal-body">
          Вы уверены, что хотите удалить данный отзыв?
        </div>
          <div class="modal-footer">
            <button class="btn btn-danger m-2" id="delete-response">Удалить</button>
            <button class="btn btn-info" data-dismiss="modal">Не удалять</button>
          </div>
    </div>
  </div>
</div>

<div class="modal" id="reservation-modal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Подтверждение удаления брони</h5>
      </div>
        <div class="modal-body">
          Вы уверены, что хотите удалить данную бронь?
        </div>
          <div class="modal-footer">
            <button class="btn btn-danger m-2" id="delete-reservation">Удалить</button>
            <button class="btn btn-info" data-dismiss="modal">Не удалять</button>
          </div>
    </div>
  </div>
</div>


  <?php
  endif;
   ?>

<?php include 'blocks/scripts.php' ?>
<script src="js/login_data.js"></script>
  </body>

</html>
