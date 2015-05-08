<?php

$servername = "localhost";
$username = "root";
$password = "";


$conn = mysql_connect($servername, $username, $password);


$db_selected = mysql_select_db('hackathon');
if (!$db_selected) {
    die ('Can\'t use foo : ' . mysql_error());
}
?>