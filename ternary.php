<?php
$tahun = date('Y');
$kabisat = $tahun % 4 == 0;
$jawab = $kabisat ? " Iya " : "Bukan tahun kabisat";
echo $tahun. "<br>";
echo "Tahun Kabisat :". $jawab;
echo "<br>";

?>