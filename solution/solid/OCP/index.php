<?php
require_once 'SomeObject.php';
require_once 'ObjectsHandler.php';

use OCP\SomeObject;
use OCP\ObjectsHandler;

$objects = [
    new SomeObject('object_1'),
    new SomeObject('object_2')
];

$soh = new ObjectsHandler($objects);
$soh->handleObjets();
