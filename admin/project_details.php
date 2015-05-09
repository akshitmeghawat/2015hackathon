s<?php
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
           <tr>
             <td>
              Start day  
             </td>
             <td>
              <?php
              echo $row["start_day"];
              ?>
             </td>
           </tr>
           <tr>
             <td>
              End day  
             </td>
             <td>
              <?php
              echo $row["end_day"];
              ?>
             </td>
           </tr>
           <tr>
           <td>
             PO
           </td>
          <td>
            <?php
              $po_id_from_map = mysql_fetch_array( mysql_query("SELECT po_id from project_po_map where project_id = '$project_id'"));
              echo mysql_fetch_array(mysql_query("select name from po_list where po_id ='".$po_id_from_map['0']."'"))['0']
            ?>
          </td>
           </tr>
           <tr>
           <td>
            Developers
           </td>
            <td>
              <?php
                $res = mysql_query("select dev_id from developer_project_map");
                $dev_id = array();
                while ($row = mysql_fetch_assoc($res)) {
                  $dev_id[] = $row["dev_id"];
                }
                $dev_id = implode(",", $dev_id);
                $res2 = mysql_query("select name from developers where dev_id in ($dev_id)");
                $dev_id2 = array();
                while ($row = mysql_fetch_assoc($res2)) {
                  $dev_id2[] = $row["name"];
                }
               echo implode(", ",$dev_id2);
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