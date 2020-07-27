<?php
require('db.php');
//This function generates a random name for the uploaded files : by me
 function themornstar_generate_random_name() 
{
	$length = 6;
	$charactersa = "mRdxIU2r3dxa1B2c3D4e5F6g7H8i9Jqk1L2m13N1oF5P6qW7R1Ls9T20u21V2w3X4y2Z2x6";
	$real_string_legntha = strlen($charactersa) - 1;
	$stringa=rand(12345,98760);
	for ($oluvica = 0; $oluvica < $length; $oluvica++)
	{
		$stringa .= $charactersa[mt_rand(0, $real_string_legntha)];
	}
	return $stringa;
} 
function thumbnail($src, $dist, $dis_width = 320 ){

	$img = '';
	$extension = strtolower(strrchr($src, '.'));
	switch($extension)
	{
		case '.jpg':
		case '.jpeg':
			$img = @imagecreatefromjpeg($src);
			break;
		case '.gif':
			$img = @imagecreatefromgif($src);
			break;
		case '.png':
			$img = @imagecreatefrompng($src);
			break;
	}
	$width = imagesx($img);
	$height = imagesy($img);




	$dis_height = $dis_width * ($height / $width);

	$new_image = imagecreatetruecolor($dis_width, $dis_height);
	imagecopyresampled($new_image, $img, 0, 0, 0, 0, $dis_width, $dis_height, $width, $height);


	$imageQuality = 200;

	switch($extension)
	{
		case '.jpg':
		case '.jpeg':
			if (imagetypes() & IMG_JPG) {
				imagejpeg($new_image, $dist, $imageQuality);
			}
			break;

		case '.gif':
			if (imagetypes() & IMG_GIF) {
				imagegif($new_image, $dist);
			}
			break;

		case '.png':
			$scaleQuality = round(($imageQuality/100) * 9);
			$invertScaleQuality = 9 + $scaleQuality;


			if (imagetypes() & IMG_PNG) {
				imagepng($new_image, $dist, $invertScaleQuality);
			}
			break;
	}
	imagedestroy($new_image);
}



// Check if the request is for deleting or uploading
$delete_file = 0;
if(isset($_POST['delete_file'])){ 
    $delete_file = $_POST['delete_file'];
}

$targetPath = dirname( __FILE__ ) . '/uploads/';

