
<!DOCTYPE html>
<head>
<link rel="stylesheet" type="text/css" href="../style.css">
<title></title>

</head>
<body style="background-color:#ececec">
<header>
</header>
<nav>
    <ul id="nav">

        <li><a href="../Rooms.php">Rooms</a></li>
        <li><a href="../Conference.php">Conference</a></li>
        <li><a href="../Tours.php">Tours</a></li>
        <li><a href="../Bistro.php">Bistro</a></li>
        <li><a href="../Booking.php">Booking</a></li>
        <li><a href="../Contact.php" id="exp">Contact</a></li>    
    </ul>
</nav>
<div>
<?php
$dbHost = "localhost";
$dbUser = "root";
$dbPass = "";
$dbName = "projektiPHP";

$conn = new mysqli ($dbHost, $dbUser, $dbPass, $dbName);
 
     if($conn->connect_error)
     {
         die("Failed to connect!!". $conn.connect_error);
     }

$username =mysqli_real_escape_string($conn,trim($_POST['name'])) ;
$Emri = mysqli_real_escape_string($conn,trim($_POST['firstname']));
$Mbiemri = mysqli_real_escape_string($conn,trim($_POST['lastname']));
$Email=mysqli_real_escape_string($conn,trim($_POST['email'])) ;
$Phone =mysqli_real_escape_string($conn,trim($_POST['phone'])) ; 
$Country = mysqli_real_escape_string($conn,trim($_POST['select']));
$Arrivaldate=mysqli_real_escape_string($conn,trim($_POST['date']));
$Untildate=mysqli_real_escape_string($conn,trim($_POST['until']));
$Adults=mysqli_real_escape_string($conn,trim($_POST['adults']));
$Children=mysqli_real_escape_string($conn,trim($_POST['children']));
$Roomtype=mysqli_real_escape_string($conn,trim($_POST['roomtypes']));
$Meals=mysqli_real_escape_string($conn,trim($_POST['meals']));

if (isset($_POST['balcony'])) {
    $Balcony = "Yes";
  } else {
    $Balcony = "No";
  }
$Questions=trim($_POST['data_10']);
     $sqlquery = "Insert into Reservations (Username, Emri ,Mbiemri ,Email ,Phonenumber ,Country,Arrivaldate, Untildate, Adults, Children, Roomtype, Meals, Balcony, Questions) values ('$username','$Emri','$Mbiemri','$Email','$Phone','$Country','$Arrivaldate','$Untildate','$Adults','$Children','$Roomtype','$Meals','$Balcony','$Questions')";
     $result = mysqli_query($conn,$sqlquery);

     if(!$result)     {
         die("!!" . mysqli_error($conn));
     }
     else{
         echo "<p id='sux'>You have booked successfully!</p>";
         echo "<p id='sus'style='text-align:left;'> Booking's list:</p>";
     }

     $stmt=$conn->prepare('SELECT Username, Emri, Mbiemri, Email FROM Reservations WHERE Username=?');
     $stmt->bind_param('s',$username);
     $stmt->execute();

     $res=$stmt->get_result();

      echo "<table id='guestsTab'>";
      
      echo "<tr>";

          echo "<th>Username</th>";
          echo "<th>Name</th>";
          echo "<th>Lastname</th>";
          echo "<th>Email</th>";

      echo "</tr>";

     
      
          if(mysqli_num_rows($res) > 0){
              while($row = $res->fetch_assoc()){
      
                  echo "<tr>";
                      echo "<td>" . $row['Username'] . "</td>";
                      echo "<td>" . $row['Emri'] . "</td>";
                      echo "<td>" . $row['Mbiemri'] . "</td>";
                      echo "<td>" . $row['Email'] . "</td>";
                  echo "</tr>";
      
              }
      
              echo "</table>";
      
          } 
      
   
     
   
?>
</div>
</body>
</html>
