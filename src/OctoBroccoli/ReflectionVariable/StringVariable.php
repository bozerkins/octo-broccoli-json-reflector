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
    /**
     * @param $variable
     * @return bool
     */
    public static function test($variable)
    {
        return is_string($variable);
    }

    /**
     * @var string
     */
    protected $variable;

    /**
     * StringVariable constructor.
     * @param $variable
     * @param ReflectionStructureInterface $structure
     */
    public function __construct($variable, ReflectionStructureInterface $structure)
    {
        $this->variable = $variable;
    }

    /**
     * @return string
     */
    public function getVariable()
    {
        return $this->variable;
    }

    /**
     * @return int
     */
    public function getLength()
    {
        return strlen($this->variable);
    }

    /**
     * @return bool
     */
    public function isSimple()
    {
        return true;
    }
}