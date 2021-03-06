<?php
session_start();
include "../conexion/conexion.php";
include "../partials/head.php";


?>

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
            <li><a href="">hola:<label class="label label-primary"><?= $_SESSION['name'];?></label></a></li>
            <li><a href="logout.php">Cerrar sesion</a></li>
        </ul>


    </div><!-- /.navbar-collapse -->
</nav>

<div class='container'>
    <div class='starter-template'>

        <div class='row'>
            <div class='col-md-4 col-md-offset-4'>
                <div class='panel panel-body'>
                    <div class='panel-body'>

                        <h1>Registrar Producto</h1>
                        <form  action="../assets/insertarProducto.php" method="POST">
                            <div class="form-group">
                                <input type="text" class="form-control" name="nombre" placeholder="Nombre del producto" required>
                            </div>

                            <div class="form-group">
                                <input type="number" class="form-control" name="precio"  placeholder="Precio" required>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="tamano"  placeholder="Tamaño" required>
                            </div>
                            <div class="form-group">
                                <input type="hidden" class="form-control" name="id_proveedor"  value="<?= $_SESSION['id']?>" required>
                            </div>



                            <button type="submit" class="btn btn-success btn-block">Guardar</button>
                        </form>

                    </div>
                </div>

            </div>



        </div>
    </div>

</div>


<?php
include "../partials/footer.php";
?>

