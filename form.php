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
//			if($_POST['password']=$_POST['repPassword'])
	//		header("Location: signup.php?name=$_POST[name]&email=$_POST[email]&phone=&dob=$_POST[dob]&address=$_POST[address]&picture=$file&sex=$_POST[sex]&disable_body=$_POST[db]");  
	
		$file = $_FILES["fileUpload"]["name"];
		$password=md5($_POST["password"]);
		echo $password;
		if(strlen($file)>0)
		{
			$sql_query="INSERT into lib_users (usr_name, usr_email, usr_phone,usr_home_phone, usr_password,
			usr_address, usr_sex, usr_nid,usr_picture,usr_role, usr_notes)
			VALUES ('$_POST[name]','$_POST[email]','$_POST[mobile]','$_POST[phone]' ,'$password',
			'$_POST[address]','$_POST[sex]','$_POST[nid]','$file','$_POST[role]','$_POST[notes]')
			";
		}
		else
		{
			$sql_query="INSERT into lib_users (usr_name, usr_email, usr_phone,usr_home_phone, usr_password,
			usr_address, usr_sex, usr_nid,usr_picture,usr_role, usr_notes)
			VALUES ('$_POST[name]','$_POST[email]','$_POST[mobile]','$_POST[phone]' ,'$password',
			'$_POST[address]','$_POST[sex]','$_POST[nid]',NULL,'$_POST[role]','$_POST[notes]')
			";		}
		move_uploaded_file($_FILES["fileUpload"]["tmp_name"], "img/".$file);
	
	if(!mysqli_query($con,$sql_query))
		{
		  die('<h2>Error: '.mysqli_error($con).'</h2>');
		}
		else
		{
		}
		

	?>
	
	
	
	<h2>Sucessfully Added</h2>
	</div>

	</div>
	</div>
	</div>
	<?php include 'footer.php';?>
</body>