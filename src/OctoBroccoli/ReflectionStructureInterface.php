<?php
/**
 * Created by PhpStorm.
 * User: bogdans
 * Date: 1/31/16
 * Time: 1:17 AM
 */

namespace OctoBroccoli;


interface ReflectionStructureInterface
{
    public function register($name, ReflectionRegistration $registration);

    public function generateReflection($variable);
}