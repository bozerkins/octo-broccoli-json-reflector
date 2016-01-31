<?php
/**
 * Created by PhpStorm.
 * User: bogdans
 * Date: 1/31/16
 * Time: 1:19 AM
 */

namespace OctoBroccoli;


use OctoBroccoli\Exception\InvalidRegistrationException;

class ReflectionRegistration extends \ReflectionClass
{
    /**
     * ReflectionRegistration constructor.
     * @param mixed $argument
     * @throws InvalidRegistrationException
     */
    public function __construct($argument)
    {
        if (!is_subclass_of(
            $argument,
            '\\OctoBroccoli\\ReflectionVariable\\ReflectionVariableInterface'
        )) {
            throw new InvalidRegistrationException;
        }
        parent::__construct($argument);
    }
}