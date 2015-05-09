<?php
  include('connection.php');
  $login = $_POST['login'];
  $password = $_POST['password'];
  if($login == "admin")
  {
    header("location:admin/index.php");
  }
  else {
    $query = "SELECT * from developers where name ='$login';";
    // echo $query;
    $res = mysql_fetch_array(mysql_query($query));
    if($res)
    {
      $dev_id = $res["dev_id"];
      session_start();
      $_SESSION["user_id"] = $dev_id;
      header("location: developer/index.php");
    } 
    else{
      echo "login error, try again";
    }   


    # code...
  }

?>