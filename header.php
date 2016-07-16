<?php require_once "login/loginheader.php"; ?>
<?php $username = !empty($_SESSION['username']) ? $_SESSION['username'] : '' ?>
<?php $email = !empty($_SESSION['email']) ? $_SESSION['email'] : '' ?>
<?php $first_name = !empty($_SESSION['first_name']) ? $_SESSION['first_name'] : '' ?>
<?php $last_name = !empty($_SESSION['last_name']) ? $_SESSION['last_name'] : '' ?>
<?php $full_name = $first_name . ' ' . $last_name; ///< @TODO: Update logic for emptiness. ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet" media="screen">
    <link href="css/main.css" rel="stylesheet" media="screen">
    <link href="css/custom.css" rel="stylesheet" media="screen">
    <link href="css/style.css" rel="stylesheet" media="screen">
        
    <!-- JS -->
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
  </head>
  <body>
      <div class="container">
          <div class="row">
              <div class="col-md-12">
                  <div class="navbar-wrapper">
                      <div class="container">
                          <div class="navbar navbar-inverse navbar-static-top" role="navigation">
                              <div class="container">
                                  <div class="navbar-header">
                                      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                          <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span><span
                                              class="icon-bar"></span><span class="icon-bar"></span>
                                      </button>
                                    <a class="navbar-brand" href="#">Bienvenido: <?php print strtoupper($username); ?></a>
                                  </div>
                                  <div class="navbar-collapse collapse">
                                      <ul class="nav navbar-nav">
                                          <li class="active"><a href="/users/dashboard">Dashboard</a></li>
                                      </ul>
                                      <ul class="nav navbar-nav navbar-right">
                                          <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php print $username; ?>
                                              <b class="caret"></b></a>
                                              <ul class="dropdown-menu">
                                                  <li>
                                                      <div class="navbar-content">
                                                          <div class="row">
                                                              <div class="col-md-5">
                                                                  <img src="http://placehold.it/120x120"
                                                                      alt="Alternate Text" class="img-responsive" />
                                                                  <p class="text-center small">
                                                                      <a href="#">Cambiar Foto</a></p>
                                                              </div>
                                                              <div class="col-md-7">
                                                                  <span><?php print $full_name; ?></span>
                                                                  <p class="text-muted small">
                                                                      <?php print $email; ?>
                                                                  </p>
                                                                  <div class="divider">
                                                                  </div>
                                                                  <a href="#" class="btn btn-primary btn-sm active">Ver Perfil</a>
                                                              </div>
                                                          </div>
                                                      </div>
                                                      <div class="navbar-footer">
                                                          <div class="navbar-footer-content">
                                                              <div class="row">
                                                                  <div class="col-md-6">
                                                                      <a href="#" class="btn btn-default btn-sm">Cambiar Contraseña</a>
                                                                  </div>
                                                                  <div class="col-md-6">
                                                                      <a href="login/logout.php" class="btn btn-default btn-sm pull-right">Desloguearse</a>
                                                                  </div>
                                                              </div>
                                                          </div>
                                                      </div>
                                                  </li>
                                              </ul>
                                          </li>
                                      </ul>
                                  </div>
                              </div>
                          </div>
                      </div>
                </div>
            </div>
        </div>
      </div>
