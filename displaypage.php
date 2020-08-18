<?php
$ids=$_GET['id'];
//$ids="2";


$conn=new mysqli('localhost','id13344552_root','GoodboyS!12345','id13344552_registration');
//$querysearch="SELECT * FROM sc_products";

$querysearch="SELECT * FROM sc_products where id = ($ids)";
//echo $querysearch;
$search=mysqli_query($conn,$querysearch);
?>
<html>
<head>
<style>
body {
  background-image: url("img/bg4.jpg");
  background-repeat: no-repeat;
  background-attachment: fixed;
}
</style>
</head>
<body text="crimson">
<table align="center" border="1px">
<?php
$total=0;
if($row=mysqli_fetch_array($search))
{

	?>
<tr><th colspan=3><h2><?php echo $row['name']?> </h2></th></tr>
<tr>
<th colspan=2><img src="<?php echo $row['imgurl']?>" alt="Cinque Terre" width="400" height="300"  ></th>
<th >Desc:<?php echo $row['description']?>
<BR><BR><BR>Price:<?php echo $row['price']?> </th>
</tr>
<tr>

</tr>


<?php
}
?>

</table>

</body>
</html>