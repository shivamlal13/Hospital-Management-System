<?php  
include 'func.php';
$id=$_GET['id'];
$query="DELETE FROM patientappointment WHERE id=$id";
mysqli_query($con,$query);
header("Location:patientdetails.php");
?>