<?php
if (isset($_POST['form-submit'])) {
	require_once('../../assets/php/add.php');
} else if (isset($_POST['login-submit'])) {
	require_once('../../assets/php/login.php');
}
?>
<!doctype html>
<html class="no-js" lang=""> 
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Stacked HTML CSS Template</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">

        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <link rel="stylesheet" href="../css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="../css/owl-carousel.css">
        <link rel="stylesheet" href="../css/main.css">

        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    </head>
    <body>
        <nav class="nav">
          <div class="burger">
            <div class="burger__patty"></div>
          </div>

          <ul class="nav__list">
            <li class="nav__item">
              <a href="../../index.html" class="nav__link"><i class="fa fa-home" aria-hidden="true"></i></a>
            </li>
            <li class="nav__item">
              <a href="../calendar.html" class="nav__link"><i class="fa fa-calendar" aria-hidden="true"></i></a>
            </li>
            <li class="nav__item">
              <a href="../customization.html" class="nav__link"><i class="fa fa-pencil" aria-hidden="true"></i></a>
            </li>
            <li class="nav__item" id="nav__filler">
              <span class="nav__link"></span>
            <li class="nav__item" id="settings_item">
              <a href="settings-profile.html" class="nav__link"><i class="fa fa-cog" aria-hidden="true"></i></a>
            </li>
          </ul>
        </nav>

			<div class="home-content container-fluid" style="border: solid;">
				<div class="row">
					<div class="col-md-3 col-sm-12">
						<nav class="navbar navbar-expand-md navbar-light fixed" id="userSettingsNavBar">
							<div id="userSideNavBar">
								<ul class="flex-column mr-auto">
										<li class="nav-item">
											<a class="nav-link active" href="settings-profile.html">My Profile</a>
										</li>
										<li class="nav-item">
											<a class="nav-link" href="settings-password.html">Change Password</a>
										</li>
								</ul>
							</div>
						</nav>
					</div>
					<div class="col-md-7 col-sm-12">
						<div id="panel">
							<p class="h3">My Details</p>
							<div class="details-form">
								 <form name="frmDetails" method="POST" action="" onsubmit="">              
									  <div class="form-group">
											<label>First Name</label>
											<input type="text" class="form-control" name="fname" id="fname" value=<?php if(isset($_POST['form-submit'])) { echo $fname; } else if(isset($_POST['login-submit'])) { echo $db_fname; } ?> readonly>
									  </div>
									  <div class="form-group">
											<label>Last Name</label>
											<input type="text" class="form-control" name="lname" id="lname" value=<?php if(isset($_POST['form-submit'])) { echo $lname; } else if(isset($_POST['login-submit'])) { echo $db_lname; } ?> readonly>
									  </div>
									  <div class="form-group">
											<label>Email</label>
											<input type="email" class="form-control" name="email" id="email" value=<?php if(isset($_POST['form-submit'])) { echo $email; } else if(isset($_POST['login-submit'])) { echo $db_email; } ?> readonly>
									  </div>
									 								  <!-- <div class="form-group">
											<input type="submit" class="btn btn-primary" name="btnSave" value="Save Changes">
									  </div> -->
								 </form>
							</div>
					  </div>
					</div>
				</div>
			</div>
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="../js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

        <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script> -->
        <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script> -->

        <script src="../js/vendor/bootstrap.min.js"></script>

        <script src="../js/java.js"></script>
        <script src="../js/plugins.js"></script>
        <script src="../js/main.js"></script>
        

    </body>
</html>
