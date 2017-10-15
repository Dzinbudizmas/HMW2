<?php

require_once __DIR__ .'/vendor/autoload.php';

$obj = new World\Creatures\Creature();
echo $obj.PHP_EOL;

$obj2 = new \World\Creatures\Sea\Fish();
echo $obj2.PHP_EOL;

$obj3 = new \World\Creatures\Land\Pet();
echo $obj3.PHP_EOL;

$obj4 = new \World\Creatures\Land\Sky\Bird();
echo $obj4.PHP_EOL;