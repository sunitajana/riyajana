<?php
$con=mysqli_connect("localhost","root","","employee_management");
$id=$_GET["on"];
$sql="update leaven_apply set status='2' where id='$id'";
mysqli_query($con,$sql);
header("location:leave_approve.php");
?>