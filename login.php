<?php
session_start();
if(isset($_SESSION["email"])){
header("Location: ebook.php");
exit(); }
if(isset($_SESSION["adminemail"])){
header("Location: admin1.php");
exit(); }

?>
<!DOCTYPE html>
<html>
  <head>
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="icon" href="res/images.jpg">
     <link rel="stylesheet" type="text/css" href="css/loginstyle.css">
	 <title>Nacoes e-library</title>
<style></style>
  </head>
  
  
<body>   
    
	
<div id="headline">
      <div class="container">
    <header>
      <h1>Nacoes E-library</h1>
      <p>Learn at your own pace</p>
    </header>
    <div id="blurb">
      <p>Teach yourself anything through our Ebooks on.</p>
	  <ul>
        <li>Programming,</li>
        <li>Electronics,</li>
        <li>Networking and more</li>
      </ul>
      <p>Learn from our numerous videos carefully selected by our team of experts in these different
	  fields as listed above.</p>
    </div>
	<?php
require('php/dbconnect.php');
// If form submitted, insert values into the database.
if (isset($_POST['email'])){
        // removes backslashes
	$email = stripslashes($_REQUEST['email']);			//for user
        //escapes special characters in a string
	$email = mysqli_real_escape_string($con,$email);		//for user
	$password = stripslashes($_REQUEST['password']);		//for user
	$password = mysqli_real_escape_string($con,$password);	//for user
	//Checking is user existing in the database or not
$query = "SELECT * FROM `register` WHERE email='$email' 
and password='".md5($password)."'";						//for user
$query1 = "SELECT * FROM `admin` WHERE email='$email' 
and password='$password'";	
	
	$result = mysqli_query($con,$query) or die(mysql_error());
	$result1 = mysqli_query($con,$query1) or die(mysql_error());
	$rows = mysqli_num_rows($result);
	$rows1 = mysqli_num_rows($result1);
         if($rows==1){
		$_SESSION['email'] = $email;
            // Redirect user to index.php
	    header("Location: ebook.php");
		 }else if($rows1==1){
		$_SESSION['adminemail'] = $email;
            // Redirect user to index.php
	    header("Location: admin1.php");
		 }
		 
		 
		 else{
	echo '<form method="post" id="register">
	<center>
	Wrong password and email combination
   <h2>Login</h2>
   <div id="error"><?php echo $error;?></div>
   <label for="email" id="label">Email address</label><br>
   <input type="email" name="email" id="email" 
      placeholder="neo@example.com" required><br>
   <label for="tel">Password</label><br>
   <input type="password" name="password" id="pass" 
      placeholder="**********" required><br>
   <input type="submit" value="Login" id="submit"><br>
   <a href="#">forgot password</a><br>
   <a href="signup.php">Signup</a>
   <center>
   </form>';}
    }else{
?>
 <form method="post" id="register">
	<center>
   <h2>Login</h2>
   
   <label for="email" id="label">Email address</label><br>
   <input type="email" name="email" id="email" 
      placeholder="neo@example.com" required><br>
   <label for="tel">Password</label><br>
   <input type="password" name="password" id="pass" 
      placeholder="**********" required><br>
   <input type="submit" value="Login" id="submit"><br>
   <a href="#">forgot password</a><br>
   <a href="signup.php">Signup</a>
   <center>
   </form>

<?php } ?>
   
  </div>
  <br>
    </div>
    
	
<div id="section1">
<div class="container">
      <h2>What will I learn?</h2> 
  <ul>
  <p>After going through some of our ebooks and videos you will be able to:</p>
	<li>build great web experiences on mobile devices</li>
    <li>design automated electronics design</li>
    <li>Design and publish your own software</li>
    <li>Configure network routers and so much more</li>
  </ul>
   <center>One of our videos on programing</center>
  <video controls poster="videoimg.png">
    <source src="Hack.mp4" type="video/mp4"></source>
    <p>Sorry your browser doesn't support video. 
       <a href="udacity.mov">Download the video</a>.
    </p>
  </video>
  <br> <br> <br>
  </div>
  
</div>
   

<div id="section2">
<div class="container">
  <center>    <h2>Who built this responsive page?</h2>
  <p>The world's leading mobile web developers.</p>
  <p>Finify</p></center>

  <div id="images">
   <center> <img src="res/Photo.jpg" alt="Chris Wilson: Course Instructor"></center>
  </div>

  <br>
  </div>
</div>
    
	
<footer>
  <div class="container">
    <center><p>We always need a footer.</p></center>
  </div>
</footer>





</body>
</html>