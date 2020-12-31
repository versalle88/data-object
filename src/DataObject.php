<?php

declare(strict_types=1);

namespace Versalle\Domain;

class DataObject
{
    protected $data = [];

    public function __construct(array $data = [])
    {
        $this->data = $data;
    }

    public function set(string $name, $value): void
    {
        $this->data[$name] = $value;
    }

    public function get(string $name)
    {
        if (array_key_exists($name, $this->data)) {
            return $this->data[$name];
        }

        return null;
    }

    public function has(string $name): bool
    {
        return isset($this->data[$name]);
    }

    public function unset(string $name): void
    {
        unset($this->data[$name]);
    }
}
