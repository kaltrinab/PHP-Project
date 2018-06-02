
<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8" />
 <!--logo ne tab -->
 <link rel="icon" sizes="192x192" href="Foto/01.png">
 <title>IMPULSE</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<style>
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
</head>
<body>
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
</body></html>