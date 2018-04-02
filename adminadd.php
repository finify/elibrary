<?php
session_start();
if(!isset($_SESSION["adminemail"])){
header("Location: login.php");
exit(); }
?>
<!DOCTYPE hctml>
<html>
 <head>
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="icon" href="res/images.jpg">
     <link rel="stylesheet" type="text/css" href="css/mystyle.css">
	 <title>Nacoes e-library</title>
<style>
body{
	margin:0px;
}


</style>
</head>




<body>
<div id="headline">
<img src="res/indexhd5.png" alt="logo"/><br>
<div id="header">
<center>
Welcome to Nacoes elibraries
<p>Welcome <?php echo $_SESSION['adminemail']; ?>!</p></center>
</div>
<br>
</div>


<div id="header" style="width:100%;height:25px;text-align:center; font-size:25px; background-color:teal; color:white;">ADD NEW CONTENT<a href="admin1.php" style="float:right; font-size:20px;">Home</a>
</div>

<form method="POST" action="adminadd.php" id="register" enctype="multipart/form-data">
<br>
	<center>
	TITLE:<br>

<input type="text" id="title" name="title"  class="content" style="width:100%;height:20px;" >
<br> 
Describe the content.
<br>
<textarea  name="caption"  class="content" style="width:100%;height:100px;">enter caption here
</textarea>
<br>

Content type:  <br> 
<select name="contype" id="contype" class="content" style="width:50%;height:25px;">
<option value="pdf"> EBOOK </option>
<option value="videos"> VIDEO  </option>
<option value="audios"> AUDIO  </option>


</select>
<br>
select category: 
<br>
<select id="cate" name="category" class="content" style="width:50%;height:25px;">
<option value="programming"> PROGRAMMING  </option>
<option value="electronics"> ELECTRONICS </option>
<option value="enterpreneurship"> NETWORKING  </option>


</select>
  <br>
Select File
 <br>  
<input type="file" name="filename" id="myfile" class="content" style="width:50%;height:25px;">
<br /> 
Select Thumbnail <br />

 
<input type="file" name="mythumb" id="mythumb" class="content" style="width:50%;height:25px;">
<br />

<input type="submit" name="upload" value="Upload" class="content" id="uploadbt" style="width:60%;height:25px;" >
<br>
</center>
</form>




</body>

</html>

<?php

   include("php/dbconnect.php");
   include("php/upload.php");
   
  
?>