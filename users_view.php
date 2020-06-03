<!doctype html>
<html>
<head>
  <title> Mysqli Connection in PHP </title>
  
  </head>
  
  <body>
  <form action="users_view.php" method="post">
  <b> User Name : </b> <input type="text" name="user_name"/> <br>
  <b> User Email : </b> <input type="text" name="user_email"/> <br>
  <b> User Pass : </b> <input type="password" name="user_pass"/> <br>
     <input type="submit" name="user" value="Submit Now!"/>
  </form>
  
  <!-- Select Data Start From Here -->
  <h3><a href="users_view.php?view">View Users</a></h3>
  <?php
  $con = mysqli_connect("localhost:3308","root","","mytest");
   if(mysqli_connect_errno())
   {
	 echo "MYSQLi Connection Failed: ". mysqli_connect_error();  
   }   
  
   if(isset($_GET['view'])){
     
	 echo "
	  <table width='800' border='1' bgcolor='pink'>
	  <tr align='center'>
	   <th> User No : </th>
	   <th> User Name: </th>
	   <th> User Email: </th>
	   <th> User Pass: </th>
	   <th> Delete User: </th>
	   <th> Update User: </th>
	   </tr>
	   
	   ";
	   
	   $sel_users="select * from new_user";
	   $run_users=mysqli_query($con,$sel_users);
	   
	   while($row=mysqli_fetch_array($run_users)){
		   $u_id=$row['user_id'];
		   $u_name=$row['user_name'];
		   $u_email=$row['user_email'];
		   $u_pass = $row['user_password'];
		
       echo "
	  
	  <tr align='center'>
	     <td> $u_id </td>
		 <td> $u_name </td>
		 <td> $u_email </td>
		 <td> $u_pass </td>
		 <td><a href='new_users.php?del=$u_id'> Delete </a></td>
		 <td> <a href='new_users.php?edit=$u_id'> Edit </a></td>
	   </tr>
	   	   ";
		
		   
	   }
	    echo "</table>";
   }	   
  
  ?>
  <!-- Select Data End From Here -->
  
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