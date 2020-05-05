$(function() {
  $('#check-in').click(function() {
    $('#start-date').show()
    console.log('jquery loaded : ' + window.jQuery)
  });
});




//* document.querySelector('button').onclick = function (){
//* let dateStart = document.querySelector('#start-date').value;
//*   let dateEnd = document.querySelector('#end-date').value;
//*   dateStart = Date.parse(dateStart);
//*   dateEnd = Date.parse(dateEnd);
//*   for(let i = dateStart; i<= dateEnd; i=i+24*60*60*1000){
//*     let out = document.querySelector('#out');
//*     out.innerHTML += new Date(i).toISOString().substr(0, 10) + '<br>';
//*   }
//* }
