<!DOCTYPE HTML>
<html>
<head>
	<meta charset="UTF-8" />
	<link rel="stylesheet" type="text/css" href="stylesheet.css">
	<title>Фото албум</title>
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
		<h1>Фото албум</h1>
        <?php
			$folder = "photos";
            $results = scandir('photos');
            foreach ($results as $result) {
				if ($result === '.' or $result === '..') continue;
				if (is_file($folder . '/' . $result)) {
					echo '
						<ul>
                        <li>
							<a href="'.$folder . '/' . $result.'"><img src="'.$folder . '/' . $result.'" alt="..."></a>
							<div id="name">
								<p>'.$result.'</p>
							</div>
							<div id="remove">
								<a href="remove.php?name='.$result.'" role="button">Изтрий</a>
							</div>
						</li>
						</ul>
					';
            }
            }
        ?>
	</div>
</body>
</html>