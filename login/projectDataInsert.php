<?php

include('../config.php');

/*
$statusMsg = ''

$targetDir = "uploads/"; 
$fileName = basename($_FILES["file"]["file_name"]); 
$targetFilePath = $targetDir . $fileName; 
$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION); 
 */
// Escape user inputs for security
$title = mysqli_real_escape_string($link, $_REQUEST['title']);
$description= mysqli_real_escape_string($link, $_REQUEST['description']);
$code_url= mysqli_real_escape_string($link, $_REQUEST['code_url']);
$video_url = mysqli_real_escape_string($link, $_REQUEST['video_url']);
/*

if(isset($_POST["submit"]) && !empty($_message["message"]))
{     // Allow certain file formats    
	$allowTypes = array('jpg','png','jpeg','gif','pdf');     
		
		if(in_array($fileType, $allowTypes))
			{         // Upload file to server         
				if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath))
				{             // Insert image file name into database            
					$sql = "INSERT INTO content (title,category, message,file_name) VALUES ('$title','$category','$message',$file_name)";
				
					if(mysqli_query($link, $sql))
					{
								#echo " <h4>alert"Records added successfully."</h4> ";
						include('welcome.php');
					}
				}
			}
			else
			{                 
					$statusMsg = "File upload failed, please try again.";             
			}
			
}
else
{
	$statusMsg = 'Please Write The Content.'; 
}

*/
 
// Attempt insert query execution
$sql = "INSERT INTO project (title,description,code_url,video_url) VALUES ('$title','$description','$code_url','$video_url')";
#$sql = "INSERT INTO content (title,category, message,file_name) VALUES ('$title','$category','$message',$file_name)";
if(mysqli_query($link, $sql)){
      echo " <h4><center>Records added successfully.</center></h4> ";
	include('welcome.php');
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);


?>
