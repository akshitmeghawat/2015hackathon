<?php
  include '../connection.php';
  $project_name = $_POST['project_name'];
  $po_name = $_POST['po_name'];
  $devs = $_POST['devs'];
  $start_day = $_POST['start_day'];
  $end_day = $_POST['end_day'];
  $desc = $_POST['desc'];

  $insert_proj = "INSERT INTO projects Values ('null', '$project_name', '$start_day', '$end_day', '$desc')";
  $res = mysql_query($insert_proj);
  if($res)
  {
    for ($dev=0; $dev < $devs.length; $dev++) { 
    $insert_dev = "INSERT INTO developer_project_map values('null', )"
      
    }
  }
  else
  {

  }
?>