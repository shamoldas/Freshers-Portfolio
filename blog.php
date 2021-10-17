
<?php

include('navbar.php');

?>

<section>
	 <div class="container">
	
		<div class="hrdivider">
		  <hr/>
		  <span><b><h3>My Own Think</h3></b></span>
		</div>
      
    </div>
	
</section>
<link rel="stylesheet" href="css/blogSearch.css" />


	<div class="container">
		<div class="row">
                <div class="col-md-12">
				<div class="search-box">
					<input type="text" autocomplete="off" placeholder="Search ..." />
					<div class="result"></div>
				</div>
			</div>
		</div>
	</div>
	
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script>
$(document).ready(function(){
    $('.search-box input[type="text"]').on("keyup input", function(){
        /* Get input value on change */
        var inputVal = $(this).val();
        var resultDropdown = $(this).siblings(".result");
        if(inputVal.length){
            $.get("backend-search.php", {term: inputVal}).done(function(data){
                // Display the returned data in browser
                resultDropdown.html(data);
            });
        } else{
            resultDropdown.empty();
        }
    });
    
    // Set search input value on click of result item
    $(document).on("click", ".result p", function(){
        $(this).parents(".search-box").find('input[type="text"]').val($(this).text());
        $(this).parent(".result").empty();
    });
});
</script>


	<div class="container">
		<div class="row">
                <div class="col-md-12">
                   
                    <?php
					
					
                    // Include config file
                    require_once "config.php";
					
					  if (isset($_GET['pageno'])) {
            $pageno = $_GET['pageno'];
        } else {
            $pageno = 1;
        }
        $no_of_records_per_page = 5;
        $offset = ($pageno-1) * $no_of_records_per_page;

      

        $total_pages_sql = "SELECT COUNT(*) FROM content";
        $result = mysqli_query($link,$total_pages_sql);
        $total_rows = mysqli_fetch_array($result)[0];
        $total_pages = ceil($total_rows / $no_of_records_per_page);

        $sql = "SELECT * FROM content LIMIT $offset, $no_of_records_per_page";
        $res_data = mysqli_query($link,$sql);

                    # $sql = "SELECT * FROM content WHERE id = ?";
                    // Attempt select query execution
                    //$sql = "SELECT * FROM content where subcat='bangla' ";
					$sql = "SELECT * FROM content order by id desc LIMIT $offset, $no_of_records_per_page";
                    //$sql = "SELECT *FROM content order by id desc ";
                    if($result = mysqli_query($link, $sql)){
                        if(mysqli_num_rows($result) > 0)
						{
                            
								$i=1;
                                while($row = mysqli_fetch_array($result))
								{
								
									//echo"<h4>Post No:$i</h4>";
									echo"<h4>Content No:".$row['id']."</h4>";
									echo"<h4>Title:".$row['title']."</h4>";
									
									echo"Category:".$row['category']."<br>";
									
									echo"<b>Review:</b>".$row['message']."<br>";

								
									
									echo"<br><hr>";
									$i++;
								}      
                          
                            // Free result set
                            mysqli_free_result($result);
                        } 
						else
						{
                            echo "<p class='lead'><em>No records were found.</em></p>";
                        }
						
                    }
					else
					{
                        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
                    }
 
                    // Close connection
                    mysqli_close($link);
                    ?>
					
						<ul class="pagination">

							<li class="<?php if($pageno <= 1){ echo 'disabled'; } ?>">
								<button><a href="<?php if($pageno <= 1){ echo '#'; } else { echo "?pageno=".($pageno - 1); } ?>">Previous </a></button>
							</li>
							<li></li>
							<li class="<?php if($pageno >= $total_pages){ echo 'disabled'; } ?>">
								<button><a href="<?php if($pageno >= $total_pages){ echo '#'; } else { echo "?pageno=".($pageno + 1); } ?>"> Next</a></button>
							</li>
							
						</ul>
	
                </div>
		</div>
	</div>
</section>



<?php

include('footer.php');
?>
