<title>Add Record Form</title>
</head>
<body>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<button><a href="welcome.php?page=blogMessage">Back</a></button>
<form name="form1" id="form1" action="blogdatainsert.php">


						 <div class="form-group">
                            <label>Title</label>
                            <input type="text" name="title" class="form-control" required="required">
                      
                        </div>
						
						<div class="form-group">
							<label>Category/Subjects:</label>
							<select name="category" class="form-control">
								<?php
								
								include('../config.php');

								$sql=mysqli_query($link,"select * from category");
								while($r=mysqli_fetch_array($sql))
								{
								echo "<option value='".$r['category']."'>".$r['category']."</option>";
								}
							    ?>
							</select>
						<!--	
					  <select name="category" id="subject" class="form-control" required="required">

						<option value="" selected="selected" >Select subject</option>
							<option>Subject1</option>
							<option>Subject12</option>
							<option>Subject13</option>
					  </select>
					  -->
					  </div>
					 
                        <div class="form-group">
                            <label>Message</label>
                            <textarea name="message"  class="form-control" required="required"></textarea>
                            <span class="help-block"></span>
                        </div>

						 <input type="submit" class="btn btn-primary" value="Submit">
</form>		
		
		
		
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>