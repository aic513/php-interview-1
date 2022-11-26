<?php

namespace OCP;

class SomeObject
{
    private string $objectName;

    public function __construct(string $objectName)
    {
        $this->objectName = $objectName;
    }

    public function getObjectName(): string
    {
        return $this->objectName;
    }
}