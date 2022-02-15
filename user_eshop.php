<?php
    session_start();
	  include("db_eshop.php");
    $sql = "SELECT `username` FROM `users` WHERE `is_admin` = 1";
    $result = mysqli_query($con, $sql);
    $row =  mysqli_fetch_array($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <link rel="stylesheet" href="css/user_eshop.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
      #form{
        display: block;
        width: 50%;
        height: 100vw;
        margin: 50 auto;
        align-items: center;
        padding: 50px;
      }
    </style>
</head>
<body>
  <div class="main-content">
    <!-- Top navbar -->
    <nav class="navbar navbar-top navbar-expand-md navbar-dark" id="navbar-main">
      <div class="container-fluid">
        <!-- Brand -->
        <a class="h4 mb-0 text-white text-uppercase d-none d-lg-inline-block" href="" target="_blank">User profile</a>
        <!-- Form -->
        <form class="navbar-search navbar-search-dark form-inline mr-3 d-none d-md-flex ml-lg-auto">
          <div class="form-group mb-0">
            <div class="input-group input-group-alternative">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-search"></i></span>
              </div>
              <input class="form-control" placeholder="Search" type="text">
            </div>
          </div>
        </form>
        <!-- User -->
        <ul class="navbar-nav align-items-center d-none d-md-flex">
          <li class="nav-item dropdown">
            <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <div class="media align-items-center">
                <span class="avatar avatar-sm rounded-circle">
                  <!-- <img alt="Image placeholder" src="https://demos.creative-tim.com/argon-dashboard/assets/img/theme/team-4.jpg"> -->
                  <img src="images/avatar.jpg" alt="">
                </span>
                <div class="media-body ml-2 d-none d-lg-block">
                  <span class="mb-0 text-sm  font-weight-bold">
                        <?php if(isset($_SESSION["username"])){
											echo htmlspecialchars($_SESSION["username"]);
										}
                        ?></span>
                </div>
              </div>
            </a>
            <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
              <div class=" dropdown-header noti-title">
                <h6 class="text-overflow m-0">Welcome!</h6>
              </div>
              <a href="../examples/profile.html" class="dropdown-item">
                <i class="ni ni-single-02"></i>
                <span>My profile</span>
              </a>
              <a href="../examples/profile.html" class="dropdown-item">
                <i class="ni ni-settings-gear-65"></i>
                <span>Settings</span>
              </a>
              <a href="../examples/profile.html" class="dropdown-item">
                <i class="ni ni-calendar-grid-58"></i>
                <span>Activity</span>
              </a>
              <a href="../examples/profile.html" class="dropdown-item">
                <i class="ni ni-support-16"></i>
                <span>Support</span>
              </a>
              <div class="dropdown-divider"></div>
              <a href="#!" class="dropdown-item">
                <i class="ni ni-user-run"></i>
                <span>Logout</span>
              </a>
            </div>
          </li>
        </ul>
      </div>
    </nav>
    <!-- Header -->
    <div class="header pb-8 pt-5 pt-lg-8 d-flex align-items-center" style="min-height: 600px; background-image: url(https://raw.githack.com/creativetimofficial/argon-dashboard/master/assets/img/theme/profile-cover.jpg); background-size: cover; background-position: center top;">
      <!-- Mask -->
      <span class="mask bg-gradient-default opacity-8"></span>
      <!-- Header container -->
      <div class="container-fluid d-flex align-items-center">
        <div class="row">
          <div class="col-lg-7 col-md-10">
            <h1 class="display-2 text-white">Hello 
                <?php if(isset($_SESSION["username"])){
					echo htmlspecialchars($_SESSION["username"]);
					}
                ?>
            </h1>
            <p class="text-white mt-0 mb-5">This is your profile page. You can see the progress you've made with your work and manage your projects or assigned tasks</p>
            <a href="#form" class="btn btn-info" data-toggle="collapse">Edit profile</a>
            <a href="index_control.php" class="btn btn-info"> Admin </a>
          </div>
          </div>
        </div>
      </div>
    </div>
    <div id="form" class="collapse">
    <form action="">
      <div class="form-group">
      <label for="">Username:</label>
      <input type="text" class="form-control" value="<?php echo htmlspecialchars($_SESSION["username"]); ?>" disabled>
      </div>
      <div class="form-group">
        <div class="row">
          <div class="col">
            <label for="">Firstname:</label>
            <input type="text" class="form-control" name="firstname">
          </div>
          <div class="col">
            <label for="">Lastname:</label>
            <input type="text" class="form-control">
          </div> 
        </div>   
      </div> 
      <div class="form-group">
        <div class="row">
            <div class="col">
              <label for="">Birthday:</label>
              <input type="date" class="form-control" name="date">
            </div>
            <div class="col">
              <label for="">Age:</label>
              <input type="number" class="form-control">
            </div> 
        </div>   
      </div> 
      <div class="form-group">
          <label for="">Address:</label>
          <input type="text" class="form-control">
      </div>
      <div class="form-group">
          <button class="btn btn-primary">Submit</button>
      </div>
    </form>
  </div>
    <!-- Page content -->
  </div>
  <footer class="footer">
    <div class="row align-items-center justify-content-xl-between">
      <div class="col-xl-6 m-auto text-center">
        <div class="copyright">
          <p>Made with <a href="https://www.creative-tim.com/product/argon-dashboard" target="_blank">Argon Dashboard</a> by Creative Tim</p>
        </div>
      </div>
    </div>
  </footer>
</body>
</html>