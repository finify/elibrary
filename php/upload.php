<?php
if(isset($_POST['upload']))
   {
   $title = $_POST['title'] ;
   $caption = $_POST['caption'] ;
   $contype = $_POST['contype'] ;
   $category = $_POST['category'] ;
   $category = $_POST['category'] ;
   
   $file=rand(1000,100000)."-".$_FILES['filename']['name'] ;
   $file_loc = $_FILES['filename']['tmp_name'];
   $filefolder ="upload/";
   
   move_uploaded_file($file_loc,$filefolder.$file) ;
   
   $thumb=rand(1000,100000)."-".$_FILES['mythumb']['name'] ;
   $thumb_loc = $_FILES['mythumb']['tmp_name'];
   $thumbfolder ="upload/thumb/";
   move_uploaded_file($thumb_loc,$thumbfolder.$thumb) ;
   
   $sql = "INSERT INTO content (title,caption,content,category,file,thumb)VALUES ('$title','$caption','$contype','$category','$file','$thumb') " ;
   mysqli_query($con, $sql) ;
   header("location:adminadd.php");
   }
   
  ?>