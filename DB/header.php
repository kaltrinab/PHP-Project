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