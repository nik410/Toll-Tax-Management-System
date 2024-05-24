<?php
session_start();
include('includes/dbconnection.php');
error_reporting(0);

$ID=$_GET['delid'];
$query="DELETE FROM TBLCATEGORY WHERE ID= '$ID'";
$data=mysqli_query($con,$query);
if($data)
{
echo '<script>alert("Vehicle Category has been deleted.")</script>';
echo "<script>window.location.href ='manage-vehicle-cat.php'</script>";
}
else
{
echo"<font-size:100.89em>Failed to delete";
}
?>