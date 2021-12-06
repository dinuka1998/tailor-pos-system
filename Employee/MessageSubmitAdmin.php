<?php 
require_once('function.php');
dbconnect();
session_start();

if($_POST)
{
    $Message = $_POST["message"];

    $res = $pdo->exec("INSERT INTO messages SET body='".$Message."',type = 2");
    $cid = $pdo->lastInsertId();
    if($res){
        header( "Location: MessagesIndexAdmin.php" );  
    }

} 
?>