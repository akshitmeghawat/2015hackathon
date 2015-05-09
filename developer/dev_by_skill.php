<?php
include '../connection.php';
$skill = $_GET['skill'];
echo $skill;
$query = "SELECT name,tech FROM developers WHERE tech LIKE '%$skill%';";
$result = mysql_query($query);
$res='<tr class="first-row">
                          <td colspan="1"></td>
                          <td colspan="2">Name</td>
                          <td colspan="5">Tech</td>
                      </tr>';
while ($row = mysql_fetch_array($result)) {
  $res.="<tr><td colspan='1'></td><td colspan='2'>".$row['name']."</td><td colspan='5'>".$row['tech']."</td></tr>";
}
echo $res;
?>