<?php
  
  $con = new mysqli("localhost","root","","rent_a_bike");

  if(!$con){
  	die("not connect".mysqli_error());
  }
  else{
  	if(isset($_POST["register"])){
  		$Firstname=mysqli_real_escape_string($con,$_POST['First_name']);
  		$Lastname=mysqli_real_escape_string($con,$_POST['Last_name']);
		$Email=mysqli_real_escape_string($con,$_POST['email']);
		$DOB=mysqli_real_escape_string($con,$_POST['Date-of-Birth']);
		$Mobile=mysqli_real_escape_string($con,$_POST['MobileNumber']);
		
  		$sql="INSERT INTO book_a_bike(First_name,Last_name,Email_address,Date_of_Birth,MobileNumber) VALUES('$Firstname','$Lastname','$Email','$DOB','$Mobile')";
  		$result=mysqli_query($con,$sql);
  		if(!$result){
  			echo "<h1>not registered..</h1>";
  		}
  		else{
  			echo "<center><h2>Registered successfully..</h2></center>";
  		}
  		mysqli_close($con);
  	}
  }
?>