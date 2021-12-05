<?php 
require_once('function.php');
dbconnect();
session_start();

if($_POST)
{
    $Message = $_POST["message"];

    $res = $pdo->exec("INSERT INTO messages SET body='".$Message."'");
    $cid = $pdo->lastInsertId();
    if($res){
        header( "Location: MessagesIndex.php" );  
    }

} 
?>