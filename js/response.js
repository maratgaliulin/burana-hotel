/*----------------------Регистрация-----------------------*/

$('#response-button').click(function(){
    var name = $('#name').val();
    var response = $('#response').val();

$.ajax({
url: 'blocks/response-form.php',
type: 'POST',
cache: false,
data: {'name' :name, 'response' :response},
dataType: 'html',
success: function(data) {
if(data == 'Ready'){
$('#responseErrorBlock').hide();
      document.location.reload(true);

}
    else {
$('#responseErrorBlock').show();
$('#responseErrorBlock').text(data);
}
}
});
});
