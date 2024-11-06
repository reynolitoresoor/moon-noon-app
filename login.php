  <?php 
  require_once('database.php');
  require_once('classes.php');
  
  $page_title = "Login";

  if(isset($_SESSION['user_data'])) {
    header('Location: '.base_url.'home');
  }

  if($_POST) {
    $user = new User();
      $result = $user->login($_POST);
      if($result) {
        $_SESSION['user_data'] = $result;
        header('Location: '.base_url.'home');
      } else {
          $_SESSION['login_error'] = "Invalid username or password.";   
      }
  }

  // include 'partials/header.php';
  ?>
  <!-- ======= Mobile nav toggle button ======= -->
  <!-- <i class="bi bi-list mobile-nav-toggle d-xl-none"></i> -->

  <?php //include 'partials/sidebar.php'; ?>
 <!--  
  <style>
    .login-form {
      padding: 30px 20px 30px 20px;
    }
    h2 {
      font-weight: 600;
    }
    .login-success, .login-error {
      font-size: 18px !important;
    }
  </style> -->
  <!-- ======= Hero Section ======= -->
 <!--  <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
    <div class="hero-container" data-aos="fade-in">
      <div class="row">
        <div class="col-lg-4 col-md-4 offset-lg-5 offset-md-5 card login-form">
          <form method="POST" action="">
            <div class="text-center">
              <img src="<?php //echo base_url.'uploads/images/logo-icon.png'; ?>">
            </div>
            <h2 class="text-center mt-3 mb-3" style="color: #e94f37;">Login</h2>
            <?php //if(isset($_SESSION['account_created'])){ ?>
            <p class="text-success login-success"><?php //echo $_SESSION['account_created']; ?></p>
            <?php //} ?>
            <?php //if(isset($_SESSION['login_error'])){ ?>
            <p class="text-danger login-error"><?php //echo $_SESSION['login_error']; ?></p>
            <?php //} ?>
            <div class="row">
              <div class="col-lg-12 col-md-12 form-group mb-3">
                <label class="form-label" for="username">Username</label>
                <input type="text" name="username" id="username" placeholder="" style="width: 100%;">
              </div>
              <div class="col-lg-12 col-md-12 form-group">
                <label class="form-label" for="password">Password</label>
                <input type="password" name="password" id="password" placeholder="" style="width: 100%;">
              </div>
              <div class="mt-3">
                <button type="submit" class="btn btn-primary" style="width: 100%;padding: 10px;border-radius: 5px;" name="login">Login</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section> --><!-- End Hero -->

<?php //include 'partials/footer.php'; ?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Peer Group Well-Being App</title>
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
  <style type="text/css">
    body {
      margin: 0;
      padding: 0;
      background-color: #034f84;
      height: 100vh;
    }
    #login .container #login-row #login-column #login-box {
      margin-top: 120px;
      max-width: 600px;
      height: 420px;
      border: 1px solid #9C9C9C;
      background-color: #EAEAEA;
    }
    #login .container #login-row #login-column #login-box #login-form {
      padding: 20px;
    }
    #login .container #login-row #login-column #login-box #login-form #register-link {
      margin-top: -85px;
    }
  </style>
</head>
<body>
    <div id="login">
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form" action="" method="post">
                            <div style="margin: 40px 0px">
                              <h2 class="text-center text-primary">Peer Group Well-Being App</h2>
                            </div>
                            <div class="form-group">
                                <label for="username" class="text-primary">Username:</label><br>
                                <input type="text" name="username" id="username" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-primary">Password:</label><br>
                                <input type="text" name="password" id="password" class="form-control">
                            </div>
                            <div class="form-group">
                                <input type="submit" name="submit" class="btn btn-primary btn-md" value="submit">
                            </div>
                            <div id="register-link" class="text-right"><br/>
                                <a href="<?php echo base_url.'register.php'; ?>" class="text-primary">Register here</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
