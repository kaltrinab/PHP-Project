<?php session_start(); ?>

<!DOCTYPE html>
<html>
      <head>
      <link rel="stylesheet" type="text/css" href="DB/Contact_style.css">
<style type="text/css">
	
/*------------------------------------------*/
header {
    background-color: RGB(0,0,0);
    background-attachment: fixed;
    min-width:84em;
    min-height: 10em;

}
.im1{
    background:url('Fotot/img1.jpg');
    background-repeat:no-repeat;
    background-size:100% 100%;
    width:100%;
    height:100%;
        }
.im2{
      background:url('Fotot/img2.jpg');
      background-repeat:no-repeat;
      background-size:100% 100%;
      width:100%;
      height:100%;
    }
.im3{
  background:url('Fotot/img3.jpg');
  background-repeat:no-repeat;
  background-size:100% 100%;
  width:100%;
  height:100%;
    }
.im4{
  background:url('Fotot/img4.jpg');
  background-repeat:no-repeat;
  background-size:100% 100%;
  width:100%;
  height:100%;
    }

.im5{
  background:url('Fotot/img5.jpg');
  background-repeat:no-repeat;
  background-size:100% 100%;
  width:100%;
  height:100%;
    }



#imgheader{
  height:30%;
  width:30%;
  text-align:center;
}

/*Pjesa e logos se faqes per pjesen lart*/
img {
    height: 120px;
    width: 100px;
    max-width: 100%;
    image-orientation: inherit;
}
 /*Ju jep keto karakteristika te gjitha elementeve*/
* {
    margin: 0;
    padding: 0;
    line-height: 1;
    font-family:'Trebuchet ms';
}
/*--------------------------------------------*/
/*CSS per pjesen e menu-se*/
nav {min-width:84em;
    margin: 0 0 0 0;
    font-family: Arial;
    font-size: 100%;
    width: 100%;
    overflow: hidden;
    text-align: center;

}

    nav ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
        overflow: hidden;
        background-color: #232323;
        text-align: center;
        vertical-align: top;
    }

#nav li {
    display: inline-block;
    border-right: 2px solid;
    border-right-color: #3CC47C;
}

