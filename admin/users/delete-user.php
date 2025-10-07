<?php
$con=mysqli_connect("localhost","root","","employee_management");
$id=$_GET["id"];
// $email=$_POST["email"];
// $password=$_POST["password"];
// $image=$_FILES["image"]["name"];
// move_uploaded_file($_FILES["image"]["tmp_name"],"uploads/".$image);
$sql="delete  from users where id='$id'";
$data=mysqli_query($con,$sql);
?>