<?php
if (file_get_contents('function.php') == '') {
    header('Location: ' . '/install/');
}
require_once('function.php');
session_start();

function is_custm()
{
    if (isset($_SESSION['cid']))
        return true;
}

if (is_custm()) {
    redirect('CustomerHome.php');
}


if (is_user()) {
    redirect('orderlist.php');
}
?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sign In</title>

    <!-- CSS -->
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/form-elements.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <style>
        .pass {
            width: 100%;
            height: 50px;
        }

        body {
            background: #00c2a5;
        }

        .signup-text {
            color: black;
            font-size: 15px;
        }
    </style>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->


</head>

<body>

    <!-- Top menu -->

    <!-- Top content -->
    <div class="top-content">

        <div class="inner-bg">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 col-sm-offset-2 text">
                        <h1><strong>Customer </strong> Login</h1>
                    </div>
                </div>
                <div class="row">

                    <div class="col-md-6 col-md-offset-3 form-box">
                        <div class="form-top">
                            <div class="form-top-left">
                                <h4 style="color:white">Sign In</h4>

                            </div>
                            <div class="form-top-right">
                                <i class="fa fa-user"></i>
                            </div>
                        </div>
                        <div class="form-bottom">



                            <?php if (!empty($_GET['error'])) : ?>
                                <div class="alert alert-danger alert-dismissable">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                    <?php echo $_GET['error'] ?>
                                </div>
                            <?php endif ?>


                            <form role="form" action="CustomerSigninController.php" method="post" class="registration-form">

                                <div class="form-group">
                                    <input type="email" name="email" value="admin" class="form-first-name form-control" placeholder="Enter your email here..">
                                </div>
                                <div class="form-group">
                                    <input type="password" name="password" value="admin" class="pass form-control" placeholder="Enter your password here..">
                                </div>

                                <button type="submit" class="btn"> Submit</button>
                            </form>
                        </div>
                        <div class="signup-text"> If you dont have an account <a href="CustomerSignUp.php" style="color:red">SignUp </a> </div>
                    </div>
                </div>
            </div>
        </div>

    </div>


    <!-- Javascript -->
    <script src="assets/js/jquery-1.11.1.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.backstretch.min.js"></script>
    <script src="assets/js/retina-1.1.0.min.js"></script>
    <script src="assets/js/scripts.js"></script>

    <!--[if lt IE 10]>
            <script src="assets/js/placeholder.js"></script>
        <![endif]-->

</body>

</html>