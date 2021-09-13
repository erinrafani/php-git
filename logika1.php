<?php

$a = 9;
$b = 10;
$c = 11;


echo "<br>($a < $b) : ". ($a < $b);
echo "<br>($a > $b) && ($a > $b) : "
       . (($a > $b) && ($a > $b)) ;
echo "<br>($a > $c) || ($a < $b) : "
       . (($a > $c) || ($a < $b)) ;
echo "<hr>";

$tono = 10000;
$tini = 8000;
$toni = 15000;

echo "<br>($toni > $tono ) && ($toni > $tini): "
       . (($toni > $tono ) && ($toni > $tini)) ;
echo "<br>($toni > $tini ) && ($toni != $tono): "
       . (($toni > $tini ) && ($toni != $tini)) ;
echo "<hr>";
echo "<br>";

$user = 123;
$pasword = 123;

echo "masukan username : $user";
echo "<br>masukan pasword : $pasword";
echo "<br>Login = "
    . (($user == $user) && ($pasword == $pasword));
echo "<br>";

       ?>
