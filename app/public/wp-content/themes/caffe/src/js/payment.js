if($('.section--single-content')){
  $('a.btn-payment').click(function(){ 
    $('a.btn-payment').children().hide();
    $('a.btn-payment').removeAttr('style');
    $(this).css({"background":"var(--PurpeLight)","color":"var(--Blue900)","border-radius":"6px", "border": "1px solid var(--Purple200)" });
    $(this).children().show();
  });
}

$("#credito").click(function () {
  alert("This is an alert message!");
});