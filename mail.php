<!doctype html>
<html>
<head>
    <title> PHP Emails!</title>
	</head>
<body>
<?php
$to="mahdi_talat@yahoo.com";
$subject ="From waheedacademy.com";
$message = "Hi there Please learn Java Spring Hibernate Framework";

$sender="abdullwaheed244@gmail";

mail($to,$subject,$message,$sender);

echo "<h2> The email was sent successfully</h2>";

?>
</body>
</html>