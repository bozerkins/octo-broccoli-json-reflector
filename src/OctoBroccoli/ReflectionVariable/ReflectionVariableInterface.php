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
    public static function test($variable);

    public function __construct($variable, ReflectionStructureInterface $structure);

    public function getVariable();

    public function getLength();

    public function isSimple();
}