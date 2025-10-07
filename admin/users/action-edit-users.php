<?php
$con=mysqli_connect("localhost","root","","employee_management");
$id=$_POST["id"];
$nam=$_POST["name"];
$email=$_POST["email"];
$password=$_POST["password"];
if($_FILES["image"]["name"]!=""){
    $image=$_FILES["image"]["name"];
move_uploaded_file($_FILES["image"]["tmp_name"],"uploads/".$image);
$sql="UPDATE users SET name='$nam', email='$email', password='$password', image='$image' where id='$id'";
}
else{
$sql="UPDATE users SET name='$nam', email='$email', password='$password' where id='$id'";
}
mysqli_query($con,$sql);

header("location:users.php");

?>