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

        dump($phpStructure);
        dump($jsonStructure);

        return $jsonStructure;
    }
}
