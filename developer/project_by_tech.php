<?php
include '../connection.php';
$skill = $_GET['skill'];
echo $skill;
$query = "SELECT name,description FROM projects WHERE tech LIKE '%$skill%';";
$result = mysql_query($query);
$res='<tr class="first-row">
                          <td colspan="1"></td>
                          <td colspan="2">Project Name</td>
                          <td colspan="5">Description</td>
                      </tr>';
while ($row = mysql_fetch_array($result)) {
  $res=$res."<tr><td colspan='1'></td><td colspan='2'>".$row['name']."</td><td colspan='5'>".$row['description']."</td></tr>";
}
echo $res;
?>