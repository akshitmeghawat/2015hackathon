<?php
    include("header.php");
    $project_id = $_GET['id'];
?>

<body>

    <div id="wrapper">

        <!-- Navigation -->
       <?php
        include 'side_and_menu.php';
       ?>
       <div class="clearfix"></div>

       <?php
       $query = "SELECT * from projects where project_id = '$project_id'";
       $result = mysql_query($query);
       $row = mysql_fetch_array($result);
       ?>
    <div id="page-wrapper">
    <div class="col-md-7">
       <table class="table">
         <caption>Project details</caption>
         <tbody>
           <tr>
           <td>Name</td>
             <td>
               <?php
                echo $row["name"];
               ?>
             </td>
           </tr>
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