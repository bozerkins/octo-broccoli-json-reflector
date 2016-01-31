<?php
/**
 * Created by PhpStorm.
 * User: bogdans
 * Date: 1/31/16
 * Time: 2:12 AM
 */

namespace OctoBroccoli\ReflectionVariable;


use OctoBroccoli\ReflectionStructureInterface;

class BooleanVariable implements ReflectionVariableInterface
{
    public static function test($variable)
    {
        return is_bool($variable);
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
        return null;
    }

    public function isSimple()
    {
        return true;
    }
}