<?php
require_once('function.php');
dbconnect();
session_start();

?>

<head>
    <title>Orders</title>
    <link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/customerOrder.css">

</head>

<?php
$user = $_SESSION['username'];
$custid = $_SESSION['cid'];
// $custid = 1;
$usid = $pdo->query("SELECT id FROM users WHERE username='" . $user . "'");
$usid = $usid->fetch(PDO::FETCH_ASSOC);
$uid = $usid['id'];
include("customernav.php");

?>



<div class="container bootstrap snippets bootdey order-container">
    <div class="row">
        <div class="col-lg-12">
            <div class="main-box no-header clearfix">
                <div class="main-box-body clearfix">
                    <div class="table-responsive">
                        <table class="table user-list">
                            <thead>
                                <tr>
                                    <th><span>Order Description</span></th>
                                    <th><span>Order Date</span></th>
                                    <th class="text-center"><span>Status</span></th>
                                    <th><span>Total Cost</span></th>
                                    <th><span>Paid</span></th>
                                    <th><span>Balance</span></th>
                                    <th>&nbsp;</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php

                                $ddaa = $pdo->query("SELECT id, customer, description, date_received, amount, paid, completed FROM `order` WHERE `customer` = $custid");
                                while ($data = $ddaa->fetch(PDO::FETCH_ASSOC)) {
                                    $rname = $pdo->query("SELECT fullname FROM customer WHERE id='" . $data['customer'] . "'");
                                    $rname =    $rname->fetch(PDO::FETCH_ASSOC);
                                    $balance =     $data['amount'] - $data['paid'];

                                    //yes --> completed  no --> not completed
                                    $isCompleted = 'badge-secondary';
                                    if ($data['completed'] == 'Yes') {
                                        $isCompleted = 'badge-success';
                                    } else {
                                        $isCompleted = 'badge-secondary';
                                    }
                                ?>


                                    <tr>
                                        <td class="description">
                                            <span class="user-subhead"><?php echo ("$data[description]"); ?></span>
                                        </td>
                                        <td><?php echo ("$data[date_received]"); ?></td>
                                        <td class="text-center">
                                            <span class="badge order-status <?php echo $isCompleted ?>"><?php echo ("$data[completed]"); ?></span>
                                        </td>
                                        <td>
                                            <?php echo ("$data[amount]"); ?>
                                        </td>
                                        <td>
                                            <?php echo ("$data[paid]"); ?>
                                        </td>
                                        <td>
                                            <span class="left-to-paid"><?php echo ("$balance"); ?></span>
                                        </td>
                                    </tr>

                                <?php
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>





</body>

</html>