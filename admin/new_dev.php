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
              <td colspan="2">
                <input type="submit" name="sub" value="Add Developer" class="btn btn-success form-control">
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