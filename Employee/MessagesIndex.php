<!DOCTYPE html>
<html>
<head>
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
</style>
</head>
<body>

<h2>Messages</h2>

<?php 
require_once('function.php');
dbconnect();
$MessegeBody = $pdo->query("SELECT body FROM messages");
$MessegeBody = $MessegeBody->fetch(PDO::FETCH_ASSOC);
$message = $MessegeBody['body'];

foreach ($MessegeBody as $body ) {
    
}

?>

<form action="MessageSubmit.php" method="post">
  <textarea name='message' placeholder="Type your message here..."></textarea>
  <div class="row">
    <input type="submit" value="Send">
  </div>
</form>

</body>
</html>