
<?php 
session_start();
?>
<!DOCTYPE html>
<html >
<head>
    <meta charset="utf-8" />
    <!--logo ne tab -->
    <link rel="icon" sizes="192x192" href="Foto/01.png">
    <title>IMPULSE</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="jquery-1.11.2.min.js"></script>
<script>
$(document).ready(function(){
    $(".clicktips1").click(function(){
        $(".tipsid1").slideToggle("slow");
    });
});
$(document).ready(function(){
    $(".clickEmail1").click(function(){
        $(".Email1").slideToggle("slow");
    });
});

//function for suggestions AJAX
function showHint(str) {
    if (str.length == 0) { 
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            /*XMLHttpRequest.onreadystatechange property contains the event handler to be called when the readystatechange event is fired*/
            if (this.readyState == 4 && this.status == 200) {
                /*4-request finished and response is ready
                200-OK*/
                document.getElementById("txtHint").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET", "gethint.php?q=" + str, true);
        xmlhttp.send();
    }
}


</script>
    <!--<script src="JScript.js"></script>-->
    <link rel="stylesheet" type="text/css" href="DB/Contact_style.css">
    <style>

#nav li a[href="Contact.php"] {
    opacity: 0.9;
    background-color: #2E9AFE;
}
.forma {
	color: #0A68E4;
	display: flex;
	height: 1.2em;
    margin-left: 14%;
}
input[type=radio] {
    width: 2em;
    font-size: 1em;
}
input[type=text]:focus {
    outline: none;
    background-image: url(Foto/person1.png);
    background-size: 8% 70%;
    padding-left: 9%;
    background-repeat: no-repeat;
    opacity: 1;
    vertical-align: middle;
    background-position: 1%;
}

input[type=text] {
    background-image: url(Foto/person1.png);
    background-size: 8% 70%;
    padding-left: 9%;
    background-position: 1%;
    background-repeat: no-repeat;
    opacity: 0.8;
}

input[type=password]:focus {
    outline: none;
    background-image: url(Foto/lock.png);
    background-size: 8% 70%;
    padding-left: 9%;
    background-repeat: no-repeat;
    opacity: 1;
    background-position: 1%;
}

input[type=password] {
    background-image: url(Foto/lock.png);
    background-size: 8% 70%;
    padding-left: 9%;
    background-repeat: no-repeat;
    opacity: 0.8;
    background-position: 1%;
}
input[type=tel]:focus {
    outline: none;
    background-image: url(Foto/tel.png);
    background-size: 8% 70%;
    padding-left: 9%;
    background-repeat: no-repeat;
    background-position: 1%;
    background-origin:border-box;
    opacity: 1;
}

input[type=tel] {
    background-image: url(Foto/tel.png);
    background-size: 8% 70%;
    padding-left: 9%;
    background-position: 1%;
    background-repeat: no-repeat;
    background-origin:border-box;
    opacity: 0.8;
}

input[type=email]:focus {
    outline: none;
    background-image: url(Foto/emaili1.png);
    background-size: 8% 70%;
    padding-left: 9%;
    background-repeat: no-repeat;
    background-position: 1%;
    opacity: 1;
}

input[type=email] {
    background-image: url(Foto/emaili1.png);
    background-size: 8% 70%;
    padding-left: 9%;
    background-position: 1%;
    background-repeat: no-repeat;
    opacity: 0.8;
}

textarea {
    width: 500px;
    min-height: 300px;
    max-height: 600px;
    text-indent: 1%;
    overflow: auto;
    font-size: 15px;
    border-style: none;
    border-radius: 10px;
    border: 2px solid #18121e;
    outline: none;
    opacity: 0.8;
    resize: vertical;
}

textarea:focus {
                opacity: 1;
}

.a1 {
    cursor: pointer;
}
.b {
    cursor: auto;
}
nav ul li form input[type = text] {
    background-image: none;
    padding-left: 0;
}
nav ul li form input[type = text]:focus {
    background-image: none;
    padding-left: 0;
}

