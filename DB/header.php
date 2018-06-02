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
</style>
</head>


<body style="background-color:#ececec; ">

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
        <li><a href="Contact.php" id="exp">Contact</a></li> 
     

        <li>

          <li style="vertical-align:middle;">

                          <form action="https://www.google.com" method="GET" target="_blank" style=" border-radius:2px;background-color:#314a37;padding:4px; ">
                              <input type="text" placeholder="Search Location" name="q" style=" line-height: 22px;border:none;  cursor: pointer;border-radius:2px;font-family:sans-serif;font-style: normal;">
                              <input type="submit" value="Submit"; style=" box-shadow:1px 1px 0 #677B66;border:none; background: #C1DEC0;line-height:22px;  cursor: pointer;border-radius:2px;font-family:sans-serif;font-style: normal;">
                          </form>
          </li>
    </ul>
</nav>