﻿<?php include("db.php")?>
<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8" />
 <!--logo ne tab -->
<link rel="icon" sizes="192x192" href="Foto/01.png">
 <title>IMPULSE</title>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
   <script src="jquery-1.11.2.min.js">  </script>
    <style>

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



 
</head>
<body>
<div class="header">
<?php include 'DB\header.php';?>
</div>
    
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
