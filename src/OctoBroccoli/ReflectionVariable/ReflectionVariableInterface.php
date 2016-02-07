<?php
/**
 * Created by PhpStorm.
 * User: bogdans
 * Date: 1/31/16
 * Time: 1:17 AM
 */

namespace OctoBroccoli\ReflectionVariable;


use OctoBroccoli\ReflectionStructureInterface;

interface ReflectionVariableInterface
{
    /**
     * @param $variable
     * @return bool
     */
    public static function test($variable);

    /**
     * ReflectionVariableInterface constructor.
     * @param $variable
     * @param ReflectionStructureInterface $structure
     */
    public function __construct($variable, ReflectionStructureInterface $structure);

    /**
     * @return mixed|null
     */
    public function getVariable();

    /**
     * @return int|null
     */
    public function getLength();

    /**
     * @return bool
     */
    public function isSimple();
}