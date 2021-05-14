<?php  
include 'func.php';
$id=$_GET['id'];
$query="DELETE FROM staffdetails WHERE id=$id";
mysqli_query($con,$query);
header("Location:removestaff.php");
?>