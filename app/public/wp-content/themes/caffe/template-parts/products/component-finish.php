<?php
//Recebe os dados atráves do método GET vindo da página de checkout

$city = $_GET["cidade"];
$street = $_GET["rua"];
$payment = $_GET["pagamento"];
$ditrict = $_GET["bairro"];
?>


<section class="section--finish mt-5">
  <div class="container-fluid">
    <div class="row">
      <div class="content">
        <div class="col-lg-6 boxText">
          <h2 class="title">Uhu! Pedido confirmado</h2>
          <p class="description">Agora é só aguardar que logo o café chegará até você</p>

          <div class="descriptionDelivery">
            <div class="street">
              <div class="image">
                <img src="<?php echo get_template_directory_uri(); ?>/src/img/Finish/local.svg" alt="Imagem de Localização">
              </div>
              <div class="description">
                <p>Entrega em <strong><?php echo $street; ?></strong><br> <?php echo $ditrict; ?>, <?php echo $city; ?></p>
              </div>
            </div>
            <div class="timer">
              <div class="image">
                <img src="<?php echo get_template_directory_uri(); ?>/src/img/Finish/timer.svg" alt="Imagem de Tempo">
              </div>
              <div class="description">
                <p>Previsão de entrega<br>
                  <strong> 20 min - 30 min </strong>
                </p>
              </div>
            </div>
            <div class="payment">
              <div class="image">
                <img src="<?php echo get_template_directory_uri(); ?>/src/img/Finish/money.svg" alt="Imagem de Pagamento">
              </div>
              <div class="description">
                <p>Pagamento na entrega <br>
                  <?php if($payment === 'Dinheiro'): ?>
                    <strong>Dinheiro</strong>
                    <?php else: ?>
                     <strong>Cartão de <?php echo $payment; ?></strong>
                  <?php endif; ?>
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6 boxImage">
          <img src="<?php echo get_template_directory_uri(); ?>/src/img/Finish/moto.svg" alt="Imagem de uma Moto do Entregador">
        </div>
      </div>
    </div>
  </div>
</section>