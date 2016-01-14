<?php
namespace Raml;


class Annotation implements ArrayInstantiationInterface
{
    /**
     * @var string
     */
    private $name;
    /**
     * @var mixed
     */
    private $value;


    public function __construct($name, $value, ApiDefinition $apiDefinition)
    {
        $this->name = $name;
        $this->value = $value;
    }

    /**
     * @return mixed
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Create a new object from an array of data
     *
     * @param string $key
     * @param array $data
     *
     * @return ArrayInstantiationInterface
     */
    public static function createFromArray($key, array $data = [], ApiDefinition $apiDefinition = null)
    {
        $annotation = new static($key, $data['value'], $apiDefinition);

        return $annotation;
    }
}