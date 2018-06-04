<?php session_start(); ?>

<!DOCTYPE html>
<html>
      <head>
      <link rel="stylesheet" type="text/css" href="DB/Contact_style.css">
      
      <link rel="stylesheet" type="text/css" href="style.css">
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
