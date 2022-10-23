<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Caffe
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<nav class="navbar navbar-expand-lg bg-light bg-navbar">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <img src="<?php echo get_template_directory_uri(); ?>/src/img/Navbar/logoCoffe.svg" alt="Logo da Loja de Café">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <img class="imageLocal" src="<?php echo get_template_directory_uri(); ?>/src/img/Navbar/localPA.svg" alt="Logo de localização">
            <select id="inputState" class="form-control btnLocal nav-link" required>
              <option selected hidden>Escolha...</option>
            </select>
          </li>
          <li class="nav-item">
            <a class="nav-link btnCart" href="#">
              <img src="<?php echo get_template_directory_uri(); ?>/src/img/Navbar/iconCart.svg" alt="Logo do Carrinho de compra">
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <header class="header">
    <div class="container-fluid">
      <div class="row">
        <div class="content">
          <div class="boxTitle">
            <h1 class="title">Encontre o café perfeito para qualquer hora do dia</h1>
            <p class="description">Com o Coffee Delivery você recebe seu café onde estiver, a qualquer hora</p>
          </div>

          <div class="boxImage">
            <img src="<?php echo get_template_directory_uri(); ?>/src/img/Header/LogoCafeGrande.svg" alt="Logo do Café Grande">
          </div>
        </div>
        <div class="contentDelivery">
          <div class="boxDescription">
            <div class="description">
              <p class="text"><img src="<?php echo get_template_directory_uri(); ?>/src/img/Header/buySimple.png" alt="Logo de Compra simples">Compra simples e segura</p>
              <p class="text"><img src="<?php echo get_template_directory_uri(); ?>/src/img/Header/Embalagem.png" alt="Logo de Embalagem">Embalagem mantém o café intacto</p>
            </div>
            <div class="description">
              <p class="text"><img src="<?php echo get_template_directory_uri(); ?>/src/img/Header/DeliverySpeed.png" alt="Logo de Entrega rápida">Entrega rápida e rastreada</p>
              <p class="text"><img src="<?php echo get_template_directory_uri(); ?>/src/img/Header/cafeFresquinho.png" alt="Logo de Café fresquinho">O café chega fresquinho até você</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
