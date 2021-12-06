<!DOCTYPE html>
<html>
<head>
<?php 
  session_start();
  include("customernav.php");
  require_once('function.php');
  
  ?>
<style> 
body {
  font-family: Arial;
  margin: 0;
}

/* Header/Logo Title */
.header {
  padding: 10px;
  text-align: center;
  background: #1abc9c;
  color: white;
  font-size: 10px;
}
.message-body{
  
  margin-left: 600px;
}
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
  background-color: #1abc9c;
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
    width: fit-content;
    height: fit-content;
    padding: 15px;
    margin: 20px;
    border-radius: 5px;
    max-width: 90%;
}

.message-card-client{
  background-color: #80b0ff;
    width: fit-content;
    height: fit-content;
    padding: 15px;
    margin: 20px;
    border-radius: 5px;
    max-width: 90%;
}
.message-model{
  background-color: #ededed;
    width: 40%;
    height: 500px;
    padding: 10px;
    margin-left: 40px;
    margin-bottom: 20px;
    margin-top: 50px;
    border-radius: 5px;
    overflow-y: scroll;
    overflow-x: clip;
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
    <form action="MessageSubmitAdmin.php" method="post" >
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