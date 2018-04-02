<!DOCTYE html>
<html>
<head>
<script>

</script>
<title>
Nacoes E-Libery
</title>

<link rel="icon" href="res/images.jpg">
<link rel="stylesheet" type="text/css" href="css/mystyle.css">

<style>
</style>

<script src="script/jquery.js">
</script>
</head>

<body>
<div id="header">
	<img src="res/schoolicon.png" alt="schlogo" id="schlogo" width="150px" height="150px"/>
	<h id="welcome"> WELCOME TO NACOES E-LIBRARY</h>
	<h id="moto"> HOME OF DIGITAL LEARNING</h>
	<img src="res/schoollogo.png" alt="dptlogo" id="dptlogo" width="150px" height="150px">
</div>

<div id="body">
	<div id="menu">
		<input type="text" id="search" name="search"/>
		<input type="submit" id="searchbt"value="search"/>
		<ul>
		<li><a href="ebook.php" target="content1">HOME</a></li>
		<li><a href="#news">ABOUT</a></li>
		<li><a href="admin1.php">ADMIN</a></li>
		</ul>
		</div>
		<div id="content">
		<iframe  src="ebook.php" name="content1" id="content1" frameborder="0"  width="100%" height="100%"> 
		Sorry your browser does not support inline frames. 
		</iframe> 
	</div>
	
	<div id="right">
		<h id="contentlabel">CONTENT</h>
		<div id="contentwrap">
			<div id="ebook" class="contentcon">
			<a href="ebook.php" target="content1">
			<img src="res/drwdoc.png" alt="dptlogo"  width="90px" height="80px">
			</a>
			<br>
			EBOOK
			</div>
			<div id="video" class="contentcon">
			<a href="videos.php" target="content1">
			<img src="res/drwvid.png" alt="dptlogo" width="90px" height="80px">
			</a><br>
			VIDEO
			</div>
		</div>
	</div>
</div>
</body>
