<?php
require_once('function.php');
dbconnect();
session_start();
// echo('Customer ID: '. $_SESSION['cid']); 
include("customernav.php");
$custid = $_SESSION['cid'];
?>

<?php
#customer sign sign up data save
if($_POST)
{

$phone = $_POST["phone"];
$date = $_POST["date"];
$message = $_POST["message"];


$res = $pdo->exec("INSERT INTO appointment SET date='".$date."',`cust_id`='".$custid."',`message`='".$message."',`contact_num`='".$phone."'");
$aid = $pdo->lastInsertId();
if($res){

echo "<br><div class='alert alert-success alert-dismissable'>
<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>	

you successfullty made an appoinment!<br>
Appoinment No #$aid

</div>

";


}

} 
?>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/appoinmentStyle.css">

    <title>Appoinmnets</title>
  </head>
  <body>
    <!-- Form Design Start-->
    <section class="form pt-5 pb-5">
      <div class="container">
        <div class="row">
          <div class="offset-md-2 col-md-8">
            <div class="heading">
              <h1>Appointment</h1>
            </div>
            <form action="customerappoinment.php" method="post">
            <div class="row">
           
              <div class="col-md-6">
                <input id="phone" name="phone" type="phone" placeholder="Phone Number">
              </div>
              <div class="col-md-6">
                <input id="date" name="date"  type="date">
              </div>
              <div class="col-md-12">
                <textarea id="message" name="message" name="message" id="" cols="30" rows="10"></textarea>
              </div>
              <div class="col-md-6">
                <input type="submit" value="Make Appointment">
              </div>
            
            </div>
            </form>
          </div>
        </div>
      </div>
    </section>
    <!-- Form Design End-->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
