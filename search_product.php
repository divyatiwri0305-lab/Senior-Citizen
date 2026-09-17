<?php
include('includes/connect.php');
include('functions/common_function.php');
include('config.php');
checkLogin();
//session_start();
?>


<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Eldercare Allies</title>
<!--       <script src="script.js" defer></script>-->
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
/*-----------------------------------------------*/
/*---------------------------------*/


/*----*/

/*-----*/

/*---------*/

/*-------------------------------our menu--------------*/

/*--*/

/*--*/


/*        ----------------------*/
        
        
    </style> 
    </head> 

    <body>
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
        
        
        
      
        <div class="whole">
        <div class="page">
            
        <?php
            search_customer();
            
            ?>
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