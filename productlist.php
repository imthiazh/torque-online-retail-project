<html>
<head>
<style>
.img {
    position: relative;
    float: left;
    width:  100px;
    height: 100px;
    background-position: 50% 50%;
    background-repeat:   no-repeat;
    background-size:     cover;
}
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
}
body {
  background-image: url("img/bg4.jpg");
  background-repeat: no-repeat;
  background-attachment: fixed;
}
div.gallery {
  margin: 5px;
  border: 1px solid #ccc;
  float: left;
  width: 300px;
}

div.gallery:hover {
  border: 3px solid #de1738;
}

div.gallery img {
  width: 300px;
  height: 200px;
}

div.desc {
  padding: 15px;
  text-align: center;
}
/* The container */
.container {
  display: block;
  position: relative;
  padding-left: 35px;
  margin-bottom: 12px;
  cursor: pointer;
  font-size: 22px;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

/* Hide the browser's default checkbox */
.container input {
  position: absolute;
  opacity: 0;
  cursor: pointer;
  height: 0;
  width: 0;
}

/* Create a custom checkbox */
.checkmark {
  position: absolute;
  top: 10px;
  left: 0;
  height: 15px;
  width: 15px;
  background-color: #eee;
}

/* On mouse-over, add a grey background color */
.container:hover input ~ .checkmark {
  background-color: #ccc;
}

/* When the checkbox is checked, add a blue background */
.container input:checked ~ .checkmark {
  background-color: #de1738;
}

/* Create the checkmark/indicator (hidden when not checked) */
.checkmark:after {
  content: "";
  position: absolute;
  display: none;
}

/* Show the checkmark when checked */
.container input:checked ~ .checkmark:after {
  display: block;
}

/* Style the checkmark/indicator */
.container .checkmark:after {
  left: 3px;
  top: 0px;
  width: 5px;
  height: 10px;
  border: solid white;
  border-width: 0 3px 3px 0;
  -webkit-transform: rotate(45deg);
  -ms-transform: rotate(45deg);
  transform: rotate(45deg);
}
  
  input[type=text] {
  width: 15%;
  padding: 12px 20px;
  margin: 8px 2px;
  box-sizing: border-box;
  border: 2px;
  background-color:Crimson ;
  color: white;
}
.button {
  border-radius: 0px;
  background-color: crimson;
  border: none;
  color: grey;
  text-align: center;
  font-size: 15px;
  padding: 10px;
  width: 125px;
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
p {
  font-family: "Ubuntu";
  font-color: "Crimson";
}
</style>
<script>
function search()
{
	
	var search1 = document.getElementById("txtsearch").value;
	window.location.href='productlist.php?txtsearch='+search1;
}
</script>
</head>
<br><br>
<h1 align="right" style="font-family:Ubuntu;color:Crimson;font-size:380%;">Products</h1>
<h2 align="right" style="font-family:Ubuntu;color:Crimson;font-size:150%;">Best-in-Class Durability</h2>
<?php 
  session_start(); 
  if (isset($_SESSION['username'])) : ?>
    	<h3 style="font-family:Ubuntu;color:Crimson;font-size:175%;">Welcome <strong><?php echo $_SESSION['username']; ?> !</strong></h3>
    <?php endif ?>


<body>
<a href="index.php">Back</a>
<form action="index.php">
<input type="button" class="button" align="right" value="Home" onclick="javascript:window.location='index.php'"></input>
</form>
<form method="POST" action="shopcartlist.php" align="center">

<?php

$conn=new mysqli('localhost','id13344552_root','GoodboyS!12345','id13344552_registration');
$querysearch="SELECT * FROM sc_products";

$querysearche="SELECT * FROM sc_products where ptype='engine'";
$querysearchs="SELECT * FROM sc_products where ptype='suspension'";
$querysearchb="SELECT * FROM sc_products where ptype='body'";
$querysearcht="SELECT * FROM sc_products where ptype='tyre'";

$searchval="";
if (isset($_GET['txtsearch']))
{
	$searchval = $_GET['txtsearch'];
	$querysearche = $querysearche." and name like '%".$_GET['txtsearch']."%'";
	$querysearchs = $querysearchs." and name like '%".$_GET['txtsearch']."%'";
	$querysearchb = $querysearchb." and name like '%".$_GET['txtsearch']."%'";
	$querysearcht = $querysearcht." and name like '%".$_GET['txtsearch']."%'";
}
$searche=mysqli_query($conn,$querysearche);
$searchs=mysqli_query($conn,$querysearchs);
$searchb=mysqli_query($conn,$querysearchb);
$searcht=mysqli_query($conn,$querysearcht);



?>

<table border=1 width=100%>
<tr><td align="left" >
<line align="left" style="font-family:Ubuntu;color:Crimson;font-size:150%;">
  Search for products :</line>
<input type="text" id="txtsearch" name="txtsearch" value="<?php echo $searchval;?>" placeholder="🔎 Search..."></input>
<span><input type=button class="button" align="right" name="butsearch" value="Go!" onClick="javascript:search()"></input></button></span>
</td></tr>
<tr><td align="right" >
<span><input type="submit" class="button" name="addshop" value="Add ShopCart"></span></button></input>
</td></tr>
<tr>
</table>
<table border=1>
<td colspan=4>
<h2 align="left" style="font-family:Ubuntu;color:Crimson;font-size:200%;">Engine</h2>
</td>
</tr> 
<tr>
<?php

while($row=mysqli_fetch_array($searche))
{
?>
<Td>

<div class="gallery"   >
  <a href="javascript:window.open('displaypage.php?id=<?php echo $row['id'];?>','',' toolbar =no, titlebar=no, left =400, top=150, width=600,height=400')">
    <img src="<?php echo $row['imgurl']?>" alt="Cinque Terre" width="1200" height="800"  >
  </a>
  <div class="desc" style="font-family:Ubuntu;color:Crimson;"><label class="container"><input type="checkbox" name=chkselect[] value='<?php echo $row['id'];?>'><span class="checkmark"></span></label>
  &nbsp;&nbsp;&nbsp;<?php echo $row['name'];?>&nbsp;&nbsp;&nbsp;&nbsp; <input type="number" name="quantity<?php echo $row['id'];?>"
  min="1" max="100" value="10">
  </div>
</div>
</Td>
<?php
}
?>
</tr> 

<tr>
<td colspan=4>
<h2 align="left" style="font-family:Ubuntu;color:Crimson;font-size:200%;">Suspension</h2>
</td>
</tr> 
<tr>
<?php
while($row=mysqli_fetch_array($searchs))
{
?>
<Td>

<div class="gallery"   >
  <a href="javascript:window.open('displaypage.php?id=<?php echo $row['id'];?>','',' toolbar =no, titlebar=no, left =400, top=150, width=600,height=400')">
    <img src="<?php echo $row['imgurl']?>" alt="Cinque Terre" width="1200" height="800"  >
  </a>
  <div class="desc" style="font-family:Ubuntu;color:Crimson;"><label class="container"><input type="checkbox" name=chkselect[] value='<?php echo $row['id'];?>'><span class="checkmark"></span></label>
  &nbsp;&nbsp;&nbsp;<?php echo $row['name'];?>&nbsp;&nbsp;&nbsp;&nbsp; <input type="number" name="quantity<?php echo $row['id'];?>"
  min="1" max="100" value="10">
  </div>
</div>
</Td>
<?php
}
?>

</tr> 

<tr>
<td colspan=4>
<h2 align="left" style="font-family:Ubuntu;color:Crimson;font-size:200%;">Metal UniBody</h2>
</td>
</tr> 
<tr>
<?php
while($row=mysqli_fetch_array($searchb))
{
?>
<Td>

<div class="gallery"   >
  <a href="javascript:window.open('displaypage.php?id=<?php echo $row['id'];?>','',' toolbar =no, titlebar=no, left =400, top=150, width=600,height=400')">
    <img src="<?php echo $row['imgurl']?>" alt="Cinque Terre" width="1200" height="800"  >
  </a>
  <div class="desc" style="font-family:Ubuntu;color:Crimson;"><label class="container"><input type="checkbox" name=chkselect[] value='<?php echo $row['id'];?>'><span class="checkmark"></span></label>
  &nbsp;&nbsp;&nbsp;<?php echo $row['name'];?>&nbsp;&nbsp;&nbsp;&nbsp; <input type="number" name="quantity<?php echo $row['id'];?>"
  min="1" max="100" value="10">
  </div>
</div>
</Td>
<?php
}
?>

</tr> 

<tr>
<td colspan=4>
<h2 align="left" style="font-family:Ubuntu;color:Crimson;font-size:200%;">Tyre</h2>
</td>
</tr> 
<tr>
<?php
while($row=mysqli_fetch_array($searcht))
{
?>
<Td>

<div class="gallery"   >
  <a href="javascript:window.open('displaypage.php?id=<?php echo $row['id'];?>','',' toolbar =no, titlebar=no, left =400, top=150, width=600,height=400')">
    <img src="<?php echo $row['imgurl']?>" alt="Cinque Terre" width="1200" height="800"  >
  </a>
  <div class="desc" style="font-family:Ubuntu;color:Crimson;"><label class="container"><input type="checkbox" name=chkselect[] value='<?php echo $row['id'];?>'><span class="checkmark"></span></label>
  &nbsp;&nbsp;&nbsp;<?php echo $row['name'];?>&nbsp;&nbsp;&nbsp;&nbsp; <input type="number" name="quantity<?php echo $row['id'];?>"
  min="1" max="100" value="10">
  </div>
</div>
</Td>
<?php
}
?>

</tr> 
</table>



</form>
</body>
</html>
