<?php

require_once('object/people.php');

$person1 = new Person();

$person1 -> name = "Frank";
$person1 -> surname = "Clausen";
$person1 -> age = 26;

$person2 = new Person();

$person2 -> name = "David";
$person2 -> surname = "Hug";
$person2 -> age = 28;

echo "The person's name is: ". $persona1->name . "<br>";
echo "The person's name is: ". $persona2->name;

//var_dump($person1);