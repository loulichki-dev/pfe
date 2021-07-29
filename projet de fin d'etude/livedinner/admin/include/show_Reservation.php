<div class="table-responsive">
    <table class="table table-bordered  table table-dark table-hover">
        <thead>
            <tr>
                <th>id</th>
                <th>nom</th>
                <th>email</th>
                <th>person</th>
                <th>date</th>

                <th>phone</th>
                <th>heure</th>

            </tr>
        </thead>
        <tbody>

            <?php

            $query = "SELECT * FROM reservation";
            $select_all = mysqli_query($conn, $query);



            while ($row = mysqli_fetch_assoc($select_all)) {

                $id_reservation = $row['id_reservation'];
                $nom = $row['nom'];
                $email = $row['email'];
                $person = $row['person'];
                $date = $row['date'];
                $phone = $row['phone'];
                $heure = $row['heure'];



            ?>

                <tr>
                    <td><?php echo $id_reservation ?></td>
                    <td><?php echo $nom ?></td>
                    <td><?php echo $email ?></td>
                    <td><?php echo $person ?></td>
                    <td><?php echo $date ?></td>
                    <td><?php echo $phone ?></td>
                    <td><?php echo $heure ?></td>

                    <?php echo " <td> <a href='index.php?delete={$id_reservation}'>Delete</a></td>" ?>

                    <?php echo " <td> <a href='index.php?source=update_produit&id_update={$id_reservation}'>update</a></td>" ?>
                </tr>
            <?php  } ?>
        </tbody>

    </table>
</div>



<?php
if (isset($_GET['delete'])) {
    $id_delete = $_GET['delete'];
    $query =   "DELETE from reservation WHERE id_reservation = {$id_reservation}";
    $delete_query = mysqli_query($conn, $query);
    header("location:index.php");
}
?>



<?php
if (isset($_GET['updete'])) {
    include "includes/update_produit.php";
}
?>