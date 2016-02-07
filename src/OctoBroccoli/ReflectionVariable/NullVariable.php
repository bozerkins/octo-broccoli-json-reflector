<?php
/**
 * Created by PhpStorm.
 * User: bogdans
 * Date: 1/31/16
 * Time: 2:13 AM
 */

namespace OctoBroccoli\ReflectionVariable;


use OctoBroccoli\ReflectionStructureInterface;

class NullVariable implements ReflectionVariableInterface
{
    /**
     * @param $variable
     * @return bool
     */
    public static function test($variable)
    {
        return is_null($variable);
    }

    /**
     * @var null
     */
    protected $variable;

    /**
     * NullVariable constructor.
     * @param $variable
     * @param ReflectionStructureInterface $structure
     */
    public function __construct($variable, ReflectionStructureInterface $structure)
    {
        $this->variable = $variable;
    }

    /**
     * @return null
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