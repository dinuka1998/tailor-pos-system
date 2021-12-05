<?php 
require_once('function.php');
dbconnect();
session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Popular Prodcuts</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/9874d4ab7b.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./css/productList.css">
</head>

<body>

    <?php 
    include("customernav.php"); 
    ?>

    <div class="container bootdey">
        <div class="page-title">
            <h1>Popular Garments</h1>
        </div>
        <div class="col-md-12">
            <div class="row product-list">

            <?php

$ddaa = $pdo->query("SELECT product_id, product, image FROM `product`");
while ($data = $ddaa->fetch(PDO::FETCH_ASSOC)) {
 
?>


                <div class="col-md-3">
                    <section class="panel">
                        <div class="pro-img-box">
                            <img src="./assets/img/garments/<?php echo($data['image']) ?>" alt="" />
                            <a href="singleProduct.php?prodcut=<?php echo($data['product_id']) ?>" class="adtocart">
                                <i class="fas fa-cart-arrow-down"></i>
                            </a>
                        </div>

                        <div class="panel-body text-center">
                            <h4>
                                <a href="singleProduct.php?prodcut=<?php echo($data['product_id']) ?>" class="pro-title">
                                <?php echo($data['product']) ?>
                                </a>
                            </h4>
                        
                        </div>
                    </section>
                </div>
<?php
}
?>


            </div>
        </div>
    </div>

</body>

</html>