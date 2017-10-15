<?php
/**
 * Created by PhpStorm.
 * User: delusion
 * Date: 17.10.15
 * Time: 20.07
 */

namespace World\Creatures;


class Creature
{
    protected $type;

    public function __construct($type)
    {
        $this->type = $type;
    }

    public function __toString()
    {
        return "Creature is type of ".$this->type;
    }
}