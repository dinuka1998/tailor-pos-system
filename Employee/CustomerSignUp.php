<?php
require_once('function.php');
dbconnect();
session_start();



?>
<?php
#customer sign sign up data save
if ($_POST) {

  $fullname = $_POST["firstname"];
  $email = $_POST["email"];
  $password = $_POST["password"];


  $res = $pdo->exec("INSERT INTO customer SET fullname='" . $fullname . "',`email`='" . $email . "',`password`='" . $password . "'");
  $cid = $pdo->lastInsertId();
  if ($res) {

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

<head>
  <link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="./css/customerSignUp.css">
</head>
<style>
  input {
    width: 100%;
    padding: 12px 20px;
    margin: 0px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
  }


  input[type=submit] {
    width: 100%;
    background-color: #0ba360;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
  }

  input[type=submit]:hover {
    background-color: #087c49;
  }

  .signup-model {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
    width: 800px;

  }

  .signup-text {
            color: black;
            font-size: 15px;
            text-align: center;
        }
</style>

<body>
  <div class="background">
    <div class="container">
      <div class="form-container">
        <h1 class="form-title">Customer Sign Up</h1>
        <div class='signup-model'>
          <div>
            <form action="CustomerSignUp.php" method="post">
              <div class="form-group">
                <label for="fname">First Name</label>
                <input type="text" id="fname" name="firstname" placeholder="Your name..">
              </div>
              <div class="form-group">
                <label for="lname">Email</label>
                <input type="email" id="email" name="email" placeholder="Your email..">
              </div>
              <div class="form-group">
                <label for="lname">Password</label>
                <input type="password" id="password" name="password" placeholder="Your Password..">
              </div>
              <input type="submit" value="Submit">
            </form>
          </div>
          <div class="signup-text"> If you already have an account <a href="CustomerLogin.php" style="color:#007bff;text-decoration: none;">LogIn </a> </div>
        </div>
       
      </div>

    </div>
  </div>


</body>

</html>