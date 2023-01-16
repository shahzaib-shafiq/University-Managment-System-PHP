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
			<img src="img/111.jpg" style="margin-left:90px;" class="sha">
			
			<div id="section">
				
				<?php include"sidebar.php";?><br><br><br>
				
				<h3 class="text">Welcome <?php echo $_SESSION["ANAME"]; ?></h3><br><hr><br>
				<div class="content1">
					
						<h3 > Add Faculty Details</h3><br>
						
					<?php
						if(isset($_POST["submit"]))
						{
							$sq="insert into staff(TNAME,TPASS,QUAL,SAL,PNO,EMAIL) values('{$_POST["sname"]}','{$_POST["pass"]}','{$_POST["qual"]}','{$_POST["sal"]}','{$_POST["pno"]}','{$_POST["mail"]}')";
							if($db->query($sq))
							{
								echo "<div class='success'>Insert Success..</div>";
							}
							else
							{
								echo "<div class='error'>Insert Failed..</div>";
							}
							
						}
						
					?>
					<form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
					     <label>Name</label><br>
					     <input type="text" name="sname" required class="input">
					     <br><br>
					     <label>Qualification</label><br>
					     <input type="text" name="qual" required class="input">
					     <br><br>
					     <label>Salary</label><br>
					     <input type="text" name="sal" required class="input">
						 <br>
						 <br>
						 <label>Mobile number</label><br>
						 <input type="tel" name="pno" required class="input" maxlength="11">
						 <br>
						 <br>
						 <label>Email</label><br>
						 <input type="email" name="mail" required class="input">
						 
					     <br><br>
						 <label>Password</label><br>
						 <input type="password" name="pass" required class="input">
						 <br><br>
					     <button type="submit" class="btn" 
						 name="submit">Insert Faculty Details</button>
					</form>
				
				
				</div>
				<div class="tbox">
					<h3 style="margin-top:30px;">Faculty Details</h3><br>
					<?php
						if(isset($_GET["mes"]))
						{
							echo"<div class='error'>{$_GET["mes"]}</div>";	
						}
					
					?>
					<table border="1px" >
						<tr>
							<th>S.No</th>
							<th>Name</th>
							<th>Qualification</th>
							<th>Mobile</th>
							<th>Email	</th>
							
												
							
						</tr>
						<?php
							$s="select * from staff";
							$res=$db->query($s);
							if($res->num_rows>0)
							{
								$i=0;
								while($r=$res->fetch_assoc())
								{
									$i++;
									echo "
										<tr>
											<td>{$i}</td>
											<td>{$r["TNAME"]}</td>
											<td>{$r["QUAL"]}</td>
											<td>{$r["PNO"]}</td>
											<td>{$r["EMAIL"]}</td>
											
											<td><a href='staff_delete.php?id={$r["TID"]}' class='btnr'>Delete</a></td>
										</tr>
										";
									
								}
								
							}
						?>
					
					</table>
				</div>
				
			</div>
	
				<?php include"footer.php";?>
	</body>
</html>