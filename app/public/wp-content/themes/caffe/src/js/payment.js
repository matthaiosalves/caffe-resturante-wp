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
    let bairro = $("#bairro").val();
    $("a.btnDelivery").attr("href", "/finish?pagamento=Credito&rua=" + logradouro + "&cidade=" + localidade + "&bairro=" + bairro)
  });
  $("#debito").click(function () {
    let logradouro = $("#logradouro").val();
    let localidade = $("#localidade").val();
    let bairro = $("#bairro").val();
    $("a.btnDelivery").attr("href", "/finish?pagamento=Debito&rua=" + logradouro + "&cidade=" + localidade + "&bairro=" + bairro)
  });
  $("#dinheiro").click(function () {
    let logradouro = $("#logradouro").val();
    let localidade = $("#localidade").val();
    let bairro = $("#bairro").val();
    $("a.btnDelivery").attr("href", "/finish?pagamento=Dinheiro&rua=" + logradouro + "&cidade=" + localidade + "&bairro=" + bairro)
  });
}

//Alerta para quando o carrinho estiver vazio
if($('.section--single-content')){
  $('.btnCart').click(function(){ 
    alert("Seu carrinho está vazio! Selecione um produto.");
  });
}


