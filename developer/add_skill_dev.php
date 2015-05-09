<?php
include '../connection.php';
$skill = $_GET['skill'];
$dev = $_GET['dev'];
$query = "SELECT tech FROM developers WHERE dev_id='$dev';";
$result = mysql_query($query);
$row = mysql_fetch_array($result);
$tech = $row['tech'];
if($tech != null){
  $tech.=", ".$skill;
}
else{
$tech = $skill;}
$query = "UPDATE developers SET tech='$tech' WHERE dev_id='$dev';";
$result = mysql_query($query);

// showing the display again

$query_skills = "SELECT tech FROM developers WHERE dev_id='$dev';";
$result_skills = mysql_query($query_skills);
$row_skills = mysql_fetch_array($result_skills);
$skills = explode(", ", $row_skills['tech']);
$res = "";
foreach ($skills as $key => $value) {
              $res.="<li class='list-group-item'>".$value."</li>";
}
echo $res;
?>