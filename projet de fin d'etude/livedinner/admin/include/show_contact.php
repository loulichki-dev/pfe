<div class="table-responsive">
    <table class="table table-bordered table-hover">
        <thead>
            <tr>
                <th>id contact</th>
                <th>nom</th>
                <th>email</th>
                <th>person</th>
                <th>message</th>




            </tr>
        </thead>
        <tbody>

            <?php

            $query = "SELECT * FROM contact";
            $select_all = mysqli_query($conn, $query);



            while ($row = mysqli_fetch_assoc($select_all)) {

                $id_contact = $row['id_contact'];
                $nom_contact = $row['nom_contact'];

                $person_contact = $row['person_contact'];
                $message = $row['message'];
                $email_contact = $row['email_contact'];




            ?>

                <tr>
                    <td><?php echo $id_contact ?></td>
                    <td><?php echo $nom_contact ?></td>
                    <td><?php echo $email_contact ?></td>
                    <td><?php echo $person_contact ?></td>
                    <td><?php echo $message ?></td>


                    <?php echo " <td> <a href='index.php?source=show_contact&delete={$id_contact}'>Delete</a></td>" ?>

                </tr>
            <?php  } ?>
        </tbody>

    </table>
</div>


<?php
if (isset($_GET['delete'])) {
    $id_contact = $_GET['delete'];
    $query =   "DELETE from contact WHERE id_contact = {$id_contact}";
    $delete_query = mysqli_query($conn, $query);
    header("location:index.php?source=show_contact");
}
?>