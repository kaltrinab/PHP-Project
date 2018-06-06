
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
 <!--logo ne tab -->
<link rel="icon" sizes="192x192" href="Foto/01.png">
<title>IMPULSE</title>
</head>

<style>
form 
{
    overflow: auto;
    padding: 0;
}
 /*Fotoja*/
.main-banner
 {
    background: url("Foto/Conferenceing_1.jpg") ;
    background-size: 100% 100%;
    min-height:100%;
    height:100%;
    display: flex;
    background-repeat: no-repeat;
		z-index:2;
    min-width:100%;
}


/*-----------------------------------------------------------------------------------------------------------------------------------------------*/
#myBtn 
{
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
*
{
  font-family:'Trebuchet ms';
}
nav ul li form input[type = text]{

  padding-left: 0;
  opacity: 0.8;
}
nav ul li form input[type = text]:focus
{
   padding-left: 0;
   opacity: 1;
}
.outdoor
{
  padding: 24px;
  background-color: rgba(0, 0, 0, 0.212);
  border: 1px solid white;
  border-radius: .5em;
}
#article{
  width: 100%; 
}

#main-section
{
   float: left;
   margin: 5%;
   width: 63%;
   height: 100%;
   padding: 1%;
   margin-left:0%;
   background-image: url(Fotot/img1.jpg);
   color:white;
   font:tahoma;
   border-radius: 15px;
   background-color:rgba(200,180,192,0.4);
   height:57.5vh;
   z-index:-2;
   background-repeat: no-repeat;
}
#second-section
{ 
    width: 40%;
    float: left;
    height: 100%;
    padding: 5%;
}
aside 
{
  float: left;
  width: 60%;
  margin-bottom: 1%;
}
#asideofarticle
{
  float: right;
  width: 28%;
  height:200px;
  margin-top: 5.5%;
  margin-right:1%;
  margin-left:1%;
  margin-bottom: 0;
  padding: 0;
  background-image: url(Fotot/cnf1.jpg);
  background-repeat: no-repeat;
  border-radius: 15px;
  background-size: contain;

}
#asideofarticle2
{
  margin-bottom: 0;
  float: right;
  width: 28%;
  height:200px;
  margin-top: 2%;
  margin-right:1%;
  margin-left:1%;
  padding: 0;
  background-image: url(Fotot/cnf1.jpg);
  background-repeat: no-repeat;
  border-radius: 15px;
  background-size: contain;
}
</style>

<body>
    <div class="header">
    <?php include 'DB\header.php';?>
    </div>
        
    <div id="maind"style="margin-left:14.2%;margin-top:4%;margin-bottom:5.3%; width:71%;min-width:48.8em;border:0.1px solid black; ">
         
        <section id="article">
           <div id="main-section">
              <section id="second-section">
                  <article class="outdoor">
                      <h1 style="text-align:center">What makes us unique </h1>
                        <p><br>
                          Guests love the effortless and relaxed atmosphere we create.
                          Flawless symbiosis of thoughtful and clever hardware,
                          wrapped in a cool and appealing message, and a dedicated team who just love to inspire
                          our guests and represent our unique product
                        </p>
                  </article>
              </section>
            </div>

            <div style="margin-right:0; margin-left:0%;">
                <aside id="asideofarticle" > 
                </aside>  
                <aside id="asideofarticle2" > 
                </aside>
            </div>

            <div >
                 <aside style="width:100%;">
                 <article class="outdoor">
                  <h1 style="text-align:center">What makes us unique </h1>
                    <p><br>
                     Guests love the effortless and relaxed atmosphere we create.
                     Flawless symbiosis of thoughtful and clever hardware,
                     wrapped in a cool and appealing message, and a dedicated team who just love to inspire
                     our guests and represent our unique product
                     Guests love the effortless and relaxed atmosphere we create.
                     Flawless symbiosis of thoughtful and clever hardware,
                     wrapped in a cool and appealing message, and a dedicated team who just love to inspire
                     our guests and represent our unique product
                    </p>
                 </article>
                 </aside>
             </div>
             <div>
                  <aside style="width:100%;">
                  <article class="outdoor">
                  <h1 style="text-align:center">What makes us unique </h1>
                     <p><br>
                     Guests love the effortless and relaxed atmosphere we create.
                     Flawless symbiosis of thoughtful and clever hardware,
                     wrapped in a cool and appealing message, and a dedicated team who just love to inspire
                     our guests and represent our unique product
                    </p>
                   </article>
                   </aside>
              </div>
               <div>
                   <aside style="width:100%; margin-bottom:50px;">
                   <article class="outdoor">
                   <h1 style="text-align:center">What makes us unique </h1>
                     <p><br>

                     <?php
                     define("TEKSI","Guests");
                     echo TEKSI;

                     ?>
                     love the effortless and relaxed atmosphere we create.
                     Flawless symbiosis of thoughtful and clever hardware,
                     wrapped in a cool and appealing message, and a dedicated team who just love to inspire
                     our guests and represent our unique product
                     Guests love the effortless and relaxed atmosphere we create.
                     Flawless symbiosis of thoughtful and clever hardware,
                     wrapped in a cool and appealing message, and a dedicated team who just love to inspire
                     our guests and represent our unique product  Guests love the effortless and relaxed atmosphere we create.
                     Flawless symbiosis of thoughtful and clever hardware,
                     wrapped in a cool and appealing message, and a dedicated team who just love to inspire
                     our guests and represent our unique product
                     </p>
                    </article>
                    </aside>
                </div>
            </section>

<br>			
<br>
  </div>
  

    <script>
            var text="permawewtly attached (glassed-ow) or iwterchawgeable.";
            var result=text.replace(/w/g, "n");
            function a(){
              document.getElementById('regexG').innerHTML=result;
            }
            
            </script>
<?php require("DB/footer.php") ?>
</body>