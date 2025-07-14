<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  echo "Name: " . $_POST['name'] . "<br>";
  echo "Email: " . $_POST['email'] . "<br>";
  echo "Reg No: " . $_POST['regno'] . "<br>";
  echo "Gender: " . $_POST['gender'] . "<br>";
} else {
?>
<form method="post">
  Name: <input type="text" name="name"><br>
  Email: <input type="text" name="email"><br>
  Registration No: <input type="text" name="regno"><br>
  Gender: 
    <input type="radio" name="gender" value="Male">Male
    <input type="radio" name="gender" value="Female">Female<br>
  <input type="submit" value="Register">
</form>
<?php } ?>
