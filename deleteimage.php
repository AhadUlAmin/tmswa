<?php
include("database_connection.php");
if(isset($_POST["page"]) && !empty($_POST["page"]))
{
	//Sign-up Page Starts here
	if($_POST["page"] == "delete")
	{	
		$fileId = $_POST["fileId"] ;
		$file = $_POST["file"] ;
		$file_path = "uploads/".$_POST['file'];
		$thumbnail_path_delete = "uploads/"."thumbnail_".$_POST['file'];
        if ( file_exists($file_path) ) {
        // Delete the file 
        unlink($file_path);
		 unlink($thumbnail_path_delete);
		mysqli_query($conn,"delete from `dropzone` where `id` = '$fileId'");
		}
		else{
			echo 'No File is found in our directory';
		}
		
	}
	//Sign-up Page Ends here
	
	}
	
?>
