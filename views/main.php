<html>
<head>
    <title>Shareboard</title>
    <link rel="stylesheet" href="/projekt/assests/css/bootstrap.css">
    <link rel="stylesheet" href="/projekt/assests/css/style.css">
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Shareboard</a>
  <div class="navbar panel" id="navbarText">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo ROOT_URL; ?>">Home<span class="sr-only"></span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo ROOT_URL; ?>Shares">Shares</a>
      </li>
    </ul>
    <span class="navbar-text justify-content-end">
      <ul class="nav">
        <?php if(isset($_SESSION['is_logged_in'])) : ?>
        <li><a class="nav-link" href="<?php echo ROOT_URL; ?>">Welcome <?php echo $_SESSION['user_data']['name']; ?></a></li>
        <li><a class="nav-link" href="<?php echo ROOT_URL; ?>users/logout">Logout</a></li>
        <?php else : ?>
        <li><a class="nav-link" href="<?php echo ROOT_URL; ?>users/login">Login</a></li>
        <li><a class="nav-link" href="<?php echo ROOT_URL; ?>users/register">Register</a></li>
      <?php endif; ?>
      </ul>
    </span>
  </div>
</nav>

  <div class="container">

    <div class="row">
      <?php Messages::display(); ?>
      <?php require($view); ?>
    </div>

  </div><!-- /.container -->
</body>
</html>
