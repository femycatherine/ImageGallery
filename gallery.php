<html>
<head>
<link rel="stylesheet" href="Gallery/css/blueimp-gallery.min.css">
</head>
<body>
<div style="width:100%;">
	<div style="margin-left:20%;width:50%;">
		<h1>Image Gallery</h1>
		<!-- The Gallery as inline carousel, can be positioned anywhere on the page -->
		<div id="blueimp-gallery-carousel"
			class="blueimp-gallery blueimp-gallery-carousel">
			<div class="slides"></div>
			<h3 class="title"></h3>
			<a class="prev">‹</a> <a class="next">›</a> <a class="play-pause"></a>
			<ol class="indicator"></ol>
		</div>
		<a href="index.php">Back to add new Image Collection</a>
	</div>
</div>
<?php 
$collection_name = $_REQUEST['collection_name'];

$directory = "uploads/".$collection_name."/";
$images = glob($directory . "*.jpg");
?>

<div id="links" >
<?php 
foreach($images as $image)
{  ?>
	<a href="http://syromalabarsouthjersey.com/portal/assignment/<?=$image;?>"></a> 
<?php } ?>
</div>

<script>
document.getElementById('links').onclick = function (event) {
    event = event || window.event;
    var target = event.target || event.srcElement,
        link = target.src ? target.parentNode : target,
        options = {index: link, event: event},
        links = this.getElementsByTagName('a');
    blueimp.Gallery(links, options);
};
</script>
<script src="Gallery/js/blueimp-gallery.min.js"></script>
<script>
blueimp.Gallery(
    document.getElementById('links').getElementsByTagName('a'),
    {
        container: '#blueimp-gallery-carousel',
        carousel: true
    }
);
</script>


</body>
</html>