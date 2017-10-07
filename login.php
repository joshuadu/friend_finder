<!DOCTYPE HTML>
<html lang = "en">
<head>
	<title>Login</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/css/bootstrap-select.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/js/bootstrap-select.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/js/i18n/defaults-*.min.js"></script>
  <style>
    body {
      background:#333;
    }
    .form_bg {
      background-color:#eee;
      color:#666;
      padding:20px;
      border-radius:10px;
      position: absolute;
      border:1px solid #fff;
      margin: auto;
      top: 0;
      right: 0;
      bottom: 0;
      left: 0;
      width: 320px;
      height: 280px;
    }
    .align-center {
      text-align:center;
    }
  </style>
  <body>
    <?php
    $fail = $_GET['success'];
    if($fail == 'f'){
      echo "<script type='text/javascript'>alert('Username and password incorrect, please try again');</script>";
      ;
    }
    ?>

    <div class="container">
      <div class="row">
        <div class="form_bg">
          <form method = "post" action = "loginhandler.php">
           <h2 class="text-center">Login</h2>
           <br/>
           <div class="form-group">
            <input type = "text" class="form-control" id="userid" placeholder="Username" name = "username" required>
          </div>
          <div class="form-group">
            <input type="password" class="form-control" id="pwd" placeholder="Password" name = "password" required>
          </div>
          <br/>
          <div class="align-center">
            <button type="submit" class="btn btn-default" id="login">Login</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</body>
</html>