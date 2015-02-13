<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Embed Videos From Link Tutorial</title>
</head>

<body>

<h1>Index Page</h1>

<p><a href="php.php">PHP Videos</a> || <a href="javascript.php">JavaScript Videos</a></p>

<p>
<form action="addvideo.php" method="POST">
	<input type="text" name="name" placeholder="Video Name..." /><br />
    <select name="type">
    	<option>PHP</option>
        <option>JavaScript</option>
    </select><br />
    <input type="text" name="link" placeholder="Share Link"><br />
    <input type="submit" value="Share!">
</form>
<?php if($_GET['added']){$added=$_GET['added'];echo "Added $added to the video list";} ?>
</p>

</body>
</html>