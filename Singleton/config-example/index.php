<?php

class Configuration
{

    private static $instances = [];

    protected array $properties = [];

    protected function __construct()
    {
    }

    protected function __clone()
    {
    }

    public function __wakeup(): void
    {
        throw new \Exception("No strings for singleton");
    }

    /*
     * One more realisation:
     * If used single class object
     * return self::$instance ?? self::$instance = new static();
     */

    public static function getInstance(): Configuration
    {
        $class = static::class;
        if (!isset(self::$instances[$class])) {
            self::$instances[$class] = new static();
        }

        return self::$instances[$class];
    }

    public function getProperties(): array
    {
        return $this->properties;
    }

    public function setProperties(string $key, string $value): void
    {
        $this->properties[$key] = $value;
    }

}

$config = Configuration::getInstance();
$config->setProperties("Width", "1650");

var_dump($config->getProperties());