#nav a {
    display: block;
    color: white;
    text-align: center;
    width: 100px;
    padding: 10px;
    text-decoration: none;
      margin-left:-0.3em;
}

       
        
        form {
            overflow: auto;
            padding: 0;
        }
       



   /*---------------------------------------------------------------------------------*/
	  /*elementet paraqiten horizontalisht */
	.main-banner,
    .korniza {
        display: flex;
    }
	  /*Fotoja*/
	.main-banner {
        background: url("Foto/hotel_1.jpg") 100%;
        background-size: 100% 100%;
        min-height: 30em;
        max-height: 74.5vh;
        height:74.5vh;
        background-attachment: fixed;
        display: flex;
		z-index:2;
        background-repeat: no-repeat;
		min-width:84em;
    }
  /*Katroret mbi foto*/
	.outdoor, .emotions {
        padding: 24px;
        margin: 32px;
        background-color: rgba(0,0,0,.50);
        border: 1px solid white;
        border-radius: .5em;
        max-height: 150px;
    }
	.outdoor h1, .emotions h1 {
            font-size: 28.8px;
            color: white;
            margin-bottom: 6.4px;
    }
	.outdoor p {
            color: white;
            line-height: 22.4px;
    }
	.emotions p {
            color: white;
            line-height: 33.6px;
    }
  /*Kornizat poshte fotos*/
	.korniza {
        width: 70%;
        margin: 3% 13% auto;

    }
	.korniza p {
            width: 150px;
            border: 1px solid;
            margin: 20px;
            padding: 70px 0;
            text-align: center;
            border: none;
            color: white;
            font-weight: 600;
            font-family: cursive;
    }
 
    .drop {
        padding: 5px;
        font-size: 16px;
        border: none;
        cursor: pointer;
        background: -webkit-linear-gradient(#304352,#d7d2cc);
        background: -o-linear-gradient(#304352,#d7d2cc);
        background: -moz-linear-gradient(#304352,#d7d2cc); 
        background: linear-gradient(#304352,#d7d2cc); 
    }
	.dropdown-content {
        display: none;
        position: absolute;
        background: -webkit-radial-gradient(ellipse closest-side,#aba7af,#d7d2cc); 
        background: -o-radial-gradient(ellipse closest-side,#aba7af,#d7d2cc); 
        background: -moz-radial-gradient(ellipse closest-side,#aba7af,#d7d2cc); 
        background: radial-gradient(ellipse closest-side,#aba7af,#d7d2cc);
        min-width: 100px;
        height:123%;
        padding: 5px;
        cursor: pointer;
    }
	.dropdown:hover .dropdown-content {
        display: block;
    }
	.dropdown {
        position: relative;
        display: block;
    }



/*Vendosja e lartesise, gjatesise, pozicionimi, ngjyra e fontit, largesia nga top dhe z-index(pozicionimi ne raport me div elementet tjera)  */
footer
{
background-color: rgb(35,35,35);
position:relative;
width:100%;
color:white;
z-index:-1;
min-width:84em;
float:left;

}

#imglogo1
{
height:100%;
width:100%;
}


/*Div elementi qe duket si vije vertikale per ndarje te te dhenave(footer)*/
.vertical
{
height:10em;

margin-top:4.5%;
border-left:3px solid lightblue;
float:left;
margin-left:6%;
}

/*Div element ne te cilin eshte vendosur llogo(footer)*/
#logo1
{
float:left;
margin-left: 5%;
margin-top: 6.9%;
width:20%;
}
.tabela123{
    font-size:100%;
   width:100%;
}
/*Tabela(footer)*/
table,tr, th,td
{

margin-left:3%;
margin-top:0%;
padding:25px;
color:black;
padding-top:3%;
text-decoration:underline;
}


    #myBtn {
      display: none;
      position: fixed;
      z-index: 99;
      height:25px;
      width:25px;
      cursor: pointer;
      background: URL('Foto/TopPage.png') no-repeat;
      background-size: 25px,25px;
      bottom: 5%;
      right: 2%;
      transform: scale(2,2);
    }
    #myBtn:hover{
      opacity:0.8;
    }

    /*Div element per homeButton*/
    #homeButton
    {
    position: fixed;
      bottom: 3%;
      left: 1%;
    }
    #homeButton:hover{
      opacity:0.8;
    }

    nav ul li form input[type = text]{
      background-image:none;
      padding-left: 0;opacity:0.8;
    }
    nav ul li form input[type = text]:focus{
      background-image:none;
      padding-left: 0;opacity:1;
}

</style>      
     
        <meta charset="utf-8" />

            <link rel="icon" sizes="192x192" href="Foto/01.png">
             <title>IMPULSE</title>
          <script src="JScript.js"></script>
            <script>
                // Kur scroll posht 135 px vendose butonin TOP
                window.onscroll = function() {scrollFunction()};

                function scrollFunction() {
                    if (document.body.scrollTop > 135 || document.documentElement.scrollTop > 135) {
                        document.getElementById("myBtn").style.display = "block";
                    } else {
                        document.getElementById("myBtn").style.display = "none";
                    }
                }

                // Kur klikon butonin dergo ne top
                function topFunction() {
                    document.body.scrollTop = 0;
                    document.documentElement.scrollTop = 0;
                }
            </script>

			  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
			  	<script src="jquery-1.11.2.min.js"></script>
<script>
$(document).ready(function(){
                             $("footer").css("background-color","rgb(35,35,35)");
							 });
							 
							 
							 
$(document).ready(function(){
    $("#getj").click(function(){
        alert($("#getj").text());
    });
});


</script>			 
          <style>
 h1 {
    text-shadow: 1px 1px 2px #002933;
}
          </style> 


      </head>


      <body style="background-color:#ececec">


          <header>

              <img src="Foto/impulse.png" id="imgheader" alt="Impulse" style="margin-top:1.5%;margin-bottom:1.5%;margin-left:34.9%" />

          </header>
          <nav>
              <ul id="nav">

                  <li><a href="Rooms.php">Rooms</a></li>
                  <li><a href="Conference.php">Conference</a></li>
                  <li><a href="Tours.php">Tours</a></li>
                  <li><a href="Bistro.php">Bistro</a></li>
                  <li><a href="Booking.php">Booking</a></li>
                  <li><a href="Contact.php" id="exp">Contact</a></li>
                  <li><a href="Admin.php">Admin</a></li>
                  <li> <?php 
        if(!isset($_SESSION['var'])){
            header("Location: Contact.php");
        }
          
?>
</li>
                  

                  <li>

                  <li style="vertical-align:middle;">


                      <form action="https://www.google.com" method="GET" target="_blank" style=" border-radius:2px;background-color:#314a37;padding:4px; ">
                          <input type="text" placeholder="Search Location" name="q" style=" line-height: 22px;border:none;  cursor: pointer;border-radius:2px;font-family:sans-serif;font-style: normal;">
                          <input type="submit" value="Submit" ; style="box-shadow:1px 1px 0 #677B66;border:none; background: #C1DEC0;line-height:22px;  cursor: pointer;border-radius:2px;font-family:sans-serif;font-style: normal;">
                      </form>
                  </li>
              </ul>
          </nav>



          <section class="main-banner">
              <article class="outdoor">
                  <h1 style="text-align:center">What makes us unique </h1>
                  <p>
                      <br>
                      Guests love the effortless and relaxed atmosphere we create.
                      Flawless symbiosis of thoughtful and clever hardware,
                      wrapped in a cool and appealing message, and a dedicated team who just love to inspire
                      our guests and represent our unique product



                  </p>
              </article>


              <p id="op"></p>


          </section>
          <div class="hh" style="height:350px; background-color:#ececec; ">
              <div class="korniza">
                  <div class="dropdown">
                      <button class="drop"><p class="im1"></p></button>

                  </div>
                  <div class="dropdown">
                      <button class="drop"><p class="im2"></p></button>

                  </div>
                  <div class="dropdown">
                      <button class="drop"><p class="im3"></p></button>

                  </div>
                  <div class="dropdown">
                      <button class="drop"><p class="im4"></p></button>

                  </div>
                  <div class="dropdown">
                      <button class="drop"><p class="im5"></p></button>

                  </div>
              </div>
          </div>


         <?php require("DB/footer.php")?>
