<?php
/**
 * Created by PhpStorm.
 * User: bogdans
 * Date: 1/31/16
 * Time: 2:13 AM
 */

namespace OctoBroccoli\ReflectionVariable;


use OctoBroccoli\ReflectionStructureInterface;

class DoubleVariable implements ReflectionVariableInterface
{
    /**
     * @param $variable
     * @return bool
     */
    public static function test($variable)
    {
        return is_double($variable);
    }

    /**
     * @var float
     */
    protected $variable;

    /**
     * DoubleVariable constructor.
     * @param $variable
     * @param ReflectionStructureInterface $structure
     */
    public function __construct($variable, ReflectionStructureInterface $structure)
    {
        $this->variable = $variable;
    }

    /**
     * @return float
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