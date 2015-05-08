<?php
include '../connection.php';
$skill = $_GET['skill'];
echo $skill;
$query = "SELECT name,description FROM projects WHERE tech LIKE '%$skill%';";
$result = mysql_query($query);
while ($row = mysql_fetch_array($result)) {
  echo "<tr><td colspan='1'></td><td colspan='2'>".$row['name']."</td><td colspan='5'>"$row['description']."</td></tr>;";
}
?>