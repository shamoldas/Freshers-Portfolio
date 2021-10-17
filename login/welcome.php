<?php

?>
<?php
//include'index.php';

require_once "../config.php";
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
	<link rel="stylesheet" href="css/usersidebar.css">
</head>
<body>

<?php include('navbar.php');?>

	

	
<div class="container" style="backgroud:#CD232D ;">
 <div class="page-header">
	  <a class="navbar" style="color:#FFFFFF" href="#">Hello <?php echo"ShamolDas" ?></a>
        
    </div>
</div>
	
	
<div class="container" style="backgroud:#CD232D ;">
    <div class="row">
		<div class="col-md-3" >
		
			<div class="sidenav">

					<div class="list-group">
			
					   
						<a href="welcome.php" class="list-group-item list-group-item-action"><i class="glyphicon glyphicon-home"></i>
							Overview </a>
						<a href="welcome.php?page=blogMessage" class="list-group-item list-group-item-action">BlogPost</a>
						<a href="welcome.php?page=projectShow" class="list-group-item list-group-item-action">Project</a>
						<a href="welcome.php?page=CvUpload" class="list-group-item list-group-item-action">CV Upload</a>
						<a href="welcome.php?page=category" class="list-group-item list-group-item-action">Category</a>
						<a href="welcome.php" class="list-group-item list-group-item-action">Setting</a>
						<a href="welcome.php"  class="list-group-item list-group-item-action">Profile</a>
						<a href="welcome.php?page=contactMessage"  class="list-group-item list-group-item-action">Contact Message</a>
						<a href="welcome.php?page=reset-password" class="list-group-item list-group-item-action">ResetPassword</a>
						<a href="logout.php" class="list-group-item list-group-item-action">Logout</a>
			  


				
			  
					</div>
					
			</div>
		</div>
	
		
				<div class="col-md-9">
					  <!-- container-->
					  <?php 
						@$page=  $_GET['page'];
					  if($page!="")
					  {
						if($page=="blogpost")
						{
							include('blogpost.php');
						
						}
						elseif($page=="blogMessage")
						{
							include('blogMessage.php');
						}
						elseif($page=="projectShow")
						{
							include('projectShow.php');
						}
						elseif($page=="project")
						{
							include('projectAdd.php');
						}
						elseif($page=="CvUpload")
						{
							include('cvUpload.php');
						}
						elseif($page=="show")
						{
							include('show.php');
						}
						elseif($page=="category")
						{
							include('category.php');
						}
						elseif($page=="categoryAdd")
						{
							include('categoryAdd.php');
						}
						elseif($page=="profile")
						{
							include('profile.php');
						}
						elseif($page=="userblogpost")
						{
							include('userprofile.php');
						}
						elseif($page=="profile_update")
						{
							include('profile_update.php');
						}
						elseif($page=="myblogpost")
						{
							include('myblogpost.php');
						}
						elseif($page=="contactMessage")
						{
							include('contactMessage.php');
						}
						elseif($page=="reset-password")
						{
							include('reset-password.php');
						}
						else
						{
							include('default.php');
						}
					  }
					  
					 
						
					?>
						
				</div>
		
	</div>

</div>




<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>



<center>
<strong>Powered by <a href="http://shamoldastk.000webhost.com" target="_blank">ShamolDas</a></strong>
</center>
<br>
<br>
	
	
</body>
</html>