// Check if it's an upload or delete and if there is a file in the form
if ( !empty($_FILES) && $delete_file == 0 ) {

    // Check if the upload folder is exists
    if ( file_exists($targetPath) && is_dir($targetPath) ) {

        // Check if we can write in the target directory
        if ( is_writable($targetPath) ) {

            /**
             * Start dancing
             */
			 
			 // line below by me 
			 $file_ext = $_FILES['file']['name'];
             $ext = pathinfo($file_ext, PATHINFO_EXTENSION);

			 $random_name_generated = themornstar_generate_random_name().'.'.$ext;
			 
			// $random_name_generated = themornstar_generate_random_name().'_'.$_FILES['file']['name'];
			 
			 
            $tempFile = $_FILES['file']['tmp_name'];
            // system line blocked by me :....:
		
            //$targetFile = $targetPath . $_FILES['file']['name']; 
			$targetFile = $targetPath . $random_name_generated ;
			
				//thumnail function varaible 
			$src = $targetFile ;
			$dist = $targetPath."thumbnail_".$random_name_generated;
			$thumbnailpic = "thumbnail_".$random_name_generated;
			//$fileunique = $article_unique ;
			$fileunique = $_POST['fileunique'];


			

            // Check if there is any file with the same name
            if ( !file_exists($targetFile) ) {

                // Upload the file
               // move_uploaded_file($tempFile, $targetFile);
				
				if (move_uploaded_file($tempFile, $targetFile))
				{
				  // thumbnail($src, $dist, 200); 
				   createThumbnail($src,$dist,320,200, $background=false);
				   
				   
				   mysqli_query($conn,"
				   INSERT INTO `dropzone`(`id`, `filename`, `file`, `thumbnail`, `fileunique`) 
				   VALUES (NULL,'".mysqli_real_escape_string($conn,$file_ext)."','".mysqli_real_escape_string($conn,$random_name_generated)."','".mysqli_real_escape_string($conn,$thumbnailpic)."','".mysqli_real_escape_string($conn,$fileunique)."')
				   ");
				}
				
				
				
				
				

                // Be sure that the file has been uploaded
                if ( file_exists($targetFile) ) {
                    $response = array (
                        'status'    => 'success',
                        'file_link' => $targetFile
                    );
                } else {
                    $response = array (
                        'status' => 'error',
                        'info'   => 'Couldn\'t upload the requested file :(, a mysterious error happend.'
                    );
                }

            } else {
                // A file with the same name is already here
                $response = array (
                    'status'    => 'error',
                    'info'      => 'A file with the same name is exists.',
                    'file_link' => $targetFile
                );
            }

        } else {
            $response = array (
                'status' => 'error',
                'info'   => 'The specified folder for upload isn\'t writeable.'
            );
        }
    } else {
        $response = array (
            'status' => 'error',
            'info'   => 'No folder to upload to :(, Please create one.'
        );
    }

    // Return the response
    echo json_encode($response);
    exit;
}


// Remove file
if( $delete_file == 1 ){


    $file_path = $_POST['target_file'];
$targetPath = dirname( __FILE__ ) . '/uploads/';
$replaced_string = str_replace($targetPath,"",$file_path);

$thumbnail_path_delete = $targetPath."thumbnail_".$replaced_string;
    // Check if file is exists
    if ( file_exists($file_path) ) {

        // Delete the file 
        unlink($file_path);
		 unlink($thumbnail_path_delete);
		mysqli_query($conn,"delete from `dropzone` where `file` = '$replaced_string'");
				/* 	 	   mysql_query("
				   INSERT INTO `dropzone`(`id`, `filename`, `file`, `thumbnail`, `fileunique`) 
				   VALUES (NULL,'".mysql_real_escape_string($replaced_string)."','".mysql_real_escape_string($file_path)."','".mysql_real_escape_string($file_path)."','".mysql_real_escape_string($fileunique)."')
				   ");  */
				   
				   
        // Be sure we deleted the file
        if ( !file_exists($file_path) ) {
            $response = array (
                'status' => 'success',
                'info'   => 'Successfully Deleted.'
            );
        } else {
            // Check the directory's permissions
            $response = array (
                'status' => 'error',
                'info'   => 'We screwed up, the file can\'t be deleted.'
            );
        }
    } else {
        // Something weird happend and we lost the file
        $response = array (
            'status' => 'error',
            'info'   => 'Couldn\'t find the requested file :('
        );
    }

    // Return the response
    echo json_encode($response);
    exit;
}


function createThumbnail($filepath, $thumbpath, $thumbnail_width, $thumbnail_height, $background=false) {
    list($original_width, $original_height, $original_type) = getimagesize($filepath);
    if ($original_width > $original_height) {
        $new_width = $thumbnail_width;
        $new_height = intval($original_height * $new_width / $original_width);
    } else {
        $new_height = $thumbnail_height;
        $new_width = intval($original_width * $new_height / $original_height);
    }
    $dest_x = intval(($thumbnail_width - $new_width) / 2);
    $dest_y = intval(($thumbnail_height - $new_height) / 2);

    if ($original_type === 1) {
        $imgt = "ImageGIF";
        $imgcreatefrom = "ImageCreateFromGIF";
    } else if ($original_type === 2) {
        $imgt = "ImageJPEG";
        $imgcreatefrom = "ImageCreateFromJPEG";
    } else if ($original_type === 3) {
        $imgt = "ImagePNG";
        $imgcreatefrom = "ImageCreateFromPNG";
    } else {
        return false;
    }

    $old_image = $imgcreatefrom($filepath);
    $new_image = imagecreatetruecolor($thumbnail_width, $thumbnail_height); // creates new image, but with a black background

    // figuring out the color for the background
    if(is_array($background) && count($background) === 3) {
      list($red, $green, $blue) = $background;
      $color = imagecolorallocate($new_image, $red, $green, $blue);
      imagefill($new_image, 0, 0, $color);
    // apply transparent background only if is a png image
    } else if($background === 'transparent' && $original_type === 3) {
      imagesavealpha($new_image, TRUE);
      $color = imagecolorallocatealpha($new_image, 0, 0, 0, 127);
      imagefill($new_image, 0, 0, $color);
    }

    imagecopyresampled($new_image, $old_image, $dest_x, $dest_y, 0, 0, $new_width, $new_height, $original_width, $original_height);
    $imgt($new_image, $thumbpath);
    return file_exists($thumbpath);
}

	


?>