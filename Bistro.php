
<!DOCTYPE html>
<html>

<head>
 <meta charset="utf-8" />
 <!--logo ne tab -->
<link rel="icon" sizes="192x192" href="Foto/01.png">
 <title>IMPULSE</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="jquery-1.11.2.min.js"></script>

<script>
$(document).ready(function(){
    $(".clicktips").click(function(){
        $(".tipsid").slideToggle("slow");

    });
});
$(document).ready(function(){
    $(".clicktips1").click(function(){
        $(".tipsid1").slideToggle("slow");
    });
});
$(document).ready(function(){
    $(".clicktips2").click(function(){
        $(".tipsid2").slideToggle("slow");
    });
});
</script> 
<style>


*{
font-family:'Trebuchet ms'
}
nav ul li form input[type = text]{

  padding-left: 0;
  opacity: 0.8;
}
nav ul li form input[type = text]:focus{

  padding-left: 0;
  opacity: 1;
}
.tipsid, .clicktips {
    background-color:  rgba(200,180,192,0.4);
    border: none;
  
    width:95%;
    margin-left:2%;
  
}


.tipsid {
    margin-left:2%;
    background:url(images/breakfast.jpg);
    display: none;
    border-radius:1%;
    width:95%;
    color: white;
    height: 500px;
  margin-top:-3.8%;
}
 .clicktips1,.clicktips2 {
    background-color: rgba(200,180,192,0.4);
    border: none;
    height:10%;
    width:95%;
    margin-left:2%;
  
}
.tipsid1 {
  background:url(images/dinne.jpg);
    margin-left:2%;
    display: none;
    border-radius:1%;
    width:95%;
  margin-top:-3.8%;
}
.tipsid2 {
  background:url(images/cake.jpg);
    margin-left:2%;
    display: none;
    border-radius:1%;
    width:95%;
  margin-top:-3.8%;
}
#test div
{
  position:relative;
  width:400px;
  height:350px;
  text-align:center;
  transform:translateX(100%);
  animation: test 10s ease-out infinite;
  float:left;
  margin-left:-30%;

}




/* style brenda body */


#article{
 max-width:  100%;
 
}
#main-section
{
 float: left;
 margin: 5%;
 width: 40%;
 height: 100%;
 padding: 5%;
 margin-left:15%;
 margin-right: 0%;

color:white;
font:tahoma;
 border-radius: 15px;

 background-color:rgba(200,180,192,0.4);



}
#second-section
{ 
 
width: 40%;
float: left;
height: 70%;
 padding: 5%;
 }

aside 
{
  float: right;
  width: 40%;
  height: 70%;

}
#asideofarticle
{
    background-color: red;
  float: right;
  width: 20%;
  height:50.9em;
  margin-top: 5%;
  margin-right:9%;
  margin-left:0%;
  padding: 1%;
  border-radius: 15px;
  color:white;
  background-color: rgba(200,180,192,0.4);
}
img
{ 
   width: 100%;
   height: 100%;

 }
 #imgshefi
 {
  width: 88%;
  height: 80%;
margin-top: 20%;

 }
 #imgmenu
{
  margin-top: 20%;
 
   width: 88%;
  height: 60%;
}
#paragrafetanash
{
  margin: 10%;
}

</style>
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
</head>

<body style="background-color:#ececec;">


<div class="header">
<?php include 'DB\header.php';?>
</div>



    <section id="article">
       <div id="main-section">
           <p id="paragrafet ">

           In the kitchen, head chef Robin Gesang-Gottowt and his kitchen team have composed a modern bistro menu where the ingredients are in focus and where we mix classical and modern techniques. Our ambition is to cook good food with a high recognition factor that we would like to eat ourselves. We want to be a bistro that we would like to visit and return to ourselves and create an experience for both the eye and the palate.
           </p>
            <section id="second-section">
          <h2> Bistro decor</h2>
          <p id="paragrafet ">

            Banquettes, a lot of red velvet, soft lighting from Spanish-designed lamps. The original silver columns from 1937 have been restored and our guests love the warm interior.
          </p>
          <img src="images/bistro1.jpg" height="20px" width="100%" />
          <p id="paragrafet ">
            Unique photography by Ulla Montan is on display at the far end of the bistro, depicting local cultural profiles.</p>
          <img src=" images/bistro2.jpg" width="100%" height="20px"/>
          <p>   Our complete assortment of selected wines is also served by the glass. Ask our sommelier for the perfect wine pairing for your meal.</p>
          <?php
          class wine
          {
          
          public function __set($property, $value)
          {
              if ($value > 0)
              {
              $this->property= $value;
              }
              }
          public function __get($property)
          {
          return "You will be " . $this->property . "% pleased.";
          }
          
          }
          
          $wine1= new wine;
          
          $wine1->percentage= 100;
          
          echo $wine1->percentage;
          ?>
              
               </section>
         
            <aside id="aideofsecond-section ">
                  <img src=" images/bistro3.jpg"  id="imgshefi" />
                  <h6>Robin Gesang-Gottowt, head chef</h6>
                  <img src="images/bistro4.jpg" id="imgmenu" />
               </aside  > 

       </div>
      
       <aside id="asideofarticle" > 
       
            <h4 align="center"> Book table </h4>
            <p id="paragrafetanash"> Book table in our online booking   system </p>
            <P id="paragrafetanash"> Give Rival as a gift<br/>
