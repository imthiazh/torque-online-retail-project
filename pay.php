<?PHP

$user='id13344552_root';
$pass='GoodboyS!12345';
$db='id13344552_registration';
$conn=new mysqli('localhost',$user,$pass,$db);
if(!$conn)
echo "NO CONNECTION TO DATABASE<br>";

mysqli_select_db($conn,'registration');

$amt=0;
if(isset($_GET['amt']))
{
$amt=$_GET['amt'];
}
?>
<!DOCTYPE html>
<html>
<body style="font-family:Ubuntu;color:Crimson;font-size:100%;">
<form method="POST" action="" align="center">
<img src="Resources\Home\Torque-Logo_V.png" align="right""></img>
<table border=1 align="center" style="font-family:Ubuntu;color:Crimson;font-size:100%;">
<tr>
<td align="center" style="font-family:Ubuntu;color:Crimson;font-size:380%;">
Payment Page</td>
</tr>
<tr><td colspan=2>&nbsp;</td></tr>
<tr>
<Td>
Name (as in Credit/Debit card)
</td><td align="left"><input type="text" name="name" required></td></tr>
<tr><Td>Card Number</td><Td align="left">
<input type="number" name="acno" required>&nbsp;
<input type="number" name="acno2" required></td></tr>
<tr><Td>Expiry Date</td><Td align="left">
<input type="date" name="expiry" required ></td></tr>
<tr><Td>CCV</td><Td align="left">
<input type="password" name="ccv" required></td></tr>
<tr><Td>Amount</td><Td align="left">
<input type="number" name="amt" value="<?php echo $amt;?>" readonly></td></tr>
<tr>
<td colspan=2 align="center">
<input type="submit" name="submit" value="PAY"></td></tr>
<tr><td colspan=2>
<a href="productlist.php">BACK TO SHOPPING</a>
</td>
</tr>
</table>
</form>
</body>
</html>
<?php

if(isset($_POST['submit']))
{
$name2=$_POST['name'];
$num1=$_POST['acno'];
$num2=$_POST['acno2'];
$date2=$_POST['expiry'];
$pass2=$_POST['ccv'];
}
mysqli_select_db($conn,'registration');

$querycheck="SELECT * FROM users";
$check=mysqli_query($conn,$querycheck);
if(isset($_POST['submit']))
{
while($row=mysqli_fetch_array($check))
{
	if((strtolower($name2)==strtolower($row['cdname']))&&($num1==$row['cdnumber1'])&&($num2==$row['cdnumber2'])&&($date2==$row['Expiry'])&&($pass2==$row['ccv']))
		echo "The transaction is successful." ;
	else
		echo "Invalid Credentials";
}
}
?>













