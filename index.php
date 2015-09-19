<!DOCTYPE html>
<html>
<?php require_once('head.html'); ?>
<body>
  <div class="row">
    <br>
    <div class="col-xs-6 col-md-4"></div>

    <div class="col-xs-6 col-md-4 well">
      <img src="assets/img/cake_header.png" alt="Kuchen">
      <br>
    <h2>Das L in Lena steht für LSD.</h2>
    <form method="POST" action="login.php">
      <input type="text" class="form-control" placeholder="Dein Name..." name="username" autofocus required>
      <br>
      <input type="password" class="form-control" placeholder="Dein Passwort..." name="password" required>
      <hr>
      <input type="submit" class="btn btn-info btn-block" value="Login">
    </form>
    </div>

    <div class="col-xs-6 col-md-4"></div>
  </div>
</body>
</html>
