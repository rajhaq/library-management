<?php
// Start the session
session_start();
?>
<?php include 'header.php';?>
	<?php include 'head.php';?>
		<?php include 'config.php';?>
<?php		
	
	
	$sql="SELECT usr_email FROM lib_users";
	$testmail = mysqli_query($con, $sql);

		if(!$testmail)
		{
		  die('<h2>Error: '.mysqli_error($con).'</h2>');
		}

	$flag=0;
	while($row = mysqli_fetch_assoc($testmail))
	{
		if($_POST['email']==$row['usr_email'])
		{
			$flag=1;
			break;
		}
	}
	if($flag==1)
	{

	$sql_password="SELECT usr_password, usr_role FROM lib_users WHERE usr_email='$_POST[email]'";
	if(!mysqli_query($con,$sql_password))
		{
		  die('<h2>Error: '.mysqli_error($con).'</h2>');
		}

	$result = mysqli_query($con, $sql_password);
	$row=mysqli_fetch_assoc($result);
	if(md5($_POST['password'])==$row['usr_password'])
	{
		if($row["usr_role"]==1)
		{
			$_SESSION["user_mail"] = $_POST["email"];
			header("Location: member.php");  
	
		}
		else if($row["usr_role"]==2)
		{
			$_SESSION["admin_mail"] = $_POST["email"];
			header("Location: admin.php");  
	
		}
			
	}
	
	else
		header('Location: index.php?error=1');

	}
	else
		header('Location: index.php?error=2');
	
?>
	
	
	
<?php include 'footer.php';?>