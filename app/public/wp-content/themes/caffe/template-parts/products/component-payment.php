<?php
  $args = array(
    'post_type'              => array( 'products' ), //Nome do Slug
    'post_status'            => array( 'publish' ), //Status da postagem
    'posts_per_page'         => '-1', // Posts por página
    'post__not_in'           => array($post->ID), 
  );

  $query = new WP_Query( $args );
?>
<?php $getCategories = get_the_category($query->ID); ?>
<?php $price = get_field('price', $post->ID); ?>

<section class="section--single-content mt-5">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-6 boxCep">
        <div class="row">
          <div class="col-lg-12 boxTitle">
            <h4 class="title">Complete seu pedido</h4>
          </div>
        </div>
        <div class="card">
          <div class="content">
            <div class="boxAddress">
              <img src="<?php echo get_template_directory_uri(); ?>/src/img/Single/address.svg" alt="Icone de Localização">
              <span>Endereço de Entrega</span>
              <p>Informe o endereço onde deseja receber seu pedido</p>
              <div class="input-group mb-3 cep">
                <input type="text" class="form-control" placeholder="CEP" aria-label="CEP" aria-describedby="basic-addon1" maxlength="9" id="cep">
              </div>
              <div class="input-group mb-3 street">
                <input type="text" class="form-control" placeholder="Rua" aria-label="Rua" aria-describedby="basic-addon1" id="logradouro">
              </div>
              <div class="details mb-3">
                <div class="input-group bairro">
                  <input type="text" class="form-control" placeholder="Bairro" aria-label="Bairro" aria-describedby="basic-addon1" id="bairro">
                </div>
                <div class="input-group city">
                  <input type="text" class="form-control" placeholder="Cidade" aria-label="Cidade" aria-describedby="basic-addon1" id="localidade">
                </div>
                <div class="input-group uf">
                  <input type="text" class="form-control" placeholder="UF" aria-label="UF" aria-describedby="basic-addon1" id="uf">
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="card mt-3 mb-3">
          <div class="content">
            <div class="boxPayment">
              <img src="<?php echo get_template_directory_uri(); ?>/src/img/Single/payment.svg" alt="Icone de Pagamento">
              <span>Pagamento</span>
              <p>O pagamento é feito na entrega. Escolha a forma que deseja pagar</p>
            </div>
            <div class="methodPayment">
              <ul>
                <li><a class="btn-payment" id="credito"><img src="<?php echo get_template_directory_uri(); ?>/src/img/Single/credit-card.svg" alt="Cartão de Crédito" style="display: none;" />&nbsp;Cartão de crédito</a></li>
                <li><a class="btn-payment" id="debito"><img src="<?php echo get_template_directory_uri(); ?>/src/img/Single/debit-card.svg" alt="Cartão de Débito" style="display: none;" />&nbsp;cartão de débito</a></li>
                <li><a class="btn-payment"><img src="<?php echo get_template_directory_uri(); ?>/src/img/Single/money.svg" alt="Dinheiro" style="display: none;" />&nbsp;dinheiro</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-6 boxContentSelect">
        <div class="row">
          <div class="col-lg-12 boxTitle">
            <h4 class="title">Cafés selecionados</h4>
          </div>
        </div>
        <div class="card">
          <div class="content">
            <div class="boxImage">
              <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title(); ?>">
              <span class="title"><?php the_title(); ?></span>
              <span class="price">R$ <?php echo $price; ?></span>
            </div>
            <hr>
            <div class="boxPrice">
              <div class="priceItem">
                <span class="title">Total de itens</span>
                <span class="price">R$ <?php echo $price; ?></span>
              </div>
              <div class="priceDelivery">
                <span class="title">Entrega</span>
                <span class="price">R$ 3</span>
              </div>
              <div class="priceTotal">
                <span class="title">Total</span>
                <span class="price">R$ <?php echo $price; ?></span>
              </div>
            </div>
            <a href="" class="btn btnDelivery">Confirmar pedido</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>