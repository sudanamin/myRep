<?php

require("dbc.php");

$name = mysql_real_escape_string($_POST['name']);
$type = mysql_real_escape_string($_POST['type']);
$link = mysql_real_escape_string($_POST['link']);

$newlink = substr($link,16);

mysql_query("INSERT INTO `videos` VALUES('','$name','$type','$newlink')");

header("location: index.php?added=$name");

?>