<DOCTYPE html>
<html lang="en">
<head>

	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>

</head>
<body>
	<!--form action="postdemo.php" method="get"->
	<form action="getset.php" method="post">
	<label>Username:</label><br>
	<input type="text" name="username"><br>
	<label>Password:</label><br>
	<input type="password" name="password"><br>
	<input type="submit" value="Log in">
	</form-->

	<form action="postdemo.php" method="post">
	<label>Quantity</label><br>
	<input type="text" name="quantity"><br>
	<input type="submit" name="Total"><br>
	</form>

</body>
</html>
<?php

	/*echo $_POST["username"] . "<br>";

	echo "{$_POST["password"]} <br>";*/
	
	$item = "Pizza";
	$price = 250.75;
	$quantity = $_POST["quantity"];
	$total = null;
	
	$total = $quantity * $price;
	echo "You ordered {$quantity} {$item}s<br>";
	echo "Your Total is: rs.{$total}";
?>