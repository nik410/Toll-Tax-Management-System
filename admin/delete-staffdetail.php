<?php
session_start();
include('includes/dbconnection.php');
error_reporting(0);

$ID=$_GET['stafftid'];
$query="DELETE FROM TBLSTAFF WHERE StaffID= '$ID'";
$data=mysqli_query($con,$query);
if($data)
{
echo '<script>alert("Staff details has been deleted.")</script>';
echo "<script>window.location.href ='manage-staff.php'</script>";
}
else
{
echo"<font-size:100.89em>Failed to delete";
}
?>