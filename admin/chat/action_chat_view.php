<?php
 session_start();
$con=mysqli_connect("localhost","root","","employee_management");
$id=$_SESSION['id'];
$id1=$_POST["id1"];
$input=$_POST["input"];
$date=date_create();
// date_timestamp_set($date);
$d=date_format($date,"d/m/y g:i a");
$sql="insert into chat (sender_id,recever_id,message,time)values('$id','$id1','$input','$d')";
mysqli_query($con,$sql);
header("location:chat_view.php?id=$id");
?>
