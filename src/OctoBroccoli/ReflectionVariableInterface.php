<?php
/**
 * Created by PhpStorm.
 * User: bogdans
 * Date: 1/31/16
 * Time: 1:10 AM
 */

namespace OctoBroccoli;


interface ReflectionVariableInterface
{
    public function __construct($variable, $key = null);
    public function getType();
    public function getChildren();
    public function hasChildren();

    public function isComposite();
    public function isAtomic();
}