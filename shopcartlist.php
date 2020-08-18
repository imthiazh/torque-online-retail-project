<?php
$ids = "0";
if(isset($_POST['chkselect']))
{
	$select=$_POST['chkselect'];
	if ($select != null)
	{
		$ids = implode(",",$select);
	}
}
//echo $ids;


$conn=new mysqli('localhost','id13344552_root','GoodboyS!12345','id13344552_registration');

/*select
json_array(id,name,price)
from sc_products where id in ($ids)
limit 5;

foreach($json_array as $value){
    echo $value . "<br>";
}*/
$querysearch="SELECT json_array(id,name,price,description,imgurl,ptype) FROM sc_products where id in ($ids)";
$search=mysqli_query($conn,$querysearch);
echo "test! json should appear below";
//echo $search;
$my_obj=json_encode($search);



/*
$json_array = array();  
           while($row = mysqli_fetch_assoc($search))  
           {  
                $json_array[] = $row;  
           }
		   $my_obj=json_encode($json_array);  


*/
?>
<html>
<head>
<style>
body {
  /*background-image: url("img/bg4.jpg");*/
  background-repeat: no-repeat;
  background-attachment: fixed;
}
.button {
  border-radius: 0px;
  background-color: #8B0000;
  border: none;
  color: crimson;
  text-align: center;
  font-size: 15px;
  padding: 10px;
  width: 175px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 25px;
}

.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button:hover span {
  padding-right: 25px;
}

.button:hover span:after {
  opacity: 1;
  right: 0;
}
</style>
</head>
<body>
<p id="showData"></p>
<script>
var myCart= <?php echo $my_obj ?>;
var col=["id","name","price","desc","img","ptype"];
var table = document.createElement("table");
var tr = table.insertRow(-1);
for (var i = 0; i < col.length; i++) {
            var th = document.createElement("th");      
            th.innerHTML = col[i];
            tr.appendChild(th);
        }
for (var i = 0; i < myCart.length; i++) {

            tr = table.insertRow(-1);

            for (var j = 0; j < col.length; j++) {
                var tabCell = tr.insertCell(-1);
                tabCell.innerHTML = myCart[i][col[j]];
            }
        }
var divContainer = document.getElementById("showData");
        divContainer.innerHTML = "";
        divContainer.appendChild(table);




</script>

<h1 align="right" style="font-family:Ubuntu;color:Crimson;font-size:380%;">Your Cart</h1>
<table align="center" border="1px" style="font-family:Ubuntu;color:Crimson;font-size:150%;">
<tr>
<th colspan=5><h2>Shopping Cart List </h2></th>
</tr>
<tr>
<th>ID</th>
<th>Name</th>
<th>Price</th>
<th>Quantity</th>
<th>Amount</th>
</tr>
<?php
$total=0;
while($row=mysqli_fetch_array($search))
{ 
	$qtyvalue = "quantity".$row["id"];
	$qty= $_POST[$qtyvalue];
	$amt = $qty*$row['price'];
	$formattedAmt = number_format($amt, 2);
	$total = $total+$amt;
	
	?>
<tr>
<td><?php echo $row['id']?></td>
<td><?php echo $row['name']?></td>
<td><?php echo number_format($row['price'],2) ; ?></td>
<td align=right><?php echo $_POST[$qtyvalue] ; ?></td>
<td align=right><?php echo $formattedAmt ; ?></td>
</tr>

<?php
}
?>
<tr>
<td>Total</td>
<Td colspan= 4 align = right><?php echo number_format($total, 2) ; ?>
</td>
</tr>

</table>
<br><br>
<center>
<button class="button" style="font-family:Ubuntu;color:Crimson;font-size:100%;" onclick="goBack()">Continue Shopping</button> <script> function goBack() { window.history.back(); } </script>
<a href="pay.php?amt=<?php echo $total;?>">Pay now</a>
</center>

</body>
</html>