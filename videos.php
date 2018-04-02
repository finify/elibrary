<?php
//include auth.php file on all secure pages
include("php/auth.php");
?>
<!DOCTYPE html>
<html>
<head><meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="icon" href="res/images.jpg">
     <link rel="stylesheet" type="text/css" href="css/mystyle.css">
	 <title>Nacoes e-library</title>
<style>
body{
	margin:0px;
}
#con{
	margin-top:10px;
	margin-left:10px;
	width:300px;
	height:210px;
	background-color:silver;
	display:inline-block;
	overflow:hidden;
	color:white;
}
#title{
	width:100%;
	height:20px;
	background-color:#28324e;
	color:white;
	text-align:left;
	overflow:hidden;
}

video{
	width:100%;
	height:80%;
	background-color:silver;
}
</style>
</head>




<body>
<div id="headline">
<img src="res/indexhd5.png" alt="logo"/><br>
<div id="header">
<center>
Welcome to Nacoes elibraries</center>
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
  <li class="dropdown"><a href="#">Videos</a>
  <div class="dropdown-content">
      <a href="videos.php">ALL VIDEOS</a>
      <a href="#">PROGRAMMING</a>
      <a href="#">ELECTRONICS</a>
    </div>
  </li>
  
   <li style="float:right; padding-right:20px;"><a class="active" href="php/logout.php">LOGOUT</a></li>
</ul>



<div id="header" style="width:100%;height:25px;text-align:center; font-size:25px; background-color:teal; color:white;">Trending videos
<p>Welcome <?php echo $_SESSION['email']; ?>!</p>
</div>


<?php
 include("php/dbconnect.php");
 
 $sql="SELECT * FROM content WHERE content='videos'";
 $result_set=mysqli_query($con,$sql);
 while($row=mysqli_fetch_array($result_set))
 {?>
<div id="con">
<video controls poster="upload/thumb/<?php echo $row['thumb'] ?>">
 
    <source src="upload/<?php echo $row['file'] ?>" type="video/mp4"></source>
    <p>Sorry your browser doesn't support video. 
       <a href="upload/<?php echo $row['file'] ?>">Download the video</a>.
    </p>
  </video>
  <div id="title"> <?php echo $row['title'] ?> <br>
 </div>
 <a href="upload/<?php echo $row['file'] ?>">Download</a>
 </div>
 
     
        <?php
 }
 ?>




</body>

</html>