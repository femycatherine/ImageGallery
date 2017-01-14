<!DOCTYPE html>
<html>
<head>
<title>Upload Multiple Images Using jquery and PHP</title>
<!-------Including jQuery from Google ------>
<script
	src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="script.js"></script>
<!------- Including CSS File ------>
<link rel="stylesheet" type="text/css" href="style.css">
<script type="text/javascript">
$(function(){
    $("input").prop('required',true);
});
function validate() {
	var letters = /^[A-Za-z]+$/;  
	if(add_gallery.collection_name.value.match(letters)){  
	     return true;  
	}else {  
	     alert("Please add a single word collection name");  
	     return false;  
	}  
}
</script>

<body>
	<div id="maindiv">
		<h2>Image Gallery Service</h2>
		<form enctype="multipart/form-data" action="upload.php"
			name="add_gallery" method="post" onsubmit="return validate()">
			Collection Name: <font style="color: red">*</font> <br /> <input
				type="text" name="collection_name" placeholder="Collection" required
				class="input_field" /><br />
			<br /> Select images<br />
			<div id="filediv">
				<input name="file[]" type="file" id="file" />
			</div>
			<br /> <input type="button" id="add_more" class="upload"
				value="Add More Files" /> <input type="submit" value="Upload File"
				name="submit" id="upload" class="upload" />
		</form>
	</div>
	<br/>
	<div id="maindiv">
		<h2>Image Collection</h2>
		<ul>
<?php 
$dirs = scandir('/home/stjudesj/web/syromalabarsouthjersey.com/public_html/portal/assignment/uploads/');

foreach($dirs as $key=>$value) {
	$col_name = explode('_', $value);
	$check  = $col_name[0]; 
	if($check!='.' && $check!='..') {
?>
			<li><a href="gallery.php?collection_name=<?=$value;?>"><?=$col_name[0];?></a></li>
<?php } } ?>
		</ul>
	</div>
	
</body>
</html>