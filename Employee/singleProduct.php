<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/9874d4ab7b.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./css/singleProduct.css">
</head>

<body>

    <?php include("customernav.php"); ?>

    <div class="container bootdey">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-6 image-area">
                    <div class="pro-img-details">
                        <img src="./assets/img/garments/suite-1.jpg" alt="" />
                    </div>
                </div>
                <div class="col-md-6 details-area">
                    <h4 class="pro-d-title">
                        Gray blazer with glen check pattern

                    </h4>
                    <p>
                        Burgundy chinos in 100% cotton, woven in durable twill weave. The chinos have a metal zipper fly, straight side pockets and one back vent pocket. Add a personal touch by embroider your initials on these chinos. Made to your measurements.
                    </p>
                    <div class="product_meta">
                        <span class="posted_in"> <strong>Categories:</strong> <a rel="tag" href="#">Jackets</a>, <a rel="tag" href="#">Men</a>, <a rel="tag" href="#">Shirts</a>, <a rel="tag" href="#">T-shirt</a>.</span>
                        <span class="tagged_as"><strong>Tags:</strong> <a rel="tag" href="#">mens</a>, <a rel="tag" href="#">womens</a>.</span>
                    </div>
                    <!-- <div class="m-bot15"> <strong>Price : </strong> <span class="amount-old">$544</span> <span class="pro-price"> $300.00</span></div> -->
                    <!-- <div class="form-group row">
                        <label for="quantiy" class="col-sm-2 col-form-label">Quantity</label>
                        <div class="col-sm-10">
                            <input type="quantiy" class="form-control" id="quantiy" placeholder="1">
                        </div>
                    </div> -->
                    <p>
                        <button class="btn btn-round btn-danger" type="button"><i class="fa fa-shopping-cart"></i> Make an appoinment</button>
                    </p>
                </div>
            </div>
        </div>
    </div>

</body>

</html>