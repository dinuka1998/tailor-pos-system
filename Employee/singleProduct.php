<?php 
require_once('function.php');
dbconnect();
session_start();
$product_id = $_GET["prodcut"];
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

    <?php 
    include("customernav.php"); 
    $products = $pdo->query("SELECT * FROM product WHERE product_id='" . $product_id . "'");
    $products = $products->fetch(PDO::FETCH_ASSOC);
    $product_name = $products['product'];
    $product_image = $products['image'];
    $product_description = $products['description'];
    $product_categories = $products['categories'];
    $product_Tags = $products['Tags'];

    $tag_Array = explode(',', $product_Tags);
    $cat_Array = explode(',', $product_categories);

    
    ?>

    <div class="container bootdey">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-6 image-area">
                    <div class="pro-img-details">
                        <img src="./assets/img/garments/<?php echo($product_image); ?>" alt="" />
                    </div>
                </div>
                <div class="col-md-6 details-area">
                    <h4 class="pro-d-title">
                        <?php echo($product_name); ?>

                    </h4>
                    <p>
                    <?php echo($product_description); ?>
                    </p>
                    <div class="product_meta">
                        <span class="posted_in"> <strong>Categories:</strong> 
                        <?php 
                            foreach ($cat_Array as $item) {
                                ?>
                                <a rel="tag" href="#"><?php echo($item); ?>,</a>
                                <?php
                            }
                        ?>
                         
                    
                        </span>
                        <span class="tagged_as"><strong>Tags:</strong> 
                        
                        <?php 
                            foreach ($tag_Array as $item) {
                                ?>
                                <a rel="tag" href="#"><?php echo($item); ?></a>,
                                <?php
                            }
                        ?>
                    </div>
                    <!-- <div class="m-bot15"> <strong>Price : </strong> <span class="amount-old">$544</span> <span class="pro-price"> $300.00</span></div> -->
                    <!-- <div class="form-group row">
                        <label for="quantiy" class="col-sm-2 col-form-label">Quantity</label>
                        <div class="col-sm-10">
                            <input type="quantiy" class="form-control" id="quantiy" placeholder="1">
                        </div>
                    </div> -->
                    <p>
                       <a href="customerappoinment.php"> <button class="btn btn-round btn-danger" type="button"><i class="fa fa-shopping-cart"></i> Make an appoinment</button> </a> 
                    </p>
                </div>
            </div>
        </div>
    </div>

</body>

</html>