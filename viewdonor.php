<?php

include 'header.php';
?>
<div id="main-content">
    <h2>All records</h2>

<?php


$conn = mysqli_connect("localhost","root","","rcf_task") or die("connection failed");

$sql = "SELECT email,serial FROM donorlist WHERE DEL is NULL";

$result = mysqli_query($conn,$sql) or die("query unsuccessfull");


if(mysqli_num_rows($result)>0)
{









?>


<table cellpadding="7px">

<thead>
<th>Serial</th>
<th>Name</th>
</thead>
<tbody>
<?php

while($row = mysqli_fetch_assoc($result))
{


?>
<tr>
<td><?php echo $row['serial']?></td>



<td><?php echo $row['email']?></td>

<td>
<a href='viewdetails.php?serial=<?php echo $row['serial']?>'>View Details</a>
</td>

</tr>
<?php } ?>
</tbody>

</table>

<?php  } ?>




</div>


