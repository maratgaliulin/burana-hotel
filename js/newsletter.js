$('#news-submit').click(function(){
event.preventDefault();
    var username = $('#user_name').val();
    var surname = $('#sur_name').val();
    var email = $('#e_mail').val();


$.ajax({
url: 'blocks/newsletter.php',
type: 'POST',
cache: false,
data: {'user_name' :username, 'sur_name' :surname, 'e_mail' :email},
dataType: 'html',
success: function(data) {
if(data == 'Ready'){
    $('#newsletter-alert').show();
    $('#newsletterErrorBlock').hide();
    setTimeout(function(){
      document.location.reload(true);
}, 2500);
}
else {
$('#newsletterErrorBlock').show();
$('#newsletterErrorBlock').text(data);
}
},
});
});
