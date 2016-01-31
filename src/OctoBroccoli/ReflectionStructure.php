<?php
/**
 * Created by PhpStorm.
 * User: bogdans
 * Date: 1/31/16
 * Time: 1:26 AM
 */

namespace OctoBroccoli;


class ReflectionStructure implements ReflectionStructureInterface
{
    /**
     * @var ReflectionRegistration[]
     */
    private $registrations = array();

    public function register($name, ReflectionRegistration $registration)
    {
        $this->registrations[$name] = $registration;
    }

    public function generateReflection($variable)
    {
        foreach($this->registrations as $registration) {
            $isApplicable = call_user_func(array($registration->getName(), 'test'), $variable);
            if ($isApplicable) {
                return $registration->newInstance($variable, $this);
            }

        }
        return null;
    }
}