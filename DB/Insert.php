
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

$username = trim($_POST['name']);
$Emri = trim($_POST['firstname']);
$Mbiemri = trim($_POST['lastname']);
$Email= trim($_POST['email']);
$Phone = trim($_POST['phone']); 
$Country = trim($_POST['select']);
$Arrivaldate=trim($_POST['date']);
$Untildate=trim($_POST['until']);
$Adults=trim($_POST['adults']);
$Children=trim($_POST['children']);
$Roomtype=trim($_POST['roomtypes']);
$Meals=trim($_POST['meals']);
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


      $sql = "SELECT Username, Emri, Mbiemri, Email FROM Reservations";
      echo "<table id='guestsTab'>";
      
      echo "<tr>";

          echo "<th>Username</th>";
          echo "<th>Name</th>";
          echo "<th>Lastname</th>";
          echo "<th>Email</th>";

      echo "</tr>";

      if($res = mysqli_query($conn, $sql)){
      
          if(mysqli_num_rows($res) > 0){
      
            
              while($row = mysqli_fetch_array($res)){
      
                  echo "<tr>";
                      echo "<td>" . $row['Username'] . "</td>";
                      echo "<td>" . $row['Emri'] . "</td>";
                      echo "<td>" . $row['Mbiemri'] . "</td>";
                      echo "<td>" . $row['Email'] . "</td>";
                  echo "</tr>";
      
              }
      
              echo "</table>";
      
      
          } 
      
      } 
      else{
      
          echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
      
      }
   
?>
</div>
</body>
</html>