.user{           
    border: 1px solid black;
    padding: 5px;
    width: 300px;
    outline: 1px solid lightblue;
    outline-offset: 5px;
}
.forma1 {
    color: #0A68E4;
    display: flex;
    height: 1.2em;
    margin-left: 14%;
}
.tipsid1, .clicktips1 {
    background-color: #ececec;
    border: 2.5px solid black;
    height:10%;
    width:68%;
    min-width:60.5em;
    margin-left:13.8%;   
}
.tipsid1 {
    margin-left:13.8%;
    display: none;
    border-radius:5px;
    width:68%;
    min-width:60.5em;
    height:530px;
}
        
.Email1,.clickEmail1 {
    background-color: #ececec;
    border: 2.5px solid black;
    height:10%;
    width:68%;
    min-width:60.5em;
    margin-left:13.8%; 
}
.Email1{
    margin-left:13.8%;
    display: none;
    border-radius:5px;
    width:68%;
    min-width:60.5em;
    height:400px;
}

 /*------------------------------------------*/
header {
    background-color: RGB(0,0,0);
    background-attachment: fixed;
    min-width: 84em;
    min-height: 10em;
} 
      
label
{
    width: 100px;
    display: inline-block;
}
#frmBooking{
    min-width:500px;
}
#transparente{
    padding: 26px;
        
    background-color: rgba(0,0,0,.70);
    border: 1px solid white;
    border-radius: .6em;
    min-width: 500px;
    color: white;  
    margin-bottom: 16%;
    margin-top:16%;


}
input[type=text]
{
    display: inline-block;
}
#imgheader {
    height: 30%;
    width: 30%;
    text-align: center;
       
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
nav {
    min-width: 84em;
    margin: 0 0 0 0;
    font-family: Arial;
    font-size: 100%;
    width: 100%;
    overflow: hidden;
    text-align: center;
    min-height: 2.25em;
}

nav ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
        overflow: hidden;
        background-color: #232323;
        text-align: center;
        vertical-align: top;
        min-height: 2.25em;
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
    margin-left: -0.3em;
}
#nav li a:hover[href="Bistro.php"] {
    background-color: #A0522D;
  }

#nav li a:hover[href="Rooms.php"] {
    opacity: 0.9;
    background-color: #86B404;
    margin-left: 0;
}

#nav li a[href="Rooms.php"] {
    margin-left: 0;
  }

#nav li a:hover[href="Booking.php"] {
    opacity: 0.9;
    background-color: #088A4B;
}
#nav li a:hover[href="Contact.php"] {
    opacity: 0.9;
    background-color: #2E9AFE;
}

#nav li a:hover[href="Conference.php"] {
    opacity: 0.9;
    background-color: #04B4AE;
  }

