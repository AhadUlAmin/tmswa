<?php
include 'database_connection.php';
?>


<?php
 if(isset($_POST['username'])){
	$username = trim(strip_tags($_POST['username']));
	$sql_check = mysqli_query($conn,"select username from `users` where username='".mysqli_real_escape_string($conn,$username)."'") or die(mysql_error());
	 if(mysqli_num_rows($sql_check)> 0)
	  {
		  echo "<span style='color:brown;'>Sorry username already taken !!!</span>";
	  }
	  else
	  {
		  echo "<span style='color:green;'>available</span>";
	  }

}
  
?>