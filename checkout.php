<?php  
include 'func.php';
$regid=$_GET['regid'];
$query="DELETE FROM patientcheckin WHERE regid=$regid";
mysqli_query($con,$query);
header("Location:patcheckout.php");
?>