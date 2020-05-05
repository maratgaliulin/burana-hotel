/*----------------------Регистрация-----------------------*/

$('#login-button').click(function(){
    var login = $('#login').val();
    var pass = $('#pass').val();

$.ajax({
url: 'blocks/login-data.php',
type: 'POST',
cache: false,
data: {'login' :login, 'pass' :pass},
dataType: 'html',
success: function(data) {
if(data == 'Ready'){
    $('#login-disappear').hide();
    $('#loginErrorBlock').hide();
    $('#login-button').hide();
    $('#login-alert').show();
    setTimeout(function(){
        document.location.reload(true);
}, 1500);

}
    else {
$('#loginErrorBlock').show();
$('#loginErrorBlock').text(data);
$('#login-returnToMain').show();
}
}
});
});


/*----------------------Выход-----------------------*/

$('#auth-exit').click(function(){

$.ajax({
url: 'blocks/exit.php',
type: 'POST',
cache: false,
data: {},
dataType: 'html',
success: function(data) {
setTimeout(function(){
  document.location.reload(true);
}, 2000);
}
});
});

/*------------------------ Удалить отзыв ------------------------------*/

$('#delete-response').click(function(){
    var id = $('#id').val();

$.ajax({
url: 'blocks/delete-response.php',
type: 'POST',
cache: false,
data: {'id' :id},
dataType: 'html',
success: function(data) {
if(data == 'Отзыв удален!'){
    $('#responseDeleteErrorBlock').hide();
    $('#responseDeleteSuccessBlock').show();
    $('#responseDeleteSuccessBlock').text(data);
    setTimeout(function(){
        document.location.reload(true);
}, 500);

}
    else {
$('#responseDeleteErrorBlock').show();
$('#responseDeleteErrorBlock').text(data);
}
}
});
});


/*------------------------ Удалить бронь ------------------------------*/

$('#delete-reservation').click(function(){
    var reserv_id = $('#reserv_id').val();

$.ajax({
url: 'blocks/delete-reservation.php',
type: 'POST',
cache: false,
data: {'reserv_id' :reserv_id},
dataType: 'html',
success: function(data) {
if(data == 'Бронь удалена!'){
    $('#reservationDeleteErrorBlock').hide();
    $('#reservationDeleteSuccessBlock').show();
    $('#reservationDeleteSuccessBlock').text(data);
    setTimeout(function(){
        document.location.reload(true);
}, 500);

}
    else {
$('#reservationDeleteErrorBlock').show();
$('#reservationDeleteErrorBlock').text(data);
}
}
});
});
