<?php
/**
 * Created by PhpStorm.
 * User: bogdans
 * Date: 1/31/16
 * Time: 2:07 AM
 */

namespace OctoBroccoli;

class ReflectionJsonStructure extends ReflectionStructure
{
    public function __construct()
    {
        $this->register(
            'string',
            new ReflectionRegistration('\\OctoBroccoli\\ReflectionVariable\\StringVariable')
        );
        $this->register(
            'integer',
            new ReflectionRegistration('\\OctoBroccoli\\ReflectionVariable\\IntegerVariable')
        );
        $this->register(
            'double',
            new ReflectionRegistration('\\OctoBroccoli\\ReflectionVariable\\DoubleVariable')
        );
        $this->register(
            'boolean',
            new ReflectionRegistration('\\OctoBroccoli\\ReflectionVariable\\BooleanVariable')
        );
        $this->register(
            'null',
            new ReflectionRegistration('\\OctoBroccoli\\ReflectionVariable\\NullVariable')
        );
        $this->register(
            'list',
            new ReflectionRegistration('\\OctoBroccoli\\ReflectionVariable\\ListVariable')
        );
        $this->register(
            'dictionary',
            new ReflectionRegistration('\\OctoBroccoli\\ReflectionVariable\\DictionaryVariable')
        );
    }
}