<?php
$uang = 100000;
$air = 15000;
$sosis = 25000;


echo "uang ucup = $uang";
echo "<hr>";

$sisa = $uang - $air;
echo "jajan minum = Rp15000 <br>Sisa uang ucup jajan minum = Rp$sisa";
echo "<hr>";

$hasil = $sisa - $sosis;
echo "jajan sosis bakar = Rp25000<br>Sisa uang ucup jajan sosis bakar + minum = Rp$hasil";
echo "<hr>";

$sedekah = $hasil/10;
$jumlah = $hasil-$sedekah;
echo "Sedekah ke musafir 10% dari Rp$hasil adalah = Rp$sedekah<br>Sisa uang ucup = Rp$jumlah";
echo "<hr>";

$nemu = $jumlah *= 0.5;
$total = $nemu += $jumlah;
echo "nemu uang dijalan = Rp$nemu <br>Sisa uang ucup adalah = Rp$total";
?>