<?php

namespace OCP;

class ObjectsHandler
{

    private array $objects;

    public function __construct(array $objects)
    {
        $this->objects = $objects;
    }

    public function handleObjets()
    {
        return array_reduce($this->objects, function ($acc, $object) {
            if (is_a($object, SomeObject::class)) {
                $acc[] = 'handle_' . $object->getObjectName();
            }
            return $acc;
        }, []);
    }
}