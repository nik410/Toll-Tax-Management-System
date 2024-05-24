<?php
session_start();
include('includes/dbconnection.php');
error_reporting(0);

$ID=$_GET['pid'];
$query="DELETE FROM TBLPASS WHERE ID= '$ID'";
$data=mysqli_query($con,$query);
if($data)
{
echo '<script>alert("Vehicle pass has been deleted.")</script>';
echo "<script>window.location.href ='manage-pass.php'</script>";
}
else
{
echo"<font-size:100.89em>Failed to delete";
}
?>