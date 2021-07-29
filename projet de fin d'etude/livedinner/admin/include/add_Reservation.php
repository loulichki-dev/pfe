<?php
if (isset($_POST['submit'])) {
    $name = $_POST['name'];

    $email = $_POST['email'];
    $person = $_POST['person'];


    $date = $_POST['date'];

    $phone = $_POST['phone'];
    $time = $_POST['time'];
    echo $phone, $time, $date, $person;



    $query = " INSERT INTO `reservation` (`id_reservation`, `nom`, `email`, `person`,  `date`, `phone`,`heure`) VALUES (NULL, '{$name}', '{$email}','{$person}' ,'{$date}' , '{$phone}', '{$time}')";
    $add_produit = mysqli_query($conn, $query);
    if (!$add_produit) {
        die("QUERY FAILED" . mysqli_error($conn));
    }
}


?>


<form id="" action="" method="POST">
    <div class="row">
        <div class="col-md-6">
            <h3>Book a table</h3>
            <div class="col-md-12">
                <div class="form-group">
                    <input id="input_date" class="datepicker picker__input form-control" name="date" type="text" value="" equired data-error="Please enter Date">
                    <div class="help-block with-errors"></div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <input id="input_time" name="time" class="time form-control picker__input" required data-error="Please enter time">
                    <div class="help-block with-errors"></div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <select class="custom-select d-block form-control" id="person" name="person" required data-error="Please select Person">
                        <option disabled selected>Select Person*</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                    </select>
                    <div class="help-block with-errors"></div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <h3>Contact Details</h3>
            <div class="col-md-12">
                <div class="form-group">
                    <input type="text" class="form-control" name="name" id="name" placeholder="Your Name" required data-error="Please enter your name">
                    <div class="help-block with-errors"></div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <input type="text" placeholder="Your Email" id="email" class="form-control" name="email" required data-error="Please enter your email">
                    <div class="help-block with-errors"></div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <input type="text" placeholder="Your Numbar" id="phone" class="form-control" name="phone" required data-error="Please enter your Numbar">
                    <div class="help-block with-errors"></div>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="submit-button text-center">

                <input class="btn btn-common" id="submit" name="submit" type="submit" value="Book Table">
                <div id="msgSubmit" class="h3 text-center hidden"></div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</form>