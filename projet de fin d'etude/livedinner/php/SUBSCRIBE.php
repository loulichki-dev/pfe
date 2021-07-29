
                        <?php include "../conn_db.php" ?>
                     	<?php
                            if (isset($_POST["SUBSCRIBE"])) {


                                $EMAIL = $_POST["EMAIL"];

                                $query =   "INSERT INTO `SUBSCRIBE` (`SUBSCRIBE_id`, `SUBSCRIBE_email`, `SUBSCRIBE_date`) VALUES (NULL, '{$EMAIL}', now());";
                                $select_all_cat = mysqli_query($conn, $query);
                                if (!$select_all_cat) {
                                    die("QUERY FAILED" . mysqli_error($conn));
                                } else {
                                    header("location: ../index.html");
                                }
                            }

                            ?>