<?php
require_once 'fixtures.php';
/**
 * Выделить уникальные записи (убрать дубли) в отдельный массив.
 * В конечном массиве не должно быть элементов с одинаковым id.
 */

function getUniqueIds($array)
{
    if (empty($array)) {
        return $array;
    }

    $temp = [];
    return array_filter($array, function ($row) use (&$temp) {
        if (in_array($row['id'], $temp)) {
            return false;
        } else {
            $temp[] = $row['id'];
            return true;
        }
    });
}

getUniqueIds(getFixture());
