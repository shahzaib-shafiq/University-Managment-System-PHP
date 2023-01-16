<?php
	include"database.php";
	session_start();
	if(!isset($_SESSION["AID"]))
	{
		echo"<script>window.open('index.php?mes=Access Denied..','_self');</script>";
		
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
		
		
		<img src="img/111.jpg" style="margin-left:90px;" class="sha">
			
			<div id="section">
			
				<?php include"sidebar.php";?><br>
				
				<div class="content">
					<h3 class="text">Welcome <?php echo $_SESSION["ANAME"]; ?></h3><br><hr><br>
						<h3 >Institute Information</h3><br>
					<img src="img/student.png" class="imgs">
					<p class="para">
					Founded as a Federally Chartered University in July 2000, the National University of Computer and Emerging Sciences is a premiere University of Pakistan, renowned for quality and impact of its students in the development of local software and other industries. The university has five modern campuses at Karachi, Lahore, Islamabad, Peshawar and Chiniot-Faisalabad. These campuses provide world class educational environment and recreational facilities to about over 11,000 students, around one quarter are female and over 500 skilled faculty members.
					</p>
					
					<p class="para">
					Research wings of the university are well recognized, nationally and internationally. They are embarked upon cutting edge research having direct impact on the social, economic and technological needs of Pakistan. Our vision is to become a globally recognized research university of Pakistan within the next decade.
					</p>
				</div>
				
			</div>
	
		<?php include"footer.php";?>
	</body>
</html>