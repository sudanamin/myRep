<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Embed Videos From Link Tutorial</title>
</head>

<body>

<h1>PHP</h1>

<p>
	<?php
		require("dbc.php");
		
		$find_videos = mysql_query("SELECT * FROM `videos` WHERE `type`='PHP'");
		while($row = mysql_fetch_assoc($find_videos))
		{
			$id = $row['id'];
			$name = $row['name'];
			
			echo "<a href='watch.php?id=$id'>$name</a>";
		}
	?>
</p>

</body>
</html>