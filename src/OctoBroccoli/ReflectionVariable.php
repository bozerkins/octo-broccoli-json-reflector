<?php
/**
 * Created by PhpStorm.
 * User: bogdans
 * Date: 1/28/16
 * Time: 12:35 AM
 */

namespace OctoBroccoli;

class ReflectionVariable implements ReflectionVariableInterface
{
    private static $types = array(
        'string',
        'integer',
        'double',
        'boolean',
        'list',
        'dictionary',
        'null'
    );

    private static $typesAtomic = array(
        'string',
        'integer',
        'double',
        'boolean',
        'null'
    );

    private static $typesComposite = array(
        'list',
        'dictionary',
    );

    private $value;
    private $key;
    private $type;
    private $internalType;
    private $children;

    public function __construct($variable, $key = null)
    {
        $this->setValue($variable);
        if (!is_null($key)) {
            $this->setKey($key);
        }
    }

    public function getValue()
    {
        return $this->value;
    }

    private function setValue($value)
    {
        $this->value = $value;
        $this->validate();
    }

    private function castValueTo($type)
    {
        settype($this->value, $type);
    }

    public function getKey()
    {
        return $this->key;
    }

    private function setKey($key)
    {
        $this->key = $key;
    }

    private function validate()
    {
        if (!in_array($this->getType(), self::$types)) {
            throw new InvalidVariableTypeException();
        }
    }

    private function getInternalType()
    {
        if (is_null($this->internalType)) {
            $this->internalType = gettype($this->getValue());
        }
        return $this->internalType;
    }

    public function getType()
    {
        if (is_null($this->type)) {
            $type = $this->getInternalType();
            if ($type === 'object') {
                if (!($this->getValue() instanceof \stdClass)) {
                    $type = 'undefined';
                } else {
                    $type = 'dictionary';
                }
            } elseif ($type === 'array') {
                $keys = array_keys($this->getValue());
                $hasOnlyIntegerKeys = (bool) array_filter(array_map('is_int', $keys));
                if ($hasOnlyIntegerKeys) {
                    $type = 'list';
                } else {
                    $type = 'dictionary';
                    $this->castValueTo('object');
                }
            } elseif ($type === 'NULL') {
                $type = 'null';
            }

            $this->type = $type;
        }

        return $this->type;
    }

    public function getChildren()
    {
        if (is_null($this->children) && $this->isComposite()) {
            $this->children = array();

            if ($this->getType() === 'list') {
                foreach($this->getValue() as $key => $child) {
                    $this->children[$key] = new self($child, $key);
                }
            } elseif ($this->getType() === 'dictionary') {
                foreach(get_object_vars($this->getValue()) as $key => $child) {
                    $this->children[$key] = new self($child, $key);
                }
            }
        }

        return $this->children;
    }

    public function hasChildren()
    {
        return $this->isComposite() ? count($this->getChildren()) > 0 : false;
    }

    public function isComposite()
    {
        return in_array($this->getType(), self::$typesComposite);
    }

    public function isAtomic()
    {
        return in_array($this->getType(), self::$typesAtomic);
    }
}