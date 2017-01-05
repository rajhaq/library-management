<?php
session_start();
?>
<?php include 'header.php';?>
<?php include 'head.php';?>
<div class="container-fluid">
<div class="dashboard-wrapper">
<?php include 'navbar.php';?>	
	<div class="main-container">

	<div class="row-fluid">
		<div class="span8">
		<?php
// remove all session variables
session_unset();

// destroy the session
session_destroy();
?>

		</div>
	</div>
	</div>


</div>
</div>
<?php include 'footer.php';?>