
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
                            $(".hh3").append('<span>Conference?</span>').css("color","#0B0B61");
							 });
							 
							 
							 
$(document).ready(function(){
    $(".blur").hover(function(){
        $(".blur").css("color","#A9E2F3");
    },
    function(){
        $(".blur").css("color","black");
    });
	 $(".blur").dblclick(function(){
        $(".blur").css("color","#04B4AE");
    });
	
});
</script>
<script>
$(document).ready(function(){
    $(".clicktips").click(function(){
        $(".tipsid").slideToggle("slow");
    });
});

</script>
<style>
/*------------------------------------------*/
header {
    background-color: RGB(0,0,0);
    background-attachment: fixed;
    min-width:84em;
    min-height: 10em;

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

#nav li a:hover[href="Bistro.php"]{

  background-color: #A0522D;
}
#nav li a:hover[href="Rooms.php"]{
opacity:0.9;
  background-color: #86B404;
  margin-left:0;
}
#nav li a[href="Rooms.php"]{
  margin-left:0;
}
#nav li a:hover[href="Booking.php"]{
opacity:0.9;
  background-color: #009c33;
}
#nav li a:hover[href="Contact.php"]{
opacity:0.9;
  background-color: #0066cc;
}
#nav li a[href="Conference.php"]{
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
	 /*---------------------------------------------------------------------------------*/
	  /*elementet paraqiten horizontalisht */
      .main-banner {
        display: flex;
    }
	  /*Fotoja*/
	.main-banner {
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
nav ul li form input[type = text]{

  padding-left: 0;
  opacity: 0.8;
}
nav ul li form input[type = text]:focus{

  padding-left: 0;
  opacity: 1;
}
.tipsid, .clicktips {
    background-color: rgb(14, 150, 145);
    border: none;
    height:10%;
    width:95%;
    margin-left:2%;
}


.tipsid {
    margin-left:2%;
    display: none;
    border-radius:1%;
    width:95%;
    margin-top:-3.8%;
}



    
    .outdoor{
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
<?php require("DB/header.php") ?>
           
    
    
    
   
        <div id="maind"style="margin-left:14.2%;margin-top:4%;margin-bottom:5.3%; width:71%;min-width:48.8em;border:0.1px solid black; ">
	


            
                <section id="article">
                        <div id="main-section">
                            
                             <section id="second-section">
                           
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
                                                <p>
                                                    <br>
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
                              <div >
                                    <aside style="width:100%;">
  
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
                                    </aside>
                                </div>
                                <div >
                                        <aside style="width:100%; margin-bottom:50px;">
      
                                              <article class="outdoor">
                                                      <h1 style="text-align:center">What makes us unique </h1>
                                                      <p>
                                                          <br>
                                                          Guests love the effortless and relaxed atmosphere we create.
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
