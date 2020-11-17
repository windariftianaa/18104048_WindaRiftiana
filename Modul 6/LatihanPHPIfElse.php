<!DOCTYPE html>
<html>
<body>

<h1>Latihan PHP If Else</h1> <!-- Heading dalam html-->

<?php // tag untuk mengawali php
$t = date("H");

if ($t < "20") { // Jika variabel t kurang dari 20 maka akan tampil statement Have a good day!
  echo "Have a good day!"; 
} else { // ika variabel t tidak kurang dari 20 maka akan tampil statement Have a good night!
  echo "Have a good night!";
}
?> <!-- Tag untuk menutup php -->

</body>
</html>