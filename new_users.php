<!doctype html>
<html>
<head>
  <title> Mysqli Connection in PHP </title>
  
  </head>
  
  <body>
  <form action="new_users.php" method="post">
  <b> User Name : </b> <input type="text" name="user_name"/> <br>
  <b> User Email : </b> <input type="text" name="user_email"/> <br>
  <b> User Pass : </b> <input type="password" name="user_pass"/> <br>
     <input type="submit" name="user" value="Submit Now!"/>
  </form>
  <?php
  $con = mysqli_connect("localhost:3308","root","","mytest");
    
	if($con){
		
	echo "Database successfully connected!";
	}
  
?>
  </body>
  </html>