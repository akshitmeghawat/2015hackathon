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
    function valid_project($pr_id)
    {
      $res = mysql_query("select * from projects where project_id = '$pr_id' and end_day < curdate()");
      if ($res)
      {
        $response = mysql_fetch_array($res);
        if(count($response) > 1)
          return true;
      }
      else 
      {
        return false;
      }
    }
    $list_of_pos = "select *
    from po_list pos LEFT OUTER JOIN project_po_map prs
    on pos.po_id = prs.po_id
    order by prs.project_id desc
    ";
    $po_result = mysql_query($list_of_pos); 
    $list_of_devs ="select *
    from developers devs LEFT OUTER JOIN developer_project_map map
    on devs.dev_id = map.dev_id
    order by map.project_id desc
    "; 
    $dev_lists = mysql_query($list_of_devs);
    $query = "SELECT * from projects";
    $result = mysql_query($query);
    ?>
    <datalist id="pos">
     <?php
     $array = array();
     while ($row = mysql_fetch_array($po_result)) {
       if (!in_array($row["0"], $array))
                {
                  array_push($array, $row["0"]);

      if(valid_project($row["project_id"]) || is_null($row["project_id"]))
      {
        echo "<option value='".$row['1']."'></option>";
      }
    }

    }
    ?>
  </datalist>

  <div id="page-wrapper">
    <div class="col-md-6">
      <form method="POST" action="new_project_submit.php">
        <table class="table">
          <caption>Add new project</caption>

          <tbody>
            <tr>
              <td>Project Name</td>
              <td><input type="text" placeholder="Enter name of the project" class="form-control" name="project_name" autocomplete="off"></td>
            </tr>
            <tr>
              <td>PO of project</td>
              <td><input type="text" placeholder="Unstaffed POs" list = "pos" class="form-control" name="po_name" autocomplete="off"></td>
            </tr>
            <tr>
              <td>Developers</td>
              <td>
                <?php
                $array = array();
                while ($row = mysql_fetch_array($dev_lists)) {
                  if (!in_array($row["0"], $array))
                {
                  array_push($array, $row["0"]);
                  if(valid_project($row["project_id"]) || is_null($row["project_id"]))
                  {
                    echo "<label><input type='checkbox' name=devs[] value='".$row['0']."'> <a href='show_employee_details.php?id=".$row['0']."'>".$row['1']."</a> </label> ";
                  }
                }

                }
                ?>
              </td>
            </tr>
            <tr>
              <td>Start Day</td>
              <td><input type="date" name="start_day"></td>
            </tr>
            <tr>
              <td>End Day</td>
              <td><input type="date" name="end_day"></td>
            </tr>
            <tr>
            <td>Description</td>
              <td><textarea name="desc" class="form form-control" placeholder="Enter Description"></textarea></td>
            </tr>
            <tr>
              <td colspan="2">
                <input type="submit" name="sub" value="Create Project" class="btn btn-success form-control">
              </td>
            </tr>

          </tbody>
        </table>
      </form>
    </div>
  </div>
</div>
<?php
include 'jquery_files.php';
?>
</body>
</html>