<?php 
session_start();
?>


<html>
	<head>
		<title>
			ПРРР
		</title>
		<meta charset="utf-8" />
		</head>

	<body>
		<?php
$user = $_REQUEST['name'];
$passw = $_REQUEST['pass'];
$hash = hash('sha256', $passw);



$sql = "SELECT * FROM users WHERE login='$user' AND pwdhash='$hash'";

//echo $sql; А далее! пароль уг, привилегии слишком большие, код тоже уг, в нем пороль где-то,
//а также SQL ВНЕДРЕНИЕ!!!

$conn = mysqli_connect("localhost:3306","root","","cyb3");
$result = mysqli_query($conn, $sql);

//var_dump(mysqli_num_rows($result));
$num_rows = mysqli_num_rows($result);
mysqli_close($conn);

if ($num_rows >= "1") {
	echo("Драсте $user УРАААА ОБАНА");
	$_SESSION["user"] = $user;
}
else {
echo("bye bishhh");
}
?>

</body>
</html>