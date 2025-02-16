<?php

require_once "../helper/input.php";

$name = input("Name");
echo "Hello $name" .PHP_EOL;

$kuliah = input("Perguruan Tinggi");
echo "$kuliah" . PHP_EOL;


echo "$name kuliahnya di $kuliah";