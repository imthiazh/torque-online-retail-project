
<?php

$conn=new mysqli('localhost','root','','registration');
$querysearch="SELECT * FROM sc_products where id in (0)";
$search=mysqli_query($conn,$querysearch);
while($row=mysqli_fetch_array($search))
{
echo $row['name'];
}
?>
