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
      <form method="POST" action="new_po_submit.php">
        <table class="table">
          <caption>Add Product Owner's Information</caption>

          <tbody>
            <tr>
              <td>Product Owner Name</td>
              <td><input type="text" placeholder="Enter name of product owner" class="form-control" name="po_name"></td>
            </tr>
              <td colspan="2">
                <input type="submit" name="sub" value="Add PO" class="btn btn-success form-control">
              </td>
            </tr>

          </tbody>
        </table>
      </form>
      <hr>
     <!--  <table class="table">
        <caption>List of all POs</caption>
        <thead>
          <tr>
            <th>count</th>
            <th>name</th>
          </tr>
        </thead>
        <tbody>
        <?php
          $query = "select * from po_list";
          $res = mysql_fetch_assoc(mysql_query($query));
          // print_r($res);
          $name = array();
          while ($row = mysql_fetch_assoc($res)) {
            $name[] = $row["name"];
          }
          echo implode(", ", $name);
        ?>
          <tr>
            <td>data</td>
          </tr>
        </tbody>
      </table> -->
    </div>
  </div>
</div>
<?php
include 'jquery_files.php';
?>
</body>
</html>