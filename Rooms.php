
<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8" />
 <!--logo ne tab -->
 <link rel="icon" sizes="192x192" href="Foto/01.png">
 <title>IMPULSE</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<style>
/*------------------------------------------*/
header {
    background-color: RGB(0,0,0);
    background-attachment: fixed;
    min-width:84em;
    min-width: 10em;

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
    min-height:2.25em;
     
}

    nav ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
        overflow: hidden;
        background-color: #232323;
        text-align: center;
        vertical-align: top;
        min-height:2.25em;
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


#nav li a:hover[href="Bistro.php"]{

  background-color: #A0522D;
}
#nav li a[href="Rooms.php"]{
opacity:0.9;
  background-color: #86B404;
  margin-left:0;
}
#nav li a[href="Rooms.php"]{
  margin-left:0;
}
#nav li a:hover[href="Booking.php"]{
opacity:0.9;
  background-color: #088A4B;
}
#nav li a:hover[href="Contact.php"]{
opacity:0.9;
  background-color:  #2E9AFE;
}
#nav li a:hover[href="Conference.php"]{
opacity:0.9;
  background-color:#04B4AE;
}
#nav li a:hover[href="Tours.php"]{
opacity:0.9;
  background-color:#2ECCFA;
}



form {
    overflow: auto;
    padding: 0;
}
/*Vija ne anen e majte te femijes se pare*/
#nav li:first-child {
    border-left: 2px solid;
    border-left-color: #3CC47C;
}
    /*Vija ne elementin e fundit te listes te mos shfaqet*/
#nav li:last-child {
    border-right: none;
}


   /*---------------------------------------------------------------------------------*/
	

/*-----------------------------------------------------------------------------------------------------------------------------------------------*/

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


*{
font-family:'Trebuchet ms'
}






.box1{
    width:100%;
    height:250px;
    margin:0 auto;
    clear:right;
    margin-top:30px;
    
}
.kutia1{
    width:250px;
    height:317px;
    margin-left:100px;
    float:left;
}
.button1{
    background-color: #bdc3c7;
    border: none;
    color: white;
    padding: 15px 22px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
  border-radius:10px;
  }

</style>
<?php require("DB/header.php") ?>

	<div class="box1" style="margin-left:90px;">
    <div class="kutia1">
        <a href="#"><img src="Fotot/room1.jpg" alt="Fuchsia" style="width: 250px; height: 120px"></a>
       <?php
        $text=array ('It','is', 'all','modern', 'room', 'for', 'the', 'modern', 'couples.');
        echo implode(" ",$text);
        ?>
        <p>The view is behind the biggest park in Switzerland. The room in modern too,there is sauna, SPA and all the modern things you need. Enjoy it to the fullest. Room reservation it's available too for the breakfast</p>
       <a href="read.php" class="button1" style="color:black">See More</a>
    </div>
    <div class="kutia1" style="margin-left:109px;">
        <a href="#"><img src="Fotot/room2.jpg" style="width: 250px; height: 120px"></a>
        <?php
    $string = 'A wonderful image of the sea in front of you when you wake up. The designed is old fashioned because of the furnitures that are made of real tree. From the bathroom it is that view too. Enjoy it!';
    $words[0] = '/wonderful/';
    $words[1] = '/image/';
    $words[2] = '/sea/';
    $replacements[2] = 'perfect';
    $replacements[1] = 'view';
    $replacements[0] = 'mountains';
    echo preg_replace($words, $replacements, $string);
    ?>
        
        <br><a href="write.php" class="button1" style="color:black">See More</a>
    </div>

    <div class="kutia1" style="margin-left:109px;">
        <a href="#"><img src="Fotot/room3.jpg" style="width: 250px; height: 120px"></a>

        <p> Large Upstairs Private Room in two story house. Views to the mountains. Feels comfortable. Stunning views of the country Switzerland. Dining area with seating for four. Italian marble bath with twin sinks,jetted SPA TUB and seperate shower.</p>
      <a href="" class="button1" style="color:black">See More</a>
    </div>

</div>
<div class="box1" style="margin-left:90px;">
    <div class="kutia1">
        <a href="#"><img src="Fotot/room4.jpg" alt="Fuchsia" style="width: 250px; height: 120px "></a>
       
        <p>Big room with two bed. There is a TV with all the perfect stories you need to hear. There are flowers with beautiful colors,everything in it you will love. Bathroom is big too,there is sauna and SPA too.</p>
       <a href="" class="button1" style="color:black; margin-top:38px;">See More</a>
    </div>
    <div class="kutia1" style="margin-left:109px;">
        <a href="#"><img src="Fotot/room5.jpg" style="width: 250px; height: 120px"></a>
       
        <p>If you are a couple and want to spend the weekend here this rooms it's so good and comfortable. You can relax and have fun because is decorated with light colors:white and brown. Bathroom it's not to big,there is sauna.</p>
        <a href="" class="button1" style="color:black">See More</a>
    </div>

    <div class="kutia1" style="margin-left:109px;">
        <a href="#"><img src="Fotot/room6.jpg" style="width: 250px; height: 120px"></a>
        
        <p> This is family room and perfect for your family. Everything you need is there.It is designed with Italian mode furniture, it's all about your taste. Bathroom is Italian mode too,it is big and awesome too. There is SPA.</p>
        <a href="" class="button1" style="color:black; margin-top:20px;">See More</a>
    </div>

</div>
   
   
<?php require("DB/footer.php") ?>