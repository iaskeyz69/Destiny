<?php

session_start();

include("includes/db.php");
include("includes/header.php");
include("functions/functions.php");
include("includes/main.php");

?>


<!-- MAIN -->
<main>
    <!-- HERO -->
    <div class="nero">
        <div class="nero__heading">
            <span class="nero__bold">Contact</span> Us
        </div>
        <p class="nero__text">
            If you have any questions, please feel free to contact us, our customer service center is working for you
            24/7.
        </p>
    </div>
</main>

<div class="col-md-12">
    <!-- col-md-12 Starts -->

    <div class="box">
        <!-- box Starts -->

        <div class="box-header">
            <!-- box-header Starts -->

            <center>
                <!-- center Starts -->

                <?php

$get_contact_us = "select * from contact_us";

$run_conatct_us = mysqli_query($con,$get_contact_us);

$row_conatct_us = mysqli_fetch_array($run_conatct_us);

$contact_heading = $row_conatct_us['contact_heading'];

$contact_desc = $row_conatct_us['contact_desc'];

$contact_email = $row_conatct_us['contact_email'];

?>

                <h2> <?php echo $contact_heading; ?> </h2>

                <p class="text-muted">
                    <?php echo $contact_desc; ?>
                </p>

            </center><!-- center Ends -->

        </div><!-- box-header Ends -->

        <form action="contact.php" method="post">
            <!-- form Starts -->

            <div class="form-group">
                <!-- form-group Starts -->

                <label>Name</label>

                <input type="text" class="form-control" name="name" required>

            </div><!-- form-group Ends -->

            <div class="form-group">
                <!-- form-group Starts -->

                <label>Email</label>

                <input type="text" class="form-control" name="email" required>

            </div><!-- form-group Ends -->

            <div class="form-group">
                <!-- form-group Starts -->

                <label> Subject </label>

                <input type="text" class="form-control" name="subject" required>

            </div><!-- form-group Ends -->

            <div class="form-group">
                <!-- form-group Starts -->

                <label> Message </label>

                <textarea class="form-control" name="message"> </textarea>

            </div><!-- form-group Ends -->


            <div class="form-group">
                <!-- form-group Starts -->

                <label> Select Enquiry Type </label>


                <select name="enquiry_type" class="form-control">
                    <!-- select Starts -->

                    <option> Select Enquiry Type </option>

                    <?php

$get_enquiry_types = "select * from enquiry_types";

$run_enquiry_types = mysqli_query($con,$get_enquiry_types);

while($row_enquiry_types = mysqli_fetch_array($run_enquiry_types)){

$enquiry_title = $row_enquiry_types['enquiry_title'];

echo "<option> $enquiry_title </option>";

}

?>

                </select><!-- select Ends -->

            </div><!-- form-group Ends -->


            <div class="text-center">
                <!-- text-center Starts -->

                <button type="submit" name="submit" class="btn btn-primary">

                    <i class="fa fa-user-md"></i> Send Message

                </button>

            </div><!-- text-center Ends -->

        </form><!-- form Ends -->

        <?php

if(isset($_POST['submit'])){

//send email

}


?>

    </div><!-- box Ends -->

</div><!-- col-md-12 Ends -->



</div><!-- container Ends -->
</div><!-- content Ends -->



<?php

include("includes/footer.php");

?>

<script src="js/jquery.min.js"> </script>

<script src="js/bootstrap.min.js"></script>

</body>

</html>