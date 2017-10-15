<?php
/**
 * Created by PhpStorm.
 * User: delusion
 * Date: 17.10.15
 * Time: 22.51
 */
//require 'World/Creature.php5';

use World\Creatures\Creature;

require __DIR__ . '/vendor/autoload.php';

$rat = new Creature('zifara');
echo $rat.PHP_EOL;