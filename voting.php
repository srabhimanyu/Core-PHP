<!doctype html>
<html>
<head>
   <title> Voting System in php </title>
<link rel="stylesheet" href="style.css"/>
</head>

<body>
<div style="background: black; color: white; text-align: center; width: 100%; padding: 
7px; font-family:comic sans ms;"><h2>Vote For your favorite player. </h2> </div> 
<div class="container">
  <form action="index.php" method="post" align="center">
  <img src="images/messi.jpg" width="280" height="250"/>
  <img src="images/drogba.jpg" width="280" height="250"/>
  <img src="images/ronaldo.jpg" width="280" height="250"/>
  
<input type="submit" name="messi" value="Vote for messi"/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="submit" name="drogba" value="Vote for drogba"/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="submit" name="Ronaldo" value="Vote for Ronaldo"/>

</form>
<?php

 $con = mysqli_connect("localhost:3308,"root","","mytest");
 
  if(isset($_POST['messi']))
 

?>
</div>
</body>

<div style="background: black; color: white; text-align: center; width: 100%; padding: 
7px; font-family:comic sans ms;"><h2>Created by Abhimanyu Srivastava </h2> </div> 


</html>