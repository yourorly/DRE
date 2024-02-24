<?php 
session_start();
if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {
 ?>
<!DOCTYPE html>
<html>
<head>
    <title>DRE | Home</title>
    <link rel="stylesheet" type="text/css" href="web.css">

    <link rel="stylesheet" href="../Res/Bootstrap/css/bootstrap.min.css">
    <script src="../Res/Bootstrap/js/bootstrap.min.js"></script>
</head>
<body>
<body>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
        <div class="container-fluid">
        <a href="../index.html"><img src="../Res/img/logo.png" alt="Avatar Logo" style="width:40px;" class="rounded-pill"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-center" id="collapsibleNavbar">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">About Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Order</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href=""><img src="../Res/img/user.png" alt="Avatar Logo" style="width:30px;" class="rounded-pill"><?php echo $_SESSION['user_name']; ?></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="logout.php">Logout</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

    <div class="container-fluid" id="back">
        <p class="h1 navtitle">Hello, <?php echo $_SESSION['user_name']; ?></p>
        <p class="h4 navtitle">Welcome Web Developer</p>
    </div>
</body>
</html>
<?php 
}else{
     header("Location: ../User/login.php");
     exit();
}
?>