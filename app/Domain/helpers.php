<?php

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
 * @param $collection
 * @param null $selected
 * @return string
 */
function build_root_child_select($collection, $selected = null)
{
    $returnedArray = [];

    foreach ($collection as $item) {
        if ( ! $item['parent_id']) {
            $returnedArray[] = $item;
            continue;
        }
        $returnedArray['child_' . $item['parent_id']][] = $item;
    }

    return build_options($returnedArray, $selected);
}

/**
 * @param array $array
 * @param $selected
 * @param string $html
 * @param string $step
 * @param array $helpArray
 * @return string
 */
function build_options(array $array, $selected, $html = '', $step = '', $helpArray = [])
{
    $originArray = count($helpArray) ? $helpArray : $array;
    foreach ($array as $item) {
        if ( ! is_array($item)) {

            $html .= '<option value="'.$item->id.'"' . ($selected == $item->id ? 'selected=""' : '').'>'. $step . $item->name .'</option>' . PHP_EOL;

            if(isset($originArray['child_' . $item->id])) {
                $html = build_options($originArray['child_' . $item->id], $selected, $html, $step . '**', $array);
            }
        }
    }
    return $html;
}