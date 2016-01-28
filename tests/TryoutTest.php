<?php

/**
 * Created by PhpStorm.
 * User: bogdans
 * Date: 1/28/16
 * Time: 1:32 AM
 */
class TryoutTest extends PHPUnit_Framework_TestCase
{
    public function testAnything()
    {
        $object = new \stdClass();
        $object->variable1 = 'test';
        $object->variable2 = 15;
//        dump(get_object_vars($object));
//        $variable = 15;
//        $reflection = new \OctoBroccoli\ReflectionVariable($variable);
    }
}
