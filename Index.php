<?php
require_once 'Animal.php';
require_once 'Frog.php';
require_once 'Ape.php';

$sheep = new Animal("shaun");
echo "Name: " . $sheep->name . "<br>"; // "shaun"
echo "Legs: " . $sheep->legs . "<br>"; // 4
echo "Cold Blooded: " . $sheep->cold_blooded . "<br>"; // "no"
echo "<br>";

$kodok = new Frog("buduk");
echo "Name: " . $kodok->name . "<br>"; // "buduk"
echo "Legs: " . $kodok->legs . "<br>"; // 4 (inherit dari Animal)
echo "Cold Blooded: " . $sheep->cold_blooded . "<br>"; // "no" (inherit dari Animal)
echo "Jump: ";
$kodok->jump(); // "hop hop"
echo "<br>";
echo "<br>";

$sungokong = new Ape("kera sakti", 2);
echo "Name: " . $sungokong->name . "<br>"; // "kera sakti"
echo "Legs: " . $sungokong->legs . "<br>"; // 2 (inherit dari Animal)
echo "Cold Blooded: " . $sheep->cold_blooded . "<br>"; // "no" (inherit dari Animal)
echo "Yell: ";
$sungokong->yell(); // "Auooo"





?>
