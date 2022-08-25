<?php

$FirstName = $_POST['First_name'];
$LastName = $_POST['Last_name'];
$email = $_POST['email'];
$DateOfBirth = $_POST['Date-of-Birth'];
$MobileNumber = $_POST['MobileNumber'];


$conn = new mysqli('localhost','root','','rent_a_bike');
if($conn->connect_error){
        die('connection Failed : ' .$conn->connect_error);
}
else{
        $stmt = $conn->prepare("insert into book_a_bike(First-name,Last_name,Email_address,Date_of_Birth,MobileNumber)values(?,?,?,?,?)");
        $stmt->bind_param("sssdi",$FirstName,$LastName,$email,$DateOfBirth,$MobileNumber);
        $stmt->execute();
        echo "Details Registered successfully...";
        $stmt->close();

}

?> 