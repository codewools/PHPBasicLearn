<form method="POST">
  <input type="text" name="email">
  <button type="submit">Submit</button>
</form>

<?php
if (isset($_POST["email"])) {
$email = $_POST['email'];
  echo "Submitted Email: " . $_POST['email'];
  echo '<br>'.$_SERVER['PHP_SELF'].'';
  echo '<br>self : '.$_SERVER['PHP_SELF'].'';
  echo '<br>user agen : '.$_SERVER['HTTP_USER_AGENT'].'';
  echo '<br> address ip addres: '.$_SERVER['REMOTE_ADDR'].'';
  echo '<br>servername : '.$_SERVER['SERVER_NAME'].'';
  echo '<br> request uri : '.$_SERVER['REQUEST_URI'].'';
  echo '<br> querry string :  '.$_SERVER['QUERY_STRING'].'';
  echo '<br> back page url : if have: '.$_SERVER['HTTP_REFFEREL'].'<br>';
  
}

$ar = [
    "name"=> "Hamza",
    "srNo"=> 201400,
    "email"=> $email,
];
if (isset($_POST["email"])) {
setcookie("profile", json_encode($ar), time() + 3600, "/"); 
}



session_start();
$cooke = json_decode($_COOKIE["profile"],true);
print_r($cooke);
echo $_SESSION["favcolor"];


?>
