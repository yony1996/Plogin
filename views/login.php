<?php
include "../partials/head.php";
include "../partials/nav.php";
?>
<div class='container'>
    <div class='starter-template'>

        <div class='row'>
            <div class='col-md-4 col-md-offset-4'>
                <div class='panel panel-body'>
                    <div class='panel-body'>

                        <h1>Login</h1>
                        <form action="../assets/validacion.php" method="POST" role="form">


                            <div class="form-group">
                                <label for="exampleFormControlSelect1"></label>
                                <div class="form-group">
                                    <input class='form-control' type='text' name='Email' required autofocus placeholder='Usuario'>
                                </div>
                            </div>

                            <div class="form-group">
                                <input type="password" class='form-control' name="Password" required placeholder="Clave">
                            </div>

                            <button class='btn btn-primary btn-lg btn-block' type="submit" name="submit" class="btn btn-primary">Guardar</button>
                        </form>
                        <p><a href="#showForm" data-toggle="collapse" aria-expanded="false" aria-controls="collapse">Olvidaste tu contraseña?</a></p>
                        <div class="collapse" id="showForm">
                            <div class='well'>
                                <form action="../assets/recuperarContraseña.php" method="post">
                                    <div class="form-group">
                                        <input type="email" class="form-control" name="email" placeholder="Ingresa tu correo" required>
                                    </div>
                                    <button type="submit" class="btn btn-success">Recupera tu contraseña</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>



        </div>
    </div>

</div>




<?php
include "../partials/footer.php";
?>
