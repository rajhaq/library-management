<?php include 'header.php';?>
<title>Dashboard | SignUp</title>
</head>

<body>
	<?php include 'head.php';?>
	<div class="container-fluid">
	<div class="dashboard-wrapper">
	<?php include 'navbar.php';?>	

	<div class="main-container">

		<div class="page-header">
	
	<?php
		$sql_query="DELETE FROM lib_book_author WHERE tble_id='$_GET[id]'";	
		if(!mysqli_query($con,$sql_query))
			{
			  die('<h2>Error: '.mysqli_error($con).'</h2>');
			}
			else
			{
				echo"<h2>Sucessfully Deleted</h2>";
			}
	?>
	
	
	
	</div>

	</div>
	</div>
	</div>
	<?php include 'footer.php';?>
</body>