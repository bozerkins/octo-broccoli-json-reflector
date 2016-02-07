<?php
/**
 * Created by PhpStorm.
 * User: bogdans
 * Date: 1/31/16
 * Time: 1:37 AM
 */

namespace OctoBroccoli\ReflectionVariable;


use OctoBroccoli\ReflectionStructureInterface;

class DictionaryVariable implements ReflectionVariableInterface
{
    /**
     * @param $variable
     * @return bool
     */
    public static function test($variable)
    {
        if (!is_object($variable)) {
            return false;
        }
        if ($variable instanceof \stdClass) {
            return true;
        }
        $hasOnlyIntegerKeys = (bool) array_filter(array_map('is_int', array_keys($variable)));
        if (!$hasOnlyIntegerKeys) {
            return true;
        }
        return false;
    }

    /**
     * @var ReflectionVariableInterface[]
     */
    private $variable;

    /**
     * DictionaryVariable constructor.
     * @param $variable
     * @param ReflectionStructureInterface $structure
     */
    public function __construct($variable, ReflectionStructureInterface $structure)
    {
        $this->variable = array();
        foreach($variable as $key => $value) {
            $this->variable[$key] = $structure->generateReflection($value);
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