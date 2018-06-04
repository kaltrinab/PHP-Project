<?php
include("db.php");



mysqli_select_db($con,"projektiphp");

$commentNewCount=$_POST['commentNewCount'];
$result=mysqli_query($con,"select * from staff limit $commentNewCount");

echo "<table>
<tr>
<th>ID</th>
<th>Emri</th>
<th>Mbiemri</th>
<th>Pozita</th>
</tr>";
if(mysqli_num_rows($result)>0){  
    while($data = mysqli_fetch_row($result))
    {   
        echo "<tr>";
        echo "<td align=center>".$data[0]."</td>";
        echo "<td align=center>".$data[1]."</td>";
        echo "<td align=center>".$data[2]."</td>";
        echo "<td align=center>".$data[3]."</td>";
        echo "</tr>";
    }
    echo "</table>";}

else{
    echo "There are no more rows!";
}
?>







