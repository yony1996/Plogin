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

                        <h1>Registrarse</h1>
                        <form method="post" action="../assets/crear-cuenta.php" method="POST">
                            <div class="form-group">
                                <input type="text" class="form-control" name="Name" placeholder="Enter your name" required>
                            </div>

                            <div class="form-group">
                                <input type="email" class="form-control" name="Email" aria-describedby="emailHelp" placeholder="Enter your email" required>
                            </div>

                            <div class="form-group">
                                <input type="password" class="form-control" name="Password" placeholder="Create Password" required>
                            </div>
                            <div class="form-group">
                                <input type="hidden" class="form-control" name="Role" value="2">
                            </div>

                            <button type="submit" class="btn btn-success btn-block">Create my account</button>
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
