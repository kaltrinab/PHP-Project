<!DOCTYPE html>
<html>
<head>
    <title></title>
    <style type="text/css">
        <style>
#rezervimet {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

#rezervimet td, #rezervimet th {
    border: 1px solid  #088A4B;
    padding: 8px;
}

#rezervimet tr:nth-child(even){background-color: #f2f2f2;}

#rezervimet tr:hover {background-color: #ddd;}

#rezervimet th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    opacity: 0.9;
   background-color: #088A4B;
    color: white;
}

div{

    margin:10%;
}
</style>
    </style>
</head>
<?php 
    require_once('db.php');
?>


  <body>
    
<?php require_once('header-admin.html');?>

      
                        <div align="center">
                           <table id="rezervimet">
                                <thead >
                                    <th><center>ID</center></th>
                                    <th><center>Username</center></th>
                                    <th><center>First Name</center></th>
                                    <th><center>Last Name</center></th>
                                    <th><center>email</center></th>
                                    <th><center>Phone</center></th>
                                    <th><center>Arrival Date</center></th>
                                    <th><center>Until</center></th>
                                    <th><center>Adults</center></th>
                                    <th><center>Children</center></th>
                                    <th><center>Room</center></th>
                                    <th><center>Meals</center></th>
                                    <th><center>Balcony</center></th>
                                    <th><center>Message</center></th>
                                </thead>
                                <tbody>
                                      <?php
                                        $q = "SELECT * FROM reservations ORDER BY reservations.id ASC";
                                        $run = mysqli_query($con, $q);
                                        if(mysqli_num_rows($run) > 0){
                                            while($row = mysqli_fetch_array($run)){
                                        
                                    ?>
                                    <tr>
                                        <td><center><?php echo $row['ID']; ?></center></td>
                                        <td><center><?php echo $row['Username']; ?></center></td>
                                        <td><center><?php echo $row['Emri']; ?> </center></td>
                                        <td><center><?php echo $row['Mbiemri']; ?></center></td>
                                        <td><center><?php echo $row['Email']; ?> </center></td>
                                        <td><center><?php echo $row['Phonenumber']; ?> </center></td>
                                        <td><center><?php echo $row['Arrivaldate']; ?> </center></td>
                                        <td><center><?php echo $row['Untildate']; ?></center></td>
                                        <td><center><?php echo $row['Adults']; ?></center></td>
                                        <td><center><?php echo $row['Children']; ?></center></td>
                                        <td><center><?php echo $row['Roomtype']; ?> </center></td>
                                        <td><center><?php echo $row['Meals']; ?> </center></td>
                                        <td><center><?php echo $row['Balcony']; ?></center></td>
                                        <td><center><?php echo $row['Questions']; ?></center></td>

                                    </tr>
                                    <?php
                                            }
                                        }
                                    ?>
                                    
                                </tbody>
                            </table>
</div>   



</body></html>