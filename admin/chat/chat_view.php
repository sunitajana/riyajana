<?php
$con=mysqli_connect("localhost","root","","employee_management");
$id=$_GET["id"];
// echo $id;
// header("location:users.php");
?>
    <?php
    session_start();
    ?>
    <?php include "../include/left-slider.php";?>
    <?php include "../include/header.php";?>
     <div class="main-right" id="c">
        <div class="main-main-main">

        <!-- <img src="../assest/images/whatsapp.jpg" alt="" width="100%"; height="160%";> -->
         <?php
      
      $con=mysqli_connect("localhost","root","","employee_management");
      $sql="select * from users where id='$id'";
      $data=mysqli_query($con,$sql);
      while($row=mysqli_fetch_assoc($data)){
      ?>
        <div class="view-top">
            <div class="view-left">
                <div class="view-logo">
                <img width="50" height="50" src="uploads/<?php echo $row["image"];?>">
            </div>
            <div class="view-name">
                <h2><?php echo $row["name"];?></h2>
                <p></p>
            </div>
            </div>
            <div class="view-left">
                <div class="view-logo">
                <i class="fa-solid fa-video"></i>
                <i class="fa-solid fa-phone"></i>
            </div>
            <div class="view-name">
                <h2><i class="fa-solid fa-magnifying-glass"></i></h2>
            </div>
            </div>
        </div>
        <?php
      }
      ?>
      <div class="middle-chat">
            <div class="middle-chat-left">
                <!-- <span class="middle-chat-inner" id="span-text1">
                    <p>Hii😊</p>
                    <h6>17- 07- 2025 10:00 pm</h6>
                </span> -->
                <span class="middle-chat-inner" id="span-text">
                    <span class="message">
                     <p>Hii😊</p>
                     <h6>17- 07- 2025 10:00 pm</h6>
                     </span>
                </span>
            </div>
            <div class="middle-chat-right">
                <?php
      
                    $con=mysqli_connect("localhost","root","","employee_management");
                    $sender=$_SESSION['id'];
                    $sql="select * from chat ";
                    $data=mysqli_query($con,$sql);
                    while($roow=mysqli_fetch_assoc($data)){
                        if($roow['sender_id']==$sender&&$roow['recever_id']==$id){
                ?>
                <span class="middle-chat-inner" id="span-text">
                    <span class="message">
                     <p><?php echo $roow['message'];?></p>
                     <h6>
                        <?php
                        // $time=date("g:i a",strtotime($roow['time']));
                        // $date=date("d/m/y",strtotime($roow['time']));
                        // echo $date." ".$time;
                        echo $roow['time'];
                        ?>
                     </h6>
                     </span>
                        </span>
                <?php
                        }
                        
                    }
                    ?>
                    
            </div>
      </div>
      <form action="action_chat_view.php" method="POST">
      <div class="keybord">
        <i class="fa-solid fa-face-smile"></i>
        <i class="fa-solid fa-paperclip"></i>
                <?php
      
                $con=mysqli_connect("localhost","root","","employee_management");
                $sql="select * from users where id='$id'";
                $data=mysqli_query($con,$sql);
                $row=mysqli_fetch_assoc($data)
                ?>
                <input type="hidden" value="<?php echo $row['id'];?>" name="id1">
                
        <input type="text" placeholder="Type a Message..." id="input" name="input">
        <button type="submit" class="ii">
            <i class="fa-solid fa-paper-plane" onclick="send()"></i>
        </button>
        <i class="fa-solid fa-microphone"></i>
    </div>
    </form>
    </div>
    
    </div>
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
    <script>
        // function send(){
        //     var x=document.getElementById("input").value;
        //     document.getElementById("span-text").innerText=x;
        //     document.getElementById("span-text").style.backgroundColor="green";
        //     document.getElementById("span-text").style.color="white";
        //    document.getElementById("input").value="";
        // }
    </script>