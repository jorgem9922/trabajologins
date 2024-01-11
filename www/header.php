<?php 
session_start();
$usuario = $_SESSION['usuario'];
if(!isset($usuario)){
    header("Location: indexcrud.php");
}
?>
<!doctype html>
<html lang="es">

<head>
  <title>CRUD de fabricantes</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

  <link rel ="icon" type="image/x-icon" href="logo3dreams.ico">


  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
  
</head>

<body>
  <header class="container-fluid bg-secondary  text-center py-3 display-4">
  Sistema Gestor de Inventariado de Productos
  <ul class="nav navbar-nav pull-right hidden-xs">                       
               <div class=bienvenidaalusuario> <p>
                    Bienvenido<?php echo ":".$_SESSION['usuario'] ?>
                </p> </div>               
           
        </ul>       
  <a href="indexcrud.php"> <i class="bi bi-arrow-left"></i></i> </a>
    
  
  </header>
  <main>