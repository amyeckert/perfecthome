<?php
//tells browser and php to connect to db- 
$sql = mysql_connect($settings['host'], $settings['username'], $settings['password']);

if (!$sql) {
    die('Could not connect: ' . mysql_error());
}
mysql_select_db($settings['database'], $sql) or die('Could not select database.');              