<?php ob_start(); ?>
<?php
include "../conn_db.php";
?>
<?php session_start() ?>
<?php
if (!$_SESSION["admin_nome"]) {

    header("location: index.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<!-- Basic -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Site Metas -->
    <title>Live Dinner Restaurant - Responsive HTML5 Template</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="../images/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="../images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="../css/style.css">
    <!-- Pickadate CSS -->
    <link rel="stylesheet" href="../css/classic.css">

    <link rel="stylesheet" href="../css/classic.date.css">
    <link rel="stylesheet" href="../css/classic.time.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="../css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="../css/custom.css">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
    <!-- Start header -->
    <header class="top-navbar">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <a class="navbar-brand" href="index.html">
                    <img src="images/logo.png" alt="" />
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars-rs-food" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbars-rs-food">
                    <ul class="navbar-nav ml-auto">

                        <li class="nav-item"><a class="nav-link" href="?source=add_Reservation">add Reservation</a></li>
                        <li class="nav-item"><a class="nav-link" href="index.php">Reservation</a></li>
                        <li class="nav-item"><a class="nav-link" href="?source=show_contact"> show Contact</a></li>
                        <li class="nav-item"><a class="nav-link" href="./include/logout.php"> logout</a></li>
                        <li class="nav-item"><a class="nav-link" href="?source=SUBSCRIBE"> SUBSCRIBE</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!-- End header -->

    <!-- Start All Pages -->
    <div class="all-page-title page-breadcrumb">
        <div class="container text-center">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Admin </h1>
                </div>
            </div>
        </div>
    </div>
    <!-- End All Pages -->

    <!-- Start Reservation -->
    <div class="reservation-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="heading-title text-center">
                        <h2>Reservation</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-sm-12 col-xs-12">

                    <div class="contact-block">
                        <?php
                        if (isset($_GET["source"])) {
                            $source = $_GET["source"];
                        } else {
                            $source = "";
                        };
                        switch ($source) {
                            case 'add_Reservation';
                                include "include/add_Reservation.php";
                                break;
                            case 'show_contact';
                                include "include/show_contact.php";
                                break;
                            case 'SUBSCRIBE';
                                include "include/SUBSCRIBE.php";
                                break;
                            default:
                                include "include/show_Reservation.php";
                                break;
                        }

                        ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Reservation -->

    <!-- Start Footer -->
    <footer class="footer-area bg-f">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <h3>About Us</h3>
                    <p>Integer cursus scelerisque ipsum id efficitur. Donec a dui fringilla, gravida lorem ac, semper magna. Aenean rhoncus ac lectus a interdum. Vivamus semper posuere dui.</p>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h3>Subscribe</h3>
                    <div class="subscribe_form">
                        <form class="subscribe_form">
                            <input name="EMAIL" id="subs-email" class="form_input" placeholder="Email Address..." type="email">
                            <button type="submit" class="submit">SUBSCRIBE</button>
                            <div class="clearfix"></div>
                        </form>
                    </div>
                    <ul class="list-inline f-social">
                        <li class="list-inline-item"><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h3>Contact information</h3>
                    <p class="lead">Ipsum Street, Lorem Tower, MO, Columbia, 508000</p>
                    <p class="lead"><a href="#">+01 2000 800 9999</a></p>
                    <p><a href="#"> info@admin.com</a></p>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h3>Opening hours</h3>
                    <p><span class="text-color">Monday: </span>Closed</p>
                    <p><span class="text-color">Tue-Wed :</span> 9:Am - 10PM</p>
                    <p><span class="text-color">Thu-Fri :</span> 9:Am - 10PM</p>
                    <p><span class="text-color">Sat-Sun :</span> 5:PM - 10PM</p>
                </div>
            </div>
        </div>

        <div class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <p class="company-name">All Rights Reserved. &copy; 2018 <a href="#">Live Dinner Restaurant</a> Design By :
                        </p>
                    </div>
                </div>
            </div>
        </div>

    </footer>
    <!-- End Footer -->

    <a href="#" id="back-to-top" title="Back to top" style="display: none;"><i class="fa fa-paper-plane-o" aria-hidden="true"></i></a>

    <!-- ALL JS FILES -->
    <script src="../js/jquery-3.2.1.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <!-- ALL PLUGINS -->
    <script src="../js/jquery.superslides.min.js"></script>
    <script src="../js/images-loded.min.js"></script>
    <script src="../js/isotope.min.js"></script>
    <script src="../js/baguetteBox.min.js"></script>
    <script src="../js/picker.js"></script>
    <script src="../js/picker.date.js"></script>
    <script src="../js/picker.time.js"></script>
    <script src="../js/legacy.js"></script>
    <script src="../js/form-validator.min.js"></script>
    <script src="../js/contact-form-script.js"></script>
    <script src="../js/custom.js"></script>
</body>

</html>