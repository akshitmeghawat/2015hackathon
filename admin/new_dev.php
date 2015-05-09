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
    include("../connection.php");
    ?>

  <div id="page-wrapper">
    <div class="col-md-6">
      <form method="POST" action="new_dev_submit.php">
        <table class="table">
          <caption>Add Developer's Information</caption>

          <tbody>
            <tr>
              <td>Developer Name</td>
              <td><input type="text" placeholder="Enter name of developer" class="form-control" name="developer_name"></td>
            </tr>

            <tr>
              <td>Github Profile</td>
              <td><input type="text" placeholder="Enter your github profile" class="form-control" name="github_profile"></td>
            </tr>
              <td colspan="2">
                <input type="submit" name="sub" value="Add Developer" class="btn btn-success form-control">
              </td>
            </tr>



          </tbody>
        </table>
      </form>
    </div>
    <table class="table">
    <tr>
    <td>Sl.</td>
    <td>Name</td>
    <td>Github</td>
    </tr>
    <?php
    $quer = "select * from developers";
    $res = mysql_query($quer);
    $count = 1;
      while ($row = mysql_fetch_assoc($res))
{      echo "<tr>
          <td>".$count++."</td>
          <td><a href='show_employee_details.php?id=".$row["dev_id"]."'>".$row["name"]."</a></td>
          <td>".$row["github_profile"]."</td>
        </tr>";
    }    ?>
  </table>
  </div>

</div>
<?php
include 'jquery_files.php';
?>
</body>
</html>