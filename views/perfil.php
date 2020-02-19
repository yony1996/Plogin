<?php
session_start();
include "../conexion/conexion.php";
include "../partials/head.php";
?>

<link rel="stylesheet" href="../assets/main.css">

<nav class="navbar navbar-inverse " role="navigation">
    <a class="navbar-brand" href="#">
        <img src="../img/3c1951c5a7136553887751216d7f5961.jpg" class="img-circle" width="30" height="30" alt="User">
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
            <li><a href="#">Perfil</a></li>

        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li><a>Bienvenido:<label class="label label-primary"><?= $_SESSION['name']; ?> |
                        <?php if ($_SESSION['rol'] == 1) {
                            echo 'Admin'; ?>
                        <?php } elseif ($_SESSION['rol'] == 2) {
                            echo 'Cliente'; ?>
                        <?php } else {
                            echo 'Proveedor';
                        } ?>
                    </label></a></li>
            <li><a href="logout.php">Cerrar sesion</a></li>
        </ul>


    </div><!-- /.navbar-collapse -->
</nav>

<div class="container">
    <div class="row">
        <div class="col-sm-3">
            <img src="../img/<?=$_SESSION['img'];?>" class="img-thumbnail" alt="User">
        </div>
        <div class="col-md-8">
            <div class="panel panel-info ">
                <div class="panel-heading">Panel de Información de Perfil</div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card col-md-8">
                            <div class="card-block">
                                <label>Email:</label>
                                <span class="card-text"><?= $_SESSION['Email']; ?><br>
                                </span>
                                <label>User:</label>
                                <span class="card-text"><?= $_SESSION['name']; ?><br>

                                </span>

                                <a class='btn btn-primary btn-lg btn-block' type="submit" name="submit"
                                   class="btn btn-primary" id="id_per" href="editarPerfil.php?id=<?php echo $_SESSION['id']; ?>">Editar Perfil
                                </a>

                            </div>
                            <div class="card-footer text-muted">
                                <p>&copy  Template-2020 </p>
                            </div>
                        </div>
                    </div>
        </div>

    </div>


