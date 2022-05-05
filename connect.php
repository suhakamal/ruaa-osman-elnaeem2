<?php
$db = mysql_connect("localhost","id","name","username","email","password");
if (!$db) {
  die("database connection faild miserably: ".mysql_error());
}

$db_select = mysql_select_db("v3r24",$db);
if (!$db_select) {
  die("database selection also faild miserably: ".mysql_error());
}
 ?>
