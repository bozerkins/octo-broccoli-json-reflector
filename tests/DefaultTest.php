<?php

/**
 * Created by PhpStorm.
 * User: bogdans
 * Date: 1/27/16
 * Time: 11:48 PM
 */
class DefaultTest extends PHPUnit_Framework_TestCase
{
    public function testSingleLevelJson()
    {
        $phpStructure = array();
        $phpStructure['id'] = 1522;
        $phpStructure['name'] = 'default name';

        $jsonStructure = json_encode($phpStructure);

//        dump($phpStructure);
//        dump($jsonStructure);

        return $jsonStructure;
    }

    public function testInteger()
    {
        $variable = 15;
        $reflection = new \OctoBroccoli\ReflectionVariable($variable);
        dump(array(
            'type' => $reflection->getType(),
            'value' => $reflection->getValue(),
            'children' => $reflection->getChildren(),
        ));
    }

    public function testDecimal()
    {
        $variable = 5.12315122;
        $reflection = new \OctoBroccoli\ReflectionVariable($variable);

        dump(array(
            'type' => $reflection->getType(),
            'value' => $reflection->getValue(),
            'children' => $reflection->getChildren(),
        ));
    }

    public function testString()
    {
        $variable = "test string";
        $reflection = new \OctoBroccoli\ReflectionVariable($variable);

        dump(array(
            'type' => $reflection->getType(),
            'value' => $reflection->getValue(),
            'children' => $reflection->getChildren(),
        ));
    }

    public function testBoolean()
    {
        $variable = false;
        $reflection = new \OctoBroccoli\ReflectionVariable($variable);

        dump(array(
            'type' => $reflection->getType(),
            'value' => $reflection->getValue(),
            'children' => $reflection->getChildren(),
        ));
    }

    public function testArray()
    {
        $variable = array('yo', false, 55);
        $reflection = new \OctoBroccoli\ReflectionVariable($variable);

        dump(array(
            'type' => $reflection->getType(),
            'value' => $reflection->getValue(),
            'children' => $reflection->getChildren(),
        ));
    }

    public function testObject()
    {
        $variable = array('prop1' => 'yo', 'prop2' => false, 'prop3' => 55);
        $reflection = new \OctoBroccoli\ReflectionVariable($variable);

        dump(array(
            'type' => $reflection->getType(),
            'value' => $reflection->getValue(),
            'children' => $reflection->getChildren(),
        ));

    }

    public function testNull()
    {
        $variable = null;
        $reflection = new \OctoBroccoli\ReflectionVariable($variable);
    }

    public function testCallback()
    {
        $variable = function() {};
        try {
            $reflection = new \OctoBroccoli\ReflectionVariable($variable);
            $this->fail();
        } catch(ErrorException $ex) {

        }
    }

}
