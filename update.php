 <?php include 'header.php';?>
	<?php include 'head.php';?>
	<div class="container-fluid">
	<div class="dashboard-wrapper">
	<?php include 'navbar.php';?>	

	<div class="main-container">
	<div class="page-header">
	  <?php 

	    $sql_query="UPDATE lib_book_author SET author_name='$_POST[name]' WHERE tble_id='$_POST[id]' ";
	  if(!mysqli_query($con,$sql_query))
	  {
		  die('<h1>Error: '.mysqli_error($con).'</h1>');
	  }
	  echo "<h1>User info updated</h1>";
	  ?>

	
	
	</div>
	</div>	
	</div>
	</div>
	<?php include 'footer.php';?>
