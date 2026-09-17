<?php
include('includes/connect.php');
include('functions/common_function.php');
include('config.php');
checkLogin();
//session_start();



$success = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $con->real_escape_string($_POST['name']);
    $lastname = $con->real_escape_string($_POST['lastname']);
    $email = $con->real_escape_string($_POST['email']);
    $message = $con->real_escape_string($_POST['message']);

    $sql = "INSERT INTO contact (name, lastname, email, message)
            VALUES ('$name', '$lastname', '$email', '$message')";

    if ($con->query($sql) === TRUE) {
        // Store success message in URL
        header("Location: contact.php?success=1");
        exit();
    } else {
        $success = "❌ Error: " . $con->error;
    }
}

// If redirected with success
if (isset($_GET['success'])) {
    $success = "✅ Message sent successfully!";
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Contact Us</title>
  
     <script>
        // Optional: Show alert message if success
        <?php if ($success == "✅ Message sent successfully!") { ?>
            alert("✅ Message sent successfully!");
        <?php } ?>
    </script>
    
        <style>
    
    *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
.container{
    max-width: 1800px;
    margin: auto;
}
.top{
    position: fixed;
/*    background: #6c0c35;*/
    background: #897900;
/*    background: #8b5d08;*/
    padding: 2px;
    width: 100%;
    align-items: center;
    border-bottom-left-radius: 15px;
    border-bottom-right-radius: 15px;
    box-shadow: 30px 10px 1px .01px rgba(255, 255, 255, 0.2);
    z-index: 1;
}
.logo img{
    height: 55px;
    width: 70px;
}
.row{
    display: flex;
    align-items: center;
    justify-content: space-around;
    flex-wrap: wrap;
}
.to{
    flex-basis:67%;
    min-width: 600px;
}
/*        ------------search ------------------*/
                .tooo{
            margin: 0;
            padding: 0;
        }
        .search-logo{
            width: 70px;
            height: 35px;
            text-decoration: none;
            border: none;
            margin: 0;
            border-top-right-radius: 10px;
            border-bottom-right-radius: 10px;
            cursor: pointer;
            font-size: 15px;
            transition: 0.5s;
            color: #4a4a4a;
        }
        .search-logo:hover{
            background: #e7e8d4;
        }
        .search-input{
            width: 230px;
            height: 35px;
               border-top-left-radius: 10px;
            border-bottom-left-radius: 10px;
            text-decoration: none;
            border: none;
            padding: 10px;
            font-size: 15px;
        }
        .twos{
            display: flex;
        }
/*        -------------*/
                .too4 a{
            color: #fff;
            padding: 7px;
            border-radius: 10px;
            text-decoration: none;
            font-size: 18px;
            font-family: sans-serif;
            letter-spacing: 1px;
            transition: 1s;
            border: 1px solid #fff;
        }
        .too4 a:hover{
            color: #cbcbcb;
        }
/*
        .intos{
           flex-basis: 50%;
        }        
*/

.over{
    position: fixed;
    width: 100%;
    top: 68px;
    left: 0;
    height: 0;
    transition: 0.5s;
    overflow: hidden;
    background: #fff;
    z-index: 1;
}
.closebtn{
    position: absolute;
    font-size: 50px;
    color: #000;
    text-decoration: none;
    right: 30px;
    z-index: 1;
    transition: .4s;
}
.closebtn:hover{
    transform: scale(0.85);
}
.menu{
    display: block;
    padding-top: 28px;
}
.menu a{
    color: #222222;
    display: block;
    text-decoration: none;
    margin-left: 30px;
    padding: 14px;
    font-weight: bold;
    font-family: sans-serif;
    font-size: 14px;
    letter-spacing: 1px;
}
span{
    font-size: 55px;
    color: #fff;
    font-weight: 200;
    cursor: pointer;
    transition: .4s;
/*    linear-gradient(to left,rgb(0,0,0,.001),#203333 100%),*/
}

.whole{
/*    background: #081a1a;*/
    background-image: url(imgss/blue.jpg);
    background-size: cover;
    background-position: center;
    background-attachment: fixed;
    background-repeat: no-repeat;
    height: 100%;
    width: 100%;
}
.page{
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
    background: #fff;
    margin: 0 50px;
    border-radius: 18px;
    box-shadow: 0 -20px 1px  rgba(255, 255, 255, 0.2);
}



/*------------*/
.ffd{
    margin-top: 20px;
    position: relative;
    overflow: hidden;
}
.write{
    font-family: sans-serif;
    transition: transform 2s;
    transform: translateY(-100%);
}
.write:nth-of-type(even){
    transform: translateY(-100%);
}
.write.show{
    transform: translateY(0);
}
.loj{
    flex-basis: 80%;
    margin-bottom: 30px;
}
.loj h1{
    color: #fff;
    font-size: 24px;
    font-family: cursive;
}
.loo{
    flex-basis: 30%;
    margin-bottom: 30px;
}
.too img{
    cursor: pointer;
    margin: 2px;
    margin-bottom: 30px;
}
.loj2{
    display: flex;
    margin-top: 10px;
}
.lin h1{
    background: #b5b5b5;
    border: none;
    outline: none;
    height: 2px;
    margin: 0 20px;
}
.ow{
    display: flex;
    justify-content: space-around;
    flex-wrap: wrap;
    margin-top: 30px;
/*    box-shadow: 0 -20px 1px  rgba(255, 255, 255, 0.2);*/
    background: linear-gradient(to bottom,rgb(0,0,0,.001),#897900 100%);


}
.last3{
    flex-basis: 20%;
/*    height: 100%;*/
    min-width: 500px;
/*    background: blue;*/

}
.last3 h1{
    font-size: 28px;
    font-family: serif;
    color: #fff;  
    margin-bottom: 20px;
    
}
.last3 h2{
    font-size: 28px;
    font-family: serif;
    color: #fff;    
    text-align: right;
    margin-bottom: 20px;
}
.last3 h3{
    color: #b4b4b4;
    font-family: cursive;
    font-size: 14px;
    letter-spacing: 1px;
    line-height: 23px;
}
      
.last33 h1{
    color: #e0e0e0;
    margin-bottom: 20px;
    font-family: serif;
    font-size: 28px;
    text-align: center;
}
.last33 h4{
    width: 200px;
    text-align: left;
    margin-left: 60px;
     font-size: 14px;
    color: #ececec;
    letter-spacing: 1px;
    line-height: 35px;
}
.last3 h6{
    color: orange;
    font-size: 14px;
    margin-top: 40px;
    letter-spacing: 1px;
    margin-bottom: 40px;
    cursor: pointer;
}
.last3 ul{
    color: #d1d1d1;
    font-size: 12px;
    cursor: pointer;
    margin-bottom: 50px;
}
.logic{
    flex-basis: 5%;
}
.logicc{
    flex-basis: 95%;
}
.nn{
    display: flex;  
}
.logicc h5{
    text-align: right;
    font-size: 12px;
    color: #b4b4b4;
    letter-spacing: 1px;
    line-height: 35px;
    font-family: cursive;
}
.logic h4{
    font-size: 14px;
    color: #ececec;
    letter-spacing: 1px;
    line-height: 35px;
}            
/*            --------------------contact-----------*/
            .xz{
    background-image: linear-gradient(to left,rgb(0,0,0,.001),#203333 100%),url(imgss/lll.png);
    background-size: cover;
    height: 400px;
                width: 100%;
    border-bottom-right-radius: 20px;
}
.main{
    display: flex;
    align-items: center;
}
.coll-2{
    margin-bottom: 150px;
    margin-top: 180px;
    text-align: center;
    margin-left: 80px;
}
.coll-2 h2{
    font-size: 60px;
    color: #fff;
    font-family: sans-serif;
}
.mmss{
    background: linear-gradient(to left , #acc9c6 10%, white 90%);
    border-radius: 20px;
    width: 100%;
/*
    margin-left: 40px;
    margin-right: 40px;
*/
/*    margin-top: -70px;*/
    box-shadow: 1px 3px 1px 1px #889600;
}
.message h1{
    font-size: 50px;
    font-family: sans-serif;
    font-weight: 400;
    padding: 20px;
    margin-left: 20px;
}
.message h5{
    font-size: 16px;
    font-family: sans-serif;
    font-weight: 200;
    margin-left: 45px;
}
.ff input{
   margin-left: 50px;
    height: 45px;
    font-size: 16px;
    font-family: sans-serif;
    margin-top: 6px;
    width: 370px;
    padding: 2px 8px;
    display: inline-flex;
       background-color: #eeee;
    border-radius: 3px;
    border: 1.5px solid gray;
}
.ff h4{
    font-family: sans-serif;
    font-weight: bold;
    margin-left: 50px;
    margin-top: 50px;
    color: #555;
}
.mess input{
    margin-top: 7px;
    display: block;
    margin-left: 50px;
    height: 45px;
    width: 797px;
    padding: 2px 8px;
    font-size: 16px;
    background-color: #eee;
    border-radius: 3px;
    border: 1.5px solid gray;
}
.mess textarea{
    margin-top: 7px;
    display: block;
    margin-left: 50px;
    height: 65px;
    width: 797px;
    padding: 2px 8px;
    font-size: 16px;
    background-color: #eee;
    border-radius: 3px;
    border: 1.5px solid gray;
}
.mess h4{
    font-family: sans-serif;
    font-weight: bold;
    margin-left: 50px;
    margin-top: 30px;
    color: #555;
}
.mmb{
    margin-left: 60px;
    margin-top: 40px;
    height: 50px;
    width: 130px;
    border-radius: 15px;
    background: #897900;
    color: #fff;
    font-size: 15px;
    margin-bottom: 20px;
	cursor: pointer;
    outline: none;
	transition: 0.6s;
    border: none;
}
.mmb:hover{
	background: #8f9d00;
}
.call{
   padding: 50px;
}
.col-two{
    display: flex;

}
.col-two img{
    flex-basis: 40%;
    min-width: 40px;
}
.tack{
    margin-top: 30px;
    margin-left: 30px;
    font-family: sans-serif;
    padding: 0px 40px;
}
.tack img{
    margin-left: 7px;
}
.tack h2{
    margin-top: 30px;
    margin-bottom: 20px;
    font-family: sans-serif;
    font-weight: 400;
}
.tack h3{
    color: #555;
    font-weight: 100;
}
.ii{
    background-image: linear-gradient(rgba(0,0,0,0.2),#555),url(imgss/8.png);
    background-size: cover;
    height: 400px;
    margin-left: 40px;
    margin-right: 40px;
    margin-bottom: 10px;
    margin-top: 20px;
    border-top-left-radius: 70px;
    border-bottom-right-radius: 70px;
}
.iim{
    display: flex;
    align-items: center;
}
.iin{
   margin-bottom: 80px;
    margin-top: 170px;
}
.iin h2{
    font-size: 28px;
    font-weight: 400;
    font-family: sans-serif;
    margin-left: 30px;
    color: #fff;
}
    </style> 
</head>
<body>

      <?php
//    if ($success) echo "<p style='color:green;'>$success</p>"; 
    ?>
  
    
    
    
    
<!--    ------------------>
    
       <div class="container">    
        
    <div class="top">
    <div class="row">
        <div class="to">
    <div class="logo">
    <a href="home.php"><img src="imgss/ElderCare_Allies_Logo_with_Heart_and_Hands_20250826_151024_0000-removebg-preview.png"></a>
        </div> 
        </div>
        
        <div class="tooo">
        <form action="search_product.php" method="get">
        <input class="search-input" type="search" placeholder="Search" aria-label="Search" name="search_data" required>
         <input type="submit" class="search-logo" name="search_data_product">
      </form>
        </div>
        
                <div class="too4">
          <?php

   if(!isset($_SESSION['username'])){
     echo  "<div class='lot'>
    <a href='./users_area/user_login.php'>Login</a>
  </div>";
   }else{
    echo  "<div class='lot'>
    <a href='./users_area/logout.php'>Logout</a>
 </div>";
   }

     ?> 
        </div>
        <div class="too">
   
    <div class="over" id="mynav">
        
    <a href="javascript:void(0)" class="closebtn" onclick="closenav()">&times;</a> 
    <div class="menu">
    <a href="index.html">HOME</a>    
    <a href="About%20us.html">ABOUT US</a>    
    <a href="Our%20Menu.html">OUR MENU</a>    
    <a href="">CONTACT</a>    
      
   
        </div> 
            </div>
        <span onclick="opennav()">&#8801;</span>
        </div>
        </div>
        </div>
        
        
                    <div class="xz">
    <div class="main">
        <div class="coll-2">
        <h2>Contact Us...</h2>
        </div>
        </div>
        </div>
        
      
        <div class="whole">
        <div class="page">
            
 
    <div class="mmss">
    <div class="message">
    <h1>Send Us Message</h1>
        <h5>Our team is happy to answer your question.Fill out the form and we'll be in touch as soon as possible.</h5>
        
        
            <form method="post">
        <div class="ff">        
        <h4>Name *</h4>
        <input type="text" name="name" placeholder="First" required>
        <input type="text" name="lastname" placeholder="Last" required>
          </div> 
                
        <div class="mess">        
        <h4>E-mail *</h4>
        <input type="email" name="email" required>

         <h4>message *</h4>
        <textarea name="message" required></textarea>
                </div>
            <button type="submit" class="mmb">Send Message</button>
    </form>
          </div>
        
        
        
    
      
        
        <div class="call">
        <div class="col-two">
        <div class="tack">
        <img src="imgss/caal.jpg" height="40px">
        <h2 style="color: #000080; margin-left: -10px;">Call Us</h2>    
        <h3>+91-8769543123 , +91-8769543123</h3><br>    
        <h3> (Office) +31 20 303 0521</h3>    
        </div>
        
         <div class="tack">
        <img src="imgss/email.jpg" height="40px">
        <h2 style="color: #000080; margin-left: -10px;">E-mail</h2>    
        <h3>Info@eldercareallies.nl</h3>     
        </div>
        </div>
        
        <div class="col-two">
         <div class="tack">
        <img src="imgss/addre.jpg" height="40px">
        <h2 style="color: #000080; margin-left: -10px;">Office Address</h2>    
             <h3>Office - A- 6th floor The Infrastructure </h3>    <h3>BusinessTower,Magic Road,</h3>
             <h3>Delhi-110009,INDIA.</h3>    
        <h3></h3>    
        </div>
        
         <div class="tack">
        <img src="imgss/hous.jpg" height="40px">
        <h2 style="color: #000080; margin-left: -10px;">Warehouse Address</h2>    
        <h3>Warehouse No. 04,Plot No.27,Lane</h3>   
        <h3>GD,Delhi,INDIA.</h3>    
        </div>
        </div>
          </div>
        
        </div>
<!--
        <div class="ii">
        <div class="iim">
        <div class="iin">    
       <h2 style="color: #000080;">For Leading Authorized Distributions</h2>
            <h2>Of Pharmacy Medicare And</h2> 
           <h2>Healthcare Products</h2>        
        </div>
        </div>
            </div>
-->
<!--            -------->

            </div>
            
                   <div class="ffd">
        <div class="write">
            <div class="row">
<div class="loj">
    <h1>Eldercare Allies...</h1>        
        </div>
    <div class="loj2">
   
        <div class="too">
      <img src="imgss/links%20(1).png" width="30px">  
        </div>
        <div class="too">
        <img src="imgss/links%20(4).png" width="30px">
        </div>
        <div class="too">
       <img src="imgss/links%20(2).png" width="30px"> 
        </div>
        <div class="too">
        <img src="imgss/links%20(5).png" width="30px">
        </div>
        </div>        
            </div> 
            <div class="lin">
            <h1></h1>
            </div>
       
<div class="ow">
    <div class="last3">
    <h1>About us</h1>
    <h3>We are dedicate to providing compassion and comprehensive care for senior citizens. our mission is to ensure that every senior in our comfort, and joy. Eldercare Allies for elders with specialized neesd, focused on conditions.</h3>
    <h6>READ MORE</h6> 
 <ul>© Eldercare Allies. All rights reserved. <br><br>   Develop By Divyansh Tiwari</ul>
    </div>
    <div class="last33">

    <h1>Quick Links</h1>
        <div class="nn">
    <div class="logic">
      <a href=""><h4>HOME </h4></a> 
     <a href=""><h4>ABOUT US </h4></a>
    <a href="contact.php"><h4>CONTACT US </h4></a> 

    </div>
        </div>
                    </div>            


         <div class="last3">

    <h2>Contact info</h2>
        <div class="nn">
    <div class="logic">
      <h4>CALL :</h4> 
     <h4>WRITE :</h4>
    <h4>FINDUS:</h4> 
        </div>  
        <div class="logicc">
        <h5>+31 20 303 0521</h5>
        <h5>Info@eldercareallies.nl</h5> 
<h5>Admiraal de Ruijterweg 468, 1055 NG Amsterdam,Mumbai</h5> 
        <h6 style="text-align: right;">READ MORE</h6>    
        </div>    
        </div>
    </div>
            
      
        </div>             
            
      
            </div>
        </div>        
            
    
            </div>
        </div>
        
        
<script>
function opennav(){
 document.getElementById("mynav").style.height="220px";
} 
    function closenav(){
document.getElementById("mynav").style.height="0";
}        
        </script>  
        
        
        
<script>
function opencity(event,cityname){
    var i, tabc, tablink;
    
tablink = document.getElementsByClassName("tablink");
for(i=0; i<tablink.length;i++){
    tablink[i].style.display="none";
} 
tabc = document.getElementsByClassName("tabc");
for(i=0; i<tabc.length;i++){
 tabc[i].className=tabc[i].className.replace=("active","");
} 
    
document.getElementById(cityname).style.display="block";
event.currentTarget.className+="active";    
}        
        
</script>   
        
        
                <script>
        var ffds = document.querySelectorAll('.write')
        window.addEventListener("scroll", mount)
               
        mount()
               
        function mount(){
            var qrs = window.innerHeight / 5 * 4
            
        ffds.forEach(nock=>{
            var boxtop = nock.getBoundingClientRect().top
            
            if(boxtop < qrs){
                nock.classList.add('show')
            }
            else{
                nock.classList.remove('show')
            }
        })    
        }       
        </script>
        

        
<!--        -------------------------->
    
</body>
</html>