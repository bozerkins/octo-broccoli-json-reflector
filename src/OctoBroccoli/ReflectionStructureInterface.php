<?php
/**
 * Created by PhpStorm.
 * User: bogdans
 * Date: 1/31/16
 * Time: 1:17 AM
 */

namespace OctoBroccoli;


use OctoBroccoli\ReflectionVariable\ReflectionVariableInterface;

interface ReflectionStructureInterface
{
    /**
     * @param $name
     * @param ReflectionRegistration $registration
     */
    public function register($name, ReflectionRegistration $registration);

    /**
     * @param $variable
     * @return ReflectionVariableInterface
     */
    public function generateReflection($variable);
}