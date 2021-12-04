<?php
require_once('function.php');
dbconnect();
session_start();

?>

<style>
    .border {
        border: 2px solid powderblue;
    }
</style>
   
  

<?php
 $user = $_SESSION['username'];
 $custid = 1;
 $usid = $pdo->query("SELECT id FROM users WHERE username='".$user."'");
 $usid = $usid->fetch(PDO::FETCH_ASSOC);
 $uid = $usid['id'];

 include("customernav.php");



 ?>
   
<?php

$ddaa = $pdo->query("SELECT id, customer, description, date_received, amount, paid, completed FROM `order` WHERE `customer` = $custid");
    while ($data = $ddaa->fetch(PDO::FETCH_ASSOC))
    {
$rname = $pdo->query("SELECT fullname FROM customer WHERE id='".$data['customer']."'");
$rname =	$rname->fetch(PDO::FETCH_ASSOC);
$balance = 	$data['amount'] - $data['paid'];
?>                               
            <div class='border'>
                                           <div>
                                                <h2> Order Description : <?php echo( "$data[description]"); ?> </h2>
                                           </div>
                                           <div>
                                           <p> Orderd date : <?php echo( "$data[date_received]"); ?> </p>
                                            </div>
                                            <div>
                                           <p> Total : <?php echo( "$data[amount]"); ?> </p>
                                            </div>
                                            <div>
                                           <p> paid : <?php echo( "$data[paid]"); ?> </p>
                                            </div>
                                            <div>
                                            <p> balance : <?php echo( "$balance"); ?> </p>
                                             </div>
                                             <div>
                                            <p> Order Status : <?php echo( "$data[completed]"); ?> </p>
                                             </div>

            <div>

                <?php
                                            

}
?>




</body>
</html>
