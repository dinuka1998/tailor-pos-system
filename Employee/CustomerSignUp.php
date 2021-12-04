<?php
require_once('function.php');
dbconnect();
session_start();



?>
<?php
#customer sign sign up data save
if($_POST)
{

$fullname = $_POST["firstname"];
$email = $_POST["email"];
$password = $_POST["password"];


$res = $pdo->exec("INSERT INTO customer SET fullname='".$fullname."',`email`='".$email."',`password`='".$password."'");
$cid = $pdo->lastInsertId();
if($res){

echo "<div class='alert alert-success alert-dismissable'>
<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>	

Customer Added Successfully!

</div>
<meta http-equiv='refresh' content='2; url=CustomerLogin.php?id=$cid' /> 
";


}

} 
?>

<!DOCTYPE html>
<html>
<style>
input {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}


input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
  width:800px;
  
}

</style>
<body>

<h3>Using CSS to style an HTML Form</h3>
<div class='signup-model'>
<div>
  <form action="CustomerSignUp.php" method="post">
    <label for="fname">First Name</label>
    <input type="text" id="fname" name="firstname" placeholder="Your name..">

    <label for="lname">Email</label>
    <input type="email" id="email" name="email" placeholder="Your email..">

    <label for="lname">Password</label>
    <input type="password" id="password" name="password" placeholder="Your Password..">

    <input type="submit" value="Submit">
  </form>
</div>
</div>

</body>
</html>


