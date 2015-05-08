<?php
    include("header.php");
?>

<body>

    <div id="wrapper">

        <!-- Navigation -->
       <?php
        include 'side_and_menu.php';
       ?>
       <div class="clearfix"></div>

       <?php
       $query = "SELECT * from projects";
       $result = mysql_query($query);
       ?>
    <div id="page-wrapper">
        <div class="col-md-6">
            <table class="table">
              <caption>Project Details</caption>
              <thead>
                <tr>
                  <th>Count</th>
                  <th>Name</th>
                  <th>Start Day</th>
                  <th>End Day</th>
                </tr>
              </thead>
              <tbody>
                
                <?php
                $count = 1;
                while ($row = mysql_fetch_array($result)) {
                  echo "<tr>
                  <td>".$count++."</td>
                  <td><a href='project_details.php?id=".$row['project_id']."'>".$row['name']."</a></td>
                  <td>".$row['start_day']."</td>
                  <td>".$row['end_day']."</td>
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