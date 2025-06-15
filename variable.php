<?php

$name = "sasindu";
$food = "pizza";
$email = "sasindu@gamil.com";

$age = 21;
$users = 2;
$qnt = 3;

$gpa = 3.11;
$price = 150.25;
$tax_rate = 5.1;

//boolean variables
$employed = false;
$online = true;


echo "Hello {$name} <br>";
echo "You like {$food} <br>";
echo "Your email {$email}<br>";

echo "You are {$age} years old<br>";
echo "There are {$users} users online<br>";
echo "You would like to buy {$qnt} items <br>";

echo "You GPA is: {$gpa}. <br>";
echo "Your pizza is \${$price}. <br>";
echo"The sales tax rate is: {$tax_rate}%<br>";

echo"Employer status is: $employed <br>";
echo"User status is: $online <br>";

?>