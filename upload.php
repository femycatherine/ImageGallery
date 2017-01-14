<link rel="stylesheet" type="text/css" href="style.css">
<?php
$check_upload = 0;
if (isset ( $_POST ['submit'] )) {
	$j = 0; 
	$collection_name =  $_POST['collection_name']."_".rand();
	mkdir("/home/stjudesj/web/syromalabarsouthjersey.com/public_html/portal/assignment/uploads/$collection_name", 0777);
	for($i = 0; $i < count ( $_FILES ['file'] ['name'] ); $i ++) {
		$target_path = "/home/stjudesj/web/syromalabarsouthjersey.com/public_html/portal/assignment/uploads/$collection_name/";
		$validextensions = array (
				"jpeg",
				"jpg",
				"png" 
		); 
		$file_name = $_FILES ['file'] ['name'] [$i];
		$ext = explode ( '.', basename ( $_FILES ['file'] ['name'] [$i] ) ); 
		$file_extension = end ( $ext ); 
		$target_path = $target_path . $file_name; // Set the target path with a new name of image.
		$j = $j + 1; // Increment the number of uploaded images according to the files in array.
		if ( in_array ( $file_extension, $validextensions )) {
			if (move_uploaded_file ( $_FILES ['file'] ['tmp_name'] [$i], $target_path )) {
				// If file moved to uploads folder.
				echo 'Image '.$j . ').<span id="noerror">Uploaded successfully!.</span><br/><br/>';
				$check_upload =  1;
			} else { // If File Was Not Moved.
				echo 'Image '.$j . ').<span id="error"> Please try again!.</span><br/><br/>';
			}
		} else { // If File Size And File Type Was Incorrect.
			echo 'Image '.$j . ').<span id="error">***Invalid file Size or Type***</span><br/><br/>';
		}
	}
}
if($check_upload=='1') { ?>
	<a href="http://syromalabarsouthjersey.com/portal/assignment/gallery.php?collection_name=<?=$collection_name;?>">Click on Gallery URL</a>
	
<?php } ?>


