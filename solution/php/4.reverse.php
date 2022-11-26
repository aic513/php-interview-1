<?php
require_once 'fixtures.php';
/**
 * Изменить в массиве значения и ключи (использовать `name => id` в качестве пары `ключ => значение`)
 * На выходе:
 * ```
 * $array = [
 * "test1" => 1,
 * "test2" => 2,
 * "test4" => 4,
 * "test3" => 3
 * ]
 */

function reverseByKeyValue($array, $key, $value)
{
    if (empty($array)) {
        return $array;
    }

    $temp = [];
    return array_map(function ($row) use ($temp, $key, $value) {
        $temp[$row[$key]] = $row[$value];
        $row = $temp;
        unset($temp);
        return $row;
    }, $array);
}

$key = 'name';
$value = 'id';

reverseByKeyValue(getFixture(), $key, $value);

