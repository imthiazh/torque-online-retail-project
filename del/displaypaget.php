<?php
$ids=$_POST['id'];



$conn=new mysqli('localhost','root','','registration');
//$querysearch="SELECT * FROM sc_products";
$querysearch="SELECT * FROM sc_products where id in ($ids)";
//echo $querysearch;
$search=mysqli_query($conn,$querysearch);
?>
<html>
<body>
<table align="center" border="1px">
<tr>
<th colspan=5><h2>Shopping Cart List </h2></th>
</tr>
<tr>
<th>ID</th>
<th>Name</th>
<th>Price</th>

</tr>
<?php
$total=0;
if($row=mysqli_fetch_array($search))
{
	$qtyvalue = "quantity".$row['id'];

	
	?>
<tr>
<td><?php echo $row['id']?></td>
<td><?php echo $row['name']?></td>
<td><?php echo $row['price'] ; ?></td>

</tr>

<?php
}
?>

</table>

</body>
</html>