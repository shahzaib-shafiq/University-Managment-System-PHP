<?php
	include"database.php";
	session_start();
	if(!isset($_SESSION["AID"]))
	{
		echo"<script>window.open('index.php?mes=Access Denied...','_self');</script>";
		
	}	
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Fast School of Computer Science</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
	<body>
			<?php include"navbar.php";?><br>
			
			<img src="img/11.jpg" style="margin-left:90px;" class="sha">
			
				<div id="section">
				
					<?php include"sidebar.php";?><br><br><br>
					
					<h3 class="text">Welcome <?php echo $_SESSION["ANAME"]; ?></h3><br><hr><br>
					
				<div class="content1">
					
						<h3>About</h3><br>
						
						<h4>The FAST School of Computer Science is Managed by 
						<br>	<br>
						Computer Science Department  </h4>
						<br>
						<p>For All Type of Queries Contact Related to System <br> <br>Contact IT Department 
							
					
			
				</div>	
			</div>
			<?php include"footer.php";?>
		
	</body>
</html>