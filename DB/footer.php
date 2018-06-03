<style>


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
 



</style>



<footer >
        <div id="logo1" style="margin-bottom:5%;">
 
  <img id="imglogo1" src="Foto/impulse_LOGO.png" alt="Logoja"/>
  <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.9";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<div class="fb-like" data-href="https://www.facebook.com/Imulse-178798192831677" data-layout="standard" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div>
 
        </div>

        <div class="vertical" > </div>

    <div style="margin-left: 6%;margin-top:5.3%; float:left;text-align:center; width:11%;margin-bottom:2%;">

                <div style="text-align:center; font-size:125%;width:100%">

                    <a  href="mailto:impuls4@gmail.com" style="text-decoration:none;color:rgb(107, 114, 112);font-family:arial;">
                        <b>Contact us</b>
                    </a>

                </div>
            <br>
            <hr>
            <br>

                <div style="font-family:arial;text-align:center;font-size:125%;color:rgb(107, 114, 112);">

                    <b>Follow us:</b>

                </div>-

            <br>

  <a href="http://www.facebook.com"><img src="Foto/facebook.png" style="height:33px;width:33px;"></a>
  <a href="http://www.instagram.com" ><img src="Foto/instagram.png" style="height:33px;width:33px;"></a>
  <a href="http://www.twitter.com" ><img src="Foto/twitter.png" style="height:33px;width:33px;"></a>
  <a href="http://www.pinterest.com" ><img src="Foto/pinterest.png" style="height:33px;width:33px;"></a>
</div>

<div class="vertical"></div>


 <div id="123" style="margin-left:3%; margin-top:5.5%;float:left;width:42.5%;margin-bottom:1%;">
    <?php
    $contacts=array(
                    array(
                        "Name:"=>"Gresa Dodaj",
                        "E-mail:"=>"gresadodaj@impulse.com",
                    ),
                    array(
                        "Name:"=>"Kaltrina Bulliqi",
                        "E-mail:"=>"kaltrinabulliqi@impulse.com",
                    ),
                    array(
                        "Name:"=>"Mimoza Ajeti",
                        "E-mail:"=>"mimozaajeti@impulse.com",
                    ),
                    array(
                        "Name:"=>"Oriola Avdyli",
                        "E-mail:"=>"oriolaavdyli@impulse.com",
                    ),
                    array(
                        "Name:"=>"Nora Ibrahimi",
                        "E-mail:"=>"noraibrahimi@impulse.com",
                    )
            );
            rsort($contacts);
            
?>
<table style="border-collapse: collapse;width:85%">
<?php
            
            foreach ( $contacts as $contact ) {

                echo "<tr >";
              
                foreach ( $contact as $key => $value ) {
                  echo "<td style='padding:1%;color:rgb(107, 114, 112);font-family:arial;border:1px solid black;'>$value</td>";
                }
              
                echo '</tr>';
              }
    
    ?>
            </table>


</div>
            <div id="123" style="margin-left:3%; margin-top:3%;float:left;width:46%;margin-bottom:1%;">
             
        

            </div>
          
           

                <div id="abc" >
      <div id="cde"
        style="float:left; height:0.5%;width:1.4%; vertical-align:center;margin-left:1.5%;margin-top:0.36%;">
        <img src="Foto/address3.png" style="height:50%;width:90%; "/>
      </div>

      <div id="a1311" style="float:left;margin-top:0.45%; width:22%;">
        <span >
            <address style="font-size:100%;text-decoration:none;color:rgb(107, 114, 112);" >St. Bajram Kelmendi, Prishtin&euml, Kosov&euml </address>
        </span>
      </div>

                        <div id="cde"
                            style="float:left; height:0.8%;width:1.8%; vertical-align:center;margin-left:11%; margin-top:0.4%;">
                            <img src="Foto/email1.png" style="height:100%;width:95%; "/>
                        </div>

                        <div id="a1311" style="float:left;margin-top:0.45%; width:10.8%;">
                            <span >
              <a style="font-size:100%;text-decoration:none;color:white;font-style:italic;color:rgb(107, 114, 112);" href="mailto:impuls4@gmail.com">impuls4@gmail.com</a>
                            </span>
                        </div>

                        <div id="b1231">

                                    <div style="float:left; height:1.1%;width:1.4%; vertical-align:center;margin-left:12%;margin-top:0.36%;transform:rotate(5deg);">
                                            <img src="Foto/Telefoni.png" style="height:100%;width:100%;   "/>
                                    </div>

                                    <div id="c12321" style="float:left;margin-top:0.45%;width:9%;  ">
                                        <span >
                                                <code style="font-size:100%;font-style:italic;color:rgb(107, 114, 112);">+377 44-123-241</code>
                                        </span>
                                    </div>


                                    <div id="d1223" style="float:left;margin-top:0.45%;margin-left:10%; width:16%;">
                                        <span style="margin-left:0%; font-style:italic ; font-size:100%;color:rgb(107, 114, 112);">
                                                All rights reserved&copy <strong>IMPULS4<strong>
                                        </span>
                                    </div>

                        </div>


                </div>

      </footer>


    <div id="homeButton">
            <div>
                <a href="index.php">
                  <img src="Foto/homeButton.png" style="height:50px; width:50px" title="Home">
                </a>
            </div>
    </div>

<a onclick="topFunction()" id="myBtn" title="Top"  ></a>

    </body>



</html>
