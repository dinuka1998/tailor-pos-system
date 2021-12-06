<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="css/MessageStyle.css">
<?php 
  session_start();
  include("customernav.php");
  require_once('function.php');
?>
</head>
<body>
<div class="header">
  <h1>Messages</h1>
</div>
<div class='message-body'>
  <div class='column message-model'>
  <?php 
  dbconnect();
  $MessegeBody = $pdo->query("SELECT * FROM messages");
  
  while($row = $MessegeBody->fetch(PDO::FETCH_ASSOC)) {
    if($row['type'] == 1){
    ?>
    <div class='message-card-client'>
       <span class='message-text'><?php echo($row["body"]); ?> </span>
    </div>
  <?php
    }else{
      ?>
        <div class='message-card'>
          <span class='message-text'><?php echo($row["body"]); ?> </span>
        </div>
      <?php 
    }
  }
  ?>
  </div>
  <div class='messeage-box'>
    <form action="MessageSubmit.php" method="post" >
      <div >
      <textarea name='message' placeholder="Type your message here..."></textarea>
      </div>
      <div class=" send-button">
        <input type="submit" value="Send">
      </div>
      </form>
  </div>
</div>
</body>
</html>