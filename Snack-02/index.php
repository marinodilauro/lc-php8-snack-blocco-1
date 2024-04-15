<?php

/* 
Con un form passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione):
- che name sia più lungo di 3 caratteri
- che mail contenga un punto e una chiocciola
- che age sia un numero
Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”
*/


$name = $_GET['name'];
$email = $_GET['email'];
$emailChecker1 = "@";
$emailChecker2 = ".";
$age = $_GET['age'];
$ageChecker = "/\D/";

$nameResponse;
$emailResponse;
$ageResponse;

var_dump($name);
var_dump($email);
var_dump($age);

if(strlen($name) > 3) {
 $nameResponse = 'Name is valid';
} else {
  $nameResponse = 'Name must be longer than 3 characters';
}

if(str_contains($email, $emailChecker1) && str_contains($email, $emailChecker2)) {
 $emailResponse = 'Email is valid';
} else {
  $emailResponse = 'Email must contain @ and .';
}

if(preg_match($ageChecker, $age) != 0) {
  $ageResponse = 'Age must be a number';
} else {
  $ageResponse = 'Age is valid';
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Snack-02</title>
</head>

<body>
  
<form action="" method="get">

  <label for="name">Name</label>
  <input type="text" name="name" id="name">
  <label for="email">Email</label>
  <input type="text" name="email" id="email">
  <label for="age">Age</label>
  <input type="text" name="age" id="age">

  <button type="submit">Submit</button>
  
</form>

<div>
  <p><?php echo $nameResponse ?></p>
  <p><?php echo $emailResponse?></p>
  <p><?php echo $ageResponse?></p>
</div>

</body>

</html>