<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>

<body>

<?php

require("dbc.php");

$id = $_GET['id'];

$find_video = mysql_query("SELECT * FROM `videos` WHERE `id`='$id'");
while($row = mysql_fetch_assoc($find_video))
{
	$name = $row['name'];
	$code = $row['code'];
}

?>

<title><?php echo $name; ?></title>
<h1><?php echo $name; ?></h1>

<iframe width="560" height="315" src="http://www.youtube.com/embed/<?php echo $code; ?>" frameborder="0" allowfullscreen></iframe>

</body>
</html>