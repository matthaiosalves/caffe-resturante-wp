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
      <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>">
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

