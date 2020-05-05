<!DOCTYPE html>
<html lang="ru" dir="ltr">
  <head>
    <?php
$website_title='Гранд Отель Бурана - Забронировать номер';
include 'blocks/links.php'; ?>
  </head>


  <body class="page" id="registration-page">
<div class="mid">

  <div class="pt-3">
      <div class="form row mt-5">
        <div class="modal-content col-6 mx-auto">
              <div class="modal-header">
                  <h4 class="modal-title">Забронировать номер</h4>
              </div>
                <div class="modal-body" id="registration-form">
                  <form action="blocks/reg.php" method="post">

                        <div id="form-disappear">
                            <div class="form-row mb-3">
                              <div class="input-group col my-1">
                                <div class="input-group-prepend">
                                  <span class="input-group-text input-header">Въезд</span>
                                </div>
                                <input class="form-control" type="date" name="start_date_1" id="start_date_1" value="<?php include_once 'blocks/start-date-1.php'; echo $row_display ?>">
                              </div>

                              <div class="input-group col my-1">
                                <div class="input-group-prepend">
                                  <span class="input-group-text input-header">Выезд</span>
                                </div>
                                <input class="form-control" type="date" name="end_date_1" id="end_date_1" value="<?php include_once 'blocks/end-date-1.php'; echo $row_display_end ?>">
                              </div>
                            </div>

                      <div class="form-group">
                        <label for="room-type">Вид комнаты</label>
                        <select name="roomtype" class="form-control" placeholder="Ваше имя" id="roomtype">
                        <option value="st">Стандартный номер</option>
                        <option value="pl">Полулюкс</option>
                        <option value="lx">Люкс</option>
                        <option value="prl">Президенстский люкс</option>
                        <option value="gh">Гостевой дом</option>
                        </select>
                      </div>

                      <div class="form-group">
                        <label for="username">Ваше имя</label>
                        <input name="username" class="form-control" placeholder="Ваше имя" id="username">
                      </div>
                      <div class="form-group">
                        <label for="surname">Ваша фамилия</label>
                        <input name="surname" class="form-control" placeholder="Ваша фамилия" id="surname">
                      </div>
                      <div class="form-group">
                        <label for="phone">Ваш номер телефона</label>
                        <input name="phone" class="form-control" placeholder="Номер телефона" id="phone">
                      </div>
                      <div class="form-group">
                        <label for="email">Ваш email</label>
                        <input name="email" class="form-control" placeholder="Email" id="email">
                      </div>
                        </div>

                    <div class="alert alert-danger mt-2" id="errorBlock"></div>

<div class="w-85 mx-auto my-4" id="alert">
  <div class="alert alert-success alert-dismissible fade show" role="alert">
    <h3>Поздравляем!</h3>
    <h3>Заявка на бронь успешно принята!</h3>
<p class="bg-transparent mt-3">Наш менеджер свяжется с Вами в ближайшее время</p>
  </div>
</div>

      <div class="modal-footer">
            <div id="returnToMain">
          <a href="/" class="btn btn-primary rounded-0">Вернуться на главную</a>
        </div>
        <button type="button" id="reg-button" class="btn btn-outline-success rounded-0">Забронировать</button>
      </div>
                  </form>
                </div>
        </div>
      </div>
  </div>
</div>


<?php include 'blocks/scripts.php' ?>
<script src="js/registration.js"></script>
  </body>

</html>
