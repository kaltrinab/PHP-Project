
<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8" />
 <!--logo ne tab -->
<link rel="icon" sizes="192x192" href="Foto/01.png">
 <title>IMPULSE</title>
  <  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="jquery-1.11.2.min.js"></script>


    <style>
        /*------------------------------------------*/
        header {
            background-color: RGB(0,0,0);
            background-attachment: fixed;
            min-width: 84em;
            min-height: 10em;
        } 

        .hi{
		background:url('Fotot/img1.jpg');
		background-repeat:no-repeat;
		background-size:100% 100%;
	    width:100%;
		height:100%;
	}
  .hi1{
  		background:url('Fotot/img2.jpg');
  		background-repeat:no-repeat;
  		background-size:100% 100%;
  	    width:100%;
  		height:100%;
  	}
      .hi2{
  		background:url('Fotot/img3.jpg');
  		background-repeat:no-repeat;
  		background-size:100% 100%;
  	    width:100%;
  		height:100%;
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

        #nav li a[href="Booking.php"] {
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

       
        /*Vendosja e lartesise, gjatesise, pozicionimi, ngjyra e fontit, largesia nga top dhe z-index(pozicionimi ne raport me div elementet tjera)  */
        footer {
            background-color: rgb(35,35,35);
            position: relative;
            width: 100%;
            color: white;
            z-index: -1;
            min-width: 84em;
            float: left;
            z-index: 2;
        }

        #imglogo1 {
            height: 100%;
            width: 100%;
        }


        /*Div elementi qe duket si vije vertikale per ndarje te te dhenave(footer)*/
        .vertical {
            height: 10em;
            margin-top: 4.5%;
            border-left: 3px solid lightblue;
            float: left;
            margin-left: 6%;
        }

        /*Div element ne te cilin eshte vendosur llogo(footer)*/
        #logo1 {
            float: left;
            margin-left: 5%;
            margin-top: 6.9%;
            width: 20%;
        }

       

        * {
            font-family: 'Trebuchet ms'
        }

        nav ul li form input[type = text] {
            padding-left: 0;
            opacity: 0.8;
        }

            nav ul li form input[type = text]:focus {
                padding-left: 0;
                opacity: 1;
            }

        mark {
            background-color: lightblue;
            color: Black;
        }

        #div1, #div2 {
            transform: translate(-5%,-30%);
            float: left;
            background-color: rgb(67, 178, 223);
            width: 100px;
            height: 7.5em;
            margin: 10px;
            padding: 0px;
            border: 1px solid black;
            float: left;
            margin-top: 3%;
        }

        #myBtn {
            display: none;
            position: fixed;
            z-index: 99;
            height: 25px;
            width: 25px;
            cursor: pointer;
            background: URL('Foto/TopPage.png') no-repeat;
            background-size: 25px,25px;
            bottom: 5%;
            right: 2%;
            transform: scale(2,2);
        }

            #myBtn:hover {
                opacity: 0.8;
            }

        /*Div element per homeButton*/
        #homeButton {
            position: fixed;
            bottom: 3%;
            left: 1%;
            z-index: 2;
        }

            #homeButton:hover {
                opacity: 0.8;
            }

        mark {
            background-color: lightblue;
            color: Black;
        }

        #buton123 {
            width: 100%;
            background: url("Foto/giphy4.gif") 70% 40% no-repeat;
            border: none;
            background-size: 100%;
            border-radius: 2px;
            cursor: pointer;
            outline: none;
        }
    </style>

<?php require("DB/header.php") ?>
    
<div style="width:31.5%;height:28.7em;float:left; ">
    <div style=" margin-left:45.5%;;margin-top:24%;height:50%;width:77%;">

        <div class="hi"> </div>

</div>
<div  style="margin-top:20% ; margin-left:45.5%;height:50%;width:77%;" >
        <div class="hi1"> </div>
    
</div>
<div  style="margin-top:20% ; margin-left:45.5%;height:50%;width:77%;" >
    <div class="hi2"> </div>

</div>


</div>
    </div>


    <div class="dropdown" style="margin-top:5.5% ; margin-left:560px;height:35%;width:45%;" >   
    <article id="transparente">
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





<form id="frmBooking" action="DB/Insert.php"  method="POST"><fieldset>
    
    <legend><?php  $text="Personal details:"; echo $text;    ?></legend>
    <br><br>
    <label>Username:</label>
   <!-- Cfaredo username qe permban vetem shkronja dhe te pakten 3-->
    <input  name="name"  autofocus="" placeholder="Username"   value="<?php echo $name;?>">
    <span class="error">* <?php echo $nameErr;?></span><br><br>
    <label>First Name:</label>
    <input type="text" name="firstname" required="" placeholder="First Name">
    <br><br>
    <label>Last Name:</label>
    <input type="text" name="lastname" required="" placeholder="Last Name">
    <br><br>
    <label>E-mail:</label>
    <input  name="email" id="email"  placeholder="e-mail" title="Please enter a valid email address" value="<?php echo $email; ?>">
* <?PHP echo $emailErr; ?><br><br>
     <label>Phone Number:</label>
     <input type="tel" name="phone" id="phone" required placeholder="Please enter your phone number ">
     <br><br>
     <label >Country:</label>
     <select name="select" class="select-field" style="height:2em;font-size:15px;outline:none;width:100px;text-indent:1%;border-style:none;border-radius:10px ;border:2px solid #18121e; margin-left:3%;">
                        
                        <option value="Kosovo">Kosovo</option>
                        <option value="Albania">Albania</option>
                        <option value="France">France</option>
                        <option value="England">England</option>
                        <option value="America">America</option>
                        <option value="Italy">Italy</option>
                        <option value="Germany">Germany</option>
                        <option value="Sweden">Sweden</option>
                        <option value="Other">Other</option>
                    </select>
                    <br><br>
                </fieldset>
                    
                    <fieldset>
                        <legend>Booking details:</legend>
                        <br><br>
                        <label>Arrival date:</label>
                        <input type="date" name="date" >
                        <label style="width: 50px;">Until:</label>
                        <input type="date" name="until">
                        <br><br>
                       
                      <!--Minimum 1 dhe maximum 6 guests per dhomen e njejte -->
                            <label>Adults<span style="color: red;"> *</span></label>
                            <input type="number" name="adults" min="1" max="3">
                             <br><br>
                            <label>Children</label>
                            <input type="number" name="children" min="0" max="3" />
                         <br><br>
                         <label>Room Type:</label>
                         <select name="roomtypes"  style="height:2em;font-size:15px;width:100px;outline:none;text-indent:1%;border-style:none;border-radius:10px ;border:2px solid #18121e; margin-left:3%;">
                        <option value="Single">Single</option>
                        <option value="Double">Double</option>
                        <option value="Deluxe">Deluxe</option>
                    </select>
                          <br><br>
                        <p>Do you require meals?</p>
                        <br>
                        <input type="radio" name="meals" value="Yes meals"  checked="checked" >

                         <label>Yes</label>
                        <input type="radio" name="meals" value="No meals">
                        <label>No</label>
                        
                        <br><br>
                        <label style="width: 200px;">Do you require a balcony?</label>
                        <input type="checkbox" name="balcony" value="Yes" checked>
                        <br><br>


                     <div style="padding-bottom: 18px;">Questions / Comments<br/>
<textarea id="data_10" false name="data_10" style="width : 450px;" rows="6" class="form-control"></textarea>
</div>
  <input type="submit" name="submit" src="foto/submit.png" width="100px;" align="bottom" >

    </fieldset></form></article>


     </div>   




<?php require("DB/footer.php") ?>
