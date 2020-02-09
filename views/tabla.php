<?php
session_start();
include "../conexion/conexion.php";
include "../partials/head.php";
include "../partials/nav.php";
?>
<div class="container">
    <h2>Pedidos Ingresados</h2>
    <div class="table-responsive">
        <table class="table table-bordered">
            <thead style="background-color: #232526; color:#f4f4f4">
            <tr>
                <th>Users</th>
                <th>Email</th>
                <th>Password</th>
                <th>Role</th>
                <th>Actividad</th>
            </tr>
            </thead>
            <tbody>


            <?php
            $query = "SELECT * FROM user";
            $result_table = mysqli_query($conn, $query);

            while ($row = mysqli_fetch_array($result_table)) {
                ?>
                <tr>
                    <td><?php echo $row['Users'] ?></td>
                    <td><?php echo $row['Email'] ?></td>
                    <td><?php echo $row['Password'] ?></td>
                    <td><?php echo $row['Role'] ?></td>


                </tr>
            <?php } ?>

            </tbody>

    </div>

    </table>

</div>
<?php
include "../partials/footer.php";
?>