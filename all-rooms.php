<!DOCTYPE html>
<html>
<head><title>Rooms</title>

<style type="text/css">

#dhomat
{
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

#dhomat td, #dhomat th 
{
    border: 1px solid  #088A4B;;
    padding: 8px;
}

#dhomat tr:nth-child(even){background-color: #f2f2f2;}
#dhomat tr:hover {background-color: #ddd;}
#dhomat th {
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
        <table id="dhomat">
            <thead>
                <th><center>ID</center></th>
                <th><center>Room Title</center></th>
                <th><center>Size</center></th>
                <th><center>Price</center></th>
            </thead>
            <tbody>
                <?php
                    $q = "SELECT * FROM rooms ORDER BY rooms.id ASC";
                    $run = mysqli_query($con, $q);
                    if(mysqli_num_rows($run) > 0)
                    {
                        while($row = mysqli_fetch_array($run))
                        {
                ?>
                <tr>
                    <td><center><?php echo $row['id']; ?></center></td>
                    <td><center><?php echo $row['title']; ?></center></td>
                    <td><center><?php echo $row['size']; ?> sq</center></td>
                    <td ><center><?php echo $row['price']; ?> /-</center></td>
                </tr>
                <?php
                        }
                    }
                ?>
                                    
            </tbody>
        </table>
</div>   

</body></html>