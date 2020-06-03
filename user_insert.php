<!doctype html>
<html>
<head>
  <title> Mysqli Connection in PHP </title>
  
  </head>
  
  <body>
  <form action="user_insert.php" method="post">
  <b> User Name : </b> <input type="text" name="user_name"/> <br>
  <b> User Email : </b> <input type="text" name="user_email"/> <br>
  <b> User Pass : </b> <input type="password" name="user_pass"/> <br>
     <input type="submit" name="user" value="Submit Now!"/>
  </form>
  <?php
  $con = mysqli_connect("localhost:3308","root","","mytest");
    
	if(mysqli_connect_errno())		
		echo "MYSQLi Connection Failed: ". mysqli_connect_errno();

     // Mysqli Connection End here
	 // Inserting data into table using php
	 
	  if(isset($_POST['user'])){
		  
		  $user_name=$_POST['user_name'];
		  $user_email=$_POST['user_email'];
		  $user_pass = $_POST['user_pass'];  
		  
         $query= "insert into new_user(user_name,user_email,user_password) values('
		 $user_name','$user_email','$user_pass')";		
		
		 $insert_query= mysqli_query($con,$query);
		
	
		
	  } // Inserting data commands ends here



  
?>
  </body>
  </html>