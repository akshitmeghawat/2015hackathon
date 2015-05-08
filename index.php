<html lang="en">
<head>
  <?php
  include 'cssLinks.php'
  ?>
  <link href="css/signin.css" rel="stylesheet">
</head>
<body>

  <div class="container">
    
    <form class="form-signin" method="POST" action="check_login.php">
    <h2 class="form-signin-heading">Sign in</h2>
      <label for="inputEmail" class="sr-only" >login id</label>
      <input type="text" id="inputEmail" class="form-control" name="login" placeholder="Email address" required autofocus>
      <label for="inputPassword" class="sr-only" >Password</label>
      <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required>

      <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
    </form>

  </div> <!-- /container -->

</body>
</html>