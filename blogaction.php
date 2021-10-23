<?php
   include("includes/dbconfig.php");
   $errors = "";
	$input_err = "";
	$status = "";
	$username = "";
	$pwd = "";
	function test_input($data){
		include("includes/dbconfig.php");
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		$data = mysqli_real_escape_string($conn, $data);
		return $data;}

	//* Comment scripts */
	if (isset($_POST['PostComment'])) {
		if (empty($_POST["email"])) {
			$email = "";
			$input_err = "* This field is required";
		} else {
			$email = test_input($_POST['email']);
		}
		if (empty($_POST["name"])) {
			$name = "";
			$input_err = "* This field is required";
		} else {
			$name = test_input($_POST['name']);
		}
	
		if (empty($_POST["comment"])) {
			$comment = "";
			$input_err = "* This field is required";
		} else {
			$comment = test_input($_POST['comment']);
		}
		if (empty($_POST["blog_id"])) {
			$blog_id = "";
			//$input_err = "* This field is required";
		} else {
			$blog_id = test_input($_POST['blog_id']);
		}
		
		//echo $email;
		//echo $comment;
		$date = date("Y-m-d H:i:s"); 
		if ($input_err == "") {
			$insert = mysqli_query($conn, "INSERT INTO comments (blog_id, email, c_name, comment, timedate) 
						VALUES('$blog_id', '$email', '$name', '$comment', '$date')");
					
			if ($insert) {
				?>
				<script>
					alert("Comment was submitted successfully!");
					window.location.assign("blog-detail.php?blog_id=<?php echo $blog_id?>");
				</script>
				<!--  header("Location: blog-detail.php?blog_id=$blog_id");
				$status .= '<div class="alert alert-success">
				<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
				<strong>Comment was submitted successfully!</strong>
				</div>';  -->
				<?php
				} else {
				$status .= '<div class="alert alert-danger">
				<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
				<strong>Unable to submit comment into the database currently, please try again later.</strong>
				</div>';
				} 
			} else {
				$status .= '<div class="alert alert-danger">
				<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
				<strong>Unable to upload comments, some field(s) are empty.</strong>
			</div>';
			}
			}
?>