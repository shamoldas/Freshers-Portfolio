


<?php
// Include config file
require_once "../config.php";
 
// Define variables and initialize with empty values
$title = $category=$message="";
$title_err = $category_err=$message_err="";
 
// Processing form data when form is submitted
if(isset($_POST["id"]) && !empty($_POST["id"]))
{
    // Get hidden input value
    $id = $_POST["id"];
    // Validate name
    $input_title = trim($_POST["title"]);
    if(empty($input_title)){
        $title_err = "Please enter a title.";
    }
	elseif(!filter_var($input_title, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z0-9 ]+$/")))){
        $title_err = "Please enter a valid Title.";
    }
	elseif(strlen($input_title)>=51)
	{
	 $title_err = "Please enter a Title(maximum 50 Character).";
	} 
	else
	{
        $title = $input_title;
    }

    
    // Validate address
    $input_message = trim($_POST["message"]);
    if(empty($input_message)){
        $message_err = "Please enter Description.";     
    } 
	else
	{
        $message = $input_message;
    }
    
    // Check input errors before inserting in database
    if(empty($title_err) && empty($message_err)){
        // Prepare an insert statement
       
        $sql = "UPDATE content SET title=?,message=? WHERE id=?";
         
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ss", $param_title,$param_message,$param_id);
            
            // Set parameters
            $param_name = $name;

            $param_message = $message;
			$param_id = $id;

	   // $param_password=$password;
         
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                echo" Records created successfully. Redirect to landing page";
                //header("location: index.php");
				include("welcome.php");
                exit();
            } 
			else
			{
                echo " Hi..Something went wrong. Please try again later.";
            }
        }
         
        // Close statement
        mysqli_stmt_close($stmt);
    }
    
    // Close connection
    	mysqli_close($link);
}

	else{
    // Check existence of id parameter before processing further
    if(isset($_GET["id"]) && !empty(trim($_GET["id"]))){
        // Get URL parameter
        $id =  trim($_GET["id"]);
  // Prepare a select statement
        $sql = "SELECT * FROM content WHERE id = ?";
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "i", $param_id);
            
            // Set parameters
            $param_id = $id;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                $result = mysqli_stmt_get_result($stmt);
    
                if(mysqli_num_rows($result) == 1)
				{
                    /* Fetch result row as an associative array. Since the result set contains only one row, we don't need to use while loop */
                    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
         // Retrieve individual field value
                    $name = $row["title"];
					$mobile = $row["message"];
       
                } 
				else
				{
                    // URL doesn't contain valid id. Redirect to error page
                    header("location: error.php");
                    exit();
                }
                
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
        
        // Close statement
        mysqli_stmt_close($stmt);
        
        // Close connection
        mysqli_close($link);
    }  else{
        // URL doesn't contain id parameter. Redirect to error page
        header("location: error.php");
        exit();
    }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Record</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        .wrapper{
            width: 750px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h1>Edit Blog Post</h1>
                    </div>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
					
					<button><a href="welcome.php?page=blogMessage">Back</a></button>
                        <div class="alert alert-danger fade in">
							
						<div class="form-group <?php echo (!empty($title_err)) ? 'has-error' : ''; ?>">
                            <label>Title</label>
                            <input type="text" name="title" class="form-control" value="<?php echo $title; ?>">
                            <span class="help-block"><?php echo $title_err;?></span>
                        </div>	

						
						<div class="form-group <?php echo (!empty($message_err)) ? 'has-error' : ''; ?>">
                            <label>Description</label>
                            <input type="text" name="message" class="form-control" value="<?php echo $message; ?>">
                            <span class="help-block"><?php echo $message_err;?></span>
                        </div>

						<div class="form-group">
                            <label>Source Code</label>
                            <input type="text" name="title" class="form-control">
                      
                        </div>
						<div class="form-group">
                            <label>Demo/Video Link</label>
                            <input type="url" name="title" class="form-control">
                      
                        </div>
						
                            <input type="hidden" name="id" value="<?php echo trim($_GET["id"]); ?>"/>
                            <p>Are you sure you want to Edit this record?</p><br>
                            <p>
                                <input type="submit" value="Yes" class="btn btn-danger">
                                <a href="welcome.php?page=blogMessage" class="btn btn-default">No</a>
                            </p>
                        </div>
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>
