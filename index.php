<?php
include 'lib/function.php';
 ?>
<!DOCTYPE html>
  <!--[if lt IE 7]>
    <html class="lt-ie9 lt-ie8 lt-ie7" lang="en">
  <![endif]-->

  <!--[if IE 7]>
    <html class="lt-ie9 lt-ie8" lang="en">
  <![endif]-->

  <!--[if IE 8]>
    <html class="lt-ie9" lang="en">
  <![endif]-->

  <!--[if gt IE 8]>
    <!-->
    <html lang="en">
    <!--
  <![endif]-->

 <head>
	<title>Welcome | Login Page</title>
    <meta charset="utf-8">
    <meta name="" content="">
    <meta content="width=device-width, initial-scale=1.0, user-scalable=no" name="viewport">
    <meta name="description" content="Admin UI">
    <script src="js/html5-trunk.js"></script>
    <link href="icomoon/style.css" rel="stylesheet">
    <!--[if lte IE 7]>
    <script src="css/icomoon-font/lte-ie7.js"></script>
    <![endif]-->

    <!-- NVD graphs css -->
    <link href="css/nvd-charts.css" rel="stylesheet">

    <!-- Bootstrap css -->
    <link href="css/main.css" rel="stylesheet">

    <!-- fullcalendar css -->
    <link href='css/fullcalendar/fullcalendar.css' rel='stylesheet' />
    <link href='css/fullcalendar/fullcalendar.print.css' rel='stylesheet' media='print' />
	
	

</head>

<body>

    <div class="container-fluid">
      <div class="row-fluid">
        <div class="span4 offset4">
          <div class="signin">
            <h2 class="center-align-text">User Login</h2>
			<?php
				if(isset($_GET['error']))
				{ 
					if($_GET['error']==1)
						password();
					else if($_GET['error']==2)
						email();
				} 
			?>
            <form action="login.php" class="signin-wrapper" method="post">
              <div class="content">
                <input class="input input-block-level" name="email" placeholder="Email" type="email" value="">
                <input class="input input-block-level" name="password" placeholder="Password" type="password">
              </div>
              <div class="actions">
                <input class="btn btn-info pull-right" type="submit" value="Login">
                <span class="checkbox-wrapper">
                  <a href="forget.php" class="pull-left">Forgot Password</a>
                </span>
                <div class="clearfix"></div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.js"></script>
</body>
</html>