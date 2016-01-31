<?php
/**
 * Created by PhpStorm.
 * User: bogdans
 * Date: 1/31/16
 * Time: 2:13 AM
 */

namespace OctoBroccoli\ReflectionVariable;

use OctoBroccoli\ReflectionStructureInterface;

class ListVariable implements ReflectionVariableInterface
{
    public static function test($variable)
    {
        if (!is_array($variable)) {
            return false;
        }
        $hasOnlyIntegerKeys = (bool) array_filter(array_map('is_int', array_keys($variable)));
        if ($hasOnlyIntegerKeys) {
            return true;
        }

        return false;
    }

    private $variable;

    public function __construct($variable, ReflectionStructureInterface $structure)
    {
        $this->variable = array();
        foreach($variable as $value) {
            $this->variable[] = $structure->generateReflection($value);
        }
    }

    public function getVariable()
    {
        return $this->variable;
    }

    public function getLength()
    {
        return count($this->variable);
    }

    public function isSimple()
    {
        return false;
    }
}