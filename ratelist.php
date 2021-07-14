<?php
include("navbar.php");
?>
<?php
include("connect_db.php");?>
<br><br><br>
<br><br><br>
<center>
<table border="1" width="60%" style="text-align:center">
<thead>
<th colspan="4" align="center"><font size="6">Details of Fat</font></th></tr>
<tr><th>S. No.</th>
<th>Fat(per liter)</th>
<th>Rate(in rupees)*</th>
<th>Milk Type</th></tr>
</thead>
<?php
$query="select * from data";
$dash = $conn	 ->query($query);
$count=0;
while($row=mysqli_fetch_array($dash)){
$id=$row['id'];
$count=$count+1;?>

<tr><td><?php echo $count;?></td>
<td><?php echo $row['fat'];?></td>
<td><?php echo $row['rate'];?></td>
<td><?php
$milk_type=$row['milk_type'];
if($milk_type=="Buffalo"){
	echo "<p style='fontsize:3;color:green'><b>".$row['milk_type']."</b></p>";
}else{
	echo "<p style='fontsize:3;color:red'><b>".$row['milk_type']."</b></p>";
}
	?></td></tr>
<?php }
?>
<tr ><td colspan="4"><b>* SNF taxes and Rs 4/- will be deducted in calculation as they are directly sent to your bank account by Govt of Telangana.</b></td></tr>
</table>