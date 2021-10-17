<?php

include('../config.php');


// Escape user inputs for security
$category = mysqli_real_escape_string($link, $_REQUEST['category']);
$tag= mysqli_real_escape_string($link, $_REQUEST['tag']);
//$code_url= mysqli_real_escape_string($link, $_REQUEST['code_url']);
//$video_url = mysqli_real_escape_string($link, $_REQUEST['video_url']);

 
// Attempt insert query execution
$sql = "INSERT INTO category (category,tag) VALUES ('$category','$tag')";
#$sql = "INSERT INTO content (title,category, message,file_name) VALUES ('$title','$category','$message',$file_name)";
if(mysqli_query($link, $sql)){
      echo " <h4><center>Records added successfully.</center></h4> ";
	include('welcome.php?page=category');
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);


?>
