$(document).ready(function(){

$('#basic').submit(function(e){
$.ajax({
  type: 'POST',
  url: 'https://pilot-payflowlink.paypal.com',
  data: $('#basic').serialize(),
  success: function(data){
    alert(data);
  },
  error: function(request, errorType, errorMessage){
    alert('Error: ' + errorType + ' with message ' + errorMessage);
  }
});
e.preventDefault();
});


});
