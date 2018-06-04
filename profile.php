<!DOCTYPE html>
<html>
<head>
    <title>Profile</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<style>
.card {
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
    transition: 0.3s;
    width: 40%;
}

.card:hover {
    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

.container {
    padding: 2px 16px;
}

#admin {
	margin: 5%;
    border: 1px solid gray;
    padding: 8px;
}

h1 {
    text-align: center;
    text-transform: uppercase;
    opacity: 0.9;
    color: #088A4B;
}

p {
    letter-spacing: 3px;
}


</style>

   <script>
function showUser(str) {
  if (str=="") {
    document.getElementById("txtHint").innerHTML="";
    return;
  }
  if (window.XMLHttpRequest) {

    xmlhttp=new XMLHttpRequest();
  } else { 
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      document.getElementById("txtHint").innerHTML=this.responseText;
    }
  }
  xmlhttp.open("GET","getuser.php?q="+str,true);
  xmlhttp.send();
}
</script>
</head>
<body>




<div class="header">
<?php include 'header-admin.html';?>
</div>
<center>
<div class="card">
  <img src="Foto/female.png" alt="Avatar" style="width:40%">
  <div class="container" align="center">
    <h4><b>Rreze Alia</b></h4> 
    <p>Hotel Administrator</p> 
  </div>
</div>

<div id="admin">
<h1>Hotel Impulse Administrator</h1>
<p>As an admin you can do much staffs.You can manage all the reservations.Take the visitors feedback. Notify people who requested booking on rooms availabilties.</p>
</div>


<div id="admin">
<form>
<select name="users" onchange="showUser(this.value)">
<option value="">Personeli:</option>
<option value="1">Jeta Belegu</option>
<option value="2">Hana Hasku</option>
<option value="3">Jeton Belegu</option>
<option value="4">Vlora Krasniqi</option>
</select>
</form>
<br>
<div id="txtHint"><b>Te dhenat e stafit do te listohen ketu!</b></div>
</div>
</center>

</body>
</html>