<?php
include '../connection.php';
$skill = $_POST['tech-submit'];
$dev_id = $_POST['id'];
echo $skill;
echo $dev_id;
$query = "UPDATE developer_project_map SET tech='".$skill."' where dev_id = '".$dev_id."'";
$result = mysql_query($query);
?>