<?php
require_once 'fixtures.php';
/**
 * Вернуть из массива только элементы, удовлетворяющие внешним условиям (например элементы с определенным `id`)
 */

function getArrayByCondition($array, $key, $value)
{
    if (empty($array)) {
        return $array;
    }

    return array_filter($array, function ($row) use ($key, $value) {
        if ($row[$key] === $value) {
            return true;
        }
        return false;
    });
}

$key = 'name';
$value = 'test4';
getArrayByCondition(getFixture(), $key, $value);

