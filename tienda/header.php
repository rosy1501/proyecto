<?php

session_start();

if(!isset($_SESSION['id'])){
header("Location: index.php");
}

$nombre = $_SESSION['nombre'];
$tipo_usuario = $_SESSION['tipo_usuario'];
$id = $_SESSION['id'];

?>

    <?php
      if ($tipo_usuario == 1){
        ?>
<!DOCTYPE html>
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://kit.fontawesome.com/712575d4a5.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="style.css">
<link href="https://fonts.googleapis.com/css2?family=pt+Sans:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #A4E3FB;">
  <div class="container">
  <a class="navbar-brand" href="principal.php">
      <img src="imagen5.png" alt="" width="60" height="60" class="d-inline-block align-text-center">
      Ronnie Store
    </a>
    <ul class="navbar-nav mx-auto">
    <div class="search">
      <input type="text" placeholder="Buscar accesorios..." required>
      <div class="btn">
        <i class="fas fa-search icon"></i>
      </div>
    </div>
    </ul>
    <a class="nav-link" href="#">Sobre Nosotros</a>
  </div>
</nav>

<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #A4E3FB;">
  <div class="container">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Categorias
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="alta_categorias.php">Alta categorias</a></li>
            <li><a class="dropdown-item" href="#">Listado Categorias</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Clientes
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="alta_clientes.php">Alta Clientes</a></li>
            <li><a class="dropdown-item" href="#">Listado de Clientes</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Productos
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="alta_productos.php">Alta Productos</a></li>
            <li><a class="dropdown-item" href="#">Listado de Productos</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Proveedores
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="alta_proveedores.php">Alta Proveedores</a></li>
            <li><a class="dropdown-item" href="#">Listado de Proveedores</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Usuarios
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="alta_usuarios.php">Alta Usuarios</a></li>
            <li><a class="dropdown-item" href="#">Listado de Usuarios</a></li>
          </ul>
        </li>
        <a class="nav-link disabled">Bienvenido <?php echo $nombre?></a>
    </div>
    <form class="d-flex">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-1">
        <li class="nav-item">
          <a class="nav-link" href="login.php">Iniciar Sesion</a>
        </li>
        <a class="nav-link" href="logout.php">Salir</a>
    </form>
      </ul>
      <svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" fill="currentColor" class="bi bi-basket" viewBox="0 0 16 16">
  <path d="M5.757 1.071a.5.5 0 0 1 .172.686L3.383 6h9.234L10.07 1.757a.5.5 0 1 1 .858-.514L13.783 6H15a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1v4.5a2.5 2.5 0 0 1-2.5 2.5h-9A2.5 2.5 0 0 1 1 13.5V9a1 1 0 0 1-1-1V7a1 1 0 0 1 1-1h1.217L5.07 1.243a.5.5 0 0 1 .686-.172zM2 9v4.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V9H2zM1 7v1h14V7H1zm3 3a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 4 10zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 6 10zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 8 10zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 1 .5-.5zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 1 .5-.5z"/>
</svg>
    </div>
  </div>
</nav>
<?php     
}
?>

<?php
      if ($tipo_usuario == 2){
        ?>
<!DOCTYPE html>
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://kit.fontawesome.com/712575d4a5.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="style.css">
<link href="https://fonts.googleapis.com/css2?family=pt+Sans:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #A4E3FB;">
  <div class="container">
  <a class="navbar-brand" href="principal.php">
      <img src="imagen5.png" alt="" width="60" height="60" class="d-inline-block align-text-center">
      Ronnie Store
    </a>
    <ul class="navbar-nav mx-auto">
    <div class="search">
      <input type="text" placeholder="Buscar accesorios..." required>
      <div class="btn">
        <i class="fas fa-search icon"></i>
      </div>
    </div>
      </ul>
    <a class="nav-link" href="#">Sobre Nosotros</a>
  </div>
</nav>

<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #A4E3FB;">
  <div class="container">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Categorias
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Pulseras</a></li>
            <li><a class="dropdown-item" href="#">Collares</a></li>
            <li><a class="dropdown-item" href="#">Lentes</a></li>
            <li><a class="dropdown-item" href="#">Cinturones</a></li>
            <li><a class="dropdown-item" href="#">Anillos</a></li>
            <li><a class="dropdown-item" href="#">Aretes</a></li>
            <li><a class="dropdown-item" href="#">Piercings</a></li>
          </ul>
        </li>
        <a class="nav-link disabled">Bienvenido <?php echo $nombre?></a>
    </div>
    <form class="d-flex">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-1">
        <li class="nav-item">
          <a class="nav-link" href="login.php">Iniciar Sesion</a>
        </li>
        <a class="nav-link" href="logout.php">Salir</a>
    </form>
      </ul>
      <svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" fill="currentColor" class="bi bi-basket" viewBox="0 0 16 16">
  <path d="M5.757 1.071a.5.5 0 0 1 .172.686L3.383 6h9.234L10.07 1.757a.5.5 0 1 1 .858-.514L13.783 6H15a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1v4.5a2.5 2.5 0 0 1-2.5 2.5h-9A2.5 2.5 0 0 1 1 13.5V9a1 1 0 0 1-1-1V7a1 1 0 0 1 1-1h1.217L5.07 1.243a.5.5 0 0 1 .686-.172zM2 9v4.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V9H2zM1 7v1h14V7H1zm3 3a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 4 10zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 6 10zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 8 10zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 1 .5-.5zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 1 .5-.5z"/>
</svg>
    </div>
  </div>
</nav>
<?php
}
?>