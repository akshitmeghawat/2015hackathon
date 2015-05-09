<?php
include '../connection.php';
$skill = $_GET['tech-submit'];
$dev_id = $_GET['id'];
echo $skill;
echo $dev_id;
$query = "UPDATE developer_project_map SET tech='".$skill."' where dev_id = '".$dev_id."'";
$result = mysql_query($query);
?>