#nav li a:hover[href="Tours.php"] {
    opacity: 0.9;
    background-color: rgb(67, 178, 223);
      
}
#nav li a:hover[href="feedback1.php"] {
    opacity: 0.9;
    background-color: rgb(167, 108, 223);
}
fieldset{
    padding: 20px;
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
</style>

<script>
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
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
            <li><a href="Contact.php">Contact</a></li>
            <li><a href="feedback1.php">Feedback</a></li>
            <li id="demo"><?php 
        
        echo "<a href='logout.php'>Logout</a>";
?></li> <li>

          <li style="vertical-align:middle;">

                          <form action="https://www.google.com" method="GET" target="_blank" style=" border-radius:2px;background-color:#314a37;padding:4px; ">
                              <input type="text" placeholder="Search Location" name="q" style=" line-height: 22px;border:none;  cursor: pointer;border-radius:2px;font-family:sans-serif;font-style: normal;">
                              <input type="submit" value="Submit"; style=" box-shadow:1px 1px 0 #677B66;border:none; background: #C1DEC0;line-height:22px;  cursor: pointer;border-radius:2px;font-family:sans-serif;font-style: normal;">
                          </form>
          </li></li>
        </ul>
       </nav>

<?php

class Person {
  public $name;
  public $surname;
  public function __construct($name,$surname){
 echo  $this->name=$name;
 echo " ";
 echo  $this->surname=$surname;
  }

  function __destruct() {
    print "Destroying " . $this->name . "\n";
}
}  

?>



    <div style="display:block; margin-top:7%; min-width:84em; ">
        <div style="background-color:white; width:67%;min-width:60.5em;margin-left:14%;border-radius:8px;">
            <p id="teksti">
                <img src='Foto/male.png' style="width:15%;height:15%;" alt='Rapha&eumll ' align='left' />
                <span style='font-size:30px;text-transform:capitalize;'><?php
                $person = new Person('Audrey','Johnson');
                ?></span><br/><br/>
                Guests love the effortless and relaxed atmosphere we create.
                      Flawless symbiosis of thoughtful and clever hardware,
                      wrapped in a cool and appealing message, and a dedicated team who just love to inspire
                      our guests and represent our unique product.  this family-friendly section of Paradisus
                       Palma Real all-inclusive offers a serene, luxurious environment. The property offers 
                       sprawling grounds, meandering pathways, and upscale amenities such as a top-notch 
                       spa, yoga, and a seemingly never-ending pool area. Parents will likely appreciate the
                        Kids Zone and babysitting services, while all can enjoy the daily excursions, quality
                         restaurants and bars, and personal concierge service.



            </p>

        </div>
        <br>
        
        <div style="background-color:white; width:67%;min-width:60.5em;margin-left:14%;margin-top:5%;border-radius:8px;">

            <p id="teksti1">
                <img src='Foto/female.png' style="width:15%;height:15%;" alt='&Eumlsma' align='left' />
                <span style='font-size:30px'>&Eumlsma De Gea</span><br/><br/>
                <?php
                class A
                {
                    public $mesazhi2="Our Guests ";
                    function paraqiteA($folja)
                    {
                        echo"$this->mesazhi2,$folja";
                    }
                   
                }
                class B extends A
                {
                    public $mesazhi="Guests";
                    function paraqiteB($emri)
                    {
                        echo "$this->$mesazhi,$emri";
                    }

                }    
                $fjala=new B();
                $fjala->paraqiteA("love");
                ?>
               the effortless and relaxed atmosphere we create.
                      Flawless symbiosis of thoughtful and clever hardware,
                      wrapped in a cool and appealing message, and a dedicated team who just love to inspire
                      our guests and represent our unique product. The food and beverage offering here is a 
                      highlight; there are impressive international buffets as well as a la carte restaurants
                       (one from a Michelin-starred chef) that will appeal to adults and honeymooners. Suites
                        are decorated with classic mahogany furniture and marble tile floors, and have 
                        coffeemakers, minibars, and free Wi-Fi. For a more luxurious experience, Royal Service
                         offers additional amenities and special access to a posh lounge. A beautiful spa is
                         also available.

            </p>
           



        </div>
        <br/>
        
        <div style="background-color:white; width:67%;min-width:60.5em;margin-left:14%;margin-top:5%;">

            <p id="teksti3">
                <img src='Foto/male.png' style="width:15%;height:15%;" alt='&Ccedilenk' align='left' />
                <span style='font-size:30px'>&Ccedilenk Tosun</span><br/><br/>	
                       Guests love the effortless and relaxed atmosphere we create.
                      Flawless symbiosis of thoughtful and clever hardware,
                      wrapped in a cool and appealing message, and a dedicated team who just love to inspire
                      our guests and represent our unique product. Those looking for a quieter experience can
                       hit the beach, snag a day bed and have drinks delivered from a server -- though vendors
                       can sometimes be a nuisance. There are five restaurants on-site, including a romantic
                       beachside Mediterranean option, and guests also get access to nightlife at the other 
                       resorts, which ensures plenty of variety. All rooms are considered suites with jacuzzis
                       and separate living areas. Fun pool atmosphere with swim-up bar and animation. Five dining
                        options including romantic fondue options
            </p>
         </div>
        <br/>  
    </div>
    <br/><br/>

    <div style="width:100%;min-width:84em;">
    <div style="width:50%;min-width:60.5em; background-color:#ececec; height:25%; margin-left:14%; margin-top:5%; margin-bottom:5%;">
        <fieldset style="border:3px solid #58423e;border-radius:10px;height:400px;">
            <br/>
            <br/>

            <legend style="font-size:30px; margin-left:10%;color:#50A2FF;opacity:0.8;text-shadow:2px 2px 2px #18121e"> Contact </legend>
            <div style="float:left; width:44%">
            


                <form method="post"  id="forma1" action="" >
                    <br/><br/>
                  
                    <input type="email"name="email" required="required" pattern="[a-zA-Z0-9]{0,20}@[a-zA-Z]{0,10}.[a-zA-Z]{0,3}"  name="email" autocomplete="on" placeholder="Email" style=" height:2em;width:60%;font-size:15px;
                               border-style:none;border-radius:10px ;border:2px solid #18121e; margin-left:15%">
                   
                    <br/><br/><br/>
                        <input type="password" name="password" id="first" required="required" placeholder="Password"  style="height:2em;font-size:15px;width:60%;
                               border-style:none;border-radius:10px ;border:2px solid #18121e; margin-left:15%">
                    <br/><br/>
                    <input type="submit" value="Login" onclick="addItem()"name="login" style="border-type:outset;  margin-top:20%;margin-left:25%;margin-bottom:5%; width:20%;
                           height:40px;box-shadow: 0px 0px 15px 10px rgba(255, 255, 255, .75);border-radius:3px;outline:none;">
                    <input type="reset" value="Reset" name="Reset" style=" border-type:outset; margin-left:5%;margin-bottom:5%; width:20%;
                           height:40px;box-shadow: 0px 0px 15px 10px rgba(255, 255, 255, .75);border-radius:3px;outline:none;">

				</form>
            </div>
          
          


            <div style="height:30em ; width:30em ;float:left; margin-top:-0.4%;margin-bottom:15%;">
                <textarea cols="60" rows="3" placeholder="Share your experiences" style="margin-left:3%"></textarea>
            </div>
            </form>
        </fieldset>
        <div style="margin-top:-36px;border-radius:5px;height:40px;cursor:pointer; margin-left:3%;margin-bottom:3%;">
        <?php 


            if(isset($_POST['login'])){

            $email=$_POST['email'];
            $password=$_POST['password'];
                    if($email=="impulse@impulse.com"&& $password=="1234567812345678"){
                        $_SESSION['var']='hello';
                        $_SESSION['var']=$email;
                      
                        echo '<script>window.open("index.php","_self");</sript>';
                    }

                    else{
                        $string="Login Failed! Invalid Email or Password!";
                        echo substr($string,0,13);
                        echo substr($string,14,39);
                        echo "<br/>";
                        if(strlen($password) < 8)
                        die('Password must be at least 8 characters');
                    }
            }

?>
</div>
    </div>
</div>
<div style="width:100%;min-width:84em;">
    <pre class="clicktips1"  style="margin-top:-36px;border-radius:5px;height:40px;text-align:center;cursor:pointer;">
   
            <b>No account? Sign up</b></pre>
            <div class="tipsid1">
            <br><br>

             <?php
                            GLOBAL $emailErr;
                            GLOBAL $email;
                            GLOBAL $nameErr;
                            GLOBAL $name;
                            if (empty($_POST["name"])) {
                                $nameErr = "Username is required";
                              } else {
                                $name = test_input($_POST["name"]);
                                // check if name only contains letters and whitespace
                                if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
                                  $nameErr = "Only letters and white space allowed"; 
                                }
                              }
                if (empty($_POST["email"])) {
                    $emailErr = "Email is required";
                } else {
                    $email = test_input($_POST["email"]);
                    // check if e-mail address is well-formed
                    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    $emailErr = "Invalid email format"; 
                    }
                }


                function test_input($data) {
                $data = trim($data);
                $data = stripslashes($data);
                $data = htmlspecialchars($data);
                return $data;
                }
                ?>

               <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                   <input type="text" name="name" autocomplete="off" maxlength="30" placeholder="Name" style="height:2em;font-size:15px;border-style:none; border-radius:10px ;width:22%;border: 2px solid #18121e; margin-left:3%;padding-left:4%;" >
                   <br></br>          <?php echo $nameErr;?><br/>
               	   <input type="text" name="surname" autocomplete="off"  placeholder="Surname"  style=" height:2em;font-size:15px;width:22%;border-style:none;border-radius:10px ;border: 2px solid #18121e; margin-left:3%;padding-left:4%;">
              	   <div style="float:right;margin-right:10%;width:50%;height:30%;">
               		<img  src="Foto/impulse_LOGO.png" style="height:100%;width:100%;">
                   </div>
                   </br>
                    <input     name="email"  placeholder="Email"  style=" height:2em;width:22%;font-size:15px;border-style:none;border-radius:10px ;border: 2px solid #18121e; margin-left:3%;padding-left:4%;"><br/><br/>           <?PHP echo $emailErr; ?><br/>

                    
                    </br></br>

                   <input type="password" name="password"  required="required" placeholder="Password" style=" height:2em;font-size:15px;width:22%;border-style:none;border-radius:10px ;border: 2px solid #18121e; margin-left:3%;padding-left:4%;">
               </br></br>
                    
                <br/><br />
                <input type="file" name="img"  value="Choose Photo" multiple style="margin-left:3%;">
                <br></br>
               
                <br><br>
                <label style="margin-left:3%;">Gender:</label>
               </br>
                     <input type="radio" name="gender" value="Male" style="margin-left:3%; width: 20px;height: 20px;"> Male<br>
                     <input type="radio" name="gender" value="Female"  style="margin-left:3%;width: 20px;height: 20px;"> Female</br>
               <br>
         </br><br>
         <input type="submit" value="Sign up" name="Submit" formmethod="post"  style=" border-type:outset; margin-left:5%;margin-bottom:5%; width:20%;border-radius:3px;outline:none; height:40px;box-shadow: 0px 0px 15px 10px rgba(255, 255, 255, .75)">
          <input type="reset" value="Reset" name="Reset"    style=" border-type:outset; margin-left:5%;margin-bottom:5%; width:20%;border-radius:3px;outline:none;height:40px;box-shadow: 0px 0px 15px 10px rgba(255, 255, 255, .75)">
                 <br>
             </form>
               
            </div>
            <br><br>
        </div>
    
        <div style="width:100%;min-width:84em;">
    <pre class="clickEmail1"  style="margin-top:-20px;border-radius:5px;height:50px;text-align:center;cursor:pointer;margin-bottom:25px;">

            
            <b>Send an email</b></pre>
            <div class="Email1">
            <br><br>
            <center>
            
            <form method="post" action="send_Email.php">
            <table>
           
     <tr><td>   To :</td> <td><input type="text" name="email" onkeyup="showHint(this.value)"> <p>Suggestions: <span id="txtHint"></span></p></td></tr>
     <tr><td>   Subject :</td><td>   <input type="text" name="subject"></td></tr>
       
      <tr><td>   Message</td><td>   <input type="text" name="comment"></td></tr>
        
         <tr> <td></td><td>  <input type="submit" value="Send Email"></td></tr>
         </table>
        </form>
 
        </center>
        </div>
        </div>
        </div>
<center>
<form action="Loja.php" method="post">

Guess:<input type="number" name="guess"></br>
<input type="submit" name="submit" value="Guess">

</form>
</center>
   <footer >
        <div id="logo1" style="margin-bottom:5%;">
 
  <img id="imglogo1" src="Foto/impulse_LOGO.png" alt="Logoja"/>
 
        </div>

        <div class="vertical" >	</div>

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

                </div>

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

    <a onclick="topFunction()" id="myBtn" title="Top"></a>

</body>



</html>
