<!DOCTYPE html>
<html>
<head>
    <title>DRE | LOGIN</title>
    <link rel="stylesheet" href="style.css">

    <link rel="stylesheet" href="../Res/Bootstrap/css/bootstrap.min.css">
    <script src="../Res/Bootstrap/js/bootstrap.min.js"></script>
</head>
<body>
    <nav>
        <div class="navbar navbar-expand-sm container fixed-top" id="navdiv">
            <img src="../Res/img/logo.png" alt="a">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse justify-content-center" id="collapsibleNavbar">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link" href="web/home.php">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Order</a>
                  </li>
                </ul>
              </div>
        </div>
    </nav>

    <div class="container-fluid" id="back">
    <div class="container-sm" id="mainloginbox">
        <form action="signin.php" method="post">
            <p class="h2 navtitle">LOGIN</p>
            <?php if (isset($_GET['error'])) { ?>
                <p class="error"><?php echo $_GET['error']; ?></p>
            <?php } ?>
            <label class="form-label text-white">User Name</label>
            <input type="text" name="uname" placeholder="User Name" class="form-control text-bg-secondary"><br>
            <label class="form-label">Password</label>
            <input type="password" name="password" placeholder="Password" class="form-control text-bg-secondary"><br> 
            <button type="submit" class="btn btn-primary bg-success">Login</button>
        </form>
    </div>
</div>
</body>
</html>