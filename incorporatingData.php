
<!-- HTML form -->
<form method="post" action="process.php">
  Name: <input type="text" name="name">
  Age: <input type="text" name="age">
  <input type="submit">
</form>


<!--  Incorporating Data from Forms -->
<?php

$name = $_POST['name'];
$age = $_POST['age'];

echo "Name: " . $name . "<br>";
echo "Age: " . $age;


// Incorporating External APIs

