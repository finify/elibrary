<?php
//include auth.php file on all secure pages
include("php/auth.php");
?>
<!DOCTYPE html>
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
#con{
	width:130px;
	height:220px;
	background-color:silver;
	margin-left:20px;
	margin-top:10px;
	display:inline-block;
	overflow:hidden;
	color:white;
	
}
#title{
	width:100%;
	height:20px;
	background-color:#28324e;
	margin-top:0px;
	color:white;
	text-align:left;
	overflow:hidden;
	font-size:13px;
}
#download a{
font-size:13px;
color:green;
}
#download{
width:100%
height:13px;
}


</style>
</head>




<body>
<div id="headline">
<img src="res/indexhd5.png" alt="logo"/><br>
<div id="header">
<center>
Welcome to Nacoes elibraries
<p>Welcome <?php echo $_SESSION['email']; ?>!</p></center>
</div>
<br>
</div>

<ul>
  <li class="dropdown"><a href="#home">Ebooks</a>
  <div class="dropdown-content">
      <a href="ebook.php">ALL EBOOKS</a>
      <a href="#">ELECTRONICS</a>
      <a href="#">PROGRAMMING</a>
    </div>
  </li>
  <li class="dropdown"><a href="#home">Videos</a>
  <div class="dropdown-content">
      <a href="videos.php">ALL VIDOES</a>
      <a href="#">ELECTRONICS</a>
      <a href="#">PROGRAMMING</a>
    </div>
  </li>
  <li class="dropdown"><a href="#home">Audio</a>
  <div class="dropdown-content">
      <a href="videos.php">ALL VIDOES</a>
      <a href="#">ELECTRONICS</a>
      <a href="#">PROGRAMMING</a>
    </div>
  </li>
  
   <li style="float:right; padding-right:20px;"><a class="active" href="php/logout.php">LOGOUT</a></li>
</ul>


<div id="header" style="width:100%;height:20px;text-align:center; font-size:18px; background-color:teal; color:white;">Trending books 

</div>


<?php
 include("php/dbconnect.php");
 
 $sql="SELECT * FROM content WHERE content='pdf'";
 $result_set=mysqli_query($con,$sql);
 while($row=mysqli_fetch_array($result_set))
 {?>
 <div id="con">


<img src="upload/thumb/<?php echo $row['thumb'] ?>" alt="schlogo" id="schlogo" width="100%" height="80%"/>
<div id="title"> <?php echo $row['title'] ?> 
</div>
<div id="download"><a href="upload/<?php echo $row['file'] ?> " target="content1">Download</a>
</div>
</div>

     
        <?php
 }
 ?>




</body>

</html>