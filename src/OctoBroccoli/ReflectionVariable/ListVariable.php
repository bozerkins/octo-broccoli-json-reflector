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
    /**
     * @param $variable
     * @return bool
     */
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

    /**
     * @var ReflectionVariableInterface[]
     */
    private $variable;

    /**
     * ListVariable constructor.
     * @param $variable
     * @param ReflectionStructureInterface $structure
     */
    public function __construct($variable, ReflectionStructureInterface $structure)
    {
        $this->variable = array();
        foreach($variable as $value) {
            $this->variable[] = $structure->generateReflection($value);
        }
    }

    /**
     * @return ReflectionVariableInterface[]
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
        return count($this->variable);
    }

    /**
     * @return bool
     */
    public function isSimple()
    {
        return false;
    }
}