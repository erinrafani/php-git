<?php
$nilai = 85;
$nilai1 = 83;

$akademik = $nilai < 83;
$atletik = $nilai1 < 82;
$jawab = $nilai >= 85 && $nilai1 >= 83 ? "lulus" : "tidak lulus";

echo "Nilai akademik : ". $nilai . "<br>";
echo "Nilai atletik : " . $nilai1 . "<br>";
echo "Ditanyakan : " . $jawab;
?>