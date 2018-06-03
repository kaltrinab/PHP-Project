<!DOCTYPE html>
<html>
<head>
	<title>Profile</title>
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
</center>

</body>
</html>