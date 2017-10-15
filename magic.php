<?php


include 'magic-classes.php';


$cat = new Pet( "Cat","Bob");
var_dump(isset($cat->name));
echo ($cat->pet." name: ". $cat->name . PHP_EOL);
$clonedCat = clone $cat;
echo ($clonedCat->pet." name: ". $clonedCat->name . PHP_EOL);

var_dump(isset($clonedCat->pet));
//unset($clonedCat->pet);

$cat->pet = "Dog";
$cat->name = "Rex";

$clonedCat->UnexistingMethod(5);
Pet::UnexistingMethod2(8);

echo $cat(12);
echo $cat;
echo $clonedCat;

$fish = new Pet("Fish", "Golden ryba");
var_dump($fish);

$serializedStr = serialize($fish);
echo $serializedStr.PHP_EOL;
var_dump(unserialize($serializedStr));

$horse = new Pet('Horse', 'Jim');
var_export($horse);

