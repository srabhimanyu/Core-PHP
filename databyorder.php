<!doctype html>
<html>
<head>
  <title> Mysqli Connection in PHP </title>
  
  </head>
  
  <body>
  <form action="databyorder.php" method="post">
  <b> User Name : </b> <input type="text" name="user_name"/> <br>
  <b> User Email : </b> <input type="text" name="user_email"/> <br>
  <b> User Pass : </b> <input type="password" name="user_pass"/> <br>
     <input type="submit" name="user" value="Submit Now!"/>
  </form>
  
  <!-- Select Data Start From Here -->
  <h3><a href="databyorder.php?view">View Users</a></h3>
  <?php
  $con = mysqli_connect("localhost:3308","root","","mytest");
   if(mysqli_connect_errno())
   {
	 echo "MYSQLi Connection Failed: ". mysqli_connect_error();  
   }   
  
   if(isset($_GET['view'])){
     
	 echo "
	  <table width='800' border='1' bgcolor='yellow'>
	  <tr align='center'>
	   <th> User No : </th>
	   <th> User Name: </th>
	   <th> User Email: </th>
	   <th> User Pass: </th>
	   <th> Delete User: </th>
	   <th> Update User: </th>
	   </tr>
	   
	   ";
	   
	   $sel_users="select * from new_user order by 1 DESC LIMIT 0,3";
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
		 <td><a href='databyorder.php?del=$u_id'> Delete </a></td>
		 <td> <a href='databyorder.php?edit=$u_id'> Edit </a></td>
	   </tr>
	   	   ";
		
		   
	   }
	    echo "</table>";
   }	   
   // Deleting Data From the Table
   
    if(isset($_GET['del'])){
		
		$del_id=$_GET['del'];
	   
	    $delete_users = "delete from new_user where user_id='$del_id'";
	
	    $run_delete = mysqli_query($con,$delete_users);
			
		if($run_delete){
		
		echo "<script>alert('A user has been deleted!') </script>";
		echo "<script> window.open('databyorder.php?view','_self')</script>";
    
			
		}	
		
		
		
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
	  }

       if(isset($_GET['edit']))
	   {
		 
		 $edit_id= $_GET['edit'];
         $get_user = "select * from new_user where user_id='$edit_id'";  
		 
          $run_user = mysqli_query($con,$get_user);		 
		  $row_user=mysqli_fetch_array($run_user);
		  
		  $user_id=$row_user['user_id'];
		  $user_name = $row_user['user_name'];
		  $user_email= $row_user['user_email'];
		  $user_pass = $row_user['user_password'];
		  
		  echo "
	<form action='' method='post'>
		<input type='text' name='u_name' value='$user_name'/><br/>
		<input type='text' name='u_email' value='$user_email'/><br/>
		<input type='password' name='u_pass' value='$user_pass'/> <br/>
        <input type='submit'    name='update' value='update user'/><br/>
	 </form>	   
	     ";
	   }	
// Updating data code  
       if(isset($_POST['update'])){
		   
		   $update_id=$user_id;
           $name = $_POST['u_name'];
		   $email = $_POST['u_email'];
		   $pass = $_POST['u_pass'];
		   
      $update_users="update new_user set user_name='$name',user_email='$email
	  ',user_password='$pass'where user_id='$update_id'";
	   
	   $run_update=mysqli_query($con,$update_users);
		 
        if($run_update){
		
        echo "<script>alert('A user has been updated!') </script>";
		echo "<script> window.open('databyorder.php?view','_self')</script>";
    
		}

		 
	   }
	   
?>
  </body>
  </html>