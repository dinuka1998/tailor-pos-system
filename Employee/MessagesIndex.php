<!DOCTYPE html>
<html>
<head>
<?php 
  session_start();
  include("customernav.php");
  require_once('function.php');
  
  ?>
<style> 
textarea {
  width: 40%;
  height: 100px;
  padding: 12px 20px;
  box-sizing: border-box;
  border: 2px solid #ccc;
  border-radius: 4px;
  background-color: #f8f8f8;
  font-size: 16px;
  resize: none;
}
input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  
}

input[type=submit]:hover {
  background-color: #45a049;
}
.message-card{
  background-color: #ccc;
  width: 30%;
  height: 50px;
  padding: 15px;
  margin: 20px;
  border-radius: 5px;
}
.message-model{
  background-color: #ededed;
  width: 40%;
  height: 600px;
  padding: 10px;
  margin-left: 40px;
  margin-bottom: 20px;
  margin-top: 50px;
}
.messeage-box{
  margin-left: 40px;
  width: 100%;
}

.send-button{
  float: left;
}
</style>
</head>
<body>
<div class='message-body'>
 

  
  <div class='message-model'>
  <?php 
  dbconnect();
  $MessegeBody = $pdo->query("SELECT body FROM messages");
  $MessegeBody = $MessegeBody->fetch(PDO::FETCH_ASSOC);
  $message = $MessegeBody['body'];
  
  foreach ($MessegeBody as $body ) {
    ?>
    <div class='message-card'>
      <?php echo($message); ?>
    </div>
      
  <?php 
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