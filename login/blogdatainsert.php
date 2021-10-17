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
$category= mysqli_real_escape_string($link, $_REQUEST['category']);
//$subcat= mysqli_real_escape_string($link, $_REQUEST['subcat']);
$message = mysqli_real_escape_string($link, $_REQUEST['message']);
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
$sql = "INSERT INTO content (title,category,message) VALUES ('$title','$category','$message')";
#$sql = "INSERT INTO content (title,category, message,file_name) VALUES ('$title','$category','$message',$file_name)";
if(mysqli_query($link, $sql)){
      echo " <h4>Records added successfully.</h4> ";
	include('welcome.php');
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);


?>
