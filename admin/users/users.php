
     <?php
    session_start();
    ?>
    <?php include "../include/left-slider.php";?>
    <?php include "../include/header.php";?>
    
     <div class="main-right" id="c">
        <div class="button-main">
                         <button class="button"><i class="fa-solid fa-print"></i> Student List</button>
             <div class="button-inner">
                 <a href="add-users.php"> <button class="button1"><i class="fa-solid fa-plus"></i> Add Students Details</button></a>
   
                <button class="button"><i class="fa-solid fa-eye"></i> View</button>
             </div>
        </div>
       <table>
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>email</th>
        <th>password</th>
        <th>image</th>
        <th>Edit</th>
        <th>Delete</th>
    </tr>
      <?php
      
      $con=mysqli_connect("localhost","root","","employee_management");
      $sql="select * from users where type='2'";
      $data=mysqli_query($con,$sql);
      while($row=mysqli_fetch_assoc($data)){
      ?>
        <tr class="sunita">
              <td><?php echo $row["id"];?></td>
           <td><?php echo $row["name"];?></td>
            <td><?php echo $row["email"];?></td>
            <td><?php echo $row["password"];?></td>
            <td><img width="50" height="50" src="uploads/<?php echo $row["image"];?>"></td>
            
            <td><a href="edit-users.php?id=<?php echo $row["id"];?>"><i class="fa-solid fa-pen-to-square" style="color:rgb(9, 9, 237); font-size:22px;"></i> </a></td>
             <td><a href="delete-user.php?id=<?php echo $row["id"];?>"><i class="fa-solid fa-trash" style="color: rgb(246, 7, 7); font-size:22px"></i> </a></td>
        </tr>
      <?php
      }
      ?>
        
       


   </table> 
    </div>