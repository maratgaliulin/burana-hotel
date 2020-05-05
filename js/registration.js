/*----------------------Регистрация-----------------------*/

$('#reg-button').click(function(){
    var start_date_1 = $('#start_date_1').val();
    var end_date_1 = $('#end_date_1').val();
    var roomtype = $('#roomtype').val();
    var username = $('#username').val();
    var surname = $('#surname').val();
    var email = $('#email').val();
    var phone = $('#phone').val();

$.ajax({
url: 'blocks/reg.php',
type: 'POST',
cache: false,
data: {'start_date_1' :start_date_1, 'end_date_1' :end_date_1, 'roomtype' :roomtype, 'username' :username, 'surname' :surname, 'email' :email, 'phone' :phone},
dataType: 'html',
success: function(data) {
if(data == 'Ready'){
    $('#form-disappear').hide();
    $('#errorBlock').hide();
    $('#reg-button').hide();
    $('#returnToMain').show();
    $('#alert').show();

}
    else {
$('#errorBlock').show();
$('#errorBlock').text(data);
}
}
});
});
