<?php 
session_start();
$usuario = $_SESSION['usuario'];
if(!isset($usuario)){
    header("Location: indexcrud.php");
    exit;
}
include "header.php";
?>

<div class="container mt-5">
    <div class="row justify-content-center">
    
        <div class="col text-center">

            <div class="card">

                <div class="card-header display-6">

                Alta de fabricante realizada con éxito



                </div>
            </div>
            <a href="indexcrud.php"> <i class="bi-arrow-return-left px-3" style="font-size: 4rem; color:black;"></i> </a>
        </div>
    </div>
</div>



<?php 
include "footer.php"
?>