
<center>

<h1>ARE YOU SURE YOU WANT TO DELETE YOUR ACCOUNT?</h1>

<form action="" method="post">

<input class="btn btn-danger" type="submit" name="yes" value="YES, I WANT TO DELETE MY ACCOUNT">

<input class="btn btn-primary" type="submit" name="no" value="NO, I DO NOT WANT TO DELETE MY ACCOUNT">

</form>

</center>

<?php

$c_email = $_SESSION['customer_email'];

if(isset($_POST['yes'])){

$delete_customer = "delete from customers where customer_email='$c_email'";

$run_delete = mysqli_query($con,$delete_customer);

if($run_delete){

session_destroy();

echo "<script>alert('Your Account Has Been Deleted! Good By')</script>";

echo "<script>window.open('../index.php','_self')</script>";

}

}

if(isset($_POST['no'])){

echo "<script>window.open('my_account.php?my_orders','_self')</script>";

}


?>