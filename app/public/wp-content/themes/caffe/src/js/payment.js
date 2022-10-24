if($('.section--single-content')){
  $('a.btn-payment').click(function(){ 
    $('a.btn-payment').children().hide();
    $('a.btn-payment').removeAttr('style');
    $(this).css({"background":"var(--PurpeLight)","color":"var(--Blue900)","border-radius":"6px", "border": "1px solid var(--Purple200)" });
    $(this).children().show();
  });
}
if($('.section--single-content')){
  $("#credito").click(function () {
    let logradouro = $("#logradouro").val();
    let localidade = $("#localidade").val();
    $("a.btnDelivery").attr("href", "/finalizado.php?pagamento=Credito&rua=" + logradouro + "&cidade=" + localidade)
  });
  $("#debito").click(function () {
    let logradouro = $("#logradouro").val();
    let localidade = $("#localidade").val();
    $("a.btnDelivery").attr("href", "/finalizado.php?pagamento=Debito&rua=" + logradouro + "&cidade=" + localidade)
  });
  $("#dinheiro").click(function () {
    let logradouro = $("#logradouro").val();
    let localidade = $("#localidade").val();
    $("a.btnDelivery").attr("href", "/finalizado.php?pagamento=Dinheiro&rua=" + logradouro + "&cidade=" + localidade)
  });
}
