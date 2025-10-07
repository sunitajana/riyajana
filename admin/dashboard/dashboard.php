
    <?php
    session_start();
    ?>
    <?php include "../include/left-slider.php";?>
    <?php include "../include/header.php";?>
      
     <div class="main-right" id="c">
                    <?php
                        $con=mysqli_connect("localhost","root","","employee_management");
                        $sql="SELECT COUNT(*) FROM users where type='2'";
                        $data=mysqli_query($con,$sql);
                        $r=mysqli_fetch_assoc($data);
                    ?>
         <!-- <form action="action_dashboard.php" method="POST"> -->
       <div class="row">
            <div class="col" style=" background-color: rgb(237, 182, 162);border-bottom: 3px solid rgb(182, 13, 13);">
                <div class="left" style=" background-color: rgb(182, 13, 13);">
                    <i class="fa-solid fa-users"></i>
                </div>
                <div class="right">
                    <p>TOTAL USERS</p>
                    <H2><?php echo $r['COUNT(*)'];?></H2>
                </div>
            </div>
            <div class="col">
                <div class="left">
                    <i class="fa-solid fa-folder-closed"></i>
                </div>
                <div class="right">
                    <p>TOTAL REVENUE</p>
                    <H2>$3249</H2>
                </div>
            </div>
            
            <div class="col" style=" background-color: rgb(198, 168, 237);border-bottom: 3px solid rgb(86, 13, 182);">
                <div class="left" style=" background-color: rgb(86, 13, 182);">
                    <i class="fa-solid fa-user-plus"></i>
                </div>
                <div class="right">
                    <p>NEW USER</p>
                    <H2>9</H2>
                </div>
            </div>
            <div class="col" style=" background-color: rgb(241, 149, 210);border-bottom: 3px solid rgb(103, 4, 72);">
                <div class="left" style=" background-color: rgb(103, 4, 72);">
                    <i class="fa-solid fa-file-contract"></i>
                </div>
                <div class="right">
                    <p>SERVER UPTIME</p>
                    <H2>152  days</H2>
                </div>
            </div>
            
        </div>
       <!-- </form> -->
     </div>