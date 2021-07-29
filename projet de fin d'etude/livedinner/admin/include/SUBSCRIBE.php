<div class="table-responsive">
    <table class="table table-bordered table-hover">
        <thead>
            <tr>
                <th>id </th>

                <th>email</th>
                <th>date</th>





            </tr>
        </thead>
        <tbody>

            <?php

            $query = "SELECT * FROM `SUBSCRIBE`";
            $select_all = mysqli_query($conn, $query);



            while ($row = mysqli_fetch_assoc($select_all)) {

                $SUBSCRIBE_id = $row['SUBSCRIBE_id'];
                $SUBSCRIBE_email = $row['SUBSCRIBE_email'];

                $SUBSCRIBE_date = $row['SUBSCRIBE_date'];



            ?>

                <tr>
                    <td><?php echo $SUBSCRIBE_id ?></td>
                    <td><?php echo $SUBSCRIBE_email ?></td>
                    <td><?php echo $SUBSCRIBE_date ?></td>



                    <?php echo " <td> <a href='index.php?source=SUBSCRIBE&delete={$SUBSCRIBE_id}'>Delete</a></td>" ?>

                </tr>
            <?php  } ?>
        </tbody>

    </table>
</div>


<?php
if (isset($_GET['delete'])) {
    $SUBSCRIBE_id = $_GET['delete'];
    $query =   "DELETE from SUBSCRIBE WHERE SUBSCRIBE_id = {$SUBSCRIBE_id}";
    $delete_query = mysqli_query($conn, $query);
    header("location:index.php?source=SUBSCRIBE");
}
?>