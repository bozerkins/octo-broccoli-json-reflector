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
    /**
     * @param $variable
     * @return bool
     */
    public static function test($variable)
    {
        return is_bool($variable);
    }

    /**
     * @var boolean
     */
    protected $variable;

    /**
     * BooleanVariable constructor.
     * @param boolean $variable
     * @param ReflectionStructureInterface $structure
     */
    public function __construct($variable, ReflectionStructureInterface $structure)
    {
        $this->variable = $variable;
    }

    /**
     * @return boolean
     */
    public function getVariable()
    {
        return $this->variable;
    }

    /**
     * @return null
     */
    public function getLength()
    {
        return null;
    }

    /**
     * @return bool
     */
    public function isSimple()
    {
        return true;
    }
}