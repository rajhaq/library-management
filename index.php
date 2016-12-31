<?php include 'header.php';?>
<title>Welcome | Login Page</title>
</head>

<body>
    <div class="container-fluid">
      <div class="row-fluid">
        <div class="span4 offset4">
          <div class="signin">
            <h2 class="center-align-text">User Login</h2>
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

</body>
<?php include 'footer.php';?>