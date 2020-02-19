<?php
session_start();
include "../conexion/conexion.php";
include "../partials/head.php";
?>
<link rel="stylesheet" href="../assets/main.css">

<nav class="navbar navbar-inverse " role="navigation">
    <a class="navbar-brand" href="perfil.php">
        <img src="../img/3c1951c5a7136553887751216d7f5961.jpg" style="border-radius: 160px;" width="30" height="30"
             alt="User">
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

<div class='container'>
    <div class='starter-template'>

        <div class='row'>
            <div class='col-md-8 col-md-offset-2'>
                <div class='panel panel-body'>
                    <div class='panel-body'>

                        <h1>Editar Perfil</h1>
                        <form action="../assets/actualizarPerfil.php" method="POST" role="form" enctype="multipart/form-data">

                            <input type="hidden" class="form-control" value= "<?=$_SESSION['id']; ?>" name="id" >
                            <div class="form-group">

                                <div class="input-group">
                                    <div class="input-group-addon">@</div>
                                    <input type="text" class="form-control" value= "<?=$_SESSION['Email']; ?>" name="Email" placeholder="Email">

                                </div>
                            </div>


                            <div class="form-group">

                                <div class="input-group">
                                    <div class="input-group-addon ">&#128272;</div>
                                    <input type="password" class='form-control' name="Password"
                                           placeholder="Clave">

                                </div>

                            </div>
                            <div class="form-group">

                                <div class="input-group">
                                    <div class="input-group-addon ">
                                        &#128100;</div>
                                    <input type="text" class='form-control' value= "<?=$_SESSION['name']; ?>"name="User" required
                                           placeholder="Usuario">

                                </div>

                            </div>
                            <div class="form-group">

                                <div class="input-group">
                                    <div class="input-group-addon ">
                                        &#128444;</div>
                                    <input type="file" id="imagen" class='form-control' accept="image/jpeg, .png, .jpg" name="imagen"
                                           placeholder="Imagen de perfil">

                                </div>

                            </div>


                            <button class='btn btn-primary btn-lg btn-block' type="submit" name="submit"
                                    class="btn btn-primary">Guardar Cambios
                            </button>
                        </form>


                    </div>
                </div>

            </div>


        </div>
    </div>

</div>


<?php
include '../partials/footer.php'
?>