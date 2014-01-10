<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="../main.css" type="text/css" media="screen" />
		<title>{title}</title>
		<script type="text/javascript" src="../js/jquery.js"></script>
		<script type="text/javascript" src="../js/slider.js"></script>
		<script type="text/javascript" src="../js/Slides-SlidesJS-3/source/jquery.slides.min.js"></script>
	</head>

	<body class="background">
		<div id="container">
			<?php echo @$navigation ?>
			<?php echo @$slideshow ?>
			<?php echo @$boxes ?>
			<?php echo @$content ?>
			<?php echo @$footer ?>
		</div>
	</body>
</html>