Rival voucher is the perfect gift to your friend, colluege or lover</P>
               <p id="paragrafetanash">
                 Book</p>
                 <p id="paragrafetanash"> bistro@rival.se</p>

                        <p id="paragrafetanash">    Head waiter</p>
                         <p id="paragrafetanash">   +46 (0)8-545 789 15</p>
                          <p id="paragrafetanash">  +46 (0)8-545 789 45 </p>
                            <p id="paragrafetanash"> Food & Beverage Manager</p>
 <?php
              function get_valid_email( $email )
               {
              $regex = '/^([*+!.&#$¦\'\\%\/0-9a-z^_`{}=?~:-]+)@(([0-9a-z-]+\.)+[0-9a-z]{2,4})$/i';
                return preg_match($regex, trim($email));
              }
              $emails= array ('tobias.wikberg@rival.se');
              foreach( $emails as $email ) {


              if( get_valid_email( $email ) ) {
              echo  $email;
              }

              else {
              echo "Invalid Email: " . $email;
              }}
              ?>
                        
            
             </aside>  
            
      </section>

    
<div style="background-color:#ececec; width:100%;min-width:84em; float:left;margin-bottom: 10px; ">
       <div style="margin-left:12%; width:76%;min-width:48.8em; float:left;">
        
 

 

</p>
        <br />
        
        <style type="text/css">
          
    .outdoor{
        max-width: 390px;
        background-color: rgba(0, 0, 0, 0.7);
        border: 1px solid white;
        border-radius: .5em;
        
    }
        </style>

<pre class="clicktips"  style="border-radius:5px;height:50px;text-align:center;cursor:pointer;color: black;">
   
  <b>Breakfast Menu </b></pre>
   <pre class="tipsid" style="background:url(images/breakfast.jpg);">
  <center>
 <ul class="outdoor" style="text-align: center; list-style:none;">
  <?php

$input2 = "Apple and Cheddar Tartine <br/>,Oatmeal With Apricots and Raisins<br/>,Mushroom and Egg White Omelet<br/>,French Toast With Raspberry Syrup <br/>,Yogurt With Grapes and Granola<br/>,Scrambled Egg Tacos";

print_r (explode(",",$input2));
?>


  <!--<li>Apple and Cheddar Tartine</li>
  <li>Oatmeal With Apricots and Raisins</li>
  <li>Mushroom and Egg White Omelet</li>
  <li>Waffles With Nut Butter and Bananas</li>
  <li>Scrambled Egg Tacos</li>
  <li>Toast With Yogurt and Smoked Salmon</li>
  <li>Yogurt With Grapes and Granola</li>
  <li>French Toast With Raspberry Syrup</li>-->

 </ul>
</center>
   </pre>


    <pre class="clicktips1"  style="border-radius:5px;height:50px;text-align:center;cursor:pointer;margin-top: 15px;">
   
   <b>Dark Menu</b></pre>
   <pre class="tipsid1" style="height:650px;background-color:rgb(153, 100, 75)">
   <div id="test">
        
  <center>
 <ul class="outdoor" style="text-align: center; list-style:none; color: white;">
  <?php
$names = "Taco De Pescado, Mussels  Frites, Crispy and Brussels Sprout Salad, Pizza , Smoked Brisket, Grande Salumi Formaggi Platter,Patatas Bravas, CHICKEN POT PIE,HOT TURKEY PLATE"; 
$food = preg_split ("/[\s,]+/", $names); 
print $food[0];
print $food[1];
print $food[2];
echo "<br /><br />";
print $food[3];
print $food[4];
echo " <br /><br />"  ;
print $food[5];
print $food[6];
print $food[7];
print $food[8];
print $food[9];
echo " <br /><br /> ";
print $food[10];
echo " <br /><br />";
print $food[11];
print $food[12];
echo " <br /><br />";
print $food[13];
print $food[14];
print $food[15];
print $food[16];
echo " <br /><br />";
print $food[17];
print $food[18];
echo " <br /><br />" ;
print $food[19];
print $food[20];
print $food[21];
echo " <br /><br />"  ;
print $food[22];
print $food[23];
print $food[24];
?>

 </ul>
</center>
   
    </div>
   </pre>
        </pre>





        <pre class="clicktips2"  style="border-radius:5px;height:50px;text-align:center;cursor:pointer;margin-top: 15px;">
   
   <b>Desserts</b></pre>
   <pre class="tipsid2" style="height:650px;background-color:rgb(153, 100, 75);background-size: 100%;">
   <div id="test">
      
        <center>
<?php 
$varguNormal=array(
"Walnut Brownies",
"Raspberry-Rhubarb Pie",
"Texas Sheet Cake",
"Espresso Crinkles",
"Vanilla Cheesecake", 
"Tiramisu",
"Mint Oreo Cake",
"Chocolate Cake",
"Nutella Cake",
"Cheesecake",
"Cupcakes",
"Brownies",
"Whoopie Pies"
);
unset($varguNormal[7]);
$varguNormal=array_values($varguNormal);
sort($varguNormal);
$arrlen=count($varguNormal);
$vrg=str_replace("Nutella Cake","Sacher Torte",$varguNormal)

?>

 <ul class="outdoor" style="text-align: center; list-style:none; color: white;">


 <?php 

 for($x = 0; $x < $arrlen; $x++) {
    echo "<li>";
    echo  $vrg[$x];
    echo "</li><br/>";
}
 ?>
 </ul>
</center>
    </div>
   </pre>

        </div>


  </div>

   <?php require("DB/footer.php") ?>
 </body>