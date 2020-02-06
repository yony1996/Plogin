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
                        <form action="" method="POST" role="form">


                            <div class="form-group">
                                <label for="exampleFormControlSelect1"></label>
                                <div class="form-group">
                                    <input class='form-control' type='text' name='' required autofocus placeholder='Usuario'>
                                </div>
                            </div>

                            <div class="form-group">
                                <input type="password" class='form-control' name="" required placeholder="Clave">
                            </div>

                            <button class='btn btn-primary btn-lg btn-block' type="submit" name="submit" class="btn btn-primary">Guardar</button>
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
