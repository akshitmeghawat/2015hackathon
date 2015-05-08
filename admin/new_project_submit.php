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
  $p_id = mysql_insert_id();
  if($res)
  {
    echo "Aaaa";
    for ($i=0; $i < count($devs); $i++) { 
      $dev_id = $devs[$i];
      $insert_dev = "INSERT INTO developer_project_map values('null', '$dev_id', '$p_id')";
      $r = mysql_query($insert_dev);
    }
    echo "Aaaa12";
    $po_id = "select po_id from po_list where name = '$po_name'";
    $res = mysql_query($po_id);
    if (!$res)
    {
      echo mysql_error();
    }
    $po_id_val = mysql_fetch_array($res);
    // echo $po_id;
    print_r($po_id_val);
    echo " #";
    $po_id_val = $po_id_val['po_id'];
    echo $po_id_val."# ";

    $insert_po = "INSERT into project_po_map values('null', '$po_id_val', '$p_id')";
    $r = mysql_query($insert_po);
    if (!$r)
    {
      echo mysql_error();
    }
    echo $insert_po;
  }
  else
  {
    echo "soem";
  }
?>