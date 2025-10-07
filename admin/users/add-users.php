
      <?php
    session_start();
    ?>
     <?php include "../include/left-slider.php";?>
    <?php include "../include/header.php";?>
     <div class="main-right-rita" id="c">
        <div class="main-right-box">
            <h2>Fill-Up Your Form</h2>
        <div class="main-form">
            <form action="action_add_users.php" method="POST" enctype="multipart/form-data">
            <div class="main-form-row">
                <div class="left">Name :</div>
                <div class="right">
                    <input type="text"  name="name" placeholder="Enter Your Name" required>
                </div>
            </div>
             <div class="main-form-row">
                <div class="left">email :</div>
                <div class="right">
                    <input type="email" name="email" placeholder="Enter Your email" required>
                </div>
            </div>
             <div class="main-form-row">
                <div class="left">password :</div>
                <div class="right">
                    <input type="text" name="password" placeholder="Enter Your password" required>
                </div>
            </div>
             <div class="main-form-row">
                <div class="left">image :</div>
                <div class="right">
                    <input type="file" name="image" placeholder="Enter Your image" required>
                </div>
            </div>
             
            <div class="button">
                <button>Add Now</button>
            </div>
            </form>
        </div>
        </div>
     </div>
   