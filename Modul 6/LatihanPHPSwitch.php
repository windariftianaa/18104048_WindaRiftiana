<!DOCTYPE html>
<html>
<body>

<h1>Latihan PHP Switch</h1> <!-- Heading dalam html-->

<?php // tag untuk mengawali php
$favcolor = "red";

switch ($favcolor) { //Melakukan pemilihan case
  case "red":
    echo "Your favorite color is red!"; // Jika case red makan akan tampil
    break;
  case "blue":
    echo "Your favorite color is blue!";// Jika case blur makan akan tampil
    break;
  case "green":
    echo "Your favorite color is green!";// Jika case green maka akan tampil
    break;
  default:
    echo "Your favorite color is neither red, blue, nor green!"; // Mendifinisikan value default
}
?> <!-- Tag untuk menutup php -->

</body>
</html>