<?php
session_start();
include "../conexion/conexion.php";
include "../partials/head.php";


?>
<link rel="stylesheet" href="../assets/main.css">

<nav class="navbar navbar-inverse " role="navigation">
    <a class="navbar-brand" href="perfil.php">
        <img src="../img/3c1951c5a7136553887751216d7f5961.jpg" style="border-radius: 160px;" width="30" height="30" alt="User">
    </a>
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
            <li><a href="perfil.php">Perfil</a></li>

        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li><a>Bienvenido:<label class="label label-primary"><?= $_SESSION['name']; ?> |
            <?php if($_SESSION['rol']==1){ echo'Admin';?>
           <?php }elseif ($_SESSION['rol']==2){echo'Cliente';?>
                        <?php }else{
                echo'Proveedor';
                        }?>
            </label></a></li>
            <li><a href="logout.php">Cerrar sesion</a></li>
        </ul>


    </div><!-- /.navbar-collapse -->
</nav>
<?php if($_SESSION['rol']==1) {?>
<ul id="sidebar">

    <li><a href="registrarProveedor.php">Registrar Proveedores</a></li>
    <li><a href="registrarPedido.php">Registar Pedidos</a></li>
    <li><a href="tabla.php">Listar Usuarios</a></li>

</ul>

<?php }?>
<?php if($_SESSION['rol']==3) {?>
    <ul id="sidebar">

        <li><a href="registrarProducto.php">Registrar Producto</a></li>
        <li><a href="">Ver Pedidos</a></li>

    </ul>

<?php }?>


<?php
include "../partials/footer.php";
?>
