<?php
$con=mysqli_connect("localhost","root","","employee_management");
$name=$_POST["name"];
$email=$_POST["email"];
$password=$_POST["password"];
$image=$_FILES["image"]["name"];
move_uploaded_file($_FILES["image"]["tmp_name"],"uploads/".$image);
$sql="insert into users(name,email,password,image,type)values('$name','$email','$password','$image','2')";
mysqli_query($con,$sql);
header("location:users.php");
?>