<?php
require('animal.php');
require('frog.php');
require('ape.php');

$sheep = new Animal("shaun");
echo "Name : " . $sheep->name;
echo "<br>";
echo "Legs : " . $sheep->legs;
echo "<br>";
echo "Cold Blooded : " . $sheep->cold_blooded;
echo "<br><br>";

$kodok = new Frog("buduk");
echo "Name : " . $kodok->name;
echo "<br>";
echo "Legs : " . $kodok->legs;
echo "<br>";
echo "Cold Blooded : " . $kodok->cold_blooded;
echo "<br>";
echo "Jump : " . $kodok->jump();
echo "<br><br>";

$sungokong = new Ape("kera sakti");
echo "Name : " . $sungokong->name;
echo "<br>";
echo "Legs : " . $sungokong->legs;
echo "<br>";
echo "Cold Blooded : " . $sungokong->cold_blooded;
echo "<br>";
echo "Yell : " . $sungokong->yell();
echo "<br>";
