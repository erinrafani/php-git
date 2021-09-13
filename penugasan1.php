<?php
$speed = 100000;
echo "uang ucup Rp.$speed";
echo "<hr>";

$speed -= 15000;
echo "<br>jajan minum 15000 <br> dengan sisa uang = Rp.$speed ";
echo "<hr>";

$speed -= 25000;
echo "<br>jajan sosis bakar 25000 <br> sisa uang ucup jajan sosis bakar + minum = Rp.$speed";
echo "<hr>";

$speed /= 10;
echo "<br> sedekah ke musafir 6000 <br> sisa uang Rp.$speed - 10%";
echo "<hr>";


$sedekah = $hasil/10;
$jumlah = $hasil-$sedekah;
echo "Sedekah ke musafir 10% $sedekah<br>Sisa uang ucup = $jumlah";
echo "<hr>";

$nemu = $jumlah/50;
echo "$nemu";
?>
