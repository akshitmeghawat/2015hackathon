<?php
  
  $login = $_POST['login'];
  $password = $_POST['password'];
  if($login == "admin")
  {
    header("location:admin/index.php");
  }
  else if ($login == "dev") {
    # code...
  }

?>