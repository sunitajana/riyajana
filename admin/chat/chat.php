    <?php
    session_start();
    ?>
    <?php include "../include/left-slider.php";?>
    <?php include "../include/header.php";?>
      <div class="main-right" id="c">
                <!-- <img src="../assest/images/whatsapp.jpg" alt="" width="80%"; height="100%";> -->
    </div>
    <div class="chat">
        <div class="chat-search-bar">
                <input type="text" placeholder="search hear....">
                <i class="fa-solid fa-magnifying-glass"></i>
        </div>
         <?php
      $con=mysqli_connect("localhost","root","","employee_management");
      $sql="select * from users where type='2'";
      $data=mysqli_query($con,$sql);
      while($row=mysqli_fetch_assoc($data)){
      ?>
      <a href="chat_view.php?id=<?php echo $row["id"];?>">
        <div class="chat-top">
            
            <div class="chat-logo">
                <img width="50" height="50" src="uploads/<?php echo $row["image"];?>">
            </div>
            <div class="chat-h2">
                <h2><?php echo $row["name"];?></h2>
            </div>  
        </div>
        </a>
        <?php 
        }
        ?>
        
    </div>