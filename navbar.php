<?php
	$link=$_SERVER['REQUEST_URI'];
?>


      <div class="dashboard-wrapper">
        <div id="main-nav" class="hidden-phone hidden-tablet">
          <ul>
            <li>
              <a href="admin.php" <?php if($link=="/library/admin.php") echo"class='selected'";  ?>>
                <span class="fs1" aria-hidden="true" data-icon="&#xe0a0;"></span> Dashboard
              </a>
            </li>
            <li>
              <a href="books.php" <?php if($link=="/library/books.php") echo"class='selected'";  ?>>
                <span class="fs1" aria-hidden="true" data-icon=""></span> Books
              </a>
            </li>
            <li>
              <a href="signup.php" <?php if($link=="/library/signup.php") echo"class='selected'";  ?>>
                <span class="fs1" aria-hidden="true" data-icon=""></span> Registration
              </a>
            </li>
            <li>
              <a href="memberlist.php" <?php if($link=="/library/memberlist.php") echo"class='selected'";  ?>>
                <span class="fs1" aria-hidden="true" data-icon=""></span> Members
              </a>
            </li>
            <li>
              <a href="hire.php" <?php if($link=="/library/hire.php") echo"class='selected'";  ?>>
                <span class="fs1" aria-hidden="true" data-icon=""></span> Hiring
              </a>
            </li>
            <li>
              <a href="author.php" <?php if($link=="/library/author.php") echo"class='selected'";  ?>>
                <span class="fs1" aria-hidden="true" data-icon=""></span> Author
              </a>

            </li>
          </ul>
          <div class="clearfix"></div>
        </div>
		
		          <div class="navbar hidden-desktop">
            <div class="navbar-inner">
              <div class="container">
                <a data-target=".navbar-responsive-collapse" data-toggle="collapse" class="btn btn-navbar">
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </a>
                <div class="nav-collapse collapse navbar-responsive-collapse">
          <ul class="nav">
            <li>
              <a href="admin.php" <?php if($link=="/library/admin.php") echo"class='selected'";  ?>>
                <span class="fs1" aria-hidden="true" data-icon="&#xe0a0;"></span> Dashboard
              </a>
            </li>
            <li>
              <a href="books.php" <?php if($link=="/library/books.php") echo"class='selected'";  ?>>
                <span class="fs1" aria-hidden="true" data-icon=""></span> Books
              </a>
            </li>
            <li>
              <a href="signup.php" <?php if($link=="/library/signup.php") echo"class='selected'";  ?>>
                <span class="fs1" aria-hidden="true" data-icon=""></span> Registration
              </a>
            </li>
            <li>
              <a href="memberlist.php" <?php if($link=="/library/memberlist.php") echo"class='selected'";  ?>>
                <span class="fs1" aria-hidden="true" data-icon=""></span> Members
              </a>
            </li>
            <li>
              <a href="hire.php" <?php if($link=="/library/hire.php") echo"class='selected'";  ?>>
                <span class="fs1" aria-hidden="true" data-icon=""></span> Hiring
              </a>
            </li>
            <li>
              <a href="author.php" <?php if($link=="/library/author.php") echo"class='selected'";  ?>>
                <span class="fs1" aria-hidden="true" data-icon=""></span> Author
              </a>

            </li>
          </ul>                </div>
              </div>
            </div>
          </div>

	