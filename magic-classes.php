<?php



/**
 * Magic Methods
 * __construct(), __destruct(), --done
 * __call(), __callStatic(),    --done
 *  __get(), __set(),           --done
 *
 * __isset(), __unset(),        --done
 * __sleep(), __wakeup(),       --done
 *
 * __toString(), __invoke(),    --done
 * __set_state(),               --done
 * __clone()                    --done
 * __debugInfo()                --done
 *
 */


class Pet {

    private $pet;
    private $name;

    public function __construct($pet, $name)
    {
        $this->pet =$pet;
        $this->name =$name;
    }

    public function __clone()
    {
        $this->name = "Cloned ".$this->name;
    }

    public function __set($property, $value) {
        $this->$property = $value;
    }

    public function __get($property) {
        return $this->$property;
    }

    public function __isset($name)
    {
        echo "Checking does property ".$name." is set".PHP_EOL;
        return isset($this->$name);
    }

    public function __unset($name)
    {
        echo "Unsetting property ".$name.PHP_EOL;
        unset($this->$name);
    }

    public function __call($name, $arguments)
    {
        echo "Calling ".$name." with parameters ".print_r($arguments, true).PHP_EOL;
    }

    static function __callStatic($name, $arguments)
    {
        echo "Calling ".$name." in static context with parameters ".print_r($arguments, true).PHP_EOL;
    }

    public function __invoke($argument)
    {
        return "Strange object invocation as function with parameter ".$argument.PHP_EOL;
    }

    public function __toString()
    {
        return "This is a ".$this->pet." and it is called ".$this->name.PHP_EOL;
    }

    public function __debugInfo()
    {
        return [
            'petType' => $this->pet,
            'petName' => $this->name
        ];
    }

    public function __sleep()
    {
        return array('pet', 'name');
    }

    public function __wakeup()
    {
        if ($this->pet == 'Fish') {
            echo "Get some water tank!!!".PHP_EOL;
        }
    }

    public static function __set_state($an_array)
    {
        $tmp = new Pet($an_array['pet'], $an_array['name']);
        return $tmp;
    }

    public function __destruct()
    {
        echo ($this->pet ." ". $this->name." is dead now :(" . PHP_EOL);
    }
}

