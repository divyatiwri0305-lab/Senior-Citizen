<?php
include('includes/connect.php');
include('config.php');
//include('functions/common_function.php');
@session_start();

?>


<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Eldercare Allies</title>
       <script src="script.js" defer></script>
    <style>
    
    *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
     
        .tab button:active{
            color: #4242bc;
        }
.container{
    max-width: 1800px;
    margin: auto;
    user-select: none;
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
.abc{
background-image: linear-gradient(to left,rgb(0,0,0,.001),#203333 100%),url(imgss/victory.jpg);
background-size: cover;
background-position: center;
height: 650px;
display: flex;
}
.one{
    margin-top: 180px;
    margin-bottom: 200px;
}
.one h1{
    color: #ececec;
    font-size: 85px;
    margin-left: 40px;
    font-family: serif;
}
.one h2{
    color: #ececec;
    font-family: serif;
    font-weight: 300;
    font-size: 75px;
    margin-left: 40px;
}
.btnn{
    margin-left: 40px;
    padding: 17px 25px;
    font-size: 16px;
    letter-spacing: 2px;
    background: #897900;
    color: #fff;
    border: none;
    outline: none;
    border-radius: 10px;
    margin-top: 30px; 
    font-weight: bold;
    box-shadow: 0 4px 1px .01px rgba(255, 255, 255, 0.2); 
    cursor: pointer;
    transition: .5s;
}
.btnn:hover{
    transform: scale(1.03);
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
.two{
    flex-basis: 45%;
    min-width: 300px;
    margin: 20px;
}
.two img{
    width: 100%;
    margin-top: 130px;
    border-radius: 8px;
}
.ad{
    display: flex;
    align-items: center;
    margin-top: 50px;
}
.ad h2{
    font-size: 15px;
    font-family: sans-serif;
    letter-spacing: 2px;
    margin: 10px;
}
.two h1{
    font-size: 52px;
    margin-top: 30px;
    color: #3a3a3a;
}   
.two h5{
    height: 5px;
    width: 50px;
    background-color: orange;
    border-radius: 50px;
}
.two h4{
    color: #969696;
    font-family: cursive;
    font-size: 20px;
    letter-spacing: 1px;
    line-height: 25px;
    margin-top: 40px;
}
.bttnn{
    padding: 19px 24px;
    font-size: 12px;
    letter-spacing: 2px;
    background-color: #897900;
    color: #fff;
    border: none;
    outline: none;
    border-radius: 4px;
    margin-top: 60px; 
    font-weight: bold;
    box-shadow: 0 7px 1px .01px rgba(255, 255, 255, 0.2); 
    cursor: pointer;
    transition: .5s;
}
.bttnn:hover{
    transform: scale(1.03);
}
.vd{
    display: flex;
    align-items: center;
    justify-content: center;
}
.vd p{
    height: 5px;
    border-radius: 50px;
    margin-top: 50px;
    background:orange;
    width: 50px;
}
.nextone h2{
    text-align: center;
    font-size: 15px;
    font-family: sans-serif;
    letter-spacing: 2px;
    margin-top: 15px;
}
.nextone h1{
    font-size: 55px;
    text-align: center;
    font-weight: bold;
    margin-top: 20px;
    color: #101041;
}
.nextone h4{
    color: #464646;
    font-family: cursive;
    font-size: 20px;
    letter-spacing: 1px;
    line-height: 25px;
    margin-top: 30px;
    text-align: center;
}

.tab{
    margin-top: 20px;
    justify-content: center;
    display: flex;
}
.tab button{
    padding: 10px 12px;
    background: #897900 ;
    outline: none;
/*    border: none;*/
    font-weight: bold;
    font-size: 15px;
    cursor: pointer;
    height: 60px;
    margin: 5px 10px;
    border-radius: 10px;
    width: 200px;
    color: #fff;
    font-size: 18px;
}

.tablink{
    display: none;
}
        .sol{
            text-align: center;
            font-size: 55px;
            color: #101041;
        }
.cover{
    align-items: center;
    justify-content: space-around;
    flex-wrap: wrap;
}
.roow{
    display: flex;
    justify-content:space-around;
    flex-wrap: wrap;
    margin-top: 30px;
        width: 100%;
    align-items: center;

}
.loo2 h1{
    font-size: 35px;
    font-weight: bold;
    color: #101041;

/*    margin: 10px 40px;*/
}
        .loo2 button{
            padding: 10px 15px;
            margin-top: 30px;
            border-radius: 5px;
            border: none;
            background: #897900;
            color: #fff;
            font-size: 18px;
            transition: 0.5s;
        } 
        .loo2 button:hover{
            background: #605609;
        }
        .loo2 h3{
    font-size: 16px;
    color: #575757;
    font-family: cursive;
            margin-top: 20px;
 
/*    margin: 10px 40px;*/
}
.loo1{
    flex-basis: 40%;
    padding: 3px 40px;
    
}
.loo1 img{
     border-radius: 10px;       
}        
.loo2{
    flex-basis: 35%; 
/*    padding: 3px 40px;*/
/*        background: #000;*/
}
.vdv{
    justify-content: center;
    align-items: center;
    display: flex;
    margin-top: 20px;
}
.vdv p{
    height: 5px;
    border-radius: 50px;
    margin-top: 20px;
    background:orange;
    width: 100px;
    margin-bottom: 20px;
}
.zyc{
    background-image: linear-gradient(to left,rgb(0,0,1,.00001),#000 170%),url(imgss/pexels-kampus-7551617.jpg);
    background-size: cover;
    background-position: center;
    height: 550px;
    border-radius: 10px;
    margin: 20px;
    margin-top: 60px;
}
.aad{
    display: flex;
    align-items: center;
    margin-bottom: 20px;
}
.aad h5{
    width: 50px;
    height: 5px;
    background: orange;
    border-radius: 50px;
    margin-left: 30px;
    margin-top: 20px; 
}
.don{
    flex-basis: 68%;
    margin-left: 16px;
}
.don h1{
    color: #fff;
    font-size: 75px;
    margin-left: 20px;
    font-weight: bold;
}
.don h2{
    color: #e2e2e2;
    font-family: cursive;
    font-size: 14px;
    letter-spacing: 1px;
    line-height: 25px;
    margin-left: 20px;  
    margin-top: 20px;
}
.donn{
    flex-basis: 30%;
    background: #fff;
    height: 450px;
    margin-top: 50px;
    border-bottom-right-radius: 9px;
    border-top-right-radius: 9px;
}
.donn h1{
    font-size: 15px;
    font-weight: bold;
    font-family: sans-serif;
    margin-left: 50px;
    margin-top: 50px;
    color: #3d3d3d;
}
.donn h2{
    font-size: 27px;
    font-weight: bold;
    margin-left: 100px;
    margin-top: 17px;
    color: #3d3d3d;
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
    margin-bottom: 15px;
}
.loj h1{
    color: #fff;
    font-size: 24px;
    font-family: cursive;
}
.loo{
    flex-basis: 30%;
    margin-bottom: 15px;
}
.too img{
    cursor: pointer;
    margin: 2px;
/*    margin-bottom: 10px;*/
}
.loj2{
    display: flex;
/*    margin-top: 10px;*/
}
.lin h1{
    background: #b5b5b5;
    border: none;
    outline: none;
    height: 2px;
/*    margin: 0 20px;*/
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

/*----------------------------about us-------------------*/
/*    ------------------------------------------------*/

.above{
    background-image: linear-gradient(to left,rgb(0,0,0,.001),#203333 110%),url(imgss/ab1.jpg);
    background-size: cover;
    background-position: center;
    height: 500px;
    display: flex;
    justify-content: center;
}
.only h4{
    width: 40px;
    height: 4px;
    background: orange;
    text-align: center;
    border-radius: 25px;  
}
.now{
    display: flex;
    justify-content: center;
}
.only h5{
    color: #fff;
    font-size: 16px;
    text-align: center;
    margin-top: 20px;
    margin-bottom: 60px;
}
.only{
    margin-top: 110px;
    margin-bottom: 100px;
}
.only h1{
    text-align: center;
    color: #fff;
    font-size: 80px;
    font-family: serif;
    font-weight: bold;
    padding: 0 70px;
}
/*----*/

.noow{
    display: flex;
    justify-content: center;
}
.due h4{
    width: 40px;
    height: 4px;
    background: orange;
    text-align: center;
    border-radius: 25px; 
    margin-top: 40px;
}
.due h2{
    font-size: 16px;
    text-align: center;
    margin-top: 15px;
    font-size: 14px;
    color: #494949;
}
.due h1{
    font-size: 55px;
    font-family: serif;
    margin-top: 20px;
    color: #1f1f1f;
    font-weight: bold;
    text-align: center;
}
.stat{
    padding: 0 25px;
    letter-spacing: .2px;
    font-weight: 100;
}
.stat h1{
    font-size: 15px; 
    font-family: cursive;
    color: #828282;
    font-weight: 100;
    margin-bottom: 30px;
    line-height: 25px;
}
.stat h2{
    font-size: 15px; 
    font-family: cursive;
    color: #828282;
    font-weight: 100;
    margin-bottom: 30px;    
}
.stat h3{
    font-size: 15px; 
    font-family: cursive;
    color: #828282;
    font-weight: 100;
    text-align: center;
    margin-bottom: 30px;
    line-height: 25px;
}
.stat h5{
    font-size: 15px; 
    font-family: cursive;
    color: #828282;
    font-weight: 100;
    text-align: center;
    line-height: 25px;
}
/*---*/
.team{
    margin-top: 50px;
}
.team img{
    width: 100%;
    height: 550px;
    border-radius: 10px;
}
/*-----*/
.a1{
    display: flex;
    justify-content: center;
}
.a1 h3{
    width: 35px;
    background: orange;
    height: 4px;
    border-radius: 10px;
    margin-top: 50px;
}
.team2 h4{
    font-size: 16px;
    text-align: center;
    margin-top: 15px;
    font-size: 15px;
    color: #494949;
    letter-spacing: 1px;
}
.team2 h1{
    text-align: center;
    margin-top: 30px;
    font-family: serif;
    font-size: 55px;
    color: #101041;
    font-weight: bold;
}
.team2 h2{
    text-align: center;
    font-size: 15px;
    font-family: cursive;
    color: #828282;
    font-weight: 100;
    margin: 0 40px;
    margin-top: 30px;
    letter-spacing: .3px;
}
/*---------*/
.wow{
    display: flex;
/*    align-items: center;*/
    justify-content: space-around;
    flex-wrap: wrap;
    margin-top: 60px;
}
.col-33{
    flex-basis: 31%;
    min-width: 280px;
     box-shadow: 0 10px 10px 1px rgba(57, 57, 57, 0.2);
/*    border-radius: 6px;*/
    background: #ffff;
    height: 800px;
}
.col-33 img{
/*    width: 280px;*/
    height: 300px;
    border-top-left-radius: 6px;
    border-top-right-radius: 6px;
    width: 100%;
    vertical-align: middle;
    transition: all 0.6s ease;
}
.col-33 span{
    width: 100%;
    overflow: hidden;
    display: flex;
    border-top-left-radius: 6px;
    border-top-right-radius: 6px;
}
.col-33:hover img{
    transform: scale(1.07);
}
.col-333{
    flex-basis: 31%;
    min-width: 280px;
     box-shadow: 0 10px 10px 1px rgba(57, 57, 57, 0.2);
    border-radius: 6px;
    background: #ffff;
}
.col-333 img{
/*    width: 280px;*/
    height: 300px;
    border-top-left-radius: 6px;
    border-top-right-radius: 6px;
    width: 100%;
    vertical-align: middle;
    transition: all 0.6s ease;
}
.col-333 span{
    width: 100%;
    overflow: hidden;
    display: flex;
    border-top-left-radius: 6px;
    border-top-right-radius: 6px;
}
.col-333:hover img{
    transform: scale(1.07);
}
.col-33 h1{
    font-size: 27px;
    font-family: serif;
    text-align: center;
    margin-top: 30px;
}
.col-33 h2{
    text-align: center;
    margin-top: 20px;
    color: #828282;
    font-size: 15px;
    font-family: cursive;
    font-weight: 100;
    letter-spacing: 1px;
    margin: 10px;
    line-height: 27px;
}
.col-333 h1{
    font-size: 27px;
    font-family: serif;
    text-align: center;
    margin-top: 30px;
}
.col-333 h2{
    text-align: center;
    margin-top: 20px;
    color: #828282;
    font-size: 15px;
    font-family: cursive;
    font-weight: 100;
    letter-spacing: 1px;
    margin: 10px;
    line-height: 27px;
    margin-bottom: 30px;
}
/*-------------------------------our menu--------------*/
.menus h1{
    text-align: center;
    font-size: 45px;
    color: #2e2e2e;
    margin-top: 30px;
    font-family: serif;
}
.goa{
    display: flex;
    justify-content: space-around;
    flex-wrap: wrap;
}
.col22{
      flex-basis: 50%;
    min-width: 450px;
}
.col22 img{
    max-width: 100%;
    padding-left: 20px;
    margin-top: 30px;
}
/*--*/
.info{
    justify-content: center;
}
.info h1{
    text-align: center;
    font-size: 60px;
    font-family: serif;
    margin-top: 50px;
    font-weight: bold;
    color: #393939;
}
.gooa{
    display: flex;
    align-items: center;
    justify-content: space-around;
    flex-wrap: wrap;
}
.col3{
    flex-basis: 33%;
    min-width: 300px;
    text-align: center;
}
.col3 img{
    max-width: 100px;
    height: 80px;
    margin-top: 20px;
}
.col3 h2{
    font-family: serif;
    margin-top: 30px;
    font-size: 30px;
    color: #2e2e2e;
}
.col3 h3{
    font-family: cursive;
    font-size: 16px;
    color: #6f6f6f;
    font-weight: 100;
    margin-top: 20px;
}
/*--*/
.zycc{
    background-image: linear-gradient(to left,rgb(0,0,1,.00001),#000 170%),url(imgss/menu1.jpg);
    background-size: cover;
    background-position: center;
    height: 550px;
    border-radius: 10px;
    margin: 20px;
    margin-top: 60px;
}
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
/*----------------------------Slider------------------*/
        .wrapper {
  max-width: 1350px;
  width: 100%;
  position: relative;
  margin: 40px;
       margin-top: 70px;         

}
.wrapper i {
  top: 50%;
  height: 50px;
  width: 50px;
  cursor: pointer;
  font-size: 1.25rem;
  position: absolute;
  text-align: center;
  line-height: 50px;
  background: #fff;
  border-radius: 50%;
  box-shadow: 0 3px 6px rgba(0,0,0,0.23);
  transform: translateY(-50%);
  transition: transform 0.1s linear;
}
.wrapper i:active{
  transform: translateY(-50%) scale(0.85);
}
.wrapper i:first-child{
  left: -22px;
}
.wrapper i:last-child{
  right: -22px;
}
.wrapper .carousel{
  display: grid;
  grid-auto-flow: column;
  grid-auto-columns: calc((100% / 3) - 12px);
  overflow-x: auto;
  scroll-snap-type: x mandatory;
  gap: 16px;
  border-radius: 8px;
  scroll-behavior: smooth;
  scrollbar-width: none;
}
.carousel::-webkit-scrollbar {
  display: none;
}
.carousel.no-transition {
  scroll-behavior: auto;
}
.carousel.dragging {
  scroll-snap-type: none;
  scroll-behavior: auto;
}
.carousel.dragging .card {
  cursor: grab;
  user-select: none;
}
.carousel :where(.card, .img) {
  display: flex;
  justify-content: center;
  align-items: center;
}
.carousel .card {
  scroll-snap-align: start;
  height: 400px;
  list-style: none;
  background: #ac9f09;
  cursor: pointer;
  padding-bottom: 15px;
  flex-direction: column;
  border-radius: 8px;
}
.carousel .card .img {
  background: #8B53FF;
  height: 198px;
  width: 198px;
  border-radius: 50%;
}
.card .img img {
  width: 190px;
  height: 190px;
  border-radius: 50%;
  object-fit: cover;
  border: 4px solid #fff;
}
.carousel .card h2 {
  font-weight: 500;
  font-size: 1.56rem;
  margin: 30px 0 5px;
    color: #fff;
}
.carousel .card a{
    color: #fff;
  background: #371465;
    padding: 10px;
    text-decoration: none;
    border-radius: 4px;
    font-family: cursive;
    transition: .5s;
}
        .carousel .card a:hover{
            background: #441780;
            color: #c4c4c4;
        }        

@media screen and (max-width: 900px) {
  .wrapper .carousel {
    grid-auto-columns: calc((100% / 2) - 9px);
  }
}

@media screen and (max-width: 600px) {
  .wrapper .carousel {
    grid-auto-columns: 100%;
  }
}
/*        ----------- col-2----------*/
        
        .wrap{
            display: flex;
            align-items: center;
            justify-content: center;
            flex-wrap: wrap;
        }
        
        .image{
    flex-basis: 30%;
    width: 470px;
    margin: 2px 20px;
    height: 450px;
    border: 1px solid #000;
    border-radius: 10px;
    margin-top: 20px;
}
.image h1{
    text-align: center;
    margin-top: 20px;
    font-family: serif;
    font-size: 30px;
    color: #101041;
}
.image h2{
    text-align: center;
    margin-top: 20px;
    font-family: cursive;
    font-size: 20px;
    color: #818181;
}
.image img{
    width: 100%;
    height: 300px;
    vertical-align: middle;
    transition: 1s;
}
.image  span{
    display: flex;
    overflow: hidden;
    width: 100%;
    border-top-right-radius: 10px;
    border-top-left-radius: 10px;
}
.image :hover img{
    transform: scale(1.1);

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
    <a href="home.php">HOME</a>    
<!--    <a href="About%20us.html">ABOUT US</a>    -->
<!--    <a href="">OUR MENU</a>    -->
    <a href="contact.php">CONTACT US</a>    
      
   
        </div> 
            </div>
        <span onclick="opennav()">&#8801;</span>
        </div>
        </div>
        </div>
        
        
        <div class="abc">
        <div class="one">
       <h1>Supporting<br>Senoir Citizens</h1>
            <h2>and Their Needs</h2>
        <a href="contact.php"><button type="submit" class="btnn">CONTACT US</button></a>
        </div>
        </div>    
      
        <div class="whole">
        <div class="page">
            
        
<!--            -------->
            
     
            
            <div class="twos">
         <div class="two">
         <img src="imgss/pexels-olly-3768131.jpg">   
            </div> 
            <div class="two">
                <div class="ad">
                <h5></h5>
             <h2>ABOUT US</h2>
                </div>
         <h1>Eldercare Allies </h1>
         <h4>We are dedicate to providing compassion and comprehensive care for senior citizens. our mission is to ensure that every senior in our comfort, and joy. <br><br>Eldercare Allies for elders with specialized neesd, focused on conditions.</h4>
       <button type="submit" class="bttnn">READ MORE</button>            
            </div>
            </div>
<!--            ----------------------->
            
    <div class="nextone">
        <div class="vd">
       <p></p> 
        </div>
        <h2>FEATURES</h2>
        <h1>Why people choose us?</h1>
        <h4>Senior citizens require tailored supports services to enhance their quality of life and ensure their well-being.</h4>
            </div>   
<!--      ---------------------      -->
                     <div class="wrap">
      <div class="image">
          <span><img src="imgss/pexels-olly-3768146.jpg" alt=""></span>
          <h1>Home Care</h1>
            <h2>Personalize assistance in daily living activities.</h2>
        </div>
      <div class="image">
          <span><img src="imgss/pexels-shkrabaanthony-7345465.jpg" alt=""></span>
            <h1>Community Resources</h1> 
         <h2>Program offering social engagement and support.</h2>
        </div>
      <div class="image">
          <span><img src="imgss/pexels-kampus-7551686.jpg" alt=""></span>
              <h1>Health Services</h1>
        <h2>Access to healthcare and wellness.</h2>
        </div>
      
  </div>
<!--
  <div class="preview-box">
    <div class="details">
      <span class="title">Image <p class="current-img"></p> of <p class="total-img"></p></span>
      <span class="icon fas fa-times">&times;</span>
    </div>
    <div class="image-box">
      <div class="slide prev"><i class="fas fa-angle-left">&#10094;</i></div>
      <div class="slide next"><i class="fas fa-angle-right">&#10095;</i></div>
      <img src="" alt="">
    </div>
  </div>
-->
<!--  <div class="shadow"></div>-->
            

            
<!--       ------------------------     -->
    <div class="cover"> 
    <div class="vdv">
    <p></p>
    </div>
 <h1 class="sol">Solutions for Every Senior’s Needs</h1>
    <div class="tab">
        <button class="tabc" onclick="opencity(event,'paris')"><active>Home health care</active></button>        
<button class="tabc" onclick="opencity(event,'london')"><active>Health supports</active></button>        
<button class="tabc" onclick="opencity(event,'tokyo')"><active>Medical equipment & device</active></button>        
<button class="tabc" onclick="opencity(event,'kingdom')"><active>Lab & diagnostics</active></button>        
<button class="tabc" onclick="opencity(event,'united')"><active>Convenience</active></button>        
<button class="tabc" onclick="opencity(event,'state')"><active>Tele consultation</active></button>        
            </div>
            
    <div class="row">        
<div class="tablink" id="paris" style="display: block;">
   
    <div class="roow">
    <div class="loo2">
    <h1>Home health care</h1>    
    <h3>Vaccination at home administered by trained staff. Nutrition programs by expert dieticians. Prompt ambulance & hospitalisation services</h3>
            <a href="contact.php"><button>CONTACT US</button></a>    
        </div>
    <div class="loo1">
    <img src="imgss/pexels-kampus-7551686.jpg" width="500px" height="300px">
        </div>

    </div>

            </div>
        
        
    <div class="tablink" id="london">
    <div class="roow">
    <div class="loo2">
    <h1>Health support</h1>    
    <h3>Get 24/7 emergency medical support. On-call emergency doctors. Help Desk designed for seniors.</h3> 
            <a href="contact.php"><button>CONTACT US</button></a>    
        </div>
    <div class="loo1">
       <img src="imgss/pexels-n-voitkevich-7235810.jpg" width="500px" height="300px">
        </div>

    </div>   
            </div>   
        
        
    <div class="tablink" id="tokyo">
    <div class="roow">
        <div class="loo2">
   <h1>Medical equipment & devices</h1>    
    <h3>Access at-home medical equipment to make elders’ lives easier and safer. Cost-effective devices for on-time medical alerts. Choose from digital thermometers, oxygen cylinders, BP instruments, CPAP & more</h3> 
                <a href="contact.php"><button>CONTACT US</button></a>
        </div>
    <div class="loo1">
      <img src="imgss/pexels-olly-3768131.jpg" width="500px" height="300px">
        </div>
    </div>  
            </div>
        
        <div class="tablink" id="kingdom">
    <div class="roow">
        <div class="loo2">
   <h1>Lab & diagnostics</h1>    
    <h3>Get access to a host of tests at your doorstep. All types of lab tests available from renowned labs and diagnostic centres. Keep a detailed record of all the tests in one place.</h3> 
            <a href="contact.php"><button>CONTACT US</button></a>
        </div>
    <div class="loo1">
      <img src="imgss/plan.jpg" width="500px" height="300px">
        </div>
    </div>  
            </div>
       <div class="tablink" id="united">
    <div class="roow">
        <div class="loo2">
   <h1>Convenience</h1>    
    <h3>Simplify the lives of your elders so they can enjoy their golden years to the fullest. Get travel assistance, book cabs, hire drivers, care buddies, banking support & more. All the services are catered by trained and trustworthy professionals.</h3> 
                       <a href="contact.php"><button>CONTACT US</button></a>
        </div>
    <div class="loo1">
      <img src="imgss/lay-3.jpg" width="500px" height="300px">
        </div>
    </div>  
            </div>
       <div class="tablink" id="state">
    <div class="roow">
        <div class="loo2">
   <h1>Tele consultation</h1>    
    <h3>Consult a doctor from the comfort of your own home. Tele consultations with geriatric medical specialists. Complete check-ups by expert radiologists, physiotherapists & more.</h3> 
            <a href="contact.php"><button>CONTACT US</button></a>
        </div>
    <div class="loo1">
      <img src="imgss/plann.jpg" width="500px" height="300px">
        </div>
    </div>  
            </div>
        </div>
            </div>
            
            
<!--            -----slider------>
 <div class="wrapper"> 
                  <?php
    $select_query="Select * from `customers` order by rand()";
      $result_query=mysqli_query($con,$select_query);
          ?>
     
                  
      <i id="left" class="fa-solid fa-angle-left">&#10094;</i>
                 <ul class="carousel">
                     
            <?php
 while($row=mysqli_fetch_assoc($result_query)){
     $customer_id=$row['customer_id'];
     $customer_name=$row['customer_name'];
     $customer_age=$row['customer_age'];
    $customer_photo=$row['customer_photo'];
            ?>
         
        <li class="card">
          <div class="img">
        <img src="./imgss/<?php echo $customer_photo; ?>" alt="<?php echo $customer_name; ?>" draggable="false">
            </div>
          <h2>Name: <?php echo $customer_name; ?></h2>
            <a href="product_details.php?customer_id=<?php echo $customer_id; ?>" class="btnviw">View Details</a>
            </li>
         <?php } ?>
      </ul>
      <i id="right" class="fa-solid fa-angle-right">&#10095;</i>
                             </div> 

                 
<!--  -----------------------------------          -->
     <div class="zyc">
        <div class="row"> 
      <div class="don">
               <div class="aad">
                <h5></h5>
             <h2>ABOUT US</h2>
                </div>
<h1>Working <br>hours</h1>
 <h2>We are dedicate to providing compassion and comprehensive care for senior citizens. our mission is to ensure that every senior in our comfort, and joy.</h2>
        <a href="contact.php"><button type="submit" class="btnn">CONTACT US</button></a>      
         </div>  
            
        <div class="donn">
<h1>MONDAY TO TUESDAY</h1>
        <h2>16 : 00</h2>
        <h2>22 : 30</h2>
<h1>WEDNESDAY CLOSED</h1> 
        <h1>THURSDAY TO SUNDAY</h1>
        <h2>16 : 00</h2>
        <h2>22 : 30</h2>
         </div>  
            </div>
            </div>
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
 document.getElementById("mynav").style.height="140px";
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
        
        
        <script>
        const wrapper = document.querySelector(".wrapper");
const carousel = document.querySelector(".carousel");
const firstCardWidth = carousel.querySelector(".card").offsetWidth;
const arrowBtns = document.querySelectorAll(".wrapper i");
const carouselChildrens = [...carousel.children];

let isDragging = false, isAutoPlay = true, startX, startScrollLeft, timeoutId;

// Get the number of cards that can fit in the carousel at once
let cardPerView = Math.round(carousel.offsetWidth / firstCardWidth);

// Insert copies of the last few cards to beginning of carousel for infinite scrolling
carouselChildrens.slice(cardPerView).reverse().forEach(card => {
    carousel.insertAdjacentHTML("afterbegin", card.outerHTML);
});

// Insert copies of the first few cards to end of carousel for infinite scrolling
carouselChildrens.slice(0, cardPerView).forEach(card => {
    carousel.insertAdjacentHTML("beforeend", card.outerHTML);
});

// Scroll the carousel at appropriate postition to hide first few duplicate cards on Firefox
carousel.classList.add("no-transition");
carousel.scrollLeft = carousel.offsetWidth;
carousel.classList.remove("no-transition");

// Add event listeners for the arrow buttons to scroll the carousel left and right
arrowBtns.forEach(btn => {
    btn.addEventListener("click", () => {
        carousel.scrollLeft += btn.id == "left" ? -firstCardWidth : firstCardWidth;
    });
});

const dragStart = (e) => {
    isDragging = true;
    carousel.classList.add("dragging");
    // Records the initial cursor and scroll position of the carousel
    startX = e.pageX;
    startScrollLeft = carousel.scrollLeft;
}

const dragging = (e) => {
    if(!isDragging) return; // if isDragging is false return from here
    // Updates the scroll position of the carousel based on the cursor movement
    carousel.scrollLeft = startScrollLeft - (e.pageX - startX);
}
   
const dragStop = () => {
    isDragging = false;
    carousel.classList.remove("dragging");
}

const infiniteScroll = () => {
    // If the carousel is at the beginning, scroll to the end
    if(carousel.scrollLeft === 0) {
        carousel.classList.add("no-transition");
        carousel.scrollLeft = carousel.scrollWidth - (2 * carousel.offsetWidth);
        carousel.classList.remove("no-transition");
    }
    // If the carousel is at the end, scroll to the beginning
    else if(Math.ceil(carousel.scrollLeft) === carousel.scrollWidth - carousel.offsetWidth) {
        carousel.classList.add("no-transition");
        carousel.scrollLeft = carousel.offsetWidth;
        carousel.classList.remove("no-transition");
    }

    // Clear existing timeout & start autoplay if mouse is not hovering over carousel
    clearTimeout(timeoutId);
    if(!wrapper.matches(":hover")) autoPlay();
}

const autoPlay = () => {
    if(window.innerWidth < 900 || !isAutoPlay) return; // Return if window is smaller than 800 or isAutoPlay is false
    // Autoplay the carousel after every 2500 ms
    timeoutId = setTimeout(() => carousel.scrollLeft += firstCardWidth, 2500);
}
autoPlay();

carousel.addEventListener("mousedown", dragStart);
carousel.addEventListener("mousemove", dragging);
document.addEventListener("mouseup", dragStop);
carousel.addEventListener("scroll", infiniteScroll);
wrapper.addEventListener("mouseenter", () => clearTimeout(timeoutId));
wrapper.addEventListener("mouseleave", autoPlay);
        </script>
        
        
        
<!--        ------Live notification----------->

         <script>
    if (Notification.permission !== "granted") {
        Notification.requestPermission();
    }

    function checkNotifications() {
        fetch("check_notifications.php")
            .then(res => res.json())
            .then(data => {
                console.log(data); // Debugging
                data.forEach(msg => {
                    new Notification("Reminder", {
                        body: msg,
                        icon: "https://cdn-icons-png.flaticon.com/512/992/992700.png"
                    });
                });
            })
            .catch(err => console.error(err));
    }

    setInterval(checkNotifications, 5000); // Every 5 sec for testing
    checkNotifications();
  </script>
<!--        -------------------------->
    </body>
</html>