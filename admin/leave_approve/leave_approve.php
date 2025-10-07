
    <?php
    session_start();
    ?>
     <?php include "../include/left-slider.php";?>
    <?php include "../include/header.php";?>
     <div class="main-right" id="c">
        <div class="button-main">
                         <!-- <button class="button"> Punding Leave</button> -->
             <div class="button-inner">
                <!-- <button class="button" style="background:rg
                 b(52, 52, 207); color:white;"><a href="leave_approve.php"> Punding Leave </a></button> -->
                <button class="button1" style="background:rgb(52, 207, 65);width:190px;"> <a href="approve.php" style="color:white;"><i class="fa-solid fa-circle-check"></i>  Approved Leave </a></button>
   
                <button class="button" style="background:rgb(238, 87, 64);">  <a href="reject.php" style="color:white;"><i class="fa-solid fa-triangle-exclamation"></i>  Rejected Leave </a></button>
             </div>
        </div>
        <div class="search-bar">
                <input type="text" placeholder="Name....">
                <i class="fa-solid fa-magnifying-glass"></i>
            </div>
       <table>
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Start Date</th>
        <th>End Date</th>
        <th>Duration</th>
           <th>Subject</th>
        <th>Reason</th>
        <th>Status</th>
    </tr>
   <?php
      
      $con=mysqli_connect("localhost","root","","employee_management");
      $sql="select * from leaven_apply where status='0' ";
      $data=mysqli_query($con,$sql);
      while($row=mysqli_fetch_assoc($data)){
        
      ?>
        <tr class="sunita">
              <td><?php echo $row["id"];?></td>
              <td>vvv</td>
           <td><?php echo $row["start_date"];?></td>
            <td><?php echo $row["end_date"];?></td>
            <td><?php echo $row["total_date"];?></td>
            <td><?php echo $row["subject"];?></td>
            <td><?php echo $row["reason"];?></td>
            
             <td class="td">
                <button class="approve-button"><a href="action_approve.php?id=<?php echo $row['id'];?>"  style="color:white;"><i class="fa-solid fa-circle-check"></i> Approve</a></button>
                <button  class="reject-button"><a href="action_reject.php?on=<?php echo $row['id'];?>"  style="color:white;"><i class="fa-solid fa-triangle-exclamation"></i> Reject</a></button>
            </td>
             
        </tr>
      <?php
      }
      ?>

        
 

   </table> 
     </div>
