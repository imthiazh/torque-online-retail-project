<?php 
  session_start(); 

 /* if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  */
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
 // 	header('location: login.php');
  }
?>
<html>
<head>
<style>
body {
  background-image: url("bg4.jpg");
  background-repeat: no-repeat;
  background-attachment: fixed;
}
</style>
<title align="center">


WELCOME TO MY FIRST WEBPAGE
</title>

<body>
<h1 align="right" style="font-family:Ubuntu;color:Crimson;font-size:380%;">TORQUE AUTOMATION</h1>
<h2 align="right" style="font-family:Ubuntu;color:Crimson;font-size:150%;">Technology drives ...</h2>

<?php  if (isset($_SESSION['username'])) : ?>
    	<p align="left" style="font-family:Ubuntu;color:Crimson;font-size:175%;">Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
    	<p align="left" style="font-family:Ubuntu;color:Crimson;font-size:100%;"> <a href="index.php?logout='1'" style="color: red;">logout</a> </p>
    <?php endif ?>
	<img src="Resources\Home\car.jpg" align="left"></img>
<br><br><br>

 <a href="login.php"><div align="right"style="font-family:Ubuntu;color:Crimson;font-size:150%;">Login.........................................</div></a> 
<br>
<br><br><br>




 <a href="productlist.php"><div align="right"style="font-family:Ubuntu;color:Crimson;font-size:150%;">Our Products.........................................</div></a> 
<br>

 <object width="100%" height="500px" data="snippet.html"></object> <div align="right"style="font-family:Ubuntu;color:Crimson;font-size:150%;">Our Services.........................................</div> </object> <br><br><br>


 <object width="100%" height="500px" data="snippet.html"></object> <div align="right"style="font-family:Ubuntu;color:Crimson;font-size:150%;">Research and Development...............</div> </object> <br>


 <object width="100%" height="500px" data="snippet.html"></object> <div align="right"style="font-family:Ubuntu;color:Crimson;font-size:150%;">Innovation.............................................</div> </object> <br>
<br>


<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<br><br><br>


</body>
</html>
