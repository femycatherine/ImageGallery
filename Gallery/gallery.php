<html>
<head>
<link rel="stylesheet" href="css/blueimp-gallery.min.css">
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
	</div>
</div>

<div id="links" >
	<a href="http://localhost/assignment/uploads/picnic_5594/IMG_3280.jpg"></a> 
	<a href="http://localhost/assignment/uploads/picnic_14552/IMG_3302.JPG"></a>
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
<script src="js/blueimp-gallery.min.js"></script>
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