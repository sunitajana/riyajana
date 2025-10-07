
    <?php
    session_start();
    ?>
     <?php include "../include/left-slider.php";?>
    <?php include "../include/header.php";?>
     <div class="main-right" id="c">
        <div class="button-main">
                         <!-- <button class="button"> Punding Leave</button> -->
             <div class="button-inner">
                <button class="button" style="background:rgb(52, 52, 207); color:white;"><a href="leave_approve.php"><i class="fa-solid fa-rotate-right"></i> Punding Leave </a></button>
                <!-- <button class="button1" style="background:rgb(52, 207, 65); color:white;"> <a href="approve.php">  Approved Leave </a></button> -->
   
                <button class="button" style="background:rgb(238, 87, 64);color:white;">  <a href="reject.php"><i class="fa-solid fa-triangle-exclamation"></i>  Rejected Leave </a></button>
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
      $sql="select * from leaven_apply  where status='1'";
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
                <button class="approve-button"><i class="fa-solid fa-circle-check"></i> Approve</a></button>
            </td>
            
        </tr>
      <?php
      }
      ?>

        
 

   </table> 
     </div>
   
