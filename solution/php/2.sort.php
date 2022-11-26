<?php
require_once 'fixtures.php';

/**
 * Отсортировать многомерный массив по ключу (любому)
 */

function sortByKey(&$array, $columnKey)
{
    $keyValues = array_column($array, $columnKey);
    array_multisort($keyValues, SORT_ASC, $array);
}

$array = getFixture();
sortByKey($array, 'id');
