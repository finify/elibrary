<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Nacoes E-library</title>
     <link rel="icon" href="res/images.jpg">
     <link rel="stylesheet" type="text/css" href="css/signup.css">
	 
<style></style>
  </head>

  
<body>

    
    
  </body>
</html>

<?php
require('php/dbconnect.php');
// If form submitted, insert values into the database.
if (isset($_REQUEST['email'])){
        // removes backslashes
        //escapes special characters in a string 
	$email = stripslashes($_REQUEST['email']);
	$email = mysqli_real_escape_string($con,$email);
	$password = stripslashes($_REQUEST['password']);
	$password = mysqli_real_escape_string($con,$password);
	$trn_date = date("Y-m-d H:i:s");
        $query = "INSERT into `register` (password, email, trn_date)
VALUES ('".md5($password)."', '$email', '$trn_date')";
        $result = mysqli_query($con,$query);
        if($result){
            echo "<div class='form'>
<h3>You are registered successfully.</h3>
<br/>Click here to <a href='login.php'>Login</a></div>";
        }
    }else{
?>
<center>
  <form id="register" method="POST">
  
    <center>
	<h1>Welcome to Nacoes E-library</h1>
	<p class="title">Signup</p>
	<label for="email">Email<label>
	<br>
    <input type="email" placeholder="neo@example.com" name="email" autofocus required/>
    <br>
    <label for="email">Password<label>
    <br>
    <input type="password" placeholder="*********" name="password" autofocus required/>
    <br>
    <input type="submit" placeholder="Signup" name="submit" value="signup" id="submit"/>
	</center>
  </form>
  </center>
<?php } ?>
