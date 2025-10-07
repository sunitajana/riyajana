
    <?php
    session_start();
    ?>
    
     <div class="header" id="b">
        <div class="bar-main">
            <div class="bar">
            <i class="fa-solid fa-bars" onclick="abc()"></i>
            </div>
            <div class="search-bar">
                <input type="text" placeholder="search hear....">
                <i class="fa-solid fa-magnifying-glass"></i>
            </div>
        </div>
        <div class="logo-main">
            <div class="logo">
      <img src="../users/uploads/<?php echo $_SESSION['image'];?>">
            </div>
            <div class="h3"><h3><?php echo $_SESSION["name"];?></h3></div>
        </div>
     </div>
     
