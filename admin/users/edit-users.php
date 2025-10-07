<?php
$con=mysqli_connect("localhost","root","","employee_management");
$id=$_GET["id"];
$sql="select * from users where id='$id'";
$data=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($data);
?>
<?php
    session_start();
    ?>
    <?php include "../include/left-slider.php";?>
    <?php include "../include/header.php";?>
    
     <div class="main-right-rita" id="c">
        <div class="main-right-box">
            <h2>Fill-Up Your Form</h2>
        <div class="main-form">
            <form action="action-edit-users.php" method="POST" enctype="multipart/form-data">
                <div class="main-form-row">
                <!-- <div class="left">Name :</div> -->
                <div class="right">
                    <input type="hidden" name="id" value="<?php echo $row["id"];?>">
                </div>
            </div>
            <div class="main-form-row">
                <div class="left">Name :</div>
                <div class="right">
                    <input type="text" name="name" value="<?php echo $row["name"];?>">
                </div>
            </div>
             <div class="main-form-row">
                <div class="left">email :</div>
                <div class="right">
                    <input type="email" name="email" value="<?php echo $row["email"];?>">
                </div>
            </div>
             <div class="main-form-row">
                <div class="left">password :</div>
                <div class="right">
                    <input type="password" name="password" value="<?php echo $row["password"];?>">
                </div>
            </div>
             <div class="main-form-row">
                <div class="left">Image</div>
                <div class="right">
                    <input type="file" name="image" value="<?php echo $row["image"];?>">
                </div>
            </div>
            <div class="button">
                <button>Add Now</button>
            </div>
            </form>
        </div>
        </div>
     </div>
   
