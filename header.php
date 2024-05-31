<?php 
session_start();
$url_base="http://localhost/website/admin/"; 
if(!isset($_SESSION['usuario'])){
  header("Location:".$url_base."login.php");
}

?>


<!doctype html>
<html lang="en">
<head>
  <title>Administrador</title>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    <script
  src="https://code.jquery.com/jquery-3.7.1.min.js"
  integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo="
  crossorigin="anonymous"></script>



</head>
<body>
  <header>

  <nav class="navbar navbar-expand navbar-light bg-light">
        <div class="nav navbar-nav">
            <a class="nav-item nav-link active" href="#" aria-current="page">Administrador <span class="visually-hidden">(current)</span></a>
            <a class="nav-item nav-link" href="<?php echo $url_base;?>secciones/servicios/">Servicios</a>
            <a class="nav-item nav-link" href="<?php echo $url_base;?>secciones/portafolio/">Portafolio</a>
            <a class="nav-item nav-link" href="<?php echo $url_base;?>secciones/entradas/">Entradas</a>
            <a class="nav-item nav-link" href="<?php echo $url_base;?>secciones/equipo/">Equipo</a>
            <a class="nav-item nav-link" href="<?php echo $url_base;?>secciones/configuracion/">configuracion</a>
            <a class="nav-item nav-link" href="<?php echo $url_base;?>secciones/usuarios/">Usuarios</a>
            <a class="nav-item nav-link" href="<?php echo $url_base;?>../index.php">Volver a la Web</a>
            <a class="nav-item nav-link" href="<?php echo $url_base;?>cerrar.php">Cerrar sesion</a>

        </div>
    </nav>
  </header>
  <main class="container">
    <br/>

    <script>
<?php if (isset($_GET['mensaje'])){?>
  swal.fire({icon:"success", title:"<?php echo $_GET['mensaje'];?>"});
  <?php } ?>

    </script>