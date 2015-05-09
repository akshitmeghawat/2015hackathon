<?php
    include("header.php");
    $dev_id = $_GET['id'];
?>

<body>

    <div id="wrapper">

        <!-- Navigation -->
       <?php
        include 'side_and_menu.php';
       ?>
       <div class="clearfix"></div>

       <?php
       $query = "SELECT * from projects where project_id in (select project_id from developer_project_map where dev_id = '".$dev_id."')";
       $result = mysql_query($query);
       $skills = mysql_query("SELECT tech from developers where dev_id ='".$dev_id."'");
       ?>
    <div id="page-wrapper">
        <div class="col-md-6">
            <table class="table">
              <caption>Projects done by <?php $name = mysql_fetch_assoc( mysql_query("SELECT name FROM developers where dev_id = '".$dev_id."'"));echo $name["name"];?></caption>
              <thead>
                <tr>
                  <th>Project Name</th>
                  <th>Project Description</th>
                  <th>Start Day</th>
                  <th>End Day</th>
                </tr>
              </thead>
              <tbody>
                
                <?php
                $count = 1;
                while ($row = mysql_fetch_array($result)) {
                  echo "<tr>
                  <td>".$row['name']."</td>
                  <td>".$row['description']."</td>
                  <td>".$row['start_day']."</td>
                  <td>".$row['end_day']."</td>
                </tr>";
                }
                ?>
              </tbody>
            </table>


            <table class="table">
              <caption>Skills of <?php $name = mysql_fetch_assoc( mysql_query("SELECT name FROM developers where dev_id = '".$dev_id."'"));echo $name["name"];?></caption>
              <thead>
                <tr>
                  <th>Sl No.</th>
                  <th>Skill</th>
                </tr>
              </thead>
              <tbody>
                
                <?php
                $count = 1;
                $row = mysql_fetch_array($skills);
                $individual_skill = explode(",",$row['tech']);
                for($i=0;$i<count($individual_skill);$i++) {
                  
                  echo "<tr>
                  <td>".$count++."</td>
                  <td>".$individual_skill[$i]."</td>
                </tr>";
                }
                ?>
              </tbody>
            </table>

        </div>
    </div>
    </div>
    <?php
    include 'jquery_files.php';
   ?>
</body>
</html>