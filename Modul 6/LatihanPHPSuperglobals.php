<!DOCTYPE html>
<html>
<body>

<h1>Latihan PHP Superglobals</h1> <!-- Heading dalam html-->

<?php // tag untuk mengawali php
$x = 75;
$y = 25;
 
function addition() { // mendefinisikan fungsi addition
  $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
}
 
addition(); //Memanggil fungsi addition
echo $z; //Menampilkan value dari variabel z yang merupakan penjumlahan dari variabel x dan y
?> <!-- Tag untuk menutup php -->

</body>
</html>