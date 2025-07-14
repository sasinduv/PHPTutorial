<?php
$age = date("Y") - $_POST['birthyear'];
echo "Title: " . $_POST['title'] . "<br>";
echo "Name: " . $_POST['name'] . "<br>";
echo "Age: " . $age . "<br>";

if ($age < 45) {
  echo "✅ You can register.";
} else {
  echo "❌ Sorry, only users under 45 can register.";
}
?>
