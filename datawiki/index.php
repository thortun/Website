<!DOCTYPE html>
<html>
	<head>
		<?php include('globalheader.html') ?>
		<link rel="stylesheet" href="datawikistyle.css">	
		<title>Data Wiki</title>
	</head>
<body class="dw_body">
	<h1 class="dw_h1">Rain</h1>	
	<p class="dw_p">
	This is rain data for Trondheim in some timespan.
<form action="upload.php" method="post" enctype="multipart/form-data">
    Select image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload Image" name="submit">
</form>
	</p>
	<br>
	<h2 class="dw_h2">XML</h2>
	<br>
	<p class="dw_data_explain">
	The first column is the time of the measurement. The second column is the rainfall at that time in mm.
	</p>
	<a href="rain.xml">file</a>
</body>
</html>
