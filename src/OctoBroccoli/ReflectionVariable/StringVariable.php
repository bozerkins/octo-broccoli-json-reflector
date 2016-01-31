<?php
/**
 * Created by PhpStorm.
 * User: bogdans
 * Date: 1/31/16
 * Time: 1:23 AM
 */

namespace OctoBroccoli\ReflectionVariable;

use OctoBroccoli\ReflectionStructureInterface;

class StringVariable implements ReflectionVariableInterface
{
    public static function test($variable)
    {
        return is_string($variable);
    }

    protected $variable;

    public function __construct($variable, ReflectionStructureInterface $structure)
    {
        $this->variable = $variable;
    }

    public function getVariable()
    {
        return $this->variable;
    }

    public function getLength()
    {
        return strlen($this->variable);
    }

    public function isSimple()
    {
        return true;
    }
}