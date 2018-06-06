<?php include("db.php")?>
<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8" />
 <!--logo ne tab -->
<link rel="icon" sizes="192x192" href="Foto/01.png">
 <title>IMPULSE</title>
    <style>


.im1{
    background:url('Fotot/img1.jpg');
    background-repeat:no-repeat;
    background-size:100% 100%;
    width:100%;
    height:100%;
        }
.im2{
    background:url('Fotot/img2.jpg');
    background-repeat:no-repeat;
    background-size:100% 100%;
    width:100%;
    height:100%;
    }
.im3{
   background:url('Fotot/img3.jpg');
   background-repeat:no-repeat;
   background-size:100% 100%;
   width:100%;
   height:100%;
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

    </style>



 
</head>
<body>
<div class="header">
<?php include 'DB\header.php';?>
</div>
    
<div style="width:31.5%;height:28.7em;float:left; ">
    <div style=" margin-left:45.5%;;margin-top:24%;height:50%;width:77%;">

        <div class="im1"> </div>

</div>
<div  style="margin-top:20% ; margin-left:45.5%;height:50%;width:77%;" >
        <div class="im2"> </div>
    
</div>
<div  style="margin-top:20% ; margin-left:45.5%;height:50%;width:77%;" >
    <div class="im3"> </div>

</div>

</div>
    

    <div class="dropdown" style="margin-top:5.5% ; margin-left:560px;height:35%;width:45%;" >   
    <article id="transparente">



<form id="frmBooking" action="DB/Insert.php"  method="POST"><fieldset>
    
    <legend><?php  $text="Personal details:"; echo $text;    ?></legend>
    <br><br>
    <label>Username:</label>
   <!-- Cfaredo username qe permban vetem shkronja dhe te pakten 3-->
    <input  name="name"  autofocus="" placeholder="Username">
    <span class="error">* </span><br><br>
    <label>First Name:</label>
    <input type="text" name="firstname" required="" placeholder="First Name">
    <br><br>
    <label>Last Name:</label>
    <input type="text" name="lastname" required="" placeholder="Last Name">
    <br><br>
    <label>E-mail:</label>
    <input  name="email" id="email"  placeholder="e-mail" title="Please enter a valid email address">
* <br><br>
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
