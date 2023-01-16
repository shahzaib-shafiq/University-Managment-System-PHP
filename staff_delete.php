<?php
	include"database.php";
	session_start();
	
	$s2="delete from staff where TID={$_GET["id"]}";
	$db->query($s2);
	echo "<script>window.open('add_staff.php?mes=Data Deleted.','_self');</script>"
?>