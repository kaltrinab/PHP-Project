<!DOCTYPE html>
<html>
<head>
    <title></title>
    <style type="text/css">
        <style>
#feedbacks {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

#feedbacks td, #feedbacks th {
    border: 1px solid #088A4B;;
    padding: 8px;
}

#feedbacks tr:nth-child(even){background-color: #f2f2f2;}

#feedbacks tr:hover {background-color: #ddd;}

#feedbacks th {
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
</head>
<?php 
    require_once('db.php');
?>


  <body>
    
<?php require_once('header-admin.html');?>

      <div align="center">
                            <table id="feedbacks">
                                <thead >
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Message</th>
                                </thead>
                                <tbody>
                                    <?php
                                        $q = "SELECT * FROM feedback ORDER BY feedback.id ASC";
                                        $run = mysqli_query($con, $q);
                                        if(mysqli_num_rows($run) > 0){
                                            while($row = mysqli_fetch_array($run)){
                                        
                                    ?>
                                    <tr>
                                        <td><?php echo $row['id']; ?></td>
                                        <td><?php echo $row['name']; ?></td>
                                        <td><?php echo $row['email']; ?></td>
                                        <td ><?php echo $row['phone']; ?></td>
                                        <td><?php echo $row['message']; ?></td>
                                        </center>
                                    </tr>
                                    <?php
                                            }
                                        }
                                    ?>
                                    
                                </tbody>
                            </table>
</div>



</body></html>