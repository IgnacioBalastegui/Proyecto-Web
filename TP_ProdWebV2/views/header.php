<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>TP Prod.Web</title>
    <!-- Custom css-->
    <link rel="stylesheet" href="./public/css/styles.css">
    <!-- Bootstrap css-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/cedf025736.js" crossorigin="anonymous"></script>
    <?php require_once('./model/functions_library.php');?>
  </head>
<body>
<nav class="navbar navbar-expand-lg">
  <!-- <a class="navbar-brand" href="#">Navbar</a> -->
  <a class="navbar-brand "><?php require_once('header_logo.php');?></a>
  <button class="navbar-toggler custom-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon "></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="index.php"><h6>Inicio</h6></a>
      </li>                  
      <li class="nav-item">
        <a class="nav-link" href="./index.php?controller=home&action=contact"><h6>Contáctenos</h6></a>
        </li>
        <!--<li class="nav-usuario">
        <a class="nav-link" href=""><h6>Login</h6></a>
        </li>-->
    </ul>
  </div>
  <div class="nav-usuario">
  <ul class="navbar-nav">

  <li class="nav-item">
        <a class="nav-link" href=""><h6><i class="fas fa-shopping-cart"></i></h6></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="./index.php?controller=home&action=login"><h6>Login</h6></a>
      </li>

      <!--poner el icono del carrito tambien-->
</nav>