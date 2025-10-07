<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../assest/css/left-slider.css">
    <link rel="stylesheet" href="../assest/css/header.css">
    <link rel="stylesheet" href="../assest/css/index.css">
    <link rel="stylesheet" href="../assest/css/approve.css">
    <link rel="stylesheet" href="../assest/css/leave_approve.css">
    <link rel="stylesheet" href="../assest/css/reject.css">
    <link rel="stylesheet" href="../assest/css/add-users.css">
    <link rel="stylesheet" href="../assest/css/users.css">
     <link rel="stylesheet" href="../assest/css/chat.css">
    <link rel="stylesheet" href="../assest/css/chat_view.css">
</head>
<body>
     <div class="main-left" id="left">
        <div class="main-left-top" id="top">
            <div class="logo" id="logo"><img src="../assest/images/s,jpg.jpg" alt=""></div>
            <h2 id="admin">Admin</h2>
        </div>
        <div class="main-left-bottom">
            <ul>
                <a href="../dashboard/dashboard.php"> 
                <div class="li">
                   <i class="fa-solid fa-house fa-beat"></i>
                   <li id="li"> Dashboard</li>
                </div>
                </a>
                <a href="../users/users.php"> 
                <div class="li">
                    <i class="fa-solid fa-users"></i>
                    <li id="lii">Users</li>
                </div>
                </a>
                <a href="../leave_approve/leave_approve.php"> 
                 <div class="li">
                    <i class="fa-solid fa-graduation-cap"></i>
                    <li id="yyy">Leave Approve</li>
                </div>
                </a>
                <a href="../chat/chat.php"> 
                <div class="li">
                    <i class="fa-solid fa-comments"></i>
                    <li id="liii">Chat</li>
                </div>
                </a>
                
            </ul>
        </div>
     </div>
    
</body>
  <script>
             document.getElementById("left").style.width="18%";

    function abc(){
        if(document.getElementById("left").style.width=="18%"){
             document.getElementById("left").style.width="6%";
              document.getElementById("top").style.width="6%";
              
               document.getElementById("top").style.boxShadow="block";
               document.getElementById("b").style.width="94%"; 
              document.getElementById("c").style.width="94%";  
              document.getElementById("admin").style.display="none";
              document.getElementById("li").style.display="none";
              document.getElementById("lii").style.display="none";
              document.getElementById("yyy").style.display="none";
               document.getElementById("liii").style.display="none";
           
             
        }
        else{
          document.getElementById("left").style.width="18%";
          document.getElementById("b").style.width="82%";   
          document.getElementById("c").style.width="82%";
           document.getElementById("top").style.width="18%";
           document.getElementById("top").style.boxShadow=" 5px 10px 20px  rgba(0,0,0,0.7) ";
           document.getElementById("admin").style.display="block"; 
           document.getElementById("li").style.display="block";
            document.getElementById("lii").style.display="block";
              document.getElementById("yyy").style.display="block";
               document.getElementById("liii").style.display="block";
        }
         
    
       
    }
    document.getElementById("td_inner").style.display="none";
    function action(){
if(document.getElementById("td_inner").style.display=="none"){
       document.getElementById("td_inner").style.display="block";
       document.getElementById("td_inner").style.position="absolute";  
}
else{
  document.getElementById("td_inner").style.display="none";
}
    
    } 
</script>
<script>
     var l=document.getElementById("p");
    window.addEventListener("load",function(){
        l.style.display="none";
    })
</script>
</html>