<!--
	Author: W3layouts
	Author URL: http://w3layouts.com
	License: Creative Commons Attribution 3.0 Unported
	License URL: http://creativecommons.org/licenses/by/3.0/
-->

<!DOCTYPE html>
<html>
<head>
	<title>Analysis for APK</title>
	<link rel="stylesheet" href="css/style.css">
	<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300italic,300,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
	<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>

		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		
</head>

<body>
<h1>Analysis for APK</h1>
<div class="agile-its">
	<h2>File Upload</h2>
	<div class="w3layouts">
		<div class="photos-upload-view">
			<form id="upload" action="./info" method="POST" enctype="multipart/form-data">
				<input type="hidden" id="MAX_FILE_SIZE" name="MAX_FILE_SIZE" value="300000" />
					<div class="agileinfo">
					<input type="submit" class="choose" value="Choose file.."/>
					<h3>OR</h3>
						<input type="file" id="fileselect" name="fileselect"/>
						<div id="filedrag">drag and drop files here</div>
                    </div>
                    <button id="send" style="display:none;"></button>
            </form>
		</div>
		<div class="clearfix"></div>
		<script src="js/filedrag.js"></script>


		</div>
</div>
<div class="footer">
	<p> © 2016 File Upload widget. All Rights Reserved | Design by  <a href="http://w3layouts.com/"> W3layouts</a></p>
</div>

<script type="text/javascript" src="js/jquery.min.js"></script>

</div>
</body>
</html>
