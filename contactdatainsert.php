<?php
 include('config.php');
?>

<?php
// Escape user inputs for security
$name = mysqli_real_escape_string($link, $_REQUEST['name']);
$email = mysqli_real_escape_string($link, $_REQUEST['email']);
$location = mysqli_real_escape_string($link, $_REQUEST['location']);
$subject = mysqli_real_escape_string($link, $_REQUEST['subject']);
$message = mysqli_real_escape_string($link, $_REQUEST['message']);

  

 
// Attempt insert query execution
$sql = "INSERT INTO contact (name,email,location,subject,message) VALUES ('$name','$email','$location','$subject','$message')";
if(mysqli_query($link, $sql)){
    echo "Message Send.Conatact Soon!";
	include"contact.php";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>


