<?php

/**
 * @todo: переименовать с префиксом date
 *
 * @param $value
 * @return string
 */
function iso8601_date($value)
{
    if (is_null($value) || strlen($value) < 1) {
        return null;
    }

    if ($value instanceof \Carbon\Carbon) {
        return $value->toIso8601String();
    }

    return \Carbon\Carbon::parse($value)->toIso8601String();
}

/**
 *
 * @param string $string
 * @param array $params
 * @return mixed
 */
function str_template(string $string, array $params = [])
{
    $search = array_map(function ($v) {
        return '{' . $v . '}';
    }, array_keys($params));
    return str_replace($search, array_values($params), $string);
}

/**
 * Unpack 1,2,3,4,5 comma list to simple array.
 *
 * @param string $value
 * @return array
 */
function array_comma($value) : array
{
    $string = (string) $value;
    if (strlen(trim($string)) < 1) {
        return [];
    }

    return array_map('trim', array_filter(
        (array)explode(',', $string)
    ));
}

/**
 * @todo: переименовать с префиксом array
 *
 * @param array $subarray
 * @param array $array
 * @return bool
 */
function search_subarray(array $subarray, array $array) : bool
{
    foreach ($subarray as $value) {
        if (! in_array($value, $array)) {
            return false;
        }
    }

    return true;
}

/**
 * @todo: переименовать с префиксом array
 *
 * @param $value
 * @param string $key
 * @param array $array
 * @return int|null
 */
function search_array_index($value, string $key, array $array)
{
    for ($i = 0; $i < count($array); $i++) {
        if ($array[$i][$key] == $value) {
            return $i;
        }
    }

    return null;
}