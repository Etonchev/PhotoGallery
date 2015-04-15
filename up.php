<!DOCTYPE HTML>
<html>
<head>
	<meta charset="UTF-8" />
	<link rel="stylesheet" type="text/css" href="stylesheet.css">
	<title>Фото албум: Качи снимка</title>
</head>
<body>
		<div id="nav">
		<ul>
			<li><a href="index.php">Начало</a></li>
			<li><a href="up.php">Качи снимка</a></li>
			<li><a href="about.html">За нас</a></li>
			<li><a href="contact.html">Свържи се с нас</a></li>
		</ul>
	</div>
	<div id="main"> 
		<h1>Качи снимка</h1>
		<div id="up">
			<form action="upload.php" method="post" enctype="multipart/form-data">
			<label for="file">Изберете снимка, която искате да качите:</label>
			<input type="file" name="file" id="file"><br>
			<input type="submit" value="Изпрати">
			</form>
		</div>	
	</div>
</body>
</html>