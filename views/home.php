<?php
session_start();
include "../conexion/conexion.php";
include "../partials/head.php";


?>
<link rel="stylesheet" href="../assets/main.css">
<nav class="navbar navbar-inverse " role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">Title</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav">
            <li class="active"><a href="views/login.php">Link</a></li>
            <li><a href="#">Link</a></li>

        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li><a href="">hola:<label class="label label-primary"><?= $_SESSION['name']; ?> | <?= $_SESSION['rol']==1?'Admin':'Cliente'?> </label></a></li>
            <li><a href="logout.php">Cerrar sesion</a></li>
        </ul>


    </div><!-- /.navbar-collapse -->
</nav>
<ul id="sidebar">

    <li><a href="registrarProveedor.php">Registrar Proveedores</a></li>
    <li><a href="registrarPedido.php">Registar Pedidos</a></li>

</ul>


<?php
include "../partials/footer.php";
?>
