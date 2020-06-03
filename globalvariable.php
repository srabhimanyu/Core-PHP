<!doctype html>
<html>
<head>
<title> Global Variable </title>

</head>

<body>
<form action="" method="post"> 
<!-- we are not using get method because it exposes the data-->                                                             
 Write Anything : <input type="text" name="text"/>
 <input type="submit" value="Press Now!"/>
 
 </form>
 
<?php

 echo $_POST['text'];

$_SERVER
// Global variable is a variable  which can give you data from  anywhere from browser

?>

</body>
</html>
