  <?php 
  require_once('database.php');
  require_once('classes.php');
  
  $page_title = "Login";

  if(isset($_SESSION['user_data'])) {
    $user_data = $_SESSION['user_data'];
    if($user_data['type'] == 1) {
        header('Location: '.base_url.'admin');
        exit();
    } else if($user_data['type'] == 2) {
        header('Location: '.base_url.'teacher');
        exit();
    } else {
        header('Location: '.base_url.'student');
        exit();
    }
  }

  if($_POST) {
    $user = new User();
      $result = $user->login($_POST);
      if($result) {
        $_SESSION['user_data'] = $result;
        $user_data = $_SESSION['user_data'];
        if($user_data['type'] == 1) {
            header('Location: '.base_url.'admin');
            exit();
        } else if($user_data['type'] == 2) {
            header('Location: '.base_url.'teacher');
            exit();
        } else {
            header('Location: '.base_url.'student');
            exit();
        }
      } else {
          $_SESSION['login_error'] = "Invalid username or password.";   
      }
  }

  // include 'partials/header.php';
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Peer Group Well-Being App | <?php echo $page_title; ?></title>
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
  <style type="text/css">
    body {
      margin: 0;
      padding: 0;
      height: 100vh;
      background-image: url('<?php echo base_url.'uploads/images/bg-login.png'; ?>');
      background-repeat: no-repeat;
      background-size: 100% 100vh;
    }
    .form-container {
        background-color: #c8c7bf;
        opacity: .7;
        padding-left: 20px;
        padding-right: 20px;
        padding-top: 80px;
        padding-bottom: 20px;
        border-radius: 10px;
    }
    #login .container #login-row #login-column #login-box {
      margin-top: 120px;
      max-width: 600px;
      height: 420px;
      border: 1px solid #9C9C9C;
      background-color: #18392b;
    }
    #login .container #login-row #login-column #login-box #login-form {
      padding: 20px;
    }
    #login .container #login-row #login-column #login-box #login-form #register-link {
      margin-top: -85px;
    }
    .btn-primary, .btn-primary:hover {
        background-color: #18392b !important;
        border: 0;
        color: #fff !important;
    }
    .text-primary, .text-primary:hover {
        color: #18392b !important;
    }
    input {
        border: 2px solid #18392b !important;
        border-radius: 30px !important;
        background-color: transparent !important;
        color: #000 !important;
    }
    input::placeholder {
        color: #000 !important;
    }
  </style>
</head>
<body>
    <div id="login">
        <div class="container" style="height: 100vh;">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-4 offset-md-8" style="margin-top: 160px;margin-right: 15px;">
                    <div class="form-container">
                        <form id="login-form" class="form" action="" method="post">
                            <div class="p-5">
                                <h1 class="text-center text-primary"><strong>Login</strong></h1>
                            </div>
                            <div class="form-group" style="margin-bottom: 20px;">
                                <input type="text" name="username" id="username" placeholder="Username" class="form-control" style="padding: 15px">
                            </div>
                            <div class="form-group">
                                <input type="password" name="password" id="password" placeholder="Password" class="form-control" style="padding: 15px">
                            </div>
                            <div class="form-group text-center">
                                <div class="d-flex justify-content-between mb-5">
                                    <a href="#" class="text-primary">Forgot password?</a>
                                    <a href="<?php echo base_url.'register.php'; ?>" class="text-primary">Register here</a>
                                </div>
                                <button type="submit" class="btn btn-primary btn-md pl-4 pr-4"><b>Login</b></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
